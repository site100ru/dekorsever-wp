<?php
	
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
	
	/**
	 * Template Name: Кухни на заказ (с примерами из продуктов с тегом portfolio).
	 * Template Post Type: page.
	 */
	 
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Theme CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		
		<!-- Style CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
		
		<!-- Quiz CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css" rel="stylesheet">

		<title>Декор-Север - изготовление кухонь, шкафов и другой корпусной мебели</title>
		
		<title><?php echo wp_get_document_title(); ?></title>
		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>

		
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
		<nav id="top-menu-2"class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
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
				<h1 class="home-title mb-3">Кухни по индивидуальным размерам на&#160;заказ от&#160;производителя</h1>
				<p class="home-subtitle mb-4">Изготовим качественную кухню по разумной цене, с учетом Ваших пожеланий и особенностей помещения. Рассчитаем стоимость за 15 минут.</p>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
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
				<nav class="breadcrumbs">
					<a href="/furniture/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / 
					Кухни на заказ
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col text-md-center">
				<h2>Наши работы</h2>
				<p class="section-description archive-portfolio mb-3">Представляем с гордостью!</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">	
			</div>
		</div>
		<div class="row text-start">
			<?php		
				$args = array(
					'post_type'	=> 'product',
					'tax_query' => array(
						array(
							'taxonomy' => 'product_tag',
							'field'    => 'slug',
							'terms'    => 'portfolio'
						)
					)
				);

				$query = new WP_Query( $args );

				while ( $query->have_posts() ) {
					$query->the_post();
					
					
					//global $post;
					//echo $post->ID;
					//get_permalink( $post_id )
					//get_permalink( $product->ID  );
				?>
					<div class="col-md-6 mb-5">
						<a href="<?php echo get_permalink(); ?>">
							<div class="approximation single-product-img rounded">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="" decoding="async" />	
								<div class="card-wrapper project-container-2-footer">
									<div class="row">
										<div class="col-6">
											<h3><?php echo get_the_title(); ?></h3>		
										</div>
										<div class="col-6">
											<h3 class="text-end">₽<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></h3>
										</div>
									</div>
								</div>	
							</div>
						</a>
					</div>
				<?php }
				wp_reset_postdata();
			?>
		</div>	
		<div class="row text-md-center">
			<div class="col">
				<a href="/furniture/portfolio/" type="button" class="btn btn-lg btn-corporate-color-1">Показать еще</a>
			</div>
		</div>		
	</div>
</section>				
<!-- /Archive-portfolio section -->



<!-- Gradient order section --
<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gradient-order-section-bg.jpg);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 text-md-end">
				<h2 class="text-light">Рассчитаем стоимость за 15 минут</h2>
				<p class="section-description archive-portfolio text-light mb-3">Хотите узнать стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
</section>
<!-- End gradient order section -->

<!-- ORDER LEFT GRADIENT SECTION -->
<section class="order-left-gradient-section">
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col-md-5 text-md-end">
				<h2 class="text-light">Рассчитаем стоимость за 15 минут</h2>
				<p class="section-description text-light mb-3">Хотите узнать стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1 mb-5" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
				<div class="row justify-content-md-end">
					<div class="col">
						<ul class="nav justify-content-md-end">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="https://wa.me/79361385058?web=1&app_absent=1">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-3" href="https://t.me/+79361385058">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/order-left-gradient-section-img.jpg" class="w-100 d-md-none">
</section>
<!-- /ORDER LEFT GRADIENT SECTION -->



<!-- About section -->
<section class="about-section bg-light py-5">
	<div class="container">	
		<div class="row justify-content-between">		
			<div class="col-12 col-lg-6 order-2 order-lg-first text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/single-prod-img.jpg" class="img-fluid">
			</div>
			<div class="col-12 col-lg-5 offset-lg-1 order-1 order-lg-last mb-5 mb-lg-0 ps-lg-5">
				<h2 class="mb-3">О нас</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<p class="text-start">Мы изготавливаем кухни с 2015 года. Все наши кухни функциональны, практичны и эстетически привлекательны. Нам нравится делать красивую мебель, нравится получать слова благодарности от наших клиентов. Приятно, когда твоя работа нравится людям!
				</p>	
				<p class="text-start mb-5">Желаете пополнить свой дом эксклюзивной кухней? Смело обращайтесь в компанию «Декор-Север». Любая заказанная у нас кухня отличается долговечностью и внешней элегантностью. Все наши кухни будут долго радовать Вас своим изысканным видом, создавая атмосферу уюта и защищённости.
				</p>
				<a href="https://dekorsever.ru/about-us/" type="button" class="btn btn-lg btn-corporate-color-1">Узнать больше</a>
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



