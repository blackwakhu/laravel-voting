<a href="{{ route('home') }}">home</a>
<h1>All the choice</h1>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>choice</th>
      <th>question id</th>
      <th>votes</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($choices as $choice)
      <tr>
        <td>{{ $choice->id }}</td>
        <td>{{ $choice->choice_text }}</td>
        <td>{{ $choice->question_id }}</td>
        <td>{{ $choice->votes }}</td>
      </tr>
    @endforeach
  </tbody>
</table>