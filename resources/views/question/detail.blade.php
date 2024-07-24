@extends('layouts.layout')

@section('title', 'Question Detail')

@section('content')

  <h1>Question</h1>
  <p>{{ $quest->question_text }}</p>
 
  <button class="hide-new-choice-btn btn">
    New Choice
  </button>
  <div class="new-choice-detail">
    <form action="{{ route('choices.store', $quest) }}" method="POST">
      @csrf
      <label for="choice">Choice</label>
      <input type="text" id="choice" name="choice"/>
      <input type="submit" value="Submit"/>
    </form>
  </div>
  <table>
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
            <input type='submit' value='vote'/>
          </form>
        </td>
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