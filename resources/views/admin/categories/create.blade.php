<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>
    <h1>Create Category</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('admin.categories.index') }}">Back</a>
</body>
</html>
