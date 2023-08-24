<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSF Global - Request A Quote</title>

    <!-- Favicon -->
    <link rel="icon" href="img/SSF.png">
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="index.php" class="probootstrap-logo">SSF Global<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="active"><a href="quote.php">Request A Quote</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="probootstrap-header-social hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect With Us</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(img/quote.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Quote</h1>
          <div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Get A Quote For Your Services</a></h2>
          </div>
        </div>
      </div>
    </div>
    <span class="probootstrap-animate"><a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a></span>
  </section>
  <!-- END: section -->


<main>
    <section id="next-section" class="probootstrap-section">
      <div class="container align-items-center">
        <div class="row">
          <div class="col-md-12">

            <form action="quote_form.php" method="post" class="probootstrap-form">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last_name">Last Name*</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="email">Email*</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="service">Service Name*</label>

                      <select type="text" class="form-control" id="service_name" name="service_name" required>
                        <option type="text" name="service_name" value="Web Design & Development">Web Design & Development</option>
                        <option type="text" name="service_name" value="Business Support">Business Support</option>
                        <option type="text" name="service_name" value="Graphics Design">Graphics Design</option>
                        <option type="text" name="service_name" value="Apps Development">Apps Development</option>
                        <option type="text" name="service_name" value="UI/UX Design">UI/UX Design</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="budget">Your Budget</label>
                        <input type="number" class="form-control" id="budget" name="budget">
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                        <label for="deadline">Your Expected Deadline (Days)</label>
                        <input type="number" class="form-control" id="deadline" name="deadline">
                      </div>
                  </div>

                </div>


                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="needs">Describe Your Needs*</label>
                      <textarea cols="30" rows="10" class="form-control" id="needs" name="needs"></textarea>
                    </div>
                  </div>

                </div>

                <div class="form-group text-center">
                  <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit Request">
                </div>
              </form>

            </div>


      </div>
    </section>



  <footer class="probootstrap-footer">
      <div class="probootstrap-backtotop"><a href="#" class="js-backtotop"><i class="icon-chevron-thin-up"></i></a></div>
      <div class="container">
      <div class="row mb50">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4>SSF Global</h4>
            <p>SSF Global stands as a pioneering force in the realm of web agency services, poised to redefine digital excellence on a global scale. <a href="#">Learn More</a></p>
          </div>
        </div>
        <div class="col-md-3 col-md-push-1">
          <div class="probootstrap-footer-widget">
            <h4>Service Hours</h4>
            <ul class="probootstrap-footer-link">
              <li>Week Days: 09 AM – 06 PM</li>
              <li>Friday: CLOSED</li>
              <li>Saturday - Thursday</li>
              <li>Support: 24/7</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-md-push-1">
          <div class="probootstrap-footer-widget">
            <h4>Links</h4>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Portfolio</a></li>
            </ul>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="probootstrap-footer-link float">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Join Us Today</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
          <div class="probootstrap-footer-widget">
            <h4>Contact Info</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>Daisy Garden, House 14, Road main, Block A, Dhaka-1219, Bangladesh</span></li>
              <li><i class="icon-mail"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>
          </div>
        </div>
        
      </div>
       <div class="row">
         <div class="col-md-12 text-center border-top">
           <p class="mb0">&copy; Copyright 2023 <a href="index.php">SSF Global</a>. All Rights Reserved.
         </div>
       </div>
     </div>
  </footer>  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>