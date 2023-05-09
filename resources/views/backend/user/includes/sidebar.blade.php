<div class="col-md-3">
    <div class="card rounded-0 border shadow">
        <div class="card-body">
            <h5 class="text-uppercase">{{ auth()->user()->name }}</h5>
        </div>
    </div>
    <ul class="list-group rounded-0">
        <a href="{{ route('user.dashboard') }}">
            <li class="list-group-item{{ Route::is('user.dashboard') ? ' active' : '' }}">Dashboard</li>
        </a>
        <a href="{{ route('user.all-orders') }}">
            <li class="list-group-item{{ Route::is('user.all-orders') ? ' active' : '' }}">All Orders</li>
        </a>
        <a href="{{ route('user.profile') }}">
            <li class="list-group-item{{ Route::is('user.profile') ? ' active' : '' }}">Profile</li>
        </a>
        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logoutForm').submit()">
            <li class="list-group-item{{ Route::is('logout') ? ' active' : '' }}">Logout</li>
        </a>
        <form action="{{ route('logout') }}" id="logoutForm" method="post" class="d-none">
            @csrf
        </form>
    </ul>
</div>
