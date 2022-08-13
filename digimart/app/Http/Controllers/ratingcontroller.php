<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\rating;
use App\Models\stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ratingcontroller extends Controller
{
    public function rate(Request $request,){
        $rating=rating::all();
        $user_id=Auth::user()->email;
        $username=Auth::user()->name;
        $lantec=stock::all();
        $ratingProd_id=$request->input('product_id');
        $product_check=stock::where('id',$ratingProd_id)->exists();


        $rating= new rating;
        if ($product_check) {
            $purchase_check=order::where('client_mail',$user_id)->where('product_id',$ratingProd_id)
            ->get();
                    if ($purchase_check->count()>0) {
                        $already_rated=rating::where('mail',$user_id)
                        ->where('product_id',$ratingProd_id)->first();
                        if ($already_rated) {
                            $already_rated->rate=$request->input('rate');
                            $already_rated->update();
                            return redirect()->back()->with('status',"thanks for rate update!!");
                        }
                        else {
                $rating->product_id=$ratingProd_id;
                $rating->mail=$user_id;
                $rating->rate=$request->input('rate');
                $rating->save();
                return redirect()->back()->with('status',"Thank You");
                        }

                    }
                    else{
                        return redirect()->back()->with('status',"You cannot rate unpurchased product!!");
                    }

        }
        else {
            return redirect()->back()->with('status',"The product does not exist!!!");
        }
        }
}

