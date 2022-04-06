// Run a SELECT query to get all the products stored in the database
// By default, if no sorting URL variable is fed into the page, then the SQL query becomes order by id.
// The first time you land on the index page as plain index.php, not index.php?=variable, this is the query that's used

$sql = mysqli_query($con,"SELECT * FROM products ORDER BY id DESC");

// If the user chooses to sort the produts in a different way, then an HTML link will set a PHP variable into this page
// We will check for that variable and change the SQL query to sort the products in a different way
if (isset($_GET['sortby'])) {
  // Capture that in a variable by that name
  $sortby = $_GET['sortby'];
  // Now to change the SQL query based on the sorting the user chose (price high to low, low to high, alphabetical and latest first)
  if ($sortby = 'pricehilo') {
    $sql = mysqli_query($con,"SELECT * FROM products ORDER BY price DESC");
  }
  elseif ($sortby = 'pricelohi') {
    $sql = mysqli_query($con,"SELECT * FROM products ORDER BY price ASC");
  }
  elseif ($sortby = 'name') {
    $sql = mysqli_query($con,"SELECT * FROM products ORDER BY product_name");
  }
}