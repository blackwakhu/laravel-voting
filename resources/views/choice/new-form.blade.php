@extends('layouts.layout')

@section('title', 'Index page')

@section('content')
  <div class="new-form-choice">
    <h1 id="title">New Choice for: </h1>
    <p id='question-text'>
      <a href="{{ route('questions.detail', $quest) }}">
        {{$question_txt}}
      </a>
    </p>
    <form action="{{ route('choices.store', $quest) }}" method="POST" class="new-choice-form">
      @csrf
      <label for="choice">Choice</label>
      <input type="text" id="choice" name="choice"/>
      <input type="submit" value="Submit" class="btn submit-btn"/>
    </form>
  </div>
@endsection