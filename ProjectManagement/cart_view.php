
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>

    <style type="text/css">
 
 .button {
  background-color: #050035;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #050035;
}

.button1:hover {
  background-color: #050035;
  color: white;
}
    </style>

        <!--adding header-->
        <?php
           include 'includes/header.php';
        ?>
        <!-- shopping-cart-area start -->
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Cart</h1>
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>images</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/chicken.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Chicken Drumstick</a></td>
                                            <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$50.00</td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/choccupcake.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Cupcake</a></td>
                                            <td class="product-price-cart"><span class="amount">$15.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$15.00</td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/salmonfish.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Salmon Fish</a></td>
                                            <td class="product-price-cart"><span class="amount">$35.00</span></td>
                                            <td class="product-quantity">
                                            <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">$35.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                              
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart Total</h2>
                                        <ul>
                                             <li><input type="text" id="total" name="total" value='<?php  $total=105;  echo "Total ",$total;  ?>' readonly></li>
                                        </ul>





    <style> 
        #paypal-button-container { 
            display: none; 
        } 
    </style> 

    
      
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
      
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
    </script> 
</head> 
  


      <button class="button button1" onclick="GFG_Fun(); this.style.visibility='hidden'";>Proceed To Checkout</button>
      
   
    
    <script> 
  
        function show(divId) { 
            $("#" + divId).show(); 
        } 
  
        function GFG_Fun() { 
            show('paypal-button-container'); 
            $('#GFG_DOWN').text(""); 
        } 
    </script>









<!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AcSsDz8gpmhS1RkROXmFDIJc1On_VvnJ90Nz3wIePkaUIlzS_pi2feY-YCjSdKh3fc1ccVlu6IZED3Mj&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $total; ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>





                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--adding footer-->
        <?php
           include 'includes/footer.php';
        ?>
</body>
</html>