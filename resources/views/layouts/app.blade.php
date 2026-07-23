<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portal Berita Modern') | DetikNews Clone</title>
    
    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-font: 'Inter', sans-serif;
            --title-font: 'Outfit', sans-serif;
            --bg-color: #f8f9fa;
            --card-bg: #ffffff;
            --text-color: #212529;
            --muted-text: #6c757d;
            --border-color: #e9ecef;
        }

        body {
            font-family: var(--primary-font);
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6, .display-font {
            font-family: var(--title-font);
            font-weight: 700;
        }

        /* Modern Card Styling */
        .news-card {
            background: var(--card-bg);
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .news-card .card-img-wrapper {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            background-color: #eaeaea;
        }

        .news-card .card-img-top {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .news-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .news-card .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .news-title {
            font-size: 1.15rem;
            line-height: 1.4;
            margin-bottom: 0.75rem;
            color: var(--text-color);
            text-decoration: none;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.2s ease;
        }

        .news-title:hover {
            color: #0d6efd;
        }

        .news-excerpt {
            font-size: 0.9rem;
            color: var(--muted-text);
            margin-bottom: 1.25rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-meta {
            font-size: 0.8rem;
            color: var(--muted-text);
            margin-top: auto;
            border-top: 1px solid var(--border-color);
            padding-top: 1rem;
        }

        /* Detail News View Styling */
        .news-detail-container {
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            border: 1px solid var(--border-color);
        }

        @media (max-width: 768px) {
            .news-detail-container {
                padding: 1.5rem;
            }
        }

        .news-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333333;
        }

        .news-content p {
            margin-bottom: 1.5rem;
        }

        /* Render HTML formatting correctly from rich-editor */
        .news-content blockquote {
            border-left: 5px solid #0d6efd;
            padding: 0.75rem 1.5rem;
            background-color: #f8f9fa;
            font-style: italic;
            margin: 1.5rem 0;
            border-radius: 0 8px 8px 0;
        }

        .news-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .news-content table th, .news-content table td {
            border: 1px solid var(--border-color);
            padding: 0.75rem;
        }

        .news-content table th {
            background-color: #f1f3f5;
        }

        .news-content img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 1.5rem 0;
        }

        /* Footer */
        footer {
            margin-top: auto;
            background-color: #111111;
            color: #888888;
            font-size: 0.9rem;
            padding: 2rem 0;
            border-top: 1px solid #222222;
        }
    </style>
</head>
<body>

    <!-- Include Navbar partial -->
    @include('partials.navbar')

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} Portal Berita Modern. Hak Cipta Dilindungi.</p>
            <p class="mb-0 text-muted small">Inspirasi Detik.com, Kompas.com, CNN Indonesia</p>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
