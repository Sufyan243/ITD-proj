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
    <title>Laser Cutting</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style.css">
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
  /* --- THEME COLORS --- */
:root {
    --color-light: #FFF8EB; /* Creamy White - Main Background */
    --color-primary: #B31E32; /* Deep Red - Accent/Highlight */
    --color-dark: #2a2a2a; /* Dark Color - Header/Footer Background (Kept for consistency) */
    --color-text: #333; /* Standard Dark Text */
    --color-text-secondary: #555; /* Secondary Text/Labels */
    --color-button-bg: #1f4c75; /* Existing Blue for Call/Email */
}

/* --- BASE STYLES --- */
body {
    font-family: "Baskervville", serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: var(--color-light); /* Creamy White Background */
    color: var(--color-text);
    line-height: 1.6;
}

h2, h3 {
    color: var(--color-primary); /* Deep Red for main headings */
    font-weight: 700;
    margin-top: 0;
}

p {
    font-weight: 500;
    color: var(--color-text-secondary);
    margin-bottom: 1.5em;
}

a {
    color: var(--color-primary);
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    color: #ff8a00; /* Secondary hover color for links */
}

section {
    padding: 40px 5%;
    background-color: var(--color-light);
    max-width: 1200px;
    margin: 0 auto;
}

/* --- VIDEO/HERO SECTION --- */
.position-relative.hsg-about-video {
    width: 100%;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

video {
    width: 100%;
    height: auto;
    display: block;
    background: var(--color-light);
}

/* --- PRODUCTS/INFO SECTION --- */
.products {
    text-align: center;
}

.form-title {
    font-size: 2rem;
    margin-bottom: 30px;
    position: relative;
    color: var(--color-primary); /* Main heading in Deep Red */
    padding-bottom: 10px;
}

.form-title::after {
    content: '';
    width: 60px;
    height: 4px;
    background-color: var(--color-primary); /* Deep Red underline */
    position: absolute;
    left: 50%;
    bottom: 0px;
    transform: translateX(-50%);
    border-radius: 2px;
}

.model-title-p {
    color: var(--color-text);
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto 30px auto;
}

/* Contact Buttons (Modernized) */
.contact-btns-container {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    padding: 20px 0 40px 0;
    justify-content: center;
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

.btn-call, .btn-email {
    background-color: var(--color-primary); /* Using Primary Red */
    color: var(--color-light);
}

.btn-whatsapp {
    border-color: #25D366;
    color: #25D366;
    background-color: var(--color-light);
}

.btn-call:hover, .btn-email:hover {
    background-color: #8c1928; /* Slightly darker red on hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.btn-whatsapp:hover {
    background-color: #25D366;
    color: white;
    box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
}

/* Product Categories/Filter Buttons */
.product-categories {
    margin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

.product-categories button {
    padding: 10px 20px;
    font-size: 1rem;
    border: 1px solid var(--color-primary);
    background-color: var(--color-light);
    color: var(--color-primary);
    cursor: pointer;
    border-radius: 25px; /* Rounded buttons for modern look */
    transition: all 0.3s;
}

.product-categories button:hover,
.product-categories button.active {
    background-color: var(--color-primary);
    color: var(--color-light);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Product List */
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
    color: var(--color-text); /* Dark text for machine name */
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
    background-color: #8c1928;
    border-color: #8c1928;
}

.product-item .inquiry-button { 
    background-color: transparent;
    color: var(--color-primary);
    border: 2px solid var(--color-primary);
    cursor: pointer;
}

.product-item .inquiry-button:hover {
    background-color: var(--color-primary);
    color: var(--color-light);
}


/* --- WHATSAPP FLOAT --- */
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



/* --- RESPONSIVE DESIGN (Media Queries) --- */

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

    .contact-btns-container {
        flex-direction: column;
        align-items: center;
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
<body class="has-hero">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
    <img src="wp icon.png" alt="Chat with us on WhatsApp">
</a>
    <div class="position-relative hsg-about-video">
        <video data-src="New folder/Sonly.mp4"  preload="metadata" autoplay="autoplay" loop="loop" muted="muted" webkit-playsinline="webkit-playsinline" playsinline="playsinline" x5-playsinline="x5-playsinline" x-webkit-airplay="allow" src="New folder/Sonly.mp4" ></video>
    </div>
    <section id="injection" class="products">
        <h2 class="form-title" style="color: #153170;">About Youzu, Hwamda & SS Machinery</h2>
        <p class="model-title-p"  >These leading Chinese manufacturers specialize in high-precision injection molding solutions, integrating R&D, production, and global sales. With decades of experience, they provide advanced, energy-efficient, and automated molding systems serving diverse industries including packaging, automotive, electronics, and household appliances. Their focus on innovation, quality, and sustainability ensures reliable machines and complete molding line solutions for global clients.</p>
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
        <h2  class="form-title">Injection Moulding Machines</h2>
  <div class="product-categories">
    <button data-filter="all" class="active">All</button>
    <button data-filter="YZ">Youzu</button>
    <button data-filter="HW">Hwamda</button>
    <button data-filter="SS">SSmachinery</button>
</div>


<div class="product-list">
  <?php
  include 'db_connection.php';
  $category = 'injectionmoulding'; // category from cards table
  $result = mysqli_query($conn, "SELECT * FROM cards WHERE category='$category' ORDER BY id DESC");

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          // detect subcategory based on title
          $title = strtolower($row['title']);
        $title = strtolower($row['title']);
$subcategory = 'all';

if (str_contains($title, 'yz')) $subcategory = 'YZ';
elseif (str_contains($title, 'hw')) $subcategory = 'HW';
elseif (str_contains($title, 'ss')) $subcategory = 'SS';

          ?>
          <div class="product-item" data-category="<?= $subcategory ?>">
              <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
              <h3><?= htmlspecialchars($row['title']) ?></h3>
              <p><?= htmlspecialchars($row['description']) ?></p>
              <?php if (!empty($row['pdf'])): ?>
                <a href="<?= htmlspecialchars($row['pdf']) ?>" class="button" target="_blank">Learn More</a>
              <?php endif; ?>
              <button class="inquiry-button">Inquiry</button>
          </div>
          <?php
      }
  } else {
      echo "<p style='text-align:center;'>No Injection Moulding Machines available yet.</p>";
  }
  ?>
</div>

    </section>
 
             
<?php 
include 'includes/ContactForm.php'; 
include("includes/footer.php");
?>

 
  
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
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".product-categories button");
  const cards = document.querySelectorAll(".product-item");

  // make sure filter buttons don't submit forms (in case they are inside a form)
  buttons.forEach(b => b.setAttribute('type', 'button'));

  function applyFilter(filter) {
    cards.forEach(card => {
      const cat = card.getAttribute("data-category") || 'all';
      if (filter === "all" || cat === filter) {
        card.classList.remove('hidden-by-filter');
        // restore aria for accessibility
        card.setAttribute('aria-hidden', 'false');
      } else {
        card.classList.add('hidden-by-filter');
        card.setAttribute('aria-hidden', 'true');
      }
    });
  }

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const filter = btn.getAttribute("data-filter");
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      applyFilter(filter);
      // optional: focus the first visible card
      const first = document.querySelector('.product-item:not(.hidden-by-filter)');
      if (first) first.scrollIntoView({behavior: 'smooth', block: 'center'});
    });
  });

  // ensure initial state (if one button has .active in HTML)
  const activeBtn = document.querySelector('.product-categories button.active');
  if (activeBtn) applyFilter(activeBtn.getAttribute('data-filter'));
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



</html>