
<div class="navigation fixed-menu">
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-2 col-sm-3 col-xs-3">
				<div class="logo">
					<div class="name">
						<span>MILLI</span>DESIGN
					</div>
					<div class="descript">
						<p>РАЗРАБОТКА ЛЕНДИНГОВ</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6 navigation">
				<nav>

					<?php 
						wp_nav_menu(array('theme_location' => 'Main menu', 'menu' => 'Main menu', 'container'=> '', 'items_wrap' => '<ul><li><a class="active" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>%3$s</ul>')) 
					?>
				</nav>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 contacts">
				<div class="cont">
					<span><i class="fa fa-phone" aria-hidden="true"></i>+7(495) 648-68-01</span>
					<span><i class="fa fa-clock-o" aria-hidden="true"></i>10:00-18:00 ПН-ПТ</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-4 callback">
				<div class="btn-callback">
					<a href="#">Обратний звонок</a>
				</div>
			</div>
			<div class="mobile-menu">
				<div class="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
					<div class="wrap-mobile-menu">
							<?php 
								wp_nav_menu(array('theme_location' => 'Main menu', 'menu' => 'Main menu', 'container'=> '', 'items_wrap' => '<ul><li><a class="active" href="#home"><i class="fa fa-home" aria-hidden="true"></i></a></li>%3$s</ul>')) 
							?>						
					
					</div>
			</div>
		</div>
	</div>			
</div>

<header id="home"><!--start header --> 
	<div class="main-header">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h1 class="anim_right"><?php echo get_field("title_section_header_main"); ?></h1>
						<h2 class="anim_left"><?php echo get_field("description_section_header_main"); ?></h2>
					</div>
					<div class="descript-price anim">
						<?php echo get_field("min_price_header_main"); ?>
					</div>
					<div class="btn-callback anim">
						<a href="#">Отправить заявку</a>
					</div>
				</div>
			</div>
		</div>
	
	</div>
</header> <!--end header -->

<div id="<?php echo get_field("why_us_id_section")?>" class="why-us anim"> <!--start why us -->
	<div class="container">
		<div class="row">
			<div class="co-md-12">
				<h2 class="anim_right"><?php echo get_field("title_section_why_us");?></h2>
			</div>
		</div>
		<div class="row">

		<?php 
			$whyItems = get_field("why_us_items");

			if ( $whyItems ) {
				$i = 1;
				foreach ($whyItems as $key => $value) {

					$anim = "anim_about_".$i++;

		?>
			<div class="col-md-3 col-sm-3 <?php echo $anim?>">
				<div class="wrap-item">
					<img src="<?php echo $value["image_why_us_item"]["url"]?>" alt="<?php echo $value["image_why_us_item"]["alt"]?>">
				</div>
				<div class="text-item"><?php echo $value["title_why_us_item"]?></div>
			</div>

		<?php 
			 	}
			}
		?>

		</div>
	</div>
</div> <!--end why us -->


<div id="slider" class="owl-carousel">
	
<?php
	$sliders = get_field('sliders');

	if ( $sliders ) {
	
		foreach ($sliders as $key => $value) {

			$bgSlider = get_field("background_image", $value["slider"]->ID);
			$imgSlider = get_field("image", $value["slider"]->ID);
?>

<div class="slider" style="background-image: url(<?php echo $bgSlider["url"] ?>)"> <!--start slider -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image-colum">
					<img src="<?php echo $imgSlider["url"] ?>" alt="<?php echo $imgSlider["alt"] ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="content-colum">
					<div class="title-slide animated bounceInDown"><?php echo $value["slider"]->post_title ?></div>
					<div class="descript-slide"><?php echo $value["slider"]->post_content ?></div>
					<div class="read-more-slide"><a href="<?php echo get_permalink($value["slider"]->ID) ?>">подробнее <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>					
				</div>
			</div>
		</div>
	</div>
</div> <!--end slider -->

<?php 
		}
		}
?>

</div>



<?php 
	$titlePortfolio = get_field("title_portfolio_section");
	$descriptPortfolio = get_field("description_portfolio_section");
