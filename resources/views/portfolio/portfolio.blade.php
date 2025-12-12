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
            <h2 class="cursor-pointer">Choose Category</h2>
            <i class="ri-arrow-down-s-line"></i>
        </div>
        <div class="category-counting">
            <h2>Showing 442 items</h2>
        </div>
    </div>

    <div class="min-h-screen bg-gray-100 p-5 md:p-10">

        <div class="max-w-7xl mx-auto">

            <div class="columns-2 md:columns-4 lg:columns-5 2xl:columns-6 gap-4 space-y-4">

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/600?random=1" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Portrait Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/300?random=2" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Short Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/500?random=3" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Medium Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto" src="https://picsum.photos/400/700?random=4" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Tall Tower</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/400?random=5" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Square One</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/320?random=6" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Wide Shot</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/550?random=7" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Another Portrait</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/600?random=1" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Portrait Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/300?random=2" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Short Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/500?random=3" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Medium Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/700?random=4" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Tall Tower</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/400?random=5" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Square One</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/320?random=6" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Wide Shot</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/550?random=7" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Another Portrait</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/600?random=8" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Portrait Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/300?random=9" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Short Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/500?random=10" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Medium Image</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/700?random=11" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Tall Tower</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/400?random=12" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Square One</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/320?random=13" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Wide Shot</p>
                    </div>
                </div>

                <div class="break-inside-avoid bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-auto cursor-pointer" src="https://picsum.photos/400/550?random=14" alt="Gallery Image">
                    <div class="p-3">
                        <p class="font-semibold text-gray-700">Another Portrait</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>