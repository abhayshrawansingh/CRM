<?php
    $_username=$_POST['username'];
    $_password=$_POST['password'];
    if($_username=="admin" && $_password=="admin"){
        header("Location:home.php");
    }
    else{
        echo "<script>alert('Incorrect user and password');</script>";
        header("Location:index.html");
    }
?>