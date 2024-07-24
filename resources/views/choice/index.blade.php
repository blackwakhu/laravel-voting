@extends('layouts.layout')

@section('title', 'All Choices')

@section('content')
  <div class="index-choice">
    <h1 id="title">All the choice</h1>
    <table class="index-choice-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Choice</th>
          <th>Question</th>
          <th>Votes</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($choices as $choice)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $choice->choice_text }}</td>
            <td class="index-choice-table-a">
              <a href="{{route('questions.detail', $choice->question)}}">
                {{ $choice->question->question_text }}
              </a>
            </td>
            <td>{{ $choice->votes }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection