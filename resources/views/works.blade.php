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
                            <h2>{{__('welcome.latest_works')}}</h2></br>
                            <h2>{{ __('welcome.donation_large') }}</h2>
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
    @if($works)
    
    <div class="our-cases-area section-padding2">
        <div class="container">
            <div class="row">
                @foreach($works as $work)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img" style="width: 100%;height: 250px;">
                            <img src="{{ url('public/uploads/donation').'/'.$work->file }}" alt="">
                        </div>
                        <div class="cases-caption" >
                            <h3><a href="#">{{ GoogleTranslate::trans($work->name, session()->get('lang_code'), 'en'); }}</a></h3>
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
                                <p>Raised:<span> ₹20,000</span></p>
                                <p>Goal:<span> ₹{{ $work->goal }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $works->links() }}
            </div>
        </div>
    </div>
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