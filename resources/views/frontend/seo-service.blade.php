<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Webonix</title>
    <meta name="author" content="SEO Services | Professional SEO Agency USA | Webonix Tech">
    <meta name="description"
        content="We are a leading professional SEO agency in the USA, providing expert SEO services to increase online visibility, drive organic traffic, and boost business growth.">
    <meta name="keywords" content="agency, business, one page">

    <!-- FAVICON FILES -->
    <link href="{{ asset('public/frontend/assets/images/icons/apple-touch-icon-144-precomposed.png') }}"
        rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('public/frontend/assets/images/icons/apple-touch-icon-120-precomposed.png') }}"
        rel="apple-touch-icon" sizes="120x120">
    <link href="{{ asset('public/frontend/assets/images/icons/apple-touch-icon-76-precomposed.png') }}"
        rel="apple-touch-icon" sizes="76x76">
    <link href="{{ asset('public/frontend/assets/images/icons/favicon.png') }}" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS FILES -->

    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/css_landingpage/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/fonts/iconfonts.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/css_landingpage/plugins.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/css_landingpage/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/css_landingpage/responsive.css') }}">

    <link rel="stylesheet" href=" {{ asset('public/frontend/assets/css_landingpage/color.css') }}">

</head>

<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-loader">Loading...</div>
            </div>
        </div>
        <!-- preloader ends -->

        <!-- Small Devices Header
============================================= -->
        <div class="dtr-responsive-header fixed-top">
            <div class="container">

                <!-- small devices logo -->
                <a href="index.html"><img src="{{ asset('public/frontend/assets/images/image.png') }}" alt="logo"
                        class="responsive_header"></a>
                <!-- small devices logo ends -->

                <!-- menu button -->
                <!-- <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button> -->
                <a href="#contact" class="dtr-btn btn-red dtr-btn-right-icon dtr-scroll-link dtr-ml-30">1 800 234 567 <i
                        class="icon-phone-call"></i></a>
            </div>
            <div class="dtr-responsive-header-menu"></div>
        </div>
        <!-- Small Devices Header ends
============================================= -->

        <!-- Header
============================================= -->
        <header id="dtr-header-global" class="fixed-top trans-header">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- header left starts -->
                    <div class="dtr-header-left">

                        <!-- logo -->
                        <a class="logo-default dtr-scroll-link" href="#home"><img
                                src="{{ asset('public/frontend/assets/images/logo-light.png') }}" alt="logo"></a>

                        <!-- logo on scroll -->
                        <a class="logo-alt dtr-scroll-link" href="#home"><img
                                src="{{ asset('public/frontend/assets/images/image.png') }}" alt="logo"></a>

                        <!-- logo on scroll ends -->

                    </div>
                    <!-- header left ends -->

                    <!-- menu starts-->
                    <!-- <div class="dtr-header-right ml-auto">
                    <div class="main-navigation dtr-menu-light">
                        <ul class="sf-menu dtr-scrollspy dtr-nav light-nav-on-load dark-nav-on-scroll">
                            <li> <a class="nav-link" href="#home">Home</a> </li>
                            <li> <a class="nav-link" href="#services">Services</a> </li>
                            <li> <a class="nav-link" href="#about">About</a> </li>
                            <li> <a class="nav-link" href="#pricing">Pricing</a> </li>
                            <li> <a class="nav-link" href="#advantage">Why us?</a> </li>
                            <li> <a class="nav-link" href="#blog">Blog</a> </li>
                            <li> <a class="nav-link" href="#contact">Contact</a> </li>
                        </ul>
                    </div>
                </div> -->
                    <!-- menu ends -->

                    <!-- header button starts -->
                    <a href="tel:+1 858-888-9215"
                        class="dtr-btn btn-red dtr-btn-right-icon dtr-scroll-link dtr-ml-30">+1 858-888-9215 <i
                            class="icon-phone-call"></i></a>
                    <!-- header button ends -->

                </div>
            </div>
        </header>
        <!-- header ends
================================================== -->

        <!-- == main content area starts == -->
        <div id="dtr-main-content">

            <!-- hero section starts
