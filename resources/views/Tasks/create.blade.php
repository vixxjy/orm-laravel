<h1>Create</h1>

<form method="POST" action="{{ route('tasks.store')}}">
    {{ csrf_field() }}
    <input type="text" name="name"/>
    <input type="submit" value="Submit"/>
</form>