
<footer>
        <div class="footer-wrapper section-bg2" data-background="{{ url('public/assets/img/gallery/footer_bg.png') }}">
            <!-- Footer Top-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-logo mb-20">
                                        <a href="index.html"><img class="design" src="{{ url('public/assets/img/logo/logo.jpeg') }}" alt="Aazad foundation"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>{{__('welcome.contact')}}</h4>
                                    <ul>
                                        <li>
                                            <p>{{__('welcome.address')}} :{{__('welcome.line1')}}, {{__('welcome.line2')}}.</p>
                                        </li>
                                        <li><a href="#">{{__('welcome.phone')}} : {{__('welcome.phone1')}}</a></li>
                                        <li><a href="#">{{__('welcome.email')}} : aazadfoundation@gmail.com</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4> {{__('welcome.link') }}</h4>
                                    <ul>
                                        <li><a href="{{ route('welcome') }}">{{__('welcome.home')}}</a></li>
                                        <li><a href="{{ route('about') }}">{{__('welcome.about')}}</a></li>
                                        <li><a href="{{ route('works') }}">{{__('welcome.latest_works')}}</a></li>
                                        <li><a href="{{ route('event') }}">{{__('welcome.social_event')}}</a></li>
                                        <!-- <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ route('gallery') }}">{{__('welcome.gallery')}}</a></li>
                                        <li><a href="{{ route('contact') }}">{{__('welcome.contact')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>{{ __('welcome.newsletter')}}</h4>
                                    <div class="footer-pera footer-pera2">
                                    <p>{{ __('welcome.newsletter_msg')}}</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="{{ __('welcome.email') }}"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' {{ __('welcome.email') }} '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm"><img src="{{ url('public/assets/img/gallery/form.png') }}" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-9 ">
                                <div class="footer-copy-right">
                                    <p>Copyright &copy;2022 All rights reserved</p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3">
                                <div class="footer-social f-right">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a  href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Demo Class</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form id="visitscheduleform" action="{{ route('request_mail') }}">
                        @csrf()
                        <input type="hidden" name="token" value="visit">
                        <h2 style="font-size:18px">Contact Form</h2>
                        <div class="row form-group">
                            <label> Name :</label>
                            <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm">
                        </div>
                        <div class="form-group row">
                            <label>Email Address :</label>
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm">
                        </div>
                        <div class="row form-group">
                            <label>Mobile Number:</label>
                            <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm">
                        </div>
                        <div class="row form-group">
                            <label>Select course:</label>
                            <select name="course" rows="5" placeholder="Enter select course" class="form-control input-sm">
                                <option></option>
                                
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-circle-o-notch fa-spin hidden mr-2 fa-spin-visit"></i> Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
