<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: 'Playfair Display', serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        /* Header & Navigation Styles - Poppins */
        .navbar, .footer {
            font-family: 'Poppins', sans-serif;
        }
        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: #333;
            text-decoration: none;
            letter-spacing: 1px;
            position: relative;
            padding: 5px 0;
        }
        .logo-text span {
            color: #ff6b6b;
        }
        .logo-text:hover {
            color: #333;
        }
        .nav-link {
            font-family: 'Poppins', sans-serif;
            color: #333 !important;
            font-weight: 500;
            padding: 8px 15px !important;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ff6b6b !important;
        }
        .nav-link.active {
            color: #ff6b6b !important;
        }
        .navbar-toggler {
            border: none;
            padding: 0;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        .navbar-toggler-icon {
            width: 24px;
            height: 24px;
        }
        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                padding: 15px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                margin-top: 10px;
            }
            .nav-link {
                padding: 10px 15px !important;
            }
            .logo-text {
                font-size: 24px;
            }
        }
        .contact-link {
            background: #ff6b6b;
            color: white !important;
            border-radius: 25px;
            padding: 8px 20px !important;
        }
        .contact-link:hover {
            background: #ff5252;
            color: white !important;
        }
        .wrapper {
            flex: 1 0 auto;
            padding: 20px 0;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            line-height: 1.3;
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        .hero-section p {
            font-size: 1.2rem;
            line-height: 1.6;
            font-weight: 400;
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            .hero-section p {
                font-size: 1.1rem;
            }
        }
        /* Main Content Styles - Playfair Display */
        .main-content h1, .main-content h2, .main-content h3,
        .main-content h4, .main-content h5, .main-content h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
        .main-content p {
            font-family: 'Playfair Display', serif;
            font-weight: 400;
        }
        /* Special Pages - Poppins */
        .terms-page, .privacy-page, .thank-you-page {
            font-family: 'Poppins', sans-serif;
        }
        .terms-page h1, .terms-page h2,
        .privacy-page h1, .privacy-page h2,
        .thank-you-page h1, .thank-you-page h2 {
            font-family: 'Poppins', sans-serif;
        }
        main {
            flex: 1 0 auto;
        }
        footer {
            flex-shrink: 0;
        }
    </style>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myCollapse = document.getElementById('navbarNav');
            var bsCollapse = new bootstrap.Collapse(myCollapse, {
                toggle: false
            });

            document.querySelector('.navbar-toggler').addEventListener('click', function() {
                bsCollapse.toggle();
            });

            document.querySelectorAll('.nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) { // Only on mobile
                        bsCollapse.hide();
                    }
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="logo-text" href="<?php echo BASE_URL; ?>/">
                    BRAND<span>NAME</span>
                </a>
                <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/artworks">Premium Handmade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/new-arrivals">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/bestsellers">Best Sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/about">About Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="<?php echo BASE_URL; ?>/contact" class="nav-link contact-link">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrapper">
        <main class="container-fluid">
