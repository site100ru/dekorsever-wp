<?php
	
	/**
	 * Template Name: Главная
	 * Template Post Type: page
	 */
	
	get_header( '3' );
	
?>
<!-- Home section -->
<div id="sp-home" class="scroll-points"></div>
<section class="main-home-section">
	<div class="parallax-home-section"></div>
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
		<nav id="top-menu-2" class="header-nav-bottom navbar navbar-expand-lg navbar-light py-0">
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
				<h1 class="home-title mb-3">Компания&#160;«Декор-Север»&#160;</h1>
				<p class="home-subtitle mb-4">Изготовление, реставрация, покраска корпусной мебели, кухонных фасадов и других изделий из древесных материалов МДФ, ЛДСП, шпона, массива, фанеры и других.</p>
			</div>	
		</div>
	</div>
</section>
<!-- /Home section -->


<!-- Archive portfolio section -->
<section class="archive-portfolio-section archive-portfolio bg-white pb-5">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2 style="margin-top: 60px;">Наши услуги</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="row text-start">
			<div class="col-md-6 mb-4">
				<a href="/kuhni-na-zakaz/">
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-1.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 30px 30px;">Кухня на заказ</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-6 mb-4">	
				<a href="/delivery/">
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-2.jpg" class="img-fluid" alt="" decoding="async" />	
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 30px 30px;">Доставка и сборка</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-6 mb-4">
				<a href="/painting/">
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-3.jpg" class="img-fluid" alt="" decoding="async" fetchpriority="high" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 30px 30px;">Покраска материалов</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
			<div class="col-md-6 mb-4">
				<a href="/cutting/">
					<div class="approximation project-container-2 rounded">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-4.jpg" class="img-fluid" alt="" decoding="async" />
						<div class="card-wrapper project-container-2-footer">
							<div class="row">
								<div class="col-6" style="width: auto;">
									<h3 style="margin: 0 0 30px 30px;">Распил материалов</h3>		
								</div>
							</div>
						</div>	
					</div>
				</a>
			</div>
		</div>
	</div>
</section>				
<!-- /Archive-portfolio section -->


<!-- About section -->
<section class="about-section bg-light py-5">
	<div class="container">	
        <div class="row">
			<div class="col text-md-center">
                <h2 class="mb-3">О нас</h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
			</div>
		</div>
		<div class="row justify-content-between">		
			<div class="col-12 col-lg-6 order-2 order-lg-first text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/single-prod-img.jpg" class="img-fluid">
			</div>
			<div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-5 mb-lg-0 ps-lg-5 about">
				<p class="text-start">Основа успеха – более чем 9 летний опыт, с ежегодным повышением квалификации и, гарантированное качество производимых изделий и монтажных работ, а самое главное – это ориентация на потребности заказчиков.</p>	
				<p class="text-start">Мы сотрудничаем с ведущими поставщиками материалов и комплектующих в России, для того что бы делать только качественную мебель и предложить Вам лучшее, что есть на рынке с гарантией на изделия и наши работы 2 года.</p>
				<p class="text-start">Вся наша продукция функциональна, практична и эстетически привлекательна. У нас Вы можете заказать:</p>
				<ul class="list-unstyled ms-3" style="list-style-type: disc;">
					<li><p>кухню;</p></li>
					<li><p>корпусный шкаф и шкаф-купе;</p></li>
					<li><p>мебель в прихожую, гардеробную;</p></li>
					<li><p>мебель в гостиную;</p></li>
					<li><p>другую корпусную мебель.</p></li>
				</ul>
				<p class="text-start mb-5">Желаете наполнить свой дом эксклюзивными кухней или шкафом-купе? Смело обращайтесь в компанию «Декор-Север». Любая заказанная у нас мебель отличается долговечностью и внешней элегантностью. Все наши изделия будут долго радовать Вас своим изысканным видом, создавая в комнате атмосферу уюта и защищённости.</p>
                <a href="/about-us" style="padding: 8px 40px;" class="btn btn-lg btn-corporate-color-1">Узнать больше</a>
			</div>
		</div>
	</div>	
</section>		
<!-- /About section -->


<!-- Advantage section -->
<section class="advantage bg-white py-5">
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
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-advantage-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Собственное производство</h3>
								<p class="text-start">Мы обеспечиваем полный цикл изготовления мебели (проект, производство, доставка, монтаж) и обработки материалов, без перекладывания обязанностей на посредников.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-guarantee-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Гарантия до 2-х лет</h3>
								<p class="text-start">Мы даем максимальную гарантию на все свои услуги, т.к. уверены в профессионализме своих сотрудников и используемых материалах.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/discount-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Скидка +20% при повторном обращении</h3>
								<p class="text-start">Мы изготавливаем любую корпусную мебель, а значит Вы можете заказать у нас шкаф, гостиную или другую мебель в квартиру в едином стиле и по выгодной цене.</p>
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
								<p class="text-start">На большие или периодические заказы мы предоставляем особые условия!</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/deadlines-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Оперативные сроки</h3>
								<p class="text-start">Наши производственные мощности позволяют нам выполнять заказы в максимально короткие сроки начинающиеся от 1 дня.</p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-3 col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/measurement-ico.svg" class="img-fluid">
							</div>
							<div class="col-9 col-md-10">
								<h3 class="advantage-title text-start">Замер и дизайн-проект бесплатно</h3>
								<p class="text-start">При заключении договора наш специалист бесплатно сделает замер и разработает дизайн-проект Вашей будущей мебели.</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

		
<?php get_footer( '3' ); ?>