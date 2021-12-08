<?php
require "connection/common.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Food-order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Optional theme -->

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
<div class="front-css">
<!--from here starts heading-->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand logo" href="index.php">Food-order</a>
<a class="cust-profile" href="cust-profile.php">Piyush Kumar</a>
</nav>
<p id="punch-line">Discover the best resturant food in your city</p>
<div class="search-box">
  
    <input type="search" id="search-input" class="form-control" placeholder="search food or resturant"/>

  <button type="button" class="btn btn-primary" id="search-button">
    <i class="fa fa-search"></i>
  </button>
</div>
</div>
<div id="result1"></div>

  <div class="flex-container">
  <!-- Footer Links -->

    <!-- Facebook -->
    <div><a class="fb-ic">
      <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-1x"> </i>
    </a>
    </div>
    <!-- Twitter -->
    <div>
    <a class="tw-ic">
      <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-1x"> </i>
    </a>
    </div>
    <!-- Google +-->
    <div>
    <a class="gplus-ic">
      <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-1x"> </i>
    </a>
    </div>
    <!--Linkedin -->
    <div>
    <a class="li-ic">
      <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-1x"> </i>
    </a>
    </div>
    <!--Instagram-->
    <div>
    <a class="ins-ic">
      <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-1x"> </i>
    </a>
    </div>
    <!--Pinterest-->
    <div>
    <a class="pin-ic">
      <i class="fa fa-pinterest fa-lg white-text fa-1x"> </i>
    </a>
    </div>
<!-- Grid column -->

</div>
<!-- Grid row-->

</body>

</html>