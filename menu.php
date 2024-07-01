<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title> 
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
<link rel="stylesheet" href="css/menu.css">  
<!-- responsive css -->
<link rel="stylesheet" href="menu-responsive.css"> 

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
          <a class="nav-link fs-6 text-white active" href="#menu">Menu</a>
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
   <section class="banner-section overflow-hidden">
    <div class="container-fluid bg-danger p-0 menu-banner-wrapper"> 
    <div class="gradient-overlay"></div>
        <img src="image/banner-img2.jpg" alt="menu-bannerimg" width="100%" class="img-fluid"> 
        <div class="menu-banner-content text-center  z-3  position-absolute top-50 start-50 translate-middle text-light"data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out" > 
            <h1 class="menu-head1 display-1">MENU</h1>
            <span class="menu-head2 display-6"> home > menu</span>
    </div>
   </section> 
   <!-- menu-section -->
    <section class="main-menu-section overflow-hidden">
        <div class="container ">
          <div class="row  "> 
            <div class="col-lg-12 col-md-12 col-sm-12  d-lg-flex justify-content-lg-center align-items-lg-center  menu-wrapper text-center ">
            <p class=" menu   fw-bold py-3 px-2 ">Breakfast</p>
            <p class=" menu  fw-bold py-3 px-2" >Lunch</p>
            <p class=" menu   fw-bold py-3 px-2" >Dinner</p>
            <p class=" menu   fw-bold py-3 px-2" >Deserts</p>
            <p class=" menu   fw-bold py-3 px-2" >Drinks</p>  
           </div>
          </div>
        </div>
      <!-- all-section -->
<div id="breakfast"> 
   <div class="container p-4">
   <h1 class="menu-head display-4 ">BREAKFAST</h1>
  <div class="row mt-4  px-3">
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
  <div class="row  px-3">
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
  <div class="row px-3">
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
 </div>  
 <div id="lunch"> 
   <div class="container p-4">
   <h1 class="menu-head display-4">LUNCH</h1>
  <div class="row mt-4  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0">
      <img src="image/lunch-1.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Chicken Shawarma Plate</h2> 
        <p>Marinated and grilled chicken slices served over a bed of seasoned rice, accompanied by a side of hummus, tabbouleh, and warm pita bread. A Middle Eastern favorite full of flavor and texture.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-2 d-flex  p-0">
      <img src="image/lunch-2.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Falafel Wrap</h2> 
        <p>Crispy falafel balls wrapped in a warm flatbread with fresh lettuce, tomatoes, cucumbers, and a generous drizzle of tahini sauce. A vegetarian delight that's both healthy and satisfying.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div>
  </div> 
  <div class="row  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Beef Kofta Kebabs
        </h2> 
        <p>Ground beef mixed with spices and herbs, shaped into skewers and grilled to perfection. Served with a side of couscous salad, tzatziki sauce, and flatbread. A hearty and aromatic meal.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/lunch-3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
     
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Lamb Biryani</h2> 
        <p>Fragrant basmati rice cooked with tender pieces of lamb, spices, and herbs, garnished with fried onions and fresh coriander. A traditional South Asian dish that's rich and flavorful.

</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/lunch-4.jpg" alt="special-menuimg" class="special-menuimg" width="40%">
     
       
    </div> 
  </div>  
  <div class="row px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    
      <img src="image/lunch-5.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Salmon with Couscous</h2> 
        <p>A perfectly grilled salmon fillet served over a bed of lemon-herb couscous, accompanied by a side of roasted vegetables. A light and nutritious option for seafood lovers.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
   
      <img src="image/lunch-6.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Vegetable Tagine</h2> 
        <p>A slow-cooked Moroccan stew made with a mix of seasonal vegetables, chickpeas, and spices, served with fluffy couscous. A warm and comforting vegetarian option that's packed with flavor.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div> 
  </div> 
  </div>  
 </div> 
 <div id="dinner"> 
   <div class="container p-4">
   <h1 class="menu-head display-4">DINNER</h1>
  <div class="row mt-4  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0">
      <img src="image/dinner-1.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Lamb Tagine</h2> 
        <p>Tender pieces of lamb slow-cooked with apricots, almonds, and a blend of Moroccan spices, served over a bed of fluffy couscous. A rich and aromatic dish that offers a taste of North African cuisine.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-2 d-flex  p-0">
      <img src="image/dinner-2.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Chicken Biryani</h2> 
        <p>A fragrant rice dish with marinated chicken, saffron, and a blend of spices, garnished with caramelized onions and fresh cilantro. A South Asian classic that's both flavorful and satisfying.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div>
  </div> 
  <div class="row  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Grilled Halal Ribeye Steak</h2> 
        <p>A juicy ribeye steak seasoned and grilled to perfection, served with garlic mashed potatoes and steamed asparagus. A hearty and elegant dinner option for steak lovers.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/dinner-3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
     
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Stuffed Bell Peppers</h2> 
        <p>Bell peppers filled with a savory mixture of ground beef, rice, tomatoes, and spices, baked until tender and topped with melted cheese. A wholesome and colorful meal.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/dinner-4.jpg" alt="special-menuimg" class="special-menuimg" width="40%">
     
       
    </div> 
  </div>  
  <div class="row px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    
      <img src="image/dinner-5.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Seafood Paella</h2> 
        <p>A Spanish-inspired dish with saffron-infused rice, mixed with mussels, shrimp, calamari, and vegetables. A vibrant and flavorful dinner that's perfect for seafood enthusiasts.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
   
      <img src="image/dinner-6.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Vegetarian Moussaka</h2> 
        <p>Layers of eggplant, zucchini, and potatoes, topped with a rich tomato sauce and béchamel, then baked to golden perfection. A Mediterranean dish that's both comforting and delicious.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div> 
  </div> 
  </div>  
 </div> 
 <div id="desert"> 
   <div class="container p-4">
   <h1 class="menu-head display-4">DESERTS</h1>
  <div class="row mt-4  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0">
      <img src="image/desert-1.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Baklava</h2> 
        <p>A rich, sweet pastry made of layers of filo dough filled with chopped nuts and sweetened with honey or syrup. A classic Middle Eastern dessert known for its flaky texture and sweet, nutty flavor.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-2 d-flex  p-0">
      <img src="image/desert-2.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Tiramisu</h2> 
        <p>A classic Italian dessert featuring layers of coffee-soaked ladyfingers, mascarpone cheese, and cocoa powder. This creamy and indulgent treat is perfect for coffee lovers.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div>
  </div> 
  <div class="row  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Mango Sticky Rice</h2> 
        <p>A popular Thai dessert made with sweet sticky rice, fresh mango slices, and a drizzle of coconut milk. This tropical treat is both refreshing and satisfying.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/desert-3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
     
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Chocolate Lava Cake</h2> 
        <p>A decadent dessert with a rich, gooey chocolate center that flows out when you cut into it. Served warm with a scoop of vanilla ice cream, this dessert is a chocoholic's dream.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/desert-4.jpg" alt="special-menuimg" class="special-menuimg" width="40%">
     
       
    </div> 
  </div>  
  <div class="row px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    
      <img src="image/desert-5.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Crème Brûlée</h2> 
        <p>A French classic consisting of a rich vanilla custard base topped with a contrasting layer of hard caramel. The creamy custard and crunchy caramel make for a delightful texture contrast.

</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
   
      <img src="image/desert-5.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Raspberry Macarons</h2> 
        <p>Delicate French almond cookies with a crisp exterior and a soft, chewy interior, filled with a luscious raspberry buttercream. These colorful and elegant treats are perfect for any occasion.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div> 
  </div> 
  </div>  
 </div> 
 <div id="drink"> 
   <div class="container p-4">
   <h1 class="menu-head display-4">DRINKS</h1>
  <div class="row mt-4  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0">
      <img src="image/drink-1.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Mango Lassi</h2> 
        <p>A refreshing Indian yogurt-based drink blended with ripe mangoes, a touch of sugar, and a hint of cardamom. Perfectly creamy and sweet, ideal for cooling down on a hot day.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-2 d-flex  p-0">
      <img src="image/drink-2.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Hibiscus Iced Tea</h2> 
        <p>A vibrant, ruby-red iced tea made from dried hibiscus flowers, offering a tart and slightly sweet flavor. Often garnished with a slice of lemon and a sprig of mint for a refreshing summer beverage.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
       </div>
       
    </div>
  </div> 
  <div class="row  px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Mint Lemonade</h2> 
        <p>Freshly squeezed lemon juice mixed with mint leaves, sugar, and cold water, creating a zesty and invigorating drink. Great for quenching thirst and revitalizing the senses.

</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/drink-3.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
     
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    <div class="special-menu-content ps-3 py-3">
        <h2>Pomegranate Spritzer</h2> 
        <p>A sparkling drink combining pomegranate juice with soda water, topped with a splash of lime juice and garnished with pomegranate seeds. Light, fizzy, and full of antioxidants.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
      <img src="image/drink-4.jpg" alt="special-menuimg" class="special-menuimg" width="40%">
     
       
    </div> 
  </div>  
  <div class="row px-3">
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
    
      <img src="image/drink-5.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Spiced Chai Latte</h2> 
        <p>A warm, comforting blend of black tea, milk, and aromatic spices such as cinnamon, cardamom, and cloves. This creamy and fragrant drink is perfect for cozy evenings.

</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-12 special-menu1-1 d-flex  p-0"> 
   
      <img src="image/drink-6.jpg" alt="special-menuimg" class="special-menuimg " width="40%">
      <div class="special-menu-content ps-3 py-3">
        <h2>Coconut Water Cooler</h2> 
        <p>Pure coconut water mixed with a splash of pineapple juice and served over ice, sometimes garnished with a slice of lime. A hydrating and naturally sweet tropical refreshment.</p>  
        <h3 class="fw-bold">$29</h3> 
        <button class="btn btn-outline-success book-order " type="button">Order Now</button>
      </div>
       
    </div> 
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
<script src="menu-script.js"></script>
</html>