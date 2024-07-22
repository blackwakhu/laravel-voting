<div class="container">
  <h1>New Question</h1>
  <form method="post" action="{{ route('questions.store') }}">
    @csrf
    <label for="question">Question</label>
    <input type="text" name="question" id="question" placeholder="Which computer maker do you like"/>
    <input type="submit" value="Submit"/>
  </form>
</div>