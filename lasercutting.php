<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="style.css">
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
/* --- Theme Colors --- */
:root {
    --color-light: #FFF8EB; /* Creamy White - Main Background */
    --color-primary: #B31E32; /* Deep Red - Accent/Highlight */
    --color-text-dark: #2a2a2a; /* Main Headings/Dark Text */
    --color-text-body: #444; /* Standard Body Text */
    --color-button-hover: #8C1927; /* Darker red for button hover */
    --color-green: #25D366; /* WhatsApp Green */
    --color-card-bg: #FFFFFF; /* Pure White background for cards */
    --color-video-bg: #1a1a1a; /* Dark background for video section */
}

/* --- Base/Body Styles --- */
body {
    font-family: "Baskervville", serif;
    background-color: var(--color-light); /* Creamy background */
    color: var(--color-text-body);
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    line-height: 1.6;
    overflow-x: hidden;
    /* Removed old header/footer styles from the base */
}

section {
    padding: 60px 5%;
    background-color: var(--color-light);
}

h2, h3 {
        color: var(--color-primary); 

    font-weight: 700;
    margin-top: 0;
    line-height: 1.2;
}

h2 {
    font-size: 2.8rem; /* Slightly larger main heading */
    color: var(--color-text-dark); /* Use dark text for main section titles */
}

h3 {
    font-size: 1.6rem; /* Prominent card title */
    color: var(--color-primary); /* Card titles in deep red */
}

p {
    font-weight: 400;
    color: var(--color-text-body);
    margin-bottom: 1.5em;
    font-size: 1.1rem;
}

a {
    color: var(--color-primary);
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: var(--color-button-hover);
}

/* --- Shared Title Style (Modernized) --- */
.form-title {
    text-align: center;
    margin-bottom: 50px; 
    font-size: 2.5rem;
    color: var(--color-text-dark);
    position: relative;
    padding-top: 10px;
}

.form-title::after {
    content: '';
    width: 80px;
    height: 4px;
    background-color: var(--color-primary); 
    position: absolute;
    left: 50%;
    bottom: -10px;
    transform: translateX(-50%);
    border-radius: 2px;
}

.model-title-p {
    color: var(--color-text-body);
    font-size: 1.15rem; 
    text-align: center;
    max-width: 900px;
    margin: 0 auto 40px auto;
}

/* --- Video Section --- */
.position-relative.hsg-about-video {
    background-color: var(--color-video-bg); 
    padding: 0;
}
.hsg-about-video video {
    width: 100%;
    height: auto;
    display: block;
    max-height: 450px; /* Controlled height for modern look */
    object-fit: cover;
}

/* --- Contact Buttons (Modernized) --- */
.contact-btns-container {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    padding: 20px 0 40px 0;
    justify-content: center;
    max-width: 800px;
    margin: 0 auto;
}

.contact-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 12px 25px;
    font-size: 1rem;
    font-weight: bold;
    border: 2px solid transparent;
    cursor: pointer;
    border-radius: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    min-width: 180px;
}

.btn-call, .btn-email {
    /* Use theme primary color for main buttons */
    background-color: var(--color-primary); 
    color: var(--color-light);
}
.btn-whatsapp {
    /* Outline button for WhatsApp */
    border-color: var(--color-green); 
    color: var(--color-green);
    background-color: var(--color-light);
}

.btn-call:hover, .btn-email:hover {
    background-color: var(--color-button-hover);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transform: translateY(-2px);
}

.btn-whatsapp:hover {
    background-color: var(--color-green);
    color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transform: translateY(-2px);
}

