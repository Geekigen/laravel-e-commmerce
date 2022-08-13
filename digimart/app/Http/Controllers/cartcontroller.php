<?php

namespace App\Http\Controllers;

use App\Mail\orders;
use App\Models\order;
use App\Models\stock;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class cartcontroller extends Controller
{
    public function cart()
    {
        return view('layouts.cart');
    }

    public function check(){
         return view('layouts.checkout');
    }
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $lantec = stock::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id]= [
                "name" => $lantec->product_name,
                "id"=>$lantec->id,
                "quantity" => 1,
                "price" => $lantec->price,
                "image" => $lantec->image1
            ];
        }

        session()->put('cart', $cart);
        return back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    // wishlist
    public function wishlist(Request $request)
    {

        $data = $request->session()->all();
        foreach ($data['cart'] as $cart) {
$orders=new wishlist;
$orders->product_name=$cart['name'];
$orders->product_id=$cart['id'];
$orders->price=$cart['price'];
$orders->quantity=$cart['quantity'];
$orders->image=$cart['image'];
$orders->order=json_encode($data['cart']);
$orders->save();
}



return redirect('/checkout');

    }

    public function checkout(Request $request)
    {
        $this->validate($request, [
            'name'=>'Required|string',
            'town'=>'Required|string',
            'number' =>'Required| min:10|max:13'
            ]);

        $data = $request->session()->all();
$adminmail=env('ADMIN_MAIL');
        $orders=new order;
        foreach ($data['cart'] as $cart){
$orders->product_name=$cart['name'];
$orders->product_id=$cart['id'];
$orders->price=$cart['price'];
$orders->quantity=$cart['quantity'];
$orders->image=$cart['image'];
}
$orders->order=json_encode($data['cart']);
$orders->town=$request->input('town');
$orders->client_mail=Auth::user()->email;
$orders->client_name=$request->input('name');
$orders->client_number=$request->input('number');
$orders->save();
// env admin mails

        Mail::to($adminmail)->send(new orders);


$request->session()->forget('cart');
return redirect('/');

    }
}
