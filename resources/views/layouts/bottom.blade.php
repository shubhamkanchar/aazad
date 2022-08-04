<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{ url('public/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ url('public/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ url('public/assets/js/popper.min.js') }}"></script>
<script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ url('public/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ url('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('public/assets/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ url('public/assets/js/wow.min.js') }}"></script>
<script src="{{ url('public/assets/js/animated.headline.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ url('public/assets/js/gijgo.min.js') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ url('public/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.sticky.js') }}"></script>
<!-- Progress -->
<script src="{{ url('public/assets/js/jquery.barfiller.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ url('public/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ url('public/assets/js/waypoints.min.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ url('public/assets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ url('public/assets/js/contact.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.form.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ url('public/assets/js/mail-script.js') }}"></script>
<script src="{{ url('public/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ url('public/assets/js/plugins.js') }}"></script>
<script src="{{ url('public/assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function() {
        $("#callback").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: 'Enter name',
                },
                email: {
                    required: 'Enter email'
                },
                mobile: {
                    required: 'Enter Mobile',
                    digits: 'Enter valid mobile'
                }

            },
            submitHandler: function(form, e) {
                $('.fa-spin-call').removeClass('hidden');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        $('.fa-spin-call').addClass('hidden');
                        if (data.flag == 'success') {
                            toastr.success(data.msg);
                            document.getElementById("callback").reset();
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });

        $("#visitscheduleform").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                course: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: 'Enter name',
                },
                email: {
                    required: 'Enter email'
                },
                mobile: {
                    required: 'Enter Mobile',
                    digits: 'Enter valid mobile'
                },
                course: {
                    required: 'Please select course',
                }
            },
            submitHandler: function(form, e) {
                $('.fa-spin-visit').removeClass('hidden');
                e.preventDefault();
                var form = $(form);
                var actionUrl = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data) {
                        if (data.flag == 'success') {
                            $('.fa-spin-visit').addClass('hidden');
                            toastr.success(data.msg);
                            document.getElementById("visitscheduleform").reset();
                            $('#myModal').modal('hide');
                        } else if (data.flag == 'error') {
                            toastr.success(data.msg);
                        }
                    }
                });
            }
        });
    });
</script>