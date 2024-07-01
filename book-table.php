<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<link rel="stylesheet" href="css/book-table.css">  
<!-- responsive css -->
<link rel="stylesheet" href="css/book-table-responsive.css"> 

</head>
<body>
 <?php  
 if($_SERVER['REQUEST_METHOD'] == 'POST'){ 


  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
  $phone = $_REQUEST["phone"];
  $date = $_REQUEST["date"];
  $time = $_REQUEST["time"];
  $person = $_REQUEST["person"];   

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "book_table";
  
$conn = mysqli_connect($servername,$username,$password,$dbname);
 
if(!$conn){
  die("connection was unsuccessful".mysqli_connect_error());
}
else{
 $mysql = "INSERT INTO `booktable_info` ( `Name`, `Email`, `Phone-number`, `Date`, `Time`, `Person`) VALUES (' $name', ' $email', '$phone', '$date', '$time', '  $person');"; 
  $result = mysqli_query($conn,$mysql); 
  if($result){
  echo '<div class="alert alert-success" role="alert">
  <h2 class="alert-heading fw-bold">Well done!</h2>
  <p>Congratulation Your Table has been Booked Successfully</p>
  </div>';
}
else{
  echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Sorry! there is a techinical error in your Booking</p>
 </div>';
} 
} 
}
?>
  
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
          <a class="nav-link fs-6 text-white " href="#menu">Menu</a>
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
        <button class="btn btn-outline-success book-table ms-2" type="button">Book table</button>
     
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
            <h1 class="menu-head1 display-1">BOOK A TABLE</h1>
            <span class="menu-head2 display-6"> home > book table</span>
    </div>
   </section>   
   <!-- book-table-form -->
    <section class="book-table-form-section overflow-hidden">
        <div class="container  mt-4 p-5 ">
           <div class="row bg-dark rounded p-4" data-aos="fade-up" data-aos-duration="1000"  data-aos-easing="ease-in-out">
            <div class="col-lg-12">
                <h1 class="display-1 text-center f-bold booktable-heading">BOOK A TABLE</h1> 
                <form action="book-table.php" method="POST"  onsubmit="return validateForm()">
    <div class="row py-3">
        <div class="col-lg-12 py-3">
            <label for="name" class="form-label text-white fs-3 fw-bold">Your Name</label>
            <input type="text" class="form-control" aria-label="First name" name="name" id="name">
            <span class="text-danger fs-5" id="name-error"></span>
        </div>
        <div class="col-lg-12 py-3">
            <label for="email" class="form-label text-white fs-3 fw-bold">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <span class="text-danger fs-5" id="email-error"></span>
        </div>
        <div class="col-lg-12 py-3">
            <label for="phone" class="form-label text-white fs-3 fw-bold">Phone</label>
            <input type="number" name="phone" class="form-control" id="phone" aria-describedby="emailHelp">
            <span class="text-danger fs-5" id="phone-error"></span>
        </div>
        <div class="col-lg-12 py-3">
            <label for="date" class="form-label text-white fs-3 fw-bold">Date</label>
            <input type="date" name="date" class="form-control" id="date" aria-describedby="emailHelp">
            <span class="text-danger fs-5" id="date-error"></span>
        </div>
        <div class="col-lg-12 py-3">
            <label for="time" class="form-label text-white fs-3 fw-bold">Time</label>
            <input type="time" name="time" class="form-control" id="time" aria-describedby="emailHelp">
            <span class="text-danger fs-5" id="time-error"></span>
        </div>
        <div class="col-lg-12 py-3">
            <label for="person" class="form-label text-white fs-3 fw-bold">Persons</label>
            <select name="person" id="person" class="form-control"> 
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <span class="text-danger fs-5" id="person-error"></span>
        </div>
        <div class="d-grid gap-2">
            <input type="submit" value="Submit" name="submit now" class="book-table fs-2 fw-bold py-2" id="submit-btn">
        </div>
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
<script src="js/book-table-script.js"></script>
</html> 

<!--  -->