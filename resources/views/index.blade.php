@extends('layouts.layout')

@section('title', 'Index page')

@section('content')
  <h1>Hello and welcome to the pollster application</h1>
  <ul>
    <li>
      <a href="{{ route('questions.index')}}">
        All the questions
      </a>
    </li>
    <li>
      <a href="{{ route('questions.create') }}">
        Create Question
      </a>
    </li>
    <hr/>
    <li>
      <a href="{{ route('choices.index') }}">
        All Choices
      </a>
    </li>
  </ul>
@endsection