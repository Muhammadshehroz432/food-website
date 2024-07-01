<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title> 
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
<link rel="stylesheet" href="css/style.css"> 
<!-- responsive css -->
<link rel="stylesheet" href="responsive.css">
</head> 

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- top-header-design -->
    <header>
        <div class="top-header overflow-hidden ">
            <div class="container-fluid d-flex justify-content-between align-item-center px-5   top-header-wrapper ">
              <div class="phone p-2 ">
              <i class="fa-solid fa-phone"></i> 
              <span class="phone-text fw-bold">+91 1234567890</span>
              </div>  
              <div class="email p-2 ">
              <i class="fa-regular fa-envelope "></i>
              <span class="phone-text fw-bold phone span">youremail@email.com</span>
              </div>  
              <div class="open-hour p-2 ">
             <span class="open-hour-text fw-bold ">Open hours: Monday - Sunday 8:00AM - 9:00PM</span>
              </div> 
              </div>
        </div>  
        <nav class="navbar navbar-expand-lg navigation-wrap overflow-hidden">
  <div class="container">
    <a class="navbar-brand fw-bold fs-2" href="index.php">DINE.IN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars fs-2 navbar-icon"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3">
          <a class="nav-link text-white active fs-6" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#about">About</a>
        </li>  
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#service">Services</a>
        </li> 
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="menu.php">Menu</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#reviews">Reviews</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="#stories">stories</a>
        </li> 
        <li class="nav-item ms-3">
          <a class="nav-link fs-6 text-white" href="contact.php">Contact</a>
        </li>
        <button class="btn btn-outline-success book-table ms-2" type="button"><a href="book-table.php" class="text-white text-decoration-none">Book table</a></button>
     
    </div>
  </div>
</nav>
</header>
<!-- banner-section -->
 <section id="home" class="overflow-hidden">
 <div id="carouselExampleFade" class="carousel slide carousel-fade"data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"data-bs-interval="2000">
      <div class="gradient-overlay"></div>
      <img src="image/banner-img1.jpg" class="d-block w-100 " alt="bannerimg"> 
      <div class="carousel-caption lh-1  z-3   position-absolute top-50 start-50 translate-middle "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out" >
       <center><h1 class="banner-heading mb-0">DINE.IN</h1></center> 
        <p  class="fs-1 banner-para">"Savor Every Moment"</p>
      </div>
    </div>
    <div class="carousel-item"data-bs-interval="2000">
      <div class="gradient-overlay"></div>
      <img src="image/banner-img2.jpg" class="d-block w-100 " alt="bannerimg"> 
      <div class="carousel-caption lh-1  z-3  position-absolute top-50 start-50 translate-middle">
      <center><h1 class="banner-heading mb-0">DINE.IN</h1></center> 
        <p class="fs-1 banner-para">"Taste the Difference"</p>
      </div>
    </div>
    <div class="carousel-item"data-bs-interval="2000">
      <div class="gradient-overlay"></div>
      <img src="image/banner-img3.jpg" class="d-block w-100 " alt="bannerimg"> 
      <div class="carousel-caption lh-1 z-3  position-absolute top-50 start-50 translate-middle">
      <center><h1 class="banner-heading mb-0">DINE.IN</h1></center> 
        <p class="fs-1 banner-para">"Where Flavor Meets Tradition"</p>
      </div>
    </div>
  </div>
 
