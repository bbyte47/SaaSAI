<?php

namespace App\Http\Controllers;

use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        return view("dashboard");
    }

    public function blogGenerator(Request $request)
    {
        $topic = $request->blogpost;
        $prompt = "Write a blog post about " . $topic . "\n";
        
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);
        // dd($result);
        return view('dashboard',['result' => $result->choices[0]->message->content]);
        // echo $result->choices[0]->message->content; // Hello! How can I assist you today?
    }
    public function imageGenerator(Request $request)
    {
        $topic = $request->imagepost;
        $prompt = "Create an image about " . $topic . "\n";
        
        $response = OpenAI::images()->create([
            'model' => 'dall-e-2',
            'prompt' => $prompt,
            'n' => 1,
            'size' => '256x256',
            'response_format' => 'url',
        ]);
        // dd($response);
        return view('dashboard',['response' => $response->data[0]->url]);
        // echo $result->choices[0]->message->content; // Hello! How can I assist you today?
    }
}
