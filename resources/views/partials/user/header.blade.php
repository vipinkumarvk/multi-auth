
<header class="topbar">

    <div>
        <h5>@yield('page-heading', 'My Dashboard')</h5>
        <small class="text-muted">Welcome to your workspace</small>
    </div>

    <div class="profile-mini">

        <div class="text-end d-none d-sm-block">
            <div class="fw-semibold">
                {{ auth()->user()->name }}
            </div>
            <small class="text-muted">Personal Account</small>
        </div>

        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

    </div>

</header>
