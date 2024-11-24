<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(HttpRequest $request)
    {
        // Validate the input
        $validated = $request->validate([
            'text' => 'required|string', 
        ]);

        
        $newsRequest = \App\Models\Request::create([
            'user_id' => auth()->id(),
            'text' => $validated['text'],
        ]);

        // Return a response
        return response()->json([
            'success' => true,
            'message' => 'News request submitted successfully!',
            'data' => $newsRequest,
        ]);
    }
}
