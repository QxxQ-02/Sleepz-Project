<?php

namespace App\Http\Controllers;

use App\Models\Sounds;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    public function search(Request $request){
        if($request->ajax()){
            $data=Sounds::where('id', 'like','%'.$request->search.'%')
            ->orwhere('title', 'like','%'.$request->search.'%')
            ->orwhere('categories', 'like','%'.$request->search.'%')->get();

            $output='';

        if(count($data)>0){
           
        }
        else{
            $output .='No Result';
        }
        }
        return $output;
    }
}
