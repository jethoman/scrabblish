<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScabblishController extends Controller
{
    public function index(){
        return 'View all the letters...';
    }
    public function show($letter = null){
         return view('letter.show')->with(['letter'=>$letter]);
    }
}
