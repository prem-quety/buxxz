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
                                        <path style="fill:#3cc"
                                            d="M489.343 210.251c-4.827-105.317-92.01-189.513-198.498-189.513h-69.689c-106.488 0-193.67 84.197-198.498 189.513C9.495 214.747 0 227.228 0 241.894v78.61c0 18.436 15 33.436 33.437 33.436h60.996c6.075 0 11-4.925 11-11V219.458c0-6.075-4.925-11-11-11H44.789c5.699-92.338 82.618-165.72 176.366-165.72h69.689c93.749 0 170.667 73.381 176.366 165.72h-49.644c-6.075 0-11 4.925-11 11V342.94c0 6.075 4.925 11 11 11h60.996c18.436 0 33.436-15 33.436-33.436v-78.61c.002-14.666-9.493-27.147-22.655-31.643zM83.433 331.94H33.437c-6.306 0-11.437-5.13-11.437-11.436v-78.61c0-6.306 5.131-11.436 11.437-11.436h49.996V331.94zM490 320.504c0 6.306-5.131 11.436-11.436 11.436h-49.996V230.458h49.996c6.306 0 11.436 5.13 11.436 11.436v78.61z" />
                                        <path
                                            d="M256 491.262a11.001 11.001 0 0 1-8.402-3.9l-52.108-61.671h-74.566c-20.673 0-37.491-16.818-37.491-37.49V188.049c0-20.673 16.818-37.491 37.491-37.491h270.154c20.672 0 37.49 16.818 37.49 37.491V388.2c0 20.672-16.818 37.49-37.49 37.49h-74.566l-52.108 61.671a11.006 11.006 0 0 1-8.404 3.901zM120.923 172.558c-8.542 0-15.491 6.949-15.491 15.491V388.2c0 8.541 6.949 15.49 15.491 15.49h79.673c3.238 0 6.312 1.427 8.402 3.9L256 463.218l47.002-55.627a10.998 10.998 0 0 1 8.402-3.9h79.673c8.541 0 15.49-6.949 15.49-15.49V188.049c0-8.542-6.949-15.491-15.49-15.491H120.923z" />
                                        <path
                                            d="M193.81 259.09c-8.663.084-14.039-9.956-9.139-17.11 4.134-6.475 14.16-6.434 18.29 0 4.892 7.164-.483 17.196-9.151 17.11zM311.729 259.09c-7.629.166-13.258-8.219-10.16-15.21 3.614-8.972 16.705-8.978 20.31 0 3.113 6.979-2.526 15.376-10.15 15.21zM256 352.204c-25.31 0-50.619-10.009-73.192-30.028-4.545-4.03-4.962-10.982-.931-15.528 4.029-4.545 10.982-4.962 15.528-.931 36.689 32.536 80.501 32.538 117.19 0 4.547-4.031 11.497-3.614 15.528.931 4.031 4.546 3.614 11.498-.931 15.528-22.572 20.019-47.882 30.028-73.192 30.028z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-2xs font-semibold">24/7 SUPPORT</span>
                                    <h6>+123 456 789</h6>
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
                        <div
                            class="relative after:content-[''] after:absolute after:-translate-y-1/2 after:top-1/2 after:right-0 after:w-[1px] after:h-[22px] max-sm:after:h-6.1 after:bg-[#bbbbbbad]">
                            <select class="nice-select style-1 border-0 leading-[45px] text-2sm pl-5 pr-16">
                                <option>All Categories</option>
                                <option>Photography </option>
                                <option>Arts</option>
                                <option>Adventure</option>
                                <option>Action</option>
                                <option>Games</option>
                                <option>Movies</option>
                                <option>Comics</option>
                                <option>Biographies</option>
                                <option>Children’s Books</option>
                                <option>Historical</option>
                                <option>Contemporary</option>
                                <option>Classics</option>
                                <option>Education</option>
                            </select>
                        </div>
                        <input type="text"
                            class="py-2.5 px-5 text-2sm text-title outline-none flex-auto w-[1%] h-[45px]"
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
                                <li class="has-mega-menu cate-drop">
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Clothes</span>
                                        <span class="menu-icon">
                                            <i class="icon feather icon-chevron-right"></i>
                                        </span>
                                    </a>
                                    <div class="mega-menu">
                                        <div class="row">
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"><a href="javascript:void(0);"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="{{ route('store.listings') }}">Thermostats</a></li>
                                                    <li><a href="{{ route('store.listings') }}">Lighting</a></li>
                                                    <li><a href="{{ route('store.listings') }}">Security Systems</a>
                                                    </li>
                                                    <li><a href="{{ route('store.listings') }}">Locks</a></li>
                                                    <li><a href="{{ route('store.listings') }}">Home Assistants</a></li>
                                                    <li><a href="{{ route('store.listings') }}">Home Entertainment
                                                            Systems</a>
                                                    </li>
                                                    <li><a href="{{ route('store.listings') }}">Blinds And Shades</a>
                                                    </li>
                                                    <li><a href="{{ route('store.listings') }}">Water Monitors</a></li>

                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"><a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting</a></li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                    <li><a href="shop-standard.html">Home Entertainment Systems</a></li>
                                                    <li><a href="shop-standard.html">Blinds And Shades</a></li>
                                                    <li><a href="shop-standard.html">Water Monitors</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"> <a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting</a></li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                    <li><a href="shop-standard.html">Home Entertainment Systems</a></li>
                                                    <li><a href="shop-standard.html">Blinds And Shades</a></li>
                                                    <li><a href="shop-standard.html">Water Monitors<span
                                                                class="inline-block py-1 px-1.1 max-sm:py-0.5 max-sm:px-2 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-red">Offer</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"> <a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting<span
                                                                class="inline-block py-1 px-1.1 max-sm:py-0.5 max-sm:px-2 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-secondary">Exclusive</span></a>
                                                    </li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                    <li><a href="shop-standard.html">Home Entertainment Systems</a></li>
                                                    <li><a href="shop-standard.html">Blinds And Shades</a></li>
                                                    <li><a href="shop-standard.html">Water Monitors</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"><a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting<span
                                                                class="inline-block py-1 px-1.1 max-sm:py-0.5 max-sm:px-2 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-orange">Feture</span></a>
                                                    </li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"> <a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting</a></li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks<span
                                                                class="inline-block py-1 px-1.1 max-sm:py-0.5 max-sm:px-2 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-purple">SALE</span></a>
                                                    </li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                    <li><a href="shop-standard.html">Home Entertainment Systems</a></li>
                                                    <li><a href="shop-standard.html">Blinds And Shades</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"> <a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting</a></li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                    <li><a href="shop-standard.html">Home Entertainment Systems</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/4 sm:w-1/3 w-1/2"> <a href="shop-standard.html"
                                                    class="menu-title">Smart Home Products</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Thermostats</a></li>
                                                    <li><a href="shop-standard.html">Lighting</a></li>
                                                    <li><a href="shop-standard.html">Security Systems</a></li>
                                                    <li><a href="shop-standard.html">Locks</a></li>
                                                    <li><a href="shop-standard.html">Home Assistants</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cate-drop">
                                    <a href="javascript:void(0);">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>UrbanSkirt</span>
                                        <span class="menu-icon">
                                            <i class="icon feather icon-chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-standard.html">Thermostats</a></li>
                                        <li><a href="shop-standard.html">Lighting</a></li>
                                        <li><a href="shop-standard.html">Security Systems</a></li>
                                        <li><a href="shop-standard.html">Locks</a></li>
                                        <li><a href="shop-standard.html">Home Assistants</a></li>
                                        <li><a href="shop-standard.html">Entertainment Systems</a></li>
                                        <li><a href="shop-standard.html">Blinds And Shades</a></li>
                                        <li><a href="shop-standard.html">Appliances</a></li>
                                        <li><a href="shop-standard.html">Water Monitors</a></li>
                                        <li><a href="shop-standard.html">Gardening Systems</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>VelvetGown</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>LushShorts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Vintage</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Wedding </span>
                                        <span
                                            class="inline-block py-1 px-1.1 max-sm:py-0.5 max-sm:px-2 text-[11px] font-Lufga leading-[1] uppercase text-center font-medium rounded-md text-white ml-1 bg-purple">SALE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Cotton</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Linen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Navy</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Urban</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-standard.html">
                                        <i class="icon feather icon-arrow-right"></i>
                                        <span>Business Meeting</span>
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
                        <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Home</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu demo-menu">
                                <div class="row">
                                    <div class="md:w-1/3 w-1/2"><a href="index.html"><img
                                                src="assets/images/demo/demo-1.png" alt="/"> <span class="menu-title">01
                                                Home Page</span></a></div>
                                    <div class="md:w-1/3 w-1/2"><a href="index-2.html"><img
                                                src="assets/images/demo/demo-2.png" alt="/"> <span class="menu-title">02
                                                Home Page</span></a></div>
                                    <div class="md:w-1/3 w-1/2"><a href="index-3.html"><img
                                                src="assets/images/demo/demo-3.png" alt="/"> <span class="menu-title">03
                                                Home Page</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="has-mega-menu sub-menu-down">
                            <a href="javascript:void(0);"><span>Shop</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu shop-menu">
                                <div class="row">
                                    <div class="lg:w-2/3 w-full">
                                        <div class="row">
                                            <div class="md:w-1/3 w-1/2">
                                                <a href="javascript:void(0);" class="menu-title">Shop Structure</a>
                                                <ul>
                                                    <li><a href="shop-standard.html">Shop Standard</a></li>
                                                    <li><a href="shop-list.html">Shop List</a></li>
                                                    <li><a href="shop-with-category.html">Shop With Category</a></li>
                                                    <li><a href="shop-filters-top-bar.html">Shop Filters Top Bar</a>
                                                    </li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-style-1.html">Shop Style 1</a></li>
                                                    <li><a href="shop-style-2.html">Shop Style 2</a></li>
                                                </ul>
                                            </div>
                                            <div class="md:w-1/3 w-1/2">
                                                <a href="javascript:void(0);" class="menu-title">Product Structure</a>
                                                <ul>
                                                    <li><a href="product-default.html">Default</a></li>
                                                    <li><a href="product-thumbnail.html">Thumbnail</a></li>
                                                    <li><a href="product-grid-media.html">Grid Media</a></li>
                                                    <li><a href="product-carousel.html">Carousel</a></li>
                                                    <li><a href="product-full-width.html">Full Width</a></li>

                                                </ul>
                                            </div>
                                            <div class="md:w-1/3 w-1/2">
                                                <a href="javascript:void(0);" class="menu-title">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                    <li><a href="shop-cart.html">Cart</a></li>
                                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                                    <li><a href="shop-compare.html">Compare</a></li>
                                                    <li><a href="shop-order-tracking.html">Order Tracking</a></li>
                                                    <li><a href="shop-my-account.html">My Account</a></li>
                                                    <li><a href="shop-registration.html">Registration</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="w-full">
                                                <div class="month-deal">
                                                    <div>
                                                        <h3>Deal of the month</h3>
                                                        <p class="mb-0">Yes! Send me exclusive offers, personalised, and
                                                            unique gift ideas, tips for shopping on Pixio <a
                                                                href="shop-standard.html" class="dz-link-2">View All
                                                                Products</a></p>
                                                    </div>
                                                    <div class="sale-countdown">
                                                        <div class="countdown text-center">
                                                            <div class="date"><span
                                                                    class="time days text-primary"></span>
                                                                <span class="work-time">Days</span>
                                                            </div>
                                                            <div class="date"><span
                                                                    class="time hours text-primary"></span>
                                                                <span class="work-time">Hours</span>
                                                            </div>
                                                            <div class="date"><span
                                                                    class="time mins text-primary"></span>
                                                                <span class="work-time">Minutess</span>
                                                            </div>
                                                            <div class="date"><span
                                                                    class="time secs text-primary"></span>
                                                                <span class="work-time">Second</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="md:w-1/3 hidden lg:block">
                                        <div class="adv-media"><img src="assets/images/adv-1.png" alt="/"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Blog</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu">
                                <div class="row">
                                    <div class="md:w-1/4 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Blog Dark Style</a>
                                        <ul>
                                            <li><a href="blog-dark-2-column.html">Blog 2 Column</a></li>
                                            <li><a href="blog-dark-2-column-sidebar.html">Blog 2 Column Sidebar</a></li>
                                            <li><a href="blog-dark-3-column.html">Blog 3 Column</a></li>
                                            <li><a href="blog-dark-half-image.html">Blog Half Image</a></li>
                                        </ul>
                                        <a href="javascript:void(0);" class="menu-title">Blog Light Style</a>
                                        <ul>
                                            <li><a href="blog-light-2-column.html">Blog 2 Column</a></li>
                                            <li><a href="blog-light-2-column-sidebar.html">Blog 2 Column Sidebar</a>
                                            </li>
                                            <li><a href="blog-light-half-image.html">Blog Half Image</a></li>
                                            <li><a href="blog-exclusive.html">Blog Exclusive</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/4 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Blog Sidebar</a>
                                        <ul>
                                            <li><a href="blog-left-sidebar.html">Blog left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-both-sidebar.html">Blog Both Sidebar</a></li>
                                            <li><a href="blog-wide-sidebar.html">Blog Wide Sidebar</a></li>
                                        </ul>
                                        <a href="javascript:void(0);" class="menu-title">Blog Page</a>
                                        <ul>
                                            <li><a href="blog-archive.html">Blog Archive</a></li>
                                            <li><a href="blog-author.html">Author</a></li>
                                            <li><a href="blog-category.html">Blog Category</a></li>
                                            <li><a href="blog-tag.html">Blog Tag</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/4 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Blog Details</a>
                                        <ul>
                                            <li><a href="post-standard.html">Post Standard</a></li>
                                            <li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
                                            <li><a href="post-header-image.html">Post Header Image</a></li>
                                            <li><a href="post-slide-show.html">Post Slide Show</a></li>
                                            <li><a href="post-side-image.html">Post Side Image</a></li>
                                            <li><a href="post-gallery.html">Post Gallery</a></li>
                                            <li><a href="post-gallery-alternative.html">Post Gallery Alternative</a>
                                            </li>
                                            <li><a href="post-open-gutenberg.html">Post Open Gutenberg</a></li>
                                            <li><a href="post-link.html">Post Link</a></li>
                                            <li><a href="post-audio.html">Post Audio</a></li>
                                            <li><a href="post-video.html">Post Video</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/4 sm:w-1/2 w-full">
                                        <a href="javascript:void(0);" class="menu-title">Recent Posts</a>
                                        <div class="widget widget_post pt-2">
                                            <ul>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="assets/images/shop/product/small/1.png" alt="">
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name"><a href="post-standard.html">Cozy Knit Cardigan
                                                                Sweater</a></h6>
                                                        <span class="time">July 23, 2024</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="assets/images/shop/product/small/2.png" alt="">
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name"><a href="post-standard.html">Sophisticated
                                                                Swagger Suit</a></h6>
                                                        <span class="time">July 23, 2024</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="assets/images/shop/product/small/3.png" alt="">
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name"><a href="post-standard.html">Athletic Mesh
                                                                Sports Leggings</a></h6>
                                                        <span class="time">July 23, 2024</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dz-media">
                                                        <img src="assets/images/shop/product/small/4.png" alt="">
                                                    </div>
                                                    <div class="dz-content">
                                                        <h6 class="name"><a href="post-standard.html">Satin Wrap Party
                                                                Blouse</a></h6>
                                                        <span class="time">July 23, 2024</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Portfolio</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu portfolio-menu">
                                <div class="row">
                                    <div class="xl:w-5/6 lg:w-3/4 md:w-3/4 pe-xl-5 pe-md-3 sm:w-2/3 ">
                                        <ul class="row portfolio-nav-link">
                                            <li class="col"><a href="portfolio-tiles.html"><img
                                                        src="assets/images/portfolio/icons/portfolio-tiles.svg"
                                                        alt="/"><span>Portfolio Tiles</span></a></li>
                                            <li class="col"><a href="collage-style-1.html"><img
                                                        src="assets/images/portfolio/icons/collage-style-1.svg"
                                                        alt="/"><span>Collage Style 1</span></a></li>
                                            <li class="col"><a href="collage-style-2.html"><img
                                                        src="assets/images/portfolio/icons/collage-style-2.svg"
                                                        alt="/"><span>Collage Style 2</span></a></li>
                                            <li class="col"><a href="masonry-grid.html"><img
                                                        src="assets/images/portfolio/icons/masonry-grid.svg"
                                                        alt="/"><span>Masonry Grid</span></a></li>
                                            <li class="col"><a href="cobble-style-1.html"><img
                                                        src="assets/images/portfolio/icons/cobble-style-1.svg"
                                                        alt="/"><span>Cobble Style 1</span></a></li>
                                            <li class="col"><a href="cobble-style-2.html"><img
                                                        src="assets/images/portfolio/icons/cobble-style-2.svg"
                                                        alt="/"><span>Cobble Style 2</span></a></li>
                                            <li class="col"><a href="portfolio-thumbs-slider.html"><img
                                                        src="assets/images/portfolio/icons/portfolio-thumbs-slider.svg"
                                                        alt="/"><span>Portfolio Thumbs Slider</span></a></li>
                                            <li class="col"><a href="portfolio-film-strip.html"><img
                                                        src="assets/images/portfolio/icons/portfolio-film-strip.svg"
                                                        alt="/"><span>Portfolio Film Strip</span></a></li>
                                            <li class="col"><a href="carousel-showcase.html"><img
                                                        src="assets/images/portfolio/icons/carousel-showcase.svg"
                                                        alt="/"><span>Carousel Showcase</span></a></li>
                                            <li class="col"><a href="portfolio-split-slider.html"><img
                                                        src="assets/images/portfolio/icons/portfolio-split-slider.svg"
                                                        alt="/"><span>Portfolio Split Slider</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="xl:w-1/6 lg:w-1/4 md:w-1/4 line-left ps-3 pe-0 sm:w-1/3">
                                        <a href="javascript:void(0);" class="menu-title">Portfolio Details</a>
                                        <ul>
                                            <li><a href="portfolio-details-1.html">Portfolio Details 1</a></li>
                                            <li><a href="portfolio-details-2.html">Portfolio Details 2</a></li>
                                            <li><a href="portfolio-details-3.html">Portfolio Details 3</a></li>
                                            <li><a href="portfolio-details-4.html">Portfolio Details 4</a></li>
                                            <li><a href="portfolio-details-5.html">Portfolio Details 5</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Pages</span><i
                                    class="fas fa-chevron-down tabindex"></i></a>
                            <div class="mega-menu">
                                <div class="row md:justify-between">
                                    <div class="md:w-1/6 sm:w-1/3 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="about-me.html">About Me</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="our-gift-vouchers.html">Our Gift Vouchers</a></li>
                                            <li><a href="what-we-do.html">What We Do</a></li>
                                            <li><a href="faqs-1.html">Faqs 1</a></li>
                                            <li><a href="faqs-2.html">Faqs 2</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/6 sm:w-1/3 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Contact Us</a>
                                        <ul>
                                            <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                            <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                            <li><a href="contact-us-3.html">Contact Us 3</a></li>
                                        </ul>
                                        <a href="javascript:void(0);" class="menu-title">Web Pages</a>
                                        <ul>
                                            <li><a href="error-1.html">Error 404 1</a></li>
                                            <li><a href="error-2.html">Error 404 2</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="under-construction.html">Under Construction</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/6 sm:w-1/3 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Banner Style</a>
                                        <ul>
                                            <li><a href="banner-with-bg-color.html">Banner with BG Color</a></li>
                                            <li><a href="banner-with-image.html">Banner with Image</a></li>
                                            <li><a href="banner-with-video.html">Banner with Video</a></li>
                                            <li><a href="banner-with-kanbern.html">Banner with Kanbern</a></li>
                                            <li><a href="banner-small.html">Banner Small</a></li>
                                            <li><a href="banner-medium.html">Banner Medium</a></li>
                                            <li><a href="banner-large.html">Banner Large</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/6 sm:w-1/3 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Header Style</a>
                                        <ul>
                                            <li><a href="header-style-1.html">Header Style 1</a></li>
                                            <li><a href="header-style-2.html">Header Style 2</a></li>
                                            <li><a href="header-style-3.html">Header Style 3</a></li>
                                            <li><a href="header-style-4.html">Header Style 4</a></li>
                                            <li><a href="header-style-5.html">Header Style 5</a></li>
                                            <li><a href="header-style-6.html">Header Style 6</a></li>
                                            <li><a href="header-style-7.html">Header Style 7</a></li>
                                        </ul>
                                    </div>
                                    <div class="md:w-1/6 sm:w-1/3 w-1/2">
                                        <a href="javascript:void(0);" class="menu-title">Footer Style</a>
                                        <ul>
                                            <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                            <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                            <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                            <li><a href="footer-style-4.html">Footer Style 4</a></li>
                                            <li><a href="footer-style-5.html">Footer Style 5</a></li>
                                            <li><a href="footer-style-6.html">Footer Style 6</a></li>
                                            <li><a href="footer-style-7.html">Footer Style 7</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="sub-menu-down">
                            <a href="javascript:void(0);" class="after-remover">My Account
                                <i class="fas fa-chevron-down tabindex"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="account-dashboard.html">Dashboard</a></li>
                                <li><a href="account-orders.html">Orders</a></li>
                                <li><a href="account-order-details.html">Orders Details</a></li>
                                <li><a href="account-order-confirmation.html">Orders Confirmation</a></li>
                                <li><a href="account-downloads.html">Downloads</a></li>
                                <li><a href="account-return-request.html">Return Request</a></li>
                                <li><a href="account-return-request-detail.html">Return Request Detail</a></li>
                                <li><a href="account-refund-requests-confirmed.html">Return Request Confirmed</a></li>
                                <li><a href="account-profile.html">Profile</a></li>
                                <li><a href="account-address.html">Address</a></li>
                                <li><a href="account-shipping-methods.html">Shipping methods</a></li>
                                <li><a href="account-payment-methods.html">Payment Methods</a></li>
                                <li><a href="account-review.html">Review</a></li>
                                <li><a href="account-billing-address.html">Billing address</a></li>
                                <li><a href="account-shipping-address.html">Shipping address</a></li>
                                <li><a href="account-cancellation-requests.html">Cancellation Requests</a></li>

                            </ul>
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
                                    <a class="nav-link border-b border-[#0000005c]" href="{{ route('login') }}">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item register-link">
                                    <a class="nav-link border-b border-[#0000005c]" href="{{ route('register') }}">
                                        Register
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <span class="nav-link  border-[#0000005c]">
                                        {{ Auth::user()->name }}
                                    </span>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="nav-link border border-[#0000005c]">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            @endguest

                            <li>
                                <a href="javascript:void(0);" class="offcanvas-btn" data-target="offcanvasTop">
                                    <i class="iconly-Light-Search"></i>
                                </a>
                            </li>
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

    <!-- SearchBar -->
    <div class="h-[580px] max-md:h-[470px] max-sm:!h-[440px] pt-13.5 max-md:pt-7.5 fixed z-[1045] flex flex-col duration-500 top-0 left-0 right-0 bg-light overflow-auto offcanvas offcanvas-top is-closed"
        tabindex="-1" id="offcanvasTop">
        <button type="button"
            class="size-10 flex items-center justify-center absolute top-1.5 right-5 opacity-50 text-4.5xl offcanvas-close">
            &times;
        </button>
        <div class="container">
            <form class="block w-full mb-13.5 relative">
                <div class="relative flex flex-wrap items-center border-b-2 border-secondary pb-2">
                    <div
                        class="relative after:content-[''] after:absolute after:-translate-y-1/2 after:top-1/2 after:right-0 after:w-[1px] after:h-[35px] max-sm:after:h-6.1 after:bg-[#bbbbbbad]">
                        <select
                            class="nice-select bg-transparent border-0 float-none px-0 text-xl min-w-[270px] font-Lufga h-[45px] leading-[48px]">
                            <option>All Categories</option>
                            <option>Clothes</option>
                            <option>UrbanSkirt</option>
                            <option>VelvetGown</option>
                            <option>LushShorts</option>
                            <option>Vintage</option>
                            <option>Wedding</option>
                            <option>Cotton</option>
                            <option>Linen</option>
                            <option>Navy</option>
                            <option>Urban</option>
                            <option>Business Meeting</option>
                            <option>Formal</option>
                        </select>
                    </div>
                    <input type="search"
                        class="py-2.5 px-3.6 text-xl font-Lufga text-title outline-none flex-auto w-[1%] h-[45px] bg-light"
                        placeholder="Search Product">
                    <button class="btn" type="button">
                        <i class="iconly-Light-Search"></i>
                    </button>
                </div>
                <ul class="flex items-center flex-wrap py-2.5">
                    <li class="text-2sm py-1.1"><span>Quick Search :</span></li>
                    <li class="text-2sm py-1.1 px-3.6 "><a href="shop-list.html">Clothes</a></li>
                    <li class="text-2sm py-1.1 px-3.6 "><a href="shop-list.html">UrbanSkirt</a></li>
                    <li class="text-2sm py-1.1 px-3.6 "><a href="shop-list.html">VelvetGown</a></li>
                    <li class="text-2sm py-1.1 px-3.6 "><a href="shop-list.html">LushShorts</a></li>
                </ul>
            </form>
            <div class="row">
                <div class="w-full">
                    <h5 class="mb-4">You May Also Like</h5>
                    <div class="swiper category-swiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/1.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">SilkBliss Dress</a></h6>
                                        <h6>$40.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/3.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">GlamPants</a></h6>
                                        <h6>$30.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/4.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">ComfyLeggings</a></h6>
                                        <h6>$35.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/2.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">ClassicCapri</a></h6>
                                        <h6>$20.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/5.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">DapperCoat</a></h6>
                                        <h6>$70.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/6.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">ComfyLeggings</a></h6>
                                        <h6>$45.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/7.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">DenimDream Jeans</a></h6>
                                        <h6>$40.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative z-[1] h-full">
                                    <div class="rounded-3xl overflow-hidden relative">
                                        <img src="assets/images/shop/product/4.png" alt="image">
                                    </div>
                                    <div class="flex justify-between font-Lufga py-3">
                                        <h6><a href="shop-list.html">SilkBliss Dress</a></h6>
                                        <h6>$60.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SearchBar -->

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
                                                    <img src="assets/images/shop/shop-cart/pic1.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a
                                                            href="product-thumbnail.html">Sophisticated Swagger Suit</a>
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
                                                    <img src="assets/images/shop/shop-cart/pic2.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a href="product-thumbnail.html">Cozy
                                                            Knit Cardigan Sweater</a></h6>
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
                                                    <img src="assets/images/shop/shop-cart/pic3.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a
                                                            href="product-thumbnail.html">Athletic Mesh Sports
                                                            Leggings</a></h6>
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
                                    <h5 class="font-bold">300.00$</h5>
                                </div>
                                <div class="mt-auto">
                                    <div class="flex items-center mb-10">
                                        <div class="size-13.5 mr-5 flex items-center justify-center">
                                            <i class="flaticon flaticon-ship text-[55px]"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h6 class="mb-2 pr-6">Congratulations , you've got free shipping!</h6>
                                            <div class="h-1.1 bg-[#e9ecef] overflow-hidden flex">
                                                <div class="bg-secondary progress-animated border-0" style="width: 75%;"
                                                    role="progressbar">
                                                    <span class="sr-only">75% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="shop-checkout.html"
                                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm inline-block font-medium font-Lufga leading-[1.2] border border-secondary rounded-xl duration-700 hover:bg-secondary hover:text-white relative overflow-hidden text-center w-full mb-5">Checkout</a>
                                    <a href="shop-cart.html"
                                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga inline-block font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden text-center w-full">View
                                        Cart</a>
                                </div>
                            </div>
                        </div>
                        <div x-show="tab == 'wishlist'" x-transition:enter="transition-all duration-700 easy-in-out"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                            <div class="flex flex-col min-h-[calc(100vh_-_190px)]">
                                <ul class="sidebar-cart-list">
                                    <li x-data="{show: true}">
                                        <div class="py-5 border-b border-border" x-ref="show"
                                            x-show="console.log('sup'); return show" x-transition.opacity>
                                            <div class="flex items-center justify-center">
                                                <div class="size-20 rounded-3xl relative overflow-hidden mr-4">
                                                    <img src="assets/images/shop/shop-cart/pic1.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a
                                                            href="product-thumbnail.html">Sophisticated Swagger Suit</a>
                                                    </h6>
                                                    <div class="flex items-center">
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
                                                    <img src="assets/images/shop/shop-cart/pic2.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a href="product-thumbnail.html">Cozy
                                                            Knit Cardigan Sweater</a></h6>
                                                    <div class="flex items-center">
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
                                                    <img src="assets/images/shop/shop-cart/pic3.jpg" alt=""
                                                        class="w-full">
                                                </div>
                                                <div class="mr-5 flex-[1]">
                                                    <h6 class="mb-2 font-medium"><a
                                                            href="product-thumbnail.html">Athletic Mesh Sports
                                                            Leggings</a></h6>
                                                    <div class="flex items-center">
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
                                <div class="mt-auto">
                                    <a href="shop-wishlist.html"
                                        class="btn py-3 px-7.5 max-sm:px-6 text-base max-sm:text-sm font-Lufga font-medium leading-[1.2] border border-secondary bg-secondary text-white rounded-xl duration-700 relative overflow-hidden text-center block w-full">Check
                                        Your Favourite</a>
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