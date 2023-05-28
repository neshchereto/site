<h3>Add user</h3>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form>