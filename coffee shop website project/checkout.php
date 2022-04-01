<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        <?php
        include 'css/style.css';
        ?>
    </style>
</head>

<body>
  <div class="h1 py-3 px-2 mb-0 title-font "><a href="index.php" class="brand">
    <img class="logo" src="image/brand/logo.png" alt="...">CAFFEIMATE
        </a>
    </div>
    <hr size="0" width="100%" color="#e6c6a8">
    </div>
    <div class="container mt-5">
        <div class="card p-5 m-5 ">
            <div class="row px-3">
                <div class="title mb-4">
                    <p class="h2 font-title font-weight-bold">Checkout</p>
                </div>
                <div class="container">
                    <h4 class="my-2">
                        Billing Address
                    </h4>
                    <form class="pb-3">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="firstname">First Name</label>
                                <div class="input-group">
                                <input type="text" class="form-control" id="firstname" placeholder="First Name">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="username">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adress">Address</label>
                            <input type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address2">Address 2
                                <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="text" class="form-control" id="adress2" placeholder="Flat No">
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="country">Country</label>
                                <select type="text" class="form-control" id="country">
                                    <option value>Choose...</option>
                                    <option>Philippines</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="city">City</label>
                                <select type="text" class="form-control" id="city">
                                    <option value>Choose...</option>
                                    <option>Manila</option>
                                    <option>Caloocan</option>
                                    <option>Taguig</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="postcode">Postcode</label>
                                <select type="text" class="form-control" id="postcode">
                                    <option value>Choose...</option>
                                    <option>NW6 2LS</option>
                                </select>
                                <div class="invalid-feedback">
                                    Postcode required.
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="shipping-adress">
                            Shipping address is the same as my billing address
                            <label for="shipping-adress" class="form-check-label"></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-adress">
                            Save this information for next time
                            <label for="same-adress" class="form-check-label"></label>
                        </div>
                        <hr>
                        <h4 class="mb-4">Payment</h4>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
                            <label for="credit" class="form-check-label">Credit Card</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="debit" name="payment-method" required>
                            <label for="debit" class="form-check-label">Debit Card</label>
                        </div>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="paypal" name="payment-method" required>
                            <label for="paypal" class="form-check-label">GCash</label>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col-md-6 form-group">
                                <label for="card-name">Name on card</label>
                                <input type="text" class="form-control" id="card-name" placeholder required>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="card-no">Card Number</label>
                                <input type="text" class="form-control" id="card-no" placeholder required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="expiration">Expire Date</label>
                                <input type="text" class="form-control" id="card-name" placeholder required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="ccv-no">Security Number</label>
                                <input type="text" class="form-control" id="sec-no" placeholder required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                    </form>
                    <div class="row mt-3 justify-content-end">
                        <div class="col-5">
                            <a href="checkout.php"><button class="btn btn-lightbrown w-100 mb-2">Continue to Check Out</button></a>
                            <a href="shoppingcart.php"><button class="btn btn-lightbrown w-100">Back to Shopping Cart</button></a>
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
