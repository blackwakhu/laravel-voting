<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;

use Illuminate\Http\Request;

class ChoicesController extends Controller
{
    // 
    public function index(){
        $choices = Choice::all();
        return view('choice/index', compact('choices'));
    }
    //
    public function create(Question $quest){
        $question_txt = $quest->question_text;
        return view('choice/new-form', compact('question_txt', 'quest'));
    }
    // 
    public function store(Request $request, Question $quest){
        $choice = Choice::create([
            'choice_text' => $request->input('choice'),
            'question_id' => $quest->id
        ]);
        return redirect()
            ->route('questions.index')
            ->with('success', "choice created successfully");
    }
}
