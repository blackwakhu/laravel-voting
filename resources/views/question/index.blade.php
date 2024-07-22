<ul>
  <li><a href="/">Home</a></li>
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
        <td>{{ $question->question_text }}</td>
      </tr>
    @endforeach
  </tbody>
</table>