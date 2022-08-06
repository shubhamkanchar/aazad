@extends('layouts.index');
@section('content')

    <main>
    <!--? Hero Start -->
   <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>{{__('welcome.gallery')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    @php
        use Stichoza\GoogleTranslate\GoogleTranslate;
    @endphp
    @if($gallery)
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row">
                @foreach($gallery as $g)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{ url('public/uploads/gallery').'/'.$g->file }}" alt="">
                            
                            <!-- <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">{{ GoogleTranslate::trans($g->name, session()->get('lang_code'), 'en'); }}</a></h3>
                            <!-- <p>Volunteer leader</p> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $gallery->links() }}
            </div>
        </div>
    </div>
    @endif
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