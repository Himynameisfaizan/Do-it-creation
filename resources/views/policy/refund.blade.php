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

    <div class="bg-red-100 p-4">
        <h2 class="text-center font-[bold] text-xl text-[#2e2b28]">RETURN AND REFUND POLICY</h2>
        <h3 class="text-center font-[bold] text-sm text-[#e5212a]"><a class="text-[#2e2b28]" href="{{ url('/') }}">Home /</a> Return and Refund Policy</h3>
    </div>

    <div class="max-w-7xl m-auto">
        <p class="text-sm font-bold mt-4">
            At Do It Creation, we are dedicated to delivering high-quality digital products and services that align with your vision and expectations. Our team ensures every project — from concept to completion — is handled with professionalism, creativity, and care. However, as we deal exclusively in digital design and development services, certain limitations apply regarding returns and refunds
        </p>

        <h2 class="text-2xl font-bold font-[xbold] mt-2">Scope of Policy</h2>
        <p class="text-sm font-bold">This policy covers all digital products and services offered by Do It Creation, including but not limited to Logo Design, Packaging Design, Website Design, App Design, and Development Services. Since these are custom and digital-based projects, issues such as physical damage, wear and tear, or shipping-related concerns do not apply.</p>

        <h2 class="text-2xl font-bold font-[xbold] mt-2">Return & Refund Eligibility</h2>
        <p class="text-sm font-bold">
            Due to the personalized and digital nature of our work: <br><br>
            – No refunds, replacements, or returns will be applicable once a project or service has been purchased, delivered, or transferred. <br><br>
            – Once work is started or initiated on any service — including logo design, packaging design, website design, app design, or development — no refund requests will be accepted under any circumstances. <br><br>
            – This applies to all projects handled through both online and offline channels.
        </p>

        <h2 class="text-2xl font-bold font-[xbold] mt-2"> Delivery & Usage</h2>
        <p class="text-sm font-bold">
            All services are provided and delivered digitally. Once files or deliverables have been shared, they are considered delivered and consumed. Because digital files can be easily duplicated or distributed, refunds or returns are not possible once the work has begun or been delivered.
        </p>

        <h2 class="text-2xl font-bold font-[xbold] mt-2">Fraudulent Claims</h2>
        <p class="text-sm font-bold">
            Do It Creation reserves the right to take strict action in cases of: <br><br>
            – False, misleading, or fraudulent refund/return claims <br><br>
            – Misrepresentation of work progress or deliverables <br><br>
            – Malicious intent to misuse company services or policies <br><br>

            We may, at our sole discretion, suspend, block, or terminate the client’s account or future services in such cases. Any individual or entity found guilty of submitting fraudulent complaints may face civil or criminal action as per applicable laws.
        </p>
    </div>

    </div>

    @include('include.footer')
</body>

</html>