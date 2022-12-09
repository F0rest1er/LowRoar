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
	<link rel="stylesheet" href="js/vendors/audio/css/styles.css">
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
				<h2 class="wow fadeInUp" data-wow-duration=".8s">Альбом</h2>
				<ul class="bread-crumb wow fadeInUp" data-wow-duration="1.3s">
					<li><a href="./index.php">Главная</a><span>/</span></li>
					<li><a href="./low_roar-radio-album.php">Все альбомы</a><span>/</span></li>
					<li>Альбом</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="single-album wow fadeInUp" data-wow-duration="1s">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-album-thumb">
					<img src="images/album/Blackbird - Neon Rain Vinyl LP.jpg" class="img-responsive" alt=""/>
				</div>
			</div>
			<div class="col-md-6">
				<p class="small"><i>Свежий релиз</i></p>
				<h4>Blackbird</h4>
				<p>Neon Rain Vinyl LP</p>
				<div id="playlist">
					<div class="item-head">
						<ul>
							<li>#</li>
							<li>Песня</li>
							<li><img src="images/icon/04.png" alt=""/></li>
							<li><img src="images/icon/05.png" class="center-block" alt=""/></li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul class="active">
							<li class="album-count">1.</li>
							<li class="title">Electronic Birth</li>
							<li class="fr duration">3:04</li>
							<li class="play-btn play">
								<div onclick="playSound1()" class="sound1-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">2.</li>
							<li class="title">Lucid Dream</li>
							<li class="fr duration">3:19</li>
							<li class="play-btn play">
								<div onclick="playSound2()" class="sound2-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">3.</li>
							<li class="title">Luminescence</li>
							<li class="fr duration">3:44</li>
							<li class="play-btn play">
								<div onclick="playSound3()" class="sound3-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">4.</li>
							<li class="title">Neon Rain</li>
							<li class="fr duration">3:54</li>
							<li class="play-btn play">
								<div onclick="playSound4()" class="sound4-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">5.</li>
							<li class="title">Rupture</li>
							<li class="fr duration">3:33</li>
							<li class="play-btn play">
								<div onclick="playSound5()" class="sound5-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">6.</li>
							<li class="title">Erased Mind</li>
							<li class="fr duration">3:03</li>
							<li class="play-btn play">
								<div onclick="playSound6()" class="sound6-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">7.</li>
							<li class="title">Down Mist</li>
							<li class="fr duration">3:12</li>
							<li class="play-btn play">
								<div onclick="playSound7()" class="sound7-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">8.</li>
							<li class="title">No Signal</li>
							<li class="fr duration">5:23</li>
							<li class="play-btn play">
								<div onclick="playSound8()" class="sound8-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="player inactive"></div>
						<ul>
							<li class="album-count">9.</li>
							<li class="title">Social Blur</li>
							<li class="fr duration">5:16</li>
							<li class="play-btn play">
								<div onclick="playSound9()" class="sound9-btn btn-play">Слушать сейчас</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container related-albums">
		<h5>Другие альбомы</h5>
		<div class="row">
			<div class="col-md-4">
				<a href="#">
					<div class="album">
						<img src="images/album/Blackbird - Lonely Bird Album.png" class="img-responsive" alt=""/>
						<div class="album-overlay text-center">
							<div class="album-overlay-inner">
								<div class="album-play"></div>
								<span class="album-cat">Blackbird</span>
								<span class="title">Lonely Bird Album</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<div class="album">
						<img src="images/album/Blackbird - The Void EP.jpg" class="img-responsive" alt=""/>
						<div class="album-overlay text-center">
							<div class="album-overlay-inner">
								<div class="album-play"></div>
								<span class="album-cat">Blackbird</span>
								<span class="title">The Void EP</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="#">
					<div class="album">
						<img src="images/album/Blackbird - To Another Place Album.jpg" class="img-responsive" alt=""/>
						<div class="album-overlay text-center">
							<div class="album-overlay-inner">
								<div class="album-play"></div>
								<span class="album-cat">Blackbird</span>
								<span class="title">To Another Place Album</span>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<?php require("php/footer.php");?>

<div class="audio-player sound1">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound1" src="audio/nrvlp/11.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound2">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound2" src="audio/nrvlp/22.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound3">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound3" src="audio/nrvlp/33.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound4">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound4" src="audio/nrvlp/44.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound5">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/nrvlp/55.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound6">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/nrvlp/66.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound7">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/nrvlp/77.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound8">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/nrvlp/88.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound9">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/nrvlp/99.mp3" type="audio/mp3" controls="controls"></audio>
</div>

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
<script src="js/vendors/audio/mediaelement-and-player.min.js"></script>
<script src="js/vendors/audio/main.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/isotope/main.js"></script>

</body>
</html>