<!-- Process -->
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2 class="mb-3">Как заказать</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">

				<div class="row justify-content-around">
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<div class="row align-items-center">
							<div class="col-4 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/1.svg" class="img-fluid">
							</div>
							<div class="col-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/call-agent-ico.svg" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col text-start">
								<h3>Первичный контакт</h3>
								<p class="mb-0">Свяжитесь с нами любым удобным способом, расскажите, что Вы хотите. При наличии дизайн-проекта, наброска, размеров или другой информации — высылаете нам на почту, в Telegram, Whatsapp или в форме обратной связи.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<div class="row align-items-center">
							<div class="col-4 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/2.svg" class="img-fluid">
							</div>
							<div class="col-4 text-start">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calc-ico.svg" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col text-start">
								<h3>Расчет стоимости</h3>
								<p class="mb-0">На основании полученной от Вас информации мы сделаем предварительный расчет стоимости и сроков производства. При необходимости уточним детали.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<div class="row align-items-center">
							<div class="col-4 text-center ">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/3.svg" class="img-fluid">
							</div>
							<div class="col-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/doc-ico.svg" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col text-start">
								<h3>Заключение договора</h3>
								<p class="mb-0">Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор. Вы вносите предоплату и кухня поступает в производство.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-0">
						<div class="row align-items-center">
							<div class="col-4 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/4.svg" class="img-fluid">
							</div>
							<div class="col-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/delivery.svg" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col text-start">
								<h3>Доставка и установка</h3>
								<p class="mb-0">После окончания производства доставляем и устанавливаем кухню в заранее оговоренные дату и время. После установки производим окончательные расчеты.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->



<!-- Frequent questions -->
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="mb-3">Частые вопросы</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<div class="accordion text-start" id="accordionExample">
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-1">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
								Сколько времени изготавливается кухня?
							</button>
						</h3>
						<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p class="mb-0">Срок производства зависит от материалов и составляет от 10 рабочих дней. Сроки, в обязательном порядке, согласовываются с заказчиком при заключении договора.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
								Как вызвать специалиста для проведения замера?
							</button>
						</h3>
						<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p class="mb-0">Вызвать замерщика Вы можете любым из способов: оставить онлайн-заявку на нашем сайте, написать на электронный адрес: <a target="_blank" href="mailto:mebel-dsever@yandex.ru" itemprop="email">mebel-dsever@yandex.ru</a>, позвонить по телефону ☎ <a href="tel:84993900100" style="text-decoration: none;"><b>8 (499) 390-01-00‬</b></a> или оставить заявку на обратный звонок, написать в Telegram или Whatsapp.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
								Сколько стоит вызов замерщика?
							</button>
						</h3>
						<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p class="mb-0">Стоимость выезда замерщика с образцами материалов составляет 3000 руб. Но если Вы заключаете договор, то замер для Вас обходится бесплатно, а оплаченный Вами выезд вычитается из суммы оплаты.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
								Если эскиз кухни уже есть, можно ли по нему получить расчет?
							</button>
						</h3>
						<div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p>Конечно!</p>
								<p class="mb-0">Направьте эскиз с Вашей кухней (или другой корпусной мебелью) на нашу электронную почту:<a target="_blank" href="mailto:mebel-dsever@yandex.ru" itemprop="email">mebel-dsever@yandex.ru</a>, дополнительно указав в письме материал фасадов, 
									комплектацию, габариты мебели и мы предоставим расчет в ответном письме.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
								У вас цены ниже, чем обычно по городу. Почему?
							</button>
						</h3>
						<div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<p class="mb-0">Наличие собственного производства, оптовые закупки расходных материалов и большое количество заказов позволяют нам сохранять цены на докризисном уровне и делать нашим клиентам предложения на самых выгодных условиях.</p>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-3">
						<h3 class="accordion-header" id="heading-6">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
								Какая модель кухни самая популярная?
							</button>
						</h3>
						<div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionExample">
							<div class="accordion-body pb-2">
								<p>Предпочтения наших клиентов настолько разнообразны, что выделить какую-либо модель достаточно сложно. При разработке проекта мы учитываем все Ваши пожелания, а благодаря широчайшей коллекции фасадов и столешниц, могут быть сотни разных вариаций.</p>
								<p class="mb-0">В одном можем уверить Вас точно: какая бы ни была кухня от нашей фабрики по стилю или конфигурации, она идеально впишется в ваш интерьер и прослужит долгие годы.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Frequent questions -->



<!-- Gradient order section --
<section class="gradient-order-section bg-light" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sec-bg2.jpg);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 text-md-end">
				<h2>Рассчитаем стоимость за 15 минут</h2>
				<p class="section-description archive-portfolio mb-3">Хотите узнать стоимость качественной кухни с учетом всех Ваших пожеланий и особенностей помещения? Это бесплатно и ни к чему Вас не обязывает!</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
			</div>
			<div class="col-md-7"></div>
		</div>
	</div>
</section>
<!-- End gradient order section -->

<!-- ORDER RIGHT GRADIENT SECTION -->
<section class="order-right-gradient-section">
	<div class="container py-5">
		<div class="row justify-content-center py-5">
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<h2>Рассчитаем стоимость по фото за&nbsp;15&nbsp;минут</h2>
				<p class="section-description mb-3">Для расчета присылайте фото или видео с комментариями нам в мессенджер или через форму на сайте. Ответим на вопросы о покраске.</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<br>
				<a href="#" type="button" class="btn btn-lg btn-corporate-color-1 mb-5" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">Рассчитать стоимость</a>
				<div class="row">
					<div class="col">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link ico-button px-2" href="https://wa.me/79361385058?web=1&app_absent=1">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button px-3" href="https://t.me/+79361385058">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/order-right-gradient-section-img.jpg" class="w-100 d-md-none">
</section>
<!-- /ORDER RIGHT GRADIENT SECTION -->

		
<?php get_footer( '3' ); ?>