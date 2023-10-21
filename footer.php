      <!--footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="copy-agile-right text-center text-white py-2">
            <p> 
               © 2022 Bedance. All Rights Reserved | Design by Simran and Nikhil</a>
            </p>
         </div>
      </footer>
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav: true,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 4,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 3
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- slider-pop-up -->
      <script src="js/lsb.min.js"></script>
      <script>
         $(window).load(function() {
         	  $.fn.lightspeedBox();
         	});
      </script>
      <!-- //slider-pop-up -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>