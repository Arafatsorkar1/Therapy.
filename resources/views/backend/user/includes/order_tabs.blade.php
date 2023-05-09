<ul class="nav nav-pills mb-3">
    <li class="nav-item">
        <a href="{{ route('user.all-orders') }}"
           class="nav-link {{ Route::is('user.all-orders') ? 'active' : '' }}" >Assessment Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('user.all-orders.traning') }}"
           class="nav-link {{ Route::is('user.all-orders.traning') ? 'active' : '' }}" >Traning Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('user.all-orders.therapy') }}"
           class="nav-link {{ Route::is('user.all-orders.therapy') ? 'active' : '' }}" >Therapy Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('user.all-orders.test') }}"
           class="nav-link {{ Route::is('user.all-orders.test') ? 'active' : '' }}" >Audiological Test Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('user.all-orders.service') }}"
           class="nav-link {{ Route::is('user.all-orders.service') ? 'active' : '' }}" >Service Orders</a>
    </li>
</ul>
