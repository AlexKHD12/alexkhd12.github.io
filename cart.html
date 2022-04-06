<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:black;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break;
    }
}
  	
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products</title>
    <link href="style.css" rel="stylesheet" />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="header3">
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
                <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="images/cart.png" width="30px" height="30px" /></a>
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
            </div>



<h2>Shopping List</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<?php
}
?>


<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo $product["price"]." €"; ?></td>
<td> <b> <?php echo $product["price"]*$product["quantity"]." €"; ?> </b> </td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong ><i> SUBTOTAL: </i><?php echo $total_price." €"; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>





<?php echo $status; ?>

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

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                }
                else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>


</body>
</html>
