<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShreeRaksha - Healthcare Access for All</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="particles-background"></div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="ShreeRaksha Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="benefits.php">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hospitals.php">Hospitals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="apply.php">Apply Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3">Healthcare Access for All</h1>
                    <p class="lead mb-4">Free medical transport & 30% discount on hospital bills</p>
                    <a href="apply.php" class="btn btn-light btn-lg px-4">Get Your Card Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Overview -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Your ShreeRaksha Benefits</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box bg-light-primary text-primary mb-3 mx-auto">
                                <i class="fas fa-ambulance fa-2x"></i>
                            </div>
                            <h3 class="h5">Free Transport</h3>
                            <p class="mb-0">Emergency ambulance services at no cost</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box bg-light-primary text-primary mb-3 mx-auto">
                                <i class="fas fa-percentage fa-2x"></i>
                            </div>
                            <h3 class="h5">30% Discount</h3>
                            <p class="mb-0">On all hospitalization bills</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box bg-light-primary text-primary mb-3 mx-auto">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h3 class="h5">No Age Limit</h3>
                            <p class="mb-0">Available for everyone 0-99+ years</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box bg-light-primary text-primary mb-3 mx-auto">
                                <i class="fas fa-hospital fa-2x"></i>
                            </div>
                            <h3 class="h5">Nationwide</h3>
                            <p class="mb-0">Accepted at partner hospitals across India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How It Works</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3">1</div>
                        <h3 class="h4">Apply Online</h3>
                        <p>Simple 2-minute application</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3">2</div>
                        <h3 class="h4">Get Digital Card</h3>
                        <p>Immediate access after registration</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3">3</div>
                        <h3 class="h4">Show & Save</h3>
                        <p>Present at partner hospitals</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Members Say</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-quote-left text-muted"></i>
                            </div>
                            <p class="mb-4">"ShreeRaksha saved us ₹15,000 on my father's hospitalization. The ambulance service was a lifesaver!"</p>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <h5 class="mb-0">Rajesh K.</h5>
                                    <small class="text-muted">Mumbai</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-quote-left text-muted"></i>
                            </div>
                            <p class="mb-4">"As a senior citizen, this card has been a blessing. No more worrying about medical expenses."</p>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <h5 class="mb-0">Shanti M.</h5>
                                    <small class="text-muted">Delhi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Get Started?</h2>
            <p class="lead mb-4">Join thousands of Indians who are already benefiting from ShreeRaksha</p>
            <a href="apply.php" class="btn btn-light btn-lg px-4">Apply Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>ShreeRaksha</h5>
                    <p>Making healthcare accessible and affordable for all Indians.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="benefits.php" class="text-white text-decoration-none">Benefits</a></li>
                        <li class="mb-2"><a href="hospitals.php" class="text-white text-decoration-none">Hospitals</a></li>
                        <li class="mb-2"><a href="apply.php" class="text-white text-decoration-none">Apply</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> help@shreeraksha.org</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> 1800-123-4567</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 ShreeRaksha. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="list-inline-item"><span class="mx-2">•</span></li>
                        <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Particles JS -->
    <script src="scripts/particles.js"></script>
</body>
</html>