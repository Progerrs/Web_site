
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
</div>
<div class="blog"><!-- start main -->
	<div class="container">
		<div class="main row">
			<h2 class="style">Lorem  use a passage of Lorem Ipsum</h2>
			<div class="details row">
				<div class="col-md-6">
					<img src="images/det_pic.jpg" alt="" class="img-responsive"/>
				</div>
				<div class="col-md-6">
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
					<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form alteration in some form, by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.  </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<p class="para">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure.</p>
			<div class="read_more">
				<a href="single-page.html">read more</a>
			</div>
		</div>
	</div>
</div><!-- end main -->
	<!-- footer -->
<?php  require 'template/connect.php';
	   require 'template/must.php'?>
</body>
</html>