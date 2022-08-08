    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('public/assets/img/logo/loader.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>     
                                        <li>{{__('welcome.phone')}}: {{ __('welcome.phone1') }} , {{__('welcome.phone2')}}</li>
                                        <li>{{__('welcome.email')}}: azadfoundation2022@gmail.com</li>
                                    </ul>
                                    <div class="header-social">    
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <div class="select-this">
                                        <form action="{{ route('lang_change') }}">
                                            <div class="select-itms">
                                                <select name="lang" id="select1" onchange="form.submit()">
                                                    <option value="en" @if(session()->get('lang_code') == 'en') selected @endif>English</option>
                                                    <option value="mr" @if(session()->get('lang_code') == 'mr') selected @endif>मराठी</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li><a href="{{ route('register') }}">{{__('welcome.subscribe') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('welcome') }}"><img src="{{ url('public/assets/img/logo/main.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="{{ route('welcome') }}">{{__('welcome.home')}}</a></li>
                                                <li><a href="{{ route('about') }}">{{__('welcome.about')}}</a></li>
                                                @php
                                                $works = App\Models\work::count();
                                                $donation = App\Models\donation::count();
                                                $event = App\Models\event::count();
                                                $gallery = App\Models\gallery::count();
                                                @endphp
                                                @if($donation > 0)
                                                <li><a href="{{ route('donation') }}">{{__('welcome.donation')}}</a></li>
                                                @endif
                                                @if($works > 0)
                                                <li><a href="{{ route('works') }}">{{__('welcome.latest_works')}}</a></li>
                                                @endif 
                                                @if($event > 0)
                                                <li><a href="{{ route('event') }}">{{__('welcome.social_event')}}</a></li>
                                                @endif
                                                <!-- <li><a href="blog.html">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li> -->
                                                @if($gallery > 0)
                                                <li><a href="{{ route('gallery') }}">{{__('welcome.gallery')}}</a></li>
                                                @endif
                                                <li><a href="{{ route('contact') }}">{{__('welcome.contact')}}</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="#" class="btn header-btn">{{__('welcome.donate')}}</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->