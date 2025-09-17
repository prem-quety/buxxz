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
                                        <h1 class="text-6xl md:text-7xl lg:text-7xl font-semibold leading-snug"
                                            data-swiper-parallax="-20">
                                            Your Ultimate
                                            <span class="text-primary flex items-center">
                                                <svg class="mr-2.5" xmlns="http://www.w3.org/2000/svg" width="68"
                                                    height="68" viewBox="0 0 68 68" fill="none">
                                                    <path
                                                        d="M34 0L43.6167 24.3833L68 34L43.6167 43.6167L34 68L24.3833 43.6167L0 34L24.3833 24.3833L34 0Z"
                                                        fill="var(--primary)" />
                                                </svg>
                                                Stationery Store
                                            </span>
                                            for All Your Creative <br /> & Office Needs.
                                        </h1>


                                        <p class="text-2xl md:text-3xl lg:text-4xl font-medium text-gray-700 mt-3"
                                            data-swiper-parallax="-40">
                                            Smart Stationery for
                                            <span class="text-primary font-bold">Smarter</span> Work!
                                        </p>
                                    </div>
                                    <div class="content-btn" data-swiper-parallax="-60">
                                        <a href="shop-cart.html"
                                            class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden xl:mr-4 mr-2">
                                            ADD TO CART
                                        </a>
                                        <a href="shop-standard.html"
                                            class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl duration-700 hover:bg-secondary hover:text-white relative overflow-hidden">
                                            VIEW DETAILS
                                        </a>
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
                                        <img src="assets/images/main-slider/slider2/5755349.png" alt="banner-media"
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
                            <a href="{{ route('store.categories') }}">
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
                            <a href="{{ route('store.categories') }}">
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
                            <a href="{{ route('store.categories') }}">
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
                            <a href="{{ route('store.categories') }}">
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
                            <a href="{{ route('store.categories') }}">
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
                            <a href="{{ route('store.categories') }}">
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
                href="{{ route('store.categories') }}">
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
                                <p>Discover the most trending products in BuzzX.</p>
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
                                        <img src="assets/images/shop/product/pic37.webp" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Premium Color Marker Set</a></h5>
                                        <h5 class="max-sm:text-2xs">$12</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic38.webp" alt="image"
                                            class="rounded-3xl h-96 duration-500 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Acrylic Vertical Drawer</a></h5>
                                        <h5 class="max-sm:text-2xs">$25</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic16.avif" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Highlighters & Markers</a></h5>
                                        <h5 class="max-sm:text-2xs">$10</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic17.avif" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-bflock font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Paint Brushes</a></h5>
                                        <h5 class="max-sm:text-2xs">$120</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic18.avif" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Multicolor Liquid Inks</a></h5>
                                        <h5 class="max-sm:text-2xs">$30</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic39.jpg" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Fountain Pens Pack</a></h5>
                                        <h5 class="max-sm:text-2xs">$15</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic40.webp" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Magazine File Holder</a></h5>
                                        <h5 class="max-sm:text-2xs">$45</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-1 h-full group">
                                    <div class="relative overflow-hidden rounded-3xl duration-500">
                                        <img src="assets/images/shop/product/pic41.avif" alt="image"
                                            class="rounded-3xl duration-500 h-96 w-full group-hover:-translate-y-5">
                                        <div
                                            class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                            <a href="javascript:void(0);" @click="open = true"
                                                class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                <i class="fa-solid fa-eye md:hidden block"></i>
                                                <span class="md:block hidden">Isn't it Amazing?</span>
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
                                                href="shop-list.html">Sticky Notes Pack</a></h5>
                                        <h5 class="max-sm:text-2xs">$80</h5>
                                    </div>
                                    <div
                                        class="absolute top-5 left-5 max-sm:top-2.5 max-sm:left-2.5 w-auto flex items-center justify-between">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section
            class="pt-17 pb-13.5 max-lg:pt-13.5 max-lg:pb-5 relative z-1 [background:var(--gradient2)] rounded-4xl mx-20 max-3xl:mx-10 max-md:!mx-2.5 companies-section overflow-hidden">
            <div class="container">
                <div class="row justify-between items-end">
                    <div class="lg:w-2/3 md:w-2/3 w-full">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="text-6xl max-xl:text-[45px] max-md:!text-2.5xl capitalize text-white">Partnered with
                                Dozens of Trusted Companies</h2>
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
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop invert">
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
                                        class="w-[90px] max-sm:w-17 group-hover:animate-toBottomFromTop invert">
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



        <!-- Feature Box -->
        <div class="relative z-1 image-wrapper">
            <div class="container-fluid !px-0">
                <div class="row gx-0">
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/1.webp" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full ">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.2s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/2.webp" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/3.webp" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.4s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/4.jpg" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/5.webp" alt=""
                                    class="duration-300 group-hover:[transform:scale(1.3)_rotate(-20deg)] w-full">
                            </a>
                        </div>
                    </div>
                    <div class="xl:w-1/6 w-1/3 wow fadeIn" data-wow-delay="0.6s">
                        <div class="block relative overflow-hidden group">
                            <a href="portfolio-tiles.html">
                                <img src="assets/images/clothe/feature/6.webp" alt=""
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
                                <p class="font-medium">Follow @BuzzX</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Feature Box End -->


    </div>
@endsection