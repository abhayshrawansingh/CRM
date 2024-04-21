<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Wholesaler</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/addProduct.css">
    <link rel="stylesheet" href="assets/css/addProduct1.css">
    <link rel="stylesheet" href="assets/css/addProduct2.css">
    <link rel="stylesheet" href="assets/css/addProduct3.css">
    <link rel="stylesheet" href="assets/css/addProduct4.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title">WHOLESALERKART</span>
                    </a>
                </li>

                <li>
                    <a href="home.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bx bxs-cart"></ion-icon>
                        </span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li class="hovered">
                    <a href="product.php">
                        <span class="icon">
                            <ion-icon class="bx bx-shopping-bag"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bx bxs-category"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outlin"></ion-icon>
                        </span>
                        <span class="title">Leeds</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bx bxs-user"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon class="bx"></ion-icon>
                        </span>
                        <span class="title">Collections</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Activity</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Banner</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Subscribers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Campaign</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!--
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>-->

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- abhay singh-->

            <div class="container1">
            
                <h1>Product Information</h1><br>
                <form method="post">
                    <div class="form-group">
                        <label for="product">Name:</label>
                        <input type="text" id="name" name="pname" required>
                    </div>


                    <div class="form-group">
                        <label for="Categories">Categories:</label>

                        <select name="categories" required>
                            <option value="">Select Categories</option>
                            <option value="Tote Bag">Men Wallet</option>
                            <option value="Tote Bag">Tote Bag</option>
                            <option value="Lunch Bag">Lunch Bag</option>
                            <option value="Tote Bag">Cross Body</option> Bag</option>
                            <option value="Designer Bag">Designer Bag</option>
                            <option value="Mini Bag">Mini Bag</option>
                            <option value="gym & Support Bag">gym & Support Bag</option>
                            <option value="Party Pouch">Party Pouch</option>
                            <option value="Weekander Bag">Weekander Bag</option>
                            <option value="Shoulder Bag">Shoulder Bag</option>
                            <option value="Back Pack">Back Pack</option>
                            <option value="Hand Bag">Hand Bag</option>
                            <option value="Mother Bag">Mother Bag</option>
                            <option value="Fancy Bag">Fancy Bag</option>
                            <option value="Mobile Wallet">Mobile Wallet</option>
                            <option value="Satchel">Satchel</option>
                            <option value="Cross Body Bag">Cross Body Bag</option>
                        </select>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="Categories">Sub Categories:</label>

                        <select>
                            <option value="Categories">Select Sub Categories</option>
                        </select>


                    </div>-->


                    <div class="form-group">
                        <label for="Categories">Shipping Type:</label>

                        <select name="shipping_type" required>
                            <option value="">Select Shipping type</option>
                            <option value="FREE_SHIPPING">FREE_SHIPPING</option>
                            <option value="SHIPPING_PRICE">SHIPPING_PRICE</option>
                            <option value="SHIPPING_PERCENTAGE">SHIPPING_PERCENTAGE</option>
                        </select>
                    </div> 
                    
                    <div>
                        <label>
                            COD allowed<input type="checkbox" checked="checked" name="cod" value=1>
                        </label>
                    </div>

                    <div>
                        <label>
                            Show Price<input type="checkbox" checked="checked" name="show_price" value=1>
                        </label>
                    </div>

                    <div>
                        <label>
                            Enquiry<input type="checkbox" checked="checked" name="enquiry" value=1>
                        </label>
                    </div>

            </div>




            

            
                <div class="container1">

                    <h1>Variants</h1><br>
                        <div class="form-group">
                            <label for="product">Name:</label>
                            <input type="text" id="name" name="vname" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="product">Color:</label>
                            <input type="text" id="name" name="vcolor" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="text" id="name" name="vprice" placeholder="Price" required>
                        </div>

                        <div class="form-group">
                            <label for="Strikeprice">Strike Price:</label>
                            <input type="number" id="Strikeprice" name="Strikeprice" placeholder="Strike Price" required>
                        </div>

                        <div class="form-group">
                            <label for="Strikeprice">Premium Price:</label>
                            <input type="number" id="Premiumprice" name="Premiumprice" placeholder="Premium Price" required>
                        </div>

                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" required>
                        </div>

                        <div>
                            <label>
                                Do you want to add bulk pricing?
                                <input type="checkbox" checked="checked" value="add" name="bulkprice">
                            </label>
                        </div>



                </div>



                <div class="container1">
                    <h1>Description</h1><br>
                    <div class="desc">
                        <b>Description</b><sup style="color: red;">*</sup> &nbsp;
                        <textarea cols="50" rows="5" name="description"></textarea>
                    </div>
                </div>
                <div class="container1">
                    <h1>Product Images</h1>
                    <div class="img">
                        <b>Thumbnail</b><sup style="color: red;">*</sup> &nbsp;
                        <input type="file" id="file" name="thumbnail" accept="image/*" hidden>
                        <div class="img-area" data-img="">
                            <i class='bx bxs-cloud-upload icon'></i>
                            <h3>Upload Image</h3>
                            <p>Image size must be less than <span>5MB</span></p>
                        </div>
                       <b class="select-image" style="text-align: center;">Select Image</b>
                    </div>

                    <script src="assets/js/script.js"></script>


                    <div class="profile-picture">
                        <h1 class="upload-icon">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </h1><br><br>
                        <b>Angle Images</b><sup style="color: red;">*</sup> &nbsp;
                        <br><br>
                        <input class="file-uploader" type="file" onchange="upload()" multiple accept="image/*" />
                        <input class="file-uploader" type="file" onchange="upload()" style="margin-left: 10px;" multiple accept="image/*" />
                        <input class="file-uploader" type="file" onchange="upload()" style="margin-left: 10px;" multiple accept="image/*" />
                        <input class="file-uploader" type="file" onchange="upload()" style="margin-left: 10px;" multiple accept="image/*" />
                        <input class="file-uploader" type="file" onchange="upload()" style="margin-top: 10px;" multiple accept="image/*" />
                    </div>
                </div>

                <button name="back" class="bx bx-arrow-back" style="padding-right:15px; margin-bottom:10%; padding-left:15px; border-radius:5px; padding-top:15px; padding-bottom:15px; font-size:15px; text-align:center; background-color:blue;">Back</button><button class="upload-data" name="addProduct" style="margin-left:40%; padding:15px;font-size:15px; background-color:red; border-radius:5px;">Add Product</button>
