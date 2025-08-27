<?php
	
	/**
	 * Template Name: Покраска
	 * Template Post Type: page
	 */
	
	get_header( '3' );
	
?>
<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section painting-home-section painting-home-section-painting">
	<div class="parallax-home-section parallax-home-section-painting" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/painting.jpg);"></div>
	<header class="d-none d-lg-block">
		<!-- Header nav top -->
		<nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block py-0">
			<div class="container">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ms-auto align-items-center">
						<li class="nav-item me-3">
							<a class="nav-link" href="#">
								<div style="display: flex;">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right" >
										г.o. Мытищи,<br>д. Грибки
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-3">
							<a class="nav-link" href="#">
								<div style="display: flex;">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg">
									</div>
									<div class="nav-li-float-right" >
										Пн - Пт<br>с 9:00 до 18:00
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-3">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right" >
										Обратный звонок
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-4">
							<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
								<div style="display: flex;">      
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg">
									</div>
									<div class="nav-li-float-right" >
										Рассчитать стоимость
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-4">
							<a class="top-menu-tel nav-link" href="tel:84993900100">
								<div style="display: flex;">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg">
									</div>
									<div class="nav-li-float-right" >
										8 (499) 390-01-00
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button" href="https://t.me/+79361385058">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button" href="https://wa.me/79361385058?web=1&app_absent=1">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Header nav top -->
		
		<!-- Header nav bottom -->
		<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-0">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-transparent.svg">
				</a>
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="mobail-header-collapse">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'mobail-header-collapse',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none">
										<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/location-ico.svg" style="width: 10px;" class="me-1">
												<span>Мытищи, д. Грибки, ул. Промышленная, 64Д, к2</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:84993900100">8 (499) 390-01-00</a>
										<div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Ежедневно с 9:00 до 18:00
										</div>
									</li>
									<li class="nav-item d-lg-none pb-4">
										<a class="ico-button pe-2" href="https://wa.me/79361385058?web=1&app_absent=1">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg">
										</a>
										<a class="ico-button pe-0" href="https://t.me/+79361385058">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg">
										</a>
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker_2()
						));
					?>
				</div>
			</div>
		</nav>
		<!-- /Header nav bottom -->
	</header>
	
	
	<header id="sliding-header" class="shadow">
		<!-- Header nav bottom -->
		<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.svg">
				</a>
				
				<div class="d-lg-none">
					<a class="top-menu-tel pt-1 pb-0" style="font-size: 14px;" href="tel:84993900100">8 (499) 390-01-00</a>
					<div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px;" class="me-1">Пн-Пт 9:00-18:00
					</div>
				</div>
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sliding-header-collapse" aria-controls="sliding-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="sliding-header-collapse">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'sliding-header-collapse',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none">
										<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/location-ico.svg" style="width: 10px;" class="me-1">
												<span>Мытищи, д. Грибки, ул. Промышленная, 64Д, к2</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:84993900100">8 (499) 390-01-00</a>
										<div class="mb-2" style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Пн - Пт, с 9:00 до 18:00
										</div>
									</li>
									<li class="nav-item d-lg-none pb-4">
										<a class="ico-button pe-2" href="https://wa.me/79361385058?web=1&app_absent=1">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg">
										</a>
										<a class="ico-button pe-0" href="https://t.me/+79361385058">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg">
										</a>
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker_2()
						));
					?>
				</div>
			</div>
		</nav>
		<!-- /Header nav bottom -->
	</header>
	<div class="container">
		<div class="row align-items-center home-section-height">
			<div class="col-xl-10 col-xxl-9">
				<h1 class="home-title">Покраска кухонных фасадов и другой мебели из МДФ, шпона, дерева, ДСП, и фанеры</h1>
				<div class="row advantages">
					<div class="col-lg-4 col-md-6 section_paint_home">
						<div class="row">
							<div class="col-3 col-mb-2" style="width: auto; padding-right: 8px;">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/deadlines2-ico.svg" alt="">
							</div>
							<div class="col-9 col-mb-10 section_paint">
								<h2 class="advantage-title text-start" style="color: #fff;">Оперативные сроки</h2>
								<p class="home-advantage-description">Выполняем заказы от 3-х дней</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 section_paint_home">
						<div class="row">
							<div class="col-3 col-mb-2" style="width: auto; padding-right: 8px;">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/sell-ico.svg" alt="">
							</div>
							<div class="col-9 col-mb-10 section_paint">
								<h2 class="advantage-title text-start" style="color: #fff;">Скидки от объема</h2>
								<p class="home-advantage-description">На большие заказы особые условия</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 section_paint_home" style="margin-right: 0;">
						<div class="row">
							<div class="col-3 col-mb-2" style="width: auto;">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/rewerd-ico.svg" alt="">
							</div>
							<div class="col-9 col-mb-10 section_paint">
								<h2 class="advantage-title text-start" style="color: #fff;">Даем гарантию 2 года</h2>
								<p class="home-advantage-description">На материалы и работу</p>
							</div>
						</div>
					</div>
				</div>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1 header_btn" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
			</div>	
		</div>
	</div>
