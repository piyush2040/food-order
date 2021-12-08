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

<link rel="stylesheet" type="text/css" href="css/style-for-login-ask.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
<div class="d-flex flex-column bd-highlight mb-3 for-margin">
<div class="p-2 bd-highlight mat"><a>Login as a customer</a></div>
<div class="p-2 bd-highlight mat"><a>Login as a resturant</a></div>
<div class="p-2 bd-highlight mat"><a>Login as a delivery executive</a></div>
</div>
<?php
require 'partials/footer.php';
?>
</body>
</html>
