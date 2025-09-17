<header class="site-header mo-left header style-2">
    <!-- Main Header -->
    <div class="bg-light2 relative z-99 max-lg:hidden">
        <div class="container relative">
            <!-- Website Logo -->
            <div class="logo-header !h-[90px] ml-6">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/buzzx.png') }}" alt="logo" class="!h-[90px] !max-w-48">
                </a>
            </div>


            <!-- EXTRA NAV -->
            <div class="extra-nav !h-[90px] md:flex hidden ml-3.6">
                <div class="extra-cell">
                    <ul class="navbar-nav header-right !m-0">
                        <li class="nav-item">
                            <div class="flex gap-2.5 items-center py-2">
                                <div class="size-13.5 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve">
                                        <path style="fill:#fff"
                                            d="M489.343 210.251c-4.827-105.317-92.01-189.513-198.498-189.513h-69.689c-106.488 0-193.67 84.197-198.498 189.513C9.495 214.747 0 227.228 0 241.894v78.61c0 18.436 15 33.436 33.437 33.436h60.996c6.075 0 11-4.925 11-11V219.458c0-6.075-4.925-11-11-11H44.789c5.699-92.338 82.618-165.72 176.366-165.72h69.689c93.749 0 170.667 73.381 176.366 165.72h-49.644c-6.075 0-11 4.925-11 11V342.94c0 6.075 4.925 11 11 11h60.996c18.436 0 33.436-15 33.436-33.436v-78.61c.002-14.666-9.493-27.147-22.655-31.643zM83.433 331.94H33.437c-6.306 0-11.437-5.13-11.437-11.436v-78.61c0-6.306 5.131-11.436 11.437-11.436h49.996V331.94zM490 320.504c0 6.306-5.131 11.436-11.436 11.436h-49.996V230.458h49.996c6.306 0 11.436 5.13 11.436 11.436v78.61z" />
                                        <path
                                            d="M256 491.262a11.001 11.001 0 0 1-8.402-3.9l-52.108-61.671h-74.566c-20.673 0-37.491-16.818-37.491-37.49V188.049c0-20.673 16.818-37.491 37.491-37.491h270.154c20.672 0 37.49 16.818 37.49 37.491V388.2c0 20.672-16.818 37.49-37.49 37.49h-74.566l-52.108 61.671a11.006 11.006 0 0 1-8.404 3.901zM120.923 172.558c-8.542 0-15.491 6.949-15.491 15.491V388.2c0 8.541 6.949 15.49 15.491 15.49h79.673c3.238 0 6.312 1.427 8.402 3.9L256 463.218l47.002-55.627a10.998 10.998 0 0 1 8.402-3.9h79.673c8.541 0 15.49-6.949 15.49-15.49V188.049c0-8.542-6.949-15.491-15.49-15.491H120.923z" />
                                        <path
                                            d="M193.81 259.09c-8.663.084-14.039-9.956-9.139-17.11 4.134-6.475 14.16-6.434 18.29 0 4.892 7.164-.483 17.196-9.151 17.11zM311.729 259.09c-7.629.166-13.258-8.219-10.16-15.21 3.614-8.972 16.705-8.978 20.31 0 3.113 6.979-2.526 15.376-10.15 15.21zM256 352.204c-25.31 0-50.619-10.009-73.192-30.028-4.545-4.03-4.962-10.982-.931-15.528 4.029-4.545 10.982-4.962 15.528-.931 36.689 32.536 80.501 32.538 117.19 0 4.547-4.031 11.497-3.614 15.528.931 4.031 4.546 3.614 11.498-.931 15.528-22.572 20.019-47.882 30.028-73.192 30.028z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-2xs font-semibold text-white">24/7 SUPPORT</span>
                                    <h6 class="text-white">+123 456 789</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- header search nav -->
            <div class="flex">
                <form class="h-[90px] w-full ml-[120px] max-xl:ml-14.5 items-center flex relative">
                    <div class="relative flex flex-wrap items-center bg-white rounded-xl py-1.1 w-full">

                        <input type="text" class="py-2.5 px-5 text-2sm text-title flex-auto w-[1%] ml-2 h-[45px] 
         border-0 outline-none focus:outline-none focus:ring-0 focus:border-0"
                            aria-label="Text input with dropdown button" placeholder="Search for products">

                        <button class="absolute right-0 size-12 justify-center inline-flex items-center" type="button">
                            <i class="iconly-Light-Search text-secondary"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Main Header End -->

    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar relative after:block after:content-[''] after:clear-both">
            <div class="container after:block after:content-[''] after:clear-both lg:flex block">
                <!-- Website Logo -->
                <div class="logo-header logo-dark lg:hidden">
                    <a href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler navicon justify-end" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <!-- Main Nav -->
                <div class="header-nav w3menu navbar-collapse justify-start" id="navbarNavDropdown">
                    <div class="logo-header lg:hidden">
                        <a href="index.html"><img src="assets/images/logo.svg" alt=""></a>
                    </div>
                    <div class="mr-2.5 browse-category-menu max-xl:hidden">
                        <a href="javascript:void(0);" class="category-btn !h-13.5 rounded-xl !bg-lightdark">
                            <div class="category-menu mr-4">
                                <span class="!bg-secondary"></span>
                                <span class="!bg-secondary"></span>
                                <span class="!bg-secondary"></span>
                            </div>
                            <span class="font-semibold category-btn-title">
                                Browse Categories
                            </span>
                            <span class="toggle-arrow ms-auto">
                                <i class="icon feather icon-chevron-down"></i>
                            </span>
                        </a>
                        <div class="category-menu-items" style="display: none;">
                            <ul class="nav navbar-nav">
                                <li class="cate-drop">
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Pens & Pencils</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Notebooks & Diaries</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Art & Craft Supplies</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Office Essentials</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>School Supplies</span>
                                        <span
                                            class="inline-block py-1 px-1.1 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-purple">SALE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Files & Folders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Markers & Highlighters</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Sticky Notes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Staplers & Punches</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Accessories</span>
                                    </a>
                                </li>
                                <li class="menu-items">
                                    <a href="javascript:void(0);">
                                        <i class="flaticon-blocks mr-4"></i>
                                        <span>More</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="{{route('store.index')}}"><span>Home</span></a>

                        </li>
                        <li class="has-mega-menu sub-menu-down">
                            <a href="{{ route('store.shoplist') }}"><span>Shop</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>

                        </li>




                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a class="fab fa-facebook-f" target="_blank"
                                    href="https://www.facebook.com/dexignzone"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a>
                            </li>
                            <li><a class="fab fa-linkedin-in" target="_blank"
                                    href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                            <li><a class="fab fa-instagram" target="_blank"
                                    href="https://www.instagram.com/dexignzone/"></a></li>
                        </ul>
                    </div>
                </div>

                <!-- EXTRA NAV -->
                <div class="extra-nav" x-data="{ tab: 'shoppingcart' }">
                    <div class="extra-cell">
                        <ul class="header-right">
                            @guest
                                <li class="nav-item login-link">
                                    <a class="nav-link font-medium border-b border-[#0000005c]" href="{{ route('login') }}">
                                        Login / Register
                                    </a>
                                </li>
                                <!-- <li class="nav-item register-link">
                                                                                                                                                                                                                                        <a class="nav-link border-b border-[#0000005c]" href="{{ route('register') }}">
                                                                                                                                                                                                                                            Register
                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                    </li> -->
                            @else
                                <li class="nav-item">
                                    <span class="nav-link  border-[#0000005c]">
                                        {{ Auth::user()->name }}
                                    </span>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="nav-link ">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            @endguest


                            <li>
                                <a class="offcanvas-btn" @click.prevent="tab = 'wishlist'"
                                    href="{{ route('store.listings') }}" data-target="offcanvasRight">
                                    <i class="iconly-Light-Heart2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="offcanvas-btn" @click.prevent="tab = 'shoppingcart'"
                                    href="{{ route('store.listings') }}" data-target="offcanvasRight">
                                    <i class="iconly-Broken-Buy"></i>
                                    <span
                                        class="absolute -top-1 right-0.5 text-[11px] flex items-center justify-center min-h-4.5 min-w-4.5 font-bold rounded-full bg-primary text-white">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Main Header End -->



    <!-- Sidebar cart -->
    <div class="w-[485px] fixed z-[1045] flex flex-col max-full duration-500 top-0 bottom-0 right-0 bg-light right offcanvas is-closed"
        id="offcanvasRight">
        <button type="button"
            class="size-10 flex items-center justify-center absolute top-1.5 right-5 opacity-50 text-4.5xl offcanvas-close">
            &times;
        </button>
        <div class="flex-grow overflow-y-auto py-14.5 px-[75px] max-sm:py-13.5 max-sm:px-3.6">
            <div class="product-description">
                <div>
                    <ul class="flex flex-wrap justify-center border-b border-[#D7D7D7]" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="w-full py-2.5 px-5 text-start font-medium font-Lufga border-b-2 border-transparent mb-[-1px]"
                                id="shoppingcart" @click.prevent="tab = 'shoppingcart'"
                                :class="{ '!border-secondary': tab == 'shoppingcart'}">Shopping Cart
                                <span
                                    class="text-xs inline-flex items-center justify-center size-6 font-bold rounded-full ml-1.1 px-0.5"
                                    :class="{ 'bg-secondary text-white': tab == 'shoppingcart'}">5</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="w-full py-2.5 px-5 text-start font-medium font-Lufga border-b-2 border-transparent mb-[-1px]"
                                id="wishlist" @click.prevent="tab = 'wishlist'"
                                :class="{ '!border-secondary': tab == 'wishlist'}">Wishlist
                                <span
                                    class="text-xs inline-flex items-center justify-center size-6 font-bold rounded-full ml-1.1 px-0.5"
                                    :class="{ 'bg-secondary text-white': tab == 'wishlist'}">2</span>
                            </button>
                        </li>
                    </ul>
                    <div class="pt-6" id="dz-shopcart-sidebar">
                        <div x-show="tab == 'shoppingcart'" x-transition:enter="transition-all duration-700 easy-in-out"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                            <div class="flex flex-col min-h-[calc(100vh_-_190px)]">
                                <ul class="sidebar-cart-list">
                                    <li x-data="{show: true}">
                                        <div class="py-5 border-b border-border" x-ref="show"
                                            x-show="console.log('sup'); return show" x-transition.opacity>
                                            <div class="flex items-center justify-center">
                                                <div class="size-20 rounded-3xl relative overflow-hidden mr-4">
                                                    <img src="assets/images/shop/product/pic33.avif" alt=""
                                                        class="w-full h-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium">
                                                        <a href="product-thumbnail.html">Premium Ballpoint Pen Set</a>
                                                    </h6>
                                                    <div class="flex items-center">
                                                        <div class="input-group">
                                                            <span class="flex">
                                                                <input type="button" value="-" data-field="quantity"
                                                                    class="button-minus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                                <input type="number" step="1" value="1" name="quantity"
                                                                    class="touchspin size-7.5 leading-[27px] rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-light outline-none">
                                                                <input type="button" value="+" data-field="quantity"
                                                                    class="button-plus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                            </span>
                                                        </div>
                                                        <h6 class="font-medium">$50.00</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="size-7 flex items-center"
                                                    @click="$refs.show.remove()">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li x-data="{show: true}">
                                        <div class="py-5 border-b border-border" x-ref="show"
                                            x-show="console.log('sup'); return show" x-transition.opacity>
                                            <div class="flex items-center justify-center">
                                                <div class="size-20 rounded-3xl relative overflow-hidden mr-4">
                                                    <img src="assets/images/shop/product/pic11.avif" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium">
                                                        <a href="product-thumbnail.html">Hardcover Notebook Journal</a>
                                                    </h6>
                                                    <div class="flex items-center">
                                                        <div class="input-group">
                                                            <span class="flex">
                                                                <input type="button" value="-" data-field="quantity"
                                                                    class="button-minus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                                <input type="number" step="1" value="1" name="quantity"
                                                                    class="touchspin size-7.5 leading-[27px] rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-light outline-none">
                                                                <input type="button" value="+" data-field="quantity"
                                                                    class="button-plus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                            </span>
                                                        </div>
                                                        <h6 class="font-medium">$40.00</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="size-7 flex items-center"
                                                    @click="$refs.show.remove()">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li x-data="{show: true}">
                                        <div class="py-5 border-b border-border" x-ref="show"
                                            x-show="console.log('sup'); return show" x-transition.opacity>
                                            <div class="flex items-center justify-center">
                                                <div class="size-20 rounded-3xl relative overflow-hidden mr-4">
                                                    <img src="assets/images/shop/product/pic25.avif" alt=""
                                                        class="w-full h-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium">
                                                        <a href="product-thumbnail.html">Pack of Color Highlighters</a>
                                                    </h6>
                                                    <div class="flex items-center">
                                                        <div class="input-group">
                                                            <span class="flex">
                                                                <input type="button" value="-" data-field="quantity"
                                                                    class="button-minus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                                <input type="number" step="1" value="1" name="quantity"
                                                                    class="touchspin size-7.5 leading-[27px] rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-light outline-none">
                                                                <input type="button" value="+" data-field="quantity"
                                                                    class="button-plus size-7.5 leading-[27px] text-xl rounded-full text-center border border-secondary mr-2.5 mb-1.1 bg-secondary text-white">
                                                            </span>
                                                        </div>
                                                        <h6 class="font-medium">$65.00</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="size-7 flex items-center"
                                                    @click="$refs.show.remove()">
                                                    <i class="ti-close"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="flex items-center justify-between p-4.5 mb-2.5">
                                    <h5 class="font-bold">Subtotal:</h5>
                                    <h5 class="font-bold">$155.00</h5>
                                </div>
                                <div class="mt-auto">

                                    <a href="shop-checkout.html"
                                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl duration-700 hover:bg-secondary hover:text-white relative overflow-hidden text-center w-full mb-5">Checkout</a>
                                    <a href="shop-cart.html"
                                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden text-center w-full">View
                                        Cart</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar cart -->

    <!-- Sidebar finter -->
    <div class="w-[485px] fixed z-[1045] flex flex-col max-full duration-500 top-0 bottom-0 right-0 bg-light right offcanvas is-closed"
        id="offcanvasLeft">
        <button type="button"
            class="size-10 flex items-center justify-center absolute top-1.5 right-5 opacity-50 text-4.5xl offcanvas-close">
            &times;
        </button>
        <div class="flex-grow overflow-y-auto py-14.5 px-[75px] max-sm:py-13.5 max-sm:px-3.6">
            <div class="product-description">
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
                                <div id="slider-tooltips" class="mb-4"></div>
                                <span class="mr-7.5 text-sm" id="slider-margin-value-min"></span>
                                <span class="mr-7.5 text-sm" id="slider-margin-value-max"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-[45px] max-lg:mb-10">
                    <h6 class="relative mb-6.1 font-medium">Color</h6>
                    <div class="flex items-center flex-wrap color-filter ps-2">
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel110" value="#000000" aria-label="..."
                                checked>
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel210" value="#9BD1FF" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel310" value="#21B290" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel410" value="#FEC4C4" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel510" value="#FF7354" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel610" value="#51EDC8" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel710" value="#B77CF3" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel810" value="#FF4A76" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabel910" value="#3E68FF" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                        <div class="form-check">
                            <input class="opacity-0 relative z-[2] cursor-pointer float-left mr-1 mb-1 form-check-input"
                                type="radio" name="radioNoLabel" id="radioNoLabe201" value="#7BEF68" aria-label="...">
                            <span class="mr-3.6 size-4 block relative rounded-full z-1"></span>
                        </div>
                    </div>
                </div>

                <div class="mb-[45px] max-lg:mb-10">
                    <h6 class="relative mb-6.1 font-medium">Size</h6>
                    <div class="flex flex-wrap relative product-size">
                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio11" checked="">
                        <label for="btnradio11"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">4</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio21">
                        <label for="btnradio21"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">6</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio31">
                        <label for="btnradio31"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">8</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio41">
                        <label for="btnradio41"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">10</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio51">
                        <label for="btnradio51"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">12</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio61">
                        <label for="btnradio61"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">14</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio71">
                        <label for="btnradio71"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">16</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio81">
                        <label for="btnradio81"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">18</label>

                        <input type="radio" class="opacity-0 absolute pointer-events-none btn-check" name="btnradio1"
                            id="btnradio91">
                        <label for="btnradio91"
                            class="size-[34px] leading-[34px] rounded-full text-center border border-secondary mr-2.5 mb-1.1">20</label>
                    </div>
                </div>
                <div class="mb-[45px] max-lg:mb-10 widget_categories">
                    <h6 class="relative mb-6.1 font-medium">Category</h6>
                    <ul>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Dresses</a> (10)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Top &amp; Blouses</a> (5)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Boots</a> (17)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Jewelry</a> (13)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Makeup</a> (06)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Fragrances</a> (17)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Shaving &amp; Grooming</a> (13)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Jacket</a> (06)</li>
                        <li class="py-2 text-right w-full text-2sm font-medium"><a
                                class="inline-block float-left duration-500 hover:text-primary"
                                href="blog-category.html">Coat</a> (22)</li>
                    </ul>
                </div>

                <div class="mb-[45px] max-lg:mb-10 widget_tag_cloud">
                    <h6 class="relative mb-6.1 font-medium">Tags</h6>
                    <div class="tagcloud">
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Vintage </a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Wedding</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Cotton</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Linen</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Navy</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Urban</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Business Meeting</a>
                        <a class="relative border border-secondary py-2 px-3.6 inline-block mr-2.5 mb-2.5 text-sm leading-[1.4] rounded-xl duration-500 hover:bg-secondary hover:text-white"
                            href="blog-tag.html">Formal</a>
                    </div>
                </div>
                <a href="javascript:void(0);"
                    class="btn py-2.5 px-3.6 text-2xs font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden ">RESET</a>
            </div>
        </div>
    </div>
    <!-- filter sidebar -->

</header>