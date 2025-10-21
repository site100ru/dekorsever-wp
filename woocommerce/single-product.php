<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

/*
		Template Name: Каталог-станица товара
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( '2' ); ?>


<!-- Header -->
<header id="header-catalogy" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title mb-3"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
				<h2 class="mb-4 mb-md-5 text-light">Корпусная мебель на заказ по Вашим размерам</h2>
				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				//do_action( 'woocommerce_archive_description' );
				?>
				<!--p class="home-description mb-0">Собственное производство в Санкт-Петербурге жалюзи и рулонных штор, готовых и на заказ от 540 руб./м2. Оформляем окна любого размера и конфигурации. Бесплатный выезд замерщика с образцами. Срок изготовления и доставки от 2 до 5 дней. Гарантия 2 года. Европейская фурнитура.</p-->
				<!--button type="button" class="btn btn-lg btn-orange mt-4">Вызвать замерщика</button-->
				<!-- Home advantages -->
				<div class="row pb-2 align-items-center">
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="row align-items-center">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-manufacture-icon.svg">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Собственное производство</h3>
								<p class="home-advantage-description">Сроком от 10 дней</p>
							</div>
						</div>
					</div>
					<!--div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="row align-items-center">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-economy-icon.svg">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Рассрочка 0%</h3>
								<p class="home-advantage-description">До 12 месяцев</p>
							</div>
						</div>
					</div-->
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="row align-items-center">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-free-measure-icon.svg">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Замер с образцами материалов</h3>
								<p class="home-advantage-description">Входит в стоимость кухни</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0">
						<div class="row align-items-center">
							<div class="col-2 col-md-3">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-discount-icon.svg">
							</div>
							<div class="col-10 col-md-9">
								<h3 class="text-light mb-0">Монтаж с гарантией</h3>
								<p class="home-advantage-description">2 года!</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /Home advantages -->
				
				<button type="button" class="btn btn-lg btn-corporate-color-1 ps-3 pe-3 mt-3 mt-md-5" data-bs-toggle="modal" data-bs-target="#measurerModal" style="width: 200px;">Вызвать замерщика<!--дизайнера--></button>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	//do_action( 'woocommerce_before_main_content' );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php
	/**
	 * woocommerce_after_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );
?>

<?php
	/**
	 * woocommerce_sidebar hook.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );
?>


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
								<p class="mb-0">Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор. Вы вносите предоплату и проект поступает в производство.</p>
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
								<p class="mb-0">После окончания производства доставляем и устанавливаем одним днем, в заранее оговоренные дату и время. После установки производим окончательные расчеты.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!--section class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col d-none d-md-block">
				<img src="https://unistyle-mebel.ru/wp-content/themes/unistyle-mebel/img/actions/rassrochka.webp" class="w-100">
			</div>
			<div class="col d-md-none">
				<img src="https://unistyle-mebel.ru/wp-content/themes/unistyle-mebel/img/actions/rassrochka-mobail.webp" class="w-100">
			</div>
		</div>
	</div>
</section-->


<!-- Advantages -->
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col text-md-center">
				<h2 class="mb-3">Преимущества покупки мебели у нас</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/section-title-dec.svg" class="mb-5">
				
				
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-1.svg" class="img-fluid">
							</div>
							<div class="col-10 text-start">
								<h3>Собственное производство</h3>
								<p class="mb-0">Не переплачивайте посредникам! Приобретайте мебель напрямую у производителя с опытом работы более 9 лет.</p>
							</div>
						</div>
					</div>
					<!--div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-2.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Замер с образцами материалов</h3>
								<p class="mb-0">Замерщик приезжает, производит замер и делает расчет стоимости. Заказчик оплачивает выезд замерщика в размере 2000 руб, 
									и если заключается договор, то тогда замер бесплатный и оплаченный выезд засчитывается в сумму предоплаты.
								</p>
							</div>
						</div>
					</div-->
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-3.svg" class="img-fluid">
							</div>
							<div class="col-10 text-start">
								<h3>Максимальная гарантия по Москве и МО</h3>
								<p class="mb-0">Мы даем 2 года гарантии.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-4.svg" class="img-fluid">
							</div>
							<div class="col-10 text-start">
								<h3>Доставка и установка</h3>
								<p class="mb-0">Доставляем и устанавливаем "под ключ" по Москве и МО. Возможен самовывоз из г.о. Мытищи.</p>
							</div>
						</div>
					</div>
					<!--div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<!-?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-5.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Рассрочка 0%</h3>
								<p class="mb-0">Благодаря собственному производству предлагаем беспроцентную рассрочку на 12 месяцев.</p>
							</div>
						</div>
					</div-->
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/advantage-6.svg" class="img-fluid">
							</div>
							<div class="col-10 text-start">
								<h3>Удобные варианты оплаты</h3>
								<ul class="mb-0 text-orange ps-0" style="">
									<!--li style="line-height: 24px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point.svg" class="me-2">Банковской картой на замере (по банковскому терминалу)</li-->
									<li style="line-height: 24px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point.svg" class="me-2">Оплата наличными </li>
									<li style="line-height: 24px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point.svg" class="me-2">Оплата онлайн</li>
									<li style="line-height: 24px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/menu-point.svg" class="me-2">Безналичный расчет</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->



<!-- Frequent questions -->
<section class="advantages bg-light py-5">
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
							<input type="text" class="form-control mb-3 mb-md-0" name="name" id="exampleFormControlInput1">
						</div>
						<div class="col-8 col-lg-4">
							<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
							<input type="text" class="form-control mb-3 mb-md-0 telMask" name="phone" id="exampleFormControlInput2">
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-check mt-3">
								<input class="form-check-input" type="checkbox" id="gridCheck-2" checked>
								<label class="form-check-label" for="gridCheck-2">
									<p class="mb-0" style="max-width: 570px;"><small>Даю согласие на обработку персональных данных. Подробнее об обработке персональных данных в <a href="<?php echo get_template_directory_uri(); ?>/docs/Privacy-Policy.pdf" target="_blank">Политике конфиденциальности.</a></small></p>
								</label>
							</div>					
						</div>

						<div class="col-8 col-lg-4">
							<input type="hidden" id="g-recaptcha-response-order" name="g-recaptcha-response">
							<button type="submit" class="btn btn-lg btn-corporate-color-1 w-100 mt-3">Хорошо, жду звонка</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- /ORDER LEFT MEN SECTION -->


<?php get_footer( '2' ); ?>