<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wholesaler</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon" style="color:red;">
                            <ion-icon name="cart-outline"></ion-icon>
                        </span>
                        <span class="title" style="color:red;">WHOLESALERKART</span>
                    </a>
                </li>

                <li class="hovered">
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

                <li>
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
                        <span class="title">Leads</span>
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Leads</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outlin"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Orders</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="product.php">
                <div class="card">
                    <div>
                        <div class="cardName">Products</div>
                        <?php
                        $conn=mysqli_connect('localhost','root','','wholeselar');
                        if($conn){
                        $sql= "select count(*) from `product`";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_row($result);
                         echo "<div class='numbers'>$row[0]</div>";
                        }
                        ?>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outlin"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Users</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Visitors</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Subscribers</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outlin"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Shares</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outlin"></ion-icon>
                    </div>
                </div>
                </a>
                <a href="#">
                <div class="card">
                    <div>
                        <div class="cardName">Revenue</div>
                        <div class="numbers">0</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outlin"></ion-icon>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>