
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rubel Miah">
	
	<!-- favicon icon -->
	<link rel="shortcut icon" href="public/client/images/icon/favicon.png">

	<title>Rosy - Beautiful HTML5 Blog Template</title>

	<!-- common css -->
	<link rel="stylesheet" href="public/client/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/client/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/client/css/magnific-popup.css">
	<link rel="stylesheet" href="public/client/css/owl.carousel.css">
	<link rel="stylesheet" href="public/client/css/owl.theme.css">
	<link rel="stylesheet" href="public/client/css/slicknav.css">
	<link rel="stylesheet" href="public/client/css/style.css">
	<link rel="stylesheet" href="public/client/css/responsive.css">

	<!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/client/js/html5shiv.js"></script>
    <script src="public/client/js/respond.js"></script>
    <![endif]-->

</head>

<body class="home blog">

	<!--preloader start-->
    <div id="st-preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
	<!--/preloader end-->

    <!--header start-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-menu-are">
                        <div id="navigation-wrapper">
                            <ul class="top-menu text-center">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="contact.html">Bài viết</a></li>
                            </ul>                   
                        </div>
                    </div>
                    <div class="menu-mobile"></div>
                </div>
            </div>
        </div>
    </header>
    <!--/header end-->
	
	<div class="main-logo text-center">
		<a href="index.php"><img src="public/client/images/logo.png" alt="Rosy"></a>
	</div>

	<!--blog start-->
	<div class="container">			
        <?php
            if(file_exists($controller))
                include $controller;
        ?>            
	</div>
	<!--/blog end-->


	<!--footer start-->
	<footer id="footer">
		<div class="footer-social text-center">
			<a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i> <span class="hidden-sm hidden-xs">Facebook</span></a>
			<a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i> <span class="hidden-sm hidden-xs">Twitter</span></a>
			<a class="google-plus" href="#" target="_blank"><i class="fa fa-google-plus"></i> <span class="hidden-sm hidden-xs">Google+</span></a>
			<a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i> <span class="hidden-sm hidden-xs">Pinterest</span></a>
			<a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i> <span class="hidden-sm hidden-xs">Instagram</span></a>
			<a class="bloglovin" href="#" target="_blank"><i class="fa fa-heart"></i> <span class="hidden-sm hidden-xs">Bloglovin</span></a>
		</div><!-- /Footer Social -->
		
		<div class="footer-copy-right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text pull-left">
							<p>Copyright 2015 - Desinged by <a href="">ShapedTheme</a> in Dhaka, Bangladesh</p>
						</div><!-- /Copyright Text -->
						
						<div class="scroll-up pull-right">
					        <a href="#">Back to top</a>
					    </div>
						<!-- Scroll Up -->
					</div>
				</div>
			</div>
		</div><!-- Footer Copy Right -->
	</footer>
	<!--/footer end-->


	<!-- js files -->
	<script type="text/javascript" src="public/client/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="public/client/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="public/client/js/masonry.min.js"></script>
	<script type="text/javascript" src="public/client/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="public/client/js/smoothscroll.js"></script>
	<script type="text/javascript" src="public/client/js/jquery.slicknav.js"></script>
	<script type="text/javascript" src="public/client/js/scripts.js"></script>
</body>
</html>