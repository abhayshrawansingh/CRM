<?php
    if(isset($_POST['back'])){
        header('location:product.php');
    }
    if(isset($_POST['addProduct'])){
        $pname=$_POST['pname'];
        $categories=$_POST['categories'];
        $shipping_type=$_POST['shipping_type'];
        $cod=$_POST['cod'];
        $show_price=$_POST['show_price'];
        $enquiry=$_POST['enquiry'];
       /* $vname=$_POST['vname'];
        $vcolor=$_POST['vcolor'];
        $vprice=$_POST['vprice'];
        $strikeprice=$_POST['Strikeprice'];
        $premiumprice=$_POST['Premiumprice'];
        $quantity=$_POST['quantity'];
        $bulkstatus=$_POST['bulkprice'];*/
        $description=$_POST['description'];
        /*

        code for thumbnail

        */
        /*

        code for angle images

        */

        //  CODE FOR STORE PRODUCT DETAILS IN PRODUCT TABLE
        $conn=mysqli_connect('localhost','root','','wholeselar');
        if($conn){
            $image="abc";
            $sql="INSERT INTO `product`(`name`, `categories`, `shipping_type`, `cod_allowed`, `show_price`, `enquiry`, `description`) VALUES ('$pname','$categories','$shipping_type','$cod','$show_price','$enquiry','$description');";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('add Product Succusfully.')</script>";
            }
            else{
                echo "<script>alert('Not Add Product.')</script>";
            }
        }
        else{
            echo "<script>alert('Technical Issue.')</script>";
        }
    }
?>