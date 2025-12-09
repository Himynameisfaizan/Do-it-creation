<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <header class='flex justify-between items-center py-8 px-15 reletive z-1'>
        <div class=''>
            <a href="{{ url('/') }}"><img class='w-70 object-cover' src="storage/image/logo/logo.png" alt="" /></a>
        </div>
        <div class=' backdrop-blur-xs bg-[#ffffff2d] rounded-3xl border-2 border-[#2e2b2845] hidden xl:block'>
            <div class="flex items-center gap-6 py-1 px-2 rounded-3xl text-black">
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200 pl-4'><a href="{{ url('/') }}">Home</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/about-us') }}">About Us</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/services') }}">Services +</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/digital-product') }}">Digital Product</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/blog') }}">Blog</a></li>
                <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                <li class="list-none font-medium text-sm bg-[#e5212a] py-2 px-3 rounded-3xl text-white"><a href="#">Login / signup</a></li>
            </div>
        </div>
        <div id="menu-btn" class="xl:hidden relative w-10 h-10 flex justify-center items-center cursor-pointer z-50">

            <i id="icon-menu" class="ri-menu-line text-2xl absolute transition-all duration-300 ease-in-out opacity-100 rotate-0 scale-100"></i>
            <i id="icon-close" class="ri-close-large-fill text-2xl absolute transition-all duration-300 ease-in-out opacity-0 -rotate-90 scale-0"></i>

        </div>
    </header>

    <div id="topbar" class="w-70 rounded-xl bg-[#ffffffd3] scale-0 shadow-lg border border-[#e03d3d1c] origin-top-right absolute top-18 right-18  duration-300 z-1 xl:hidden block">

        <ul class="">
            <a href="{{ url('/') }}">
                <li class="px-5 py-4 rounded-t-xl text-sm hover:bg-red-200 duration-300 cursor-pointer">Home</li>
            </a>
            <a href="{{ url('/about') }}">
                <li class="px-5 py-4 text-sm  hover:bg-red-200 duration-300 cursor-pointer">About Us</li>
            </a>
            <a href="{{ url('/services') }}">
                <li class="px-5 py-4 text-sm hover:bg-red-200 duration-300 cursor-pointer">Services+</li>
            </a>
            <a href="{{ url('/portfolio') }}">
                <li class="px-5 py-4 text-sm hover:bg-red-200 duration-300 cursor-pointer">Portfolio</li>
            </a>
            <a href="{{ url('/digital-product') }}">
                <li class="px-5 py-4 text-sm hover:bg-red-200 duration-300 cursor-pointer">Digital Product</li>
            </a>
            <a href="{{ url('/blog') }}">
                <li class="px-5 py-4 text-sm hover:bg-red-200 duration-300 cursor-pointer">Blog</li>
            </a>
            <a href="{{ url('/contact-us') }}">
                <li class="px-5 py-4 text-sm hover:bg-red-200 duration-300 cursor-pointer">Contact Us</li>
            </a>
            <a href="#">
                <li class="px-5 py-4 text-sm rounded-b-xl hover:bg-red-200 duration-300 cursor-pointer">Login / signup</li>
            </a>
        </ul>
    </div>
    <script>
        // let menu = document.getElementById("menu")
        // let menu_icon = document.getElementById("menu-icon")
        // let menu_close_icon = document.getElementById("menu-close-icon")
        // let topbar = document.getElementById("topbar")

        // menu.addEventListener("click", () => {
        //     if (topbar.style.top === "0%") {
        //         topbar.style.top = "-100%"
        //         menu_icon.classList.remove("ri-close-large-fill")
        //         menu_icon.classList.add("ri-menu-line")
        //     } else {
        //         topbar.style.top = "0%"
        //         menu_icon.classList.remove("ri-menu-line")
        //         menu_icon.classList.add("ri-close-large-fill")
        //     }
        // })


        const menuBtn = document.getElementById("menu-btn");
        const iconMenu = document.getElementById("icon-menu");
        const iconClose = document.getElementById("icon-close");
        const topbar = document.getElementById("topbar");

        let isOpen = false;

        menuBtn.addEventListener("click", () => {
            isOpen = !isOpen;

            if (isOpen) {
                topbar.classList.remove("scale-0");
                topbar.classList.add("scale-100");

                iconMenu.classList.remove("opacity-100", "rotate-0", "scale-100");
                iconMenu.classList.add("opacity-0", "rotate-90", "scale-0");

                iconClose.classList.remove("opacity-0", "-rotate-90", "scale-0");
                iconClose.classList.add("opacity-100", "rotate-0", "scale-100");

            } else {
                topbar.classList.remove("scale-100");
                topbar.classList.add("scale-0");

                iconMenu.classList.remove("opacity-0", "rotate-90", "scale-0");
                iconMenu.classList.add("opacity-100", "rotate-0", "scale-100");

                iconClose.classList.remove("opacity-100", "rotate-0", "scale-100");
                iconClose.classList.add("opacity-0", "-rotate-90", "scale-0");
            }
        });
    </script>
</body>

</html>