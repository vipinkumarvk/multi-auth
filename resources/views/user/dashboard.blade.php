
@extends('layouts.user')

@section('title', 'Dashboard')

@section('page-heading', 'My Dashboard')

@section('content')

    <!-- Welcome Banner -->
    <div class="welcome-banner">

        <h2>Hello, {{ auth()->user()->name }}! 👋</h2>

        <p>
            Welcome to your personal workspace.
            Manage your profile and account information in one place.
        </p>

        <a href="{{ route('profile.edit') }}" class="profile-btn">
            <i class="bi bi-person-gear me-2"></i>
            Manage My Profile
        </a>

    </div>

    <!-- Information Cards -->
    <div class="row g-4">

        <div class="col-md-6 col-xl-3">
            <div class="info-card">
                <div class="card-icon bg-primary bg-opacity-10 text-primary">
                    <i class="bi bi-person"></i>
                </div>
                <h4>My Profile</h4>
                <p>Manage personal information</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="info-card">
                <div class="card-icon bg-success bg-opacity-10 text-success">
                    <i class="bi bi-check-circle"></i>
                </div>
                <h4>Active</h4>
                <p>Account status</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="info-card">
                <div class="card-icon bg-warning bg-opacity-10 text-warning">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h4>User</h4>
                <p>Account role</p>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="info-card">
                <div class="card-icon bg-info bg-opacity-10 text-info">
                    <i class="bi bi-calendar3"></i>
                </div>
                <h4>{{ auth()->user()->created_at->format('d M Y') }}</h4>
                <p>Member since</p>
            </div>
        </div>

    </div>

    <!-- Lower Sections -->
    <div class="row g-4 mt-2">

        <!-- Quick Access -->
        <div class="col-lg-7">

            <div class="section-card">

                <h5>Quick Access</h5>

                <a href="{{ route('profile.edit') }}" class="action-item">
                    <div class="action-icon">
                        <i class="bi bi-person-gear"></i>
                    </div>

                    <div>
                        <strong>Update Personal Details</strong>
                        <br>
                        <small>Keep your profile information updated</small>
                    </div>

                    <i class="bi bi-chevron-right ms-auto"></i>
                </a>

                <a href="{{ route('profile.edit') }}" class="action-item">
                    <div class="action-icon">
                        <i class="bi bi-key"></i>
                    </div>

                    <div>
                        <strong>Account Security</strong>
                        <br>
                        <small>Manage your password and security</small>
                    </div>

                    <i class="bi bi-chevron-right ms-auto"></i>
                </a>

            </div>

        </div>

        <!-- Personal Information -->
        <div class="col-lg-5">

            <div class="section-card">

                <h5>Personal Information</h5>

                <div class="detail-row">
                    <small>Full Name</small>
                    <strong>{{ auth()->user()->name }}</strong>
                </div>

                <div class="detail-row">
                    <small>Email Address</small>
                    <strong>{{ auth()->user()->email }}</strong>
                </div>

                <div class="detail-row">
                    <small>Account Type</small>
                    <strong>User</strong>
                </div>

                <div class="detail-row">
                    <small>Account Status</small>
                    <span class="status">Active</span>
                </div>

            </div>

        </div>

    </div>

@endsection
