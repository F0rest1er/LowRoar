<div class="gallery-main">
<?php
		$albums = get_albums_all();
        foreach ($albums as $album): ?>
			<div class="gallery-item-main new">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="<?php echo $album["image"];?>" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat"><?php echo $album["title"];?></span>
									<span class="title"><?php echo $album["description"];?></span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php endforeach; ?>
			<!--
			<div class="gallery-item-main featured">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Blackbird - Lonely Bird Album.png" class="img-responsive" alt="">
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
			</div>
			<div class="gallery-item-main popular">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Blackbird - The Void EP.jpg" class="img-responsive" alt="">
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
			</div>
			<div class="gallery-item-main new">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Blackbird - To Another Place Album.jpg" class="img-responsive" alt="">
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
			<div class="gallery-item-main featured">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Blackbird - Music Is Dead.jpg" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat">Blackbird</span>
									<span class="title">Music Is Dead</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="gallery-item-main popular">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Aarigod - Forest Lore.jpg" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat">Aarigod</span>
									<span class="title">Forest Lore</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="gallery-item-main new">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Purrple Cat - Distant Worlds.jpg" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat">Purrple Cat</span>
									<span class="title">Distant Worlds</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="gallery-item-main featured">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Purrple Cat - Distant Worlds II.png" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat">Purrple Cat</span>
									<span class="title">Distant Worlds II</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="gallery-item-main popular">
				<div class="gallery-item wow fadeInUpBig" data-wow-duration="1.3s">
					<a href="./low_roar-radio-single-album.php">
						<div class="album">
							<img src="images/album/Purrple Cat - Sweet Dream.jpg" class="img-responsive" alt="">
							<div class="album-overlay text-center">
								<div class="album-overlay-inner">
									<div class="album-play"></div>
									<span class="album-cat">Purrple Cat</span>
									<span class="title">Sweet Dream</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>-->
		</div>
		