<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - ShreeRaksha</title>
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

    <section class="apply-hero">
        <div class="container">
            <h1>Get Your ShreeRaksha Card</h1>
            <p>Complete this simple form to get instant access to healthcare benefits</p>
        </div>
    </section>

    <section class="application-form">
        <div class="container">
            <div class="form-progress">
                <div class="progress-step active" data-step="1">
                    <div class="step-number">1</div>
                    <div class="step-label">Personal Details</div>
                </div>
                <div class="progress-step" data-step="2">
                    <div class="step-number">2</div>
                    <div class="step-label">Contact Info</div>
                </div>
                <div class="progress-step" data-step="3">
                    <div class="step-number">3</div>
                    <div class="step-label">Review & Submit</div>
                </div>
            </div>

            <form id="shreeraksha-application">
                <div class="form-step active" data-step="1">
                    <h2>Personal Information</h2>
                    <div class="form-group">
                        <label for="full-name">Full Name*</label>
                        <input type="text" id="full-name" name="full-name" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="dob">Date of Birth*</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id-proof">ID Proof*</label>
                        <select id="id-proof" name="id-proof" required>
                            <option value="">Select ID Type</option>
                            <option value="aadhaar">Aadhaar Card</option>
                            <option value="pan">PAN Card</option>
                            <option value="voter">Voter ID</option>
                            <option value="passport">Passport</option>
                        </select>
                        <input type="text" id="id-number" name="id-number" placeholder="ID Number" required>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="next-btn">Next <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="form-step" data-step="2">
                    <h2>Contact Information</h2>
                    <div class="form-group">
                        <label for="address">Full Address*</label>
                        <textarea id="address" name="address" rows="3" required></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">State*</label>
                            <select id="state" name="state" required>
                                <option value="">Select State</option>
                                <option value="maharashtra">Maharashtra</option>
                                <option value="delhi">Delhi</option>
                                <!-- Add more states -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">City*</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="mobile">Mobile Number*</label>
                            <input type="tel" id="mobile" name="mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="prev-btn"><i class="fas fa-arrow-left"></i> Previous</button>
                        <button type="button" class="next-btn">Next <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="form-step" data-step="3">
                    <h2>Review Your Information</h2>
                    <div class="review-summary">
                        <div class="review-item">
                            <h3>Personal Details</h3>
                            <p id="review-name"></p>
                            <p id="review-dob"></p>
                            <p id="review-gender"></p>
                            <p id="review-id"></p>
                        </div>
                        <div class="review-item">
                            <h3>Contact Details</h3>
                            <p id="review-address"></p>
                            <p id="review-location"></p>
                            <p id="review-mobile"></p>
                            <p id="review-email"></p>
                        </div>
                    </div>
                    <div class="form-group terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms & Conditions</a> and confirm that all information provided is accurate*</label>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="prev-btn"><i class="fas fa-arrow-left"></i> Previous</button>
                        <button type="submit" class="submit-btn">Submit Application</button>
                    </div>
                </div>

                <div class="form-completion" style="display: none;">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Application Submitted Successfully!</h2>
                    <p>Your ShreeRaksha card number is: <strong id="card-number">SR-2023-5A2B4C</strong></p>
                    <div class="digital-card">
                        <div class="card-front">
                            <img src="images/logo-white.png" alt="ShreeRaksha Logo">
                            <h3>ShreeRaksha Healthcare Card</h3>
                            <p>Member: <span id="card-name"></span></p>
                            <p>Card #: <span id="card-id"></span></p>
                            <div class="card-qr">
                                <!-- QR code would be generated here -->
                                <div class="qr-placeholder"></div>
                            </div>
                        </div>
                    </div>
                    <div class="download-options">
                        <button class="download-btn"><i class="fas fa-download"></i> Download Card</button>
                        <button class="print-btn"><i class="fas fa-print"></i> Print Card</button>
                    </div>
                    <p class="instructions">You can now use your digital card immediately at any partner hospital. A physical card will be mailed to your address within 7-10 working days.</p>
                    <a href="index.html" class="return-home">Return to Homepage</a>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <!-- Same footer as index.html -->
    </footer>

    <script src="scripts/particles.js"></script>
    <script src="scripts/application.js"></script>
</body>
</html>