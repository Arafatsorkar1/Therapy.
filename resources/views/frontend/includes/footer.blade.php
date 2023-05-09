<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <img src="{{asset('/')}}assets/frontend/img/logo.png" alt="#">

            </a>
            <p>{!! get_setting('footer_about') !!}</p>
            <h6 class="text-uppercase text-white py-2">Follow Us</h6>
            <div class="d-flex justify-content-start">
                @if(get_setting('facebook_link'))
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="{{ get_setting('facebook_link') }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                @endif
                @if(get_setting('youtube_link'))
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="{{ get_setting('youtube_link') }}"><i class="fab fa-youtube"></i></a>
                @endif
                @if(get_setting('twitter_link'))
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="{{ get_setting('twitter_link') }}"><i class="fab fa-twitter"></i></a>
                @endif
                @if(get_setting('instagram_link'))
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="{{ get_setting('instagram_link') }}"><i class="fab fa-instagram"></i></a>
                @endif
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-white mb-4">যোগাযোগ করুন</h4>
            <!--<p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>-->
            <p><i class="fa fa-map-marker-alt text-white mr-2"></i>{{ get_setting('location') }}</p>
            <p><i class="fa fa-phone-alt text-white mr-2"></i>{{ get_setting('contact_number') }}</p>
            <p><i class="fa fa-envelope text-white mr-2"></i>{{ get_setting('contract_email') }}</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="/"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                <a class="text-white-50 mb-2" href="{{route('about-us')}}"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                <a class="text-white-50 mb-2" href="#service"><i class="fa fa-angle-right text-white mr-2"></i>Our Services</a>
                <a class="text-white-50 mb-2" href="{{ route('audiological-test') }}"><i class="fa fa-angle-right text-white mr-2"></i>Audiological Test</a>
                <a class="text-white-50" href="{{ route('contract') }}"><i class="fa fa-angle-right text-white mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
            <p class="mb-4">{!! get_setting('newsletter_description') !!}</p>
            <div class="w-100 mb-3">
                <form action="{{ route('subscribe') }}" class="input-group" method="post">
                    @csrf
                    <input type="text" name="subscribe_email" class="form-control border-light @error('subscribe_email') is-invalid @enderror" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary text-uppercase px-3">Subscribe</button>
                    </div>
                </form>
            </div>
            @error('subscribe_email')
                <i class="text-danger">{{ $message }}</i>
            @enderror
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="mb-2 text-center text-white-50">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
    <p class="m-0 text-center text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
</div>