================================================== -->
            <section id="home" class="dtr-section dtr-section-with-bg dtr-hero-section-top-padding bg-blue"
                style="background-image: url{{ asset('public/frontend/assets/images/white-shape-bg.png') }};">


                <!-- wrapping div for background bottom curve stripes image - easy to change color - no need to edit image - refer help doc -->
                <div class="dtr-bottom-shape-img"
                    style="background-image: url{{ asset('public/frontend/assets/images/hero-bottom.svg') }};">

                    <div class="container">

                        <!--===== row 1 starts =====-->
                        <div class="row d-flex align-items-center dtr-pb-100">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-6">

                                <!-- intro text -->
                                <h1 class="color-white">Grow Your Business with Professional SEO Agency
                                </h1>
                                <p class="color-white-muted">Boost your business with Webonix, the leading professional
                                    SEO Agency in the USA, offering strategic optimization to improve rankings, increase
                                    organic traffic, and attract customers who are ready to convert.</p>
                                <!-- button -->
                                <a href="contact.html" class="dtr-btn btn-red dtr-scroll-link dtr-mt-30 dtr-mr-40">Get
                                    Started Now</a>

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-6 small-device-space">

                                <!--=== img slider - 1col starts ===-->
                                <div class="dtr-slick-slider dtr-img-slider-1col dtr-rounded-img">
                                    <!-- img 1 -->
                                    <div> <img src=" {{ asset('public/frontend/assets/images/blogpost-img1.jpg') }}"
                                            alt="image"> </div>

                                    <!-- img 2 -->
                                    <div> <img src="{{ asset('public/frontend/assets/images/blogpost-img2.jpg') }}"
                                            alt="image"> </div>

                                    <!-- img 3 -->
                                    <div> <img src="{{ asset('public/frontend/assets/images/blogpost-img3.jpg') }}"
                                            alt="image"> </div>

                                </div>
                                <!--=== img slider - 1col ends ===-->

                            </div>
                            <!-- column 2 ends -->

                        </div>
                        <!--===== row 1 ends =====-->

                    </div>
                </div>
            </section>
            <!-- hero section ends
================================================== -->

            <!-- features section starts
================================================== -->
            <section id="about" class="dtr-section dtr-pt-150 dtr-pb-100">
                <div class="container">

                    <!-- heading starts -->
                    <div class="dtr-styled-heading text-center">
                        <h2>Foundation First: Basics of SEO</h2>
                        <p>Build a strong foundation for higher rankings with technical SEO that improves visibility,
                            boosts performance, and drives consistent traffic growth.</p>
                    </div>
                    <!-- heading ends -->

                    <!--== row starts ==-->
                    <div class="row dtr-pt-10">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                                    class="dtr-img-feature-circle bg-light-red"></span><i
                                    class="fa-solid fa-layer-group"></i></span>
                            <h4 class="dtr-img-feature-heading">Full Crawlability</h4>
                            <p>Search engines access every page smoothly for error-free indexing. </p>
                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                                    class="dtr-img-feature-circle bg-light-red"></span><i
                                    class="fa-solid fa-mobile-screen"></i></span>
                            <h4 class="dtr-img-feature-heading">Mobile Optimized </h4>
                            <p>Your website performs perfectly across all modern smartphones.</p>
                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4 dtr-img-feature"> <span class="dtr-img-feature-img"><span
                                    class="dtr-img-feature-circle bg-light-red"></span><i
                                    class="fa-solid fa-gauge-high"></i></span>
                            <h4 class="dtr-img-feature-heading">High Speed</h4>
                            <p>Faster loading pages improve ranking and user engagement. </p>
                        </div>
                        <!-- column 3 ends -->

                    </div>
                    <!--== row ends ==-->

                </div>
            </section>
            <!-- features section ends
================================================== -->


            <!-- service boxes section starts
