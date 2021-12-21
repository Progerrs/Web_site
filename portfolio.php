
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
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
	<!-- start header -->
<?php require 'template/headear.php';?>
<div class="container"><!-- start main -->
	<div class="main row">
 	 	<h2 class="style">list of projects</h2>
	 	 <div class="grids_of_4 row">
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic1.jpg"><img src="images/pic1.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">Lorem Ipsum is simply</a></h3>
					 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
					 <h4><a href="single-page.html">ipsum dolor</a> </h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic2.jpg"><img src="images/pic2.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">long established fact</a></h3>
					 <p class="para">Our website design and development provides quality web solutions,</p>
					 <h4><a href="single-page.html">Lorem ipsum</a></h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic3.jpg"><img src="images/pic3.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">Contrary to popular</a></h3>
					 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do EIUSMOD tempor,</p>
					 <h4><a href="single-page.html">consectetur lipsum</a></h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic4.jpg"><img src="images/pic4.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">Lorem Ipsum available</a></h3>
					 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
					 <h4><a href="single-page.html">lipsum adipisicing</a></h4>
				</div>
				<div class="clear"></div>
			</div>
	 	 <div class="grids_of_4 row">
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic5.jpg"><img src="images/pic5.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">long established fact</a></h3>
					 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
					 <h4><a href="single-page.html">ipsum dolor</a> </h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic6.jpg"><img src="images/pic6.jpg" alt=""class="img-responsive"/></a>
					</div>
					 <h3><a href="single-page.html">Lorem Ipsum is simply</a></h3>
					 <p class="para">Our website design and development provides quality web solutions,</p>
					 <h4><a href="single-page.html">Lorem ipsum</a></h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic7.jpg"><img src="images/pic7.jpg" alt=""class="img-responsive"/></a>
					</div>
				     <h3><a href="single-page.html">Lorem Ipsum available</a></h3>
					 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do EIUSMOD tempor,</p>
					 <h4><a href="single-page.html">consectetur lipsum</a></h4>
				</div>
				<div class="col-md-3 images_1_of_4">
					<div class="fancyDemo">
						<a rel="group" title="" href="images/pic8.jpg"><img src="images/pic8.jpg" alt=""class="img-responsive"/></a>
					</div>
					  <h3><a href="single-page.html">Contrary to popular</a></h3>
					 <p class="para">There are many variations of passages of Lorem Ipsum available,</p>
					 <h4><a href="single-page.html">lipsum adipisicing</a></h4>
				</div>
				<div class="clear"></div>
			</div>
	</div>
</div><!-- end main -->
	<!-- footer -->
<?php  require 'template/connect.php';
	   require 'template/must.php'?>
</body>
</html>