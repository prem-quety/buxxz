@extends('layouts.app')

@section('content')
    <section class="pb-13.5 max-lg:pb-5 pt-4">
        <div class="container">
            <div class="row">
                <div class="xl:w-1/4">
                    <div class="top-29 z-1 xl:sticky">
                        <a href="javascript:void(0);"
                            class="panel-close-btn fixed top-0 h-10 w-0 bg-black z-[10001] left-auto right-0 flex items-center justify-center">
                            <svg width="35" height="35" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="shop-filter xl:mt-2">
                            <aside>
                                <div class="flex items-center justify-between mb-7.5">
                                    <h6 class="font-normal flex">
                                        <i class="flaticon-filter mr-4 text-lg"></i>
                                        Filter
                                    </h6>
                                </div>
                                <div class="mb-[45px] max-lg:mb-10 widget_search">
                                    <div class="mb-10">
                                        <div class="relative flex flex-wrap items-stretch w-full mb-5">
                                            <input name="dzSearch" required="required" type="search"
                                                class="py-2.5 px-3.6 text-2sm text-title outline-none flex-auto w-[1%] rounded-xl border border-secondary bg-light"
                                                placeholder="Search Product">
                                            <div class="absolute top-1/2 -translate-y-1/2 right-3.6 z-9">
                                                <button name="submit" value="Submit" type="submit">
                                                    <i class="icon feather icon-search text-xl text-title"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-[45px] max-lg:mb-10">
                                    <h6 class="relative mb-6.1 font-medium">Price</h6>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <div id="slider-tooltips2" class="mb-3"></div>
                                                <span class="mr-7.5 text-sm" id="slider-margin-value-min2"></span>
                                                <span class="mr-7.5 text-sm" id="slider-margin-value-max2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-[45px] max-lg:mb-10">
                                    <h6 class="relative mb-6.1 font-medium">Color</h6>
                                    <div class="flex items-center flex-wrap color-filter ps-2">
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel10" value="#000000"
                                                aria-label="..." checked>
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel20" value="#9BD1FF"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel30" value="#21B290"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel40" value="#FEC4C4"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel50" value="#FF7354"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel60" value="#51EDC8"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel70" value="#B77CF3"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel80" value="#FF4A76"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabel90" value="#3E68FF"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                                type="radio" name="radioNoLabel" id="radioNoLabe202" value="#7BEF68"
                                                aria-label="...">
                                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-[45px] max-lg:mb-10 widget_categories">
                                    <h6 class="relative mb-6.1 font-medium">Category</h6>
                                    <ul>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Notebooks</a> (12)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Pens &amp; Pencils</a> (18)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Markers &amp; Highlighters</a> (9)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Paper &amp; Printing</a> (22)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Folders &amp; Files</a> (15)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Art Supplies</a> (7)
                                        </li>
                                        <li class="py-2 text-right w-full text-2sm font-medium">
                                            <a class="inline-block float-left duration-500 hover:text-primary"
                                                href="shop-category.html">Office Essentials</a> (19)
                                        </li>
                                    </ul>
                                </div>

                                <div class="mb-[45px] max-lg:mb-10 widget_tag_cloud">
                                    <h6 class="relative mb-6.1 font-medium">Tags</h6>
                                    <div class="tagcloud">
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Eco-Friendly</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Premium</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Student</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Office</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Creative</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Budget</a>
                                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                                            href="shop-tag.html">Writing</a>
                                    </div>
                                </div>

                                <a href="javascript:void(0);"
                                    class="btn py-2.5 px-3.6 text-2xs font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden ">RESET</a>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="xl:w-3/4" x-data="{ tab: 'tab-list-list' }">
                    <div class="flex items-center mb-5 max-md:block">
                        <div class="flex items-center flex-1 max-xl:py-2">
                            <ul class="flex items-center flex-wrap max-3xl:hidden filter-tag">
                                <li class="py-1.1">
                                    <a href="javascript:void(0);"
                                        class="py-1.5 px-2.5 mr-2.5 border border-secondary rounded-2xl uppercase flex items-center justify-center text-2xs">School
                                        Supplies
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

                            <div class="border-l border-border max-md:border-none max-xl:ml-auto shop-tab">
                                <ul class="flex" id="dz-shop-tab">
                                    <li>
                                        <a href="shop-list.html#tab-list-list" class="size-10 flex items-center justify-end"
                                            @click.prevent="tab = 'tab-list-list'">
                                            <svg class="size-5 opacity-30"
                                                :class="{ '!opacity-100': tab == 'tab-list-list'}" width="512" height="512"
                                                viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic42.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="shop-with-category.html">Polypropylene Magazine File
                                                                Holder</a></h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Holders</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 370
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$40.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="favoriteCheck1">
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
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic43.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="shop-with-category.html">Black
                                                                Highlighter</a></h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Highlighter</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 370
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$40.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="favoriteCheck1">
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
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic44.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="shop-with-category.html">Office
                                                                Notes Copy Dark Cover</a></h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Notes</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 370
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$40.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="favoriteCheck1">
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
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic45.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="shop-with-category.html">Sophisticated Black Pen</a>
                                                        </h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Pens</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 255
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$55.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="flexCheckDefault2">
                                                                <label
                                                                    class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                    for="flexCheckDefault2">
                                                                    <i class="fa-solid fa-heart"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic46.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="shop-with-category.html">White
                                                                Colored Push Pins</a></h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Push Pins</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 455
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$56.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="flexCheckDefault3">
                                                                <label
                                                                    class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                    for="flexCheckDefault3">
                                                                    <i class="fa-solid fa-heart"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="flex mb-7.5 max-sm:block">
                                            <div
                                                class="max-w-[290px] max-h-[290px] rounded-3xl mr-7.5 overflow-hidden max-md:mr-3.6 max-sm:!mr-0 max-sm:w-full max-sm:max-w-full">
                                                <img src="assets/images/shop/product/pic47.webp" alt="image"
                                                    class="object-cover w-full">
                                            </div>
                                            <div class="flex-1 self-center max-md:pt-5">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="shop-with-category.html">12 Digit
                                                                Non-Scientific Calculator</a></h4>
                                                        <ul class="flex">
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Accessories,</a></li>
                                                            <li><a class="text-sm mr-1.1"
                                                                    href="shop-with-category.html">Calculators</a></li>
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
                                                        <span><a class="text-body text-2xs" href="javascript:void(0);"> 370
                                                                Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="mt-3.6">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p
                                                                class="text-body pr-7.5 max-lg:pr-0 mb-4 max-lg:mb-0 text-2sm font-light max-md:hidden">
                                                                Discover premium stationery designed to spark creativity and
                                                                productivity.
                                                                From elegant notebooks and fine pens to practical office
                                                                supplies,
                                                                our collection brings both style and function to your desk.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center max-xl:block max-xl:mt-2.5">
                                                        <div class="flex items-center xl:mb-4 mb-2">
                                                            <div class="mr-20 max-sm:mr-7.5">
                                                                <span class="text-body text-sm inline-block">Price</span>
                                                                <span
                                                                    class="font-medium font-Lufga text-xl block">$80.00</span>
                                                            </div>

                                                        </div>
                                                        <div class="flex">
                                                            <a href="shop-cart.html"
                                                                class="btn py-2.5 px-5 max-sm:px-2.5 text-base max-md:text-lg font-Lufga flex items-center font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden">
                                                                <i
                                                                    class="icon feather icon-shopping-cart md:hidden block"></i>
                                                                <span class="md:block hidden capitalize">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input hidden" type="checkbox"
                                                                    id="flexCheckDefault4">
                                                                <label
                                                                    class="ml-2.5 size-11 leading-10 text-center border border-secondary text-lg cursor-pointer bg-white rounded-xl block form-check-label"
                                                                    for="flexCheckDefault4">
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
                                                                                href="assets/images/products/lady-pic7.avif"
                                                                                data-src="assets/images/products/lady-pic7.avif">
                                                                                <i
                                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                            </a>
                                                                            <img src="assets/images/products/lady-pic7.avif"
                                                                                alt="image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <div
                                                                            class="relative overflow-hidden DZoomImage group">
                                                                            <a class="mfp-link lg-item"
                                                                                href="assets/images/products/lady-pic22.avif"
                                                                                data-src="assets/images/products/lady-pic22.avif">
                                                                                <i
                                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                            </a>
                                                                            <img src="assets/images/products/lady-pic22.avif"
                                                                                alt="image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <div
                                                                            class="relative overflow-hidden DZoomImage group">
                                                                            <a class="mfp-link lg-item"
                                                                                href="assets/images/products/lady-pic25.avif"
                                                                                data-src="assets/images/products/lady-pic25.avif">
                                                                                <i
                                                                                    class="feather icon-maximize dz-maximize absolute top-5 right-5 size-10 flex items-center justify-center bg-white text-2xl rounded-xl duration-500 opacity-0 group-hover:opacity-100"></i>
                                                                            </a>
                                                                            <img src="assets/images/products/lady-pic25.avif"
                                                                                alt="image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="swiper quick-modal-swiper thumb-swiper-lg swiper-vertical absolute top-7.5 left-7.5">
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                                        <img src="assets/images/products/thumb-img/lady-pic7.avif"
                                                                            alt="image" class="border border-white">
                                                                    </div>
                                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                                        <img src="assets/images/products/thumb-img/lady-pic22.avif"
                                                                            alt="image" class="border border-white">
                                                                    </div>
                                                                    <div class="swiper-slide mb-3.6 !size-13.5">
                                                                        <img src="assets/images/products/thumb-img/lady-pic25.avif"
                                                                            alt="image" class="border border-white">
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
                                                                            href="shop-list.html">Cozy Knit Cardigan
                                                                            Sweater</a></h4>
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
                                                                        <a class="text-2xs" href="javascript:void(0);">(5
                                                                            customer reviews)</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-2sm mb-4">
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has.
                                                            </p>
                                                            <div class="meta-content mb-5 flex items-end">
                                                                <div class="meta-content mr-4">
                                                                    <label
                                                                        class="text-base font-bold mb-2.5 block font-Lufga">Price</label>
                                                                    <span class="font-medium text-2xl font-Lufga">$125.75
                                                                        <del
                                                                            class="py-1.1 opacity-60 text-lg text-body">$132.17</del></span>
                                                                </div>
                                                                <div class="input-group">
                                                                    <label
                                                                        class="text-base font-bold mb-2.5 block font-Lufga">Quantity</label>
                                                                    <span class="flex">
                                                                        <input type="button" value="-" data-field="quantity"
                                                                            class="button-minus size-10 leading-[27px] rounded-full text-center text-3xl border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                                        <input type="number" step="1" value="1"
                                                                            name="quantity"
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
                                                                            class="text-2sm font-Lufga">SKU:</strong></li>
                                                                    <li class="text-sm mr-2.5">PRT584E63A</li>
                                                                </ul>
                                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                                    <li class="text-sm mr-2.5"><strong
                                                                            class="text-2sm font-Lufga">Category:</strong>
                                                                    </li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Dresses,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Jeans,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Swimwear,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Summer,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Clothing,</a></li>
                                                                </ul>
                                                                <ul class="flex flex-wrap items-center mb-2.5">
                                                                    <li class="text-sm mr-2.5"><strong
                                                                            class="text-2sm font-Lufga">Tags:</strong></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Casual,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Athletic,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Workwear,</a></li>
                                                                    <li class="text-sm mr-2.5"><a
                                                                            href="shop-standard.html">Accessories,</a></li>
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
                                    <li><a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                            href="javascript:void(0);">1</a></li>
                                    <li><a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                            href="javascript:void(0);">2</a></li>
                                    <li><a class="size-10 max-sm:size-9 inline-flex items-center justify-center rounded-full border border-secondary mx-1.1 duration-500 hover:bg-secondary hover:text-white"
                                            href="javascript:void(0);">3</a></li>
                                    <li><a class="py-2.5 px-5 max-sm:px-3 max-sm:min-w-[90px] max-sm:h-9 text-2sm uppercase inline-flex items-center justify-center rounded-full border border-secondary mx-1.1"
                                            href="javascript:void(0);">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection