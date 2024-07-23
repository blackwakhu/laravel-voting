<h1>Question</h1>

<p>{{ $quest->question_text }}</p>

<ul>
  @foreach ( $quest->choices as $choice )
    <li>{{ $choice->choice_text }}</li>
  @endforeach
</ul>