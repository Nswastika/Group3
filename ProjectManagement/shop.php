        <?php
            include 'include/header.php';
        ?>
        <div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar mr-50">
                            
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">Filter by Price</h3>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>price : </label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-45">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="sidebar-categories">
                                    <ul>
                                        <li><a href="#">Accessories <span>4</span></a></li>
                                        <li><a href="#">Book <span>9</span></a></li>
                                        <li><a href="#">Clothing <span>5</span> </a></li>
                                        <li><a href="#">Homelife <span>3</span></a></li>
                                        <li><a href="#">Kids & Baby <span>4</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper res-xl">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">
                                    <div class="shop-found-selector">
                                        <div class="shop-found">
                                            <p><span>23</span> Product Found of <span>50</span></p>
                                        </div>
                                        <div class="shop-selector">
                                            <label>Sort By : </label>
                                            <select name="select">
                                                <option value="">Default</option>
                                                <option value="">A to Z</option>
                                                <option value=""> Z to A</option>
                                                <option value="">In stock</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="shop-filter-tab">
                                        <div class="shop-tab nav" role=tablist>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--add product in here-->
                                    <div id="grid-sidebar12" class="tab-pane fade active show">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Homme Tapered Smart</a></h4>
                                                            <span>$150.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/2.jpg" alt="">
                                                        </a>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Skinny Jeans Terry</a></h4>
                                                            <span>$180.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/3.jpg" alt="">
                                                        </a>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Navy Bird Print</a></h4>
                                                            <span>$130.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                                        </a>
                                                        <span>new</span>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Leg Smart Trousers </a></h4>
                                                            <span>$120.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/5.jpg" alt="">
                                                        </a>
                                                        <span>hot</span>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Black Faux Suede</a></h4>
                                                            <span>$170.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                                    <div class="product-img list-img-width">
                                                        <a href="#">
                                                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                                        </a>
                                                        <div class="product-action-list-style">
                                                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-list">
                                                        <div class="product-list-info">
                                                            <h4><a href="#">Homme Tapered Smart </a></h4>
                                                            <span>$190.00</span>
                                                            <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
                                                        </div>
                                                        <div class="product-list-cart-wishlist">
                                                            <div class="product-list-cart">
                                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                                            </div>
                                                            <div class="product-list-wishlist">
                                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                                    <i class="pe-7s-like"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-style mt-10 text-center">
                            <ul>
                                <li><a href="#"><i class="ti-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">19</a></li>
                                <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



                <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<?php
          include 'include/footer.php';
       ?>