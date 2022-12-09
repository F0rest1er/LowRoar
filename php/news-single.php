<?php $item = get_item_by_id($_GET['id']);?>
<div class="single-video-content">
					<h3><?php echo $item["title"];?></h3>
					<div class="single-meta pull-left"><span><?php echo $item["created"];?></span> | <span><?php echo $item["creator"];?></span> | <span><span><?php echo $item['date'];?></span></div>
					<div class="clearfix"></div>
					<div class="single-thumb space30">
						<img src="<?php echo $item["image"];?>" class="img-responsive" alt=""/>
					</div>
					<p><br><?php echo $item["news"];?></p>
					<div class="sharing pull-right"><script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-shape="round" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp"></div></div>
</div>