<?php
    require "common.php";
    // get details
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    // hash password
    $hashed_password = md5($password);
    $query1 = "SELECT id FROM customer_details WHERE email = '$email' AND password = '$hashed_password'";
    $query2 = "INSERT INTO customer_details (`name`, `email`,`address`,`city`,`state`,`password`,`contact`) VALUES ('$name', '$email','$address','$city','$state','$hashed_password', '$contact')";

    // check if already registered user
    $result = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        // perform query operation
        $result = mysqli_query($conn, $query2);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);

        // redirect to products page
        header("location: ../homePageCustomer.php");
    }
?>