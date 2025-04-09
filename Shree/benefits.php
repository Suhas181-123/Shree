<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benefits - Shreerakshe Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-purple: #6a0dad;
            --dark-purple: #4b0082;
            --light-purple: #9b59b6;
            --black: #121212;
            --dark-gray: #222222;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        
        /* Responsive font sizes */
        h1 {
            font-size: calc(1.5rem + 1.5vw);
        }
        
        h2 {
            font-size: calc(1.3rem + 0.6vw);
        }
        
        h3 {
            font-size: calc(1.1rem + 0.3vw);
        }
        
        .lead {
            font-size: calc(1rem + 0.3vw);
        }
        
        p, li {
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            .btn-lg {
                font-size: 1rem;
                padding: 0.5rem 1rem;
            }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-purple) 0%, var(--black) 100%);
        }
        
        .light-gradient-bg {
            background: linear-gradient(135deg, rgba(106, 13, 173, 0.1) 0%, rgba(18, 18, 18, 0.1) 100%);
        }
        
        .btn-purple {
            background-color: var(--primary-purple);
            border-color: var(--primary-purple);
            color: white;
        }
        
        .btn-purple:hover {
            background-color: var(--dark-purple);
            border-color: var(--dark-purple);
            color: white;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            /* Animation Properties */
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            margin-bottom: 1.5rem;
        }
        
        .card.slide-left {
            transform: translateX(-50px);
        }
        
        .card.slide-right {
            transform: translateX(50px);
        }
        
        .card.animate {
            opacity: 1;
            transform: translateX(0) translateY(0);
        }
        
        .card:hover {
            transform: translateY(-5px) scale(1.02);
        }
        
        .card-header {
            background-color: var(--primary-purple);
            color: white;
            border-radius: 10px 10px 0 0 !important;
            padding: 1rem;
        }
        
        .nav-pills .nav-link.active {
            background-color: var(--primary-purple);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(106, 13, 173, 0.1);
            color: var(--primary-purple);
        }
        
        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(106, 13, 173, 0.25);
        }
        
        .border-purple {
            border-left: 4px solid var(--primary-purple);
        }
        
        .text-purple {
            color: var(--primary-purple);
        }
        
        /* Responsive image */
        .img-fluid-half {
            max-width: 50%;
            height: auto;
        }
        
        @media (max-width: 768px) {
            .img-fluid-half {
                max-width: 70%;
                display: block;
                margin: 0 auto;
            }
            
            .hero-buttons .btn {
                display: block;
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .hero-buttons .btn + .btn {
                margin-left: 0;
            }
        }
        
        /* Navigation underline animation */
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark gradient-bg sticky-top">
        <div class="container">
            <!-- Brand Logo with Image and Text -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
                <img src="images/logo5.png" alt="Shreerakshe Logo" class="me-2" style="height: 30px;">
                Shreerakshe
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2" href="index.php">Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2 active" href="benefits.php">Benefits</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2" href="hospitals.php">Hospitals</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2" href="apply.php">Apply Now</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-3 py-2" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg text-white py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <h1 class="fw-bold mb-3">Shreerakshe Card Benefits</h1>
                    <p class="lead mb-4">Get 30% discount on hospital bills and free emergency transport with your healthcare card</p>
                    <div class="hero-buttons">
                        <a href="apply.php" class="btn btn-light btn-lg px-4 me-2">Apply Now</a>
                        <a href="#features" class="btn btn-outline-light btn-lg px-4">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 mb-4 mb-lg-0 text-center">
                    <img src="images/health.jpg" alt="Healthcare Card" class="img-fluid-half">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Overview -->
    <section class="py-5" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Your Healthcare Benefits</h2>
                <p class="lead text-muted">Comprehensive coverage designed for all Indians</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 slide-left">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-ambulance fa-3x mb-3"></i>
                            <h3 class="h5 mb-0">Emergency Transport</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> Free ambulance service</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> 24/7 availability</li>
                                <li><i class="fas fa-check-circle text-purple me-2"></i> Nationwide coverage</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 slide-right">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-rupee-sign fa-3x mb-3"></i>
                            <h3 class="h5 mb-0">Bill Discounts</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> 30% off hospitalization</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> 15% off outpatient</li>
                                <li><i class="fas fa-check-circle text-purple me-2"></i> 10% off medicines</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 slide-left">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-procedures fa-3x mb-3"></i>
                            <h3 class="h5 mb-0">Full Coverage</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> All ages covered</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> Pre-existing conditions</li>
                                <li><i class="fas fa-check-circle text-purple me-2"></i> No waiting period</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 slide-right">
                        <div class="card-header text-center py-3">
                            <i class="fas fa-heartbeat fa-3x mb-3"></i>
                            <h3 class="h5 mb-0">Extra Benefits</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> Free health check-up</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> Telemedicine</li>
                                <li><i class="fas fa-check-circle text-purple me-2"></i> Health resources</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Benefits -->
    <section class="py-5 light-gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 slide-left">
                        <div class="card-body p-4">
                            <h2 class="h4 fw-bold mb-4 border-purple ps-3">Key Features</h2>
                            <div class="d-flex mb-3">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-percentage fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">30% Discount on Hospital Bills</h3>
                                    <p class="mb-0">The Shreerakshe Card offers an incredible 30% discount on all medical expenses at partner hospitals.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-hospital fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">Nationwide Network</h3>
                                    <p class="mb-0">Accepted at private and public hospitals across India, ensuring you have access wherever you are.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-bolt fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">Instant Activation</h3>
                                    <p class="mb-0">Your digital card is available immediately after registration with no waiting period.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 slide-right">
                        <div class="card-body p-4">
                            <h2 class="h4 fw-bold mb-4 border-purple ps-3">Why Choose Shreerakshe?</h2>
                            <div class="d-flex mb-3">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-wallet fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">Financial Relief</h3>
                                    <p class="mb-0">Reduce your medical expenses significantly with our guaranteed discounts.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">No Hidden Costs</h3>
                                    <p class="mb-0">One-time payment with no premium payments or annual fees.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-4 text-purple">
                                    <i class="fas fa-stethoscope fa-2x"></i>
                                </div>
                                <div>
                                    <h3 class="h5">Preventive Healthcare</h3>
                                    <p class="mb-0">Encourages regular check-ups and early detection of health issues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
                <p class="lead text-muted">Find answers to common questions about the Shreerakshe Card</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Is there any age restriction for this card?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, the Shreerakshe card is available to people of all ages from newborns to senior citizens. There is absolutely no age restriction or limitation.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    How quickly can I use the benefits after applying?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Your benefits are activated immediately upon approval. You'll receive a digital card instantly after application that you can start using right away.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Are pre-existing conditions covered?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all pre-existing medical conditions are covered from day one with no waiting period or additional charges.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    How do I avail the ambulance service?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Simply call our 24/7 emergency helpline at 1800-123-HELP (4357) and provide your Shreerakshe card number. An ambulance will be dispatched to your location immediately.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 gradient-bg text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Get Your Shreerakshe Card?</h2>
            <p class="lead mb-4">Join thousands of families who are already benefiting from affordable healthcare</p>
            <div class="d-flex flex-column flex-md-row justify-content-center">
                <a href="apply.php" class="btn btn-light btn-lg px-4 me-md-2 mb-2 mb-md-0">Apply Now - It's Free</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg px-4">Contact Support</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3"><i class="fas fa-heartbeat me-2"></i>Shreerakshe</h5>
                    <p>Making healthcare accessible and affordable for all Indians through innovative solutions.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="benefits.php" class="text-white text-decoration-none">Benefits</a></li>
                        <li class="mb-2"><a href="hospitals.php" class="text-white text-decoration-none">Hospitals</a></li>
                        <li><a href="apply.php" class="text-white text-decoration-none">Apply Now</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> help@shreerakshe.org</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> 1800-123-HELP</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Mumbai, India</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Newsletter</h5>
                    <p>Subscribe to get updates on healthcare initiatives</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-purple" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 small">&copy; 2023 Shreerakshe. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none small">Privacy Policy</a></li>
                        <li class="list-inline-item"><span class="mx-2">•</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none small">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scroll Animation JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        cards.forEach(card => observer.observe(card));
    });
    </script>
</body>
</html>