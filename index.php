<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es" class="no-js"> <!--<![endif]-->
  <head>
      <title></title>
      <?php include('include/head.html'); ?>
      <?php include('include/meta-social.html'); ?>
  </head>
  <body>
  	<section class="slidemain">
  		<ul class="slide_list" id="slidesServicio">
  			<li class="slide_item" style="background-image:url('img/img1.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"></div>
  					<a href="" class="btnCalltoAction"></a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img2.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"></div>
  					<a href="" class="btnCalltoAction"></a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img3.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"></div>
  					<a href="" class="btnCalltoAction"></a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img4.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"></div>
  					<a href="" class="btnCalltoAction"></a>
  				</div>
  			</li>
  		</ul>
  	</section>
  	<?php include('include/footer.html'); ?>
  	<?php include('include/js-general.html'); ?>    
    <script>
    	$document.on("ready",function() {
    		$('#slideServicio').owlCarousel({
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    mouseDrag:true,
		    touchDrag:false,
		    animateIN: 'fadeIn',
		    animateOut: 'fadeOut',
		    autoplay: false,
		    autoplayTimeout: 3000,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        }
    			}
			})
    	})	
    </script>
    </body>
</html>