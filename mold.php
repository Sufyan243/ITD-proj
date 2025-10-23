<?php
include("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".inquiry-button").forEach(button => {
      button.addEventListener("click", () => {
        window.open("https://wa.me/923008227711", "_blank");
      });
    });
  });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16630851493">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16630851493');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser Cutting</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <style>
  /* Custom Properties for Theme Colors */
:root {
    --primary-color: #B31E32; /* Deep Red/Maroon */
    --secondary-color: #FFF8EB; /* Off-White/Creamy Background */
    --text-color: #333333;
    --light-text-color: #ffffff;
    --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.08);
    --shadow-hover: 0 6px 16px rgba(0, 0, 0, 0.15);
}

/* Base Styles */
body {
    font-family: "Baskervville", serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--secondary-color); /* Theme background color */
    color: var(--text-color);
}

h2 {
    color: var(--primary-color) !important; /* Applying primary color to section titles */
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5rem;
    position: relative;
    padding-top: 20px;
      font-weight: 700;
    margin-top: 0;
    line-height: 1.2;

}

h2.form-title::after {
    content: '';
    width: 80px;
    height: 4px;
    background-color: var(--primary-color);
    position: absolute;
    left: 50%;
    bottom: -10px;
    transform: translateX(-50%);
    border-radius: 2px;
}

p, li, a {
    font-size: 1.1rem;
    line-height: 1.6;
}

/* --- Video/Hero Section Styles --- */
.hsg-about-video {
    overflow: hidden;
    height: 50vh; /* Control video height */
    margin-bottom: 30px;
}

.hsg-about-video video {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures video covers the area without distortion */
}

/* --- About HSG Section (Products Section used for structure) --- */
.products {
    padding: 40px 5%;
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.model-title-p {
    color: var(--text-color);
    margin: 1.5rem auto 3rem;
    font-size: 1.25rem;
    max-width: 800px;
}

/* --- Contact Buttons --- */
.contact-btns-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.contact-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 25px;
    font-size: 1rem;
    font-weight: bold;
    border: 2px solid transparent;
    cursor: pointer;
    border-radius: 50px; /* Pill shape for modern look */
    transition: all 0.3s ease;
    text-decoration: none;
    min-width: 180px;
    text-align: center;
}

.btn-call, .btn-email {
    background-color: var(--primary-color);
    color: var(--light-text-color);
    box-shadow: 0 4px 8px rgba(179, 30, 50, 0.4);
}

.btn-call:hover, .btn-email:hover {
    background-color: #8c1726; /* Slightly darker shade */
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(179, 30, 50, 0.6);
}

.btn-whatsapp {
    border-color: #25D366;
    color: #25D366;
    background-color: var(--secondary-color);
}

.btn-whatsapp:hover {
    background-color: #25D366;
    color: var(--light-text-color);
    border-color: #25D366;
    transform: translateY(-2px);
}

.icon {
    font-size: 1.1rem;
}

/* --- Product List Styles (Mold Bases Section) --- */
.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.product-item {
    background-color: var(--light-text-color);
    border-radius: 10px;
    overflow: hidden;
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding-bottom: 20px;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
}

.product-item img {
    width: 100%;
    height: 200px; /* Fixed height for image consistency */
    object-fit: cover;
    transition: transform 0.5s ease;
}

.product-item img:hover {
    transform: scale(1.03);
}

.product-item h3 {
    margin: 15px 0 15px;
    font-size: 1.4rem;
    color: var(--primary-color);
}