</div>
  <div class="banner-menu-section">
    <div class="container-fluid banner-menu-wrapper p-4">
    <div class="row ">
      <div class="col-lg-3 banner-menu" data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200" >
       <center><img src="image/banner-menu1.jpg" class="img-fluid rounded-circle banner-menu-img" alt="bannermenu" width="45%"></center> 
       <div class="banner-menu-content text-center text-white">
        <h3>Grilled Beef with potatoes</h3> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>
       </div>
      </div>
      <div class="col-lg-3  banner-menu" data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><img src="image/banner-menu2.jpg" class="img-fluid rounded-circle banner-menu-img" alt="bannermenu" width="45%"></center> 
      <div class="banner-menu-content text-center text-white">
      <h3>Grilled Beef with potatoes</h3>
        <p>Meat, Potatoes, Rice, Tomatoe</p>
       </div>
      </div>
      <div class="col-lg-3  banner-menu"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><img src="image/banner-menu3.jpg" class="img-fluid rounded-circle banner-menu-img"alt="bannermenu" width="45%"></center>
      <div class="banner-menu-content text-center text-white">
      <h3>Grilled Beef with potatoes</h3>
        <p>Meat, Potatoes, Rice, Tomatoe</p>
       </div>
      </div>
      <div class="col-lg-3  banner-menu"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><img src="image/banner-menu4.jpg" class="img-fluid rounded-circle banner-menu-img" alt="bannermenu" width="45%"></center>
      <div class="banner-menu-content text-center text-white">
      <h3>Grilled Beef with potatoes</h3>
        <p>Meat, Potatoes, Rice, Tomatoe</p>
       </div>
      </div>
    </div>
    </div>
  </div>
 </section> 
 <!-- about-us-section --> 
  <section class="about-us-section overflow-hidden " id="about">
    <div class="container-fluid ">
     <div class="row p-4">
      <div class="col-lg-6 col-md-12 col-sm-12 about-img-wrapper d-flex"data-aos="fade-right"data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
        <img src="image/about-img1.jpg"class="about-img img-fluid pb-3" width="50%"  alt="aboutimg" >
        <img src="image/about-img2.jpg"class="about-img img-fluid pt-3 ps-4" width="50%"  alt="aboutimg" >
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 about-txt text-start"data-aos="fade-left"data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <h2 class="about-head1 display-3 fw-bold ">About us</h2>
      <h1 class="about-head2 fw-bold">DINE.IN</h1> 
       <p class="about-para lh-sm fs-5 ">
       Welcome to DINE.IN, where great food and good times come together! Our cozy restaurant offers a delicious menu of fresh, locally-sourced dishes prepared with love. Whether you're here for a family meal or a quick bite with friends, we promise a warm atmosphere and flavors that delight. Join us at DINE.IN and taste the difference!
       </p> 
       <p class="mon-fri fs-3">Mon-fri <span class="fw-bold spancolor">8 AM - 11 PM</span></p> 
       <p class="about-number display-6 fw-bold spancolor">+ 1-978-123-4567</p>
      </div> 
     </div>
    </div>
  </section> 

  <!-- service-section -->
   <section id="service" class="service-section overflow-hidden">
    <div class="row ">
     <div class=" col-lg-12 col-md-12 col-sm-12 service-header text-center p-2 "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="100">
      <h1 class="serviceheader1 fw-bold">SERVICES</h1> 
      <h5 class="serviceheader2 display-5 fw-bold ">Catering Services</h5>
     </div>
     <div class="row  service-content-wrapper mt-4">
      <div class="col-lg-4 col-md-12 col-sm-12 service-content  p-4"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
        <center><i class=" fa-solid fa-cake-candles"></i></center> 
        <div class="service-content-txt text-center mt-2 ">
          <h6 class="fw-bold display-6 spancolor">Birthday Party</h6>
          <p>Celebrate your birthday in style at DINE.IN! Our restaurant is the perfect place for a fun and memorable party. Enjoy a delicious menu tailored to your taste, a warm and festive atmosphere, and excellent service that makes you feel special. Let us take care of everything while you enjoy your day with family and friends. Book your birthday party at DINE.IN and make it a celebration to remember!</p>

        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 service-content  p-4 "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><i class="fa-solid fa-handshake"></i></center> 
        <div class="service-content-txt text-center mt-2 ">
          <h6 class="fw-bold display-6 spancolor">Bussiness Meeting</h6>
          <p>Host your next business meeting at DINE.IN, where professionalism meets comfort. Our restaurant offers a quiet, stylish setting ideal for productive discussions and networking. Enjoy tailored menus featuring fresh, locally-sourced dishes, and attentive service that caters to your needs. Make your meeting a success with the perfect blend of great food and a focused atmosphere at DINE.IN.</p>
        </div>
      </div>
      <div class="col-lg-4 service-content p-4"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><i class=" fa-solid fa-cake-candles"></i></center> 
        <div class="service-content-txt text-center mt-2 ">
          <h6 class="fw-bold display-6 spancolor">Wedding Party</h6>
          <p>Celebrate your special day with a wedding party at DINE.IN! Our restaurant provides a charming and elegant setting, perfect for an unforgettable celebration. Enjoy a customized menu featuring fresh, locally-sourced dishes, exceptional service, and a warm, inviting atmosphere. Let us take care of the details while you create beautiful memories with your loved ones. Make your wedding party truly special at DINE.IN.</p>
        </div>
      </div>
     </div>
    </div>
   </section> 
   <!-- Special menu -->
  <section class="special-menu-section overflow-hidden p-4 ">
 <div class="container p-4">
  <div class="row">
    <div class="col-lg-12 text-center px-2 "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">>
     <center> <h1 class="specailmenu-header1 fw-bold">SPECIALITIES</h1></center>
      <h3 class="specailmenu-header2 display-5 fw-bold ">Our Menu</h3>
    </div>
  </div>  
  <div class="row mt-4  px-3"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0">
      <img src="image/special-menu1.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-2 d-flex  p-0">
      <img src="image/special-menu2.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div>
  </div> 
  <div class="row  px-3"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/special-menu3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
     
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/special-menu4.jpg" alt="special-menuimg" class="special-menuimg" width="40%">
     
       
    </div> 
  </div>  
  <div class="row px-3"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    
      <img src="image/special-menu3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
   
      <img src="image/special-menu4.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Beef with potatoes</h2> 
        <p>Meat, Potatoes, Rice, Tomatoe</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div> 
  </div> 
  </div>  
 </div>
