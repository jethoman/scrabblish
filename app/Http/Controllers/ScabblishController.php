<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScabblishController extends Controller
{
    public function index(){
        return 'View all the letters...';
    }
    public function view($letter = null){
         return 'You want the letter '.$letter;
    }
}
