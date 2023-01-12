<?php
include_once "bdconnect.php";
    if (!$_POST["review-name"] || !$_POST["review-text"]) {
       header("Location: http://rustywheels/review-page.php"); 
    }
    else {
       $name = $_POST["review-name"];
        $review = $_POST["review-text"];
        $sql = mysqli_query($link, "INSERT INTO `reviews` (`name`, `review`) VALUES ('$name', '$review')");
        if ($sql) {
            header("Location: http://rustywheels/index.php");
        }
    }
    
    
?>