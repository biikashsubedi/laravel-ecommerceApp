l<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/revolution/css/settings.css">
    <link rel="stylesheet" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" href="vendors/revolution/css/navigation.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
</head>
<body>
  <!-- <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution ... We Are Available For You</h2><span class="contactus-button2 text-center"><a href="{{'contact'}}" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <footer class="sec-padding footer-bg footer-bg3">
      <div class="container clearfix">
        <div class="row">
          <div class="widget widget-links col-md-3 col-sm-6"><h4 class="widget_title">Connect With Us</h4>

            <ul class="nav">
              <li><a href="https://twitter.com/biikashsubedi"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="https://www.linkedin.com/in/biikashsubedi/"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
              <li><a href="https://www.facebook.com/biikashsubedi0"><i class="fa fa-facebook-square"></i> Facebook</a></li>
              <li><a href="https://join.skype.com/invite/dD4QRkulEjUM"><i class="fa fa-skype"></i> Skype</a></li>
              <li><a href="https://www.pinterest.com/wrongsb/"><i class="fa fa-pinterest-square"></i> Pinterest</a></li>
            </ul>
          </div>
          <div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Quick Links</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><a href="{{'aboutus'}}">- About Us</a></li>
                <li><a href="#">- Services</a></li>
                <li><a href="#">- FAQ</a></li>
                <li><a href="{{'admin'}}">- Admin</a></li>
              </ul>
            </div>
          </div>
          <div class="widget widget-contact col-md-3 col-sm-6">
            <h4 class="widget_title">About Developer</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><i class="fa fa-map-marker"></i>
                  <div class="fleft location_address">Narayanghad, Bharatpur <br> Chitwan, 44200</div>
                </li>
                <li><i class="fa fa-phone"></i>
                  <div class="fleft contact_no"><a href="tel:+9779869286303">+(977) 9869286303</a></div>
                </li>
                <li><i class="fa fa-envelope-o"></i>
                  <div class="fleft contact_mail"><a href="mailto:bikash2017@outlook.com">bikash2017@outlook.com</a></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget widget-contact col-md-3 col-sm-6">
            <h4 class="widget_title">Get in Touch</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><i class="fa fa-map-marker"></i>
                  <div class="fleft location_address">Babarmahal Maiti-Ghar <br> Kathmandu, 44613</div>
                </li>
                <li><i class="fa fa-phone"></i>
                  <div class="fleft contact_no"><a href="tel:+9779869286303">+(977) 9869286303</a></div>
                </li>
                <li><i class="fa fa-envelope-o"></i>
                  <div class="fleft contact_mail"><a href="mailto:biikashsubedi@gmail.com">biikashsubedi@gmail.com</a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>

	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="text-center">Copyright © 2019 The British College All rights reserved.</p>
				</div>

			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('assets/js/price-range.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
    $(document).ready(function(){
    	$('.readmore').click(function(){
    		$('.showmore').css('height','auto');
    		$('.readmore').hide();
    	});
    });

    $(document).ready(function(){
    	$('.addtocart').click(function(){
    		//add to cart
    		var productid = $(this).data('productid');
    		var url = "{{ url('cart/add/') }}/"+productid;
    		
    		$.ajax({
    			url: url,
    			method: 'get',
    			success: function(result){
                //cartcount = parseInt(cartcount) + 1;
                //$('.cartcount').html(cartcount);
                alert(result.message);
            }});


    		//send a ansynchronous request to add product to cart via ajax
    	})
    });
    </script>
</body>
</html>