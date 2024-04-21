<?php
    function getConnection(){
        $conn = mysqli_connect("localhost","root","","wholeselar");
      
        if($conn){
            return $conn;
        }
    }
?>