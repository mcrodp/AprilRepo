<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController1 extends Controller
{
    //


Public function show_front($id) {
    return 
    
    'hey dude, I am from MyController1 and my id is' .$id;
}

Public function just_show($id,$name,$pw){
    return view ('page1.otherpage', compact('id','name' ,'pw'));
}

}