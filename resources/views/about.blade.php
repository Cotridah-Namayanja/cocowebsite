<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('nav')
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Simple header</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>
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

            <hr>

            <h3>Our Team</h3>
            <div class="team-grid">
                <div class="team-member">
                    <h4>Cotridah</h4>
                    <!-- <img src="https://www.ajjitechsystems.net/Nova/assets/img/why-us-bg.jpg"> -->
                     <img class="b rounded w-50 " src="{{asset('photos/cots.jpeg')}}">
                    <a href="{{ route('about.person', ['person_name' => 'cotridah']) }}">Read More</a>
                </div>
                <div class="team-member">
                    <h4>Joan</h4>
                </div>
                <div class="team-member">
                    <h4>Jordan</h4>
                    <img src="{{ asset('photos/pterson.jpg')}}">
                </div>
                <div class="team-member">
                    <h4>Lynn</h4>
                    <img src="{{asset('photos/lynn.jpeg')}}">
                </div>
                <div class="team-member">
                    <h4>Grace</h4>
                </div>
            </div>
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
