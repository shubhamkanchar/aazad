@extends('layouts.index')
@section('css')
<style>
    .cat-cap h5{
        font-size: 26px;
    }
</style>
@endsection
@section('content')

    <main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style="height:750px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">{{__('welcome.our_helping_to')}}<br> {{__('welcome.the_world')}}</h1>
                                <P data-animation="fadeInUp" data-delay=".8s" >{{__('welcome.slogan')}}</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="#" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">{{__('welcome.donate')}}</a>
                                    <a href="#" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>{{__('welcome.phone1')}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <!-- <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s" >Onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut bore et dolore magnt, sed do eiusmod.</P>
                                
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">Donate</a>
                                    <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>+12 1325 41</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <div class="service-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>{{ __('welcome.doing') }}</span>
                        <h2>{{ __('welcome.doing_anw') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.education') }}</h5>
                            <p>{{ __('welcome.education_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.health') }}</h5>
                            <p>{{ __('welcome.health_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.agri') }}</h5>
                            <p>{{ __('welcome.agri_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.science') }}</h5>
                            <p>{{ __('welcome.science_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.industry') }}</h5>
                            <p>{{ __('welcome.industry_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.literature') }}</h5>
                            <p>{{ __('welcome.literature_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.culture') }}</h5>
                            <p>{{ __('welcome.culture_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.cleanliness') }}</h5>
                            <p>{{ __('welcome.cleanliness_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.enviroment') }}</h5>
                            <p>{{ __('welcome.enviroment_desc') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>{{ __('welcome.sports') }}</h5>
                            <p>{{ __('welcome.sports_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Law Start-->
    <section class="about-low-area section-padding1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>{{ __('welcome.about_our_foundation')}}</span>
                            <h2>{{ __('welcome.slogan') }}</h2>
                        </div>
                        <p>{{ __('welcome.about_line1') }}.</p>
                        <p>{{ __('welcome.about_line2') }}.</p>
                    </div>
                    <a href="about.html" class="btn">{{__('welcome.about')}}</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="{{ url('public/assets/img/gallery/about2.png') }}" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="{{ url('public/assets/img/gallery/about1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!-- Our Cases Start -->
    @php
        $works = App\Models\donation::orderBy('created_at','desc')->limit(3)->get();
    @endphp
    @if($works)
    <div class="our-cases-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>{{ __('welcome.donation_small') }}</span>
                        <h2>{{ __('welcome.donation_large') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($works as $work)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img" style="width: 100%;height: 250px;">
                            <img src="{{ url('public/uploads/donation').'/'.$work->file }}" alt="">
                        </div>
                        <div class="cases-caption" >
                            <h3><a href="{{ route('works') }}">{{ $work->name }}</a></h3>
                            <!-- Progress Bar -->
                            @php
                            $percentage=(20000/$work->goal)*100;
                            @endphp
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="{{ $percentage }}"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> ???20,000</span></p>
                                <p>Goal:<span> ???{{ $work->goal }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <a stye="color:white" href="{{ route('donation') }}" class="btn btn-primary" >All</a>
            </div>
        </div>
    </div>
    @endif
    <!-- Our Cases End -->
    <!-- Featured_job_start --> 
    @php
        $event = App\Models\event::orderBy('created_at','desc')->limit(3)->get();
    @endphp
    @if($event)
    <section class="featured-job-area section-padding1 section-bg2" data-background="{{ url('public/assets/img/gallery/section_bg03.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>{{ __('welcome.event_small') }}</span>
                        <h2>{{ __('welcome.event_large') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($event as $e)
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="{{ $e->link }}" target="_blank"><img style="width:175px;height: 175px;" src="{{ url('public/uploads/event').'/'.$e->file }}" alt=""></a>
                            </div>
                            <div class="job-tittle" style="color:black">
                                <a target="_blank" href="{{ $e->link }}"><h4>{{ $e->name }}</h4></a>
                                <ul>
                                    <li style="color:black"><i class="far fa-clock"></i>{{ $e->from }} - {{ $e->to}}</li>
                                    <li style="color:black"><i class="fas fa-sort-amount-down"></i>{{ $e->date }}</li>
                                    <li><a target="_blank" style="color:black" href="{{ $e->link }}"><i class="fas fa-map-marker-alt"></i>{{ $e->location }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <a stye="color:white" href="{{ route('event') }}" class="btn btn-primary" >All</a>
            </div>
        </div>
    </section>
    @endif
    <!-- Featured_job_end -->
    <!--? Team Ara Start -->
    <div class="team-area pt-180 pb-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <!-- <span>What we are doing</span> -->
                        <h2>{{__('welcome.team_heading')}}</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ url('public/team/team1.jpg') }}" alt="">
                            
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Bruce Roberts</a></h3>
                            <p>Volunteer leader</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ url('public/team/team1.jpg') }}" alt="">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">{{__('welcome.member1')}}</a></h3>
                            <p>{{__('welcome.designation1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ url('public/team/team3.jpeg') }}" alt="">
                            <!-- Blog Social -->
                            <!-- <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">{{__('welcome.member2')}}</a></h3>
                            <p>{{__('welcome.designation2')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="{{ url('public/assets/img/gallery/section_bg01.png') }}">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>{{ __('welcome.appeal') }}</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="{{ route('register') }}" class="btn white-btn f-right sm-left">{{ __('welcome.appeal_button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Testimonial Start -->
   
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    
    <!-- Blog Area End -->
    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="{{ url('public/assets/img/gallery/section_bg02.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">6,200</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">{{ __('welcome.count1') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">{{ __('welcome.count2') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">{{ __('welcome.count3') }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">{{ __('welcome.count4') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    </main>
@endsection