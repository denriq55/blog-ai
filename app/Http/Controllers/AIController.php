<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AIService;

class AIController extends Controller
{
    public function showForm() {
        return view('ai_form');
    }

    public function generate(Request $request, AIService $aiService) {
        $request->validate([
            'prompt' => 'required|string|min:5|max:255'
        ]);

        //Get user input
        $userPrompt = $request->input('prompt');

        //Build full prompt 
         $fullPrompt = "
            You are a professional tech blogger.
            Write a blog post titled: \"{$userPrompt}\".
            The post should be at least 500 words, written in a conversational tone, and formatted in markdown.
            ";

        try {
            $response = $aiService->generateText($fullPrompt);
            return view('ai_form', ['output' => $response]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'AI request failed: ' . 
            $e->getMessage()]);
        }
    }
}
