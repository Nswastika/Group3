    <?php
       include 'include/header.php';
    ?>
 
        <!-- register-area start -->
        <div class="register-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
                        <div class="login">
                            <h2 align="center">Register</h2>
                            <br>
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="#" method="post">
                                    	<input type="text" name="firstname" placeholder="Firstname">
                                    	<input type="text" name="lastname" placeholder="Lastname">
                                       
                                        <select id="regfor" name="reg"">
                                          <option value="" disabled selected>Registration for:</option>
                                          <option value="customer">Customer</option>
                                          <option value="trader">Trader</option>
                                        </select>
                                        <label for="reg"></label>
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="address" placeholder="Address" type="Address">
                                        <input name="text" placeholder="Date of Birth (dd/mm/yyyy)" type="DOB">
                                        <div class="button-box">
                                            <button type="submit" class="default-btn floatright">Register</button><br/><br/>
                                            <a href="#">Already have an account ? Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register-area end -->
		<?php
            include 'include/footer.php';
        ?>