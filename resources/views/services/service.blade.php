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

    <h1>Services page</h1>

    @include('include.footer')

</body>

</html>