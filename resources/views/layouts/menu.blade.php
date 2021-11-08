<li class="nav-item">
    <a href="{{ route('petShops.index') }}"
       class="nav-link {{ Request::is('petShops*') ? 'active' : '' }}">
        <p>Pet Shops</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


