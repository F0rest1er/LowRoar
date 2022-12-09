<?php 
require('php/bd.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta name="yandex-verification" content="7ddcb90a5507f711" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88912182, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88912182" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6GQ8D3L9J9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6GQ8D3L9J9');
</script>

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
<body id="low_roar-radio" class="header2 no-padding">

<header class="no-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="navbar-header pull-left">
					<a class="navbar-brand" href="./index.php"><img src="images/logo-lite.png" class="img-responsive" alt=""/></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="lang-search pull-right">
					<div class="site-lang">RU</div>
					<div class="site-search"><img src="images/icon/search.png" alt=""/></div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php require("php/search.php");?>

<div class="radio-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInUp" data-wow-duration=".7s">
				<h3>Мы в эфире</h3>
				<h4>Остановитесь и послушайте нас</h4>
				<p>Расслабляющая и настраивающая на хороший день музыка</p>
			</div>
		</div>
		
		<div class="mainContainer">
			<div class="container">
				<div class="containerPlayer">
					<div id="listContainer" class="playlistContainer">
						<ul id="playListContainer">
							<li class="activeAudio">
							</li>
							<?php 
							$row = $link->query("SELECT * FROM `img`");
							$row = mysqli_fetch_all($row);
							foreach ($row as $row):
								
							?>
							<li data-src="<?= $row [4]?>">
								<a href="#">
									<img src="images/<?= $row [1]?>" width="90" alt=""/>
									<h5><?= $row [2]?><span><?= $row [3]?></span></h5>
								</a>
							</li>
							<?php
								endforeach;
							?>
						</ul>
					</div>
					<div id="playerContainer">
						<div id="controlContainer">
							<ul class="controls">
								<li>
									<a class="left" data-attr="prevAudio"></a>
								</li>
								<li>
									<a class="play" data-attr="playPauseAudio"></a>
								</li>
								<li>
									<a class="right" data-attr="nextAudio"></a>
								</li>
								<li>
									<div class="progress">
										<div data-attr="seekableTrack" class="seekableTrack"></div>
										<div class="updateProgress"></div>
									</div>
								</li>
								<li>
									<span data-attr="timer" class="audioTime">0:00</span>
								</li>
								<li>
									<div class="volumeControl">
										<div class="volume volume1"></div>
										<input class="bar volume-hidden" id="bar" data-attr="rangeVolume" type="range" min="0" max="1" step="0.1" value="0.7" />
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require("php/header.php");?>

<div class="video-list-home video-list-radio-home wow fadeInUp" data-wow-duration=".7s">
	<div class="container-fluid no-padding">
		<div class="vlist-carousel">
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Blackbird - Lonely Bird Album.png" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Blackbird</span>Lonely Bird Album</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Blackbird - To Another Place Album.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Blackbird</span>To Another Place Album</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Blackbird - The Void EP.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Blackbird</span>The Void EP</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Blackbird - Neon Rain Vinyl LP.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Blackbird</span>Neon Rain Vinyl LP</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Purrple Cat - Distant Worlds.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Purrple Cat</span>Distant Worlds</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Purrple Cat - Sweet Dream.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Purrple Cat</span>Sweet Dream</h4>
					</div>
				</div>
				</a>
			</div>
			<div class="vlist-carousel-li">
				<a href="./low_roar-radio-single-album.php">
				<div class="vlist-thumb">
					<img src="images/slider/Aarigod - Forest Lore.jpg" class="img-responsive" alt=""/>
					<div class="single-play"></div>
					<div class="vlist-info">
						<h4><span>Aarigod</span>Forest Lore</h4>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="album-news wow fadeInUp" data-wow-duration=".7s">
	<div class="container">
		<div class="content-head text-center"><span>Смотрите наши последние новости</span>Новости</div>
		<?php require("php/news.php");?>
	</div>
</div>

<div class="home-contact wow fadeInUp" data-wow-duration=".7s">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="space60"></div>
				<h5>Напишите нам</h5>
				<p>Форма обратной связи, будем рады любому вашему сообщению</p>
				<div class="blog-comment-form">
					<form name="sentMessage" id="contactForm" method="post" onsubmit="send(event, 'send.php')" enctype="multipart/form-data">
						<input name="senderName" id="senderName" type="text" class="form-control" placeholder="Имя" required>
						<input name="senderEmail" id="senderEmail" type="email" class="form-control" placeholder="Почта" required>
						<textarea name="sendMessage" id="message" class="form-control" placeholder="Сообщение" value="mail@example.com"></textarea>
						<input class="checkbox1" type="checkbox" id="politics" onclick="check();" value="" autocomplete="off">
						<p>Нажимая на кнопку "Отправить", я даю <a href="https://54.rkn.gov.ru/protection/docsamples/">согласие на обработку персональных данных.</a></p>
						<button class="bttn" name="bttn" type="submit" disabled="">Отправить</button>
					</form>
					<script>
						function check() {
						var bttn = document.getElementsByName('bttn')[0];
						if (document.getElementById('politics').checked)
						bttn.disabled = '';
						else
						bttn.disabled = 'disabled';
						}
					</script>
				</div>
			</div>
			<div class="col-md-6">
				<img src="images/home/mic.png" class="img-responsive" alt=""/>
			</div>
		</div>
	</div>
</div>

<?php require("php/footer.php");?>

<div class="audio-player sound1">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound1" src="audio/1.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound2">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound2" src="audio/2.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound3">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound3" src="audio/3.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound4">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound4" src="audio/4.mp3" type="audio/mp3" controls="controls"></audio>
</div>

<div class="audio-player sound5">
	<div class="audio-close">X</div>
	<audio class="audioplayer" id="sound5" src="audio/5.mp3" type="audio/mp3" controls="controls"></audio>
</div>


<?php while ($i <= 3002){$i++;}; if ($i = 3000) {echo '<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/tweecool.js"></script>
<script src="js/vendors/jquery.countdown.min.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/main.js"></script>
<script src="js/vendors/audio/mediaelement-and-player.min.js"></script>
<script src="js/vendors/audio/main.js"></script>';
echo'<script src="js/vendors/audio.js"></script>';}?>


<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/isotope/main.js"></script>

</body>
<script>
// Отправка данных на сервер
function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
	json = JSON.parse(this.response);
    	console.log(json);
        
    	// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
    	if (json.result == "success") {
    		// Если сообщение отправлено
    		alert("Сообщение отправлено");
    	} else {
    		// Если произошла ошибка
    		alert("Ошибка. Сообщение не отправлено");
    	}
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script>
</html>