<?php
	
	/*
		Template Name: Контакты
		Template Post Type: page
	*/
	
	get_header( '2' );
	
?>


<!-- Header -->
<header id="header-contacts" class="woocommerce-products-header">
	<div class="container" style="margin-top: 100px">
		<div class="row align-items-center text-start">
			<div class="col-lg-10 py-5">
				<h1>Контакты</h1>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<section class="pt-4 pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs pb-3">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col mb-5">
				
				<!--
				<h2 class="text-center mb-3">Контакты</h2>
				<div class="title-line mb-4"></div>
				-->

                <div class="container" style="margin-top: 60px;">
                    <div class="row section-contacts contacts">
                        <!-- 1 блок -->
                        <div class="col-12 col-md-6 col-xl-3 col-xxl-4 mb-0 mb-md-4">
                            <div class="d-flex align-items-center mb-4 pb-md-3">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg" class="me-3">
                                <p class="mb-0 text-min-text">
                                    <span>г.о. Мытищи, д. Грибки, ул. Промышленная, д. 64«Д», к. 2</span>
                                </p>
                            </div>
                        </div>

                        <!-- 2 блок -->
                        <div class="col-12 col-md-6 col-xl-3 col-xxl-2 mb-0 mb-md-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" alt="Адрес" class="me-3 img-fluid">
                                <p class="mb-0 text-min-text">Пн-Сб 10:00-19:00, <br> Вс 10:00-17:00</p>
                            </div>
                        </div>

                        <!-- 3 блок -->
                        <div class="col-12 col-md-6 col-xl-3 col-xxl-2 mb-0 mb-md-4">
                            <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-3">

                                <a href="tel:+74993900100" class="text-decoration-none">8 (499) 390-01-00</a>
                            </div>
                        </div>

                        <!-- 4 блок -->
                        <div class="col-12 col-md-12 col-xl-3 col-xxl-3 mb-0 mb-md-4">
                            <div class="d-flex align-items-center mb-4 pb-md-3 flex-wrap">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/email-ico.svg" class="me-3">

                                <a href="mailto:mebel-dsever@yandex.ru" class="text-decoration-none">mebel-dsever@yandex.ru
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!--div class="row justify-content-center text-center">
					<div class="col pt-3">
						<a class="ico-button pe-2" href="whatsapp://send?phone=+79112365102"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg"></a>
						<a class="ico-button pe-2" href="tg://resolve?domain=unistyle_spb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg"></a>
						<!--a class="ico-button pe-2" href="#"><img src="img/ico/inst-ico.png"></a>
						<a class="ico-button" href="#"><img src="img/ico/vk-ico.png"></a--
					</div>
				</div-->
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="map2"></div>
			</div>
		</div>
	</div>
</section>


<!-- API Yandex Map -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
	// Функция ymaps.ready() будет вызвана, когда
	// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
	ymaps.ready(init);
	/* На разную ширину экрана разное приближение карты */
	var screenWidth = document.documentElement.clientWidth;
	if ( screenWidth > 1000 ) {
		var center = [55.956154,37.542662];
		var zoom = 17;
	} else {
		var center = [55.956154,37.542662];
		var zoom = 15;
	}
	
	function init() {
		// Создание карты.
		var myMap = new ymaps.Map("map2", {
			// Координаты центра карты.
			// Порядок по умолчанию: «широта, долгота».
			// Чтобы не определять координаты центра карты вручную,
			// воспользуйтесь инструментом Определение координат.
			center: center, // Map center
			// Уровень масштабирования. Допустимые значения:
			// от 0 (весь мир) до 19.
			zoom: zoom
		});
		var myPlacemark = new ymaps.Placemark( [55.956154,37.542662], {}, {
			iconLayout: 'default#image',
			iconImageHref: '<?php echo get_stylesheet_directory_uri(); ?>/img/ico/placemark2.png',
			iconImageSize: [170, 150],
			iconImageOffset: [-100, -180]
		});
		myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
		//myMap.behaviors.disable('multiTouch'); // Disable zoom
		//myMap.behaviors.disable('drag'); // Disable drag
		myMap.geoObjects.add(myPlacemark);
	}
</script>
<!-- /API Yandex Map -->
	
		
<?php include 'footer-2.php'; ?>