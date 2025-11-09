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
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16630851493"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-16630851493');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About HSG</title>
        <link rel="stylesheet" href="header.css">
 
     <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Define color variables based on your theme */
        :root {
            --primary-color: #B31E32; /* Deep Red/Maroon */
            --background-color: #FFF8EB; /* Light Creamy White */
            --text-color: #333333; /* Dark Grey for contrast */
            --light-accent: #e5e0d4; /* A slightly darker cream for subtle borders/separators */
        }

        /* Global Reset and Typography */
        body {
    font-family: "Baskervville", serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--primary-color);
            font-weight: 700;
            margin-top: 0;
        }

        /* Main Content Container */
     .page-content {
    max-width: 1361px;
    margin: 0 auto;
    width: 100%;
    padding: 0 20px;
    box-sizing: border-box;
}

        /* --- Hero Video Section (Keep as is for functionality) --- */
        .position-relative.hsg-about-video {
            width: 100%;
            height: 50vh; /* Controlled height for modern look */
            overflow: hidden;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures video covers the area without distortion */
            display: block;
        }

        /* --- About Section (Products is repurposed as the main content) --- */
        .about-section {
            padding: 60px 20px;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
            color: var(--primary-color);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80%;
            height: 4px;
            background-color: var(--primary-color);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .about-text {
            max-width: 800px;
            margin: 20px auto 40px;
            font-size: 1.1rem;
            color: var(--text-color);
            font-weight: 400;
        }

        /* --- Contact Buttons --- */
        .contact-btns-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }

      .contact-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 25px;
    font-size: 1rem;
    font-weight: bold;
    border: 2px solid transparent;
    cursor: pointer;
    border-radius: 8px;
    transition: all 0.3s ease;
    text-decoration: none;
    min-width: 180px;
    text-align: center;
}
        /* Overriding existing button colors with the theme */
      
.btn-call, .btn-email {
   background-color: var(--primary-color);
            color: var(--background-color);
            border-color: var(--primary-color);
}
       .btn-whatsapp {
    border-color: #25D366;
    color: #25D366;
    background-color: var( --background-color);
}

    
.btn-call:hover, .btn-email:hover {
    background-color: #8c1928; /* Slightly darker red on hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    color: #e5e0d4;
}

.btn-whatsapp:hover {
    background-color: #25D366;
    color: white;
    box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
}

        /* --- Product List Section (Laser Accessories) --- */
     /* --- Product List Section --- */
.product-list-section {
    padding: 40px 0;
    text-align: center;
}

.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    justify-items: center;
    margin: 0 auto;
    width: 100%;
    max-width: 1200px;
    padding: 0;
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
            color: var(--text-color); /* Dark text for machine name */
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

        .product-item .button-group {
            margin-top: auto; 
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .inquiry-button {
            background-color: var(--primary-color);
            color: var(--background-color);
            padding: 10px 15px;
            border: 2px solid var(--primary-color);
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: bold;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .inquiry-button:hover {
            background-color: #8c1625;
            border-color: #8c1625;
        }

     
        
        /* Mobile/Responsiveness Adjustments */
        @media (max-width: 992px) {
            .product-list {
                /* On medium screens, 2 columns of min 300px width */
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            .about-text {
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

            .inquiry-button {
                padding: 8px 10px;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .product-list {
                grid-template-columns: 1fr; /* Single column on mobile */
            }
            
            .inquiry-button {
                padding: 8px 12px;
                font-size: 0.85rem;
            }
        }

        /* Float WhatsApp Button Style */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }
        .whatsapp-float img {
            width: 40px;
            height: 40px;
        }
        @media (max-width: 768px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
            }
            .whatsapp-float img {
                width: 30px;
                height: 30px;
            }
        }
        
    </style>
</head>
<body class="has-hero">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
        <img src="wp icon.png" alt="Chat with us on WhatsApp">
    </a>

   <div class="position-relative hsg-about-video">
  <img src="products/lasercuttingbg.jpg" alt="Laser Accessories" style="width:100%; height:auto; display:block; object-fit:cover;">
</div>


    <div class="page-content">
        <section class="about-section">
            <h2 class="section-title"  style="color: #153170;">Glorystar Laser</h2>
            <p class="about-text">Glorystar Laser is a leading high-tech enterprise specializing in the research, development, and manufacturing of advanced fiber laser cutting machines. With over 20 years of innovation, the company provides intelligent metal cutting and automated production solutions used across more than 100 countries.</p>
            
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
        </section>

        <section class="product-list-section">
            <h2 class="section-title">Laser Cutting Accessories</h2>
          <div class="product-list">
  <?php
  include 'db_connection.php';
  $category = 'laser_accessories'; // category column in your cards table
  $result = mysqli_query($conn, "SELECT * FROM cards WHERE category='$category' ORDER BY id DESC");

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="product-item">
        <img src="<?= htmlspecialchars($row['image']); ?>" alt="<?= htmlspecialchars($row['title']); ?>">
        <h3><?= htmlspecialchars($row['title']); ?></h3>

        <?php if (!empty($row['description'])): ?>
          <p class="product-description"><?= nl2br(htmlspecialchars($row['description'])); ?></p>
        <?php endif; ?>

        <button class="inquiry-button">Inquiry</button>
      </div>
      <?php
    }
  } else {
    echo "<p style='text-align:center;'>No mold products available yet.</p>";
  }
  ?>
</div>
        </section>

<?php include 'includes/ContactForm.php'; ?>
</div> <!-- close page-content here -->

<?php include 'includes/footer.php'; ?>

    </div>
   <script>
            // Mobile menu toggle
const navToggle = document.querySelector('.nav-toggle');
const mobilePanel = document.getElementById('mobile-panel');
const navOverlay = document.querySelector('.nav-overlay');
const mobileClose = document.querySelector('.mobile-close');

function openMenu() {
  navToggle.setAttribute('aria-expanded', 'true');
  mobilePanel.setAttribute('aria-hidden', 'false');
  navOverlay.classList.add('active');
  document.body.classList.add('nav-open');
}

function closeMenu() {
  navToggle.setAttribute('aria-expanded', 'false');
  mobilePanel.setAttribute('aria-hidden', 'true');
  navOverlay.classList.remove('active');
  document.body.classList.remove('nav-open');
}

navToggle.addEventListener('click', openMenu);
mobileClose.addEventListener('click', closeMenu);
navOverlay.addEventListener('click', closeMenu);
            document.addEventListener('DOMContentLoaded', function() {
                new Swiper('.testimonials-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2
                        },
                        1024: {
                            slidesPerView: 3
                        }
                    }
                });
            });
        </script>
    <script>
        // The inquiry button script is kept from the original
        document.addEventListener("DOMContentLoaded", () => {
          document.querySelectorAll(".inquiry-button").forEach(button => {
            button.addEventListener("click", () => {
              window.open("https://wa.me/923008227711", "_blank");
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btn-secondary').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    document.querySelector('#request-quote').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>