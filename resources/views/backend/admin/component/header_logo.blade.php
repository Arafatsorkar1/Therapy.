<div class="nav-header">
    <div class="brand-logo">
        <a href="{{route('admin.dashboard')}}">

            <b class="logo-abbr"><img src="{{get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('/assets/backend/images/logo.png')}}" alt=""> </b>

            <span class="logo-compact"><img src="{{asset('/')}}assets/backend/images/logo-compact.png" alt=""></span>
            <span class="brand-title">
                <h4 class="text-white fw-600 text-uppercase"> {{ get_setting('website_name') }}</h4>
{{--                <img src="{{asset('/')}}assets/backend/images/logo-text.png" alt="">--}}
            </span>
        </a>
    </div>
</div>
