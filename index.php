
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require  'template/link.php'; 
	 # start plugins 
	 require  'template/plugins.php';
	  # connet datebase 
	 require  'connect_dp.php'?>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
	<!-- start header -->
<?php require 'template/headear.php';?>
<div class="slider_bg"><!-- start slider -->
<div class="container">
		<div class="row slider">
		<div class="wmuSlider example1"><!-- start wmuSlider example1 -->
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				  	 	<div class="slider_img text-center">
				   			<ul class="list-unstyled list_imgs">
				   				<li><img src="images/slider.jpg" alt="" class="responsive"/></li>
				   			</ul>
			           	</div>
				   </article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				  	 	<div class="slider_img text-center">
				   			<ul class="list-unstyled list_imgs">
				   				<li><img src="images/slider1.jpg" alt="" class="responsive"/></li>
				   			</ul>
			           	</div>
				   </article>
				 </div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                </ul>
			<script src="js/jquery.wmuSlider.js"></script> 
		     <script>
				 $('.example1').wmuSlider();         
			</script>
        </div><!-- end wmuSlider example1 -->
        <div class="clearfix"></div>
      </div>
</div>
</div>
<div class="main_bg"  id="about"><!-- start about us -->
<div class="container">
	<div class="row about">
		<div class="col-md-3 about_img">
			<img src="images/user.png" alt="" class="responsive"/>
		</div>
		<div class="col-md-9 about_text">
			<h3>Зябликов Сергей Сергеевич</h3>
			<h4>Разработчик программного обеспеченпия</h4>
			<p>Предпочитаю на все смотреть с улыбкой - это помогает сберечь нервы и вермя. Абсолютно не умею рисовать и вообще ручки-крючки и глаз-не алмаз. Любимы жанр в музыке - рок. </p>
			<div class="soc_icons navbar-right">
				<ul class="list-unstyled text-center">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
					<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
					<!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
					<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
					<!--<<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
				</ul>	
			</div>
		</div>
	</div>
</div>
</div>
	<!-- footer -->
<?php  require 'template/connect.php';
	   require 'template/must.php'?>

</body>
</html>