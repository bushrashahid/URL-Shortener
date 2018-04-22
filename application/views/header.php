	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>URL SHORTNER</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><h2>URL SHORTENER</h2></a>
				      </div>
					  <?php $m=$this->router->fetch_method();?>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="<?php echo $active=($m=='index')?'menu-active':'';?>"><a href="<?php echo base_url();?>">HOME</a></li>
				          <li class="<?php echo $active=($m=='top_board')?'menu-active':'';?>"><a href="<?php echo base_url();?>welcome/top_board">TOP LINKS</a></li>
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
