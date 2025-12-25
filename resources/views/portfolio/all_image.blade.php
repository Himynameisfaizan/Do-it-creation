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
        @foreach($gallery as $data)

      <img src="{{ asset('storage/' . $data->image_path) }}" alt="{{ $data->title }}">

        @endforeach
    </div>

    @include('include.footer')

</body>

</html>