/* --- Product Categories/Filter Buttons --- */
.product-categories {
    text-align: center;
    margin-bottom: 40px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.product-categories button {
    background-color: transparent; /* Light background for default */
    color: var(--color-text-dark);
    border: 1px solid var(--color-primary);
    padding: 10px 18px;
    margin: 5px;
    cursor: pointer;
    border-radius: 20px; /* Pill shape for modern look */
    font-size: 0.95rem;
    transition: all 0.3s;
    font-weight: 600;
}

.product-categories button:hover,
.product-categories button.active {
    background-color: var(--color-primary);
    color: var(--color-light);
    border-color: var(--color-primary);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* --- PRODUCT LIST (GRID) - Card Improvements --- */
.product-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* each card min width 280px */
  gap: 25px;
  justify-items: center;
  align-items: stretch;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.product-item {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  padding: 20px;
  width: 100%;                /* full width in grid cell */
  max-width: 320px;           /* control card width */
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.product-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
.product-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.product-item h3 {
    margin-bottom: 10px;
    font-size: 1.5rem; 
    color: var(--color-text-dark); /* Dark text for machine name */
}

.product-item p {
    font-size: 0.95rem; 
    color: #666; 
    text-align: left; 
    padding: 0 5px;
    flex-grow: 1; /* Pushes button group to the bottom */
    margin-bottom: 20px;
    line-height: 1.5;
}

.product-item p:nth-of-type(1) {
    font-weight: bold;
    color: var(--color-primary);
    font-size: 1rem;
    text-align: center;
    margin-bottom: 5px;
}

.product-item .button-group {
    margin-top: auto; 
    display: flex;
    justify-content: center;
    gap: 10px;
}

.product-item .button,
.product-item .inquiry-button {
    flex-grow: 1;
    display: inline-block;
    padding: 10px 15px;
    font-size: 0.9rem;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s;
}

.product-item .button { 
    background-color: var(--color-primary); 
    color: var(--color-light);
    border: 2px solid var(--color-primary);
}

.product-item .button:hover {
    background-color: var(--color-button-hover);
    border-color: var(--color-button-hover);
}

.product-item .inquiry-button { 
    background-color: transparent;
    color: var(--color-primary);
    border: 2px solid var(--color-primary);
}

.product-item .inquiry-button:hover {
    background-color: var(--color-primary);
    color: var(--color-light);
}




/* --- Floating WhatsApp Button (Kept but modified for theme) --- */
.whatsapp-float {
    position: fixed;
    width: 55px;
    height: 55px;
    bottom: 25px;
    right: 25px;
    background-color: var(--color-green); 
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    z-index: 999;
    transition: transform 0.3s;
}
.whatsapp-float:hover {
    transform: scale(1.1);
}
.whatsapp-float img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 10px;
}

/* --- Responsive Styles --- */

@media (max-width: 992px) {
    h2 {
        font-size: 2.2rem;
    }
    .product-list {
        /* On medium screens, 2 columns of min 300px width */
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
}

@media (max-width: 768px) {
    .form-title {
        font-size: 2rem;
    }
    .model-title-p {
        font-size: 1rem;
    }
    
    .product-list {
        /* On small screens, now 2 equal columns for better layout */
        grid-template-columns: repeat(2, 1fr); 
        gap: 15px;
    }
    
    .product-item {
        padding: 15px;
    }

    .product-item h3 {
        font-size: 1.2rem;
    }
    
    .product-item p {
        font-size: 0.85rem;
    }

    .product-item .button,
    .product-item .inquiry-button {
        padding: 8px 10px;
        font-size: 0.8rem;
    }

   
    .contact-btn {
        width: 100%;
        min-width: unset;
    }
  
}

@media (max-width: 480px) {
    .product-list {
        grid-template-columns: 1fr; /* Single column on mobile */
    }
    .product-categories button {
        padding: 8px 12px;
        font-size: 0.85rem;
    }
    .whatsapp-float {
        width: 45px;
        height: 45px;
        bottom: 15px;
        right: 15px;
    }
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
        <h2 class="form-title" style="color: #153170;">About HSG</h2>
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
        <h2  class="form-title">Laser Cutting Machine</h2>
        <div class="product-categories">
            <button data-filter="all">All</button>
            <button data-filter="pilot">Pilot Model</button>
            <button data-filter="flagship">Flagship Model</button>
            <button data-filter="classic">Classic Model</button>
            <button data-filter="material-coiling">Material Coiling</button>
            <button data-filter="hand-held">Handheld laser welding Machine</button>
        </div>
        <div  class="product-list">
            <div class="product-item" data-category="classic">
                <img src="products/c.webp" alt="C Laser Cutting Machine">
                <h3>C</h3>
                <p>1500W-60000W</p>
                <p>Economical Single-platform Fiber Laser Cutting Machine</p>
                <a href="pdf/c.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="pilot">
                <img src="products/gv (1).webp" alt="GV Laser Cutting Machine">
                <h3>GV</h3>
                <p>6000W-60000W</p>
                <p>Pilot Series 6G All Linear Motor Fiber Laser Cutting Machine</p>
                <a href="pdf/gv.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="flagship">
                <img src="products/gh.webp" alt="GH Laser Cutting Machine">
                <h3>GH</h3>
                <p>3000W-30000W</p>
                <p>High-performance Fiber Laser Cutting Machine</p>
                <a href="pdf/gh.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="flagship">
                <img src="products/gf.webp" alt="GFA Laser Cutting Machine">
                <h3>GFA</h3>
                <p>12000W-60000W</p>
                <p>Large-format Fiber Laser Cutting Machine</p>
                <a href="pdf/gfa.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            
            <div class="product-item" data-category="hand-held">
                <img src="products/fmw.webp" alt="Handheld laser welding Machine">
                <h3>FMW</h3>
                <p>1000W-3000W</p>
                <p>Handheld Laser Fiber Welding Machine</p>
                <a href="pdf/fmw.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="classic">
                <img src="products/gfc.webp" alt="GFC Laser Cutting Machine">
                <h3>GFC</h3>
                <p>12000W-60000W</p>
                <p>Economical Large-format Sheet Fiber Laser Cutting Machine</p>
                <a href="pdf/gfc.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="classic">
                <img src="products/gx.webp" alt="GX Laser Cutting Machine">
                <h3>GX</h3>
                <p>3000W-30000W</p>
                <p>High-power Bus Sheet Fiber Laser Cutting Machine</p>
                <a href="pdf/gx.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
        
            <div class="product-item" data-category="classic">
                <img src="products/x3015.webp" alt="X Laser Cutting Machine">
                <h3>X</h3>
                <p>1500W-12000W</p>
                <p>Compact Laser Cutting Machine</p>
                <a href="pdf/x.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="material-coiling">
                <img src="products/gl.webp" alt="GL Laser Cutting Machine">
                <h3>GL</h3>
                <p>1500W-60000W</p>
                <p>Material Coiling Laser Cutting Machine</p>
                <a href="pdf/gl.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
           
        </div>
        
    </section>
    
   <?php 
include 'includes/ContactForm.php';?>
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
<script src="script.js"></script>
</html>