================================================== -->
            <section id="service" class="dtr-pt-100 dtr-pb-70">
                <div class="container">

                    <!-- heading starts -->
                    <div class="dtr-styled-heading text-center">
                        <h2>What We Offer</h2>
                        <p>We deliver result-driven SEO solutions built to improve your search rankings, increase
                            organic traffic, and generate consistent leads for your business in the USA. </p>
                    </div>
                    <!-- heading ends -->

                    <!--== row starts ==-->
                    <div class="row d-flex align-items-stretch">

                        <!-- box 1 starts -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">1</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="icon-users1"></i></span>
                                <h4> On-Page Optimization</h4>
                                <p>We optimize page titles, meta descriptions, internal links, and content structure to
                                    improve rankings.</p>
                            </div>
                        </div>
                        <!-- box 1 ends -->

                        <!-- box 2 starts -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">2</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="icon-feather1"></i></span>
                                <h4>Keyword Strategy</h4>
                                <p>We target high-intent keywords that attract users searching for your products or
                                    services.</p>
                            </div>
                        </div>
                        <!-- box 2 ends -->

                        <!-- box 3 starts -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">3</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="icon-watch"></i></span>
                                <h4>Technical SEO Audit</h4>
                                <p>We fix crawl errors, indexing issues, and site architecture to boost search
                                    performance.</p>
                            </div>
                        </div>
                        <!-- box 3 ends -->

                        <!-- box 4 starts -->
                        <div class="col-12 col-sm-6 col-lg-4  d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">4</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="icon-sun2"></i></span>
                                <h4> Quality Backlink Building</h4>
                                <p>We build relevant, high-authority backlinks that increase your domain authority and
                                    credibility.</p>
                            </div>
                        </div>
                        <!-- box 4 ends -->

                        <!-- box 5 starts -->
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">5</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="icon-shield"></i></span>
                                <h4> Local SEO Optimization</h4>
                                <p>We optimize your Google Business Profile and local listings to boost local
                                    visibility.</p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="dtr-servicebox"> <span class="dtr-servicebox-number">6</span> <span
                                    class="dtr-servicebox-img color-blue"><i class="fa-solid fa-book"></i></span>
                                <h4>Content Optimization</h4>
                                <p>We refine your website content to be engaging, keyword-focused, and search friendly.
                                </p>
                            </div>
                        </div>
                        <!-- box 5 ends -->

                    </div>
                    <!--== row ends ==-->

                </div>
            </section>
            <!-- service boxes section ends
================================================== -->



            <!-- pricing section starts
================================================== -->
            <section id="pricing" class="dtr-section dtr-py-100">
                <div class="container">

                    <!-- heading starts -->
                    <div class="dtr-styled-heading text-center">
                        <h2>Our SEO Pricing</h2>
                        <p>At Webonix Tech, we offer flexible SEO plans designed to drive traffic, improve rankings, and
                            help your business grow online. Choose the plan that best suits your needs:</p>
                    </div>
                    <!-- heading ends -->

                    <!--== row starts ==-->
                    <div class="row dtr-pt-10">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-4">

                            <!--== pricing 1 starts ==-->
                            <div class="dtr-pricing bg-dark color-white">
                                <h3 class="dtr-pricing-heading border-white-muted">Standard Plan</h3>
                                <p class="dtr-price-subtext color-white-muted">Starting at</p>
                                <p class="dtr-price">$29.99</p>
                                <p class="dtr-price-subtext color-white-muted">per month</p>
                                <a href="#" class="dtr-btn btn-flat-white dtr-mt-30">Book Now</a>

                                <!-- collapse content starts -->
                                <div class="dtr-pricing-details">
                                    <p> <a class="dtr-pricing-details-title" data-toggle="collapse" href="#pricing1"
                                            role="button" aria-expanded="false" aria-controls="pricing1"> See full
                                            details </a> </p>
                                    <div class="collapse" id="pricing1">
                                        <ul class="dtr-list-pricing">
                                            <li>Keyword Research & Targeting</li>
                                            <li>On-page SEO Optimization</li>
                                            <li>Basic SEO Audits & Recommendations</li>
                                            <li>Monthly Performance Reports</li>
                                            <li>Cost-effective and scalable</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- collapse content ends -->

                            </div>
                            <!--== pricing 1 ends ==-->

                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-4">

                            <!--== pricing 2 starts ==-->
                            <div class="dtr-pricing bg-blue color-white">
                                <!-- popular label -->
                                <span class="dtr-pricing-label-hook"></span>
                                <div class="dtr-pricing-label bg-red">
                                    <p>Popular</p>
                                </div>
                                <h3 class="dtr-pricing-heading border-white-muted">Silver Plan</h3>
                                <p class="dtr-price-subtext color-white-muted">Starting at</p>
                                <p class="dtr-price">$49.99</p>
                                <p class="dtr-price-subtext color-white-muted">per month</p>
                                <a href="#" class="dtr-btn btn-flat-white dtr-mt-30">Book Now</a>

                                <!-- collapse content starts -->
                                <div class="dtr-pricing-details">
                                    <p> <a class="dtr-pricing-details-title" data-toggle="collapse" href="#pricing2"
                                            role="button" aria-expanded="false" aria-controls="pricing2"> See full
                                            details </a> </p>
                                    <div class="collapse" id="pricing2">
                                        <ul class="dtr-list-pricing">
                                            <li>Everything in the Standard Plan</li>
                                            <li>Local SEO Optimization</li>
                                            <li>Advanced Keyword Analysis</li>
                                            <li>Competitor Analysis</li>
                                            <li>Weekly Progress Tracking</li>
                                            <li>Link Building Strategy</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- collapse content ends -->

                            </div>
                            <!--== pricing 2 ends ==-->

                        </div>
                        <!-- column 2 ends -->

                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4">

                            <!--== pricing 3 starts ==-->
                            <div class="dtr-pricing bg-dark color-white">
                                <h3 class="dtr-pricing-heading border-white-muted">Gold Plan</h3>
                                <p class="dtr-price-subtext color-white-muted">Starting at </p>
                                <p class="dtr-price">$99.99</p>
                                <p class="dtr-price-subtext color-white-muted">per month</p>
                                <a href="#" class="dtr-btn btn-flat-white dtr-mt-30">Book Now</a>

                                <!-- collapse content starts -->
                                <div class="dtr-pricing-details">
                                    <p> <a class="dtr-pricing-details-title" data-toggle="collapse" href="#pricing3"
                                            role="button" aria-expanded="false" aria-controls="pricing3"> See full
                                            details </a> </p>
                                    <div class="collapse" id="pricing3">
                                        <ul class="dtr-list-pricing">
                                            <li>Everything in the Silver Plan</li>
                                            <li>Technical SEO (Site Speed, Mobile Optimization)</li>
                                            <li>In-depth Content SEO & Blog Optimization</li>
                                            <li>High-Quality Backlink Strategy</li>
                                            <li>Conversion Rate Optimization (CRO)</li>
                                            <li>Personalized SEO Strategy</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- collapse content ends -->

                            </div>
                            <!--== pricing 3 ends ==-->

                        </div>
                        <!-- column 3 ends -->

                    </div>
                    <!--== row ends ==-->

                </div>
            </section>
            <!-- pricing section ends
