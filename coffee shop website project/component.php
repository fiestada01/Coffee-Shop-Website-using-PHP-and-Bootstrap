<?php

    function component($product_name,$product_price,$product_img,$product_description,$productid){

        $element = "
        
        <div class=\"col-lg-3 col-md-6 col-sm-12\">
                <form action=\"index.php\" method=\"POST\">
                    <div class=\"card\" id=\"card-border\">
                        <div class=\"inner_img\">
                        <img src=\"$product_img\" class=\"card-img-top img-fluid card-radius\" alt=\"image\">
                        </div>                    
                        <div class=\"card-body text-center\">
                            <h4 class=\"card-text text-center\">$product_name</h4>
                            <p class=\"text-muted\">$product_description</p>                        
                            <p class=\"text-center my-0 mt-3\"> ₱$product_price</p>                        
                            <div class=\"text-center\">
                                
                                <button type=\"submit\" class=\"btn btn-outline-cart mt-auto\" name=\"add\">Add to Cart</button>
                                <input type='hidden' name='product_id' value='$productid'>
                            </div>
                        </div>
                    </div>
                </form>               
            </div>
        ";

        echo $element;

    }

    function cartElement($product_img, $product_name, $product_price, $productid){
        $element = "
        
        <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                        <div class=\"border rounded\">
                            <div class=\"row bg-white\">
                                <div class=\"col-lg-3 pl-0\">
                                    <img src=$product_img alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">$product_name</h5>
                                    <small class=\"text-secondary\">Seller: Caffeimate</small>
                                    <h5 class=\"pt-2\">₱$product_price</h5>
                                    <button type=\"submit\" class=\"btn btn-outline-cart\">Save for Later</button>
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                </div>
                                <div class=\"col-lg-3 py-5 inline-flex cart-bot\">
                                    <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"number\" value=\"1\" class=\" text-center w-25 b-none h-30 cart-number d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        
        ";
        echo  $element;
    }

?>