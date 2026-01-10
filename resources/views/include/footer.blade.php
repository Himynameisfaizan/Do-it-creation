<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
    <div class="bg-[#242220] mt-5 px-6 py-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8 justify-items-start">
        
        <div class="logo flex flex-col gap-6 w-full">
            <div class="img">
                <a href="{{ url('/') }}"> 
                    <img class="w-48" src="storage/image/logo/logo-footer.webp" alt="footer-logo">
                </a>
            </div>
            <div class="info flex flex-col gap-5">
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-phone-fill"></i>
                    <a href="tel:+919560237516" class="text-[#e9c7c7] text-[13px] hover:text-white duration-200 cursor-pointer font-bold">+91 95602 37516</a>
                </div>
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-phone-fill"></i>
                    <a href="tel:+919015961654" class="text-[#e9c7c7] text-[13px] hover:text-white duration-200 cursor-pointer font-bold">+91 90159 61654</a>
                </div>
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-mail-fill"></i>
                    <a href="mailto:contact@doitcreation.com" class="text-[#e9c7c7] text-[13px] hover:text-white duration-200 cursor-pointer font-bold">contact@doitcreation.com</a>
                </div>
            </div>
            <div class="social flex items-center gap-4 mt-2">
                <a target="_blank" href="https://www.facebook.com/doitcreation/"><i class="text-[#e9c7c7] hover:text-white duration-300 text-xl cursor-pointer ri-facebook-fill"></i></a>
                <a target="_blank" href="https://www.instagram.com/doitcreation/"><i class="text-[#e9c7c7] hover:text-white duration-300 text-xl cursor-pointer ri-instagram-line"></i></a>
                <a target="_blank" href="https://www.linkedin.com/company/doitcreation/"><i class="text-[#e9c7c7] hover:text-white duration-300 text-xl cursor-pointer ri-linkedin-fill"></i></a>
                <a target="_blank" href="https://in.pinterest.com/doitcreation/"><i class="text-[#e9c7c7] hover:text-white duration-300 text-xl cursor-pointer ri-pinterest-line"></i></a>
            </div>
        </div>

        <div class="company flex flex-col gap-6 w-full">
            <h3 class="text-[#ec2024] font-bold text-xl uppercase tracking-wide">Company</h3>
            <ul class="flex flex-col gap-3">
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('about-us') }}">About Us</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('blog') }}">Blog</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('terms-condition') }}">Terms & Condition</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('contact-us') }}">Contact Us</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="{{ url('return-refund') }}">Return & Refund Policy</a></li>
            </ul>
        </div>

        <div class="quick-link flex flex-col gap-6 w-full">
             <h3 class="text-[#ec2024] font-bold text-xl uppercase tracking-wide">Quick Links</h3>
            <ul class="flex flex-col gap-3">
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="#">Brand Name Suggestion</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="#">Digital Marketing</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="#">Graphic Design</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="#">Logo Design</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-medium hover:text-white cursor-pointer duration-200" href="#">Website Design & Development</a></li>
            </ul>
        </div>

        <div class="map w-full">
             <iframe class="rounded-xl w-full h-[250px] md:h-[200px]" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0665303644483!2d77.37899631508246!3d28.62776898241973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce550a2212921%3A0x6758654c60163351!2sDo%20It%20Creation!5e0!3m2!1sen!2sin!4v1675234567890!5m2!1sen!2sin" 
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
    </div>

    <div class="p-4 bg-[#818181]">
        <h3 class="text-center text-sm font-medium text-white">© 2025 Do It Creation. All Rights Reserved</h3>
    </div>
</body>

</html>