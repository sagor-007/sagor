<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller

{
    public function Contact(){ 
        return view ('Contact/Contactpage');
    }


    public function contactsubmit(Request $request){ 

        DB::table('php')->insert([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'email' => $request->email,

        ]);

        return redirect('Contact/contactshow');
        
    }


    public function datashow (){ 
        $users = DB::table('php')
            ->get();
     
        return view ('contactshow',['users'=>$users]);
                                 
    }


}



