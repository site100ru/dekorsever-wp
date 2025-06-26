		<!-- Contacts -->
		<div id="contacts-sp" class="scroll-points"></div>
		<section class="contacts-section-3">
			<div class="container pt-5 pb-2 pb-md-4">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-12 pt-2 pb-3">
						<nav id="contacts-menu-1" class="navbar-light">
							
							<!-- Desktop version -->
							<div class="row h-100 justify-content-center align-items-center d-none d-lg-flex">
								<div class="col-3">
									<a href="#">
										<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
									</a>
								</div>
								<div class="col-7">
									<nav id="contacts-menu-2" class="navbar navbar-expand-xl navbar-light">
										<div class="collapse navbar-collapse">					
											<?php
												wp_nav_menu(array(
													'theme_location' => 'main-menu',
													'container' => false,
													'menu_class' => '',
													'fallback_cb' => '__return_false',
													'items_wrap' => '<ul id="menu-main-menu-1" class="navbar-nav m-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
													'depth' => 2,
													'walker' => new bootstrap_5_wp_nav_menu_walker_2()
												));
											?>
										</div>
									</nav>
								</div>
								<div class="col-2 text-end">
									<a href="tel:‪84993900100" class="contacts-phone">‪
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-1">8 <span>(499)</span> 390-01-00‬
									</a>
								</div>
							</div>
							<!-- End Desktop version -->
									
							
							<!-- Mobail version -->
							<div class="row d-lg-none">
								<div class="col-12 mb-4">
									<a href="#">
										<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
									</a>
								</div>
								<div class="col-12">
									<ul class="mb-2">
										<li class="nav-item">
											<a href="#" class="nav-link ps-0 pb-2">
												<div style="display: flex;" class="align-items-center">
													<div class="nav-li-float-left">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
													</div>
													<div class="nav-li-float-right" >
														<span>г.o. Мытищи, д. Грибки</span>
													</div>
													<div style="clear: both;"></div>
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ps-0 py-2">
												<div style="display: flex;" class="align-items-center">
													<div class="nav-li-float-left">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
													</div>
													<div class="nav-li-float-right" >
														<span>Пн-Пт, с 9:00 до 18:00</span>
													</div>
													<div style="clear: both;"></div>
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="mailto:mebel-dsever@yandex.ru" class="nav-link ps-0 py-2">
												<!--img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg" class="pe-2">
												<span>mebel-dsever@yandex.ru</span-->
												
												<div style="display: flex;" class="align-items-center">
													<div class="nav-li-float-left">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
													</div>
													<div class="nav-li-float-right">
														<span>mebel-dsever@yandex.ru</span>
													</div>
													<div style="clear: both;"></div>
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link ps-0 py-2">
												<div style="display: flex;" class="align-items-center">
													<div class="nav-li-float-left">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" >
													</div>
													<div class="nav-li-float-right" >
														<span>Обратный звонок</span>
													</div>
													<div style="clear: both;"></div>
												</div>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link ps-0 py-2" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
												<div style="display: flex;" class="align-items-center">      
													<div class="nav-li-float-left">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg" class="pt-1">
													</div>
													<div class="nav-li-float-right" >
														<span>Рассчитать стоимость</span>
													</div>
													<div style="clear: both;"></div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-12">
									<a href="tel:‪84993900100" class="contacts-phone">‪
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="pe-2"> 8<span>(499)</span> 390-01-00‬
									</a>
								</div>
							</div>
							<!-- END Mobail version -->

						</nav>
					</div>
				</div>				
				<div class="row align-items-center justify-content-center d-none d-lg-flex" style="margin-bottom: 30px;">
					<div class="col-12 pt-2">
						<nav id="contacts-menu-1" class="navbar-light">
	
							<!-- Desktop version -->
							<ul class="nav justify-content-center align-items-center">
								<li class="nav-item me-1 me-lg-2">
									<a class="nav-link" href="#">
										<div style="display: flex;" class="align-items-center">
											<div class="nav-li-float-left">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
											</div>
											<div class="nav-li-float-right" >
												<span>г.o. Мытищи,<br>д. Грибки</span>
											</div>
											<div style="clear: both;"></div>
										</div>
									</a>
								</li>
								<li class="nav-item me-1 me-lg-2">
									<a class="nav-link" href="#">
										<div style="display: flex;" class="align-items-center">
											<div class="nav-li-float-left">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
											</div>
											<div class="nav-li-float-right" >
												<span>Без выходных<br>с 9:00 до 21:00</span>
											</div>
											<div style="clear: both;"></div>
										</div>
									</a>
								</li>
								<li class="nav-item me-1 me-lg-2">
									<a href="mailto:mebel-dsever@yandex.ru" class="nav-link">
										<div style="display: flex;" class="align-items-center">
											<div class="nav-li-float-left">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
											</div>
											<div class="nav-li-float-right">
												<span>mebel-dsever@yandex.ru</span>
											</div>
											<div style="clear: both;"></div>
										</div>
									</a>
								</li>
								<li class="nav-item me-1 me-lg-2">
									<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
										<div style="display: flex;" class="align-items-center">
											<div class="nav-li-float-left">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" >
											</div>
											<div class="nav-li-float-right" >
												<span>Обратный звонок</span>
											</div>
											<div style="clear: both;"></div>
										</div>
									</a>
								</li>
								<li class="nav-item me-1 me-lg-2">
									<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#calculatePriceWithDownloadModal">
										<div style="display: flex;" class="align-items-center">      
											<div class="nav-li-float-left">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/calculator-ico.svg" class="pt-1">
											</div>
											<div class="nav-li-float-right" >
												<span>Рассчитать стоимость</span>
											</div>
											<div style="clear: both;"></div>
										</div>
									</a>
								</li>
							</ul>
									
									
								
							<!-- End Desktop version -->
									
							<!-- Mobail version -->
							<!--div class="row d-lg-none">
								<div class="col-12 mb-4">
									<a href="#">
										<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
									</a>
								</div>
								<div class="col-12">
									<ul class="mb-2">
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
										<li class="nav-item">
											<a href="#" class="nav-link ps-0">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg">
												<span>Пн-Пт: 9:00-18:00</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="mailto:mebel-dsever@yandex.ru" class="nav-link ps-0">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
												<span>mebel-dsever@yandex.ru</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-12">
									<a href="tel:‪89256424787" class="contacts-phone">‪8 <span>(925)</span> 642-47-87</a>
								</div>
							</div-->
							<!-- END Mobail version -->

						</nav>
					</div>
				</div>				
				<div class="row justify-content-center">
					<div class="col-md-8 py-3 pt-md-0">
						<ul class="nav justify-content-lg-center mb-lg-0">
							<li class="nav-item">
								<a class="nav-link ico-button px-0" href="https://wa.me/79361385058?web=1&app_absent=1">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.png">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="https://t.me/+79361385058">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg">
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="https://www.instagram.com/pokraska.dekor_sever/">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/instagram-ico.svg">
								</a>
							</li>
						</ul>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-8 pt-2 mb-5 mb-lg-0">
						<div class="row d-lg-none justify-content-center">
							<div class="col-6 left-col-footer-menu">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="menu-main-menu-2" class="navbar-nav text-md-center mb-lg-0 %2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker_2()
									));
								?>
							</div>
							<div class="col-6 right-col-footer-menu">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="menu-main-menu-3" class="navbar-nav ms-auto text-md-center mb-lg-0 %2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker_2()
									));
								?>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Footer -->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col text-start text-md-center">
							<div id="company-in-footer">©<?php echo date( 'Y' ); ?> ООО «Декор-Север»</div>
							<div id="im-in-footer">Создание, продвижение, поддержка: <a href="https://сайт100.рф" class="text-light">сайт100.рф</a></div>
							<div class="policy-in-footer">
								<a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политика конфиденциальности</a> | <a href="<?php echo get_template_directory_uri(); ?>/docs/Consent-to-the-processing-of-personal-data.pdf" target="_blank">Согласие на обработку персональных данных</a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /Footer  -->

		</section>
		<!-- /Contacts -->
		
		
		
		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $_SESSION['display'] ?>;" onclick="modalClose();">
			<div id="background-msg" style="display: <?php echo $_SESSION['display'] ?>;"></div>
			<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();" style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset( $_SESSION['recaptcha'] ); ?>
			</div> 
		</div>
		
		
		
		<!-- Callback button HTML -->
		<div class="callback-button-wrapper">
			<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
				<div id="btnIco" class="callback-button-ico"></div>
			</div>
			
			<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
				<a data-bs-toggle="modal" data-bs-target="#callbackModal"><div class="callback-form-button-ico"></div></a>
			</div>
			<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
				<a href="tel:84993900100"><div class="callback-phone-button-ico"></div></a>
			</div>
			<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
				<!-- Не открывает ссылку с ПК если не установлено приложение WhatsApp
				<a href="whatsapp://send?phone=+79361385058"><div class="callback-whatsapp-button-ico"></div></a> -->
				<!-- Другой вариант ссылки. Все равно не открывает Whatsapp если нет приложения -->
				<a href="https://wa.me/79361385058?web=1&app_absent=1" target="blank"><div class="callback-whatsapp-button-ico"></div></a>
				<!-- Еще варианты -->
				<!--a href="https://api.whatsapp.com/send/?phone=79361385058&text=Привет"><div class="callback-whatsapp-button-ico"></div></a-->
				<!--a href="https://wa.clck.bar/79361385058?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!"><div class="callback-whatsapp-button-ico"></div></a-->
			</div>
			<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
				<a href="https://t.me/+79361385058"><div class="callback-telegram-button-ico"></div></a>
			</div>
		</div>
		<!-- /Callback button HTML -->



		<!-- Callback button JS -->
		<script>
			function callbackButtonClick() {
				
				let formBtn = document.getElementById('formBtn').style.top;
				
				
				if ( formBtn == "0px" || formBtn == 0 ) {
					document.getElementById('callbackBtn').style.animation = "none";
					document.getElementById('btnIco').style.animation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
					
					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";
					
					
					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
					
					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";
					
					
					document.getElementById('formBtn').style.top = "-60px";
					document.getElementById('formBtn').style.opacity = "1";
					
					document.getElementById('phoneBtn').style.top = "-120px";
					document.getElementById('phoneBtn').style.opacity = "1";
					
					document.getElementById('whatsappBtn').style.top = "-180px";
					document.getElementById('whatsappBtn').style.opacity = "1";
					
					document.getElementById('telegramBtn').style.top = "-240px";
					document.getElementById('telegramBtn').style.opacity = "1";
				} else {
					document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
					document.getElementById('btnIco').style.animation = "change linear 16s infinite";
					document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
					document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";
					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
					
					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";
					
					
					document.getElementById('formBtn').style.top = "0px";
					document.getElementById('formBtn').style.opacity = "0";
					
					document.getElementById('phoneBtn').style.top = "0px";
					document.getElementById('phoneBtn').style.opacity = "0";
					
					document.getElementById('whatsappBtn').style.top = "0px";
					document.getElementById('whatsappBtn').style.opacity = "0";
					
					document.getElementById('telegramBtn').style.top = "0px";
					document.getElementById('telegramBtn').style.opacity = "0";
				}
			}
		</script>
		<!-- /Callback button JS -->
		


		<!-- Callback Modal -->
		<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Обратный звонок</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в течение 10 минут и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" checked>
								<label class="form-check-label" for="gridCheck">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Жду звонка</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		
		<!-- Рассчитать стоимость с загрузкой изображения -->
		<div class="modal fade" id="calculatePriceWithDownloadModal" tabindex="-1" aria-labelledby="calculatePriceWithDownloadLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate_2.php" class="modal-content" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title" id="calculatePriceWithDownloadLabel">Рассчитать стоимость</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row pb-2">
							<div class="col-12">
								<p><small>Опишите кухню своими словами, укажите форму, размеры, материалы и другую информацию</small></p>
							</div>
							<div class="col-12 mb-3">
								<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder=""></textarea>
							</div>
							<div class="col-12">
								<p><small>Вы можете прикрепить проект, изображение или схематично нарисованный рисунок кухни.</small></p>
							</div>
							<div class="mb-3">
								<div class="input-group custom-file-button">
									<label class="input-group-text" for="inputGroupFile" style="border-radius: 5px;">Прикрепить</label>
									<input type="file" name="file[]" class="form-control" id="inputGroupFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple>
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck-2" checked>
								<label class="form-check-label" for="gridCheck-2">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<input type="hidden" id="g-recaptcha-response-calculatePriceWithDownload" name="g-recaptcha-response">
						<button type="submit" style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1);" class="btn-lg btn btn-corporate-color-1 me-auto">Отправить</button>
					</div>	
				</form>
			</div>
		</div>
		<!-- /Рассчитать стоимость с загрузкой изображения -->
		
		
		<!-- Рассчитать стоимость без загрузки изображения -->
		<div class="modal fade" id="calculatePriceWithoutDownloadModal" tabindex="-1" aria-labelledby="calculatePriceWithoutDownloadLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" class="modal-content" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row pb-2">
							<div class="col-12">
								<p><input type="text" name="product" style="border: none; outline: none;" value="<?php echo get_the_title(); ?>"></p>
							</div>
							<div class="col-12 mb-3">
								<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="При желании укажите форму, размеры, материалы кухни или другую информацию"></textarea>
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck-3" checked>
								<label class="form-check-label" for="gridCheck-3">
									<p class="mb-0"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>
						</div>
						<input type="hidden" id="g-recaptcha-response-calculatePriceWithoutDownload" name="g-recaptcha-response">
						<button type="submit" style="border-radius: 0.5rem; background-color: var(--corporate-color-1); border-color: var(--corporate-color-1);" class="btn-lg btn btn-corporate-color-1">Отправить</button>
					</div>	
				</form>
			</div>
		</div>
		<!-- /Рассчитать стоимость без загрузки изображения -->


				
		<!-- Всплывающая форма Политики конфиденциальности -->
		<div class="popup-form " id="popupForm">
			<div class="form-content container p-0">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-9">
						<p class="mb-md-0">На на нашем сайте используются cookie-файлы, в том числе сервисов веб-аналитики. Используя сайт, вы соглашаетесь на <a href="<?php echo get_template_directory_uri(); ?>/docs/Consent-to-the-processing-of-personal-data.pdf" target="blank">обработку персональных данных</a> при помощи cookie-файлов. Подробнее об обработке персональных данных вы можете узнать в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="blank">Политике конфиденциальности.</a></p>
					</div>
					<div class="col-md-3 text-md-center">
						<button id="closeBtn" class="btn btn-corporate-color-1">Понятно</button>
					</div>
				</div>	
			</div>
		</div>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const popupForm = document.getElementById('popupForm');
				const closeBtn = document.getElementById('closeBtn');
				
				// Проверяем нужно ли показывать форму
				function shouldShowPopup() {
					const lastClosed = localStorage.getItem('popupLastClosed');
					
					// Если пользователь никогда не закрывал форму
					if (!lastClosed) return true;
					
					// Если прошло более 1 часа (3600000 миллисекунд) с последнего закрытия
					const now = new Date().getTime();
					return (now - parseInt(lastClosed)) > 3600000;
				}
				
				// Показываем форму если нужно
				if (shouldShowPopup()) {
					setTimeout(() => {
						popupForm.classList.add('active');
					}, 3000);
				}
				
				// Функция закрытия формы
				function closePopup() {
					popupForm.classList.remove('active');
					
					// Сохраняем время закрытия
					localStorage.setItem('popupLastClosed', new Date().getTime().toString());
				}
				
				// Закрытие по кнопке
				closeBtn.addEventListener('click', closePopup);
			});
		</script>
		<!-- /Всплывающая форма Политики конфиденциальности -->

		
		<!-- Measurer Modal --
		<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="measurerModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="mails/measurer-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="measurerModalLabel">Вызов замерщика <!--дизайнера (бесплатно)--</h5>			
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Наш специалист приедет в удобное для Вас время, произведет замеры, ознакомит с продукцией и материалами, <!--cделает 3d дизайн-проект,-- проконсультирует по всем вопросам! Для связи с замерщиком<!--дизайнером-- введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
							</div>
							<div class="col-12 mb-3">
								<input type="text" name="adr" class="form-control" placeholder="Адрес объекта*">
							</div>
							<div class="col-12 mb-3">
								<textarea type="text" name="mes" class="form-control" placeholder="Дополнительная информация"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<p class="mb-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-1.svg" class="me-1" style="width: 25px;">
									<small>Изготовление от 10 дней!</small>
								</p>
							</div>
							<div class="col-6">
								<p class="mb-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-3.svg" class="me-1" style="width: 20px;">
									<small>Гарантия 2 года!</small>
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Вызвать</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Measurer Modall -->

		<!-- Bootstrap JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		
		<!-- jQuery -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>
		
		<!-- Theme JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theme.js"></script>
		
		<!-- Menu -->
		<script>vyezjalo();</script>
		
		<!--script src="js/quiz.js"></script-->
		
		<!-- Telephone number mask -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		<!-- reCaptcha v3 New from Google -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
					if ( document.getElementById('g-recaptcha-response-callback') ) {
						document.getElementById('g-recaptcha-response-callback').value=token;
					}
					if ( document.getElementById('g-recaptcha-response-calculatePriceWithDownload') ) {
						document.getElementById('g-recaptcha-response-calculatePriceWithDownload').value=token;
					}
					if ( document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload') ) {
						document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload').value=token;
					}
				});
			});
		</script>
		
		<?php if ( $counter_body = get_theme_mod( 'mytheme_counter_body' ) ) : ?>
			<!-- Код счетчика (body) -->
			<?php echo $counter_body; ?>
		<?php endif; ?>
	</body>
</html>