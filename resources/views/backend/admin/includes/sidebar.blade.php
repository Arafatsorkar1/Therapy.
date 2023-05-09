<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.user.index') }}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Users</span>
                </a>
            </li>
{{--            <li>--}}
{{--                <a class="has-arrow" href="javascript:void()" aria-expanded="false">--}}
{{--                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Categories</span>--}}
{{--                </a>--}}
{{--                <ul aria-expanded="false">--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('admin.category-type.index') }}">Category Types</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('admin.category.create') }}">Add Category</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('admin.category.index') }}">All Category</a>--}}
{{--                    </li>--}}
{{--                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Traning</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.traning-category.index') }}">Category</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.traning.index') }}">Tranings</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.traning-order.index') }}">Traning Order</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Assessment</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.category.index') }}">Category</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sub-category.index') }}">Sub Category</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.answer.index') }}">Answer</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.question.index') }}">Questions</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.assessment-order.index') }}">Assessment Orders</a>
                    </li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>

            <li>
                <a class="" href="{{ route('admin.test.index') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Audiological Test</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Language Therapy</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.language-therapy-category.index') }}">Category</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.language-therapy.index') }}">Therapy</a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="" href="{{ route('admin.service.index') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Services</span>
                </a>
            </li>

            <li>
                <a class="" href="{{ route('admin.all-order.index') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">All Orders</span>
                </a>
            </li>

            <li>
                <a class="" href="{{ route('admin.donner.index') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Donner</span>
                </a>
            </li>
            <li>
                <a class="" href="{{ route('admin.subscriber.index') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Subscribers</span>
                </a>
            </li>

            <li class="nav-label">Settings</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('admin.homepage.setting') }}">Home page</a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Others</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.setting.website') }}">Website</a></li>
                            <li><a href="{{ route('admin.setting.institute') }}">Institute</a></li>
                            <li><a href="{{ route('admin.setting.all-others') }}">Others</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.footer.setting') }}">Footer</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
