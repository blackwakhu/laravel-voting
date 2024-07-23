<h1>New Choice for: {{$question_txt}}</h1>
<form action="{{ route('choices.store', $quest) }}" method="POST">
  @csrf
  <label for="choice">Choice</label>
  <input type="text" id="choice" name="choice"/>
  <input type="submit" value="Submit"/>
</form>