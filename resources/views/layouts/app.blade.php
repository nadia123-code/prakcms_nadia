<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Klinik</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #a8d0e6;
        }
        .navbar-brand, .nav-link {
            color: #333 !important;
            font-weight: 500;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #1a1a1a !important;
        }
        .card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 1rem;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .display-5 {
            color: #4a90e2;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main class="container py-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
