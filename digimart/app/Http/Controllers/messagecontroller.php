<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class messagecontroller extends Controller
{
    public function message(Request $request)
    {
        $this->validate($request, [
            'Name'=>'Required|string|max:255',
            'Email'=>'Required|email|string',
            'Message' =>'Required||string'
            ]);



                        $digi=new message;
                        $digi->name=$request->input('Name');
                        $digi->mail=$request->input('Email');
                        $digi->message=$request->input('Message');
                        $digi->save();
                        return redirect('/digimart');


    }
}
