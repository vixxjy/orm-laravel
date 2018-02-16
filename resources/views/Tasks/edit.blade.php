<h1>Edit page</h1>

<form method="POST" action="{{ route('tasks.update', $task->id )}}">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $task->name }}"/>
    <input type="submit" value="Submit"/>
</form>