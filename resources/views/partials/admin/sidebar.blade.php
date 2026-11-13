<aside class="sidebar">

    <div class="brand">
        MULTI<span>AUTH</span>
        <small>ADMIN PANEL</small>
    </div>

    <div class="menu-title">MAIN MENU</div>

    <a href="{{ route('admin.dashboard') }}"
       class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="bi bi-grid"></i>
        Dashboard
    </a>

    <div class="menu-title">MANAGEMENT</div>

    <a href="#">
        <i class="bi bi-people"></i>
        Manage Users
    </a>

    <a href="#">
        <i class="bi bi-shield-lock"></i>
        Roles & Permissions
    </a>

    <a href="#">
        <i class="bi bi-gear"></i>
        Settings
    </a>

    <div class="menu-title">ACCOUNT</div>

    <a href="{{ route('profile.edit') }}">
        <i class="bi bi-person-circle"></i>
        My Profile
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </button>
    </form>

</aside>