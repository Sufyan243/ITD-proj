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

        function gtag() {
            dataLayer.push(arguments);
        }
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
            --color-light: #FFF8EB;
            /* Creamy White - Main Background */
            --color-primary: #B31E32;
            /* Deep Red - Accent/Highlight */
            --color-dark: #2a2a2a;
            /* Dark Color */
            --color-text: #333;
            /* Standard Dark Text */
            --color-text-light: #666;
            /* Secondary Text */
        }

        /* Base Styles */
        body {
            font-family: 'Poppins', 'Montserrat', sans-serif !important;
            background-color: var(--color-light);
            color: var(--color-text);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            overflow-x: hidden;
            /* Prevents horizontal scroll on small screens */
        }

        h1,
        h2,
        h3 {
            color: var(--color-primary);
            font-weight: 700;
            margin-top: 0;
        }

        p {
            margin-bottom: 1.5em;
            font-size: 1rem;
            color: var(--color-text-light);
        }

        /* --- OLD About Us Section Styles --- */
        /* .about-us {
    display: grid;
    grid-template-columns: 1fr 1fr; /* Two-column layout on desktop */
        /* gap: 40px;
    padding: 50px 5%;
    max-width: 1200px;
    margin: 0 auto;
    background-color: var(--color-light);
}

 .content {
     Text content section 
 

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
} */

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
                grid-template-columns: 1fr;
                /* Single column layout */
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



        /*about us new changes*/
        .about-us {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background: #f8f9fa;
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .content {
            display: flex;
            align-items: center;
            padding: 50px;
            background: #fff;
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .texts {
            max-width: 100%;
            width: 100%;
        }


        .texts p {
            margin-bottom: 22px;
            color: #444;
            font-size: 1.02rem;
            text-align: justify;
            line-height: 1.9;
            padding: 15px;
            background: #f8f9fa;
            border-left: 4px solid #B31E32;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .texts p:hover {
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transform: translateX(5px);
        }

        .texts p:first-of-type {
            font-weight: 500;
            color: #333;
        }

        .image-section {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 500px;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .image-section:hover img {
            transform: scale(1.08);
        }

        .image-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(179, 30, 50, 0.7) 0%, rgba(0, 0, 0, 0.6) 100%);
            z-index: 1;
            transition: background 0.3s ease;
        }

        .image-section:hover::before {
            background: linear-gradient(135deg, rgba(179, 30, 50, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%);
        }

        .overlay-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 40px;
            color: white;
            font-size: 2rem;
            font-weight: 700;
            z-index: 2;
            background: linear-gradient(to top, rgba(179, 30, 50, 0.95) 0%, transparent 100%);
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            line-height: 1.4;
            letter-spacing: 0.5px;
        }

        /* Decorative element */
        .content::before {
            content: '';
            position: absolute;
            top: 40px;
            right: 40px;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, rgba(179, 30, 50, 0.05) 0%, transparent 100%);
            border-radius: 50%;
            z-index: 0;
        }

        .texts {
            position: relative;
            z-index: 1;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .about-us {
                padding: 40px 20px;
            }

            .content {
                padding: 40px 30px;
            }

            .image-section {
                height: 450px;
            }

            .overlay-text {
                font-size: 1.7rem;
                padding: 35px;
            }

            /* .logo-section h1 {
                font-size: 1.6rem;
            }
        } */

            @media (max-width: 768px) {
                .about-us {
                    padding: 30px 15px;
                }

                .content {
                    padding: 30px 20px;
                }

                /* .logo-section {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }

            .logo-section h1 {
                font-size: 1.4rem;
            }

            .logo {
                width: 75px;
                height: 75px;
            }
             */

                .texts p {
                    font-size: 0.96rem;
                    padding: 12px;
                }

                .overlay-text {
                    font-size: 1.5rem;
                    padding: 30px 20px;
                }

                .image-section {
                    height: 380px;
                    margin-bottom: 30px;
                }

                .content::before {
                    width: 100px;
                    height: 100px;
                    top: 20px;
                    right: 20px;
                }
            }

            @media (max-width: 480px) {
                .about-us {
                    padding: 20px 10px;
                }

                .content {
                    padding: 25px 15px;
                }

                /* .logo-section h1 {
                font-size: 1.2rem;
            }

            .logo {
                width: 65px;
                height: 65px;
            } */

                .texts p {
                    font-size: 0.92rem;
                    line-height: 1.8;
                    padding: 10px;
                }

                .overlay-text {
                    font-size: 1.3rem;
                    padding: 25px 15px;
                }

                .image-section {
                    height: 320px;
                    margin-bottom: 20px;
                }

                .content::before {
                    display: none;
                }
            }
          

.has-submenu {
  position: relative;
}

.submenu {
  position: absolute;
  top: 100%; 
  left: 0;
  background: #fff;
  display: none;
  list-style: none;
  margin: 0;
  padding: 10px 0;
  z-index: 9999;
  min-width: 220px;
  box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.has-submenu:hover .submenu {
  display: block;
}

.submenu li a {
  display: block;
  padding: 10px 20px;
  color: #333;
  text-decoration: none;
}

.submenu li a:hover {
  background-color: #f5f5f5;
  color: #B31E32;
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


    <!---------------------------New About us work ------------------------>

    <div class="about-us">

        <div class="image-section">
            <img src="products/urban_machinery_cover.jpeg" alt="Machinery">
            <div class="overlay-text">
                We have 50+ years of Experience in the Distribution Industry
            </div>
        </div>

        <div class="content">
            <div class="texts">
                <div class="logo-section">
                    <img src="products/Logo-01.jpg" alt="ITD Logo" class="logo">
                    <h1>INTERTRADE DISTRIBUTORS</h1>
                </div>

                <p>For over 50 years, our company Intertrade Distributors Pvt Ltd has been a cornerstone in the industrial machines and plant equipment sector. Our extensive experience and deep industry knowledge have established us as a trusted leader, with a reputation for excellence recognized across the nation. We proudly serve a diverse clientele, including some of the most prominent names in the industry, reflecting our unwavering commitment to quality and service.</p>

                <p>Our long-standing relationships with our suppliers are a testament to our reliability and industry expertise. As the sole dealers and distributors for leading global brands in the Pakistan market for many decades, we have fostered strong, mutually beneficial partnerships. These enduring relationships enable us to offer our clients unparalleled access to cutting-edge technology and also service and spares for old and obsolete machines.</p>

                <p>At Intertrade Distributors Pvt Ltd, we are dedicated to maintaining these valuable partnerships and delivering on our promises. Our team of technical experts are trained to service even the most advanced machines ensuring that our clients receive the highest level of support and satisfaction.</p>

                <p>We continue to set the standard for innovation, reliability, and trust in the industrial sector, striving to exceed expectations and support our customers with unmatched expertise and service.</p>
            </div>
        </div>


    </div>











    /* <!---------------------------------old about us section------------------->>

    <!-- <div class="about-us">
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
    </div> --> */




    <?php
    include 'includes/ContactForm.php';
    include("includes/footer.php");
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.querySelector('.nav-toggle');
            const navMenu = document.querySelector('.nav-menu');

            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('open');
            });

            const submenuToggles = document.querySelectorAll('header nav ul li');

            submenuToggles.forEach(function(submenuToggle) {
             // Apply hover JS only if viewport is below 992px (mobile/tablet)
if (window.innerWidth < 992) {
  document.querySelectorAll('.has-submenu').forEach(item => {
    item.addEventListener('mouseenter', () => {
      const s = item.querySelector('.submenu');
      if (s) s.style.display = 'block';
    });
    item.addEventListener('mouseleave', () => {
      const s = item.querySelector('.submenu');
      if (s) s.style.display = 'none';
    });
  });
}

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

            /* // Enhanced mobile menu toggle */
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