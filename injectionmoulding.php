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
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
    padding-top: 20px;
}

.product-item {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    width: calc(33% - 30px); /* 3 items per row on desktop */
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.product-item img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 15px;
}

.product-item h3 {
    font-size: 1.2rem;
    color: var(--color-text);
    margin-bottom: 10px;
}

.product-item p {
    font-size: 0.95rem;
    color: var(--color-text-secondary);
    min-height: 40px; /* Ensures consistent height */
}

.product-item .button, .inquiry-button {
    display: inline-block;
    padding: 10px 15px;
    margin: 5px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 0.9rem;
    transition: background-color 0.3s, color 0.3s;
}

.product-item .button {
    background-color: var(--color-primary);
    color: var(--color-light);
}

.product-item .button:hover {
    background-color: #8c1928;
}

.inquiry-button {
    background-color: transparent;
    color: var(--color-primary);
    border: 1px solid var(--color-primary);
    cursor: pointer;
}

.inquiry-button:hover {
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

/* Tablet/Small Desktop */
@media (max-width: 1024px) {
    .product-item {
        width: calc(50% - 20px); /* 2 items per row */
    }
}

/* Mobile */
@media (max-width: 768px) {
  
    /* Main Content Adjustments */
    section {
        padding: 30px 4%;
    }
    
  
    
    .product-item {
        width: 100%; /* 1 item per row */
    }
    
    .contact-btns-container {
        flex-direction: column;
        align-items: center;
    }
    
    .contact-btn {
        width: 100%;
        min-width: 100px;
    }

 
}

/* Small Mobile */
@media (max-width: 480px) {
    .form-title {
        font-size: 1.5rem;
    }
    .product-categories button {
        padding: 8px 15px;
        font-size: 0.85rem;
    }
    .model-title-p {
        font-size: 0.95rem;
    }
}
      </style>
</head>
<body>
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
        <h2 class="form-title" style="color: #153170;">About SONLY</h2>
        <p class="model-title-p"  >Sonly was founded in 1998. It is a machinery manufacturer integrating development, production and sales, and is also a member of the China Plastic Machinery Industry Association. Shouli covers an area of ​​60,000 square meters, has advanced precision processing equipment and a professional R&D management team, and has an annual production capacity of 5,000 units.</p>
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
    <button data-filter="uts">UTS</button>
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
          $subcategory = 'uts';
          if (!str_contains($title, 'uts')) $subcategory = 'all';
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




</html>