
<div class="container-fluid bg-white position-relative">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand text-secondary">
            <div class="logo"> <a href="{{ route('home') }}">
                    <img src=" {{ get_setting('website_logo') ? asset(get_setting('website_logo')) : asset('assets/frontend/img/logo.png')}}" alt="{{ get_setting('website_name') }}">
                </a>
            </div>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0 pr-3 border-right">

                <div class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">হোম</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('about-us')}}" class="dropdown-item">আমাদের সম্পর্কে</a>
                        <a href="{{route('donner')}}" class="dropdown-item">ডোনার</a>
                        <a href="{{route('donner-list')}}" class="dropdown-item">ডোনার তালিকা</a>
                        @auth
                            <a href="{{ route('free-service') }}" class="dropdown-item">ফ্রি সেবার জন্য সদস্য</a>
                        @else
                            <a href="{{ route('login') }}" class="dropdown-item">ফ্রি সেবার জন্য সদস্য</a>
                        @endauth
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">প্রশিক্ষণ</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach(\App\Models\TraningCategory::where('status',1)->latest()->get() as $category)
                            <a href="{{ route('category-traning',optional($category)->slug) }}" class="dropdown-item">{{ optional($category)->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">এসেসমেন্ট/টেষ্ট </a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach(\App\Models\Category::where('status',1)->latest()->get() as $category)
                            <a href="{{ route('assessment-category',optional($category)->slug) }}" class="dropdown-item">{{ optional($category)->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{ route('audiological-test') }}" class="nav-link">অডিওলজিক্যাল পরীক্ষা</a>
                </div>
                <a href="" class="nav-item nav-link"></a>
                <div class="nav-item dropdown">
                    <a href="{{ route('all-language-therapy') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">স্পিচ এন্ড ল্যাগুয়েজ  থেরাপি</a>
                    @php
                        $therapy_category = \App\Models\LanguageCategory::where('status',1)->orderBy('serial','DESC')->get();
                    @endphp
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach($therapy_category as $category)
                            <a href="{{ route('therapy',$category->slug)}}" class="dropdown-item">{{ $category->name ?? '' }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">সার্ভিস</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach(\App\Models\Service::where('status',1)->latest()->get() as $service)
                            <a href="{{route('single-service',$service->slug ??'')}}" class="dropdown-item">{{ $service->title }}</a>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('contract') }}" class="nav-item nav-link">যোগাযোগ</a>
                @auth
                    <a href="{{ route('user.dashboard') }}" class="nav-item nav-link">অ্যাকাউন্ট</a>
                @else
                    <a href="{{ route('login') }}" class="nav-item nav-link">লগইন</a>
                    <a href="{{ route('register') }}" class="nav-item nav-link">রেজিস্টার</a>
                @endauth

            </div>
            <div class="d-none d-lg-flex align-items-center pl-4">
                <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                <div>
                    <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                    <h6 class="m-0"><a href="tel:{{ get_setting('contact_number') }}">{{ get_setting('contact_number') }}</a></h6>
                </div>
            </div>
        </div>
    </nav>
</div>
