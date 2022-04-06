<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product details</title>
    <link href="style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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

    <!------ single product details ------>


    <div class="small-container single-product , img-magnifier-container">
        <div class="row">
            <div class="col-2">
                <img id="myimage" src="images_new\index\Jersey Joggers1.jpg" width="80%" id="ProductImg" />

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images_new\index\Jersey Joggers1.jpg" width="80%" class="small-img" />
                    </div>
                    <div class="small-img-col">
                        <img src="images_new\index\Jersey Joggers2.jpg" width="80%" class="small-img" />
                    </div>
                    <div class="small-img-col">
                        <img src="images_new\index\Jersey Joggers3.jpg" width="80%" class="small-img" />
                    </div>
                    <div class="small-img-col">
                        <img src="images_new\index\Jersey Joggers4.jpg" width="80%" class="small-img" />
                    </div>
                </div>

            </div>

            <div class="col-2">
                <p>Female</p>
                <h1>Jersey <br /> Joggers</h1>
                <h4>25.00€</h4>
                <select>
                    <option>Select Size</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <input type="number" value="1" />
                <a href="#" class="button1">Add To Cart</a>

                <h3>Details of Product <i class="fa fa-indent"></i> </h3>
                <br />
                <p>This is a Red T-shirt</p>
            </div>
        </div>
    </div>

    <!------ title ------>
    <div class="small-container">
        <div class="row row-2">
            <h2>More Products</h2>
            <p>View More</p>
        </div>
    </div>
    <!------ products ------>

    <!------ ! small-container ! ------>
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="images2/product-9.jpg" />
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>50.00€</p>
            </div>

            <div class="col-4">
                <img src="images2/product-10.jpg" />
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>50.00€</p>
            </div>

            <div class="col-4">
                <img src="images2/product-11.jpg" />
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>50.00€</p>
            </div>

            <div class="col-4">
                <img src="images2/product-12.jpg" />
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>50.00€</p>
            </div>
        </div>


    </div>

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
                        <li><a href="https://facebook.com/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
                        <li><a href="https://youtube.com/" target="_blank">YouTube</a></li>
                        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a href="https://reddit.com/" target="_blank">Reddit</a></li>
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

    <!------ js for product gallery ------>

    <script>

        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function () {
            ProductImg.src = SmallImg[3].src;
        }
    </script>

<!-- Zoom image js -->
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /* Create magnifier glass: */
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");

  /* Insert magnifier glass: */
  img.parentElement.insertBefore(glass, img);

  /* Set background properties for the magnifier glass: */
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;

  /* Execute a function when someone moves the magnifier glass over the image: */
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);

  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /* Prevent the magnifier glass from being positioned outside the image: */
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /* Set the position of the magnifier glass: */
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /* Display what the magnifier glass "sees": */
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
<script>
/* Execute the magnify function: */
magnify("myimage", 3);
/* Specify the id of the image, and the strength of the magnifier glass: */
</script>

</body>
</html>
