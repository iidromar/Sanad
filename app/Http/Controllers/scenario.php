<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class scenario extends Controller
{
    public function index(){
        return view('index');
    }
    public function search(Request $request){
        $search = $request->search;
        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $search
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ])
            ->json();
        $response = $data['choices'][0]['message'];
        $final_response = $response['content'];
        return view('after_search', compact('final_response'));

    }
    public function leaderboard(){
        return view('leaderboard');
    }
    public function roadmap(){
        return view('roadmap');
    }
    public function fetch_ai(){
        $search = "Write a scenario for a leader to make a decision with options A, B, C and D. separate each option with a new line. specify the correct answer with this formula: correct answer() and explain why";

        $data = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPENAI_API_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $search
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 200,
                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ])
            ->json();
        $response = $data['choices'][0]['message'];
        $final_response = $response['content'];
        return view('scenario', compact('final_response'));


    }
}