================================================== -->


            <!-- testimonial section starts
================================================== -->
            <section class="dtr-section dtr-py-100 dtr-section-with-bg"
                style="background-image: url {{ asset('public/frontend/assets/images/section-bg-img2.jpg') }};">
                <!-- blue overlay -->

                <div class="dtr-overlay dtr-overlay-blue"></div>
                <div class="container dtr-overlay-content">

                    <!--===== row 1 starts =====-->
                    <div class="row d-flex align-items-center">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6"> <img
                                src="{{ asset('public/frontend/assets/images/testimonial-graphics.png') }}"
                                alt="image"> </div>


                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6">
                            <h2 class="color-white text-center">What Our Clients Say</h2>
                            <div class="dtr-px-30 dtr-pt-20">

                                <!--===== testimonial slider starts =====-->
                                <div class="dtr-slick-slider dtr-testimonial-slider dtr-slick-has-dots color-white">

                                    <!--== slide 1 starts ==-->
                                    <div class="dtr-testimonial">
                                        <div class="dtr-testimonial-content clearfix">
                                            <!-- client info -->
                                            <div class="dtr-client-info clearfix">
                                                <div class="dtr-testimonial-user"><span
                                                        class="dtr-testimonial-icon"></span> <img
                                                        src="  {{ asset('public/frontend/assets/images/user-1.jpg') }}"
                                                        alt="image"> </div>

                                                <div class="dtr-testimonial-user-info">
                                                    <h6 class="dtr-client-name">Ryan Crawford</h6>
                                                    <span class="dtr-client-job color-white-muted">Business Owner
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- client info ends -->
                                            <p> "Webonix Tech's SEO strategies have completely transformed our website's
                                                performance. We’ve seen a significant increase in organic traffic, which
                                                has directly impacted our bottom line." </p>
                                            <!-- <p class="dtr-testimonial-tagline bg-white"><a href="#" class="color-blue"><i class="icon-facebook"></i>facebook.com/chris_kram</a></p> -->
                                        </div>
                                    </div>
                                    <!--== slide 1 ends ==-->

                                    <!--== slide 2 starts ==-->
                                    <div class="dtr-testimonial">
                                        <div class="dtr-testimonial-content clearfix">
                                            <!-- client info -->
                                            <div class="dtr-client-info clearfix">
                                                <div class="dtr-testimonial-user"><span
                                                        class="dtr-testimonial-icon"></span> <img
                                                        src=" {{ asset('public/frontend/assets/images/user-2.jpg') }}"
                                                        alt="image"> </div>

                                                <div class="dtr-testimonial-user-info">
                                                    <h6 class="dtr-client-name">Sarah Williams</h6>
                                                    <span class="dtr-client-job color-white-muted">Brand Manager</span>
                                                </div>
                                            </div>
                                            <!-- client info ends -->
                                            <p>"Partnering with Webonix Tech was the best decision for our business.
                                                Their tailored SEO approach has delivered remarkable improvements in our
                                                site’s ranking and visibility." </p>
                                            <!-- <p class="dtr-testimonial-tagline bg-white color-blue"><i class="icon-twitter"></i>twitter.com/roslyn_tryniski</p> -->
                                        </div>
                                    </div>
                                    <!--== slide 2 ends ==-->

                                    <!--== slide 3 starts ==-->
                                    <div class="dtr-testimonial">
                                        <div class="dtr-testimonial-content clearfix">
                                            <!-- client info -->
                                            <div class="dtr-client-info clearfix">
                                                <div class="dtr-testimonial-user"><span
                                                        class="dtr-testimonial-icon"></span> <img
                                                        src=" {{ asset('public/frontend/assets/images/user-3.jpg') }}"
                                                        alt="image"> </div>
                                                <div class="dtr-testimonial-user-info">
                                                    <h6 class="dtr-client-name">Michael Brown</h6>
                                                    <span class="dtr-client-job color-white-muted"> CEO, Tech
                                                        Solutions</span>
                                                </div>
                                            </div>
                                            <!-- client info ends -->
                                            <p>"Webonix Tech provided exceptional support and expertise. Their SEO
                                                efforts have not only improved our search engine rankings but also
                                                helped drive relevant traffic to our website."</p>
                                            <!-- <p class="dtr-testimonial-tagline bg-white color-blue"><i class="icon-instagram"></i>instagram.com/tyrese.harper</p> -->
                                        </div>
                                    </div>
                                    <!--== slide 3 ends ==-->

                                    <!--== slide 4 starts ==-->
                                    <div class="dtr-testimonial">
                                        <div class="dtr-testimonial-content clearfix">
                                            <!-- client info -->
                                            <div class="dtr-client-info clearfix">
                                                <div class="dtr-testimonial-user"><span
                                                        class="dtr-testimonial-icon"></span> <img
                                                        src=" {{ asset('public/frontend/assets/images/user-6.jpg') }}"
                                                        alt="image"> </div>
                                                <div class="dtr-testimonial-user-info">
                                                    <h6 class="dtr-client-name">Olivia Clark</h6>
                                                    <span class="dtr-client-job color-white-muted"> Lead Content
                                                        Strategist</span>
                                                </div>
                                            </div>
                                            <!-- client info ends -->
                                            <p>"Thanks to Webonix Tech, our content is now optimized for search engines,
                                                helping us reach a larger audience and engage with potential customers
                                                more effectively."</p>
                                            <!-- <p class="dtr-testimonial-tagline bg-white color-blue"><i class="icon-telegram-plane"></i>https://t.me/s/christina_b</p> -->
                                        </div>
                                    </div>
                                    <!--== slide 4 ends ==-->

                                    <!--== slide 5 starts ==-->
                                    <div class="dtr-testimonial">
                                        <div class="dtr-testimonial-content clearfix">
                                            <!-- client info -->
                                            <div class="dtr-client-info clearfix">
                                                <div class="dtr-testimonial-user"> <span
                                                        class="dtr-testimonial-icon"></span><img
                                                        src=" {{ asset('public/frontend/assets/images/user-7.jpg') }}"
                                                        alt="image"> </div>
                                                <div class="dtr-testimonial-user-info">
                                                    <h6 class="dtr-client-name">James Lee</h6>
                                                    <span class="dtr-client-job color-white-muted">Director of
                                                        E-commerce</span>
                                                </div>
                                            </div>
                                            <!-- client info ends -->
                                            <p>"We’ve seen fantastic results since working with Webonix Tech. Our site
                                                is now ranking higher, and we’ve noticed a steady growth in qualified
                                                leads and conversions." </p>
                                            <!-- <p class="dtr-testimonial-tagline bg-white color-blue"><i class="icon-pinterest"></i>pinterest.com/ryanC</p> -->
                                        </div>
                                    </div>
                                    <!--== slide 5 ends ==-->

                                </div>
                                <!--===== testimonial slider ends =====-->
                            </div>
                        </div>
                        <!-- column 2 ends -->

                    </div>
                    <!--===== row 1 ends =====-->

                </div>
            </section>
            <!-- testimonial section ends
