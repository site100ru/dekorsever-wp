<?php
	
	/**
	 * Template Name: Простая страница
	 * Template Post Type: page
	 */
	
	get_header( '2' );
	
?>


<!-- Header -->
<header id="header-section" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col-lg-10 py-5">
				<h1 class="mb-3"><?php wp_title( "", true ); ?></h1>
				<?php
					if ( get_the_excerpt() != 'Off' ) { ?>
						<p class="home-description mb-0"><?php echo get_the_excerpt(); ?></p>
					<?php }
				?>
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Actions -->
<section class="delivery-section pt-4 pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
					while( have_posts() ){ the_post();
						the_content();
					}
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Actions -->


<!-- Our proizvodstvo --
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наше производство</h2>
				<div class="title-line mb-5"></div>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-1.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-2.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-3.jpg" class="img-fluid rounded shadow mb-3">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-4.jpg" class="img-fluid rounded shadow mb-3 mb-md-0">
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-5.jpg" class="img-fluid rounded shadow">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our proizvodstvo -->


<!-- Our proizvodstvo --
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Сертификаты</h2>
				<div class="title-line mb-5"></div>
				<div class="row text-center">
					<div class="col-md-12">
						<div class="row justify-content-center">
							<div class="col-md-3">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-1.jpg">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-1.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-2.jpg">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-2.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-3.jpg">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-3.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
							<div class="col-md-3">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-4.jpg">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/certificate-4.jpg" class="img-fluid rounded shadow mb-3">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our proizvodstvo -->


<!-- Our clients --
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наши клиенты</h2>
				<div class="title-line mb-5"></div>
				
				<div class="row justify-content-center text-center">
					<div class="col-md-8">
						<div class="row justify-content-center">
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-1.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-2.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-3.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-4.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-5.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-6.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-7.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-8.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-9.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-10.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-11.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-12.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-13.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-14.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-15.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-16.jpg" class="img-fluid mb-3">
							</div>
							<div class="col-md-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients/p-17.jpg" class="img-fluid mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our clients -->



<!-- Advantage section -->
<section class="advantage bg-light py-5">
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



<!-- Order --
<section class="order-section bg-white">
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-md-6" style="position: relative;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/men.png">
			</div>
			<div class="col-md-6">
				<h2>Остались вопросы?</h2>
				<p style="max-width: 570px;">Здравствуйте! Хотите, мы свяжемся с вами в ближайшее время и все подробно расскажем?</p>
				<div class="title-line mb-5" style="margin: unset;"></div>
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order_mail.php">
					<div class="row">
						<div class="col-md-4">
							<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
							<input type="text" name="name" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="col-md-4">
							<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
							<input type="text" name="phone" class="form-control telMask" id="exampleFormControlInput2" required>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-corporate-color-1 mt-3">Хорошо, жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /Order -->

<!-- ORDER LEFT MEN SECTION -->
<section class="orderLeftMenSection bg-white">
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-md-6" style="position: relative;">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/men.png" class="order-section-men">
			</div>
			<div class="col-md-6">
				<h2>Нужна консультация?</h2>
				<p class="mb-3" style="max-width: 570px;">Оставьте заявку, с Вами свяжется наш специалист.</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				<br>
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order_mail.php">
					<div class="row">
						<div class="col-8 col-lg-4">
							<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
							<input type="text" class="form-control mb-3 mb-md-0" id="exampleFormControlInput1">
						</div>
						<div class="col-8 col-lg-4">
							<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
							<input type="text" class="form-control mb-3 mb-md-0 telMask" id="exampleFormControlInput2">
						</div>
					</div>
					<div class="row">
						<div class="col-8 col-lg-4">
							<button type="button" class="btn btn-lg btn-corporate-color-1 w-100 mt-3">Хорошо, жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /ORDER LEFT MEN SECTION -->
		
		
<?php include 'footer-2.php'; ?>