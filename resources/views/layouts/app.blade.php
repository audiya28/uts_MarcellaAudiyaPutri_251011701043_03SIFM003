
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'BLACKPINK Digital Art Gallery')</title>

    <link rel="stylesheet"
          href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        :root {
            --bg: #0b0b0b;
            --surface: #171717;
            --pink: #ff69b4;
            --muted: #c5c5c5;
            --border: #333333;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            background: var(--bg);
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            background: #111111;
            border-bottom: 1px solid var(--border);
        }

        .navbar-brand {
            color: var(--pink) !important;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            padding: 10px 14px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--pink) !important;
        }

        .navbar-toggler {
            border-color: var(--pink);
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        .hero {
            background: linear-gradient(135deg, #111111, #351426);
            border: 1px solid #602345;
            border-radius: 24px;
            padding: 45px;
        }

        .eyebrow,
        .price {
            color: var(--pink);
        }

        .eyebrow {
            font-size: .85rem;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero h1 {
            font-size: clamp(2.2rem, 5vw, 4rem);
            font-weight: 900;
        }

        .hero-image {
            width: 100%;
            height: 290px;
            object-fit: cover;
            border-radius: 18px;
        }

        .muted-text,
        .art-card .text-secondary {
            color: var(--muted) !important;
        }

        .section-title {
            font-weight: 800;
        }

        .art-card,
        .info-card {
            background: var(--surface);
            color: #ffffff;
            border: 1px solid var(--border);
            border-radius: 16px;
        }

        .art-card {
            height: 100%;
            overflow: hidden;
            transition: transform .2s ease, border-color .2s ease;
        }

        .art-card:hover {
            transform: translateY(-5px);
            border-color: var(--pink);
        }

        .art-image {
            width: 100%;
            height: 245px;
            object-fit: cover;
        }

        .art-card .badge {
            background: #382331;
            color: #ffb5d8;
            border: 1px solid #594052;
        }

        .price {
            font-weight: 800;
            font-size: 1.15rem;
        }

        .info-card {
            height: 100%;
            padding: 25px;
        }

        .info-card h3,
        .detail-label {
            color: var(--pink);
            font-weight: 700;
        }

        .detail-image {
            width: 100%;
            max-height: 580px;
            object-fit: cover;
            border-radius: 18px;
        }

        .btn-pink {
            background: var(--pink);
            color: #111111;
            border: 1px solid var(--pink);
            font-weight: 700;
        }

        .btn-pink:hover {
            background: #ff8fc7;
            color: #111111;
        }

        .btn-outline-pink {
            background: transparent;
            color: var(--pink);
            border: 1px solid var(--pink);
        }

        .btn-outline-pink:hover {
            background: var(--pink);
            color: #111111;
        }

       
        .site-footer {
        background-color: #111111;
        color: #ffffff;
        text-align: center;
        padding: 12px 10px;
        font-size: 12px;
        font-weight: 500;
        border-top: 1px solid #ff69b4;
        }


        @media (max-width: 767px) {
            .hero {
                padding: 28px 22px;
            }

            .hero-image {
                height: 230px;
            }

            .art-image {
                height: 230px;
            }
        }
    </style>
</head>

<body>

    @include('partials.header')

    <main class="container py-4 py-lg-5">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
