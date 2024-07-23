@extends('layouts.layout')

@section('title', 'Question Detail')

@section('content')
  <h1>Question</h1>

  
  <p>{{ $quest->question_text }}</p>

  <table>
    <tbody>
    @foreach ( $quest->choices as $choice )
      <tr>
        <td>{{ $choice->id }}</td>
        <td>{{ $choice->choice_text }}</td>
        <td>{{ $choice->votes }}</td>
        <td>
          <button>
            <a href="{{ route('choices.delete', $choice) }}"> 
              delete
            </a>
          </button>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection