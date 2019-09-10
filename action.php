<?php
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $email = $_POST["email"];
    $about = $_POST["about"];


    include 'connect.php';

    $sql = " INSERT into student(email, stud_name, roll, about)
             VALUES($email, $name, $roll, $about) ";

    // if(mysqli_select_db($conn,"foss_lab")){
    //     echo "db connected";
    // }
   
    //    echo "<br> can't connect to db";

   if( mysqli_query($conn, $sql)){
       echo "updated successfully";
       
   }
   else 
      echo " can't update";
?>