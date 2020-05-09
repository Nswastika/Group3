        <?php
           include 'include/header.php';
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
                                            
                                            <li>Total<span>100.00</span></li>
                                        </ul>
                                        <a href="checkout.php">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping-cart-area end -->
        <?php
           include 'include/footer.php';
        ?>