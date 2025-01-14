<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- css plugins files -->
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/plugins/bootstrap.min.css') }} " />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('front_end/assets/css/plugins/fontawesome.min.css')}} " />
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/common/common.css') }} " />
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/home.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/assets/css/categories.css') }} ">

    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/join-as-preparer.css') }} " />





</head>

<body>

    <!-- header start -->
    @include('front_end.partials.header')
    <!-- header end -->

    <!-- mobile header start -->
    @include('front_end.partials.mobile_header')
    <!-- mobile header end -->



    <!-- main content start -->
    @yield('content')
    <!-- main content end  -->






    <!-- footer start -->
    @include('front_end.partials.footer')
    <!-- footer end -->

    <!-- messenger-icon -->
    <div class="messenger-icon">
        <svg width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_8995_3645)">
                <rect x="50" y="25" width="60" height="60" rx="30" fill="url(#paint0_linear_8995_3645)" />
                <path
                    d="M92.5 52.5V56.25C92.5 61.25 90 63.75 85 63.75H84.375C83.9875 63.75 83.6125 63.9375 83.375 64.25L81.5 66.75C80.675 67.85 79.325 67.85 78.5 66.75L76.625 64.25C76.425 63.975 75.9625 63.75 75.625 63.75H75C70 63.75 67.5 62.5 67.5 56.25V50C67.5 45 70 42.5 75 42.5H82.5"
                    stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M89.375 48.75C91.1009 48.75 92.5 47.3509 92.5 45.625C92.5 43.8991 91.1009 42.5 89.375 42.5C87.6491 42.5 86.25 43.8991 86.25 45.625C86.25 47.3509 87.6491 48.75 89.375 48.75Z"
                    fill="#E61739" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M84.9951 53.75H85.0063" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M79.9951 53.75H80.0063" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M74.9931 53.75H75.0044" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </g>
            <defs>
                <filter id="filter0_d_8995_3645" x="0" y="0" width="160" height="160" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="25" />
                    <feGaussianBlur stdDeviation="25" />
                    <feColorMatrix type="matrix"
                        values="0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_8995_3645" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_8995_3645" result="shape" />
                </filter>
                <linearGradient id="paint0_linear_8995_3645" x1="50" y1="25" x2="110" y2="85"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#09BD3F" />
                    <stop offset="1" stop-color="#09812D" />
                </linearGradient>
            </defs>
        </svg>
    </div>





    <!-- scripts -->
    @include('front_end.partials.scripts')


</body>

</html>
