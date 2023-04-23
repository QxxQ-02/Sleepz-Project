<?php

namespace App\Http\Controllers;

use App\Models\Sounds;
use Illuminate\Http\Request;

class SoundsController extends Controller
{
    function search(Request $request)
    {
        $data=Sounds::where('id', 'like','%'.$request->search.'%')
        ->orwhere('title', 'like','%'.$request->search.'%')
        ->orwhere('categories', 'like','%'.$request->search.'%')
        ->get();
    }
}
