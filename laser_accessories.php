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
}

.btn-whatsapp:hover {
    background-color: #25D366;
    color: white;
    box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
}

        /* --- Product List Section (Laser Accessories) --- */
        .product-list-section {
            padding: 40px 20px;
            text-align: center;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .product-item {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            text-align: center;
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        /* No hover scale on image for product-item, as the whole card moves */

        .product-item h3 {
            font-size: 1.3rem;
            color: var(--text-color);
            margin-bottom: 5px;
        }

        .product-item p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
            height: 40px; /* fixed height for alignment */
            overflow: hidden;
        }

        .inquiry-button {
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: var(--background-color);
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .inquiry-button:hover {
            background-color: #8c1625;
        }

     
        
        /* Mobile/Responsiveness Adjustments */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            .about-text {
                font-size: 1rem;
            }
            .product-list {
                grid-template-columns: 1fr; /* Stack products on small screens */
            }
          
            .product-item img {
                height: 150px;
            }
            .product-item p {
                 height: auto; /* Allow text to flow naturally */
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
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
        <img src="wp icon.png" alt="Chat with us on WhatsApp">
    </a>

    <div class="position-relative hsg-about-video">
        <video data-src="New folder/about.mp4" preload="metadata" autoplay="autoplay" loop="loop" muted="muted" webkit-playsinline="webkit-playsinline" playsinline="playsinline" x5-playsinline="x5-playsinline" x-webkit-airplay="allow" src="New folder/about.mp4" ></video>
    </div>

    <div class="page-content">
        <section class="about-section">
            <h2 class="section-title"  style="color: #153170;">About HSG</h2>
            <p class="about-text">Founded in 2006, HSG Laser is a high-tech enterprise specializing in the research, development, production, and sales of intelligent metal shaping equipment. The company is dedicated to providing metal shaping and automated production line solutions to global customers.</p>
            
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
                <div class="product-item">
                    <img src="products/laser accessories/ceramic body.webp" alt="Ceramic Body">
                    <h3>Ceramic Body</h3>
                    <p>Essential component for stable and precise laser cutting head operation.</p>
                    <button class="inquiry-button">Inquiry</button>
                </div>
                <div class="product-item">
                    <img src="products/laser accessories/focus lens.avif" alt="Focus Lens">
                    <h3>Focus Lens</h3>
                    <p>High-quality optical lens for concentrating the laser beam for optimal cut.</p>
                    <button class="inquiry-button">Inquiry</button>
                </div>
                <div class="product-item">
                    <img src="products/laser accessories/nozzels.jpg" alt="Nozzles">
                    <h3>Nozzles</h3>
                    <p>Designed for various materials and thicknesses to ensure clean, efficient cuts.</p>
                    <button class="inquiry-button">Inquiry</button>
                </div>
                <div class="product-item">
                    <img src="products/laser accessories/Protection lens.webp" alt="Protection Lens">
                    <h3>Protection Lens</h3>
                    <p>Shields delicate focusing optics from spatter and debris.</p>
                    <button class="inquiry-button">Inquiry</button>
                </div>
            </div>
        </section>

        <?php 
include 'includes/ContactForm.php';
include 'includes/footer.php';?>
    </div>

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
</body>
</html>