<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = \App\Models\News::all();
        return response()->json(['success'=> true, 'data' => $news]);
    }

    public function store(Request $request){
        
    }
}
