<?php
    // Get the base URL of the server (excluding the filename)
    $base_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $base_url .= "://" . $_SERVER['HTTP_HOST'];

    // Get the current directory path
    $current_directory = dirname($_SERVER['PHP_SELF']);

    // Combine the base URL with the current directory path
    $complete_path = $base_url . $current_directory;
    
    // Function to sanitize form inputs
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Function to handle contact form submission
    function handle_contact_form() {
        $name = sanitize_input($_POST['name'] ?? '');
        $phone = sanitize_input($_POST['phone'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $subject_prefix = sanitize_input($_POST['subject'] ?? '');

        $to = "rich@lazerwebsites.com";
        $message_body = "Name: $name\n";
        $message_body .= "Email: $email\n";
        $message = sanitize_input($_POST['contact_message'] ?? '');
        $subject = $subject_prefix . " - Contact Form Request";
        $message_body .= "Phone: $phone\n";
        $message_body .= "Message:\n$message";

        send_email($to, $subject, $message_body);
    }

    // Function to handle more information form submission
    function handle_more_info_form() {
        $name = sanitize_input($_POST['name'] ?? '');
        $phone = sanitize_input($_POST['phone'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $subject_prefix = sanitize_input($_POST['subject'] ?? '');

        $to = "rich@lazerwebsites.com";
        $message_body = "Name: $name\n";
        $message_body .= "Email: $email\n";
        $message = sanitize_input($_POST['more_info_message'] ?? '');
        $subject = $subject_prefix . " - More Information Request";
        $message_body .= "Phone: $phone\n";
        $message_body .= "Message:\n$message";

        send_email($to, $subject, $message_body);
    }

    // Function to handle band booking form submission
    function handle_band_booking_form() {
        $name = sanitize_input($_POST['name'] ?? '');
        $phone = sanitize_input($_POST['phone'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $subject_prefix = sanitize_input($_POST['subject'] ?? '');

        $to = "rich@lazerwebsites.com";
        $message_body = "Name: $name\n";
        $message_body .= "Phone: $phone\n";
        $message_body .= "Email: $email\n";
        $venue_name = sanitize_input($_POST['venue_name'] ?? '');
        $venue_type = sanitize_input($_POST['venue_type'] ?? '');
        $venue_date = sanitize_input($_POST['venue_date'] ?? '');
        $subject = $subject_prefix . " - Band Booking Request";
        $message_body .= "Venue Name: $venue_name\n";
        $message_body .= "Venue Type: $venue_type\n";
        $message_body .= "Venue Date: $venue_date";

        send_email($to, $subject, $message_body);
    }

    // Function to handle subscription form submission
    function handle_subscription_form() {
        $email = sanitize_input($_POST['email'] ?? '');

        $to = "rich@gmail.com";
        $subject = "Subscription Request";
        $message = "Email: $email";
        $headers = "From: $email";

        $send = mail($to, $subject, $message, $headers);

        if ($send) {
            echo "<script>alert('Thank you for subscribing.')</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }

    // Function to send email
    function send_email($to, $subject, $message_body) {
        $mail_sent = mail($to, $subject, $message_body);

        if ($mail_sent) {
            echo "<script>alert('Your message has been sent successfully.');</script>";
        } else {
            echo "<script>alert('Failed to send your message. Please try again later.');</script>";
        }
    }

    // Check if form is submitted and call appropriate function
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['contact_submit'])) {
            handle_contact_form();
        } elseif (isset($_POST['more_info_submit'])) {
            handle_more_info_form();
        } elseif (isset($_POST['book_band_submit'])) {
            handle_band_booking_form();
        } elseif (isset($_POST['subscribe'])) {
            handle_subscription_form();
        }
    }

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Nobles - Pop, Rock, Blues and Dance Band</title>
    <meta name="description" content="Description of your website/page">
    <meta name="keywords" content="comma, separated, keywords">
    <meta name="author" content="Your Name">
    <meta name="robots" content="index, follow"> <!-- Directives for search engine crawlers -->
    <meta name="revisit-after" content="7 days"> <!-- For search engine crawlers -->
    <meta name="generator" content="Your preferred HTML editor">
    <meta name="google" content="notranslate"> <!-- Prevent translation in Google search results -->
    <meta name="referrer" content="origin-when-cross-origin"> <!-- Set referrer policy -->
    <link rel="canonical" href="<?php echo $complete_path; ?>">
    
    <!-- Open Graph meta tags for better sharing on social media platforms -->
    <meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="Description of your website/page">
    <meta property="og:image" content="URL to your featured image">
    <meta property="og:url" content="URL of your webpage">
    <meta property="og:type" content="website">

    <!-- Twitter Card meta tags for better sharing on Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:title" content="Your Page Title">
    <meta name="twitter:description" content="Description of your website/page">
    <meta name="twitter:image" content="URL to your featured image">

    <!-- Place favicon.svg in the root directory -->
    <link rel="icon" type="image/icon" href="assets/img/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/app/css/nice-select.css">
    <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/app/css/slick.css">
    <link rel="stylesheet" href="assets/app/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/app/css/backtotop.css">
    <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/app/css/flaticon_musicly.css">
    <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/app/css/spacing.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
</head>

<body>


    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please 
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.
      </p>
    <![endif]-->

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- Preloader start -->
    <div id="preloader">
        <div class="line-loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="<?php echo $complete_path; ?>">
                                <img width="50" loading="lazy" src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="offcanvas__user mb-30 d-xxl-none">
                        <div class="user__acount">
                            <span>
                                <a href="javascript:void(0)"><i class="flaticon-user"></i></a>
                            </span>
                            <div class="user__name-mail">
                                <h4 class="user__name"><a href="javascript:void(0)">Johnson</a></h4>
                                <p class="user__mail">johnson@webmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas__search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search Here">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div> -->
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <div class="mobile-menu fix mb-30  d-xl-none"></div>
                    <div class="hr-1 mt-30 mb-30 d-xl-none"></div>
                    <!-- <div class="offcanvas__btn mb-30">
                        <a class="ms-border-btn" href=""><i class="fa-solid fa-plus"></i> List Your
                            Service</a>
                    </div> -->
                    <div class="offcanvas__social">
                        <div class="ms-footer-social mb-0">
                            <a href="https://www.linkedin.com/" title="Instagram" target="_blank">IN</a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area header-1 ms-header-fixed ms-bg-body">
            <div class="container-fluid ms-maw-1710">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mega__menu-wrapper p-relative">
                            <div class="header__main d-flex align-items-center justify-content-between">
                                <div class="header__logo pt-25 pb-25">
                                    <a href="<?php echo $complete_path; ?>">
                                        <img loading="lazy" width="80" src="assets/img/logo.png" alt="logo not found">
                                    </a>
                                </div>
                                <div class="d-none d-xxl-block"></div>
                                <div class="header__right">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu main-menu-ff-space">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li><!-- class="has-dropdown" -->
                                                        <a href="<?php echo $complete_path; ?>">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="about">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact">Contact us</a>
                                                    </li>
                                                </ul>
                                            </nav> 
                                            <!-- for wp -->
                                            <div class="header__hamburger ml-50 d-none">
                                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                                    <span>01</span>
                                                    <span>01</span>
                                                    <span>01</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header__action-inner d-flex align-items-center">
                                        <!-- <div class="enquiry__list ml-10 mr-10 ms-browse-act-wrap p-relative">
                                            <div class="ms-enquiry-box p-relative d-none d-xl-inline-flex">
                                                <a href="#"><i class="flaticon-star icon"></i> <span class="text">Videos</span> <span class="number">03</span></a>
                                            </div>
                                            <div class="ms-browse-act-item-wrap p-absolute">
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href=""><img loading="lazy" src="assets/img/genres/genres-03.jpg"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="">The
                                                                Sonics
                                                                Corporate
                                                                Band</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href=""><img loading="lazy" src="assets/img/genres/genres-04.jpg"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="">The
                                                                Northern
                                                                Lights</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="ms-song-item">
                                                    <div class="ms-song-img p-relative">
                                                        <a href=""><img loading="lazy" src="assets/img/genres/genres-05.jpg"
                                                                alt="brand-song"></a>
                                                    </div>
                                                    <div class="ms-song-content">
                                                        <h3 class="ms-song-title"><a href="">The
                                                                Sweet
                                                                The
                                                                Jets</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="header__btn">
                                            <a href="" class="ms-border-btn"><i
                                                    class="fa-regular fa-plus"></i>List
                                                Your Service</a>
                                        </div>
                                        <div class="user__acount d-none d-xxl-inline-flex">
                                            <span>
                                                <a href=""><i class="flaticon-user"></i></a>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="javascript:void(0)">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->
    <div class="ms-all-content ms-content-mobile-space pt-130">