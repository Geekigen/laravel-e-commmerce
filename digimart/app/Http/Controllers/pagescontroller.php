<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Models\newsletter;
use App\Models\order;
use App\Models\rating;
use App\Models\stock;
use App\Models\wishlist;
use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function admin()
    {
         $stockss= stock::all();
        $orders=order::all();

       return view('layouts.admin',[
   'stocks'=> $stockss,
   'orders'=>$orders
   ]);
}
public function ordershow($id){
    $orders=order::find($id);
    $order=$orders->order;
    $wishlist=wishlist::all();
    $confirmedOrder=wishlist::where('order',$order)->get();
    $total=$confirmedOrder->sum('price');
    return view('layouts.order',[
        'orders'=>$orders,
        'confirmedOrder'=>$confirmedOrder,
        'total'=>$total
        ]);
}

public function search(Request $request)

    {


$empty="Not found";
$searched=$request->input('search');
        $lantec=stock::where('product_name','LIKE','%'.$searched.'%')
        ->orwhere('description','LIKE','%'.$searched.'%')
        ->orwhere('brand','LIKE','%'.$searched.'%')
        ->orwhere('category','LIKE','%'.$searched.'%')
        ->orwhere('processor','LIKE','%'.$searched.'%')
        ->orwhere('speed','LIKE','%'.$searched.'%')
        ->paginate(24);
        return view('layouts.search' ,['lantec'=>$lantec,'empty'=>$empty]);
    }

    public function all(){
        $product=stock::where('category','laptops')
        ->orwhere('category','laptop bag')
        ->orwhere('category','memorycards')
        ->orwhere('category','chargers')
        ->orwhere('category','games')
        ->orwhere('category','miscallenous')
        ->orwhere('product_name','LIKE','%'."dell".'%')
        ->orwhere('product_name','LIKE','%'."memory card".'%')
        ->orwhere('product_name','LIKE','%'."macbook".'%')
        ->inRandomOrder()
        ->paginate(24);

        return view('layouts.all')->with('product',$product);

        ;

    }
     public function reseller(){
         return view('layouts.reseller');

     }

     public function low(){
         $stocks =stock::orderBy('price', 'asc')->paginate(24);

        return view('layouts.index')
        ->with([
 'stocks'=> $stocks

        ]);
     }
     public function high(){
         $stocks =stock::orderBy('price', 'desc')->paginate(24);

        return view('layouts.index')
        ->with([
 'stocks'=> $stocks

        ]);
     }
     public function recent(){
         $stocks =stock::latest()
        ->first()
        ->paginate(24);

        return view('layouts.index')
        ->with([
 'stocks'=> $stocks

        ]);
     }
     public function alllaptops(){
         $stocks =stock::where('category','laptops')->paginate(24);
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function corei7(){
         $stocks =stock::where('processor','LIKE','%'."i7".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function corei5(){
         $stocks =stock::where('processor','LIKE','%'."i5".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function corei3(){
         $stocks =stock::where('processor','LIKE','%'."i3".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     } public function celeron(){
         $stocks =stock::where('processor','LIKE','%'."celeron".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function amd(){
         $stocks =stock::where('processor','LIKE','%'."amd".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function touch(){
         $stocks =stock::where('description','LIKE','%'."touch ".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function tablet(){
         $stocks =stock::where('category','tablet');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function dell(){
         $stocks =stock::where('brand','dell');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function hp(){
         $stocks =stock::where('brand','hp');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function macbook(){
         $stocks =stock::where('brand','macbook');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function lenovo(){
         $stocks =stock::where('brand','lenovo');

        $suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function taifa(){
         $stocks =stock::where('brand','taifa');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function toshiba(){
         $stocks =stock::where('brand','toshiba');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function other(){
         $stocks =stock::where('brand','other');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function backlit(){
         $stocks =stock::where('description','LIKE','%'."backlit ".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function games(){
         $stocks =stock::where('category','gaming');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function bags(){
         $stocks =stock::where('category','laptop bags');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function flower(){
         $stocks =stock::where('category','flower cables');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function bat(){
         $stocks =stock::where('description','LIKE','%'."battery".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function stick(){
         $stocks =stock::where('description','LIKE','%'."stick".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }

     public function chargers(){
         $stocks =stock::where('category','chargers');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function keyboard(){
         $stocks =stock::where('description','LIKE','%'."keyboard".'%');
$suggested=stock::where('category','laptops')
->orwhere('category','laptop bag')
->orwhere('category','memorycards')
->orwhere('category','chargers')
->orwhere('category','games')
->orwhere('category','miscallenous')
->orwhere('product_name','LIKE','%'."dell".'%')
->orwhere('product_name','LIKE','%'."memory card".'%')
->orwhere('product_name','LIKE','%'."macbook".'%')
->inRandomOrder()
->paginate(12);
        return view('layouts.indexs')
        ->with([
 'stocks'=> $stocks,
'suggested'=>$suggested

        ]);
     }
     public function about(){
$message=message::paginate(10);

        return view('layouts.about')
        ->with('message',$message);
     }

     public function contact(){

        return view('layouts.contact');

     }
     public function newsletter(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            ]);
            $news=newsletter::all();
            $news=new newsletter();
            $news->email=$request->input('email');
            $news->save();
            return redirect('/digimart')->with('status',"email submitted");
     }
     public function index()
     {
          $stocks =stock::all();

         return view('layouts.index')
         ->with([
  'stocks'=> $stocks

         ])
         ;
     }
     public function terms()
     {


         return view('layouts.terms')
         ;
     }
     public function policy()
     {


         return view('layouts.policy')
         ;
     }
}
