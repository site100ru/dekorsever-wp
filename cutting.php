<?php
	
	/**
	 * Template Name: Распил материалов
	 * Template Post Type: page
	 */
	
	get_header( '2' );
	
?>


<!-- Header -->
<header id="header-cutting" class="home-cutting woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col-lg-9 py-5">
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
				
			</div>
		</div>
	</div>
</section>
<!-- /Actions -->


<!-- Process -->
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Как заказать</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-around">
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/01.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Скачать бланк заявки</h3>
								<p class="mb-0">Скачиваете бланк заявки на распил. <a download="Форма-заявки-на-распил.xls" href="<?php echo get_template_directory_uri(); ?>/Форма-заявки-на-распил.xls" target="_blank">Скачать</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/02.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Заполнить бланк</h3>
								<p class="mb-0">Заполните бланк, указав нужные размеры, количество деталей и свои контактные данные для обратной связи.</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/03.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Поможем с заполнением бланка</h3>
								<p class="mb-0">Если заполнение бланка Вам покажется сложным - свяжитесь с нашими менеджерами по телефону: <a href="tel:84993900100‬">8 (499) 390-01-00</a>, они помогут заполнить бланк или заполнят его за Вас.</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 mb-5">
						<div class="row">
							<div class="col-6 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.png" class="img-fluid">
							</div>
							<div class="col-6">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/04.png" class="img-fluid">
							</div>
						</div>
						<div class="row pt-3">
							<div class="col">
								<h3>Отправка бланка</h3>
								<p class="mb-0">Отправьте заполненный бланк заявки нам в любой удобной для Вас форме.</p>
								<br>
								<h3>В мессенджер:</h3>
								<ul class="nav justify-content-md-left mb-2 mb-lg-0">
									<li class="nav-item">
										<a class="nav-link ico-button px-0" href="https://wa.me/79361385058?web=1&app_absent=1" target="blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png">
										</a>
									</li>
                                    <li class="nav-item">
                                        <a class="nav-link ico-button px-0" href="https://t.me/+79361385058">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ico-button pe-0" href="https://max.ru/u/f9LHodD0cOIaPC-JT3CO_gR8lX_0r8w8ZdryldFEBqfWiLtrMWwQNmVViZk">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max.svg">
                                        </a>
                                    </li>
								</ul>
								<br>
								<h3>На email:</h3>
								<a target="_blank" href="mailto:mebel-dsever@yandex.ru" itemprop="email">mebel-dsever@yandex.ru</a>
								<p></p>
								<h3>Через форму заявки на сайте <a href="#application">ниже</a></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- Order -->
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3" id="application">Заявка на распил</h2>
				<div class="title-line mb-5"></div>
				
				<form id="formOrderSawCut" method="post" action="<?php echo get_template_directory_uri(); ?>/mails/send_order_saw_cut.php" enctype="multipart/form-data">
					<div class="row justify-content-around">
						<div class="col-md-4 mb-5">
							<div class="row pt-3">
								<div class="col">
									<h3>Скачать бланк заявки</h3>
									<p class="mb-4">
										<a download="Форма-заявки-на-распил.xls" href="<?php echo get_template_directory_uri(); ?>/Форма-заявки-на-распил.xls" target="_blank" class="btn btn-lg btn-corporate-color-1 ps-4 pe-4 mt-3 mt-md-6" style="width: 170px;">
											<!--img src="https://decorsever.ru/wp-content/themes/site100-furniture/img/ico/button-form-1.png" class="me-2"-->
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/doc-ico.png" class="img-fluid">&nbsp;
										Скачать
										</a>
									</p>
									<!--button class="btn btn-lg btn-corporate-color-1 ps-4 pe-4 mt-3 mt-md-6">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/doc-ico.png" class="img-fluid">&nbsp;
										Скачать</button>
									<!--div class="col-6 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/form-1.png" class="img-fluid">
									</div-->
								</div>  
							</div>
						</div>
						<div class="col-md-4 mb-5">
							<div class="row pt-3">
								<div class="col">
									<h3>Загрузить бланк заявки</h3>
									<div class="input-group custom-file-button pe-4 mt-3 mt-md-6" >
										<label class="input-group-text btn-corporate-color-1"  for="inputGroupFile-two" style="width: 170px; margin-top: 10px; padding-left: 1rem; font-size: 16px;">
											<img src="<?php echo get_template_directory_uri(); ?>/img/ico/doc-ico.png" class="img-fluid" style="padding: 5px 0;"> &nbsp; Выбрать файл
										</label>
										<input type="file" name="mail_file" accept=".xls, .xlsx" class="form-control" id="inputGroupFile-two" required style="background-color: transparent; padding-top: 13px; font-size: 14px; margin-left: 10px; border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem; height: 45px; margin-top: 12px;">
									</div>							
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-5">
							<div class="row pt-3">
								<div class="col">
									<h3>Отправить бланк заявки</h3>
									<input type="hidden" id="g-recaptcha-response-calculate-other-price" name="g-recaptcha-response">
									<button type="submit" class="btn btn-lg btn-corporate-color-1 ps-4 pe-4 mt-3 mt-md-6" style="width: 170px;">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/doc-ico.png" class="img-fluid">&nbsp;
										Отправить
									</button>						
								</div>

                                <div class="col">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="gridCheck-6" checked>
                                        <label class="form-check-label" for="gridCheck-6">
                                            <p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
                                        </label>
                                    </div>
                                </div>
							</div>
						</div>					
					</div>
				</form>
				
			</div>
		</div>
	</div>
</section>
<!-- /Order -->


<!--  Price table  -->
<section class="advantages bg-white py-5">
	<div class="container">
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
<!-- /Price table -->		
	
		
<?php include 'footer-2.php'; ?>