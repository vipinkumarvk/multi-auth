@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page-heading', 'Dashboard')

@section('content')

    {{-- Welcome Banner --}}
    <div class="welcome-banner">

        <div>
            <span class="welcome-label">ADMINISTRATOR</span>

            <h2>Welcome back, {{ auth()->user()->name }}!</h2>

            <p>
                Here's what's happening with your application today.
                Manage your users and monitor your platform.
            </p>
        </div>

        <div class="welcome-icon">
            <i class="bi bi-shield-check"></i>
        </div>

    </div>


    {{-- Statistics Cards --}}
    <div class="row g-4">

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon users-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <span class="stat-label">TOTAL USERS</span>
                </div>

                <h3>{{ \App\Models\User::count() }}</h3>
                <p>Registered accounts</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon admin-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <span class="stat-label">ADMINISTRATORS</span>
                </div>

                <h3>{{ \App\Models\User::where('role', 'admin')->count() }}</h3>
                <p>Admin accounts</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon active-icon">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <span class="stat-label">ACTIVE USERS</span>
                </div>

                <h3>{{ \App\Models\User::where('status', 1)->count() }}</h3>
                <p>Active accounts</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="stat-card">
                <div class="stat-top">
                    <div class="stat-icon today-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <span class="stat-label">NEW TODAY</span>
                </div>

                <h3>{{ \App\Models\User::whereDate('created_at', today())->count() }}</h3>
                <p>Today's registrations</p>
            </div>
        </div>

    </div>


    {{-- Lower Sections --}}
    <div class="row g-4 mt-2">

        <div class="col-lg-7">

            <div class="section-card">

                <div class="section-heading">
                    <h5>Recent Users</h5>
                    <span>Latest registrations</span>
                </div>

                <div class="table-responsive">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Joined</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse(\App\Models\User::latest()->take(5)->get() as $user)

                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>

                                            <div>
                                                <strong>{{ $user->name }}</strong>
                                                <small>{{ $user->email }}</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <span class="role-badge">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $user->created_at->format('d M Y') }}
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="3" class="text-center">
                                        No users found.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <div class="col-lg-5">

            <div class="section-card">

                <div class="section-heading">
                    <h5>Quick Actions</h5>
                    <span>Manage your platform</span>
                </div>

                <a href="{{ route('profile.edit') }}" class="action-item">
                    <div class="action-icon">
                        <i class="bi bi-person-gear"></i>
                    </div>

                    <div>
                        <strong>My Profile</strong>
                        <small>Update administrator details</small>
                    </div>

                    <i class="bi bi-chevron-right ms-auto"></i>
                </a>

                <a href="#" class="action-item">
                    <div class="action-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <div>
                        <strong>Manage Users</strong>
                        <small>View and manage registered users</small>
                    </div>

                    <i class="bi bi-chevron-right ms-auto"></i>
                </a>

                <a href="#" class="action-item">
                    <div class="action-icon">
                        <i class="bi bi-gear"></i>
                    </div>

                    <div>
                        <strong>System Settings</strong>
                        <small>Configure application settings</small>
                    </div>

                    <i class="bi bi-chevron-right ms-auto"></i>
                </a>

            </div>

        </div>

    </div>

@endsection