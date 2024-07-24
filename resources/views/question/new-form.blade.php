@extends('layouts.layout')

@section('title', 'New Question')

@section('content')
  <div class="new-form-questions">
    <h1 id="title">New Question</h1>
    <form method="post" action="{{ route('questions.store') }}" class="new-question-form">
      @csrf
      <label for="question">Question</label>
      <input type="text" name="question" id="question" placeholder="Which computer maker do you like" required/>
      <input type="submit" value="Submit" class="btn submit-btn"/>
    </form>
  </div>
@endsection