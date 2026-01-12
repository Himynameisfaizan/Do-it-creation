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
    <div class="py-5 bg-[#FEE2E2]">
        <h2 class="text-[#2e2b28] text-center text-lg md:text-xl tracking-wider font-[bold]">ABOUT US</h2>
        <h2 class="text-[#2e2b28] text-center text-xs font-[medium]"><a href="{{ url('/') }}">Home / </a><span class="text-[#e5212a]">About Us</span></h2>
    </div>

    <div class="w-11/12 md:w-10/12 pt-15 m-auto flex gap-8">
        <div class="w-2/3">
            <h3 class="text-[#2e2b28] font-[medium]">Know more</h3>
            <h2 class="text-[#e5212a] font-[bold] text-3xl">About Do It Creation</h2>
            <p class="text-[#2e2b28] mt-2 text-justify">Do it Creation is a leading design and marketing agency comprised of a dedicated team of digital professionals. With a wealth of experience in the industry, we have built a strong reputation for providing exceptional services to businesses of all sizes. Our team operates as an in-house partner, working closely with our clients to deliver customized solutions that meet their unique needs.</p>

            <p class="text-[#2e2b28] mt-2 text-justify">At Do it Creation, we are passionate about design and marketing. We understand the power of effective branding and communication in today’s digital landscape. Our team consists of talented designers, skilled marketers, and creative thinkers who collaborate to develop compelling strategies that resonate with target audiences. From conceptualizing brand identities to creating engaging content and optimizing digital presence, <span class="text-[#e5212a] font-[bold]"> we offer a comprehensive suite of services to help businesses thrive.</span></p>
        </div>

        <div class="w-1/3">
            <img src="{{ asset('storage/image/back/about-us.webp') }}" alt="">
        </div>
    </div>

  
    <div class="w-11/12 md:w-10/12 pt-15 m-auto flex gap-8">
        <div class="w-1/3 bg-red-900">
            <img class="object-left" src="{{ asset('storage/image/back/mission-pic-03.webp') }}" alt="">
        </div>
        <div class="w-2/3">
            <h2 class="text-[#e5212a] font-[bold] text-3xl">Our mission</h2>
            <p class="text-[#2e2b28] mt-2 text-justify">Our mission at Do it Creation is to empower businesses to unlock their full potential through innovative design and marketing solutions. We aim to be the trusted partner that propels our clients towards success in the competitive digital world. By understanding their goals and challenges, we leverage our expertise and creativity to develop strategies that elevate their brand, engage their audience, and drive measurable results. We are committed to providing exceptional service, building long-term partnerships, and exceeding expectations at every step.</p>
        </div>
    </div>

    <div class="w-11/12 md:w-10/12 pt-15 m-auto flex gap-8">
        <div class="w-2/3">
            <h2 class="text-[#e5212a] font-[bold] text-3xl">Our vission</h2>
            <p class="text-[#2e2b28] mt-2 text-justify">Our vision is to become the go-to design and marketing agency that transforms businesses and shapes their digital success stories. We strive to be at the forefront of industry trends and technologies, constantly evolving and adapting to meet the changing needs of our clients. We envision a future where businesses leverage the power of design and marketing to build strong brands, connect with their target audience, and achieve sustainable growth. Our team is dedicated to staying innovative, collaborative, and passionate as we work towards realizing this vision.</p>
        </div>

        <div class="w-1/3">
            <img src="{{ asset('storage/image/back/vision-pic.webp') }}" alt="">
        </div>
    </div>
    @include('include.footer')
</body>

</html>