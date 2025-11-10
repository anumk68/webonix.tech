<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AI & Software Development Services</title>

    <!-- Bootstrap 5.3 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" id="font-awesome-5-all-css" href="{{ asset('public/frontend/ladingpage/style.css') }}"
        media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        

    <!-- Bootstrap JS (Including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
    .rounded {
        color: black;
    }

    .floating-card {
        background: #121212;
        border: 1px solid rgba(255, 255, 255, .08);
        border-radius: var(--radius);
        box-shadow: 0 30px 70px rgba(0, 0, 0, .55), 0 0 0 1px rgba(255, 255, 255, .04) inset;
    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"><img
                    src="{{ asset('public/frontend/ladingpage/img/logo-light.png') }}" alt="" class="logo_main"></a>

            <div id="nav" class="collapse navbar-collapse">

                <ul class="navbar-nav ms-auto"></ul>
            </div>
            <div class="call_header_btn">
                <a href="tel:+1 858-888-9215"> <i class="fa-solid fa-phone"></i> +1 858-888-9215</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="content container position-relative">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 text-white">
                    <span class="badge rounded-pill bg-light text-dark mb-3">Top-Rated Web Development & Design
                        Partner</span>
                    <h1 class="display-5 fw-bold">Trusted Web Development & Web Design Experts in the USA</h1>
                    <p class="lead mt-3">Building Secure, Scalable & Future-Ready Web, Mobile, and AI Solutions That
                        Drive Growth
                    </p>

                    <div class="d-flex gap-4 mt-4">
                        <div class="stat"><i class="bi bi-people-fill text-brand"></i>
                            <div><b>150+</b>
                                <div class="small">Certified Developers
                                </div>
                            </div>
                        </div>
                        <div class="stat"><i class="bi bi-graph-up-arrow text-brand"></i>
                            <div><b>$20B+
                                </b>
                                <div class="small">Client Revenue Impact
                                </div>
                            </div>
                        </div>
                        <div class="stat"><i class="bi bi-shield-check text-brand"></i>
                            <div><b>99%
                                </b>
                                <div class="small">Project Success Rate
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="floating-card p-4">
                        <h5 class="mb-3">Let’s Connect to Build Something Great</h5>
                        @include('frontend.commonForm.form')
                        <!--  <form>
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label small">Full Name</label>
                  <input type="text" class="form-control" placeholder="John Carter" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small">Email</label>
                  <input type="email" class="form-control" placeholder="you@company.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small">Phone</label>
                  <input type="tel" class="form-control" placeholder="+1 202-555-0130">
                </div>
                <div class="col-12">
                  <label class="form-label small">Project Type</label>
                  <select class="form-select">
                    <option>Mobile App</option>
                    <option>Web App</option>
                    <option>AI/ML</option>
                    <option>MVP / Discovery</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label small">Brief</label>
                  <textarea class="form-control" rows="3" placeholder="Tell us what you’re building…"></textarea>
                </div>
                <div class="col-12 d-grid">
                  <button class="btn btn-brand btn-lg">Get Free Consultation</button>
                </div>
                <div class="col-12 small-muted"><i class="bi bi-lock-fill me-1"></i>We keep your data private.</div>
              </div>
            </form> -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- CHALLENGES -->
    <section id="about" class="section-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Transforming Ideas into Powerful <span class="text-brand">Digital Experiences</span>
                </h2>

            </div>
            <div class="row g-3 g-md-4">
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-shield-exclamation"></i>
                            <div>
                                <h6 class="mb-1">Custom Website Development</h6>
                                <p class="mb-0 small">We craft responsive, high-performing websites tailored to your
                                    brand and audience. From concept to deployment, our developers ensure seamless
                                    functionality, intuitive navigation, and a design that converts visitors into loyal
                                    customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-hourglass-split"></i>
                            <div>
                                <h6 class="mb-1">E-Commerce Website Development</h6>
                                <p class="mb-0 small">Empower your business with powerful online stores built using
                                    Shopify, WooCommerce, or custom platforms. We focus on secure transactions, fast
                                    load times, and a smooth shopping experience that drives higher conversions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h6 class="mb-1">Web Application Development</h6>
                                <p class="mb-0 small">Our engineers build scalable, cloud-ready web applications
                                    designed to handle complex workflows and large user volumes — perfect for
                                    enterprises, SaaS platforms, and B2B solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-cpu"></i>
                            <div>
                                <h6 class="mb-1">CMS Development & Integration</h6>
                                <p class="mb-0 small">Take control of your content with custom CMS solutions on
                                    WordPress, Drupal, or headless platforms. We integrate your system for easy
                                    management, SEO efficiency, and future scalability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h6 class="mb-1">UI/UX Design & Prototyping</h6>
                                <p class="mb-0 small">We design interfaces that balance aesthetics and usability. From
                                    wireframes to clickable prototypes, our design process enhances engagement and
                                    ensures a frictionless digital experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="challenge">
                        <div class="d-flex gap-2 align-items-start">
                            <i class="bi bi-cpu"></i>
                            <div>
                                <h6 class="mb-1">Website Maintenance & Support</h6>
                                <p class="mb-0 small">Our work doesn’t stop after launch. We provide ongoing updates,
                                    performance monitoring, security patches, and technical support to keep your website
                                    optimized and future-proof.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4"><a class="btn btn-brand" href="#contact">Speak to an Expert</a></div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-dark">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge text-bg-dark border border-light-subtle">Our Services</span>
                <h2 class="fw-bold mt-2">Full-Spectrum Web Development & Digital Engineering Solutions</h2>
                <p class="small-muted lead-tight mx-auto">From concept to deployment — our teams deliver secure,
                    scalable, and future-ready digital products for modern enterprises and fast-growing startups across
                    the USA.
                </p>
            </div>

            <div class="row g-3 g-md-4">
                <!-- Repeatable service tile -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Product Discovery</h5>
                            <span class="badge rounded-pill">Strategy</span>
                        </div>
                        <p class="mt-2 small text-secondary">We begin every project by deeply understanding your
                            business goals and user needs. Through strategic analysis, user research, and experience
                            mapping, we define a clear path that minimizes risks and maximizes ROI</p>
                        <ul class="small mb-0">
                            <li>Market and user behavior research</li>
                            <li>Interactive wireframes & validation</li>
                            <li>Technical planning and delivery roadmap</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Web Development</h5>
                            <span class="badge rounded-pill">Frontend/Backend</span>
                        </div>
                        <p class="mt-2 small text-secondary">Our developers build robust, high-performance websites and
                            web apps that align with your goals and scale with your growth. Every product is engineered
                            with precision, security, and modern frameworks.</p>
                        <ul class="small mb-0">
                            <li>End-to-end custom development</li>
                            <li>API architecture and integration</li>
                            <li>Speed optimization and scalability</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Mobile App Development</h5>
                            <span class="badge rounded-pill">iOS/Android</span>
                        </div>
                        <p class="mt-2 small text-secondary">We create dynamic mobile solutions that deliver seamless
                            performance and a native-like experience on both iOS and Android. Our focus is on usability,
                            speed, and long-term maintainability.</p>
                        <ul class="small mb-0">
                            <li>Hybrid & native app engineering</li>
                            <li>UI/UX optimized for user retention</li>
                            <li>Launch support and continuous updates</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">AI & Data Solutions</h5>
                            <span class="badge rounded-pill">Intelligence</span>
                        </div>
                        <p class="mt-2 small text-secondary">Empower your digital platforms with data-driven
                            intelligence. We integrate AI and analytics to help you automate decisions, personalize
                            experiences, and forecast business outcomes accurately.
                        </p>
                        <ul class="small mb-0">
                            <li>Predictive data modeling</li>
                            <li>Chatbot and AI workflow integration</li>
                            <li>Machine learning for user insights</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Security & Compliance</h5>
                            <span class="badge rounded-pill">Trust</span>
                        </div>
                        <p class="mt-2 small text-secondary">Your customers trust you with their data — we make sure it
                            stays protected. Our security protocols and compliance-ready processes meet the highest
                            global standards to safeguard every layer of your platform.
                        </p>
                        <ul class="small mb-0">
                            <li>End-to-end encryption and monitoring</li>
                            <li>Vulnerability assessments and audits</li>
                            <li>Data protection aligned with US regulations</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="svc h-100">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">DevOps & Cloud Services</h5>
                            <span class="badge rounded-pill">Reliability</span>
                        </div>
                        <p class="mt-2 small text-secondary">Accelerate delivery and ensure reliability with our modern
                            DevOps practices. We help you automate deployments, optimize resources, and maintain
                            uninterrupted performance in the cloud.
                        </p>
                        <ul class="small mb-0">
                            <li>Cloud migration & infrastructure automation</li>
                            <li>CI/CD pipelines for faster releases</li>
                            <li>Scalable monitoring & 24/7 maintenance</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- TESTIMONIALS -->
    <section class="section-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Our Clients’ Success Stories</h2>
            </div>

            <div id="clientQuoteCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <ol class="carousel-indicators">
                    <li data-bs-target="#clientQuoteCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#clientQuoteCarousel" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- First Item -->
                    <div class="carousel-item active">
                        <div class="row g-3 g-md-4">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"Working with Webonix Tech has been a game-changer for our
                                        business. From the very beginning, their team demonstrated exceptional expertise
                                        and attention to detail. They created a custom website that truly represents our
                                        brand while ensuring it’s user-friendly and fully responsive. The site’s
                                        performance has dramatically improved, and we’ve seen a significant boost in
                                        engagement. Their approach to e-commerce development has also streamlined our
                                        online store, resulting in smoother transactions and faster load times. Highly
                                        recommend them for anyone looking for innovative and secure web solutions!"</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar" src="https://i.pravatar.cc/100?img=5" alt="">
                                        <div><b>Sarah L.,</b>
                                            <div class="small-muted"> E-commerce Business Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"Our experience with Webonix Tech has been outstanding. The team
                                        transformed our outdated website into a modern, visually stunning platform.
                                        Their design process was seamless, and they took the time to understand our
                                        goals and audience. We were particularly impressed with how they ensured our
                                        site was responsive, providing an optimal experience across all devices. The
                                        user-centric approach they brought to the table has helped increase conversions,
                                        and we’ve seen a noticeable improvement in our website’s performance and user
                                        engagement. We couldn’t be happier with the results."
                                    </p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar" src="https://i.pravatar.cc/100?img=13" alt="">
                                        <div><b>John D.,
                                            </b>
                                            <div class="small-muted"> Marketing Director, Tech Solutions Company</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"We approached Webonix Tech to help us redesign our website and
                                        implement a new content management system. From start to finish, they delivered
                                        a top-notch experience. Their team’s expertise in web development and CMS
                                        integration made the process smooth, and the final product exceeded our
                                        expectations. Our website now has an intuitive design, faster load times, and
                                        improved functionality, which has made managing content much easier. The team
                                        was proactive, communicative, and truly understood our vision. We highly
                                        recommend Webonix Tech to any business looking to improve their digital
                                        presence."
                                    </p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar"
                                            src="{{ asset('public/frontend/ladingpage/img/review-author-2.jpg') }}"
                                            alt="">

                                        <div><b>Emily R.,</b>
                                            <div class="small-muted">CEO, Health & Wellness Startup</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Item (Add more quotes if needed) -->
                    <div class="carousel-item">
                        <div class="row g-3 g-md-4">
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"Working with Webonix Tech has been a game-changer for our
                                        business. From the very beginning, their team demonstrated exceptional expertise
                                        and attention to detail. They created a custom website that truly represents our
                                        brand while ensuring it’s user-friendly and fully responsive. The site’s
                                        performance has dramatically improved, and we’ve seen a significant boost in
                                        engagement. Their approach to e-commerce development has also streamlined our
                                        online store, resulting in smoother transactions and faster load times. Highly
                                        recommend them for anyone looking for innovative and secure web solutions!"</p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar" src="https://i.pravatar.cc/100?img=5" alt="">
                                        <div><b>Sarah L.,</b>
                                            <div class="small-muted"> E-commerce Business Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"Our experience with Webonix Tech has been outstanding. The team
                                        transformed our outdated website into a modern, visually stunning platform.
                                        Their design process was seamless, and they took the time to understand our
                                        goals and audience. We were particularly impressed with how they ensured our
                                        site was responsive, providing an optimal experience across all devices. The
                                        user-centric approach they brought to the table has helped increase conversions,
                                        and we’ve seen a noticeable improvement in our website’s performance and user
                                        engagement. We couldn’t be happier with the results."
                                    </p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar" src="https://i.pravatar.cc/100?img=13" alt="">
                                        <div><b>John D.,
                                            </b>
                                            <div class="small-muted"> Marketing Director, Tech Solutions Company</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12">
                                <div class="quote h-100">
                                    <p class="mb-3">"We approached Webonix Tech to help us redesign our website and
                                        implement a new content management system. From start to finish, they delivered
                                        a top-notch experience. Their team’s expertise in web development and CMS
                                        integration made the process smooth, and the final product exceeded our
                                        expectations. Our website now has an intuitive design, faster load times, and
                                        improved functionality, which has made managing content much easier. The team
                                        was proactive, communicative, and truly understood our vision. We highly
                                        recommend Webonix Tech to any business looking to improve their digital
                                        presence."
                                    </p>
                                    <div class="d-flex align-items-center gap-2">
                                        <img class="avatar"
                                            src="{{ asset('public/frontend/ladingpage/img/review-author-2.jpg') }}"
                                            alt="">

                                        <div><b>Emily R.,</b>
                                            <div class="small-muted">CEO, Health & Wellness Startup</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#clientQuoteCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#clientQuoteCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>


    <!-- WHY US -->
    <section id="why" class="section-dark">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold">Why Partner with Webonix Tech?</h3>
                <p class="small-muted lead-tight mx-auto">We combine expertise, technology, and strategy to craft
                    innovative web solutions that help businesses scale and succeed in the digital world.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="why-li border">
                        <i class="bi bi-graph-up"></i>
                        <div><b>Innovative Data-Driven Strategies</b>
                            <div class="small-muted">Webonix Tech prioritizes actionable insights through data. We
                                employ advanced analytics and real-time data to inform every decision, ensuring that our
                                solutions are aligned with your business objectives and optimized for success.
                            </div>
                        </div>
                    </div>
                    <div class="why-li border mt-2">
                        <i class="bi bi-shield-lock"></i>
                        <div><b>Rapid Development for Fast Results</b>
                            <div class="small-muted">Time is crucial in today’s market. Our agile development
                                methodology ensures that your app or website is built efficiently, reducing
                                time-to-market while maintaining top-tier quality and performance.
                            </div>
                        </div>
                    </div>
                    <div class="why-li border mt-2">
                        <i class="bi bi-currency-dollar"></i>
                        <div><b>Uncompromising Security & Compliance</b>
                            <div class="small-muted">We understand the importance of safeguarding your data. Our
                                solutions are built with the highest levels of security, ensuring full compliance with
                                industry standards like HIPAA, GDPR, and SOC 2, keeping your business secure and
                                trustworthy.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-li border">
                        <i class="bi bi-lightning"></i>
                        <div><b>Cost-Effective Development Solutions</b>
                            <div class="small-muted">At Webonix Tech, we maximize value by reducing operational costs
                                and improving efficiency. Our streamlined development processes and smart resource
                                allocation deliver high-quality results without exceeding budgets.
                            </div>
                        </div>
                    </div>
                    <div class="why-li border mt-2">
                        <i class="bi bi-people"></i>
                        <div><b>Expert Team Driving Excellence</b>
                            <div class="small-muted">With over 100 industry professionals, Webonix Tech brings together
                                diverse expertise in web development, mobile app development, AI, and cloud
                                technologies. We leverage our team’s strengths to deliver custom solutions that match
                                your needs and vision.
                            </div>
                        </div>
                    </div>
                    <div class="why-li border mt-2">
                        <i class="bi bi-star-fill"></i>
                        <div><b>Client-Centered Focus & Success</b>
                            <div class="small-muted">We take pride in building strong client relationships. Through
                                constant collaboration, transparency, and commitment to excellence, we have earned
                                positive feedback and a proven track record of successful projects that fuel long-term
                                partnerships.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TECH STACK (TABS WORKING SMOOTHLY) -->
    <section id="tech" class="section-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Our Tech Stack</h2>
                <p class="small-muted lead-tight mx-auto">Battle-tested tools to build resilient products.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <div class="nav flex-lg-column nav-pills gap-2" id="stackTabs" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="pills-web-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web"
                            aria-selected="true">
                            <i class="bi bi-window-sidebar me-1"></i> Web Design
                        </button>
                        <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile"
                            aria-selected="false">
                            <i class="bi bi-phone me-1"></i> Web Development
                        </button>
                        <!-- <button class="nav-link" id="pills-ai-tab" data-bs-toggle="pill" data-bs-target="#pills-ai" type="button" role="tab" aria-controls="pills-ai" aria-selected="false">
              <i class="bi bi-cpu me-1"></i>Security
            </button>
            <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-cloud" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i> Cloud Services
            </button>
              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i> Mobile
            </button>
              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-database" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i> Database
            </button>
              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-testing" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i>Testing
            </button>
              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-real" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i> Real time Communication
            </button>
              <button class="nav-link" id="pills-cloud-tab" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button" role="tab" aria-controls="pills-cloud" aria-selected="false">
              <i class="bi bi-cloud me-1"></i> Ecommerce
            </button> -->
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content" id="stackTabsContent">
                        <!-- Web Design -->
                        <div class="tab-pane fade show active" id="pills-web" role="tabpanel"
                            aria-labelledby="pills-web-tab" tabindex="0">
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-html5"></i><span>HTML </span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-css3"></i><span>CSS</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-figma"></i><span>Figma</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><img
                                            src="{{ asset('public/frontend/ladingpage/img/51325.png') }}"
                                            alt="Node"><span>Adobe</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><img
                                            src="{{ asset('public/frontend/ladingpage/img/download.png') }}"
                                            alt=".NET"><span>Photoshop</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><img
                                            src="{{ asset('public/frontend/ladingpage/img/4406745.webp') }}"
                                            alt="Go"><span>Tailwind css</span></div>
                                </div>

                            </div>
                        </div>

                        <!-- Web Development -->
                        <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-mobile-tab"
                            tabindex="0">
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-html5"></i><span>Html</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-css3"></i><span>CSS</span></div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-js"></i><span>JavaScript</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-react"></i><span>React.js</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-php"></i><span>PHP</span></div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-laravel"></i><span>Laravel</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="tech-item"><i class="fa-brands fa-node-js"></i><span>Node.Js</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="tab_main_new">
        <div class="container">
            <h1 class="text-center mb-5">Web Development & Web Design Service Packages</h1>
            <div class="d-flex justify-content-center">
                <!-- Tabs -->
                <ul class="nav nav-pills" id="seo-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="standard-tab" data-bs-toggle="pill" href="#standard" role="tab"
                            aria-controls="standard" aria-selected="true">Web Development</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="local-tab" data-bs-toggle="pill" href="#local" role="tab"
                            aria-controls="local" aria-selected="false">Web Design</a>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                <a class="nav-link" id="ecommerce-tab" data-bs-toggle="pill" href="#ecommerce" role="tab" aria-controls="ecommerce" aria-selected="false">E-Commerce SEO Packages</a>
            </li> -->
                </ul>
            </div>

            <div class="tab-content" id="seo-tabContent">
                <!-- Standard Tab -->
                <div class="tab-pane fade show active" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                    <div class="row mt-4 g-3">
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Basic Package
                                </h3>
                                <p class="price">$149</p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Development"
                                    data-package="Basic Package" data-price="$149">
                                    Get Package Query
                                </button>
                                <p>Perfect for individuals or businesses seeking a simple, functional website with
                                    essential features.
                                </p>
                                <ul class="list-group">
                                    <li>3 Page Website Development
                                    </li>
                                    <li>HTML-Based Development</li>
                                    <li>Basic Functionalities (Contact/Query Form, Text & Image Integration)
                                    </li>
                                    <li>Complete W3C Certified HTML</li>
                                    <li>Responsive Layout for Mobile, Tablet & Desktop</li>
                                    <li>Complete Website Deployment
                                    </li>
                                    <li>3 Revisions
                                    </li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Startup Package
                                </h3>
                                <p class="price">$299 </p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Development"
                                    data-package="Startup Package" data-price="$299">
                                    Get Package Query
                                </button>
                                <p> Ideal for startups and small businesses needing a more complex site with enhanced
                                    functionality.
                                </p>
                                <ul class="list-group">
                                    <li>6 Pages Website Development
                                    </li>
                                    <li>HTML-Based Development</li>
                                    <li>Hover Effects & Interactive Features</li>
                                    <li>Sliding Banner</li>
                                    <li>Basic Content Management System (CMS) Setup</li>
                                    <li>Contact/Query Form</li>
                                    <li>3 Professional Email IDs</li>
                                    <li>6 Revisions</li>
                                    <li>Complete W3C Certified HTML</li>
                                    <li>Responsive Layout for Mobile, Tablet & Desktop</li>
                                    <li>Complete Website Deployment</li>
                                    <li>Value-Added Services</li>
                                    <li>Complete Source Files</li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Professional Package
                                </h3>
                                <p class="price">$599</p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Development"
                                    data-package="Professional Package" data-price="$599">
                                    Get Package Query
                                </button>
                                <p>For businesses seeking a fully custom web solution with advanced features, CMS, and
                                    extensive support.
                                </p>
                                <ul class="list-group">
                                    <li>Up to 12 Pages Website Development</li>
                                    <li>Custom Web Development (HTML, CSS, JavaScript, and PHP/Database integration)
                                    </li>
                                    <li>Advanced Functionalities (Custom Forms, Interactive Maps, APIs Integration)</li>
                                    <li>Content Management System (WordPress or Custom CMS)</li>
                                    <li>5 Professional Email IDs</li>
                                    <li>Search Engine Submission</li>
                                    <li>Unlimited Revisions</li>
                                    <li>Advanced Security Features (SSL, Anti-Spam Protection)</li>
                                    <li>Industry-Specific Team of Expert Developers</li>
                                    <li>Complete Website Deployment</li>
                                    <li>Value-Added Services</li>
                                    <li>Complete Source Files</li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Local Tab -->
                <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local-tab">
                    <div class="row mt-4 g-3">
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Basic Package</h3>
                                <p class="price"> $149</p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Design"
                                    data-package="Basic Package" data-price="$149">
                                    Get Package Query
                                </button>
                                <p>Ideal for individuals or small businesses needing a professional online presence with
                                    essential features.
                                </p>
                                <ul class="list-group">
                                    <li>3 Custom Web Page Design</li>
                                    <li>HTML5 & CSS3-Based Development</li>
                                    <li>Fully Responsive Design</li>
                                    <li>3 Custom Banner Design</li>
                                    <li>Basic Contact/Query Form</li>
                                    <li>3 Design Revisions</li>
                                    <li>W3C Certified HTML</li>
                                    <li>Complete Website Deployment</li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Startup Package</h3>
                                <p class="price">$299</p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Design"
                                    data-package="Startup Package" data-price="$299">
                                    Get Package Query
                                </button>
                                <p> For startups and small businesses seeking an interactive website with additional
                                    customizations and modern design elements.
                                </p>
                                <ul class="list-group">
                                    <li>5 Custom Web Pages</li>
                                    <li>HTML5 & CSS3-Based Development</li>
                                    <li>Responsive Design</li>
                                    <li>Hover Effects & Interactive Design Elements</li>
                                    <li>3 Custom Banner Designs</li>
                                    <li>Sliding Banner</li>
                                    <li>3 High-Quality Stock Photos</li>
                                    <li>Advanced Contact/Query Form</li>
                                    <li>5 Professional Email IDs</li>
                                    <li>6 Design Revisions</li>
                                    <li>W3C Certified HTML</li>
                                    <li>Complete Website Deployment</li>
                                    <li>Complete Source Files</li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="package-card">
                                <h3>Professional Package</h3>
                                <p class="price">$599</p>
                                <button class="btn btn-primary mb-2 package-query-btn" data-bs-toggle="modal"
                                    data-bs-target="#packageQueryModal" data-tab="Web Design"
                                    data-package="Professional Package" data-price="$599">
                                    Get Package Query
                                </button>
                                <p>For established businesses that require a fully custom-designed, scalable website
                                    with advanced functionality and ongoing support.
                                </p>
                                <ul class="list-group">
                                    <li>Up to 12 Custom Web Pages</li>
                                    <li>HTML5 & CSS3-Based Development</li>
                                    <li>Fully Responsive Design</li>
                                    <li>6 Custom Banner Designs</li>
                                    <li>Sliding Banner & Hover Effects</li>
                                    <li>Content Management System (CMS)</li>
                                    <li>5 High-Quality Stock Photos</li>
                                    <li>8 Professional Email IDs</li>
                                    <li>Search Engine Submission</li>
                                    <li>Unlimited Design Revisions</li>
                                    <li>W3C Certified HTML</li>
                                    <li>Advanced Animations & Custom Graphics</li>
                                    <li>Industry-Specific Design Team</li>
                                    <li>Complete Website Deployment</li>
                                    <li>Complete Source Files</li>
                                    <li>Dedicated Project Manager</li>
                                    <li>Ownership Rights</li>
                                    <li>Satisfaction Guarantee</li>
                                    <li>Money-Back Guarantee</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Package Query Modal -->
    <div class="modal fade" id="packageQueryModal" tabindex="-1" aria-labelledby="packageQueryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Wider modal -->
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-semibold" id="packageQueryModalLabel">Package Query</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body py-4 px-4">
                    <form id="packageQueryForm">
                        @csrf
                        <div class="row g-3">
                            <!-- Readonly details -->
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Category</label>
                                <input type="text" class="form-control" id="selectedTab" name="category" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Package</label>
                                <input type="text" class="form-control" id="selectedPackage" name="package" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Price</label>
                                <input type="text" class="form-control" id="selectedPrice" name="price" readonly>
                            </div>

                            <hr class="my-3">

                            <!-- User input fields -->
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Your Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="Enter your name">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Your Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required
                                    placeholder="Enter your email">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Your Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="number" required
                                    placeholder="Enter your number">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium">Message</label>
                                <textarea class="form-control" name="message" rows="3"
                                    placeholder="Write your message..."></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100 py-2 mt-2 fw-semibold">
                                    <i class="bi bi-send me-1"></i> Submit Query
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <section class="faq py-5">
        <div class="container">
            <div class="heading_faq text-center mb-5">
                <h2>Frequently Asked Questions</h2>

            </div>

            <div class="row align-items-center g-4">
                <!-- Left Image -->
                <div class="col-md-6">
                    <div class="img_faq">
                        <img src="{{ asset('public/frontend/ladingpage/img/faq.jpg') }}" alt="FAQ Image"
                            class="img-fluid rounded-4 shadow">
                    </div>
                </div>

                <!-- Right Accordion -->
                <div class="col-md-6">
                    <div class="accordion custom-accordion" id="accordionExample">

                        <!-- Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What kind of web development services does Webonix Tech offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We specialize in full-stack web development, including custom websites, e-commerce
                                    stores, web apps,
                                    CMS integration, UI/UX design, and long-term maintenance.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does Webonix Tech ensure websites are user-friendly and responsive?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We follow responsive design principles, ensuring your site looks perfect on
                                    desktops, tablets, and
                                    smartphones with smooth navigation and fast load times.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why should I choose Webonix Tech for my e-commerce website?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We build secure, scalable e-commerce platforms like Shopify and WooCommerce with
                                    user-friendly
                                    checkout flows and high performance.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What makes Webonix Tech different from other web development agencies?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We combine innovation, agility, and transparency to deliver tailored web solutions
                                    that help businesses
                                    grow while maintaining cost efficiency.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="nav_tab_new_session padding">
        <div class="container">
            <div class="section-heading text-center wow fade-in-bottom animated" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms; animation-name: fade-in-bottom;">
                <h2 class="mb-4">Our Projects</h2>
            </div>
            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="false"
                        tabindex="-1">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="true"> Wordpress</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false" tabindex="-1">Shopify</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-laravel-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-laravel" type="button" role="tab" aria-controls="pills-laravel"
                        aria-selected="false" tabindex="-1">PHP Laravel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-commerce-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-commerce" type="button" role="tab" aria-controls="pills-commerce"
                        aria-selected="false" tabindex="-1">E-commerce</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-vibesandthreads-2025-10-09-15_16_53.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-digicare-online-2025-10-09-15_31_07.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-aclassprotools-au-2025-10-09-15_33_41.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-shopprinto-net-2025-10-09-15_36_01.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-printandink-online-2025-10-09-15_37_16.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-codewebbytesllc-2025-10-09-15_38_45.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Wordpress -->

                <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-codewebbytesllc-2025-10-09-15_38_45.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-digicare-online-2025-10-09-15_31_07.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-digitalblitzjk-2025-10-09-16_03_00.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <!-- Shopify -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-aclassprotools-au-2025-10-09-15_33_41.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-vibesandthreads-2025-10-09-15_16_53.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PHP Laravel -->
                <div class="tab-pane fade" id="pills-laravel" role="tabpanel" aria-labelledby="pills-laravel-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-digirushsolutions-2025-10-09-16_32_21.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-techsupport24x7-2025-10-09-16_37_09.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- E-commerce -->
                <div class="tab-pane fade" id="pills-commerce" role="tabpanel" aria-labelledby="pills-commerce-tab">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-printandink-online-2025-10-09-15_37_16.png') }}"
                                                alt="Maintenance">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
                                <div class="imageBox footer_imagebox aos-init" data-aos="zoom-in-up">
                                    <div class="portfolio-item auto-scroll">
                                        <a data-fancybox="gallery" href="#">
                                            <img src="{{ asset('public/frontend/ladingpage/img/screencapture-myprinters-store-2025-10-09-16_42_06.png') }}"
                                                alt="Maintenance">
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
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Don’t dream for <span class="text-brand">success</span>, contact us</h2>
                <p class="small-muted">Tell us about your challenge — we’ll respond within 24 hours.</p>
            </div>
            <style>

            </style>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card contact-card p-4 p-md-5 shadow-soft">
                        <!--    <form class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Company</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="tel" class="form-control">
              </div>
              <div class="col-12">
                <label class="form-label">Project Brief</label>
                <textarea class="form-control" rows="4" placeholder="What would you like to build?"></textarea>
              </div>
              <div class="col-12 d-grid d-md-flex gap-2 btn_form_under">
                <button class="btn btn-brand btn-lg" type="submit"><a href="#">Send Request</a></button>
                <a class="btn btn-outline-dark btn-lg" href="tel:+12025550130"><i class="bi bi-telephone me-1"></i> Call Now</a>
              </div>
              <div class="col-12"><i class="bi bi-check-circle me-1 text-brand"></i>By submitting, you agree to our terms & privacy policy.</div>
            </form> -->

                        <form class="row g-3" id="contactForm">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="serviceSelect" class="form-label">Service</label>
                                <select class="form-select" id="serviceSelect" name="serviceSelect">
                                    <option value="" selected disabled>Select Service</option>
                                    <option value="web-development">Website Design & Development</option>
                                    <option value="app-development">Application Development</option>
                                    <option value="software-dev">Software Development</option>
                                    <option value="digital-marketing">All Digital Marketing Services</option>
                                    <option value="seo-services">SEO Services</option>
                                    <option value="smo-services">SMO Services</option>
                                    <option value="ppc-services">PPC Services</option>
                                    <option value="graphic-design">Graphic Designing</option>
                                    <option value="email-marketing">Email Marketing</option>
                                    <option value="other-services">Others</option>
                                </select>
                                <div class="invalid-feedback d-block" id="serviceSelect-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            <!--<div class="col-12">-->
                            <!--    <label class="form-label">Project Brief</label>-->
                            <!--    <textarea class="form-control" name="project_brief" rows="4" placeholder="What would you like to build?"></textarea>-->
                            <!--</div>-->
                            <div class="col-12 d-grid d-md-flex gap-2 btn_form_under">
                                <button class="btn btn-primary btn-brand btn-lg" type="submit">Send Request</button>
                            </div>
                            <div class="col-12">
                                <i class="bi bi-check-circle me-1 text-brand"></i>By submitting, you agree to our terms
                                & privacy policy.
                            </div>
                        </form>

                        <div id="success-message" class="text-success mt-3"></div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img_contact">
                        <img src="{{ asset('public/frontend/ladingpage/img/contact.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER -->
    <!--<footer class="py-5">-->
    <!--  <div class="container">-->
    <!--    <div class="row g-3 align-items-center">-->
    <!--      <div class="col-md-6">-->
    <!--        <div class="d-flex align-items-center gap-2">-->

    <!--          <span class="fw-semibold"><img src="{{ asset('public/frontend/ladingpage/img/logo-light.png') }}" alt="" class="footer_logo"></span>-->
    <!--        </div>-->
    <!-- <div class="small text-secondary mt-2">© 2025 Softech. All rights reserved.</div> -->
    <!--      </div>-->
    <!--      <div class="col-md-6">-->
    <!--        <ul class="nav justify-content-md-end">-->
    <!--          <li class="nav-item"><a class="nav-link px-2 text-secondary" href="#">Privacy Policy</a></li>-->
    <!--          <li class="nav-item"><a class="nav-link px-2 text-secondary" href="#">Refund Policy</a></li>-->
    <!--          <li class="nav-item"><a class="nav-link px-2 text-secondary" href="#">Term & Conditions</a></li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</footer>-->

    <style>
        .footer a.text-secondary:hover {
            color: #ffffff !important;
            text-decoration: underline;
        }
        /* ---------- FOOTER BASE ---------- */
.footer {
  background: #0a0f2c; /* deep navy */
  color: #ffffff;
  font-family: 'Poppins', sans-serif;
  position: relative;
}

.footer h4 {
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* ---------- LOGO ---------- */
.footer_logo {
  max-width: 180px;
}

/* ---------- FOOTER LINKS ---------- */
.footer ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer ul li {
  margin-bottom: 10px;
}

.footer ul li a {
  color: #cfcfcf;
  text-decoration: none;
  font-size: 15px;
  transition: all 0.3s ease;
}

.footer ul li a:hover {
  color: #00bcd4; /* accent blue color */
  padding-left: 5px;
}

/* ---------- CONTACT INFO ---------- */
.footer .dtr-contact-widget li {
  display: flex;
  align-items: center;
  margin-bottom: 12px;
}

.footer .dtr-contact-widget i {
  color: #00bcd4;
  margin-right: 10px;
  font-size: 18px;
}

.footer .dtr-contact-widget a {
  color: #cfcfcf;
  text-decoration: none;
  font-size: 15px;
  transition: color 0.3s ease;
}

.footer .dtr-contact-widget a:hover {
  color: #ffffff;
}

/* ---------- SPACER ---------- */
.spacer-30 {
  height: 20px;
}

/* ---------- RESPONSIVE ---------- */
@media (max-width: 768px) {
  .footer {
    text-align: center;
  }

  .footer h4 {
    margin-top: 25px;
  }

  .footer ul li a:hover {
    padding-left: 0;
  }
}


        
    </style>

    <footer class="py-5 bg-dark text-white footer">
        <div class="container">
            <div class="row g-4 align-items-start justify-content-between">

                <!-- Logo Section -->
                <div class="col-12 col-lg-4 col-md-4  text-center text-md-start">
                    <img src="{{ asset('public/frontend/ladingpage/img/logo-light.png') }}" alt="Logo"
                        class="footer_logo mb-2">
                    
                </div>
                <div class="col-12 col-lg-4 col-md-4 ">
                    <h4>More Information</h4>
                    <div class="spacer-30"></div>
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-12">
                            <ul class="dtr-list-border">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                                <li><a href="#services">Our Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                 <div class="col-12 col-lg-4 col-md-4 ">
                            <h4>Contact Info</h4>
                            <div class="spacer-30"></div>
                            <ul class="dtr-contact-widget">
                                <li><i class="icon-phone-call"></i><a href="tel:+1 858-888-9215">+1 858-888-9215</a></li>
                                <li><i class="icon-envelope1"></i><a href="mailto:info@webonix.tech">info@webonix.tech</a></li>
                            </ul>
                        </div>
                </div>
        </div>
    </footer>




    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  

    <!-- Bootstrap JS (Including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JS (Tabs, Collapse, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').submit(function (e) {
                e.preventDefault(); // Prevent default form submission

                let formData = $(this).serialize(); // Get all form data

                $.ajax({
                    url: "{{ route('contact.store') }}",
                    method: "POST",
                    data: formData,
                    success: function (response) {
                        $('#success-message').text("Your request has been sent successfully!");
                        $('#contactForm')[0].reset(); // Reset form fields
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON.errors;
                        // Clear previous errors
                        $('.invalid-feedback').text('');
                        // Show validation errors
                        $.each(errors, function (key, value) {
                            $('#' + key + '-error').text(value[0]);
                        });
                    }
                });
            });
        });
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 19341199;
        window.__lc.integration_name = "manual_onboarding";
        window.__lc.product_name = "livechat";
        (function (n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function () {
                    i(["on", c.call(arguments)])
                },
                once: function () {
                    i(["once", c.call(arguments)])
                },
                off: function () {
                    i(["off", c.call(arguments)])
                },
                get: function () {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function () {
                    i(["call", c.call(arguments)])
                },
                init: function () {
                    var n = t.createElement("script");
                    n.async = !0;
                    n.type = "text/javascript";
                    n.src = "https://cdn.livechatinc.com/tracking.js";
                    t.head.appendChild(n);
                }
            };
            !n.__lc.asyncInit && e.init();
        })(window, document, [].slice);
    </script>
    <script>
        $(document).ready(function () {
            $('.package-query-btn').on('click', function () {
                let tab = $(this).data('tab');
                let pkg = $(this).data('package');
                let price = $(this).data('price');

                // Fill the modal inputs
                $('#selectedTab').val(tab);
                $('#selectedPackage').val(pkg);
                $('#selectedPrice').val(price);
            });
        });
        $(document).ready(function () {

            // Remove previous error messages
            function clearErrors() {
                $('.error-text').remove();
                $('.form-control').removeClass('is-invalid');
            }

            // Validate form fields before AJAX
            function validateForm() {
                let isValid = true;
                clearErrors();

                $('#packageQueryForm .form-control').each(function () {
                    const name = $(this).attr('name');
                    const value = $(this).val().trim();

                    if (name === 'name' && value === '') {
                        showError(this, 'Name is required.');
                        isValid = false;
                    } else if (name === 'email' && (value === '' || !/^[\w\.-]+@[\w\.-]+\.\w{2,}$/.test(
                        value))) {
                        showError(this, 'Enter a valid email.');
                        isValid = false;
                    } else if (name === 'number' && (value === '' || !/^\d{10,11}$/.test(value))) {
                        showError(this, 'Enter a valid 10–11 digit number.');
                        isValid = false;
                    }
                });

                return isValid;
            }

            function showError(element, message) {
                $(element).addClass('is-invalid');
                $(element).after(`<small class="text-danger error-text">${message}</small>`);
            }

            // Remove error message in real time
            $('#packageQueryForm').on('input change', '.form-control', function () {
                $(this).removeClass('is-invalid');
                $(this).next('.error-text').remove();
            });

            // Submit with AJAX
            $('#packageQueryForm').on('submit', function (e) {
                e.preventDefault();

                if (!validateForm()) return;

                const form = $(this);
                const submitBtn = form.find('button[type="submit"]');

                submitBtn.prop('disabled', true).text('Submitting...');

                $.ajax({
                    url: "{{ route('package.query.store') }}",
                    method: "POST",
                    data: form.serialize(),
                    success: function (response) {
                        if (response.success) {
                            form.prepend(
                                '<div class="alert alert-success mb-3">Your query has been submitted successfully!</div>'
                            );
                            form[0].reset();

                            setTimeout(() => {
                                $('#packageQueryModal').modal('hide');
                                $('.alert-success').remove();
                                location.reload();
                            }, 2000);
                        }
                    },

                    error: function (xhr) {
                        form.prepend(
                            '<div class="alert alert-danger mb-3">Something went wrong. Please try again.</div>'
                        );
                    },
                    complete: function () {
                        submitBtn.prop('disabled', false).text('Submit Query');
                    }
                });
            });
        });
    </script>




    <noscript>
        <a href="https://www.livechat.com/chat-with/19341199/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
    <!-- End of LiveChat code -->

</body>

</html>