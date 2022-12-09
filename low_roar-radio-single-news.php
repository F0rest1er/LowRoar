<!DOCTYPE html>
<html lang="ru">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Low Roar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/icon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/icons/fontawesome/css/style.css">
	<link rel="stylesheet" href="js/vendors/slick/slick.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" title="skin4" href="css/skin.css"/>

</head>
<body id="low_roar-radio">

<?php require("php/header2.php");?>
	
<?php require("php/search.php");?>

<div class="page_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="wow fadeInUp" data-wow-duration=".8s">Новость</h2>
				<ul class="bread-crumb wow fadeInUp" data-wow-duration="1.3s">
					<li><a href="./index.php">Главная</a><span>/</span></li>
					<li><a href="./low_roar-radio-news.php">Новости</a><span>/</span></li>
					<li>Новость</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="single-video single-news wow fadeInUp" data-wow-duration="1s">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<?php require("php/news-single.php");?>
			</div>
		</div>
	</div>
</div>

<?php require("php/footer.php");?>
    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/tweecool.js"></script>
<script src="js/vendors/audio.js"></script>
<script src="js/vendors/jquery.countdown.min.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/main.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/isotope/main.js"></script>

</body>
</html>