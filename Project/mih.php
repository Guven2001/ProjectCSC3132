<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Medicare Intergrated Healthcare</title>
  <meta name="title" content="Doclab - home">
  <meta name="description" content="This is a madical html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/imagenew.png" width="200" height="110" alt="UOV-MIH">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/imagenew.png" width="200" height="110" alt="UOV-MIH">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Doctors</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Contact</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="#" class="btn has-before title-md">Make Appointment</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To UOV-MIH</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Doctor <br>
              Availability.
            </h1>
            <button class="btn has-before">
              <ion-icon name="search"></ion-icon>
              <span class="span title-md">Find Now</span>
            </button>
            <br>

              <div class="form-container">
                <h1 class="form-title">Appointment Form</h1>
                <hr>
                <form action="#" method="post">
                  <label for="registration-number">Registration Number</label>
                  <input type="text" id="registration-number" name="registration-number" placeholder="Enter your registration number" required>
            
                  <label for="full-name">Full Name</label>
                  <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
            
                  <label for="mobile-number">Mobile Number</label>
                  <input type="tel" id="mobile-number" name="mobile-number" placeholder="10-digit number" pattern="[0-9]{10}" required>
            
                  <label for="email-id">Email ID</label>
                  <input type="email" id="email-id" name="email-id" placeholder="Enter your email" required>
            
                  <label for="appointment-date">Appointment Date</label>
                  <input type="date" id="appointment-date" name="appointment-date" required>
            
                  <label align-items: right>
                    <input type="checkbox" id="already-registered" name="already-registered"><h5> I have already registered</h5>
                  </label>
                  <div style="display: flex; justify-content: flex-end; align-items: center;">
                  </div>
                  
            
                  <div class="form-actions">
                    <button type="submit">Book Appointment</button>
                  </div>
                </form>
              </div>

            

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Psychiatry</a>
                </h3>

                <p class="card-text">
                  Psychiatry is a medical field that diagnoses, treats, and prevents mental health disorders like anxiety, depression, and bipolar disorder.
                  Psychiatrists, as medical doctors, use therapies like medication, psychotherapy, and lifestyle changes to improve mental well-being.
                </p>

                <button class="btn-circle" aria-label="read more about psychiatry">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Gynecology</a>
                </h3>

                <p class="card-text">
                  Gynecology focuses on the health of the female reproductive system, diagnosing and treating conditions like menstrual disorders, infections, and hormonal imbalances.
                  Gynecologists also provide preventive care, including cancer screenings, breast exams, and family planning. 
                </p>

                <button class="btn-circle" aria-label="read more about Gynecology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-3.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Pulmonology</a>
                </h3>

                <p class="card-text">
                  Pulmonology specializes in diagnosing and treating respiratory system diseases like asthma, COPD, pneumonia, and lung cancer.
                  Pulmonologists also manage sleep-related breathing issues and critical respiratory conditions in intensive care. 
                </p>

                <button class="btn-circle" aria-label="read more about Pulmonology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedics</a>
                </h3>

                <p class="card-text">
                  Orthopedics focuses on diagnosing and treating musculoskeletal disorders like fractures, arthritis, and sports injuries.
                  Specialists use surgical and non-surgical methods to restore mobility, reduce pain, and improve function.
                </p>

                <button class="btn-circle" aria-label="read more about Orthopedics">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">About Us</p>

            <h2 class="headline-md" data-reveal="left">Experienced Workers</h2>

            <p class="section-text" data-reveal="left">
              To be a leading centre of excellence in knowledge advancement and dissemination for sustainable change.
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <button class="tab-btn active">Vision</button>
              </li>

              <li>
                <button class="tab-btn">Mission</button>
              </li>

              <li>
                <button class="tab-btn">Strategy</button>
              </li>

            </ul>

            <p class="tab-text" data-reveal="left">
              To excel in the quality of education, innovative research and active collaboration for empowering the graduates
              and for the sustainable development of the region and nation.
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Sonsectetur adipisicing elit</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Exercitation ullamco laboris</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Eiusmod tempor incididunt</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Aolore magna aliqua</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="./assets/images/about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">

          <ul class="grid-list">

            <li>
              <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Doctors List</p>

              <h2 class="headline-md" data-reveal="left">Browse by specialist</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Psychiatry</h3>

                  <p class="card-text">Porta velit</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Gynecology</h3>

                  <p class="card-text">Mattis augue</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pulmonology</h3>

                  <p class="card-text">Mauris laoreet</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-5.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Orthopedics</h3>

                  <p class="card-text">Convallis vulputate</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-6.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Pediatrics</h3>

                  <p class="card-text">Posuere maecenas</p>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-7.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <div>
                  <h3 class="headline-sm card-title">Osteology</h3>

                  <p class="card-text">Nisi nullam</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            News & Article
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Articles</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Could intermittent fasting reduce breast cancer</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Intermittent fasting (IF) has garnered attention for its potential to reduce
                   breast cancer risk by improving metabolic health, reducing insulin levels, 
                   and decreasing inflammation. Specialists suggest that fasting may regulate hormones like estrogen,
                    which is linked to certain breast cancers, and promote cellular repair through autophagy. 
                   
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Blood Donation Camp</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  The Blood Donation Camp organized at the university is a collaborative effort aimed 
                  at promoting the importance of saving lives through blood donation. It provides students,
                   faculty, and staff with an opportunity to contribute to the community by donating blood in a safe and hygienic environment. 
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">How do binge eating and drinking impact the liver?</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Binge eating and drinking can have a severe impact on the liver, leading to conditions like fatty liver disease, 
                  inflammation, and long-term damage. Excessive eating, especially of high-fat and high-sugar foods, can cause fat buildup in liver cells,
                   impairing its function. 
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/imagenew.png" width="200" height="110" loading="lazy" alt="UOV-MIH">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  E-mail: <a href="mailto:contact@website.com" class="contact-link">umo@vau.ac.lk</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:+94 24 222 2265" class="contact-link"> +94 24 222 2265</a>
                </p>

                <p>
                  Fax : <a href="tel:+94 24 222 2265" class="contact-link"> +94 24 222 2265</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">About Us</p>

          <p class="text">
            Our Medicare Project is dedicated to revolutionizing healthcare access
            for our university community. By integrating technology with healthcare services,
            we aim to provide seamless, efficient, and transparent medical support.
          </p>

          <address class="address">
            <ion-icon name="map-outline"></ion-icon>

            <span class="text">
              Pampaimadu,<br>
              Mannar Road,<br>
              Vavuniya,<br>
              Sri Lanka.
            </span>
          </address>

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Listing</a>
          </li>

          <li>
            <a href="#" class="text footer-link">How It Works</a>
          </li>

          <li>
            <a href="#" class="text footer-link">What We Offer</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Latest News</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Terms of Use</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Join as a Doctor</a>
          </li>

          <li>
            <a href="#" class="text footer-link">New Guests List</a>
          </li>

          <li>
            <a href="#" class="text footer-link">The Team List</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Subscribe</p>

          <form action="" class="footer-form">
            <input type="email" name="email" placeholder="Email" class="input-field title-lg">

            <button type="submit" class="btn has-before title-md">Subscribe</button>
          </form>

          <p class="text">
            Get the latest updates via email. Any time you may unsubscribe
          </p>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; Copyright 2021 University of Vavuniya.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>