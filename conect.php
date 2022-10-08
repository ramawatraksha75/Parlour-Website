<?php

$connection = new mysqli('localhost', 'root', '', 'parlour');

    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $adress=$_POST['address'];
        $services=$_POST['services'];
        $apointdate=$_POST['apointdate'];
        $apointtime=$_POST['apointtime'];

    $sql = "INSERT INTO contact (Nname, email, phone, Adres, services, apointdate, apointtime) VALUES ('$name', '$email','$number','$adress','$services','$apointdate','$apointtime');";

    if ($connection->query($sql) === TRUE) {
        header('location:home.php');
      } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
      
          
          echo "Registration successful";
          $connection ->close();
      

    }


?>