?>
<div id="<?php echo get_field("portfolio_id_section")?>" class="portfolio"> <!--start portfolio -->

	<div class="head-siection">
		<div class="container">
			<div class="row">
				<h2 class="title-section anim_right"><?php echo $titlePortfolio ?></h2>
				<p class="descript-section anim_left"><?php echo $descriptPortfolio ?></p>
			</div>
		</div>
	</div>

	<div class="portfolio-items">
		<?php  
			$portfolioItems = get_field("portfolio_items");
			
			foreach ($portfolioItems as $key => $value)  {	
		?>
		
		<div class="col-md-3 col-sm-3 portfolio-item-wrap">
			<div class="portfolio-item">
				<div class="block-link">
					<a href="<?php echo get_field("project_link", $value["portfolio_project"]->ID) ?>" target=_blank><i class="fa fa-link" aria-hidden="true"></i></a></span>
				</div>
				<div class="portfolio-descript">
					<div class="content-descript">
						<p class="author"><?php echo get_field("author_of_design", $value["portfolio_project"]->ID) ?></p>
						<p class="name"><?php echo $value["portfolio_project"]->post_title;?></p>					
					</div>
				</div>
			</div>			
		</div>

		<?php 
			}
		?>	
	</div>
	<div class="clear"></div>
</div><!--end portfolio -->

<div id="<?php echo get_field("price_id_section")?>" class="price"> <!--start price -->

	<div class="head-siection">
		<div class="container">
			<div class="row">
		<h2 class="title-section anim_right"><?php echo get_field("title_section_price");?></h2>
		<p class="descript-section anim_left"><?php echo get_field("description_section_price");?></p>
			</div>
		</div>
	</div>

	<div class="price-items">
		<div class="container">
			<div class="row">
			
			<?php 

				$priceItems = get_field("price_items");
				$i = 1;
				if ( $priceItems ) {
					foreach ($priceItems as $key => $value) {

						$anim_price = "anim_about_".$i++; 

						if ( $value["active"] ) {
							$active = 'active';
						} else {
							$active = '';
						}

						$id = $value["price_item"]->ID;
			?>

				<div class="col-md-4 col-sm-4 <?php echo $anim_price ?>">
					<div class="price-item <?php echo $active ?>">
						<div class="head-item"><?php echo $value["price_item"]->post_title?></div>
						<div class="body-item">
							<div class="wrap-price">
								<div class="left-col">
									<?php echo get_field("price", $id); ?>
								</div>
								<div class="right-col">
									<p>000 <i class="fa fa-rub" aria-hidden="true"></i></p>
									<span><?php echo get_field("description_price", $id); ?></span>
								</div>
							</div>
							<div class="price-border"></div>

							<ul>
								<?php 
									$listItems = get_field("list_items", $id);
									
									if ( $listItems ) {
										foreach ($listItems as $key => $value) {
										
								?>
									<li><?php echo $value["item_list"] ?></li>
								<?php 
										}
									}
								?>
							</ul>
						</div>
						<div class="footer-item">
							<div class="btn-send-request">
								<a href="">отправить заявку</a>
							</div>								
						</div>
					</div>
				</div>

			<?php 
					} 
			 	}
			?>
			</div>
		</div>
	</div>
</div> <!-- end price -->

<div id="contacts" class="map embed-container"> <!--start map -->
	<div class="wrap-map embed-container maps">
		<iframe style="pointer-events: none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24334.73882285247!2d25.255202123321716!3d50.12607350732446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472ff65e8844dbab%3A0xb7db889b9d788f65!2z0LLRg9C70LjRhtGPINCd0LXQstGB0YzQutC-0LPQviwgMTAsINCg0LDQtNC40LLQuNC70ZbQsiwg0KDRltCy0L3QtdC90YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1suk!2sua!4v1486901780558" width="100%" height="530" frameborder="0" style="border:0" allowfullscreen></iframe>		
	</div>

	<div class="container wrap-request-form">
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xl-5">
				<div class="request-form">
					<form method="POST" action="#">
						<div class="title-form">Оформить заказ</div>
						<input type="text" placeholder="ФИО">
						<input type="text" placeholder="Адрес эл. почты">
						<input type="text" placeholder="Телефон">
						<input type="submit" value="заказать лендинг">

					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end map -->


<script>
	
			jQuery("#slider").owlCarousel({
			items:1,
			nav: true,
			loop:true,
			pagination: true,
			dots: true,
			autoplay:true,
			autoPlay:5,
			navText : ["&nbsp;","&nbsp;"],
		});


</script>