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

    <div class="max-w-11/12 m-auto">
        <div class="h-100 w-2/12 bg-[#e5212a]">
            <h1 class="hover:bg-amber-50 p-2 cursor-pointer duration-150"><a href="{{ url('add_new_image') }}"> Add new image</a></h1>
            <h1 class="hover:bg-amber-50 p-2 cursor-pointer duration-150"><a href="{{ url('all_image') }}"> all image</a></h1>
            <h1 class="hover:bg-amber-50 p-2 cursor-pointer duration-150"><a href="{{ url('admin/category') }}">category</a></h1>
        </div>
    </div>
</body>

</html>