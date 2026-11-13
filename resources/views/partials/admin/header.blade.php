<header class="topbar">

    <div>
        <h5>@yield('page-heading', 'Admin Dashboard')</h5>
        <small>Manage and monitor your application</small>
    </div>

    <div class="profile-mini">

        <div class="text-end d-none d-sm-block">
            <div class="fw-semibold">
                {{ auth()->user()->name }}
            </div>
            <small>Administrator</small>
        </div>

        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

    </div>

</header>