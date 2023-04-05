<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('FrontEnd.home');
    }
    public function music()
    {
     return view('FrontEnd.music');

    }

    public function music2(){
        return view('FrontEnd.music2');
     }

     public function music3(){
        return view('FrontEnd.music3');
     }

     public function music4(){
        return view('FrontEnd.music4');
     }

     public function music5(){
        return view('FrontEnd.music5');
     }

     public function music6(){
        return view('FrontEnd.music6');
     }

     public function music7(){
        return view('FrontEnd.music7');
     }
    public function about(){
        return view('FrontEnd.about');
    }
}
