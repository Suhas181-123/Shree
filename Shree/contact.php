<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Shreerakshe</title>
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
            background-color: #f8f9fa;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-purple) 0%, var(--black) 100%);
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-purple) 0%, var(--black) 100%);
        }
        
        .contact-hero {
            background: linear-gradient(rgba(106, 13, 173, 0.8), rgba(74, 0, 130, 0.9)), 
                        url('images/contact-bg.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
        }
        
        .contact-info .info-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 25px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        
        .contact-info .info-card:hover {
            transform: translateY(-5px);
        }
        
        .info-card i {
            color: var(--primary-purple);
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .btn-purple {
            background-color: var(--primary-purple);
            color: white;
            border: none;
            padding: 10px 25px;
        }
        
        .btn-purple:hover {
            background-color: var(--dark-purple);
            color: white;
        }
        
        .form-control:focus {
            border-color: var(--light-purple);
            box-shadow: 0 0 0 0.25rem rgba(106, 13, 173, 0.25);
        }
        
        .active {
            font-weight: bold;
            color: var(--primary-purple) !important;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark gradient-bg sticky-top">
    <div class="container">
        <!-- Brand Logo with Image and Text -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
            <img src="images/logo4.png" alt="Shreerakshe Logo" class="me-2" style="height: 30px;">
            
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
                    <a class="nav-link px-3 py-2 position-relative" href="index.php">
                        Home
                        <span class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded" 
                              style="height: 2px; width: 0; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 active position-relative" href="benefits.php">
                        Benefits
                        <span class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded" 
                              style="height: 2px; width: 80%;"></span>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 position-relative" href="hospitals.php">
                        Hospitals
                        <span class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded" 
                              style="height: 2px; width: 0; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 position-relative" href="apply.php">
                        Apply Now
                        <span class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded" 
                              style="height: 2px; width: 0; transition: width 0.3s ease;"></span>
                    </a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 py-2 position-relative" href="contact.php">
                        Contact
                        <span class="position-absolute bottom-0 start-50 translate-middle-x bg-white rounded" 
                              style="height: 2px; width: 0; transition: width 0.3s ease;"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-3">We're Here to Help</h1>
            <p class="lead">Have questions about your Shreerakshe card or need assistance? Contact our support team.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="form-container">
                        <h2 class="mb-4 fw-bold">Send Us a Message</h2>
                        <form action="https://formspree.io/f/YOUR_FORMSPREE_ID" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject*</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Select...</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Card Issue">Card Issue</option>
                                    <option value="Hospital Partnership">Hospital Partnership</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label for="message" class="form-label">Your Message*</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-purple btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3 class="fw-bold mb-4">Other Ways to Reach Us</h3>
                        
                        <div class="info-card">
                            <i class="fas fa-phone-alt"></i>
                            <h4 class="mt-3">Phone Support</h4>
                            <p class="mb-1">1800-123-4567</p>
                            <p class="text-muted">Monday to Friday, 9AM to 6PM</p>
                        </div>
                        
                        <div class="info-card">
                            <i class="fas fa-envelope"></i>
                            <h4 class="mt-3">Email</h4>
                            <p class="mb-1">help@shreeraksha.org</p>
                            <p class="text-muted">Typically respond within 24 hours</p>
                        </div>
                        
                        <div class="info-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="mt-3">Head Office</h4>
                            <p class="mb-1">123 Health Plaza, Mumbai</p>
                            <p class="text-muted">Maharashtra - 400001</p>
                        </div>
                    </div>
                </div>
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
                        <li class="mb-2"><a href="index.html" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="benefits.html" class="text-white text-decoration-none">Benefits</a></li>
                        <li class="mb-2"><a href="hospitals.html" class="text-white text-decoration-none">Hospitals</a></li>
                        <li><a href="apply.html" class="text-white text-decoration-none">Apply Now</a></li>
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
</body>
</html>