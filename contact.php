<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
     <!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
<!-- fontawesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="contact.css">  
<!-- responsive css -->
<link rel="stylesheet" href="css/contact-responsive.css"> 

</head>
<body>
    <!-- header-nav-section -->

    <header class="menu-header-section overflow-hidden">
    <nav class="navbar navbar-expand-lg navigation-wrap overflow-hidden">
  <div class="container">
    <a class="navbar-brand fw-bold fs-2" href="index.php">DINE.IN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars fs-2 navbar-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3">
          <a class="nav-link text-white  fs-6" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#about">About</a>
        </li>  
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#service">Services</a>
        </li> 
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white " href="menu.php">Menu</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#reviews">Reviews</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#stories">stories</a>
        </li> 
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white active" href="#contact">Contact</a>
        </li>
        <button class="btn btn-outline-success book-table ms-2" type="button"><a href="book-table.php" class="text-white text-decoration-none">Book table</a></button>
     
    </div>
  </div>
</nav>
    </header> 
    <!-- banner-section -->
   <section class="banner-section overflow-hidden">
    <div class="container-fluid bg-danger p-0 menu-banner-wrapper"> 
    <div class="gradient-overlay"></div>
        <img src="image/banner-img2.jpg" alt="menu-bannerimg" width="100%" class="img-fluid"> 
        <div class="menu-banner-content text-center  z-3  position-absolute top-50 start-50 translate-middle text-light"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out" > 
            <h1 class="menu-head1 display-1">CONTACT</h1>
            <span class="menu-head2 display-6"> home > contact</span>
    </div>
   </section>  
   <!-- contact-form -->
    <section class="contact-form overflow-hidden mt-3 "> 
        <div class="container contact-from-wrapper mt-2 p-4  rounded"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out" data-aos-offset="200" >
           <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <h1 class="contact-head text-center display-3">Get in Touch</h1> 
                <form  action="https://formspree.io/f/mjkbbbbe"
                    method="POST">
                    <div class="container">
                        <div class="row ">
                        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white fs-3 fw-bold">Your Name</label>
    <input type="text" name="text" class="form-control"  aria-label="First name">
   
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label text-white fs-3 fw-bold">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 "> 
  <label for="exampleInputEmail1" class="form-label text-white fs-3 fw-bold">Your message here</label>
  <textarea class="form-control" name="message"  id="floatingTextarea2" style="height: 100px"></textarea>
</div>
  <button type="submit" class="btn btn-primary fs-3 fw-bold book-table">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
           </div>
        </div> 
        <div class="row mt-5 mb-3 ">
            <div class="col-lg-12">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14421.307820560816!2d68.3458634!3d25.360356449999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1718806172439!5m2!1sen!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
            </div></center>
        </div>
    </section> 
      <!-- footer-section -->
  <section class="footer-section overflow-hidden bg-black py-4 ">
    <div class="container ">
     <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 ">
      <div class="footer-logo-content ">
      <a class="navbar-footer-logo fw-bold display-5" href="#">DINE.IN</a>
      <p class="text-white">Celebrate your special day with a wedding party at DINE.IN! Our restaurant provides a charming and elegant setting, perfect for an unforgettable celebration. Enjoy a customized menu featuring fresh, locally-sourced dishes, exceptional service, and a warm, inviting atmosphere.</p> 
      <div class="footer-logo-icons d-flex ">
      <i class="fa-brands fa-facebook  fs-2 spancolor chef-icon p-3 rounded-circle"></i>
    <i class="fa-brands fa-twitter  fs-2 spancolor chef-icon p-3 rounded-circle"></i> 
    <i class="fa-brands fa-instagram fs-2 spancolor chef-icon p-3 rounded-circle"></i>
      </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12    text-start py-4 ps-lg-4 ps-md-4    ">
     
        <ul class="open-hours-time ps-0  ">
          <span class="fw-bold text-white fs-2">OPEN HOURS</span>

          <li class="text-white">Monday
          9:00 - 24:00</li> 
          <li class="text-white">Tuesday
          9:00 - 24:00</li> 
          <li class="text-white">Wednesday
          9:00 - 24:00</li>
          <li class="text-white">Thursday
          9:00 - 24:00</li>
          <li class="text-white">Friday
          9:00 - 02:00</li>
          <li class="text-white">Saturday
          9:00 - 02:00</li>
          <li class="text-white">Sunday
          9:00 - 02:00</li>
        </ul>
      </div> 
    <div class="col-lg-3 col-md-3 col-sm-12  py-4 text-start py-3 ps-lg-4 ps-md-4  ">
     <ul class="open-hours-time ps-0  ">
       <span class="fw-bold text-white fs-2">SECTION</span>
       <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About us</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Services</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">blogs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Reviews</a></li>
     </ul>
   </div> 
   <div class="col-lg-3 col-md-3 col-sm-12  py-4 text-start py-5 ">
   <form>
          <h5 class="text-white">Subscribe to our newsletter</h5>
          <p class="text-white">Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-outline-success book-table ms-2" type="button">Subscribe</button>
          </div>
        </form>
   </div>
      </div>
      </div>
  </section>
</body>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script> 
<!-- AOS js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- custom js -->
<script src="contact-script.js"></script>
</html>