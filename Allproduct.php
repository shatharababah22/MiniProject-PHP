<?php
session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="./Project.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-…" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<style>
  body{
   background-color: rgb(246,246,246);
  }
  .h1{
    font-family: monospace;
    font-weight: 700;
    font-size: 45px;
    margin-top:60px;
    text-align: center;
    color: rgb(28,86,58);
  }
  .row{
    width:30%;
    height: 50%;
    border-top: 2px dotted green;
    border-radius: 10px;
    box-shadow: 1px 1px 5px rgb(155, 201, 185);
    margin-top:20px;
    margin-left:10px;
  }
  .row2{
    text-align: center;
    font-size: 15px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont,
     'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: rgb(27, 119, 75);
  }
  </style>
<body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-sm ">
        <a class="navbar-brand" href="#"><img src="image/78-782689_recycle-clean-recycling-recycling-logo-transparent-background-hd-removebg-preview.png" class="logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">All products</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Privacy and policy</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search" >
            
          </form>
          <i class="bi bi-person-circle"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </div>
      </nav>

      <div class="container-fluid">


      <?php
if (!empty($_SESSION['products'])) {
  echo '<h1 class="h1">All Products</h1>';
   
  foreach ($_SESSION['products'] as $item) {
    echo '<div class="row">';
    echo '<div class="row2">';
    echo '<br>';
    echo '<img src="' . $item['url'] . '" width="250" height="250" alt="Product Image">';
    echo '<br>';
    echo '<br>';
    echo 'The Name: ' . $item['ItemName'] . '<br>';
    echo 'Description: ' . $item['TheDescription'] . '<br>';
    echo 'The Price: ' . $item['ThePrice'] . '<br>';

    echo '</div>';
    echo '</div>';
  }
} else {
    echo "No products found in the session.";
}
?>

















<!-- footer -->

<div class=footer>

<div class="foot1">
<img src="./image/78-782689_recycle-clean-recycling-recycling-logo-transparent-background-hd-removebg-preview.png"  class="logoinfooter">
<p>recycleditems22@gmail.com</p>
<p>+962790751376</p>
<p>Follow us<br></p>
<a href="https://www.linkedin.com/in/shatha-rababah-282571211/" target="_top"><i class="fab fa-linkedin" style="font-size: 30px;"></i></a>&nbsp;&nbsp;
<a href="https://web.facebook.com/shatha.rababah.7/" target="_blank"><i class="fab fa-facebook"style= "font-size: 30px;"></i></a>&nbsp;&nbsp;
<a>  <i class="fab fa-twitter"style= "font-size: 30px;"></i></a>&nbsp;&nbsp;
<a href="https://www.instagram.com/Shatharababah/?fbclid=IwAR3kfL3ejE3j6wKW1rUoF4ToroighTLQvrfXFIiUNVCxGQB9wZym52hm8gs" target="_blank"><i class="fab fa-instagram" style="font-size: 30px;"></i></a>
</div>

<div class="foot2">
<b><h1 class="link">Links</h1></b>
<p class="link1">Home</p>
<p class="link1">About us</p>
<p class="link1">All products</p>
<p class="link1">Privacy and policy</p>
</div>

<div class="foot3">
  <b><h1 class="link">Contact me</h1></b>
  <form> 
  <input type="text" id="email" name="email" placeholder="Enter your email">
  <br> 
  <input type="password" id="password" name="password" placeholder="Enter your password"><br>
  <button type="button" class="btn btn-success" id="button2">Send</button>
  </form>
</div>

</div>

  </div>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>