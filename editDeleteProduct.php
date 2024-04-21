<?php
 if(isset($_POST['edit'])){
    $id=$_POST['edit'];
    echo "<script>alert('edit $id')</script>";
   }
  else if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $conn=mysqli_connect('localhost','root','','wholeselar');
    $sql="DELETE FROM product WHERE `product`.`pid` = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Delete Succufully.')</script>";
        header("Location:product.php");
    }
   }
?>