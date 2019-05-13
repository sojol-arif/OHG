

<footer>
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 ic-footer-top-col">
                    <h3>Hijab & orna House</h3>
                    <p class="ic-footer-ist-p">Lorem ipsum dolor sit amet, consectetur adipiscingi elit. Vestibulum elementum </p>
                    <ul class="footer-links list-inline">
                        <li><i class="fa fa-phone"></i> +8801 779 379 503</li>
                        <li><i class="fa fa-map-marker"></i> 274, Mazar Road, Chalabon,  Dhaka-1230</li>
                        <li><i class="fa fa-envelope"></i> contact@example.com</li>
                    </ul>
					<ul class="list-inline d-flex ic-footer-social mb-0">
                        <li><a href="#"><i class="fa fa-facebook icon-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter icon-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram icon-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest icon-pinterest mb-0"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 ic-footer-top-col">
                    <h3>Guide & Help</h3>
                    <ul class="footer-links ic-guidehelp-ul list-inline mb-0">
                        <li><a href="#">About US</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Shipping/Delivery</a></li>
                        <li><a href="#">Ordering &amp; Returns</a></li>
                        <li><a href="#">Size Chart</a></li>
                        <li><a href="#">Store Location</a></li>
                        <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#" class="mb-0">Secure Shopping</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5 ic-footer-top-col">
                    <h3>payment</h3>
                    <p class="ic-footer-last-col-p">Lorem ipsum dolor sit amet, consectetur adipiscingi elitiumi. Vestibulum elementum sollicitudin purus nonni bibendum. </p>
                    <img src="images/footer-payment-system-name.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom">
        <p>&copy; 2019 <span>hijab & orna House</span>. All Rights Reserved. Design & Develop With Love By ITclan.</p>
    </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="js/theam.min.js"></script>
<script src="js/plugins.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/lightslider.js"></script> 
<script>

/* INPUT_NUMBER-JS */
(function($) {
        "use strict";

        function customQuantity() {
            /** Custom Input number increment js **/
            jQuery(
                '<div class="pt_QuantityNav"><div class="pt_QuantityButton pt_QuantityUp"><i class="fa fa-angle-up"></i></div><div class="pt_QuantityButton pt_QuantityDown"><i class="fa fa-angle-down"></i></div></div>'
            ).insertAfter(".pt_Quantity input");
            jQuery(".pt_Quantity").each(function() {
                var spinner = jQuery(this),
                    input = spinner.find('input[type="number"]'),
                    btnUp = spinner.find(".pt_QuantityUp"),
                    btnDown = spinner.find(".pt_QuantityDown"),
                    min = input.attr("min"),
                    max = input.attr("max"),
                    valOfAmout = input.val(),
                    newVal = 0;

                btnUp.on("click", function() {
                    var oldValue = parseFloat(input.val());

                    if (oldValue >= max) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue + 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });
                btnDown.on("click", function() {
                    var oldValue = parseFloat(input.val());
                    if (oldValue <= min) {
                        var newVal = oldValue;
                    } else {
                        var newVal = oldValue - 1;
                    }
                    spinner.find("input").val(newVal);
                    spinner.find("input").trigger("change");
                });
            });
        }
        customQuantity();

        /* ALERT CLOSE VIEW CART PAGE */
        $('.alert').alert();
    })(jQuery);


    $(document).ready(function() {
        /* Dropdown menu bar */
        $('ul li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(150);
            }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(100);
        });

        // product details carousel 
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });
        $('#image-gallery').lightSlider({
            gallery:true,
            item:1,
            centerSlide:true,  
            thumbItem:9,
            slideMargin: 0,
            currentPagerPosition: 'left',
            speed:500,
            auto:true,
            loop:true,
            controls:true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }  
        });
    });

</script>
</body>
</html>