</section> 

<!-- master-chef-section -->
 <section class="master-chef-section overflow-hidden p-4">
 <div class="container ">
  <div class="row  master-chef-heading text-center"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <h1 class="masterchefheading1 fw-bold">CHEF</h1>
    <h3 class="masterchefheading2  display-5 fw-bold ">Our Master Chef</h3>
  </div> 
  <div class="row our-chef-wrapper mt-2">
    <div class="col-lg-3 col-md-3 col-sm-12 mb-2 " data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <img src="image/masterchef-1.jpg" alt="" class="masterchefimg img-fluid"> 
    <div class="master-chef-content">
      <h3 class="fw-bold">John Smooth</h3> 
      <p>Restaurant Owner</p>
    </div> 
    <div class="chef-social-icon d-flex align-item-center ">
    <i class="fa-brands fa-facebook  fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    <i class="fa-brands fa-twitter  fs-5 spancolor chef-icon p-2 rounded-circle"></i> 
    <i class="fa-brands fa-instagram fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    </div>
    
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 mb-2  "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200"> 
    <img src="image/masterchef-2.jpg" alt="" class="masterchefimg img-fluid"> 
    <div class="master-chef-content">
      <h3 class="fw-bold">Luke Simon</h3> 
      <p>Chef</p> 
      <div class="chef-social-icon d-flex align-item-center ">
    <i class="fa-brands fa-facebook  fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    <i class="fa-brands fa-twitter  fs-5 spancolor chef-icon p-2 rounded-circle"></i> 
    <i class="fa-brands fa-instagram fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 mb-2 "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <img src="image/masterchef-3.jpg" alt="" class="masterchefimg img-fluid">
    <div class="master-chef-content">
      <h3 class="fw-bold">Kharl Branyt</h3> 
      <p>Chef</p> 
      <div class="chef-social-icon d-flex align-item-center ">
    <i class="fa-brands fa-facebook  fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    <i class="fa-brands fa-twitter  fs-5 spancolor chef-icon p-2 rounded-circle"></i> 
    <i class="fa-brands fa-instagram fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 mb-2 "data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <img src="image/masterchef-4.jpg" alt="" class="masterchefimg img-fluid">
    <div class="master-chef-content">
      <h3 class="fw-bold">Rebeca Welson</h3> 
      <p>Head Chef</p> 
      <div class="chef-social-icon d-flex align-item-center ">
    <i class="fa-brands fa-facebook  fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    <i class="fa-brands fa-twitter  fs-5 spancolor chef-icon p-2 rounded-circle"></i> 
    <i class="fa-brands fa-instagram fs-5 spancolor chef-icon p-2 rounded-circle"></i>
    </div>
    </div>
    </div>
  </div>
 </div>
 </section> 
 <!-- review-section --> 
  <section class="review-section overflow-hidden p-5" id="reviews">
    <div class="container-fluid  review-heading-wrapper text-center"> 
      <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="100">
      <h1 class="review-heading1 fw-bold">REVIEW</h1>
      <h3 class="review-heading2  display-5 fw-bold ">Our Testimonial</h3> 
      </div>
      </div>
    </div> 
    <div class="container mt-4 ">
    <div class="row">
      <div class="col-lg-12"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
     <div class="review-content">
      <center><img src="image/review-1.jpg" alt="review-img" class="reviewimg " width="10%" ></center> 
      <div class="review-content-txt text-center mt-2">
        <h2 class="display-5 fw-bold">Review One</h2>
        <p class="text-dark fs-4">DINE.IN is a fantastic spot for a casual meal. The food is delicious and the service is quick and friendly. The ambiance is cozy, making it a great place to relax and enjoy a meal with friends or family.</p>
      </div>
     </div>
    </div>
    <div class="carousel-item" data-bs-interval="1000">
    <div class="review-content">
      <center><img src="image/review-2.jpg" alt="review-img" class="reviewimg " width="10%" ></center> 
      <div class="review-content-txt text-center mt-2">
        <h2 class="display-5 fw-bold">Review Two</h2>
        <p class="text-dark fs-4">I had a wonderful experience at DINE.IN. The menu offers a variety of tasty options, and everything I tried was fresh and flavorful. The staff is attentive and welcoming. Highly recommend for a nice dining experience.</p>
      </div>
     </div>
    </div>
    <div class="carousel-item"data-bs-interval="1000">
    <div class="review-content">
      <center><img src="image/review-3.jpg" alt="review-img" class="reviewimg " width="10%" ></center> 
      <div class="review-content-txt text-center mt-2">
        <h2 class="display-5 fw-bold">Review Three</h2>
        <p class="text-dark fs-4">DINE.IN exceeded my expectations. The dishes were expertly prepared and the flavors were amazing. The restaurant is clean and the atmosphere is inviting. The staff made sure we had a great time. Will definitely return!</p>
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
    </div>
    </div>
  </section> 
  <section class="blog-section overflow-hidden p-4" id="stories">
 <div class="container-fluid  ">
  <div class="row">
    <div class="col-lg-12 blog-heading text-center"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <h1 class="blog-heading1 fw-bold">BLOGS</h1> 
      <h3 class="blog-heading2  display-5 fw-bold ">Our Recent Blogs </h3> 
    </div> 
