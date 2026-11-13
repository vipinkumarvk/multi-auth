
<aside class="sidebar">

    <div class="brand">
        MULTI<span>AUTH</span>
    </div>

    <div class="menu-title">MY WORKSPACE</div>

    <a href="{{ route('user.dashboard') }}"
       class="{{ request()->routeIs('user.dashboard') ? 'active' : '' }}">
        <i class="bi bi-house-door"></i>
        Dashboard
    </a>

    <div class="menu-title">ACCOUNT</div>

    <a href="{{ route('profile.edit') }}"
       class="{{ request()->routeIs('profile.edit') ? 'active' : '' }}">
        <i class="bi bi-person-circle"></i>
        My Profile
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="logout-btn">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </button>
    </form>

</aside>
