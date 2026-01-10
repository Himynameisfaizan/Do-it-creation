<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Header</title>
</head>

<body>

    <header class='flex justify-between items-center py-4 px-4 md:px-8 xl:px-16 relative z-50 w-full'>
        
        <div>
            <a href="{{ url('/') }}">
                <img class='w-40 md:w-52 xl:w-72 object-cover' src="storage/image/logo/logo.png" alt="Logo" />
            </a>
        </div>

        <div class='backdrop-blur-md bg-[#ffffff2d] rounded-3xl border-2 border-[#2e2b2845] hidden xl:block'>
            <div class="flex items-center gap-6 py-2 px-4 rounded-3xl text-black">
                <ul class="flex items-center gap-6 m-0 p-0">
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/') }}">Home</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/services') }}">Services +</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/digital-product') }}">Digital Product</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/blog') }}">Blog</a></li>
                    <li class='list-none font-bold text-sm text-[#2e2b28] hover:text-[#e5212a] duration-200'><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    <li class="list-none font-medium text-sm bg-[#e5212a] py-2 px-3 rounded-3xl text-white hover:bg-red-700 duration-200"><a href="#">Login / signup</a></li>
                </ul>
            </div>
        </div>

        <div id="menu-btn" class="xl:hidden relative w-10 h-10 flex justify-center items-center cursor-pointer z-50">
            <i id="icon-menu" class="ri-menu-line text-2xl absolute transition-all duration-300 ease-in-out opacity-100 rotate-0 scale-100"></i>
            <i id="icon-close" class="ri-close-large-fill text-2xl absolute transition-all duration-300 ease-in-out opacity-0 -rotate-90 scale-0"></i>
        </div>
    </header>

    <div id="topbar" class="w-64 sm:w-72 rounded-xl bg-[#ffffff] shadow-2xl border border-gray-200 origin-top-right absolute top-20 right-4 transform scale-0 duration-300 z-40 xl:hidden block">
        <ul class="flex flex-col">
            <a href="{{ url('/') }}">
                <li class="px-5 py-3 border-b border-gray-100 rounded-t-xl text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Home</li>
            </a>
            <a href="{{ url('/about') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">About Us</li>
            </a>
            <a href="{{ url('/services') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Services+</li>
            </a>
            <a href="{{ url('/portfolio') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Portfolio</li>
            </a>
            <a href="{{ url('/digital-product') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Digital Product</li>
            </a>
            <a href="{{ url('/blog') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Blog</li>
            </a>
            <a href="{{ url('/contact-us') }}">
                <li class="px-5 py-3 border-b border-gray-100 text-sm font-semibold hover:bg-red-50 hover:text-[#e5212a] duration-300 cursor-pointer">Contact Us</li>
            </a>
            <a href="#">
                <li class="px-5 py-3 rounded-b-xl text-sm font-bold bg-red-50 text-[#e5212a] hover:bg-[#e5212a] hover:text-white duration-300 cursor-pointer">Login / signup</li>
            </a>
        </ul>
    </div>

    <script>
        const menuBtn = document.getElementById("menu-btn");
        const iconMenu = document.getElementById("icon-menu");
        const iconClose = document.getElementById("icon-close");
        const topbar = document.getElementById("topbar");

        let isOpen = false;

        menuBtn.addEventListener("click", () => {
            isOpen = !isOpen;

            if (isOpen) {
                // Menu Open
                topbar.classList.remove("scale-0");
                topbar.classList.add("scale-100");

                iconMenu.classList.remove("opacity-100", "rotate-0", "scale-100");
                iconMenu.classList.add("opacity-0", "rotate-90", "scale-0");

                iconClose.classList.remove("opacity-0", "-rotate-90", "scale-0");
                iconClose.classList.add("opacity-100", "rotate-0", "scale-100");

            } else {
                // Menu Close
                topbar.classList.remove("scale-100");
                topbar.classList.add("scale-0");

                iconMenu.classList.remove("opacity-0", "rotate-90", "scale-0");
                iconMenu.classList.add("opacity-100", "rotate-0", "scale-100");

                iconClose.classList.remove("opacity-100", "rotate-0", "scale-100");
                iconClose.classList.add("opacity-0", "-rotate-90", "scale-0");
            }
        });

        // Optional: Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (isOpen && !menuBtn.contains(e.target) && !topbar.contains(e.target)) {
                isOpen = false;
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