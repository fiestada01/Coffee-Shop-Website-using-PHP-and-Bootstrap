<?php

session_start();

require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("caffeimatedb", "products");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <style type="text/css">
		<?php
			include 'css/style.css';
		?>
	</style>
</head>
<body>
<div class="container-fluid  bg-white" id="header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="header-logo h1 py-2 px-2 mb-0 title-font mr-auto">
              <a href="index.php" class="brand">
		            <img class="logo" src="image/brand/logo.png" alt="...">CAFFEIMATE
              </a>               
            </div>
            <div class="navba-toggler mr-auto">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mr-auto"></span>
              </button> 
            </div>

            <div class="collapse navbar-collapse icon-top" id="navbarSupportedContent">
              
              <div class="navbar-icons pl-3 mr-2">
                <a class="font-black" href="cart.php"><button class="btn px-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="23" height="25" fill="currentColor" class="bi bi-cart-dash" viewBox="0 0 16 16">
                    <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z" />
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                  </svg>
                  <?php

                      if (isset($_SESSION['cart'])){
                          $count = count($_SESSION['cart']);
                          echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                      }else{
                          echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                      }

                    ?>
                </button>
                </a>
              </div>
              <div class="navbar-icons pl-3 mr-2">
                <a class="font-black" href="wish-list.php">
                  <button class="btn pl-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                  </button>
                </a>
              </div>
            </div>   
          </nav>


        </div>
   
		<hr size="0" width="100%" color="#e6c6a8">
    </div>
	<div class="container-fluid mt-5 mb-5">
		<div class="card cart px-5 pt-3 pb-4">
			<a href="index.php">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
				<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
				<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
				</svg>
			</a>
            <div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h3>My Cart</h3>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_img'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>₱<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>₱<?php
                            echo $total;
                            ?></h6>
                    </div>
                    <div class="row checkout mt-4 ml-1">
                        <div class="col-4">
                            <a href="checkout.php">
                                <button class="btn btn-lightbrown">Check Out</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
</div>



        </div>
        



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</body>
</html>