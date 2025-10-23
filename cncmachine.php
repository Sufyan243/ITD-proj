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
    --color-card-bg: #FFFFFF; /* White background for cards */
}

/* --- Base/Body Styles --- */
body {
    font-family: "Baskervville", serif;
    background-color: var(--color-light); 
    color: var(--color-text-body);
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    line-height: 1.6;
    overflow-x: hidden;
}

section {
    padding: 60px 5%;
    background-color: var(--color-light);
}

h2, h3 {
    font-weight: 700;
    color: var(--color-primary); 
    margin-top: 0;
}

h2 {
    font-size: 2.5rem; 
}

h3 {
    font-size: 1.4rem; 
    color: var(--color-text-dark); 
}

p {
    font-weight: 400;
    color: var(--color-text-body);
    margin-bottom: 1.5em;
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
    background-color: var(--color-text-dark); 
    padding: 0;
}
.hsg-about-video video {
    width: 100%;
    height: auto;
    display: block;
    max-height: 500px; 
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
    background-color: var(--color-primary); 
    color: var(--color-light);
}
.btn-whatsapp {
    border-color: var(--color-green); 
    color: var(--color-green);
    background-color: var(--color-light);
}

.btn-call:hover, .btn-email:hover {
    background-color: var(--color-button-hover);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

.btn-whatsapp:hover {
    background-color: var(--color-green);
    color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
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
    background-color: var(--color-light);
    color: var(--color-text-dark);
    border: 1px solid var(--color-primary);
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 0.95rem;
    transition: all 0.3s;
    font-weight: 600;
}

.product-categories button:hover,
.product-categories button.active {
    background-color: var(--color-primary);
    color: var(--color-light);
    border-color: var(--color-primary);
}

/* --- PRODUCT LIST (GRID) - Card Improvements --- */
.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
    justify-items: center;
    align-items: stretch;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.product-item {
    width: 100%;
    max-width: 350px;
    background-color: var(--color-card-bg);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}


.product-item img {
    width: 100%;
    height: 200px;
    object-fit: contain;
    margin-bottom: 15px;
}

.product-item h3 {
    margin-bottom: 15px;
    color: var(--color-primary); 
    font-size: 1.5rem; 
}

.product-item p {
    font-size: 0.9rem; 
    color: #666; 
    text-align: left; 
    padding: 0 5px;
    /* Important for uniform height: takes all available space */
    flex-grow: 1; 
    margin-bottom: 20px;
    line-height: 1.5; /* Improved readability */
}

.product-item .button-group {
    margin-top: auto; 
}

.product-item .button,
.product-item .inquiry-button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 0.9rem;
    border-radius: 5px;
    margin: 5px 2px;
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



/* --- Floating WhatsApp Button --- */
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
        /* On small screens, 2 columns of min 45% width */
        grid-template-columns: repeat(auto-fill, minmax(45%, 1fr)); 
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
        <video data-src="New folder/syil.mp4"  preload="metadata" autoplay="autoplay" loop="loop" muted="muted" webkit-playsinline="webkit-playsinline" playsinline="playsinline" x5-playsinline="x5-playsinline" x-webkit-airplay="allow" src="New folder/syil.mp4" ></video>
    </div>
    <section id="injection" class="products">
        <h2 class="form-title" style="color: #153170;">About SYIL</h2>
        <p class="model-title-p"  >At SYIL, our mission is to design and manufacture top-quality, affordable CNC machines tailored for small business owners. We are dedicated to providing accessible and reliable machinery that empowers entrepreneurs to thrive in their industries.</p>
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
        <h2  class="form-title">CNC Machining & Turning Centers</h2>
        <div class="product-categories">
            <button data-filter="all">All</button>
            <button data-filter="vertical-mills">Vertical Mills</button>
            <button data-filter="lathes">Lathes</button>
            <button data-filter="drip">Drill Tap Centres</button>
            <button data-filter="5-axis">5-Axis Mills</button>
        </div>
       
        <div class="product-list">
            <div class="product-item" data-category="vertical-mills">
                <img src="New folder/x7/x5.png" alt="GL Laser Cutting Machine">
                <h3>SYIL X5 Mini CNC Mill</h3>
                <p>300×260×300 mm axis travels

                    16-pocket high-speed servo tool changer
                    
                    20,000 rpm direct-coupled BT30 spindle
                    
                    SCHNEEBERGER mineral cast bed
                    
                    One-meter width for narrow spaces</p>
                <a href="x5.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="vertical-mills">
                <img src="New folder/x7/x7.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL X7 Small CNC Machinel</h3>
                <p>400×300×380 mm axis travels

                    12-pocket umbrella automatic tool changer
                    
                    12,000 rpm BT30 spindle
                    
                    SCHNEEBERGER mineral casting</p>
                <a href="x7.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="vertical-mills">
                <img src="New folder/x7/x9.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL X9 Vertical Mill</h3>
                <p>760×500×500 mm axis travels

                    24-pocket high-speed servo auto tool changer
                    
                    10,000 rpm BT40 spindle
                    
                    SCHNEEBERGER mineral casting
                    </p>
                <a href="x9.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="vertical-mills">
                <img src="New folder/x7/x11.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL X11 Vertical Machining Center</h3>
                <p>1000x500x500 mm axis travels

                    24-pocket high-speed servo auto tool changer
                    
                    12,000 rpm BT40 spindle
                    
                    SCHNEEBERGER mineral casting
                    
                    </p>
                <a href="x11.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="lathes">
                <img src="New folder/l2.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL L2 CNC Lathe</h3>
                <p>8-inch hydraulic chuck

                    Maximum turning diameter of ø510 mm
                    
                    Through-hole diameter of ø66  mm
                    
                    8-position servo tool turret
                    
                    Compact footprint
                    </p>
                <a href="pdf/l2.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="lathes">
                <img src="New folder/l3.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL L3 CNC Lathe</h3>
                <p>8-inch hydraulic chuck

                    Maximum swing diameter of ø500 mm
                    
                    Through-hole diameter of ø63 mm
                    
                    A2-6 spindle
                    
                    Power-driven tool speed of 5,000 rpm
                    </p>
                <a href="pdf/l3.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="drip">
                <img src="New folder/t5.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL T5 Drill Tap Mill</h3>
                <p>600x450x330 mm axis travels

                    21-pocket High-Speed Servo Tool Changer
                    
                    20,000 rpm Direct BT30 Spindle
                    
                    High-Precision Mineral Casting
                    
                    THK Ball Screw and Linear Guide
                    </p>
                <a href="pdf/t5.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="drip">
                <img src="New folder/t7.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL T7 Drill Tap Mill</h3>
                <p>700x450x330 mm axis travels

                    21-pocket high-speed servo tool magazine
                    
                    20,000 rpm direct BT30 spindle
                    
                    High-precision mineral casting
                    
                    THK ball screw and linear guide
                    </p>
                <a href="pdf/t7.html" class="button">Learn More</a>
                <button class="inquiry-button">Inquiry</button>
            </div>
            <div class="product-item" data-category="5-axis">
                <img src="New folder/u5.jpg" alt="GL Laser Cutting Machine">
                <h3>SYIL U5 5-Axis Mill</h3>
                <p>500x300x250 mm axis travels

                    200 mm Direct Drive 5-axis rotary table
                    
                    32-pocket high-speed servo tool magazine
                    
                    30,000 rpm HSK-E40 electric spindle
                    
                    SCHNEEBEERGER mineral casting
                    </p>
                <a href="pdf/u5.html" class="button">Learn More</a>
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
                    <li><a href="lasercutting.html">Laser Cutting Machines</a></li>
                    <li><a href="#injection">CNC Machining & Turning Centers</a></li>
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