</form>
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
        $description=$_POST['description'];
        // varients
        $vname=$_POST['vname'];
        $vcolor=$_POST['vcolor'];
        $vprice=$_POST['vprice'];
        $strikeprice=$_POST['Strikeprice'];
        $premiumprice=$_POST['Premiumprice'];
        $quantity=$_POST['quantity'];
        $bulkstatus=$_POST['bulkprice'];
        
        // thumbnail

      /*  $thumbnail_name=$_FILES['thumbnail']['name'];
        $thumbnail_path=$_FILES['thubmnail']['tmp_name'];
        $thumbnail_ext=pathinfo($thumbnail_path,PATHINFO_EXTENSION);
        $thumbnail_name=pathinfo($thumbnail_name,PATHINFO_FILENAME);

        // end thumbnail
        /*

        code for angle images

        */

        //  CODE FOR STORE PRODUCT DETAILS IN PRODUCT TABLE
        $conn=mysqli_connect('localhost','root','','wholeselar');
        if(isset($_POST['addProduct'])){
            $image="abc";
            $sql="INSERT INTO `product`(`name`, `categories`, `shipping_type`, `cod_allowed`, `show_price`, `enquiry`, `description`) VALUES ('$pname','$categories','$shipping_type','$cod','$show_price','$enquiry','$description');";
            $result=mysqli_query($conn,$sql);
           // image name whith pid
            /*$sql="select max(pid) from `product';";
            $pidobj=mysqli_query($conn,$sql);
            $pid=mysqli_fetch_row($pidobj);
            $thumbnail_name=$pid[0];
            $thumbnail_name=$thumbnail_name.".".$thumbnail_ext;
            move_uploaded_file($thumbnail_path,"pimage/".$thumbnail_name);*/
            // end image name
           // $sql="INSERT INTO `product`(`name`, `categories`, `shipping_type`, `cod_allowed`, `show_price`, `enquiry`, `description`,`thumbnail`) VALUES ('$pname','$categories','$shipping_type','$cod','$show_price','$enquiry','$description','$thumbnail'                                                                                   );";
            //$result=mysqli_query($conn,$sql);
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
                <!--abhay singh-->
        </div>


        <!-- =========== Scripts =========  -->
        <script src="assets/js/main.js"></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>