================================================== -->


            <!-- about section starts
================================================== -->
            <section id="about" class="dtr-section dtr-pt-100 dtr-pb-150 dtr-section-with-bg ">
                <!-- blue overlay -->
                <!-- style="background-image: url(assets/images/section-bg-img1.jpg);" -->
                <!-- <div class="dtr-overlay dtr-overlay-blue"></div> -->
                <div class="container dtr-overlay-content">

                    <!-- row starts -->
                    <div class="row align-items-center">

                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 col-lg-5">
                            <h2 class="color-black">Frequently Asked Questions</h2>
                            <p class="color-black-muted">Our SEO services are designed to boost your website’s
                                visibility, driving traffic and increasing conversions.</p>

                            <!--== accordion starts ==-->
                            <div class="dtr-mt-30 color-black">
                                <div class="dtr-accordion accordion" id="accord-index1">

                                    <!-- accordion tab 1 starts -->
                                    <div class="card">
                                        <div class="card-header" id="accord-index1-heading1">
                                            <h4>
                                                <button class="dtr-btn accordion-btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#accord-index1-collapse1"
                                                    aria-expanded="false" aria-controls="accord-index1-collapse1"> How
                                                    can SEO help my business?</button>
                                            </h4>
                                        </div>
                                        <div id="accord-index1-collapse1" class="collapse"
                                            aria-labelledby="accord-index1-heading1" data-parent="#accord-index1">
                                            <div class="card-body">SEO (Search Engine Optimization) improves your
                                                website's visibility on search engines like Google, making it easier for
                                                potential customers to find you. With targeted keywords, content
                                                optimization, and link-building, SEO can drive organic traffic to your
                                                site, resulting in higher conversion rates and long-term growth.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 1 ends -->

                                    <!-- accordion tab 2 starts -->
                                    <div class="card">
                                        <div class="card-header" id="accord-index1-heading2">
                                            <h4>
                                                <button class="dtr-btn accordion-btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#accord-index1-collapse2"
                                                    aria-expanded="false" aria-controls="accord-index1-collapse2">What
                                                    SEO services do you offer?</button>
                                            </h4>
                                        </div>
                                        <div id="accord-index1-collapse2" class="collapse"
                                            aria-labelledby="accord-index1-heading2" data-parent="#accord-index1">
                                            <div class="card-body">We offer comprehensive SEO services, including
                                                on-page SEO (optimizing content, meta tags, and images), off-page SEO
                                                (building backlinks), technical SEO (improving speed and mobile
                                                responsiveness), content SEO (creating high-quality content), and local
                                                SEO (enhancing geographical visibility). </div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 2 ends -->

                                    <!-- accordion tab 3 starts -->
                                    <div class="card">
                                        <div class="card-header" id="accord-index1-heading3">
                                            <h4>
                                                <button class="dtr-btn accordion-btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#accord-index1-collapse3"
                                                    aria-expanded="false" aria-controls="accord-index1-collapse3">How
                                                    long does it take to see results from SEO?</button>
                                            </h4>
                                        </div>
                                        <div id="accord-index1-collapse3" class="collapse"
                                            aria-labelledby="accord-index1-heading3" data-parent="#accord-index1">
                                            <div class="card-body">SEO is a long-term strategy, and results typically
                                                start showing after 3 to 6 months. However, it depends on factors such
                                                as competition, website age, and the current state of your SEO efforts.
                                                We provide consistent updates and reports to track the progress.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 4 ends -->
                                    <div class="card">
                                        <div class="card-header" id="accord-index1-heading4">
                                            <h4>
                                                <button class="dtr-btn accordion-btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#accord-index1-collapse4"
                                                    aria-expanded="false" aria-controls="accord-index1-collapse4">Do I
                                                    need SEO if I already have a website?</button>
                                            </h4>
                                        </div>
                                        <div id="accord-index1-collapse4" class="collapse"
                                            aria-labelledby="accord-index1-heading4" data-parent="#accord-index1">
                                            <div class="card-body">Absolutely! Having a website is just the first step.
                                                Without effective SEO, your website may remain invisible to search
                                                engines, missing out on potential customers. SEO ensures your site ranks
                                                well and performs effectively in search results, boosting your online
                                                visibility.</div>
                                        </div>
                                    </div>
                                    <!-- accordion tab 5 ends -->
                                    <div class="card">
                                        <div class="card-header" id="accord-index1-heading5">
                                            <h4>
                                                <button class="dtr-btn accordion-btn-link collapsed" type="button"
                                                    data-toggle="collapse" data-target="#accord-index1-collapse5"
                                                    aria-expanded="false" aria-controls="accord-index1-collapse5">
                                                    What makes your SEO service different from others?</button>
                                            </h4>
                                        </div>
                                        <div id="accord-index1-collapse5" class="collapse"
                                            aria-labelledby="accord-index1-heading5" data-parent="#accord-index1">
                                            <div class="card-body">Our approach is tailored to each client's unique
                                                needs, focusing on strategies that align with their business goals. We
                                                use white-hat SEO techniques to ensure sustainable growth, and our
                                                dedicated team provides transparent, data-driven results with regular
                                                progress reports.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== accordion ends ==-->



                        </div>
                        <!-- column 1 ends -->

                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 col-lg-6 offset-lg-1 small-device-space">
                            <img src="{{ asset('public/frontend/assets/images/hero-slider-1.2.webp') }}"
                                alt="image">
                        </div>

                        <!-- column 2 ends -->

                    </div>
                    <!-- row ends -->

                </div>
            </section>
            <!-- about section ends
