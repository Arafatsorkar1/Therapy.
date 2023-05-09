<ul class="nav nav-pills mb-3">
    <li class="nav-item">
        <a href="{{ route('admin.all-order.index') }}"
           class="nav-link {{ Route::is('admin.all-order.index') ? 'active' : '' }}" >Assessment Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.all-traning-order.index') }}"
           class="nav-link {{ Route::is('admin.all-traning-order.index') ? 'active' : '' }}" >Traning Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.all-therapy-order.index') }}"
           class="nav-link {{ Route::is('admin.all-therapy-order.index') ? 'active' : '' }}" >Therapy Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.all-test-order.index') }}"
           class="nav-link {{ Route::is('admin.all-test-order.index') ? 'active' : '' }}" >Audiological Test Orders</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.all-service-order.index') }}"
           class="nav-link {{ Route::is('admin.all-service-order.index') ? 'active' : '' }}" >Service Orders</a>
    </li>
</ul>
