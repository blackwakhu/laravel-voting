<?php

namespace App\Http\Controllers;

use App\Models\choices;
use App\Models\question;

use Illuminate\Http\Request;

class ChoicesController extends Controller
{
    // 
    public function index(){
        $choices = choices::all();
        return view('choice/index', compact('choices'));
    }
    //
    public function create(question $quest){
        $question_txt = $quest->question_text;
        return view('choice/new-form', compact('question_txt', 'quest'));
    }
    // 
    public function store(Request $request, question $quest){
        $choice = choices::create([
            'choice_text' => $request->input('choice'),
            'question_id' => $quest->id
        ]);
        return redirect()
            ->route('questions.index')
            ->with("success", "choice created successfully");
    }
}
