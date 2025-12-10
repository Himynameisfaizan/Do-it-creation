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

    <div class="p-4 flex  items-center justify-between bg-red-100">
        <div class="category-choosen flex">
            <h2>Choose Category</h2>
            <i class="ri-arrow-down-s-line"></i>
        </div>
        <div class="category-counting">
            <h2>Showing 442 items</h2>
        </div>
    </div>
</body>

</html>