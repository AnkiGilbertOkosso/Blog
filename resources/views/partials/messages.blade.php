<!-- Display Success Message -->
@if (Session::has('success'))
    <div class="bg-green-500 text-white px-4 py-2 mb-4">
        <strong>Success:</strong> {{ Session::get('success') }}
    </div>
@endif

<!-- Display Error Messages -->
@if (count($errors) > 0)
    <div class="bg-red-500 text-white px-4 py-2 mb-4">
        <strong>Errors:</strong>
        <ul>
            <!-- Loop through each error and display it as a list item -->
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>  
@endif
