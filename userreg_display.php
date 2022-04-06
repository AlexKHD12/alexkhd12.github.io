<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registered accounts</title>
    <link href="style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="header">

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="125px" onclick="index.php" /></a>
            </div>
            <nav>
                <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>

    </div>
    
<!------ PHP ------>

<div class="small-container">

        <div class="row row-2">
                <h2> <i> <u> All registered users: </u> </i> </h2>
        </div>

        <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
  </tr>


        <?php
			$conn = mysqli_connect("localhost", "root", "", "alexwebshop");
			$sql = "SELECT * FROM userreg";
            $result = $conn-> query($sql);

while ($row = $result-> fetch_assoc()) {
   
			?>

<tr>
    <td><?php echo $row ["ID"] ?></td>
    <td><?php echo $row ["name"] ?></td>
    <td><?php echo $row ["email"] ?></td>
    <td><?php echo $row ["password"] ?></td>
</tr>

        

    <?php
    }
    ?>

        </table>

<!------ /PHP ------>


       <!------ FOOTER ------>
       <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Thank you for shopping!</h3>
                        <p>Come again!</p>
                    </div>
                    <div class="footer-col-2">
                        <a href="index.php"><img src="images/logo.png"></a>
                        <p>AlexWebshop</p>
                    </div>
                    <div class="footer-col-5">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a style="color: rgba(54, 159, 207, 0.74);" href="https://facebook.com/" target="_blank">Facebook</a></li>
                            <li><a style="color: rgba(236, 65, 122, 0.87);;" href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                            <li><a style="color: rgb(214, 4, 4);" href="https://youtube.com/" target="_blank">YouTube</a></li>
                            <li><a style="color: rgb(97, 205, 255);" href="https://twitter.com/" target="_blank">Twitter</a></li>
                            <li><a style="color: rgb(255, 136, 0);" href="https://reddit.com/" target="_blank">Reddit</a></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <p class="copyright">Copyright 2021</p>
            </div>
        </div>
        <!------ js for toggle menu ------>
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight == "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
            }
        </script>


    </body>
    </html>