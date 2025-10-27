<?php
include("includes/header.php");
?>

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
    <title>About Us - ITD</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">

    <style>
 /* Define Theme Colors */
:root {
    --color-light: #FFF8EB; /* Creamy White - Main Background */
    --color-primary: #B31E32; /* Deep Red - Accent/Highlight */
    --color-dark: #2a2a2a; /* Dark Color */
    --color-text: #333; /* Standard Dark Text */
    --color-text-light: #666; /* Secondary Text */
}

/* Base Styles */
body {
    font-family: "Baskervville", serif;
    background-color: var(--color-light); 
    color: var(--color-text);
    margin: 0;
    padding: 0;
    line-height: 1.6;
    overflow-x: hidden; /* Prevents horizontal scroll on small screens */
}

h1, h2, h3 { 
    color: var(--color-primary); 
    font-weight: 700;
    margin-top: 0;
}

p {
    margin-bottom: 1.5em;
    font-size: 1rem;
    color: var(--color-text-light);
}

/* --- About Us Section Styles --- */
.about-us {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two-column layout on desktop */
    gap: 40px;
    padding: 50px 5%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: var(--color-light);
}

.content {
    /* Text content section */
}

.image-section {
    position: relative;
    overflow: hidden;
    border-radius: 8px; 
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.overlay-text {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: var(--color-primary); 
    color: var(--color-light);
    padding: 15px 20px;
    text-align: center;
    font-size: 1.2rem;
    font-weight: bold;
    opacity: 0.95;
}

.logo-section {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}

.logo-section .logo {
    width: 60px;
    height: auto;
    margin-right: 15px;
}

.logo-section h1 {
    font-size: 2.2rem;
    margin: 0;
    color: var(--color-text); 
}

h2 {
    font-size: 1.8rem;
    margin-top: 10px;
    margin-bottom: 20px;
}

/* --- Floating WhatsApp Button --- */
.whatsapp-float {
    position: fixed;
    width: 55px;
    height: 55px;
    bottom: 25px;
    right: 25px;
    background-color: #25d366; 
    color: #FFF;
    border-radius: 50%;
    text-align: center;
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


/* --- Media Queries (Responsiveness) --- */
/* Tablet/Small Desktop */
@media (max-width: 900px) {
    .about-us {
        grid-template-columns: 1fr; /* Single column layout */
        gap: 30px;
    }
    
    .logo-section h1 {
        font-size: 1.8rem;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .about-us {
        padding: 30px 4%;
    }
    
    .logo-section h1 {
        font-size: 1.5rem;
    }
    
    .overlay-text {
        font-size: 1rem;
        padding: 10px;
    }
    
    .whatsapp-float {
        width: 45px;
        height: 45px;
        bottom: 15px;
        right: 15px;
    }
}

/* Ultra-wide screens (2560px+) */
@media only screen and (min-width: 2000px) {
    .about-us {
        max-width: 1600px;
    }
    
    .logo-section h1 {
        font-size: 3rem;
    }

    h2 {
        font-size: 2.5rem;
    }
    p {
        font-size: 1.2rem;
    }
    
    .overlay-text {
        font-size: 1.8rem;
        padding: 25px;
    }
}
    </style>
</head>

<body class="has-hero">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
    <img src="wp icon.png" alt="Chat with us on WhatsApp">
</a>
    <div class="about-us">
        <div class="content">
            <div class="texts">
            <div class="logo-section">
                <img src="products/Logo-01.jpg" alt="ITD Logo" class="logo">
                <h1>INTERTRADE DISTRIBUTORS</h1>
            </div>
          
                <p>For over 50 years, our company Intertrade Distributors Pvt Ltd has been a cornerstone in the
                    industrial machines and plant equipment sector. Our extensive experience and deep industry knowledge
                    have established us as a trusted leader, with a reputation for excellence recognized across the
                    nation. We proudly serve a diverse clientele, including some of the most prominent names in the
                    industry, reflecting our unwavering commitment to quality and service.</p>
                <p>Our long-standing relationships with our suppliers are a testament to our reliability and industry
                    expertise. As the sole dealers and distributors for leading global brands in the Pakistan market for
                    many decades, we have fostered strong, mutually beneficial partnerships. These enduring
                    relationships enable us to offer our clients unparalleled access to cutting-edge technology and also
                    service and spares for old and obsolete machines. </p>
                <p>At Intertrade Distributors Pvt Ltd, we are dedicated to maintaining these valuable partnerships and
                    delivering on our promises. Our team of technical experts are trained to service even the most
                    advanced machines ensuring that our clients receive the highest level of support and satisfaction.
                </p>
                <p>We continue to set the standard for innovation, reliability, and trust in the industrial sector,
                    striving to exceed expectations and support our customers with unmatched expertise and service.</p>
            </div>
        </div>
        <div class="image-section">
            <img src="products/urban_machinery_cover.jpeg" alt="Machinery">
            <div class="overlay-text">
                We have 50+ years of Experience in the Distribution Industry
            </div>
        </div>
    </div>
<?php 
include 'includes/ContactForm.php'; 
include("includes/footer.php");
?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navToggle = document.querySelector('.nav-toggle');
            const navMenu = document.querySelector('.nav-menu');

            navToggle.addEventListener('click', function () {
                navMenu.classList.toggle('open');
            });

            const submenuToggles = document.querySelectorAll('header nav ul li');

            submenuToggles.forEach(function (submenuToggle) {
                submenuToggle.addEventListener('mouseenter', function () {
                    const submenu = this.querySelector('.submenu');
                    if (submenu) {
                        submenu.style.display = 'block';
                    }
                });

                submenuToggle.addEventListener('mouseleave', function () {
                    const submenu = this.querySelector('.submenu');
                    if (submenu) {
                        submenu.style.display = 'none';
                    }
                });
            });
        });

    </script>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav-toggle');
    const mobilePanel = document.getElementById('mobile-panel');
    const navOverlay = document.querySelector('.nav-overlay');
    const mobileClose = document.querySelector('.mobile-close');
    const header = document.querySelector('.site-header');

    // Enhanced mobile menu toggle
    function openMobileMenu() {
        navToggle.setAttribute('aria-expanded', 'true');
        mobilePanel.setAttribute('aria-hidden', 'false');
        navOverlay.classList.add('active');
        document.body.classList.add('nav-open');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        navToggle.setAttribute('aria-expanded', 'false');
        mobilePanel.setAttribute('aria-hidden', 'true');
        navOverlay.classList.remove('active');
        document.body.classList.remove('nav-open');
        document.body.style.overflow = '';
        
        // Close all open submenus when closing main menu
        document.querySelectorAll('.mobile-submenu.expanded').forEach(submenu => {
            submenu.classList.remove('expanded');
            submenu.previousElementSibling.setAttribute('aria-expanded', 'false');
        });
    }

    // Event listeners for menu open/close
    navToggle.addEventListener('click', openMobileMenu);
    mobileClose.addEventListener('click', closeMobileMenu);
    navOverlay.addEventListener('click', closeMobileMenu);

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobilePanel.getAttribute('aria-hidden') === 'false') {
            closeMobileMenu();
        }
    });

    // Mobile submenu toggles
    document.querySelectorAll('.submenu-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const submenu = this.nextElementSibling;
            
            // Close other open submenus (accordion behavior)
            document.querySelectorAll('.submenu-toggle').forEach(otherToggle => {
                if (otherToggle !== this && otherToggle.getAttribute('aria-expanded') === 'true') {
                    otherToggle.setAttribute('aria-expanded', 'false');
                    otherToggle.nextElementSibling.classList.remove('expanded');
                }
            });
            
            // Toggle current submenu
            this.setAttribute('aria-expanded', !isExpanded);
            submenu.classList.toggle('expanded');
        });
    });

    // Header scroll effect
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just a placeholder (#products, #, etc.)
            if (href === '#' || href === '#products') {
                e.preventDefault();
                return;
            }
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (mobilePanel.getAttribute('aria-hidden') === 'false') {
                    closeMobileMenu();
                }
            }
        });
    });

    // Close mobile menu when clicking on regular links
    document.querySelectorAll('.mobile-submenu a, .nav-menu-vertical > li > a').forEach(link => {
        link.addEventListener('click', function() {
            if (mobilePanel.getAttribute('aria-hidden') === 'false') {
                setTimeout(() => closeMobileMenu(), 150);
            }
        });
    });

    // Active link highlighting based on current page
    function updateActiveLink() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        
        // Update desktop nav
        document.querySelectorAll('.nav-menu a, .submenu a').forEach(link => {
            link.classList.remove('active');
            const linkHref = link.getAttribute('href');
            
            if (linkHref === currentPage || 
                (currentPage === '' && linkHref === 'index.php') ||
                (currentPage === 'index.php' && linkHref === 'index.php')) {
                link.classList.add('active');
            }
        });
        
        // Update mobile nav
        document.querySelectorAll('.nav-menu-vertical a, .mobile-submenu a').forEach(link => {
            link.classList.remove('active');
            const linkHref = link.getAttribute('href');
            
            if (linkHref === currentPage || 
                (currentPage === '' && linkHref === 'index.php') ||
                (currentPage === 'index.php' && linkHref === 'index.php')) {
                link.classList.add('active');
            }
        });
    }

    // Update active link on page load
    updateActiveLink();

    // Optional: Active link highlighting based on scroll position for single-page sections
    const sections = document.querySelectorAll('section[id]');
    
    if (sections.length > 0) {
        function updateActiveSection() {
            let current = '';
            const scrollPosition = window.pageYOffset + 150;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-menu a[href^="#"], .nav-menu-vertical a[href^="#"]').forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                
                if (href === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveSection);
    }

    // Prevent clicks on desktop dropdown parent from navigating
    document.querySelectorAll('.nav-desktop .has-submenu > a').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#products' || this.getAttribute('href') === '#') {
                e.preventDefault();
            }
        });
    });
});
    </script>
    <script src="script.js"></script>
</body>

</html>