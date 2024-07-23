<ul>
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="{{ route('questions.create')}}">New Question</a></li>
</ul>
<h1>All the questions</h1>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>Question</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
      <tr>
        <td>{{ $question->id }}</td>
        <td>
          <a href="{{ route('questions.detail', $question) }}">
            {{ $question->question_text }}
          </a>
          </td>
        <td>
          <a href="{{ route('choices.create', $question) }}">
            New Choice
          </a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>