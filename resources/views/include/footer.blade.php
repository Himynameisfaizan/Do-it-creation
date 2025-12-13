<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="px-6 py-15 flex justify-around bg-[#242220] mt-5">
        <div class="logo flex flex-col gap-6">
            <div class="img">
               <a href="{{ url('/') }}"> <img class="w-50" src="storage/image/logo/logo-footer.webp" alt="footer-logo"></a>
            </div>
            <div class="info flex flex-col gap-5">
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-phone-fill"></i>
                    <h3 class="text-[#e9c7c7] text-[12px] hover:text-white duration-200 cursor-pointer font-[bold]">+91 95602 37516</h3>
                </div>
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-phone-fill"></i>
                    <h3 class="text-[#e9c7c7] text-[12px] hover:text-white duration-200 cursor-pointer font-[bold]">+91 90159 61654</h3>
                </div>
                <div class="flex items-center gap-4">
                    <i class="text-[#ec2024] text-lg ri-mail-fill"></i>
                    <h3 class="text-[#e9c7c7] text-[12px] hover:text-white duration-200 cursor-pointer font-[bold]">contact@doitcreation.com</h3>
                </div>
            </div>
            <div class="social flex items-center justify-around">
                <i class="text-[#e9c7c7] hover:text-white duration-300 text-base cursor-pointer ri-facebook-fill"></i>
                <i class="text-[#e9c7c7] hover:text-white duration-300 text-base cursor-pointer ri-instagram-line"></i>
                <i class="text-[#e9c7c7] hover:text-white duration-300 text-base cursor-pointer ri-linkedin-fill"></i>
                <i class="text-[#e9c7c7] hover:text-white duration-300 text-base cursor-pointer ri-pinterest-line"></i>
            </div>
        </div>
        <div class="company flex flex-col gap-6">
            <h3 class="text-[#ec2024] font-[bold] text-xl">COMPANY</h3>
            <ul class="flex flex-col gap-2">
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('about-us') }}">About Us</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('blog') }}">Blog</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('terms-condition') }}">Terms & Condition</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('contact-us') }}">Contact Us</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="{{ url('return-refund') }}">Return & Refund Policy</a></li>
            </ul>
        </div>
        <div class="quick-link flex flex-col gap-6">
              <h3 class="text-[#ec2024] font-[bold] text-xl">QUICK LINKS</h3>
            <ul class="flex flex-col gap-2">
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="#">Brand Name Suggestion</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="#">Digital Marketing</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="#">Graphic Design</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="#">Logo Design</a></li>
                <li><a class="text-[#e9c7c7] text-[14px] font-[medium] hover:text-white cursor-pointer duration-200" href="#">Website Design & Development</a></li>
            </ul>
        </div>
        <div class="map">
            <iframe class="rounded-xl" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14017.06481277649!2d77.256882!3d28.561768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce338a7a6659d%3A0x8305c0cae4c7da7!2sDo%20It%20Creation%20-%20Design%20for%20Satisfaction*21!5e0!3m2!1sen!2sin!4v1765541549462!5m2!1sen!2sin" width="280" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="p-4 bg-[#818181]">
        <h3 class="text-center text-sm font-[medium] text-white">© 2025 Do It Creation. All Rights Reserved</h3>
    </div>
</body>

</html>