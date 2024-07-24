@extends('layouts.layout')

@section('title', 'All Questions')

@section('content')
  <div class="index-questions">
    <h1 id="title">All the questions</h1>
    <table class="index-questions-table">
      <tbody>
        @foreach ($questions as $question)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="index-question-table-title">
              <a href="{{ route('questions.detail', $question) }}">
                {{ $question->question_text }}
              </a>
            </td>
            <td>
              <button class="add-btn btn">
                <a href="{{ route('choices.create', $question) }}">
                  New Choice
                </a>
              </button>
            </td>
            <td>
              <button class="delete-btn btn">
                <a href="{{ route('questions.delete', $question)}}">
                  Delete
                </a>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection