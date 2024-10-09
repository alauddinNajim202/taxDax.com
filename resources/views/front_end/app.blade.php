<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- css plugins files -->
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/plugins/bootstrap.min.css') }} " />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/common/common.css') }} " />
    <link rel="stylesheet" href=" {{ asset('front_end/assets/css/home.css') }}" />
  </head>
  <body>

    <!-- explore more items start -->
    <div class="explore-items-container">
      <div class="text-content">
        <div class="title">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </div>
        <div class="text" >
          Learn More About Our <br>
          <a href="">Tax Preparer
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" viewBox="0 0 16 8" fill="none">
              <path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z" fill="url(#paint0_linear_8549_2185)"/>
              <defs>
                <linearGradient id="paint0_linear_8549_2185" x1="0" y1="4" x2="0.132743" y2="5.99115" gradientUnits="userSpaceOnUse">
                  <stop stop-color=""/>
                  <stop offset="1" stop-color="#09812D"/>
                </linearGradient>
              </defs>
            </svg>
          </a>
        </div>
      </div>
      <div class="explore-items">
        <a href="" class="explore-item">Personal Tax Preparation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
        <a href="" class="explore-item">Business Tax Preparation</a>
        <a href="" class="explore-item">IRS Representation</a>
      </div>
    </div>
     <!-- explore more items end -->



    <!-- header start -->
    <div class="header">
      <a href="./index.html" class="logo-container">
        <img src="./assets/images/logo.png" alt="logo" />
      </a>
      <div class="nav-items">
        <a class="item active-item" href="./index.html">Home</a>
        <a class="item explore-nav-item d-flex align-items-center gap-2" >
          <span>Explore</span>
          <svg
            class=""
            xmlns="http://www.w3.org/2000/svg"
            width="12"
            height="8"
            viewBox="0 0 12 8"
            fill="none"
          >
            <path
              d="M5.34783 8L0 -5.24537e-07L2.08696 -4.33313e-07L5.96739 6.13665L5.83696 6.08696L6.16304 6.08696L6.03261 6.13665L9.91304 -9.12238e-08L12 0L6.65217 8L5.34783 8Z"
              fill=""
            />
          </svg>

        </a>
        <a class="item " href="./join-as-preparer.html">Join as a Tax Preparer</a>
        <a class="item explore-more-item" href="">explore more item-2</a>
        <a class="item explore-more-item" href="">explore more item-3</a>
        <a class="item explore-more-item" href="">explore more item-4</a>
        <a class="item explore-more-item" href="">explore more item-5</a>
        <a class="item explore-more-item" href="">explore more item-6</a>
        <a class="item explore-more-item" href="">explore more item-7</a>
        <a class="item explore-more-item" href="">explore more item-7</a>
        <a class="item explore-more-item" href="">explore more item-8</a>
        <a class="item explore-more-item" href="">explore more item-9</a>
        <div class="nav-actions">
          <a class="common-btn sign-in-btn" href="./sign-in.html">Sign In</a>
          <a class="common-btn join-btn" href="./sign-up.html">Join</a>
        </div>
      </div>
    </div>
    <!-- header end -->

    <!-- mobile header start -->
     <div class="mobile-header">
      <a href="./index.html" class="logo-container">
        <img src="./assets/images/logo.png" alt="logo" />
      </a>
      <div class="mobile-menu">
        <svg width="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
      </div>
     </div>
    <!-- mobile header end -->



    <!-- main content start -->
        @yield('content')
    <!-- main content end  -->






    <!-- footer start -->
     <div class="footer-container">
      <div class="sec-1">
        <div class="footer-logo">
          <img src="./assets/images/footer-logo.png" alt="logo">
        </div>
        <div class="footer-title mt-4">
          Join Our Newsletter
        </div>
        <div class="footer-text mt-5">
          Stay updated with the latest tax tips and platform updates
        </div>
        <form class="footer-input-container">
            <input placeholder="Email Address" type="text">
            <button type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57" viewBox="0 0 56 57" fill="none">
                <path d="M2 11.6768C2 6.15391 6.47715 1.67676 12 1.67676H46C51.5228 1.67676 56 6.15391 56 11.6768V45.6768C56 51.1996 51.5229 55.6768 46 55.6768H12C6.47715 55.6768 2 51.1996 2 45.6768V11.6768Z" fill="url(#paint0_linear_9215_838)"/>
                <path d="M2 11.6768C2 6.15391 6.47715 1.67676 12 1.67676H46C51.5228 1.67676 56 6.15391 56 11.6768V45.6768C56 51.1996 51.5229 55.6768 46 55.6768H12C6.47715 55.6768 2 51.1996 2 45.6768V11.6768Z" stroke="#D6D6D6"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.8768 35.6768L36.5399 29.6766C37.1534 29.1239 37.1534 28.2279 36.5399 27.6769L29.8768 21.6768L27.6556 23.6778L31.6372 27.2624H19V30.0907H31.6372L27.6556 33.6766L29.8768 35.6768Z" fill="white"/>
                <defs>
                  <linearGradient id="paint0_linear_9215_838" x1="2" y1="1.67676" x2="56" y2="55.6768" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#09BD3F"/>
                    <stop offset="1" stop-color="#09812D"/>
                  </linearGradient>
                </defs>
              </svg>
            </button>
        </form>
      </div>
      <div class="sec-2">
        <div class="footer-title">Quick Links</div>
        <div class="footer-nav-items mt-4">
          <div>
            <a href="" class="footer-text">Home</a>
          </div>
          <div>
            <a href="" class="footer-text">About Us</a>
          </div>
          <div>
            <a href="" class="footer-text">Services</a>
          </div>
          <div>
            <a href="" class="footer-text">Find a Tax Preparer</a>
          </div>
          <div>
            <a href="" class="footer-text">For Tax Preparers</a>
          </div>
          <div>
            <a href="" class="footer-text">Contact Us</a>
          </div>
          <div>
            <a href="" class="footer-text">FAQs</a>
          </div>
        </div>
      </div>
      <div class="sec-3">
        <div class="footer-title">Resources</div>
        <div class="footer-nav-items mt-4">
          <div>
            <a href="" class="footer-text">Client Dashboard </a>
          </div>
          <div>
            <a href="" class="footer-text">Tax Preparer Dashboard</a>
          </div>
          <div>
            <a href="" class="footer-text">Privacy Policy</a>
          </div>
          <div>
            <a href="" class="footer-text">Terms of Service</a>
          </div>
          <div>
            <a href="" class="footer-text">Help Center</a>
          </div>
        </div>
      </div>
      <div class="sec-4">
        <div class="footer-title">Contact Information</div>
        <div class="footer-nav-items mt-4">
          <a class="footer-text">Email: support@taxdax.com </a>
          <a class="footer-text">Phone: 1-800-XXX-XXXX</a>
          <a class="footer-text">Address: 123 Main St, Suite 101, City, State, ZIP</a>
        </div>
        <div class="socials mt-4">
          <a href="" class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
              <path d="M8.08663 2.04492C4.384 2.04492 1.38245 5.04648 1.38245 8.74909C1.38245 12.0953 3.83406 14.8689 7.0391 15.3718V10.687H5.33685V8.74909H7.0391V7.27208C7.0391 5.59185 8.03997 4.66374 9.57133 4.66374C10.3048 4.66374 11.0721 4.79468 11.0721 4.79468V6.44453H10.2267C9.39387 6.44453 9.13415 6.96132 9.13415 7.49152V8.74909H10.9935L10.6963 10.687H9.13415V15.3718C12.3391 14.8689 14.7908 12.0953 14.7908 8.74909C14.7908 5.04648 11.7892 2.04492 8.08663 2.04492Z" fill=""/>
              <defs>
                <linearGradient id="" x1="1.38245" y1="2.04492" x2="14.7091" y2="15.453" gradientUnits="userSpaceOnUse">
                  <stop stop-color=""/>
                  <stop offset="1" stop-color=""/>
                </linearGradient>
              </defs>
            </svg>
          </a>
          <a href="" class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
              <rect x="1.36304" y="1.36328" width="18.7717" height="18.7717" rx="9.38584" fill=""/>
              <path d="M8.48191 6.52019C8.48191 7.14672 7.93885 7.65463 7.26894 7.65463C6.59903 7.65463 6.05597 7.14672 6.05597 6.52019C6.05597 5.89365 6.59903 5.38574 7.26894 5.38574C7.93885 5.38574 8.48191 5.89365 8.48191 6.52019Z" fill=""/>
              <path d="M6.22185 8.4885H8.2953V14.7716H6.22185V8.4885Z" fill=""/>
              <path d="M11.6336 8.4885H9.56011V14.7716H11.6336C11.6336 14.7716 11.6336 12.7936 11.6336 11.5568C11.6336 10.8145 11.887 10.069 12.8984 10.069C14.0413 10.069 14.0344 11.0404 14.0291 11.793C14.0221 12.7767 14.0388 13.7806 14.0388 14.7716H16.1122V11.4555C16.0947 9.3381 15.5429 8.36245 13.7277 8.36245C12.6498 8.36245 11.9816 8.85184 11.6336 9.2946V8.4885Z" fill=""/>
            </svg>
          </a>
          <a href="" class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
              <g clip-path="">
                <path d="M6.06743 2.04492H1.37451L6.91273 9.42923L1.67617 15.4532H3.45279L7.73563 10.5264L11.4308 15.4533H16.1237L10.3525 7.75842L15.3192 2.04492H13.5426L9.52966 6.66127L6.06743 2.04492ZM12.1012 14.1124L4.05618 3.38576H5.39701L13.442 14.1124H12.1012Z" fill=""/>
              </g>
              <defs>
                <clipPath id="">
                  <rect width="16.09" height="16.09" fill="white" transform="translate(0.704102 0.704102)"/>
                </clipPath>
              </defs>
            </svg>
          </a>
          <a href="" class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
              <path d="M8.25637 6.73784C7.14522 6.73784 6.2451 7.63828 6.2451 8.74909C6.2451 9.86017 7.14555 10.7603 8.25637 10.7603C9.36745 10.7603 10.2676 9.8599 10.2676 8.74909C10.2676 7.63801 9.36718 6.73784 8.25637 6.73784ZM8.25637 5.39701C10.107 5.39701 11.6084 6.8968 11.6084 8.74909C11.6084 10.5998 10.1087 12.1012 8.25637 12.1012C6.40569 12.1012 4.90427 10.6014 4.90427 8.74909C4.90427 6.89843 6.40406 5.39701 8.25637 5.39701ZM12.6141 5.22883C12.6141 5.69149 12.2381 6.06687 11.7761 6.06687C11.3134 6.06687 10.938 5.69092 10.938 5.22883C10.938 4.76675 11.3139 4.39138 11.7761 4.39138C12.2375 4.3908 12.6141 4.76675 12.6141 5.22883ZM8.25637 3.38576C6.59742 3.38576 6.32703 3.39015 5.55544 3.42451C5.02975 3.44918 4.67737 3.51989 4.34996 3.647C4.05899 3.75984 3.84911 3.89459 3.62548 4.11822C3.40099 4.34271 3.26648 4.55203 3.15409 4.84313C3.02669 5.17129 2.956 5.52312 2.93177 6.04808C2.89707 6.78826 2.89302 7.04694 2.89302 8.74909C2.89302 10.408 2.89741 10.6784 2.93176 11.4499C2.95645 11.9754 3.02725 12.3283 3.15405 12.6549C3.26719 12.9463 3.40221 13.1567 3.62477 13.3793C3.85014 13.6043 4.06009 13.7393 4.34842 13.8506C4.67982 13.9787 5.03198 14.0495 5.55534 14.0737C6.29552 14.1083 6.5542 14.1124 8.25637 14.1124C9.91531 14.1124 10.1857 14.108 10.9572 14.0737C11.4815 14.0491 11.8347 13.9781 12.1622 13.8514C12.4528 13.7385 12.6638 13.603 12.8865 13.3807C13.1119 13.1549 13.2466 12.9455 13.358 12.6565C13.4858 12.3263 13.5567 11.9737 13.581 11.4501C13.6156 10.7099 13.6197 10.4512 13.6197 8.74909C13.6197 7.09016 13.6153 6.81977 13.581 6.04823C13.5563 5.52376 13.4853 5.17006 13.3584 4.84269C13.2459 4.55254 13.1107 4.342 12.8872 4.11822C12.6623 3.89336 12.4536 3.75913 12.1623 3.64683C11.8344 3.51953 11.482 3.44875 10.9573 3.42451C10.2172 3.38981 9.95849 3.38576 8.25637 3.38576ZM8.25637 2.04492C10.0776 2.04492 10.305 2.05163 11.0202 2.08515C11.7336 2.11811 12.2202 2.23096 12.6476 2.39689C13.0895 2.56729 13.4627 2.79746 13.8353 3.1701C14.2074 3.54275 14.4376 3.91706 14.6086 4.35786C14.7739 4.78469 14.8868 5.27186 14.9203 5.9853C14.9522 6.70041 14.9605 6.92779 14.9605 8.74909C14.9605 10.5704 14.9538 10.7978 14.9203 11.5129C14.8873 12.2263 14.7739 12.7129 14.6086 13.1403C14.4381 13.5823 14.2074 13.9554 13.8353 14.3281C13.4627 14.7002 13.0878 14.9303 12.6476 15.1013C12.2202 15.2667 11.7336 15.3795 11.0202 15.413C10.305 15.4449 10.0776 15.4533 8.25637 15.4533C6.43505 15.4533 6.20767 15.4466 5.49256 15.413C4.77912 15.3801 4.29307 15.2667 3.86512 15.1013C3.42376 14.9309 3.05 14.7002 2.67737 14.3281C2.30473 13.9554 2.07511 13.5806 1.90415 13.1403C1.73823 12.7129 1.62593 12.2263 1.59241 11.5129C1.56057 10.7978 1.55219 10.5704 1.55219 8.74909C1.55219 6.92779 1.55889 6.70041 1.59241 5.9853C1.62537 5.2713 1.73823 4.78525 1.90415 4.35786C2.07455 3.9165 2.30473 3.54275 2.67737 3.1701C3.05 2.79746 3.42432 2.56785 3.86512 2.39689C4.29251 2.23096 4.77857 2.11867 5.49256 2.08515C6.20767 2.0533 6.43505 2.04492 8.25637 2.04492Z" fill=""/>
            </svg>
          </a>
          <a href="" class="item">
            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
              <path d="M13.4469 9.08943H4.06105V13.7823H13.4469V9.08943ZM13.4469 7.7486C13.4469 5.15677 11.3458 3.05568 8.75397 3.05568C6.16214 3.05568 4.06105 5.15677 4.06105 7.7486H13.4469ZM4.98777 3.03429C6.02 2.20859 7.32932 1.71484 8.75397 1.71484C10.1786 1.71484 11.4879 2.20859 12.5202 3.03429L13.4946 2.05992L14.4427 3.00803L13.4683 3.9824C14.294 5.01463 14.7877 6.32395 14.7877 7.7486V14.4528C14.7877 14.823 14.4876 15.1232 14.1173 15.1232H3.39063C3.02037 15.1232 2.72021 14.823 2.72021 14.4528V7.7486C2.72021 6.32395 3.21396 5.01463 4.03966 3.9824L3.06529 3.00803L4.0134 2.05992L4.98777 3.03429ZM6.74272 6.40776C6.37246 6.40776 6.0723 6.1076 6.0723 5.73735C6.0723 5.36709 6.37246 5.06693 6.74272 5.06693C7.11297 5.06693 7.41313 5.36709 7.41313 5.73735C7.41313 6.1076 7.11297 6.40776 6.74272 6.40776ZM10.7652 6.40776C10.3949 6.40776 10.0948 6.1076 10.0948 5.73735C10.0948 5.36709 10.3949 5.06693 10.7652 5.06693C11.1355 5.06693 11.4356 5.36709 11.4356 5.73735C11.4356 6.1076 11.1355 6.40776 10.7652 6.40776Z" fill=""/>
            </svg>
          </a>
        </div>
      </div>
     </div>
    <!-- footer end -->

    <!-- messenger-icon -->
    <div class="messenger-icon">
      <svg
        width="160"
        height="160"
        viewBox="0 0 160 160"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g filter="url(#filter0_d_8995_3645)">
          <rect
            x="50"
            y="25"
            width="60"
            height="60"
            rx="30"
            fill="url(#paint0_linear_8995_3645)"
          />
          <path
            d="M92.5 52.5V56.25C92.5 61.25 90 63.75 85 63.75H84.375C83.9875 63.75 83.6125 63.9375 83.375 64.25L81.5 66.75C80.675 67.85 79.325 67.85 78.5 66.75L76.625 64.25C76.425 63.975 75.9625 63.75 75.625 63.75H75C70 63.75 67.5 62.5 67.5 56.25V50C67.5 45 70 42.5 75 42.5H82.5"
            stroke="white"
            stroke-width="1.5"
            stroke-miterlimit="10"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M89.375 48.75C91.1009 48.75 92.5 47.3509 92.5 45.625C92.5 43.8991 91.1009 42.5 89.375 42.5C87.6491 42.5 86.25 43.8991 86.25 45.625C86.25 47.3509 87.6491 48.75 89.375 48.75Z"
            fill="#E61739"
            stroke="white"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M84.9951 53.75H85.0063"
            stroke="white"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M79.9951 53.75H80.0063"
            stroke="white"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M74.9931 53.75H75.0044"
            stroke="white"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </g>
        <defs>
          <filter
            id="filter0_d_8995_3645"
            x="0"
            y="0"
            width="160"
            height="160"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix
              in="SourceAlpha"
              type="matrix"
              values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
              result="hardAlpha"
            />
            <feOffset dy="25" />
            <feGaussianBlur stdDeviation="25" />
            <feColorMatrix
              type="matrix"
              values="0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0 0.133333 0 0 0 0.25 0"
            />
            <feBlend
              mode="normal"
              in2="BackgroundImageFix"
              result="effect1_dropShadow_8995_3645"
            />
            <feBlend
              mode="normal"
              in="SourceGraphic"
              in2="effect1_dropShadow_8995_3645"
              result="shape"
            />
          </filter>
          <linearGradient
            id="paint0_linear_8995_3645"
            x1="50"
            y1="25"
            x2="110"
            y2="85"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#09BD3F" />
            <stop offset="1" stop-color="#09812D" />
          </linearGradient>
        </defs>
      </svg>
    </div>

    <!-- js -->
     <script src=" {{ asset('front_end/assets/js/jquery-3.7.1.min.js') }} "></script>
     <script src=" {{ asset('front_end/assets/js/index.js') }} "></script>
     <script src=" {{ asset('front_end/assets/js/home-slider.js') }} "></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
      AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
      });
    </script>
  </body>
</html>