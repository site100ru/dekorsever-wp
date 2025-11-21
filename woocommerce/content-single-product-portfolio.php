<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 *
 * Шаблон секции продукта, если продукт является портфолио
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<section class="single-product-portfolio-section pb-5">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<div class="container pb-5 pt-3 single-product">
			<div class="row">
				<div class="col">
					<nav class="breadcrumbs mb-4">
						<a href="/furniture/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-icon.svg"></a> / 
						<a href="/furniture/kuhni-na-zakaz/" style="text-decoration: none;">Кухни на заказ</a> / 
						<?php echo get_the_title(); ?>
					</nav>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<?php
						/**
						 * Hook: woocommerce_before_single_product_summary.
						 *
						 * @hooked woocommerce_show_product_sale_flash - 10
						 * @hooked woocommerce_show_product_images - 20
						 */
						 
						do_action( 'woocommerce_before_single_product_summary' );
					?>
				</div>
				<div class="col-md-5">
					<div class="summary entry-summary">
						<div class="row pt-5 pt-md-0">
							<div class="col text-dark text-start">
								<?php
									/**
									 * Hook: woocommerce_single_product_summary.
									 *
									 * @hooked woocommerce_template_single_title - 5
									 * @hooked woocommerce_template_single_rating - 10
									 * @hooked woocommerce_template_single_price - 10
									 * @hooked woocommerce_template_single_excerpt - 20
									 * @hooked woocommerce_template_single_add_to_cart - 30
									 * @hooked woocommerce_template_single_meta - 40
									 * @hooked woocommerce_template_single_sharing - 50
									 * @hooked WC_Structured_Data::generate_product_data() - 60
									 */
									do_action( 'woocommerce_single_product_summary' );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	<div id="gallery-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
		<div class="carousel-inner h-100">
			<?php
				$attachment_ids = $product->get_gallery_image_ids();
				$count = false;
				foreach ( $attachment_ids as $attachment_id ) {
			?>

			<div class="carousel-item carousel-item-2 h-100<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
				<div class="row align-items-center h-100">
					<div class="col text-center">
						<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="img-fluid" loading="lazy" style="max-width: 90vw; max-height: 90vh;" alt="...">
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php 
		$count = 0;
		foreach ( $attachment_ids as $attachment_id ) {
			$count = $count + 1;
		}
		if ( $count > 1 ) { ?>
			<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<?php }
		?>
	</div>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div> <!-- #galleryWrapper -->


<script>
	/* Функция открытия галереи */
	function galleryOn(gal) {
		var gallery = gal; // Получаем ID галереи
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		/* Открываем галерею */
		document.getElementById(gallery).style.display = "block";
		
	}

	/* Кнопка закрытия галереи */
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		document.getElementById("gallery-<?php the_ID(); ?>").style.display = "none";
	}
</script>


<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
//do_action( 'woocommerce_after_single_product_summary' );
?>


<?php do_action( 'woocommerce_after_single_product' ); ?>