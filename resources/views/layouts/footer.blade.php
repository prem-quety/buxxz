<footer class="relative bg-light overflow-hidden z-1">
    <!-- Footer Top -->
    <div class="pt-[90px] max-lg:pt-13.5 pb-14.5 max-lg:pb-5 max-md:!pb-0">
        <div class="container">
            <div class="row">
                <!-- About (wide) -->
                <div class="xl:w-1/3 md:w-1/2 w-full wow fadeInUp" data-wow-delay="0.1s">
                    <div class="mb-7.5 widget_about mr-2">
                        <div class="mb-6">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/buzzx_footer.png') }}" alt="BuzzX"
                                    class="max-w-[80px]">
                            </a>
                        </div>
                        <ul class="mb-6">
                            <li class="py-1 text-2sm font-medium">
                                <p><span>Address</span> : 451 Wall Street, UK, London</p>
                            </li>
                            <li class="py-1 text-2sm font-medium">
                                <p><span>E-mail</span> : support@buzzx.com</p>
                            </li>
                            <li class="py-1 text-2sm font-medium">
                                <p><span>Phone</span> : (064) 332-1233</p>
                            </li>
                        </ul>
                        <h6 class="capitalize mb-2">Subscribe to our newsletter</h6>
                        <form class="dzSubscribe style-1" action="{{ route('newsletter.subscribe') }}" method="post">
                            @csrf
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="relative flex flex-wrap items-stretch w-full">
                                    <input name="dzEmail" required type="email"
                                        class="w-[1%] flex-auto h-[45px] py-2.5 px-5 border border-white rounded-xl bg-light2 outline-none focus:shadow-focus"
                                        placeholder="Your Email Address">
                                    <div class="absolute right-0 top-1/2 z-9 -translate-y-1/2">
                                        <button type="submit" class="size-13.5 group">
                                            <i
                                                class="icon feather icon-arrow-right text-xl group-hover:animate-toLeftFromRight"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Store Locations -->
                <div class="xl:w-1/5 sm:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="mb-7.5 font-medium">
                        <h5 class="text-xl leading-[1.2] mb-5">Our Stores</h5>
                        <ul>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">New York</a></li>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">London SF</a></li>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">Edinburgh</a></li>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">Los Angeles</a></li>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">Chicago</a></li>
                            <li class="py-2 text-2sm"><a class="hover:text-primary" href="#">Las Vegas</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="xl:w-1/5 sm:w-1/3 w-1/2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="mb-7.5 font-medium">
                        <h5 class="text-xl leading-[1.2] mb-5">Useful Links</h5>
                        <ul>
                            <li class="py-2 text-2sm"><a href="{{ route('privacy') }}"
                                    class="hover:text-primary">Privacy Policy</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('returns') }}"
                                    class="hover:text-primary">Returns</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('terms') }}" class="hover:text-primary">Terms &
                                    Conditions</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('contact') }}"
                                    class="hover:text-primary">Contact Us</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('news') }}" class="hover:text-primary">Latest
                                    News</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('sitemap') }}" class="hover:text-primary">Our
                                    Sitemap</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class="xl:w-1/5 sm:w-1/3 w-full wow fadeInUp" data-wow-delay="0.4s">
                    <div class="mb-7.5 font-medium">
                        <h5 class="text-xl leading-[1.2] mb-5">Footer Menu</h5>
                        <ul>
                            <li class="py-2 text-2sm"><a href="#" class="hover:text-primary">Instagram Profile</a></li>
                            <li class="py-2 text-2sm"><a href="#" class="hover:text-primary">New Collection</a></li>
                            <li class="py-2 text-2sm"><a href="#" class="hover:text-primary">Women Dress</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('contact') }}"
                                    class="hover:text-primary">Contact Us</a></li>
                            <li class="py-2 text-2sm"><a href="{{ route('news') }}" class="hover:text-primary">Latest
                                    News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row py-7 max-sm:py-5 border-t border-black/10 font-semibold text-2sm max-sm:text-sm wow fadeInUp"
                data-wow-delay="0.1s">
                <div class="lg:w-1/2 w-full text-start max-lg:text-center">
                    <p class="copyright-text">© <span class="current-year">{{ now()->year }}</span>
                        <a class="text-primary" href="{{ url('/') }}">BuzzX</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="lg:w-1/2 w-full text-end max-lg:text-center max-lg:mt-3.6">
                    <div class="flex items-center justify-center md:justify-center xl:justify-end">
                        <span class="mr-4">We Accept: </span>
                        <img src="{{ asset('assets/images/footer-img.png') }}" alt="Payment Methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>