</section>
<!-- /Home section -->


<!-- Archive portfolio section -->
<section class="archive-portfolio-section archive-portfolio bg-white pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10 mx-auto item_text">
				<p>Методов отделки деревянных изделий очень много, самым распространенным из них является покраска эмалью. При покрытии эмалью структура дерева становится практически не видна (в зависимости от породы древесины). Эмаль можно использовать абсолютно любых цветов: от пастельных до самых ярких или темных, поэтому крашенная деревянная мебель отлично впишется в любой интерьер, оставаясь при этом прочной и экологичной.</p>
			</div>
		</div>
		<div class="row">
			<div class="col text-md-center">
				<h2 style="margin-top: 60px;">Предметы, которые мы красим:</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="row text-start">
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card5.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Кухонные фасады</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">	
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card6.jpg" class="img-fluid" alt="" decoding="async" />	
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Шкафы/Тумбы/Другую мебель</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card7.jpg" class="img-fluid" alt="" decoding="async" fetchpriority="high" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Двери</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card8.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Лестницы</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col text-md-center">
				<h2 style="margin-top: 60px;">Материалы, которые мы красим:</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="row text-start">
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card9.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">МДФ/ЛМДФ</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">	
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card10.jpg" class="img-fluid" alt="" decoding="async" />	
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Шпон</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card11.jpg" class="img-fluid" alt="" decoding="async" fetchpriority="high" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">Дерево</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-3 mb-3">
				<a >
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card12.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 11px 15px;">ДСП/ЛДСП/Фанера</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
        
        
<section class="about-section bg-light" style="padding-bottom: 60px; padding-top: 3rem !important;">
	<div class="container">	
		<div class="row">
			<div class="col text-md-center">
				<h2 style="margin-top: 60px;">Примеры наших работ</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div id="carouselExample" class="carousel slide slides" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <div class="row">
				<div class="col-6 position-relative">
					<img class="slider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.jpg" class="d-block w-100" alt="...">
					<!-- <img class="magnifying_glass" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа"> -->
				</div>
				<div class="col-6 position-relative">
				  <img class="slider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg" class="d-block w-100" alt="...">
				  <!-- <img class="magnifying_glass" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа"> -->
				</div>
			  </div>
			</div>
			<div class="carousel-item">
			  <div class="row">
				<div class="col-6 position-relative">
				  <img class="slider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg" class="d-block w-100" alt="...">
				  <!-- <img class="magnifying_glass" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа"> -->
				</div>
				<div class="col-6 position-relative">
				  <img class="slider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.jpg" class="d-block w-100" alt="...">
				  <!-- <img class="magnifying_glass" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/magnifying-glass.svg" alt="Лупа"> -->
				</div>
			  </div>
			</div>
		  </div>
		
		  <!-- Кнопки переключения -->
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		<div id="carouselExampleMb" class="carousel slide Mb" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="slider d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.jpg" alt="Slide 1">
				</div>
				<div class="carousel-item">
				  <img class="slider d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg" alt="Slide 2">
				</div>
				<div class="carousel-item">
				  <img class="slider d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.jpg" alt="Slide 3">
				</div>
				<div class="carousel-item">
					<img class="slider d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg" alt="Slide 2">
				  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleMb" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleMb" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="slider_btn_block">
			<a href="/portfolio" class="slider_btn btn btn-lg btn-corporate-color-1">Все наши работы</a>
		</div>
	</div>	
</section>

