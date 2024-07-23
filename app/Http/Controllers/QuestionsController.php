<?php

namespace App\Http\Controllers;


use App\Models\Question;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    // 
    public function index(){
        $questions = Question::all();
        return view('question/index', compact('questions'));
    }
    // 
    public function create(){
        return view('question/new-form');
    }
    // 
    public function store(Request $request){
        $question = Question::create([
            'question_text' => $request->input('question')
        ]);
        return redirect()
            ->route('questions.index')
            ->with("success", "question created successfully");
    }
    // 
    public function detail(Question $quest){
        $quest->load('choices');
        return view("question/detail", compact('quest'));
    }

}
