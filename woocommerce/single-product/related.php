<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     10.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) :
	if ( function_exists( 'wp_increase_content_media_count' ) ) {
		$content_media_count = wp_increase_content_media_count( 0 );
		if ( $content_media_count < wp_omit_loading_attr_threshold() ) {
			wp_increase_content_media_count( wp_omit_loading_attr_threshold() - $content_media_count );
		}
	}
?>

<section class="shkafy-cupe-section site-section py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

				if ( $heading ) :
					?>
					<h2 class="text-uppercase text-center text-corporation-orange fw-bold mb-5">Другие варианты варианты</h2>
				<?php endif; ?>
			</div>
		</div>
		
		
		<?php woocommerce_product_loop_start(); ?>
			<?php foreach ( $related_products as $related_product ) : ?>
				<?php
					$post_object = get_post( $related_product->get_id() );
					setup_postdata( $GLOBALS['post'] =& $post_object );
				?>
				<div class="col-md-4 mb-5">
					<div class="approximation shadow rounded">
						<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
						<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
						<div class="card-wrapper">
							<h2 class="woocommerce-loop-product__price">
								<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
							</h2>
							<h2 class="woocommerce-loop-product__title"><?php do_action( 'woocommerce_shop_loop_item_title' ); ?></h2>
						</div>
						<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php woocommerce_product_loop_end(); ?>
		
		
		<div class="row">
			<div class="col text-center">
				<?php
					// Получаем название термина чтобы потом можно былой перейти к списку всех товаров принадлежащих этому термину
					global $post;
					$terms = get_the_terms( $post->ID, 'product_cat' );
					if( $terms ){
						$term = array_shift( $terms );
						$term_id = $term->term_id;
					}
				?>
				<a href="<?php echo get_term_link( $term_id ); ?>" class="btn btn-lg btn-corporation-orange px-5">Смотреть все варианты</a>
			</div>
		</div>
	</div>
</section>

<?php
endif;

wp_reset_postdata();