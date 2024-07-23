<?php

namespace App\Http\Controllers;


use App\Models\Question;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    // returns all the questions
    public function index(){
        $questions = Question::all();
        return view('question/index', compact('questions'));
    }
    // opens the create a question view
    public function create(){
        return view('question/new-form');
    }
    // saves the question to the database
    public function store(Request $request){
        $question = Question::create([
            'question_text' => $request->input('question')
        ]);
        return redirect()
            ->route('questions.index')
            ->with("success", "question created successfully");
    }
    // shows a single question with corresponding choices
    public function detail(Question $quest){
        $quest->load('choices');
        return view("question/detail", compact('quest'));
    }
    // deletes a question
    public function delete(Question $quest){
        $quest->delete();
        return redirect()
            ->route('questions.index')
            ->with("success", "question deleted successfully");
    }

}