================================================== -->





            <!-- contact section starts
================================================== -->
            <!-- top background curve image - easy to change color / no need to edit image - refer help doc -->
            <section id="contact" class="dtr-section dtr-section-with-bg bg-blue color-white"
                style="background-image: url{{ asset('public/frontend/assets/images/white-shape-bg.png') }};">


                <!-- wrapping div for top shape image - easy to change color / no need to edit image - refer help doc -->
                <div class="dtr-py-100 dtr-top-shape-img"
                    style="background-image: url {{ asset('public/frontend/assets/images/contact-section-top.svg') }};">

                    <div class="container">

                        <!--== row starts ==-->
                        <div class="row">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-8">

                                <!-- heading starts -->
                                <div class="dtr-styled-heading">
                                    <h2>What is your business?</h2>
                                    <p class="color-white-muted">We will customize and design our business support
                                        services for your lorem ipsum dolor sit amet incidid labore magna business
                                        needs.</p>
                                </div>
                                <!-- heading ends -->

                                <!-- form starts -->
                                <div class="dtr-form dtr-form-styled dtr-form-dark-bg">
                                    <form id="contactForm" method="POST"
                                        action="{{ route('landingsubmitContact') }}">
                                        @csrf
                                        <fieldset>

                                            <!-- form two columns start -->
                                            <div class="dtr-form-row dtr-form-row-2col clearfix">
                                                <!-- Services -->
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">Services</span>
                                                        <select name="service">
                                                            <option value="" selected disabled>Select a Service
                                                            </option>
                                                            <option value="web-development">Website Design &
                                                                Development</option>
                                                            <option value="app-development">Application Development
                                                            </option>
                                                            <option value="software-dev">Software Development</option>
                                                            <option value="digital-marketing">All Digital Marketing
                                                                Services</option>
                                                            <option value="seo-services">SEO Services</option>
                                                            <option value="smo-services">SMO Services</option>
                                                            <option value="ppc-services">PPC Services</option>
                                                            <option value="graphic-design">Graphic Designing</option>
                                                            <option value="email-marketing">Email Marketing</option>
                                                            <option value="other-services">Others</option>
                                                        </select>
                                                    </p>
                                                </div>

                                                <!-- Website -->
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">Website</span>
                                                        <input name="website" type="url"
                                                            placeholder="https://example.com">
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- form two columns ends -->

                                            <!-- Name fields -->
                                            <div class="dtr-form-row dtr-form-row-2col clearfix">
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">First Name</span>
                                                        <input name="first_name" type="text"
                                                            placeholder="Enter First Name">
                                                    </p>
                                                </div>
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">Last Name</span>
                                                        <input name="last_name" type="text"
                                                            placeholder="Enter Last Name">
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Contact fields -->
                                            <div class="dtr-form-row dtr-form-row-2col clearfix">
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">Email Address</span>
                                                        <input name="email" type="email"
                                                            placeholder="john@example.com">
                                                    </p>
                                                </div>
                                                <div class="dtr-form-column">
                                                    <p class="dtr-form-field">
                                                        <span class="dtr-form-subtext">Phone</span>
                                                        <input name="phone" type="tel"
                                                            placeholder="Enter Phone Number">
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Submit button -->
                                            <p class="text-center">
                                                <button class="dtr-btn btn-red w-100" type="submit">
                                                    Get Started Now <i class="icon-arrow-right-circle dtr-ml-10"></i>
                                                </button>
                                            </p>

                                            <!-- Message display -->
                                            <div id="formMessages" class="mt-3 text-center"></div>

                                        </fieldset>
                                    </form>
                                </div>

                                <!-- form ends -->

                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-md-4">
                                <div class="dtr-pl-50"> <img
                                        src=" {{ asset('public/frontend/assets/images/illustration.png') }}"
                                        alt="image" class="small-device-space">

                                    <!-- contact box ends -->

                                </div>
                            </div>
                            <!-- column 2 ends -->

                        </div>
                        <!--== row ends ==-->

                    </div>
                </div>
            </section>
            <!-- contact section ends
