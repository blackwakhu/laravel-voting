<?php

namespace App\Http\Controllers;


use App\Models\question;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    // 
    public function index(){
        $questions = question::all();
        return view('question/index', compact('questions'));
    }
    // 
    public function create(){
        return view('question/new-form');
    }
    // 
    public function store(Request $request){
        $question = question::create([
            'question' => $request->input('question')
        ]);
        return redirect()
            ->route('questions.index')
            ->with("success", "question created successfully");
    }

}
