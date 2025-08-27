<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>Categories</h1>

    <a href="{{ route('admin.categories.create') }}">Create Category</a>

    <ul>
        @forelse($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <li>No categories found.</li>
        @endforelse
    </ul>
</body>
</html>
