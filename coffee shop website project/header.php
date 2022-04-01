<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caffeimate by Group 2</title>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <style type="text/css">
        <?php
        include 'css/bootstrap.min.css';
        include 'css/style.css';
        ?>
    </style>
</head>

<body class="bg-white">
    <!-- CTRL + / -->
    <!-- header -->
    <div class="container-fluid px-0 fixed-top">
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
                <a class="font-black h5" href="login.php">LOGIN/REGISTER
                </a>
              </div>
              
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

            <!-- nav bar -->
        <div class="container-fluid px-0 body-font">
            <nav class="navbar navbar-expand-lg navbar-light pl-5 navbar-color ">
                       
                    <div class="collapse navbar-collapse nav-list" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active mx-3" aria-current="page" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-3" aria-current="page" href="drinks.php">DRINKS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-3" aria-current="page" href="desserts.php">DESSERTS</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link  mx-3" aria-current="page" href="services.php">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-3" aria-current="page" href="contact-us.php">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mx-3" aria-current="page" href="reviews.php">REVIEWS</a>
                            </li>


                        </ul>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <form class="d-flex ">
                              <input class="form-control me-2 b-none" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-search b-none" type="submit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search b-none" viewBox="0 0 16 16">
                                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg>
                              </button>
                          </form>
                        </div>
                        
                    </div>
                
            </nav>
        </div>

    </div>

    <!-- end of nav bar -->
