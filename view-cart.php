<?php include('header.php'); ?>
    
<!-- Banner start -->
<div class="ic-products-banner">
    <img src="images/view-cart-banner.jpg" alt="" class="img-fluid">
    <div class="ic-banner-mid-text">
        <h3>view cart</h3>
        <ul>
            <li>Home</li>
            <li>add to Cart</li>
            <li>view cart</li>
        </ul>
    </div>
</div>
<!-- Banner end -->

<!-- mid section -->
<section id="view-cart">
    <div class="container">
        <div class="ic-cash-back">
            <h2>20% cash back</h2>
            <h3 style="max-width:80%; margin:0 auto">If you buy minimum 5000 TK at a time, we will back instant 20% cash back
For your next purcesess.</h3>
        </div>
        <div class="alert alert-dismissible fade show ic-alert-items" role="alert"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:22px;"></i>
        02 Items in add to cart
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="fa fa-close"></i>
            </button>
        </div>
        <!-- View Cart Item -->
        <div class="ic-viewcart-item">
             <table id="cart" class="table table-hover table-condensed">
                <tbody>
                    <tr>
                        <td>
                        <img src="images/View_Cart-item-1.jpg" alt="..." class="img-fluid item-pro">
                        </td>
                        <td data-th="Product">
                                <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="m-0 text-uppercase">Women’s classic long sleeve t-shirt</h5>
                                    <p class="item-info m-0">Style #: G5400L / Size ‘M’ / White Ash</p>
                                    <div class="star-list">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star empty"></span>
                                    </div>
                                    <p>(Based on 55 Reviews)</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Quantity" class="ic-quantity-td">
                            <h5 class="text-uppercase">Quantity:</h5>
                            <div class="numbers-row pt_Quantity">
                                <input type="number" name="quantity" min="1" max="9" step="1" value="1"><div class="pt_QuantityNav"><div class="pt_QuantityButton pt_QuantityUp"><i class="fa fa-angle-up"></i></div><div class="pt_QuantityButton pt_QuantityDown"><i class="fa fa-angle-down"></i></div></div>
                            </div>
                        </td>
                        <td data-th="Price" class=" ic-unit-price-td"><h5 class="text-uppercase">Unit price:</h5>$22.99</td>
                        <td data-th="Subtotal" class="text-center ic-total-price-td"><h5 class="text-uppercase">Total price:</h5>$45.98</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>								
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="images/View_Cart-item-1.jpg" alt="..." class="img-fluid item-pro">
                        </td>
                        <td data-th="Product">
                                <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="m-0 text-uppercase">Women’s classic long sleeve t-shirt</h5>
                                    <p class="item-info m-0">Style #: G5400L / Size ‘M’ / White Ash</p>
                                    <div class="star-list">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star empty"></span>
                                    </div>
                                    <p>(Based on 55 Reviews)</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Quantity" class="ic-quantity-td">
                            <h5 class="text-uppercase">Quantity:</h5>
                            <div class="numbers-row pt_Quantity">
                                <input type="number" name="quantity" min="1" max="9" step="1" value="1"><div class="pt_QuantityNav"><div class="pt_QuantityButton pt_QuantityUp"><i class="fa fa-angle-up"></i></div><div class="pt_QuantityButton pt_QuantityDown"><i class="fa fa-angle-down"></i></div></div>
                            </div>
                        </td>
                        <td data-th="Price" class=" ic-unit-price-td"><h5 class="text-uppercase">Unit price:</h5>$22.99</td>
                        <td data-th="Subtotal" class="text-center ic-total-price-td"><h5 class="text-uppercase">Total price:</h5>$45.98</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>								
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- apply now and cart totals -->
        <div class="row">
            <div class="col-md-6">
                <h5 class="head-left">Enter vouchure  code if you have one. <a href="#">Apply Here</a></h5>
                <form id="" method="post" class="d-flex coupon-form">
                    <input tyle="text" class="form-control" name="" placeholder="ENTER COUPON CODE">
                    <button class="btn-sub">Apply Now</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card total-card">
                    <div class="totals card-body">
                        <h3 class="text-uppercase heading-cart">BEST Feel</h3>
                        <div class="totals-item row">
                            <label>Est. Delivery</label>
                            <div class="totals-value" id="cart-subtotal">22 - 25 April, 2019</div>
                        </div>
                        <div class="totals-item row">
                            <label>Subtotal</label>
                            <div class="totals-value" id="cart-tax">$137.94</div>
                        </div>
                        <div class="totals-item row">
                            <label>Shipping Charge</label>
                            <div class="totals-value" id="cart-shipping">$18.99</div>
                        </div>
                        <div class="totals-item totals-item-total row">
                            <label>Tax</label>
                            <div class="totals-value" id="cart-total">$13.94</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="totals-item totals-item-total row">
                            <label>Total</label>
                            <div class="totals-value" id="cart-total">$170.87</div>
                        </div>
                        <div class="col-md-12 text-center btn-groups p-0">
                            <a href="checkout.php" class="btn btn-lg text-uppercase">process to Checkout Now</a>
                            <a href="products.php" class="btn btn-lg text-uppercase">continue shopping</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

 
<!-- Required JavaScript Libraries -->
<?php include('footer.php'); ?>