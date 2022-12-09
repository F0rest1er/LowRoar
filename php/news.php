<div class="container">
    <?php
        $news = get_news_all();
        foreach ($news as $item): ?>

		<article class="wow fadeInUp" data-wow-duration=".7s">
		    <div class="col-md-6">
				<a href="./low_roar-radio-single-news.php?id=<?php echo $item["id"];?>">
					<div class="podcast-thumb">
						<img src="<?php echo $item["image"];?>" class="img-responsive" alt="">
						<div class="podcast-date"><?php echo $item["month"];?><br><?php echo $item["day"];?></div>
					</div>
				</a>
			</div>
			<div class="col-md-6 news-excerpt">
				<div class="news-meta"><span><a href="#"><?php echo $item["created"];?></a></span> | <span><?php echo $item["creator"];?></span></div>
				<h4><a href="./low_roar-radio-single-news.php?id=<?php echo $item["id"];?>"><?php echo $item["title"];?></a></h4>
				<p><?php echo $item["news"];?></p>
				<a href="./low_roar-radio-single-news.php?id=<?php echo $item["id"];?>" class="bttn">Читать полностью</a>
			</div>
		</article>

    <?php endforeach; ?>
</div>