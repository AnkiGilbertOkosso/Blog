<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Categories</title>
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-4xl mx-auto bg-white rounded p-6 ">
        <div class="md:flex items-center justify-between     py-3 md:py-4 bg-white-900  relative   text-black-50 ">
            <h2 class="text-2xl font-semibold mb-6 text-black-100">Categories</h2>
            <a href="{{ route('categories.create') }}" class="text-blue-500 hover:underline px-4">Create Category</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-green-500 border-l-4 p-4 mb-4" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <table class="min-w-full border bg-white ">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Number of Posts</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="border py-2 px-4">{{ $category->id }}</td>
                        <td class="border py-2 px-4">{{ $category->name }}</td>
                        <td class="border py-2 px-4">{{ $category->posts_count }}</td>
                        <td class="border py-2 px-4">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:underline px-4">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline px-4">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-2 px-4 text-center">No categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
