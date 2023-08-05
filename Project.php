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
  



  <!-- style of php code -->
  <style>
  .Table {
    width: 100%;
   
    margin-top:70px;
   
   
  }
body{
  background-color: rgb(246,246,246);
}
  .Table td {
    border-bottom: 2px dotted green;
    border-left: 2px dotted green;
    padding: 8px;
    text-align: center;
  }

  .Table th {
    background-color:   rgb(219,227,212);
    
    padding: 20px;
    text-align: center;
  }
  .Table p{
    font-size:16px;
    color:  rgb(28,86,58);
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 
    'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
  


        
<!-- Header Section        -->
<div class="row" id="row1">
    <div class="col-sm-8">
      <div class="content"><h1 class="h">Welcome to our Recycled Jewelry Website!</h1><p>At Recycled Jewelly,
         we are passionate about sustainable fashion and environmentally friendly practices.
         Our mission is to offer you beautifully crafted jewelry pieces that not only adorn your style but also contribute to a cleaner and greener planet. With a focus on recycling and upcycling materials, we bring you unique and stunning
         jewelry collections that resonate with eco-conscious individuals like you.</p></div>
      <i class="bi bi-arrow-left-circle"></i>
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
       <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
    <button type="button" class="btn btn-success" id="button">Shop Now</button>
    </div>
    <div class="col-sm-4">
        <i class="bi bi-arrow-right-circle"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
        </svg>
    </div>
</div>



<!-- Add items -->

<div class="row" id="row2">
    <div class="col-sm-12">
    <h1 class="Header">Add Product</h1>
    <form method="post">
          <input type="text" class="form-control" id="in1" placeholder="Item Name" name="ItemName">
          <input type="text" class="form-control" id="in2" placeholder="The Description" name="TheDescription">
          <input type="url" class="form-control" id="in3" placeholder="URL of photo" name="url">
          <input type="text" class="form-control" id="in4" placeholder="The Price" name="ThePrice">
          <button type="submit" class="btn btn-success" id="button1" name="submit" >Submit</button>
   </form>
</div>



<!-- PHP code -->
<?php



if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $newItem = array(
        'ItemName' => $_POST["ItemName"],
        'TheDescription' => $_POST["TheDescription"],
        'url' => $_POST["url"],
        'ThePrice' => $_POST["ThePrice"]
    );
     
    // Check if the item already exists in the products array
    $isDuplicate = false;
    foreach ($_SESSION['products'] as $item) {
        if ($item['ItemName'] === $newItem['ItemName'] && $item['TheDescription'] === $newItem['TheDescription']) {
            $isDuplicate = true;
            break;
        }
    }

    if (!$isDuplicate) {
        $_SESSION['products'][] = $newItem;
    }
}

if (!empty($_SESSION['products'])) {
    echo '<table class="Table">
     
            <tr>
                <th>Item </th>
                <th>Item Id</th>
            </tr>';

    $ItemNumber = 1;
    foreach ($_SESSION['products'] as $item) {
        echo "<tr>
                <td>$ItemNumber</td>
                <td>
                <img src='" . $item['url'] . "' width='250px' height='250px'><br><br>
                <p>Item Name:  " . $item['ItemName'] . "</p>
                <p>The Description:  ". $item['TheDescription'] . "</p>
                <p>The Price:  ". $item['ThePrice'] . "</p>
                </td>
              </tr>";
        $ItemNumber++;
    }

    echo "</table>";
}


// // remove all session variables
// session_unset();

// // destroy the session
// session_destroy();
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