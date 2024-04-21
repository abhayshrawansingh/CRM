<?php
    $conn=mysqli_connect("localhost","root","","");
    if(!$conn){
        die("Error is: ".mysqli_connect_error());
    }
    else{
        $sql= "create database abhay;";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "DataBase is Created.";
        }
        else{
            echo "DataBase Not Created.";
        }
    }
?>