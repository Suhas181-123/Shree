<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Hospitals - ShreeRaksha</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="particles-background"></div>
    
    <header>
        <div class="container">
            <a href="index.html" class="logo">
                <img src="images/logo.png" alt="ShreeRaksha Logo">
            </a>
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
        </div>
    </header>

    <section class="hospitals-hero">
        <div class="container">
            <h1>Our Partner Hospitals</h1>
            <p>Access quality healthcare at our nationwide network of trusted medical facilities</p>
        </div>
    </section>

    <section class="hospital-search">
        <div class="container">
            <div class="search-container">
                <input type="text" placeholder="Search by city, hospital name or specialty...">
                <button type="submit"><i class="fas fa-search"></i> Search</button>
            </div>
            <div class="filter-options">
                <select>
                    <option value="">All States</option>
                    <option value="maharashtra">Maharashtra</option>
                    <option value="delhi">Delhi</option>
                    <!-- Add more states -->
                </select>
                <select>
                    <option value="">All Specialties</option>
                    <option value="cardiology">Cardiology</option>
                    <option value="orthopedics">Orthopedics</option>
                    <!-- Add more specialties -->
                </select>
            </div>
        </div>
    </section>

    <section class="hospital-listing">
        <div class="container">
            <div class="hospital-card">
                <div class="hospital-image">
                    <img src="images/hospital1.jpg" alt="City General Hospital">
                </div>
                <div class="hospital-details">
                    <h2>City General Hospital</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Mumbai, Maharashtra</p>
                    <div class="specialties">
                        <span>Cardiology</span>
                        <span>Neurology</span>
                        <span>Pediatrics</span>
                    </div>
                    <p class="description">A 500-bed multi-specialty hospital with advanced cardiac care unit and 24/7 emergency services.</p>
                    <div class="hospital-contact">
                        <p><i class="fas fa-phone"></i> 022-12345678</p>
                        <p><i class="fas fa-globe"></i> www.cityhospitalmumbai.com</p>
                    </div>
                </div>
            </div>

            <div class="hospital-card">
                <div class="hospital-image">
                    <img src="images/hospital2.jpg" alt="Greenlife Medical Center">
                </div>
                <div class="hospital-details">
                    <h2>Greenlife Medical Center</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Delhi</p>
                    <div class="specialties">
                        <span>Orthopedics</span>
                        <span>Physiotherapy</span>
                        <span>Sports Medicine</span>
                    </div>
                    <p class="description">Specialized center for bone and joint care with state-of-the-art rehabilitation facilities.</p>
                    <div class="hospital-contact">
                        <p><i class="fas fa-phone"></i> 011-87654321</p>
                        <p><i class="fas fa-globe"></i> www.greenlifedelhi.org</p>
                    </div>
                </div>
            </div>

            <div class="hospital-card">
                <div class="hospital-image">
                    <img src="images/hospital3.jpg" alt="Rural Health Foundation">
                </div>
                <div class="hospital-details">
                    <h2>Rural Health Foundation</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Pune, Maharashtra</p>
                    <div class="specialties">
                        <span>General Medicine</span>
                        <span>Pediatrics</span>
                        <span>Women's Health</span>
                    </div>
                    <p class="description">Dedicated to providing affordable healthcare to rural communities with mobile medical units.</p>
                    <div class="hospital-contact">
                        <p><i class="fas fa-phone"></i> 020-56781234</p>
                        <p><i class="fas fa-globe"></i> www.ruralhealthpune.in</p>
                    </div>
                </div>
            </div>

            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">Next <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <section class="become-partner">
        <div class="container">
            <h2>Is Your Hospital Interested in Partnering With Us?</h2>
            <p>Join our network and help make healthcare more accessible to all Indians</p>
            <a href="contact.html?subject=Hospital Partnership" class="cta-button">Contact Our Partnership Team</a>
        </div>
    </section>

    <footer>
        <!-- Same footer as index.html -->
    </footer>

    <script src="scripts/particles.js"></script>
</body>
</html>