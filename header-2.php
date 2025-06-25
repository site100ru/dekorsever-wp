<?php
	
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
	
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo_description(); ?>" />
		<meta property="og:description" content="<?php echo_description(); ?>" />
		<meta name="keywords" content="<?php echo wp_get_document_title(); ?>" />
		<meta property="og:locale" content="ru_RU" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
		
		<!-- Yandex verification -->
		<meta name="yandex-verification" content="0ee61a335e60e3a2" />
		<meta name="yandex-verification" content="475d1dd359cca0da" />

		<!-- Bootstrap CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Theme CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" rel="stylesheet">
		
		<!-- Style CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
		
		<!-- Quiz CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css" rel="stylesheet">
		
		<!--link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.jpg" type="image/x-icon" /-->

		<title><?php echo wp_get_document_title(); ?></title>
		
		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>
		

		<!-- Header 1 -->
		<nav id="top-menu-4" class="navbar navbar-expand-lg navbar-light bg-light d-none d-lg-block py-0" style="border-bottom: 1px solid #d7d7d7">
			<div class="container">
				<!--a class="navbar-brand text-light d-none d-xxl-inline" href="#">Производство мебели</a-->
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item me-1 me-lg-3">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
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
						<li class="nav-item me-1 me-lg-3">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right" >
										Пн - Пт<br>с 9:00 до 18:00
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-3">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" >
									</div>
									<div class="nav-li-float-right" >
										Обратный звонок
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-4">
							<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
								<div style="display: flex;" class="align-items-center">      
									<div class="nav-li-float-left">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right" >
										Рассчитать стоимость
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						
						<li class="nav-item me-1 me-lg-5">
							<a class="top-menu-tel nav-link" href="tel:84993900100">
								<div style="display: flex;" class="align-items-center">
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
							<a class="nav-link ico-button pe-0" href="https://t.me/+79361385058">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="https://wa.me/79361385058?web=1&app_absent=1">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Header 1 -->

		<!-- Header 2 -->
		<nav id="top-menu-2" class="navbar navbar-expand-lg navbar-light bg-white shadow py-0">
			<div class="container">
				<a class="navbar-brand d-none d-lg-block" href="#" style="white-space: normal; margin-right: 0;">
					<div class="align-items-center">
						<div id="navbar-brand-ico">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.svg" id="navbar-brand-img" style="transition: .25s;">
						</div>
						<div style="clear: both;"></div>
					</div>
				</a>
				<a class="navbar-brand d-lg-none" href="#" style="white-space: normal; margin-right: 0;">
					<div class="align-items-center">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.svg" id="navbar-brand-img" style="transition: .25s;">
						<div style="clear: both;"></div>
					</div>
				</a>
				<div class="d-lg-none">
					<a class="top-menu-tel pt-1 pb-0" href="tel:84993900100">8 (499) 390-01-00</a>
					<div style="font-size: 10px; font-family: Gilroy-Light; text-transform: none;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: -1px;" class="me-1">Пн-Пт 9:00-18:00
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'navbarSupportedContent2',
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
											<img src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 2px;" class="me-1 mb-2">Пн-Пт с 9:00 до 18:00
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
		<!-- /Header 2 -->