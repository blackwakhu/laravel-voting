@extends('layouts.layout')

@section('title', 'Question Detail')

@section('content')
  <div class="question-detail">
    <h1 id="title">Question</h1>
    <p id="question-text">{{ $quest->question_text }}</p>
   
    <button class="hide-new-choice-btn btn">
      New Choice
    </button>
    <div class="new-choice-detail">
      <form action="{{ route('choices.store', $quest) }}" method="POST" class="new-choice-detail-form">
        @csrf
        <label for="choice">Choice</label>
        <input type="text" id="choice" name="choice"/>
        <input type="submit" value="Submit"/>
      </form>
    </div>
    <table class="question-detail-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Choice</th>
          <th>Votes</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
      @foreach ( $quest->choices as $choice )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $choice->choice_text }}</td>
          <td>{{ $choice->votes }}</td>
          <td>
            <form method="POST" action="{{route('choices.vote', $choice)}}">
              @csrf
              @method('PUT')
              <input type='submit' value='vote' class="btn submit-btn"/>
            </form>
          </td>
          <td>
            <button class="btn delete-btn">
              <a href="{{ route('choices.delete', $choice) }}"> 
                delete
              </a>
            </button>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection