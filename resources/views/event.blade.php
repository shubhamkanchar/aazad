@extends('layouts.index')
@section('content')

    <main>
    <!--? Hero Start -->
   <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>{{__('welcome.social_event')}}</h2><br>
                            <h2>{{ __('welcome.event_large') }}</h2>
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
    @if($event)
   
    <section class="featured-job-area section-padding2 section-bg2" data-background="{{ url('public/assets/img/gallery/section_bg03.png') }}">
        <div class="container">
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
                                <a target="_blank" href="{{ $e->link }}"><h4>{{ GoogleTranslate::trans($e->name, session()->get('lang_code'), 'en'); }}</h4></a>
                                <ul>
                                    <li style="color:black"><i class="far fa-clock"></i>{{ $e->from }} - {{ $e->to}}</li>
                                    <li style="color:black"><i class="fas fa-sort-amount-down"></i>{{ $e->date }}</li>
                                    <li><a target="_blank" style="color:black" href="{{ $e->link }}"><i class="fas fa-map-marker-alt"></i>{{ GoogleTranslate::trans($e->location, session()->get('lang_code'), 'en'); }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $event->links() }}
            </div>
        </div>
    </section>
    @endif
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