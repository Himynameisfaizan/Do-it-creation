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
    <div class="mt-4">
        <h2 class="text-center text-3xl font-bold font-[bold] text-[#e5212a]">EXPLORE THE DESIGNS</h2>
        <h4 class="text-center text-lg font-[medium] text-[#2e2b28]">That Define our Creativity.</h4>

        <div class="image-slider max-w-11/12  m-auto mt-10">

            <div class="swiper myLinearSwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-[300px] h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-[300px] h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-[300px] h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-[300px] h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-[300px] h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                </div>
            </div>
            

            <div class="swiper myLinearSwiper2 mt-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-50 h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-50 h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-50 h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://plus.unsplash.com/premium_photo-1691784781482-9af9bce05096?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="swiper-slide w-50 h-100 bg-red-400 rounded-xl">
                        <img class="w-full h-70 object-cover rounded-xl" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

</html>