================================================== -->

            <!-- footer section starts
================================================== -->
            <footer id="dtr-footer">

                <!--== footer main starts ==-->
                <div class="dtr-footer-main">
                    <div class="container">

                        <!--== row starts ==-->
                        <div class="row">

                            <!-- column 1 starts -->
                            <div class="col-12 col-md-4 small-device-space">
                                <img src="{{ asset('public/frontend/assets/images/logo-light.png') }}" alt="logo"
                                    class="will_customize">

                                <p class="dtr-mt-30">Elevate your brand with Webonix Tech, India’s best website design
                                    and development company, delivering innovative solutions to enhance visibility and
                                    engage your audience effectively. Transform your marketing today!</p>


                            </div>
                            <!-- column 1 ends -->

                            <!-- column 2 starts -->
                            <div class="col-12 col-lg-4 col-md-4 small-device-space">
                                <h4>More Information</h4>
                                <div class="spacer-30"></div>
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-md-12">
                                        <ul class="dtr-list-border">
                                            <li><a href="#about">About Us</a></li>
                                            <li><a href="#contact">Contact Us</a></li>
                                            <li><a href="#service">Our Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4 small-device-space">
                                <h4>Contact Info</h4>
                                <div class="spacer-30"></div>
                                <ul class="dtr-contact-widget">
                                    <li><i class="icon-phone-call"></i><a href="tel:+1 858-888-9215">+1
                                            858-888-9215</a></li>
                                    <li><i class="icon-envelope1"></i><a
                                            href="mailto:info@webonix.tech">info@webonix.tech</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== footer main ends ==-->

                <!--== copyright starts ==-->
                <div class="dtr-copyright">
                    <div class="container">

                        <!--== row starts ==-->
                        <div class="row">

                            <!-- column 1 starts -->
                            <div class="col-12 text-center text-size-sm">
                                <p> Copyright © Oficial 2020. Template by <a
                                        href="https://themeforest.net/user/tansh">Tansh</a>.</p>
                            </div>
                            <!-- column 1 ends -->

                        </div>
                        <!--== row ends ==-->

                    </div>
                </div>
                <!--== copyright ends ==-->

            </footer>
            <!-- footer section ends
