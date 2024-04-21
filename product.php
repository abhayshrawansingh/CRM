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
    <link rel="stylesheet" href="assets/css/product.css">
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
                            <ion-icon name="people-outlin"></ion-icon>
                        </span>
                        <span class="title">Orders</span>
                    </a>
                </li>

                <li class="hovered">
                    <a href="product.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outlin"></ion-icon>
                        </span>
                        <span class="title">Product</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outlin"></ion-icon>
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
                            <ion-icon name="lock-closed-outlin"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outlin"></ion-icon>
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
            
            <div class="main2">
                <p></p>
                        <div class="product"><span style="font-size: 30px; font-weight: bold;">Product</span>
                          
                        </div>
              
                        <div class="serach">
                            <input type="text" id="serach" placeholder="search..." name="search" required>
                         </div>
            
                         <div class="add">
                            <a href="addProduct.php"><button type="button">Add Product</button></a>
                         </div>
              </div> 
            
              <div class="container mt-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>INFO</th>
                      <th>STOCK</th>
                      <th>ORDERS</th>
                      <th>SHARES</th>
                      <th>RETURNS</th>
                      <th>VIEWS</th>
                      <th>PROFIT</th>
                      <th>REVENUE</th>
                      <th>OPTION</th>
                    </tr>
                  </thead>
                  <tbody>
            
                <?php
                echo "<form method='post' action='editDeleteProduct.php'>";
                   echo " <tr>";
                   $conn=mysqli_connect('localhost','root','','wholeselar');
                   $sql= "select * from `product`";
                   $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_row($result)){
                       echo "<td>$row[0]</td>";
                        
                        echo "<td><img src='https://api.wholesalerkart.com/uploads/DKCL_300606_GREEN_2b81549fa7.WEBP' width='50px' height='50px'  alt='Image 1'>";
                         
                        echo "<span class='text-in-front'>$row[1]</span>";
                       echo "</td>";
                        
                       echo "<td><span class='btn-like'>100</span></td>";
                        echo "<td><span class='btn-like'>0</span></td>";
                       echo "<td><span class='btn-like'>0</span></td>";
                        echo "<td><span class='btn-like'>0</span></td>";
                      echo "<td>0</td>";
                      echo "<td>0</td>";
                     echo  "<td>₹0</td>";
                      echo "<td><button name='edit' value='$row[0]'><i class='bx bx-edit-alt'></i></button><button name='delete' value='$row[0]'><i class='bx bx-trash'></i></button></td>";
                    echo "</tr>";
                  }
                echo "</form>";
                   ?> 
                  </tbody>
                </table>
              </div>

            <!--abhay singh-->
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>