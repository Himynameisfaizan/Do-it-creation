<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/style.css' , 'resources/js/app.js'])
</head>

<body>

    @include('include.header')

    <div class="max-w-10/12 m-auto">
        <form action="{{ route('gallery.insert_image') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Image Title:</label>
                <input type="text" name="title" required class="border p-2">
            </div>

            <div class="mt-2">
                <label>Category:</label>
                <select name="category_id" required class="border p-2">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-2">
                <label>Select Image:</label>
                <input type="file" name="image" required class="border p-2">
            </div>

            <button type="submit" class="bg-blue-500 text-white p-2 mt-4">Upload</button>
        </form>
    </div>

    @include('include.footer')

</body>

</html>