================================================== -->

        </div>
        <!-- == main content area ends == -->

    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS FILES -->
    <script src="{{ asset('public/frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/custom.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();
                let form = $(this);
                let url = form.attr('action');
                let formData = form.serialize();

                // Remove old error messages
                form.find('.text-danger').remove();
                $('#formMessages').html('');

                // Disable button
                form.find('button[type=submit]').prop('disabled', true).text('Please wait...');

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#formMessages').html(`
                    <div class="alert alert-success">
                        ${response.message}
                    </div>
                `);
                        form.trigger('reset');

                        // Hide success message after 3s
                        setTimeout(() => {
                            $('#formMessages').fadeOut('slow', function() {
                                $(this).html('').show();
                            });
                        }, 3000);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;

                            // Show each validation message below input
                            $.each(errors, function(key, value) {
                                let inputField = form.find('[name="' + key + '"]');
                                if (inputField.length > 0) {
                                    inputField.after(
                                        '<small class="text-danger d-block mt-1">' +
                                        value[0] + '</small>');
                                }
                            });
                        } else {
                            $('#formMessages').html(`
                        <div class="alert alert-danger">
                            Something went wrong. Please try again later.
                        </div>
                    `);
                            setTimeout(() => {
                                $('#formMessages').fadeOut('slow', function() {
                                    $(this).html('').show();
                                });
                            }, 3000);
                        }
                    },
                    complete: function() {
                        form.find('button[type=submit]').prop('disabled', false).text(
                            'Get Started Now');
                    }
                });
            });
        });
    </script>



</body>

</html>
