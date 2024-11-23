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

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $news = \App\Models\News::create([
            'title'=> $validated['title'],
            'content'=> $validated['content'],
            'user_id' => auth()->id(),
        ]);

        return response()->json(['success' => true, 'message' => 'News created successfully!', 'data' => $news]);
    }
}
