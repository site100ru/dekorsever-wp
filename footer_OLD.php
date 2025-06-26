		<!-- Contacts -->
		<div id="contacts-sp" class="scroll-points"></div>
		<section class="contacts-section-3">
			<div class="container py-5">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-12 pt-2 pb-4">
						<nav id="contacts-menu-1" class="navbar-light">
							
							<!-- Desktop version -->
							<div class="row h-100 justify-content-center align-items-center d-none d-lg-flex">
								<div class="col-2">
									<a href="#">
										<img id="navbar-brand-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-light.svg" class="img-fluid">
									</a>
								</div>
								<div class="col-lg-7 col-xxl-8">
									<ul class="nav justify-content-center align-items-center">
										<li class="nav-item d-md-inline-block">
											<a href="#" class="nav-link">
												<div class="row align-items-center">
													<div class="col-2">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
													</div>
													<div class="col-10 ps-1">
														<span>Мытищи, д.Грибки,<br>ул.Промышленная,<br>64Д, к2</span>
													</div>
												</div>
											</a>
										</li>
										<li class="nav-item d-md-inline-block">
											<a href="#" class="nav-link">
												<div class="row align-items-center">
													<div class="col-2">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg">
													</div>
													<div class="col-10 ps-3">
														<span>Пн-Пт: 9:00-18:00</span>
													</div>
												</div>
											</a>
										</li>
										<li class="nav-item d-md-inline-block">
											<a href="mailto:mebel-dsever@yandex.ru" class="nav-link">
												<div class="row align-items-center">
													<div class="col-2">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg">
													</div>
													<div class="col-10 ps-3">
														<span>mebel-dsever@yandex.ru</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-2 text-end col-xxl-2">
									<a href="tel:‪84993900100" class="contacts-phone">‪8 <span>(499)</span> 390-01-00</a>
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
											<a href="#" class="nav-link ps-0">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg">
												<span>Мытищи, д.Грибки,<br>ул.Промышленная,<br>64Д, к2</span>
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
									<a href="tel:‪84993900100" class="contacts-phone">‪8 <span>(499)</span> 390-01-00</a>
								</div>
							</div>
							<!-- END Mobail version -->
						</nav>
					</div>
				</div>
				
				
				<div class="row d-none d-lg-block">
					<div class="col-md-12">
						<nav id="contacts-menu-2" class="navbar navbar-expand-xl navbar-light mb-3">
							<div class="collapse navbar-collapse">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '
											<ul id="%1$s" class="navbar-nav m-auto mb-2 mb-lg-0 %2$s">%3$s
												<!-- Mobile menu --
												<li class="nav-item d-xl-none">
													<a class="nav-link active" href="" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика с образцами материалов</a>
												</li>
												<li class="nav-item d-xl-none">
													<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
														<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/location.webp" style="width: 10px;" class="me-1">Санкт-Петербург
													</div>
													<a class="nav-link top-menu-tel pt-1 pb-0" href="tel:84993900100">8 (499) 390-01-00</a>
													<div style="font-size: 12px; font-family: HelveticaNeueCyr-Light; text-transform: none;">
														<img src="https://unistyle-spb.ru/wp-content/themes/unistyle-spb/img/ico/clock-ico.webp" style="width: 10px; position: relative; top: -1px;" class="me-1">Ежедневно с 9:00 до 21:00
													</div>
												</li>
												<li class="nav-item d-xl-none pt-3">
													<a class="ico-button pe-2" href="https://wa.me/79361385058?web=1&app_absent=1" target="blank"><img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg"></a>
													<a class="ico-button pe-2" href="tg://resolve?domain=stock_line_msk"><img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg"></a>
													<!--a class="ico-button pe-2" href="vk.com/stocklinecompany"><img src="img/ico/inst-ico.png"></a-->
													<!--a class="ico-button" href="#"><img src="/img/ico/vk-ico.png"></a-->
												</li>
												<!-- End mobile menu -->
											</ul>
										',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
						</nav>
					</div>
				</div>
				
				
				
				<div class="row justify-content-center pt-3">
					<div class="col-md-8">
						<ul class="nav justify-content-md-center mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link ico-button px-0" href="https://wa.me/79361385058?web=1&app_absent=1" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							</li>
							<!--li class="nav-item">
								<a class="nav-link ico-button pe-0" href="tg://resolve?domain=stock_line_msk"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							</li-->
							<li class="nav-item">
								<a class="nav-link ico-button pe-0" href="https://www.instagram.com/pokraska.dekor_sever/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/inst-ico.png"></a>
							</li>
							<!--li class="nav-item">
								<a class="nav-link ico-button" href="https://vk.com/stocklinecompany"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk-ico.png"></a>
							</li-->
						</ul>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-lg-8 pt-4 pt-lg-2">
						<div class="row d-lg-none justify-content-center">
							<div class="col-6 left-col-footer-menu">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'main-menu',
										'container' => false,
										'menu_class' => '',
										'fallback_cb' => '__return_false',
										'items_wrap' => '<ul id="menu-main-menu-2" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
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
										'items_wrap' => '<ul id="menu-main-menu-3" class="navbar-nav ms-auto mb-lg-0 %2$s">%3$s</ul>',
										'depth' => 2,
										'walker' => new bootstrap_5_wp_nav_menu_walker()
									));
								?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- container -->

			<footer>
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div id="company-in-footer">©<?php echo date( 'Y' ); ?> ООО «Декор-Север»</div>
							<div id="im-in-footer">Создание и продвижение сайтов: <a href="https://сайт100.рф" class="text-light">сайт100.рф</a></div>
						</div>
					</div>
				</div>
			</footer>
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
			<!--div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
				<a href="tg://resolve?domain=right_kate"><div class="callback-telegram-button-ico"></div></a>
			</div-->
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
					
					//document.getElementById('telegramBtn').style.top = "-240px";
					//document.getElementById('telegramBtn').style.opacity = "1";
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
					
					//document.getElementById('telegramBtn').style.top = "0px";
					//document.getElementById('telegramBtn').style.opacity = "0";
				}
			}
		</script>
		<!-- /Callback button JS -->
		
		
		<!-- Order Modal -->
		<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order_mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="orderModalLabel">Оставить заявку</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!--div class="row">
							<div class="col">
								<p><small>Мы свяжемся с Вами в удобное для Вас время и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div-->
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" class="form-control telMask" placeholder="Ваш телефон*">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Оставить заявку</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Order Modal -->
		
		
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
								<p><small>Мы свяжемся с Вами в ближайшее время и ответим на все вопросы! Для звонка введите Ваше имя и телефон.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Перезвонить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		<!-- Measurer Modal -->
		<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="measurerModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/measurer-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="measurerModalLabel">Вызов замерщика <!--дизайнера (бесплатно)--></h5>
						
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Наш специалист приедет в удобное для Вас время, произведет замеры, ознакомит с продукцией и материалами, <!--cделает 3d дизайн-проект,--> проконсультирует по всем вопросам! Для связи с замерщиком<!--дизайнером--> введите Ваше имя и телефон.</small></p>
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
		
		
		<!-- Message Modal -->
		<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/message-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="messageModalLabel">Задать вопрос</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="email" class="form-control" placeholder="Ваш email*">
							</div>
							<div class="col-12">
								<textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос*"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Message Modal -->
		
		
		<!-- Calculate price modal -->
		<div class="modal fade" id="calculatePriceModal" tabindex="-1" aria-labelledby="calculatePriceModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="calculatePriceModalLabel">Рассчитать стоимость</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
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
						<button type="submit" class="btn btn-corporate-color-1 mx-auto">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Calculate price modal -->
		

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		-->
		
		<!-- Main scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theme.js"></script>
		
		<!-- Quiz scripts -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/quiz.js"></script>
		
		<!-- Telephone number mask -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		<?php if ( $counter_body = get_theme_mod( 'mytheme_counter_body' ) ) : ?>
			<!-- Код счетчика (body) -->
			<?php echo $counter_body; ?>
		<?php endif; ?>
	</body>
</html>