<section class="archive-portfolio-section archive-portfolio bg-white pb-5">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2 style="margin-top: 60px;">Цены на покраску</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="painting_matte_enamel_text_box">
			<p class="painting_matte_enamel">
			  <span>Покраска матовой <br class="painting_matte_enamel_br"> эмалью</span>
			  <span class="painting_matte_enamel_text"></span>
			  <span style="color: #FF5147; font-weight: 600;">от 4 000 руб/кв.м</span>
			</p>
		</div>
	</div>
</section>


<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gradient-order-section-bg-bl.jpg); padding-top: 85px; padding-bottom: 84px;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 text-md-end">
				<h2 class="text-light calcul">Рассчитаем стоимость по фото за 15 минут</h2>
				<p class="section-description archive-portfolio text-light mb-3">Для расчета присылайте фото или видео с комментариями нам в мессенджер или через форму на сайте. Ответим на вопросы о покраске.</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 60px;">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
				<div class="d-flex calcul_mess" style="margin-top: 40px;">
					<a class="nav-link ico-button" href="https://t.me/+79361385058" style="margin-right: 20px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
					</a>
					<a class="nav-link ico-button" href="https://wa.me/79361385058?web=1&app_absent=1">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
					</a>
				</div>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
</section>
<!-- /Archive-portfolio section -->

<div class="Mb_back"></div>

<!-- About section -->
<section class="about-section bg-light py-5">
	<div class="container">	
		<div class="row justify-content-between">		
			<div class="col-12 col-lg-6 order-2 order-lg-first text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/single-prod-img.jpg" class="img-fluid">
			</div>
			<div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-5 mb-lg-0 about" style="padding-left: 24px;">
				<h2 class="mb-3">О нас</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<p class="text-start" style="line-height: 27px; margin-bottom: 60px;">За много лет работы компании «Декор-Север» нами накоплен большой практический опыт в покраске деревянных изделий. Мы тщательно подобрали профессиональное оборудование и полностью укомплектованы высококлассными специалистами, в совершенстве владеющими различными технологическими приемами и изучившими мельчайшие нюансы своего дела. Нашим клиентам гарантирована качественная покраска древесины любого вида, всеми возможными из выпускающихся лакокрасочных материалов, в самые короткие сроки и по очень привлекательным расценкам, которые оговариваются при заказе требуемой услуги.</p>
				<a href="/about-us" style="padding: 8px 40px;" class="btn btn-lg btn-corporate-color-1" >Узнать больше</a>
			</div>
		</div>
	</div>	
</section>		
<!-- /About section -->

		
<!-- Advantage section -->
<section class="advantage bg-white py-5" style="padding-top: 60px;">
	<div class="container">
		<div class="row">
			<div class="col align-items-center text-md-center">
				<h2 class="mb-3">Наши преимущества</h2>
				<p class="section-description archive-portfolio mb-3">Почему стоит выбрать компанию «Декор-Север»</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<div class="row">
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/deadlines-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Оперативные сроки</h3>
								<p class="text-start">Выполняем заказы от 3-х дней.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/discount-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Скидки от объема</h3>
								<p class="text-start">На большие или периодические заказы особые условия.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-guarantee-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Гарантия 2 года</h3>
								<p class="text-start">Мы даем максимальную гарантию на услуги по покраске, т.к. уверены в профессионализме своих сотрудников и используемых материалах.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-advantage-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Профессиональная обработка дерева</h3>
								<p class="text-start">Помимо покраски у нас возможно: покрытие лаком, тонировка, полировка, патинирование и изготовление новых фасадов.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="Mb_back"></div>

<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gradient-order-section-bg-wh.jpg); padding-top: 85px; padding-bottom: 84px;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 text-md-end">
				<h2 class="calcul" style="color: #323232;">Рассчитаем стоимость по фото за 15 минут</h2>
				<p class="section-description archive-portfolio mb-3" style="color: #323232;"> Для расчета присылайте фото или видео с комментариями нам в мессенджер или через форму на сайте. Ответим на вопросы о покраске.</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" style="margin-bottom: 60px;">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
				<div class="d-flex calcul_mess" style="margin-top: 40px;">
					<a class="nav-link ico-button" href="https://t.me/+79361385058" style="margin-right: 20px;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
					</a>
					<a class="nav-link ico-button" href="https://wa.me/79361385058?web=1&app_absent=1">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
					</a>
				</div>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
</section>


<?php get_footer( '3' ); ?>