.inquiry-button {
    background-color: var(--primary-color);
    color: var(--light-text-color);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.inquiry-button:hover {
    background-color: #8c1726;
}



/* --- Responsive Adjustments --- */
@media (max-width: 992px) {
    .product-list {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }
}

@media (max-width: 768px) {
    h2.form-title {
        font-size: 2rem;
    }
    
   
    
    .product-list {
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    }

    .contact-btn {
        min-width: 100%;
    }

    .hsg-about-video {
        height: 35vh;
    }
}

@media (max-width: 480px) {
    .products {
        padding: 20px 3%;
    }
    
    .product-item h3 {
        font-size: 1.2rem;
    }
    
    .inquiry-button {
        padding: 8px 15px;
        font-size: 0.9rem;
    }
    
  
    
    .hsg-about-video {
        height: 30vh;
    }
}

/* Removing old, unneeded styles for a clean slate */
.button, .footer, .logo-section, .hero, .whatsapp-float {
    /* These elements are likely part of the header/footer you are removing or are better handled in external files */
    /* Keeping them out of this specific CSS for a clean, modern page body. */
}

      </style>
    
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- <header>
        <div class="logo">
            <img src="products/Logos-01.jpg" alt="HSG Logo">
        </div>
        <nav class="nav">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li class="has-submenu">
                    <a href="lasercutting.html">Laser Cutting Machines</a>
                    
                </li>
                <li class="has-submenu">
                    <a href="cncmachine.html">CNC Machining & Turning Centers</a>
                   
                </li>
                <li><a href="injectionmoulding.html">Injection Moulding Machines</a></li>
                 <li><a href="laser_accessories.html">Laser Cutting Accessories</a></li>
                  <li><a href="mold.html">Mold Bases</a></li>
            </ul>
            <button class="nav-toggle" aria-label="Toggle navigation">&#9776;</button>
        </nav>
    </header> -->
    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
    <img src="wp icon.png" alt="Chat with us on WhatsApp">
</a>
    <div class="position-relative hsg-about-video">
        <video data-src="New folder/about.mp4"  preload="metadata" autoplay="autoplay" loop="loop" muted="muted" webkit-playsinline="webkit-playsinline" playsinline="playsinline" x5-playsinline="x5-playsinline" x-webkit-airplay="allow" src="New folder/about.mp4" ></video>
    </div>
    
    <section id="laser-cutting" class="products">
        <h2 class="form-title" >About HSG</h2>
        <p class="model-title-p"  >Founded in 2006, HSG Laser is a high-tech enterprise specializing in the research, development, production, and sales of intelligent metal shaping equipment. The company is dedicated to providing metal shaping and automated production line solutions to global customers.</p>
          <div class="contact-btns-container">
        <a href="tel:03008227711" class="contact-btn btn-call">
            📞 Call
        </a>
        <a href="mailto: itdtech2004@gmail.com" class="contact-btn btn-email">
            ✉️ Email
        </a>
        <a href="https://wa.me/03008227711" class="contact-btn btn-whatsapp">
            WhatsApp
        </a>
    </div>
        <h2  class="form-title">Mold Bases</h2>
 
        <div  class="product-list">
            <div class="product-item">
                <img src="products/Mold Base/cavity-set.jpeg" >
                <h3>Cavity Set</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" >
                <img src="products/Mold Base/standard-mold-base.jpeg" alt="GV Laser Cutting Machine">
                <h3>Standard Mold Base</h3>

                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item">
                <img src="products/Mold Base/ejector-housing.jpeg" alt="GH Laser Cutting Machine">
                <h3>Ejector Housing</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" >
                <img src="products/Mold Base/fits-frames-inserts-accessories.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Fits Frames</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
             <div class="product-item" >
                <img src="products/Mold Base/insert-steel.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Insert Steel</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
             <div class="product-item">
                <img src="products/Mold Base/insulator-sheet.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Insulator Sheet</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
             <div class="product-item">
                <img src="products/Mold Base/mold-base-special.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Mold Base Special</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
             <div class="product-item">
                <img src="products/Mold Base/mold-base-standard-aluminum.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Mold Base Standard Aluminum</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
             <div class="product-item">
                <img src="products/Mold Base/mold-plate.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Mold Plate</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
                <div class="product-item">
                <img src="products/Mold Base/spacer-blocks-clamp-slotted.jpeg" alt="GFA Laser Cutting Machine">
                <h3>Spacer Blocks</h3>
                <button class="inquiry-button">Inquiry</button>
            </div>
            
         
        </div>
        
    </section>
       
   <?php 
include 'includes/ContactForm.php';
include 'includes/footer.php';
?>
    <!-- <section class="quote">
        <form id="request-quote" class="quote-form" action="submit_quote.php" method="post">
            <h2 class="form-title">Request A Quote</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="phone" class="form-label">Phone or WhatsApp</label>
                    <input type="text" id="phone" name="phone" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" id="country" name="country" class="form-input" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" id="city" name="city" class="form-input">
                </div>
                <div class="form-group">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" id="company" name="company" class="form-input">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cutting-material" class="form-label">Cutting Material</label>
                    <select id="cutting-material" name="cutting-material" class="form-select" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Carbon Steel">Carbon Steel</option>
                        <option value="Material Steel">Material Steel</option>
                        <option value="Aluminium">Aluminium</option>
                        <option value="Brass">Brass</option>
                        <option value="Other Metals">Other Metals</option>
                        <option value="All Metals">All Metals</option>
                        <option value="Metals and Non Metals">Metals and Non Metals</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="machine-type" class="form-label">Machine Type</label>
                    <select id="machine-type" name="machine-type" class="form-select">
                        <option value="" disabled selected>Select</option>
                        <option value="Laser Cutting Machine">Laser Cutting Machine</option>
                        <option value="Bending Machine">Bending Machine</option>
                        <option value="Laser Welder">Laser Welder</option>
                        <option value="Automation">Automation</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-textarea" placeholder="Please leave us the material thickness and working area, we will offer the quotation to you as soon as possible."></textarea>
            </div>
            <button type="submit" class="form-submit">Submit</button>
        </form>
    </section> -->
    <!-- <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>About Us</h3>
                <p> INTERTRADE <br> DISTRIBUTORS PVT LTD <br>
                    Explore our wide range of high-performance equipment tailored to meet your manufacturing needs.</p>
            </div>

            <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                    <li>Email: itdtech2004@gmail.com</li>
                    <li>Phone: 0092-300-8227711</li>
                    <li>Tel: 0092-21-32418554, 32424925</li>
                    <li>Fax: 0092-21-32418601</li>
                    <li>Address: Aiwan-e-Tijarat Road P.O Box 4978 Karachi Pakistan</li>
                    <li>Skype ID: fawad.k9</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#laser-cutting">Laser Cutting Machines</a></li>
                    <li><a href="cncmachine.html">CNC Machining & Turning Centers </a></li>
                    <li><a href="injectionmoulding.html">Injection Moulding Machines </a></li>
                    <li><a href="aboutus.html">About us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a target="_blank" href="https://web.skype.com/"> fawad.k9 <i class="fab fa-skype"></i></a>
                </div>
            </div>
        </div>
      
    </footer> -->
</body>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
    
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('open');
        });
    
        const submenuToggles = document.querySelectorAll('header nav ul li');
    
        submenuToggles.forEach(function(submenuToggle) {
            submenuToggle.addEventListener('mouseenter', function() {
                const submenu = this.querySelector('.submenu');
                if (submenu) {
                    submenu.style.display = 'block';
                }
            });
    
            submenuToggle.addEventListener('mouseleave', function() {
                const submenu = this.querySelector('.submenu');
                if (submenu) {
                    submenu.style.display = 'none';
                }
            });
        });
    });
    
        </script>

</html>