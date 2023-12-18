<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Category</title>
</head>
<body class="bg-gray-100 p-8 mt-9">
    @include('partials.navbar')

    <div class="max-w-md mx-auto bg-white rounded p-6">
        <h2 class="text-2xl font-semibold mb-6">Update Category</h2>

        @if(session('success'))
            <div class="bg-green-100 border-green-500 border-l-4 p-4 mb-4" role="alert">
                <p class="font-bold">Success</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT') <!-- Assuming you're using Laravel and following RESTful conventions -->

            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-semibold mb-2">Category Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500" value="{{ $category->name }}" required>

                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Upload Category
                </button>
            </div>
        </form>
    </div>

</body>
</html>
