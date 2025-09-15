@extends('layouts.app')

@section('content')

    <div class="page-content bg-light overflow-hidden" x-data="{ open: false }">

        <!--Swiper Banner Start -->
        <div class="overflow-hidden relative main-slider style-2">
            <div class="main-swiper2">
                <div class="container">
                    <div
                        class="h-[800px] pt-7.5 pb-20 max-3xl:h-[700px] max-3xl:pb-13.5 max-xl:!h-[550px] max-xl:!pb-[75px] max-lg:mb-7.5 max-sm:!my-3.6 banner-content">
                        <div class="row">
                            <div class="xl:w-7/12 lg:w-7/12 w-full self-center">
                                <div class="max-sm:mb-7.5">
                                    <div class="relative z-[2] pb-[45px] max-xl:pb-5">
                                        <h1 data-swiper-parallax="-20">Your Ultimate <span
                                                class="text-primary flex items-center"><svg class="mr-2.5"
                                                    xmlns="http://www.w3.org/2000/svg" width="68" height="68"
                                                    viewBox="0 0 68 68" fill="none">
                                                    <path
                                                        d="M34 0L43.6167 24.3833L68 34L43.6167 43.6167L34 68L24.3833 43.6167L0 34L24.3833 24.3833L34 0Z"
                                                        fill="var(--primary)" />
                                                </svg> Online Store</span>for All Your Needs.</h1>
                                        <p class="text-2xl max-xl:text-xl max-md:!text-lg" data-swiper-parallax="-40">No
                                            code need. Plus free shippng on <span class="text-primary">$99+</span> orders!
                                        </p>
                                    </div>
                                    <div class="content-btn" data-swiper-parallax="-60">
                                        <a href="shop-cart.html"
                                            class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden xl:mr-4 mr-2">ADD
                                            TO CART</a>
                                        <a href="shop-standard.html"
                                            class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl duration-700 hover:bg-secondary hover:text-white relative overflow-hidden ">VIEW
                                            DETAILS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:w-5/12 lg:w-5/12 w-full">
                                <div
                                    class="-mr-25 ml-13.5 relative z-1 max-3xl:!mr-0 max-4xl:-mr-10 max-md:ml-7.5 max-sm:!ml-0 max-sm:float-left max-sm:w-full banner-media">
                                    <div class="shap"></div>
                                    <div
                                        class="border border-[#DFDFDF] absolute top-[18%] left-[-13%] w-[61%] h-[54%] rounded-ss-[150px] -z-1">
                                    </div>
                                    <div
                                        class="border border-[#DFDFDF] absolute bottom-[-7%] right-[-7%] w-[50%] h-[35%] rounded-ee-[150px] -z-1">
                                    </div>

                                    <div class="overflow-hidden h-[600px]" data-swiper-parallax="-100">
                                        <img src="assets/images/main-slider/slider2/pic2.avif" alt="banner-media"
                                            class="w-full h-full object-cover">
                                    </div>



                                    <ul class="star-list">
                                        <li
                                            class="absolute animate-rotate top-13.5 left-25 max-xl:top-3.6 max-xl:left-[35px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57"
                                                viewBox="0 0 57 57" fill="none">
                                                <path
                                                    d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                    fill="var(--rgba-primary-2)" />
                                            </svg>
                                        </li>
                                        <li class="absolute animate-rotate top-[30%] right-[-15%]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57"
                                                viewBox="0 0 57 57" fill="none">
                                                <path
                                                    d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                    fill="var(--rgba-primary-2)" />
                                            </svg>
                                        </li>
                                        <li class="absolute animate-rotate bottom-[20%] left-[-25%]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57"
                                                viewBox="0 0 57 57" fill="none">
                                                <path
                                                    d="M28.5 0L33.3366 23.6634L57 28.5L33.3366 33.3366L28.5 57L23.6634 33.3366L0 28.5L23.6634 23.6634L28.5 0Z"
                                                    fill="var(--rgba-primary-2)" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute top-5 left-6.1 xl:block hidden">
                    <ul class="flex items-center flex-col">
                        <li class="py-5 [writing-mode:tb-rl]">
                            <a class="text-sm font-semibold uppercase tracking-widest"
                                href="https://www.instagram.com/dexignzone/" target="_blank">Instagram</a>
                        </li>
                        <li class="py-5 [writing-mode:tb-rl]">
                            <a class="text-sm font-semibold uppercase tracking-widest"
                                href="https://www.facebook.com/dexignzone" target="_blank">Facebook</a>
                        </li>
                        <li class="py-5 [writing-mode:tb-rl]">
                            <a class="text-sm font-semibold uppercase tracking-widest"
                                href="https://twitter.com/dexignzones" target="_blank">twitter</a>
                        </li>
                    </ul>
                </div>
                <a href="contact-us-2.html"
                    class="max-lg:hidden btn py-3.6 px-1.5 text-sm uppercase font-Lufga block leading-[1.2] bg-[#24262B] text-white rounded-xl duration-700 absolute bottom-7 left-[26px] overflow-hidden rotate-180 [writing-mode:vertical-rl]">Let’s
                    talk</a>
            </div>
        </div>
        <!--Swiper Banner End-->

        <!--Featured Section Start-->
        <div
            class="3xl:pt-25 3xl:pb-17 md:pt-17 md:pb-10 sm:pt-13.5 sm:pb-5 pt-10 pb-5 relative z-1 rounded-4xl bg-lightdark mx-20 max-3xl:mx-10 max-lg:mx-5 category-section">
            <div class="container">
                <div class="row gx-xl-4 g-3">
                    <div class="md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pl-10 max-lg:pl-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic13.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-ee-7xl max-md:rounded-ee-4xl">
                                <div
                                    class="absolute left-0 max-lg:left-[-15px] max-sm:!-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Accessories</div>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pl-10 max-lg:pl-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic8.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-es-7xl max-md:rounded-es-4xl">
                                <div
                                    class="absolute left-0 max-lg:left-[-15px] max-sm:!-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Highlighters</div>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-5/12 md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pl-10 max-lg:pl-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic7.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-ee-7xl max-md:rounded-ee-4xl">
                                <div
                                    class="absolute left-0 max-lg:left-[-15px] max-sm:!-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Pencils</div>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pr-10 max-lg:pr-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic9.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-ss-7xl max-md:rounded-ss-4xl">
                                <div
                                    class="absolute right-0 max-lg:right-[-15px] max-sm:!right-auto max-sm:-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Brushes</div>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-5/12 md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pr-10 max-lg:pr-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic10.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-ss-7xl max-md:rounded-ss-4xl">
                                <div
                                    class="absolute right-0 max-lg:right-[-15px] max-sm:!right-auto max-sm:-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Bags</div>
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="relative z-1 mb-13.5 max-lg:mb-0 pr-10 max-lg:pr-0">
                            <a href="shop-with-category.html">
                                <img src="assets/images/category/pic12.avif" alt=""
                                    class="w-full h-[300px] max-sm:h-[150px] object-cover border-4 border-white rounded-3.5xl rounded-ss-7xl max-md:rounded-ss-4xl">
                                <div
                                    class="absolute right-0 max-lg:right-[-15px] max-sm:!right-auto max-sm:-left-2.5 bg-white border-4 border-white font-Lufga text-xxl max-lg:text-sm max-sm:!text-xs py-2 px-5 max-lg:py-1.1 max-lg:px-2.5 max-sm:!py-1 max-sm:!px-1.5 bottom-7.5 max-lg:bottom-3.6 max-sm:!bottom-2 capitalize rounded-3.5xl max-sm:rounded-lg shadow-[0px_15px_30px_0px_rgba(0,0,0,0.1)] duration-500 hover:bg-primary hover:text-white">
                                    Pouches</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="w-[140px] p-2.5 absolute rounded-full inline-block left-1/2 top-[-7%] [transform:translate(-50%,_-7%)] max-lg:hidden icon-button"
                href="shop-with-category.html">
                <div
                    class="flex items-center justify-center size-[140px] rounded-full animate-rotate text-center text-row word-rotate-box c-black border-white">
                    <span class="word-rotate">category - category -</span>
                    <svg class="block [animation-direction:reverse] animate-rotate badge__emoji"
                        xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <g clip-path="url(#clip0_161_568)">
                            <path
                                d="M10.7239 31.3072L19.0059 39.5891C19.2696 39.8523 19.627 40.0001 19.9995 40.0001C20.3721 40.0001 20.7295 39.8523 20.9932 39.5891L29.2752 31.3072C29.4582 31.1236 29.5608 30.8748 29.5606 30.6156C29.5604 30.3564 29.4573 30.1078 29.274 29.9245C29.0907 29.7412 28.8421 29.6381 28.5829 29.6379C28.3237 29.6377 28.075 29.7404 27.8913 29.9234L20.9781 36.8368V0.978516C20.9781 0.718997 20.875 0.470108 20.6915 0.286601C20.508 0.103093 20.2591 0 19.9995 0C19.74 0 19.4911 0.103093 19.3076 0.286601C19.1241 0.470108 19.021 0.718997 19.021 0.978516V36.8368L12.1077 29.9234C11.9241 29.7404 11.6754 29.6377 11.4162 29.6379C11.1569 29.6381 10.9084 29.7412 10.7251 29.9245C10.5418 30.1078 10.4387 30.3564 10.4385 30.6156C10.4383 30.8748 10.5409 31.1236 10.7239 31.3072Z"
                                fill="#000" />
                        </g>
                        <defs>
                            <clipPath id="clip0_161_568">
                                <rect width="40" height="40" fill="#000" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </a>
        </div>
        <!--Featured Section End-->

        <!-- Tranding Start-->
        <section class="3xl:py-25 md:py-17 sm:py-13.5 py-10 overflow-hidden">
            <div class="container">
                <div class=" row md:justify-between items-center">
                    <div class="lg:w-1/2 md:w-2/3 w-full">
                        <div class="mb-7.5  wow fadeInUp" data-wow-delay="0.2s">
                            <div class="left-content">
                                <h2 class="title">What's trending now</h2>
                                <p>Discover the most trending products in Pixio.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 md:w-1/3 w-full md:text-right">
                        <a href="shop-cart.html"
                            class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden mb-7.5">View
                            All</a>
                    </div>
                </div>

                <div class="swiper-btn-center-lr">
                    <div class="swiper swiper-four">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic14.avif" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Cozy Knit Cardigan Sweater</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic15.avif" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Sophisticated Swagger Suit</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic16.avif" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Classic Denim Skinny Jeans</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic17.avif" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Athletic Mesh Sports Leggings</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/1.png" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Cozy Knit Cardigan Sweater</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/2.png" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Sophisticated Swagger Suit</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/3.png" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Classic Denim Skinny Jeans</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/4.png" alt="image"
                                            class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Quick View</span>
                                            </a>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                            <div
                                                class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                        <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                                href="shop-list.html">Athletic Mesh Sports Leggings</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                        <span
                                            class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                            20% Off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tranding Stop-->

        <section class="relative">
            <div
                class="flex items-center relative z-1 py-[280px] max-xl:py-[220px] max-lg:!py-[180px] bg-cover bg-top bg-[url('../images/background/bg2.jpg')] bg-fixed video-wrapper bg-parallax">
                <div class="container">
                    <div class="flex justify-center">
                        <a class="w-[140px] p-2.5 rounded-full inline-block max-3xl:hidden scale-125 max-md:scale-100 icon-button popup-youtube"
                            href="https://www.youtube.com/watch?v=YwYoyQ1JdpQ">
                            <div
                                class="flex items-center justify-center size-[140px] rounded-full animate-rotate text-center text-row word-rotate-box c-black border-white">
                                <span class="word-rotate">shop - shop - shop - shop -</span>
                                <svg class="block [animation-direction:reverse] animate-rotate badge__emoji"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none">
                                    <g clip-path="url(#clip0_671_345)">
                                        <path
                                            d="M34.6779 15.3843L11.0529 0.821429C9.34369 -0.230839 7.2772 -0.274589 5.52493 0.704398C3.77266 1.68323 2.72656 3.46612 2.72656 5.47323V34.4664C2.72656 37.5013 5.17188 39.9835 8.17735 39.9999C8.18556 39.9999 8.19376 40 8.20181 40C9.14103 39.9999 10.1198 39.7056 11.0339 39.1478C11.7693 38.6991 12.0017 37.7392 11.5531 37.0039C11.1044 36.2685 10.1444 36.0361 9.40923 36.4848C8.98165 36.7456 8.56407 36.8805 8.19415 36.8804C7.06016 36.8742 5.84602 35.9028 5.84602 34.4665V5.47331C5.84602 4.6123 6.29477 3.84769 7.04634 3.42776C7.79798 3.00784 8.68431 3.02659 9.41658 3.47745L33.0417 18.0404C33.7518 18.4776 34.1581 19.2065 34.1564 20.0405C34.1547 20.8743 33.7454 21.6016 33.0314 22.0373L15.9503 32.4958C15.2156 32.9456 14.9847 33.9059 15.4346 34.6405C15.8843 35.3752 16.8446 35.6061 17.5792 35.1563L34.6583 24.6991C36.2935 23.7015 37.2721 21.9624 37.276 20.0467C37.2799 18.1312 36.3083 16.3881 34.6779 15.3843Z"
                                            fill="#FEEB9D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_671_345">
                                            <rect width="40" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative z-[1000] bg-lightdark mt-[-35px] -rotate-2 overflow-hidden">
                <ul class="py-2.5 px-5 max-sm:py-0 z-1 relative flex items-center flex-nowrap animate-ticker">
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Jacket
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Jeans
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Shirts
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Shorts
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">t-shirt
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Blazer
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Jacket
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Jeans
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Shirts
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <h2 class="text-5xl max-sm:text-3xl uppercase tracking-[12px] w-max font-normal leading-[1]">Shorts
                        </h2>
                    </li>
                    <li class="py-3.6 px-5 max-xl:py-2.5 max-xl:px-5 max-sm:!p-2.5 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="60" viewBox="0 0 61 60" fill="none">
                            <path opacity="0.3"
                                d="M29.302 -0.00499268L38.533 21.2005L60.3307 28.9297L39.1253 38.1607L31.396 59.9585L22.165 38.753L0.367297 31.0237L21.5728 21.7928L29.302 -0.00499268Z"
                                fill="black" />
                        </svg>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Products  Section Start-->
        <section class="3xl:pt-25 3xl:pb-17 md:pt-17 md:pb-10 sm:pt-13.5 sm:pb-5 pt-10 pb-5">
            <div class="container">
                <div class="row md:justify-between items-start">
                    <div class="lg:w-1/2 w-full">
                        <div class="mb-7.5 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="left-content">
                                <h2 class="text-4xl max-lg:text-2.5xl max-sm:!text-xl mb-2">Most Popular Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="mb-5 border border-black w-fit p-1.5 rounded-4xl wow fadeInUp lg:ml-auto max-lg:w-full max-lg:text-center max-sm:p-1 max-sm:mb-10 site-filters style-1"
                            data-wow-delay="0.4s">
                            <ul class="filters" data-bs-toggle="buttons">
                                <li class="py-1.1 px-5 max-sm:px-2 rounded-5xl inline-block text-sm duration-500 active">
                                    <input type="radio" class="hidden">
                                    <a href="javascript:void(0);" class="font-medium">ALL</a>
                                </li>
                                <li class="py-1.1 px-5 max-sm:px-2 rounded-5xl inline-block text-sm duration-500"
                                    data-filter=".Dresses">
                                    <input type="radio" class="hidden">
                                    <a href="javascript:void(0);" class="font-medium">Dresses</a>
                                </li>
                                <li class="py-1.1 px-5 max-sm:px-2 rounded-5xl inline-block text-sm duration-500"
                                    data-filter=".Tops">
                                    <input type="radio" class="hidden">
                                    <a href="javascript:void(0);" class="font-medium">Tops</a>
                                </li>
                                <li class="py-1.1 px-5 max-sm:px-2 rounded-5xl inline-block text-sm duration-500"
                                    data-filter=".Outerwear">
                                    <input type="radio" class="hidden">
                                    <a href="javascript:void(0);" class="font-medium">Outerwear</a>
                                </li>
                                <li class="py-1.1 px-5 max-sm:px-2 rounded-5xl inline-block text-sm duration-500"
                                    data-filter=".Jacket">
                                    <input type="radio" class="hidden">
                                    <a href="javascript:void(0);" class="font-medium">Jacket</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <ul id="masonry2" class="row g-xl-4 g-3">
                        <div class="grid-sizer w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 !m-0"></div>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Tops wow fadeInUp" data-wow-delay="0.6s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/1.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Cozy Knit Cardigan Sweater</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Dresses Jacket wow fadeInUp"
                            data-wow-delay="0.8s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/2.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Sophisticated Swagger Suit</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Dresses wow fadeInUp" data-wow-delay="1.0s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/3.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Classic Denim Skinny Jeans</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Tops Jacket wow fadeInUp"
                            data-wow-delay="1.2s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/4.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Athletic Mesh Sports Leggings</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Dresses wow fadeInUp" data-wow-delay="0.2s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/5.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Vintage Denim Overalls Shorts</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Outerwear wow fadeInUp" data-wow-delay="0.4s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/6.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Satin Wrap Party Blouse</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Dresses wow fadeInUp" data-wow-delay="0.6s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/7.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Plaid Wool Winter Coat</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item w-1/2 lg:w-1/4 md:w-1/3 sm:w-1/2 Tops wow fadeInUp" data-wow-delay="2.0s">
                            <div class="relative z-1 h-full group">
                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                    <img src="assets/images/shop/product/8.png" alt="image"
                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5">
                                    <div
                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                        <a href="javascript:void(0);" @click="open = true"
                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                            <span class="md:block hidden">Quick View</span>
                                        </a>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                            <i class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                            <i class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                        <div
                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                            <i class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize"><a
                                            href="shop-list.html">Water-Resistant Windbreaker Jacket</a></h5>
                                    <h5 class="max-sm:text-2xs">$80</h5>
                                </div>
                                <div
                                    class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">
                                    <span
                                        class="py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs bg-white font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-3.5xl">Get
                                        20% Off</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Products Section Start-->

        <section
            class="pt-17 pb-13.5 max-lg:pt-13.5 max-lg:pb-5 relative z-1 [background:var(--gradient2)] rounded-4xl mx-20 max-3xl:mx-10 max-md:!mx-2.5 companies-section overflow-hidden">
            <div class="container">
                <div class="row justify-between items-end">
                    <div class="lg:w-2/3 md:w-2/3 w-full">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="text-6xl max-xl:text-[45px] max-md:!text-2.5xl capitalize text-white">We’re just keep
                                growing with 6.3k trusted companies</h2>
                        </div>
                    </div>
                    <div class="md:w-1/3 w-full md:flex justify-center mb-7.5 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="icon-button w-[140px] p-2.5 relative rounded-full md:block hidden mb-7.5 scale-150 after:content-[''] after:absolute after:top-[-52%] after:left-[-3px] after:rounded-b-[200px] after:bg-[#ffffff80] after:w-[calc(100%_+_25px)] after:h-[calc(100%_+_90px)] after:-z-1"
                            href="blog-tag.html">
                            <div
                                class="flex justify-center items-center size-[140px] rounded-full animate-rotate text-center after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:rounded-full text-row word-rotate-box c-black border-secondary bg-secondary">
                                <span class="word-rotate">partner - partner - </span>
                                <svg class="w-14.5 block [animation-direction:reverse] animate-rotate"
                                    xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86"
                                    fill="none">
                                    <path
                                        d="M85.9974 27.7066L78.4547 15.2934L50.56 30.5869V0H35.44V30.5869L7.54534 15.2934L0 27.7066L27.9018 43L0.00212688 58.2934L7.5451 70.7066L35.44 55.4131V86H50.56V55.4131L78.4544 70.7066L86 58.2934L58.0982 43L85.9974 27.7066Z"
                                        fill="#FAFAF8" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="md:pt-7.5 pt-0 wow fadeInUp" data-wow-delay="0.2s" id="tagSlider">
                    <div class="flex items-center whitespace-nowrap md:py-3 py-2 item-wrap">
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo1.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo2.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo3.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo4.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo5.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo6.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo7.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo8.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo1.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo2.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:pb-7.5 pb-0 wow fadeInUp" data-wow-delay="0.4s" id="tagSlider2">
                    <div class="flex items-center whitespace-nowrap md:py-3 py-2 item-wrap">
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo1.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo2.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo3.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo4.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo5.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo6.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo7.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo8.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo1.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                        <div class="md:px-3 px-2 item">
                            <a href="javascript:void(0);" class="group">
                                <div
                                    class="flex items-center justify-center bg-white h-full min-h-25 rounded-3xl w-[190px] max-md:w-[150px] max-md:h-17 max-sm:!w-[125px] max-sm:h-13.5">
                                    <img src="assets/images/companies/logo2.png" alt=""
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Start -->
        <section class="3xl:pt-25 3xl:pb-17 md:pt-17 md:pb-10 sm:pt-13.5 sm:pb-5 pt-10 pb-5">
            <div class="container">
                <div class="mb-10 max-md:mb-5 wow fadeInUp md:flex justify-between items-center" data-wow-delay="0.1s">
                    <div class="left-content">
                        <h2 class="mb-2">latest Post</h2>
                        <p class="mb-4">Discover the most trending products in Pixio.</p>
                    </div>
                    <a href="blog-archive.html"
                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden mb-7.5">View
                        All</a>
                </div>
                <div class="row blog-shap">
                    <div class="md:w-1/2 w-full max-xl:mb-7.5 mb-13.5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="lg:flex rounded-3.5xl bg-white block">
                            <div
                                class="xl:w-[275px] xl:min-w-[275px] xl:h-[320px] lg:w-[200px] lg:min-w-[200px] lg:h-[260px] size-full min-w-full relative overflow-hidden">
                                <img src="assets/images/blog/blogpost-4/pic1.jpg" alt="/"
                                    class="size-full object-cover [mask-size:100%_100%] [mask-image:url(../images/shape/shape-1.png)] max-lg:[mask-image:none] max-lg:rounded-t-3.5xl">
                            </div>
                            <div class="flex w-full flex-col justify-center p-6.1 max-2lg:p-5 pt-7.5 relative">
                                <div class="mb-2.5">
                                    <ul class="flex items-center flex-wrap">
                                        <li
                                            class="py-1.1 px-3 inline-block rounded-md text-2xs bg-title font-medium text-white leading-[1.2] mb-[3px]">
                                            18 May 2024</li>
                                    </ul>
                                </div>
                                <h4 class="text-2xl max-2lg:text-lg mb-7.5 font-medium">
                                    <a href="blog-both-sidebar.html">Trendsetter Chronicles: Unveiling the Latest in
                                        Fashion</a>
                                </h4>
                                <a href="blog-both-sidebar.html"
                                    class="py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl uppercase mt-auto duration-700 hover:bg-primary hover:border-primary hover:text-white relative w-fit">Read
                                    more
                                    <i
                                        class="fa-solid fa-arrow-right border border-secondary rounded-full absolute -right-3 z-9 bg-white text-center !text-title size-6.1 leading-6"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full max-xl:mb-7.5 mb-13.5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="lg:flex rounded-3.5xl bg-white block">
                            <div
                                class="xl:w-[275px] xl:min-w-[275px] xl:h-[320px] lg:w-[200px] lg:min-w-[200px] lg:h-[260px] size-full min-w-full relative overflow-hidden">
                                <img src="assets/images/blog/blogpost-4/pic2.jpg" alt="/"
                                    class="size-full object-cover [mask-size:100%_100%] [mask-image:url(../images/shape/shape-2.png)] max-lg:[mask-image:none] max-lg:rounded-t-3.5xl">
                            </div>
                            <div class="flex w-full flex-col justify-center p-6.1 max-2lg:p-5 pt-7.5 relative">
                                <div class="mb-2.5">
                                    <ul class="flex items-center flex-wrap">
                                        <li
                                            class="py-1.1 px-3 inline-block rounded-md text-2xs bg-title font-medium text-white leading-[1.2] mb-[3px]">
                                            15 Aug 2024</li>
                                    </ul>
                                </div>
                                <h4 class="text-2xl max-2lg:text-lg mb-7.5 font-medium">
                                    <a href="blog-both-sidebar.html">Runway Rundown: Decoding Fashion Week’s Best Looks</a>
                                </h4>
                                <a href="blog-both-sidebar.html"
                                    class="py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl uppercase mt-auto duration-700 hover:bg-primary hover:border-primary hover:text-white relative w-fit">Read
                                    more
                                    <i
                                        class="fa-solid fa-arrow-right border border-secondary rounded-full absolute -right-3 z-9 bg-white text-center !text-title size-6.1 leading-6"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full max-xl:mb-7.5 mb-13.5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="lg:flex rounded-3.5xl bg-white block">
                            <div
                                class="xl:w-[275px] xl:min-w-[275px] xl:h-[320px] lg:w-[200px] lg:min-w-[200px] lg:h-[260px] size-full min-w-full relative overflow-hidden">
                                <img src="assets/images/blog/blogpost-4/pic3.jpg" alt="/"
                                    class="size-full object-cover [mask-size:100%_100%] [mask-image:url(../images/shape/shape-3.png)] max-lg:[mask-image:none] max-lg:rounded-t-3.5xl">
                            </div>
                            <div class="flex w-full flex-col justify-center p-6.1 max-2lg:p-5 pt-7.5 relative">
                                <div class="mb-2.5">
                                    <ul class="flex items-center flex-wrap">
                                        <li
                                            class="py-1.1 px-3 inline-block rounded-md text-2xs bg-title font-medium text-white leading-[1.2] mb-[3px]">
                                            22 Sep 2024</li>
                                    </ul>
                                </div>
                                <h4 class="text-2xl max-2lg:text-lg mb-7.5 font-medium">
                                    <a href="blog-both-sidebar.html">loset Confidential: Behind-the-Scenes of a
                                        Fashionista</a>
                                </h4>
                                <a href="blog-both-sidebar.html"
                                    class="py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl uppercase mt-auto duration-700 hover:bg-primary hover:border-primary hover:text-white relative w-fit">Read
                                    more
                                    <i
                                        class="fa-solid fa-arrow-right border border-secondary rounded-full absolute -right-3 z-9 bg-white text-center !text-title size-6.1 leading-6"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full max-xl:mb-7.5 mb-13.5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="lg:flex rounded-3.5xl bg-white block">
                            <div
                                class="xl:w-[275px] xl:min-w-[275px] xl:h-[320px] lg:w-[200px] lg:min-w-[200px] lg:h-[260px] size-full min-w-full relative overflow-hidden">
                                <img src="assets/images/blog/blogpost-4/pic4.jpg" alt="/"
                                    class="size-full object-cover [mask-size:100%_100%] [mask-image:url(../images/shape/shape-4.png)] max-lg:[mask-image:none] max-lg:rounded-t-3.5xl">
                            </div>
                            <div class="flex w-full flex-col justify-center p-6.1 max-2lg:p-5 pt-7.5 relative">
                                <div class="mb-2.5">
                                    <ul class="flex items-center flex-wrap">
                                        <li
                                            class="py-1.1 px-3 inline-block rounded-md text-2xs bg-title font-medium text-white leading-[1.2] mb-[3px]">
                                            20 Feb 2024</li>
                                    </ul>
                                </div>
                                <h4 class="text-2xl max-2lg:text-lg mb-7.5 font-medium">
                                    <a href="blog-both-sidebar.html">DIY Couture: Crafting Your Own Fashion Masterpieces</a>
                                </h4>
                                <a href="blog-both-sidebar.html"
                                    class="py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl uppercase mt-auto duration-700 hover:bg-primary hover:border-primary hover:text-white relative w-fit">Read
                                    more
                                    <i
                                        class="fa-solid fa-arrow-right border border-secondary rounded-full absolute -right-3 z-9 bg-white text-center !text-title size-6.1 leading-6"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog End -->

        <!-- Feature Box -->
        <div class="relative z-1 image-wrapper">
            <div class="container-fluid !px-0">
                <div class="row gx-0">
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/1.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.2s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/2.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/3.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.4s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/4.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/5.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.6s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/6.png" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <a href="https://www.instagram.com/dexignzone/"
                        class="absolute left-1/2 top-1/2 [transform:translate(-50%,_-50%)] w-fit">
                        <div class="py-3.6 px-7.5 rounded-xl bg-[#ffffffb3] backdrop-blur-[7px] flex items-center wow bounceIn"
                            data-wow-delay="0.1s">
                            <div class="w-7 mr-2.5">
                                <img src="assets/images/insta-follow.png" alt="">
                            </div>
                            <div>
                                <p class="font-medium">Follow @Pixio</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Feature Box End -->

        <!-- Quick Modal Start -->
        <div class="fixed inset-0 bg-black/60 transition-opacity z-999999 overflow-x-hidden overflow-y-auto mt-0"
            @keydown.escape.window="open = false" x-cloak x-show="open" x-transition:enter="transition ease-in duration-800"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="flex items-center justify-center min-h-screen">
                <div class="modal-dialog mx-[10px] flex flex-col relative rounded-lg bg-card w-full pointer-events-auto max-w-[1070px]"
                    @click.away="open = false">
                    <div class="modal-content bg-white max-md:p-7.5 max-md:pt-13.5 max-sm:!px-3.6 max-sm:!pb-5">
                        <button type="button" class="absolute right-2 top-2 text-secondary text-2xl size-10 z-1"
                            @click="open = false">
                            <i class="icon feather icon-x"></i>
                        </button>
                        <div class="modal-body">
                            <div class="row g-xl-4 g-3">
                                <div class="md:w-1/2 w-full">
                                    <div class="dz-product-detail mb-0">
                                        <div class="relative swiper-btn-center-lr">
                                            <div class="swiper quick-modal-swiper2">
                                                <div class="swiper-wrapper" id="lightgallery">
                                                    <div class="swiper-slide">
                                                        <div class="relative overflow-hidden DZoomImage group">
                                                            <a class="mfp-link lg-item"
                                                                href="assets/images/products/lady-1.png"
                                                                data-src="assets/images/products/lady-1.png">
                                                                <i
                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                            </a>
                                                            <img src="assets/images/products/lady-1.png" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="relative overflow-hidden DZoomImage group">
                                                            <a class="mfp-link lg-item"
                                                                href="assets/images/products/lady-2.png"
                                                                data-src="assets/images/products/lady-2.png">
                                                                <i
                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                            </a>
                                                            <img src="assets/images/products/lady-2.png" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="relative overflow-hidden DZoomImage group">
                                                            <a class="mfp-link lg-item"
                                                                href="assets/images/products/lady-3.png"
                                                                data-src="assets/images/products/lady-3.png">
                                                                <i
                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                            </a>
                                                            <img src="assets/images/products/lady-3.png" alt="image">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper product-gallery-swiper thumb-swiper-lg swiper-vertical absolute top-7.5 left-7.5">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                        <img src="assets/images/products/thumb-img/lady-1.png" alt="image"
                                                            class="border border-white">
                                                    </div>
                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                        <img src="assets/images/products/thumb-img/lady-2.png" alt="image"
                                                            class="border border-white">
                                                    </div>
                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                        <img src="assets/images/products/thumb-img/lady-3.png" alt="image"
                                                            class="border border-white">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:w-1/2 w-full">
                                    <div class="dz-product-detail style-2 xl:pl-4 pt-2 mb-0">
                                        <div class="dz-content">
                                            <div class="flex mb-3.6">
                                                <div class="flex-[1]">
                                                    <span
                                                        class="inline-block py-1.1 px-3.6 max-sm:py-0.5 max-sm:px-2 max-sm:text-xxs font-Lufga text-xs min-w-[22px] min-h-[22px] leading-[18px] uppercase text-center font-semibold rounded-md bg-secondary text-white mb-2">SALE
                                                        20% Off</span>
                                                    <h4 class="sm:text-2.5xl text-2xl font-bold mb-1"><a
                                                            href="shop-list.html">Cozy Knit Cardigan Sweater</a></h4>
                                                    <div class="flex">
                                                        <ul class="flex gap-0.5 items-center mr-2">
                                                            <li class="text-sm text-[#ff8a00] star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="text-sm text-[#ff8a00] star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="text-sm text-[#ff8a00] star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="text-sm text-[#e4e5e8]">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="text-sm text-[#e4e5e8]">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="text-2xs mr-2">4.7 Rating</span>
                                                        <a class="text-2xs" href="javascript:void(0);">(5 customer
                                                            reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-2sm mb-4">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem
                                                Ipsum has.
                                            </p>
                                            <div class="meta-content mb-5 flex items-end">
                                                <div class="meta-content mr-4">
                                                    <label class="text-base font-bold mb-2.5 block font-Lufga">Price</label>
                                                    <span class="font-medium text-2xl font-Lufga">$125.75 <del
                                                            class="py-1.1 opacity-60 text-lg text-body">$132.17</del></span>
                                                </div>
                                                <div class="input-group">
                                                    <label
                                                        class="text-base font-bold mb-2.5 block font-Lufga">Quantity</label>
                                                    <span class="flex">
                                                        <input type="button" value="-" data-field="quantity"
                                                            class="button-minus size-10 leading-[27px] rounded-full text-center text-3xl border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                        <input type="number" step="1" value="1" name="quantity"
                                                            class="touchspin size-10 leading-[27px] rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-light outline-none">
                                                        <input type="button" value="+" data-field="quantity"
                                                            class="button-plus size-10 leading-[27px] rounded-full text-center text-3xl border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-2.5 flex flex-wrap">
                                                <a href="shop-cart.html"
                                                    class="btn py-3 px-5 text-base font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 uppercase relative overflow-hidden m-1.1">Add
                                                    To Cart</a>
                                                <a href="shop-wishlist.html"
                                                    class="btn py-3 px-5 text-base inline-flex gap-2.5 items-center justify-center font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl duration-700 hover:bg-secondary hover:text-white relative overflow-hidden m-1.1">
                                                    <i class="icon feather icon-heart"></i>
                                                    Add To Wishlist
                                                </a>
                                            </div>
                                            <div class="pt-5 border-t border-border relative">
                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                    <li class="text-sm mr-2.5"><strong
                                                            class="text-2sm font-Lufga">SKU:</strong>
                                                    </li>
                                                    <li class="text-sm mr-2.5">PRT584E63A</li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                    <li class="text-sm mr-2.5"><strong
                                                            class="text-2sm font-Lufga">Category:</strong></li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Dresses,</a>
                                                    </li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Jeans,</a></li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Swimwear,</a>
                                                    </li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Summer,</a></li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Clothing,</a>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                    <li class="text-sm mr-2.5"><strong
                                                            class="text-2sm font-Lufga">Tags:</strong></li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Casual,</a></li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Athletic,</a>
                                                    </li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Workwear,</a>
                                                    </li>
                                                    <li class="text-sm mr-2.5"><a href="shop-standard.html">Accessories,</a>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                    <li class="text-sm mr-2.5">
                                                        <a class="hover:text-primary"
                                                            href="https://www.facebook.com/dexignzone" target="_blank">
                                                            <i class="fa-brands fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li class="text-sm mr-2.5">
                                                        <a class="hover:text-primary"
                                                            href="https://www.linkedin.com/showcase/3686700/admin/"
                                                            target="_blank">
                                                            <i class="fa-brands fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                    <li class="text-sm mr-2.5">
                                                        <a class="hover:text-primary"
                                                            href="https://www.instagram.com/dexignzone/" target="_blank">
                                                            <i class="fa-brands fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li class="text-sm mr-2.5">
                                                        <a class="hover:text-primary" href="https://twitter.com/dexignzones"
                                                            target="_blank">
                                                            <i class="fa-brands fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Modal End -->
    </div>
@endsection