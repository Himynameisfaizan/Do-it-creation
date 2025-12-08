<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/css/style.css' , 'resources/js/app.js'])
</head>

<body>

    @include('include.header')

    <div class="max-w-10/12 mx-auto">
        <div class="landing flex items-center">
            <div class="w-1/2 my-14 flex flex-col items-start">
                <h1 class="text-6xl font-[bold] leading-18 text-[#2e2b28] inline-block">
                    Hii... <br /> Do You Need <br />
                    <span class="text-[#e5212a]">Logo Design? </span>
                </h1>
                <h1 class="text-[#2e2b28] text-lg font-extrabold py-5 px-1">
                    We Handle Your Business From Zero!
                </h1>
                <a class="bg-[#e5212a] cursor-pointer text-white pl-3 pr-1 py-1 text-sm flex items-center gap-2 rounded-3xl" href="#">
                    Contact Now!
                    <i class="text-[#e5212a] bg-white rounded-full text-xl px-2 py-1 ri-arrow-right-long-line"></i>
                </a>
            </div>
            <div class="w-1/2">
                <img src="storage/image/back/banner-img.webp" alt="Banner Image" />
            </div>
        </div>

        <div class="slider">
            <div class="flex items-center gap-4 w-full">
                <div class="h-0.5 bg-red-200 w-12 sm:w-16 md:w-24 shrink-0"></div>

                <div class="flex items-center gap-2 shrink-0">
                    <div class="flex text-yellow-500">
                        <i class="ri-star-s-fill text-sm"></i>
                        <i class="ri-star-s-fill text-sm"></i>
                        <i class="ri-star-s-fill text-sm"></i>
                        <i class="ri-star-s-fill text-sm"></i>
                        <i class="ri-star-s-fill text-sm"></i>
                    </div>
                    <h2 class="font-bold text-[12px] text-[#2e2b28] whitespace-nowrap">
                        500+ Brands & Counting
                    </h2>
                </div>

                <div class="h-0.5 bg-red-200 flex-1"></div>
            </div>
            <div class="swiper">
                @include('home.slider')
                <div class="h-0.5 bg-red-200 w-full"></div>
            </div>
        </div>
        
    </div>

</body>

</html>