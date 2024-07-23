<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;

use Illuminate\Http\Request;

class ChoicesController extends Controller
{
    // displays all the choices with corresponding questions that have not been deleted
    public function index(){
        $choices = Choice::with('question')->get()->filter(function ($choice) {
            return $choice->question !== null;
        });
        return view('choice/index', compact('choices'));
    } 
    // points to the create choice view
    public function create(Question $quest){
        $question_txt = $quest->question_text;
        return view('choice/new-form', compact('question_txt', 'quest'));
    }
    // adds a new choice to a question
    public function store(Request $request, Question $quest){
        $choice = Choice::create([
            'choice_text' => $request->input('choice'),
            'question_id' => $quest->id
        ]);
        return redirect()
            ->route('questions.detail', ['quest' => $quest])
            ->with('success', "choice created successfully");
    }
    // deletes a choice
    public function delete(Choice $choice){
        $choice->delete();
        return redirect()
            ->route('questions.detail', ['quest' => $choice->question])
            ->with('success', "choice deleted successfully");
    }
    // vote for a choice
    public function vote(Choice $choice){
        $choice->votes++;
        $choice->save();
        return redirect()
            ->route('questions.detail', ['quest' => $choice->question])
            ->with('success', "choice votes updated successfully");
    }
}
