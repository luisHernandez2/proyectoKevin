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
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  </head>
  <body>
  	<section class="slideMain">
  		<ul class="slide_list" id="slideServicio">
  			<li class="slide_item" style="background-image:url('img/img1.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"> 
              <h2>Te ayudamos a <span>encontre</span>la casa ideal para <span>tu hogar</span></h2>
            </div>  					<a href="" class="btnCalltoAction"> Comencemos ya!</a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img2.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"> 
              <h2>Te ayudamos a <span>encontre</span>la casa ideal para <span>tu hogar</span></h2>
            </div>
  					<a href="" class="btnCalltoAction"> Comencemos ya!</a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img3.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"> 
              <h2>Te ayudamos a <span>encontre</span>la casa ideal para <span>tu hogar</span></h2>
            </div>
  					<a href="" class="btnCalltoAction"> Comencemos ya!</a>
  				</div>
  			</li>
  			<li class="slide_item" style="background-image:url('img/img4.jpg')">
  				<div class="contenidoSlide">
  					<div class="titulo_slide"> 
              <h2>Te ayudamos a <span>encontre</span>la casa ideal para <span>tu hogar</span></h2>
            </div>
  					<a href="" class="btnCalltoAction"> Comencemos ya!</a>
  				</div>
  			</li>
  		</ul>
      <ul class="slideTab_list">
        <li class="slideTab_item">
          <a href="javascript:void(0)" class="slideTab_link"
            data-hover="texto" data-indice="">
            <span class="icoBox">M</span>
          </a>
        </li>
        <li class="slideTab_item">  
          <a href="javascript:void(0)" class="slideTab_link"
            data-hover="texto" data-indice="">
            <span class="icoBox">M</span>
          </a>
        </li>
        <li class="slideTab_item">  
          <a href="javascript:void(0)" class="slideTab_link"
            data-hover="texto" data-indice="">
            <span class="icoBox">M</span>
          </a>
        </li>
        <li class="slideTab_item">  
          <a href="javascript:void(0)" class="slideTab_link"
            data-hover="texto" data-indice="">
            <span class="icoBox">M</span>
          </a>
        </li>
      </ul>
  	</section>
  	<?php include('include/footer.html'); ?>
  	<?php include('include/js-general.html'); ?>
    <script src="js/source/owl.Carousel.js"></script>    
    <script>
    	$(document).on("ready",function() {
        var altura=$(window).height()-50;
        $('#slideServicio').find('.slide_item').css('height',altura);
        $('#slideServicio').owlCarousel({
        		items:1,
            doot:true,
            loop:true,
            nav: false,
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
    		          }
        			}
			 	  });
        /*Cambiar Slide*/
        $('.slideTab_list').children().each(function(i,e){
          $(this).find('.slideTab_link').data('indice',i+1);
        });
        $(document).on('click','.slideTab_link',function(){
          var i=$(this).data('indice');
          console.log(i);
          $("#slideServicio").trigger('to.owl.carousel',i);
          $('.slideTab_list').find('.slideTab_link').removeClass('slideTab_active');
          $(this).addClass('slideTab_active');
        });
    });
    </script>
    </body>
</html>