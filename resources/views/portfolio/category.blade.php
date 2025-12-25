<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/style.css' , 'resources/js/app.js'])

</head>

<body class="bg-black text-white">

    @include('include.header')

    <div class="max-w-10/12 m-auto">

        <div class="">
            <table class="w-full ">
                <thead class="border">
                    <td class="border text-center">Sr.no</td>
                    <td class="border text-center">Industry name</td>
                    <td class="border text-center">Sub category</td>
                    <td class="border text-center">Update</td>
                    <td class="border text-center">Delete</td>
                </thead>

                @foreach($categories as $category)
                <tbody class="">
                    <td class="border text-center">{{ $category->id }}</td>
                    <td class="border text-center">{{ $category->name }}</td>
                    <td class="border text-center">{{ $category->name }}</td>
                    <td class="border text-center underline"><a href="#">Edit</a></td>
                    <td class="border text-center underline"><a href="#">Delete</a></td>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>

</body>

</html>