
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiAuth | Welcome</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --navy: #172337;
            --gold: #d5ad62;
            --light: #f5f6f8;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: var(--light);
            color: var(--navy);
        }

        .navbar {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,.04);
        }

        .brand {
            font-size: 25px;
            font-weight: 800;
            color: var(--navy);
        }

        .brand span {
            color: var(--gold);
        }

        .nav-link {
            color: var(--navy);
            font-weight: 600;
        }

        .btn-gold {
            background: var(--gold);
            color: var(--navy);
            border: none;
            padding: 12px 25px;
            font-weight: 700;
            border-radius: 8px;
        }

        .btn-gold:hover {
            background: #c49a4e;
            color: white;
        }

        .hero {
            padding: 100px 0;
            background: white;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 58px);
            font-weight: 800;
            line-height: 1.2;
        }

        .hero h1 span {
            color: var(--gold);
        }

        .hero p {
            color: #697386;
            font-size: 17px;
            line-height: 1.8;
        }

        .hero-card {
            background: var(--navy);
            color: white;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(23,35,55,.15);
        }

        .hero-icon {
            font-size: 65px;
            color: var(--gold);
        }

        .features {
            padding: 85px 0;
        }

        .section-title {
            font-weight: 800;
            font-size: 36px;
        }

        .feature-card {
            background: white;
            padding: 35px 25px;
            border-radius: 15px;
            height: 100%;
            transition: .3s;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 35px rgba(0,0,0,.08);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #f9f3e8;
            color: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .cta {
            background: var(--navy);
            color: white;
            padding: 65px 20px;
            border-radius: 20px;
        }

        footer {
            background: white;
            padding: 25px 0;
            color: #777;
            margin-top: 80px;
        }

        @media(max-width: 768px) {
            .hero {
                padding: 65px 0;
            }

            .hero-card {
                margin-top: 40px;
            }
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand brand" href="/">
            Multi<span>Auth.</span>
        </a>

        <div class="ms-auto d-flex gap-2">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-gold">
                    Dashboard <i class="bi bi-arrow-right"></i>
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-dark px-4">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-gold">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <span class="badge rounded-pill mb-3 px-3 py-2"
                      style="background:#f9f3e8;color:#a47b35;">
                    SMART ACCESS MANAGEMENT
                </span>

                <h1>
                    One Platform.<br>
                    <span>Complete Control.</span>
                </h1>

                <p class="mt-4 mb-4">
                    A secure and powerful platform designed to simplify
                    user management, role-based access and dashboard
                    administration in one place.
                </p>

                @guest
                    <a href="{{ route('register') }}" class="btn btn-gold me-2">
                        Create Account <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="{{ route('login') }}" class="btn btn-outline-dark px-4">
                        Login
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-gold">
                        Go to Dashboard <i class="bi bi-arrow-right"></i>
                    </a>
                @endguest
            </div>

            <div class="col-lg-5">
                <div class="hero-card text-center">
                    <i class="bi bi-shield-lock hero-icon"></i>

                    <h3 class="mt-4 fw-bold">Secure Access</h3>

                    <p class="text-white-50 mt-3">
                        Smart authentication and controlled access
                        for every user.
                    </p>

                    <div class="row mt-4">
                        <div class="col-6">
                            <i class="bi bi-person-check fs-2"
                               style="color:var(--gold)"></i>
                            <p class="mt-2 mb-0">User Access</p>
                        </div>

                        <div class="col-6">
                            <i class="bi bi-gear fs-2"
                               style="color:var(--gold)"></i>
                            <p class="mt-2 mb-0">Admin Control</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Features -->
<section class="features" id="features">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">Everything You Need</h2>
            <p class="text-secondary mt-2">
                Simple, secure and efficient access management.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h5 class="fw-bold">Secure Authentication</h5>

                    <p class="text-secondary mb-0">
                        Secure login and registration with protected
                        authentication routes.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h5 class="fw-bold">Role-Based Access</h5>

                    <p class="text-secondary mb-0">
                        Separate access permissions for administrators
                        and regular users.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-speedometer2"></i>
                    </div>

                    <h5 class="fw-bold">Smart Dashboard</h5>

                    <p class="text-secondary mb-0">
                        Dedicated dashboards with relevant information
                        and management features.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="container">
    <div class="cta text-center">
        <h2 class="fw-bold">Ready to Get Started?</h2>

        <p class="text-white-50 mt-3">
            Experience a simple and secure user management platform.
        </p>

        @guest
            <a href="{{ route('register') }}" class="btn btn-gold mt-3">
                Create Your Account
            </a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-gold mt-3">
                Visit Dashboard
            </a>
        @endguest
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p class="mb-0">
            © {{ date('Y') }} MultiAuth. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>
