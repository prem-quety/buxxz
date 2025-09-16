@extends('layouts.app')

@section('content')
    <div class="page-content bg-light">
        <!--Banner Start-->
        <div class="relative min-h-[250px] max-sm:min-h-[230px] bg-cover bg-center z-[2] w-full overlay-black-light before:bg-black before:opacity-40"
            style="background-image: url('{{ asset('assets/images/background/bg1.jpg') }}')">


            <div class="container relative z-1 table h-full">
                <div class="text-center py-[90px] max-sm:py-10 table-cell align-middle h-[250px] max-sm:h-[230px]">
                    <h1 class="mb-2.5 lg:text-4.5xl md:text-3xl sm:text-2.5xl text-2xl text-white">
                        Shop With Category
                    </h1>
                    <nav>
                        <ul class="text-white">
                            <li class="mr-[3px] inline-block text-base font-medium">
                                <a href="{{route('store.index')}}" class="text-white"> Home</a>
                            </li>
                            <li
                                class="mr-[3px] pl-2 inline-block text-base font-medium before:content-['\f105'] before:font-['Font_Awesome_5_Free'] before:font-bold before:pr-3">
                                Shop With Category
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--Banner End-->

        <section class="pb-13.5 max-lg:pb-5 pt-4">
            <div class="container-fluid">
                <div class="row xl:mt-2 mt-0">

                    <div class="col-80 " x-data="{ tab: 'tab-list-grid' }">
                        <h4 class="mb-4">Category</h4>
                        <div class="row">
                            <div class="w-full">
                                <div class="swiper category-swiper mb-6.1 max-md:mb-3.6">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic13.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">SilkBliss Dress</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic14.avif" alt="image"
                                                        class="w-full h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">GlamPants</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic15.avif" alt="image"
                                                        class="w-full h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">ComfyLeggings</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic16.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">ClassicCapri</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic17.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">DapperCoat</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic18.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">ComfyLeggings</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic19.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">DenimDream Jeans</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative z-1 h-full group">
                                                <div class="overflow-hidden rounded-3xl">
                                                    <img src="assets/images/shop/product/pic16.avif" alt="image"
                                                        class="h-96 object-cover rounded-3xl duration-500 group-hover:-translate-y-5" />
                                                </div>
                                                <div class="py-3">
                                                    <h6 class="w-[70%] max-xl:w-full">
                                                        <a href="shop-list.html">SilkBliss Dress</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mb-5 max-md:block border-t border-border pt-5">
                            <div class="flex items-center flex-1 max-xl:py-2">
                                <ul class="flex items-center flex-wrap max-3xl:hidden filter-tag">
                                    <li class="py-1.1">
                                        <a href="javascript:void(0);"
                                            class="py-1.5 px-2.5 mr-2.5 border border-secondary rounded-2xl uppercase flex items-center justify-center text-2xs">Dresses
                                            <i class="icon feather icon-x tag-close text-lg"></i>
                                        </a>
                                    </li>
                                    <li class="py-1.1">
                                        <a href="javascript:void(0);"
                                            class="py-1.5 px-2.5 mr-2.5 border border-secondary rounded-2xl uppercase flex items-center justify-center text-2xs">Tops
                                            <i class="icon feather icon-x tag-close text-lg"></i>
                                        </a>
                                    </li>
                                    <li class="py-1.1">
                                        <a href="javascript:void(0);"
                                            class="py-1.5 px-2.5 mr-2.5 border border-secondary rounded-2xl uppercase flex items-center justify-center text-2xs">Outerwear
                                            <i class="icon feather icon-x tag-close text-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="text-sm ml-7.5 max-3xl:ml-0">Showing 1–5 Of 50 Results</span>
                            </div>
                            <div class="flex items-center">
                                <a href="javascript:void(0);" class="panel-btn mr-2 hidden max-xl:block">
                                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20"
                                        height="20">
                                        <g id="Layer_28" data-name="Layer 28">
                                            <path
                                                d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                            </path>
                                            <path
                                                d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                            </path>
                                            <path
                                                d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                            </path>
                                        </g>
                                    </svg>
                                    Filter
                                </a>
                                <div class="form-group">
                                    <select
                                        class="nice-select style-1 border-0 leading-[45px] text-2sm pl-5 pr-16 bg-transparent after:content-['\f078'] after:!text-title">
                                        <option>Latest</option>
                                        <option>Popularity</option>
                                        <option>Average rating</option>
                                        <option>Latest</option>
                                        <option>Low to high</option>
                                        <option>high to Low</option>
                                    </select>
                                </div>
                                <div class="border-l border-border max-sm:hidden">
                                    <select
                                        class="nice-select style-1 border-0 leading-[45px] text-2sm pl-5 pr-16 bg-transparent after:content-['\f078'] after:!text-title">
                                        <option>Products</option>
                                        <option>9 Products</option>
                                        <option>12 Products</option>
                                        <option>14 Products</option>
                                        <option>18 Products</option>
                                        <option>24 Products</option>
                                    </select>
                                </div>
                                <div class="border-l border-border max-md:border-none max-xl:ml-auto shop-tab">
                                    <ul class="flex" id="dz-shop-tab">
                                        <li>
                                            <a href="shop-with-category.html#tab-list-list"
                                                class="size-10 flex items-center justify-end"
                                                @click.prevent="tab = 'tab-list-list'">
                                                <svg class="size-5 opacity-30"
                                                    :class="{ '!opacity-100': tab == 'tab-list-list'}" width="512"
                                                    height="512" viewBox="0 0 512 512" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_121_190)">
                                                        <path
                                                            d="M42.667 373.333H96C119.564 373.333 138.667 392.436 138.667 416V469.333C138.667 492.898 119.564 512 96 512H42.667C19.103 512 0 492.898 0 469.333V416C0 392.436 19.103 373.333 42.667 373.333Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M42.667 186.667H96C119.564 186.667 138.667 205.77 138.667 229.334V282.667C138.667 306.231 119.564 325.334 96 325.334H42.667C19.103 325.333 0 306.231 0 282.667V229.334C0 205.769 19.103 186.667 42.667 186.667Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M42.667 0H96C119.564 0 138.667 19.103 138.667 42.667V96C138.667 119.564 119.564 138.667 96 138.667H42.667C19.103 138.667 0 119.564 0 96V42.667C0 19.103 19.103 0 42.667 0Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M230.565 373.333H468.437C492.682 373.333 512.336 392.436 512.336 416V469.333C512.336 492.897 492.682 512 468.437 512H230.565C206.32 512 186.666 492.898 186.666 469.333V416C186.667 392.436 206.32 373.333 230.565 373.333Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M230.565 186.667H468.437C492.682 186.667 512.336 205.77 512.336 229.334V282.667C512.336 306.231 492.682 325.334 468.437 325.334H230.565C206.32 325.334 186.666 306.231 186.666 282.667V229.334C186.667 205.769 206.32 186.667 230.565 186.667Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M230.565 0H468.437C492.682 0 512.336 19.103 512.336 42.667V96C512.336 119.564 492.682 138.667 468.437 138.667H230.565C206.32 138.667 186.666 119.564 186.666 96V42.667C186.667 19.103 206.32 0 230.565 0Z"
                                                            fill="black"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_121_190">
                                                            <rect width="512" height="512" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-with-category.html#tab-list-column"
                                                class="size-10 flex items-center justify-end"
                                                @click.prevent="tab = 'tab-list-column'">
                                                <svg class="size-5 opacity-30"
                                                    :class="{ '!opacity-100': tab == 'tab-list-column'}"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                    x="0px" y="0px" viewBox="0 0 512 512"
                                                    style="enable-background: new 0 0 512 512" xml:space="preserve"
                                                    width="512" height="512">
                                                    <g>
                                                        <path
                                                            d="M85.333,0h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,234.667,0,196.462,0,149.333v-64C0,38.205,38.205,0,85.333,0z">
                                                        </path>
                                                        <path
                                                            d="M362.667,0h64C473.795,0,512,38.205,512,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,38.205,315.538,0,362.667,0z">
                                                        </path>
                                                        <path
                                                            d="M85.333,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64c0,47.128-38.205,85.333-85.333,85.333h-64   C38.205,512,0,473.795,0,426.667v-64C0,315.538,38.205,277.333,85.333,277.333z">
                                                        </path>
                                                        <path
                                                            d="M362.667,277.333h64c47.128,0,85.333,38.205,85.333,85.333v64C512,473.795,473.795,512,426.667,512h-64   c-47.128,0-85.333-38.205-85.333-85.333v-64C277.333,315.538,315.538,277.333,362.667,277.333z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="max-md:hidden">
                                            <a href="shop-with-category.html#tab-list-grid"
                                                class="size-10 flex items-center justify-end"
                                                @click.prevent="tab = 'tab-list-grid'">
                                                <svg class="size-5 opacity-30"
                                                    :class="{ '!opacity-100': tab == 'tab-list-grid'}"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2"
                                                    x="0px" y="0px" viewBox="0 0 512 512"
                                                    style="enable-background: new 0 0 512 512" xml:space="preserve"
                                                    width="512" height="512">
                                                    <g>
                                                        <path
                                                            d="M42.667,373.333H96c23.564,0,42.667,19.103,42.667,42.667v53.333C138.667,492.898,119.564,512,96,512H42.667   C19.103,512,0,492.898,0,469.333V416C0,392.436,19.103,373.333,42.667,373.333z">
                                                        </path>
                                                        <path
                                                            d="M416,373.333h53.333C492.898,373.333,512,392.436,512,416v53.333C512,492.898,492.898,512,469.333,512H416   c-23.564,0-42.667-19.102-42.667-42.667V416C373.333,392.436,392.436,373.333,416,373.333z">
                                                        </path>
                                                        <path
                                                            d="M42.667,186.667H96c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667H42.667   C19.103,325.333,0,306.231,0,282.667v-53.333C0,205.769,19.103,186.667,42.667,186.667z">
                                                        </path>
                                                        <path
                                                            d="M416,186.667h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.102,42.667-42.667,42.667H416   c-23.564,0-42.667-19.103-42.667-42.667v-53.333C373.333,205.769,392.436,186.667,416,186.667z">
                                                        </path>
                                                        <path
                                                            d="M42.667,0H96c23.564,0,42.667,19.103,42.667,42.667V96c0,23.564-19.103,42.667-42.667,42.667H42.667   C19.103,138.667,0,119.564,0,96V42.667C0,19.103,19.103,0,42.667,0z">
                                                        </path>
                                                        <path
                                                            d="M229.333,373.333h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.102-42.667-42.667V416C186.667,392.436,205.769,373.333,229.333,373.333z">
                                                        </path>
                                                        <path
                                                            d="M229.333,186.667h53.333c23.564,0,42.667,19.103,42.667,42.667v53.333c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.103-42.667-42.667v-53.333C186.667,205.769,205.769,186.667,229.333,186.667z">
                                                        </path>
                                                        <path
                                                            d="M229.333,0h53.333c23.564,0,42.667,19.103,42.667,42.667V96c0,23.564-19.103,42.667-42.667,42.667h-53.333   c-23.564,0-42.667-19.103-42.667-42.667V42.667C186.667,19.103,205.769,0,229.333,0z">
                                                        </path>
                                                        <path
                                                            d="M416,0h53.333C492.898,0,512,19.103,512,42.667V96c0,23.564-19.102,42.667-42.667,42.667H416   c-23.564,0-42.667-19.103-42.667-42.667V42.667C373.333,19.103,392.436,0,416,0z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row" x-data="{ open: false }">
                            <div class="w-full tab-content shop-" id="pills-tabContent">
                                <div x-show="tab == 'tab-list-list'"
                                    x-transition:enter="transition-all duration-700 easy-in-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                    <div class="row">
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/1.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Sophisticated Swagger Suit
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    250 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$40.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck1" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck1">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/2.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Cozy Knit Cardigan Sweater
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    650 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$94.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck2" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck2">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/3.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Classic Denim Skinny Jeans
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    458 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$35.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck3" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck3">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/4.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Athletic Mesh Sports Leggings
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    630 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$25.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck4" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck4">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/5.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Vintage Denim Overalls Shorts
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    520 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$45.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck5" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck5">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/6.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Satin Wrap Party Blouse
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    256 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck6" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck6">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/7.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Plaid Wool Winter Coat
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    776 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$75.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck7" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck7">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full 4xl:w-1/2">
                                            <div class="flex mb-7.5 max-sm:block">
                                                <div
                                                    class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                    <img src="assets/images/shop/product/8.png" alt="image"
                                                        class="object-cover w-full" />
                                                </div>
                                                <div class="flex-1 self-center max-md:pt-5">
                                                    <div class="flex items-center justify-between">
                                                        <div>
                                                            <h4 class="title mb-0">
                                                                <a href="shop-list.html">Water-Resistant Windbreaker Jacket
                                                                </a>
                                                            </h4>
                                                            <ul class="flex">
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Accessories,</a>
                                                                </li>
                                                                <li>
                                                                    <a class="text-sm mr-1.1"
                                                                        href="shop-with-category.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="flex flex-col ml-4.5 text-center min-w-25">
                                                            <ul class="flex gap-0.5 justify-center">
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-secondary">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                                <li class="text-[#d5d5d5]">
                                                                    <i class="flaticon-star-1"></i>
                                                                </li>
                                                            </ul>
                                                            <span><a class="text-body text-2xs" href="javascript:void(0);">
                                                                    255 Review</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.6">
                                                        <div class="dz-rating-box">
                                                            <div>
                                                                <p
                                                                    class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                    It is a long established fact that a
                                                                    reader will be distracted by the readable
                                                                    content of a page when looking at its
                                                                    layout. The point of using Lorem Ipsum is
                                                                    that it has.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex justify-between items-center max-xl:mt-2.5 max-xl:block">
                                                            <div class="flex items-center xl:mb-4 mb-2">
                                                                <div class="meta-content m-0">
                                                                    <span
                                                                        class="text-body text-sm inline-block">Price</span>
                                                                    <span
                                                                        class="font-medium font-Lufga text-xl block">$36.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <a href="shop-cart.html"
                                                                    class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                    <i
                                                                        class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                    <span class="md:block hidden capitalize">Add to
                                                                        cart</span>
                                                                </a>
                                                                <div class="bookmark-btn style-1">
                                                                    <input class="form-check-input hidden" type="checkbox"
                                                                        id="favoriteCheck8" />
                                                                    <label
                                                                        class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                        for="favoriteCheck8">
                                                                        <i class="fa-solid fa-heart"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-show="tab == 'tab-list-column'"
                                    x-transition:enter="transition-all duration-700 easy-in-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                    <div class="row gx-xl-4 g-3 max-xl:mb-0 mb-4">
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/1.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Cozy Knit Cardigan Sweater</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/2.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Sophisticated Swagger Suit</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/3.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Classic Denim Skinny Jeans</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/4.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Athletic Mesh Sports Leggings</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/5.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Vintage Denim Overalls Shorts</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/6.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Satin Wrap Party Blouse</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/7.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Plaid Wool Winter Coat</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/8.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Water-Resistant Windbreaker Jacket</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/3 lg:w-1/2 sm:w-1/2 mb-0 md:mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/9.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Comfy Lounge Jogger Pants</a>
                                                    </h5>
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
                                <div x-show="tab == 'tab-list-grid'"
                                    x-transition:enter="transition-all duration-700 easy-in-out"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                    <div class="row gx-xl-4 g-3">
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/1.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Cozy Knit Cardigan Sweater</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/2.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Sophisticated Swagger Suit</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/3.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Classic Denim Skinny Jeans</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/4.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Athletic Mesh Sports Leggings</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/5.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Vintage Denim Overalls Shorts</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/6.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Satin Wrap Party Blouse</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/7.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Plaid Wool Winter Coat</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/8.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Water-Resistant Windbreaker Jacket</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/9.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Comfy Lounge Jogger Pants</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/10.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Stylish Fedora Hat Collection</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/11.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Suede Ankle Booties Collection</a>
                                                    </h5>
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
                                        <div class="w-1/2 xl:w-1/4 md:w-1/3 sm:w-1/2 mb-3.6 lg:mb-7.5">
                                            <div class="relative z-1 h-full group">
                                                <div class="relative overflow-hidden rounded-3xl duration-500">
                                                    <img src="assets/images/shop/product/12.png" alt="image"
                                                        class="rounded-3xl duration-500 w-full group-hover:-translate-y-5" />
                                                    <div
                                                        class="absolute bottom-0 left-0 size-full flex flex-col justify-start items-end gap-1.1 p-3.6 max-sm:px-2.5 max-sm:gap-0 max-sm:group-hover:bottom-3.6 duration-200">
                                                        <a href="javascript:void(0);" @click="open = true"
                                                            class="btn py-3 px-7.5 text-sm font-Lufga inline-block font-medium leading-[1.2] bg-secondary text-white rounded-full duration-500 hover:bg-primary group-hover:-bottom-1 max-sm:group-hover:bottom-[-15px] -bottom-16 left-1/2 -translate-x-1/2 whitespace-nowrap absolute overflow-hidden border-4 border-[#fffaf3]">
                                                            <i class="fa-solid fa-eye md:hidden block"></i>
                                                            <span class="md:block hidden">Quick View</span>
                                                        </a>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-wishicon">
                                                            <i
                                                                class="icon feather icon-heart dz-heart text-white text-lg"></i>
                                                            <i
                                                                class="icon feather icon-heart-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                        <div
                                                            class="size-[45px] max-sm:size-7.5 max-sm:group-hover:-bottom-2.5 bg-[#0000004d] flex items-center justify-center rounded-full mb-1.1 shadow-default relative overflow-hidden btn meta-icon dz-carticon">
                                                            <i class="flaticon flaticon-basket text-white text-lg"></i>
                                                            <i
                                                                class="flaticon flaticon-basket-on dz-heart-fill text-white text-lg"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start py-5 max-sm:p-2.5 flex justify-between">
                                                    <h5 class="w-[70%] max-xl:w-full max-sm:text-sm capitalize">
                                                        <a href="shop-list.html">Hiking Outdoor Gear Collection</a>
                                                    </h5>
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
                            <!-- Quick Modal Start -->
                            <div class="fixed inset-0 bg-black/60 transition-opacity z-999999 overflow-x-hidden overflow-y-auto mt-0"
                                @keydown.escape.window="open = false" x-cloak x-show="open"
                                x-transition:enter="transition ease-in duration-800" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-500"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="modal-dialog mx-[10px] flex flex-col relative rounded-lg bg-card w-full pointer-events-auto max-w-[1070px]"
                                        @click.away="open = false">
                                        <div
                                            class="modal-content bg-white max-md:p-7.5 max-md:pt-13.5 max-sm:!px-3.6 max-sm:!pb-5">
                                            <button type="button"
                                                class="absolute right-2 top-2 text-secondary text-2xl size-10 z-1"
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
                                                                            <div
                                                                                class="relative overflow-hidden DZoomImage group">
                                                                                <a class="mfp-link lg-item"
                                                                                    href="assets/images/products/lady-1.png"
                                                                                    data-src="assets/images/products/lady-1.png">
                                                                                    <i
                                                                                        class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                                </a>
                                                                                <img src="assets/images/products/lady-1.png"
                                                                                    alt="image" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div
                                                                                class="relative overflow-hidden DZoomImage group">
                                                                                <a class="mfp-link lg-item"
                                                                                    href="assets/images/products/lady-2.png"
                                                                                    data-src="assets/images/products/lady-2.png">
                                                                                    <i
                                                                                        class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                                </a>
                                                                                <img src="assets/images/products/lady-2.png"
                                                                                    alt="image" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="swiper-slide">
                                                                            <div
                                                                                class="relative overflow-hidden DZoomImage group">
                                                                                <a class="mfp-link lg-item"
                                                                                    href="assets/images/products/lady-3.png"
                                                                                    data-src="assets/images/products/lady-3.png">
                                                                                    <i
                                                                                        class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                                </a>
                                                                                <img src="assets/images/products/lady-3.png"
                                                                                    alt="image" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="swiper quick-modal-swiper thumb-swiper-lg swiper-vertical absolute top-7.5 left-7.5">
                                                                    <div class="swiper-wrapper">
                                                                        <div class="swiper-slide mb-3.6 !size-13.5">
                                                                            <img src="assets/images/products/thumb-img/lady-1.png"
                                                                                alt="image" class="border border-white" />
                                                                        </div>
                                                                        <div class="swiper-slide mb-3.6 !size-13.5">
                                                                            <img src="assets/images/products/thumb-img/lady-2.png"
                                                                                alt="image" class="border border-white" />
                                                                        </div>
                                                                        <div class="swiper-slide mb-3.6 !size-13.5">
                                                                            <img src="assets/images/products/thumb-img/lady-3.png"
                                                                                alt="image" class="border border-white" />
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
                                                                        <h4 class="sm:text-2.5xl text-2xl font-bold mb-1">
                                                                            <a href="shop-list.html">Cozy Knit Cardigan
                                                                                Sweater</a>
                                                                        </h4>
                                                                        <div class="flex">
                                                                            <ul class="flex gap-0.5 items-center mr-2">
                                                                                <li
                                                                                    class="text-sm text-[#ff8a00] star-fill">
                                                                                    <i class="flaticon-star-1"></i>
                                                                                </li>
                                                                                <li
                                                                                    class="text-sm text-[#ff8a00] star-fill">
                                                                                    <i class="flaticon-star-1"></i>
                                                                                </li>
                                                                                <li
                                                                                    class="text-sm text-[#ff8a00] star-fill">
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
                                                                            <a class="text-2xs"
                                                                                href="javascript:void(0);">(5 customer
                                                                                reviews)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-2sm mb-4">
                                                                    Lorem Ipsum is simply dummy text of the
                                                                    printing and typesetting industry. Lorem
                                                                    Ipsum has.
                                                                </p>
                                                                <div class="meta-content mb-5 flex items-end">
                                                                    <div class="meta-content mr-4">
                                                                        <label
                                                                            class="text-base font-bold mb-2.5 block font-Lufga">Price</label>
                                                                        <span
                                                                            class="font-medium text-2xl font-Lufga">$125.75
                                                                            <del
                                                                                class="py-1.1 opacity-60 text-lg text-body">$132.17</del></span>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <label
                                                                            class="text-base font-bold mb-2.5 block font-Lufga">Quantity</label>
                                                                        <span class="flex">
                                                                            <input type="button" value="-"
                                                                                data-field="quantity"
                                                                                class="button-minus size-10 leading-[27px] rounded-full text-center text-3xl border border-secondary mr-2.5 mb-1.1 bg-secondary text-white" />
                                                                            <input type="number" step="1" value="1"
                                                                                name="quantity"
                                                                                class="touchspin size-10 leading-[27px] rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-light outline-none" />
                                                                            <input type="button" value="+"
                                                                                data-field="quantity"
                                                                                class="button-plus size-10 leading-[27px] rounded-full text-center text-3xl border border-secondary mr-2.5 mb-1.1 bg-secondary text-white" />
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
                                                                        <li class="text-sm mr-2.5">
                                                                            <strong
                                                                                class="text-2sm font-Lufga">SKU:</strong>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            PRT584E63A
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="flex flex-wrap items-center mb-2.5">
                                                                        <li class="text-sm mr-2.5">
                                                                            <strong
                                                                                class="text-2sm font-Lufga">Category:</strong>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Dresses,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Jeans,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Swimwear,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Summer,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Clothing,</a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="flex flex-wrap items-center mb-2.5">
                                                                        <li class="text-sm mr-2.5">
                                                                            <strong
                                                                                class="text-2sm font-Lufga">Tags:</strong>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Casual,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Athletic,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Workwear,</a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a href="shop-standard.html">Accessories,</a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="flex flex-wrap items-center mb-2.5">
                                                                        <li class="text-sm mr-2.5">
                                                                            <a class="hover:text-primary"
                                                                                href="https://www.facebook.com/dexignzone"
                                                                                target="_blank">
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
                                                                                href="https://www.instagram.com/dexignzone/"
                                                                                target="_blank">
                                                                                <i class="fa-brands fa-instagram"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="text-sm mr-2.5">
                                                                            <a class="hover:text-primary"
                                                                                href="https://twitter.com/dexignzones"
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

                        <div class="row page mt-0 max-md:text-center">
                            <div class="md:w-1/2 w-full">
                                <p class="max-md:mb-6.1">Showing 1–5 Of 50 Results</p>
                            </div>
                            <div class="md:w-1/2 w-full">
                                <nav>
                                    <ul class="flex justify-end max-md:justify-center">
                                        <li>
                                            <a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                                href="javascript:void(0);">1</a>
                                        </li>
                                        <li>
                                            <a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                                href="javascript:void(0);">2</a>
                                        </li>
                                        <li>
                                            <a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                                href="javascript:void(0);">3</a>
                                        </li>
                                        <li>
                                            <a class="py-2.5 px-5 max-sm:px-3 max-sm:min-w-[90px] max-sm:h-9 text-2sm uppercase inline-flex items-center justify-center rounded-full border border-secondary mx-1.1"
                                                href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> #000
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection