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
		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.svg" type="image/svg+xml">

		<title><?php echo wp_get_document_title(); ?></title>
		
		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>