</div> 
</div>
<div class="container  ">
  <div class="row our-blog-wrapper mt-4">
    <div class="col-lg-4 col-md-4 col-sm-12  blog-content"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
      <center><img src="image/blog1.jpg" class="blogimg img-fluid" alt="blogimg"></center> 
      <div class="blog-content-txt">
        <p>Sept. 06, 2019 Admin</p> 
        <h4 class="blog-head">Taste the delicious foods in Asia</h4> 
        <a href="#" class="text-decoration-none">Read More</a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12   blog-content"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200"> 
    <center><img src="image/blog2.jpg" class="blogimg img-fluid" alt="blogimg"></center> 
    <div class="blog-content-txt">
        <p>Sept. 06, 2019 Admin</p> 
        <h4 class="blog-head">Taste the delicious foods in Asia</h4> 
        <a href="#" class="text-decoration-none">Read More</a>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12   blog-content"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out"   data-aos-offset="200">
    <center><img src="image/blog3.jpg" class="blogimg img-fluid" alt="blogimg"></center> 
    <div class="blog-content-txt">
        <p>Sept. 06, 2019 Admin</p> 
        <h4 class="blog-head">Taste the delicious foods in Asia</h4> 
        <a href="#" class="text-decoration-none">Read More</a>
      </div>
    </div>
  </div>
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
<script src="script.js"></script>
</html>


<!--  <div class="row bg-danger special-menu1-1">
   <div class="col-lg-6 d-flex  "> 
    <img src="image/special-menu1.jpg" alt="" class="special-menu1-1img img-fluid" width="40%" > 
    <div class="special-menu-content px-4 py-3">
      <h2>Grilled Beef with potatoes</h2> 
      <p>Meat, Potatoes, Rice, Tomatoe</p> 
      <h3 class="fw-bold">$29</h3>
      <button class="btn btn-outline-success book-order ms-2 " type="button">Order Now</button>
    </div> 
   </div>
   <div class="col-lg-6 d-flex  "> 
    <img src="image/special-menu2.jpg" alt="" class="special-menu1-1img img-fluid" width="40%" > 
    <div class="special-menu-content px-4 py-3">
      <h2>Grilled Beef with potatoes</h2> 
      <p>Meat, Potatoes, Rice, Tomatoe</p> 
      <h3 class="fw-bold">$29</h3>
      <button class="btn btn-outline-success book-order ms-2 " type="button">Order Now</button>
    </div> 
   </div>
   </div>
  </div>  -->