<!DOCTYPE html>
<html>
	<head>
		<title>Food-order</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="../css/register.css">
	</head>
	<body>
        <div class="container panel-transparent">
        <div class="panel panel-primary panel-transparent">
  <div class="panel-heading">
    <h3 class="panel-title panel_title">Register as resturant</h3>
  </div>
  <div class="panel-body">
		<form method="post" action="../connection/resturant_script_login.php">
            <div class="form-group">
                <input type="email" class="form-control input-transparent" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-transparent" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
    <div class="panel-footer panel-footer-modified">
        Don't have an account?Click <a href="../register/register-as-resturant.php">here</a> to register.
    </div>
		<?php
			require "../partials/footer.php";
		?>
	</body>
</html>