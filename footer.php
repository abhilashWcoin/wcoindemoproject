
    <!-- footer -->
    <footer id="footer" class="padding-tb50">
      <div class="container">
       <!-- <div class="row">
          <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
            <div class="col-md-3 padding-tb50">
              <h4 class="h4-type2 margin-t10">OUR SERVICES</h4>
              <div class="border-bar margin-t20 "></div>
              <ul>
                <li><a href="#">Bitcoin Mining</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
              </ul>
            </div>
            <div class="col-md-3 padding-tb50">
              <h4 class="h4-type2 margin-t10">TEMPLATE</h4>
              <div class="border-bar margin-t20 "></div>
              <ul>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
              </ul>
            </div>
            <div class="col-md-3 padding-tb50">
              <h4 class="h4-type2 margin-t10">EXTENSIONS</h4>
              <div class="border-bar margin-t20 "></div>
              <ul>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
                <li><a href="#">Lorem Ipsum is simply</a></li>
              </ul>
            </div>

            <div class="col-md-3 padding-tb50">
              <h4 class="h4-type2 margin-t10">EXTENSIONS</h4>
              <div class="border-bar margin-t20 "></div>
              <div class="contact-details">
                <div>
                  <span class="glyphicon glyphicon-map-marker"></span>
                  <p>
                    164/9 Orchard St,New York,<br> NY 10002, United States.
                  </p>
                </div>
                <div>
                  <span class="glyphicon glyphicon-envelope"></span>
                  <a href="">contact@buzline.com</a>
                </div>
                <div>
                  <span class="glyphicon glyphicon-earphone"></span>
                  <p> +1 6485 658956</p>
                </div>
               
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
        	<div class="col-sm-8"><p>copyright© 2017 World Coin PLC</p></div>
        	<div class="col-sm-4 contact-details">
        		<div class="socialnlinks">
                  <a href="https://www.facebook.com/wcoins"><span class="ti-facebook"></span></a>
                  <a href="wcoin.eu"><span class="ti-instagram"></span></a>
                  <!--<a href="#"><span class="ti-twitter"></span></a>
                  <a href="#"><span class="ti-linkedin"></span></a>-->
                </div>
        	</div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    
    <!-- Scripts-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
    	$('#myCarousel').carousel({
			  interval: 40000
			});

			$('.carousel .item').each(function(){
			  var next = $(this).next();
			  if (!next.length) {
			    next = $(this).siblings(':first');
			  }
			  next.children(':first-child').clone().appendTo($(this));

			  if (next.next().length>0) {
			 
			      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
			      
			  }
			  else {
			      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
			     
			  }
			});
    </script>
    <!-- Scripts End-->

</body>

</html>