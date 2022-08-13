<?php

namespace App\Http\Controllers;

use App\Http\Requests\validate;
use App\Models\rating;
use App\Models\stock;
use Illuminate\Http\Request;

class digimart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock =stock::paginate(9011);

        return view('layouts.index')
        ->with([
 'stocks'=>$stock

        ])
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name'=>'Required',
            'description'=>'Required',
            'price' =>'Required|integer',
            'brand' =>'Required|string',
            'processor' =>'Required|string',
            'speed'=>'Required',
            'image'=>'required',
            'image.*'=> 'image|mimes:jpeg,png,jpg|max:500'
            ]);

$file=$request->file('image');
array_slice($file, 0, 4) ;

                    //multiple image entry

                        foreach ($file as $image) {
                                $newImageName=time().'_'.rand(1,100).'.'.$image->extension();
                            $image->move(public_path('images'),$newImageName);
                            $data[]=$newImageName;

                        }

                        $digi=new stock();
                        $digi->product_name=$request->input('product_name');
                        $digi->description=$request->input('description');
                        $digi->price=$request->input('price');
                        $digi->brand=$request->input('brand');
                        $digi->processor=$request->input('processor');
                        $digi->speed=$request->input('speed');
                        $digi->category=$request->input('category');
                        $digi->image1=json_encode($data[0]);
                        $digi->image2=json_encode($data[1]);
                        $digi->image3=json_encode($data[2]);
                        $digi->image4=json_encode($data[3]);
                        $digi->save();
                        return redirect('/digimart/create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stocks=stock::find($id);

        $lantec_cat=$stocks->processor;
        // similar products

    $similar=stock::where('processor',$lantec_cat)
    ->where('id','!=',$id)
    ->inRandomOrder()
    ->limit(6) // here is yours limit
    ->get();

    $rating=rating::where('product_id',$stocks->id)->get();
    $rating_total=rating::where('product_id',$stocks->id)->sum('rate');

        if ($rating->count()>0) {
            $rating_value=$rating_total/$rating->count();
        }
       else {
    $rating_value=0;
            }

        return view('layouts.show')
        ->with('stocks',$stocks)
        ->with('rating',$rating)
        ->with('rating_value',$rating_value)
        ->with('similar',$similar)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stocks=stock::find($id)->first();
    return view('layouts.edit')
    ->with('stocks',$stocks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validate $request, $id)
    {

        $request->validated();

        $stocks=stock::where('id',$id)
        ->update([
          'product_name'=>$request->input('product_name'),
          'price'=>$request->input('price'),
          'processor'=>$request->input('processor'),
          'speed'=>$request->input('speed'),
          'category'=>$request->input('category'),
          'brand'=>$request->input('brand'),
          'description'=>$request->input('description'),

        ]);
        return redirect('/admin') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lantec=stock::find($id)->first();
        $lantec->delete();
       return redirect('/account');
    }
}
