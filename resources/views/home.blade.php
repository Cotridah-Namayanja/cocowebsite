

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('nav')

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Welcome to Our Website</h1>
            <p>Your one-stop solution for all your needs.</p>
            <a href="#features" class="btn">Explore More</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2>Our Features</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <h3>Quality Services</h3>
                    <p>We provide top-notch services tailored to your needs.</p>
                </div>
                <div class="feature-item">
                    <h3>Expert Team</h3>
                    <p>Our team consists of experienced professionals ready to assist you.</p>
                </div>
                <div class="feature-item">
                    <h3>Customer Support</h3>
                    <p>24/7 customer support to address your queries and concerns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are committed to delivering exceptional services with a focus on quality, innovation, and customer satisfaction. Join us on our journey to make a difference.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
