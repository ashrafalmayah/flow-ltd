<!DOCTYPE html> 
<html class="no-js scroll-smooth" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs/dist/cdn.min.js"></script>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
	<script>
		document.documentElement.setAttribute('lang', localStorage.getItem('lang'));
	</script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						rubik: ['"Rubik"', 'sans-serif'],
						"abd-elrady-pro": ['"Abd-ElRady-Pro"', 'sans-serif'],
					},
					colors: {
						background: "#F4F0ED",
						primary: "#0F3960",
					},
				},
			},
		};
	</script>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<!-- Google Fonts -->
</head>
<body <?php body_class(); ?>>
<div class="font-rubik font-normal">
<?php if ( get_theme_mod( 'theme-toggle', 'off' ) == 'on' ): ?>
	<script>
		document.body.classList.add(localStorage.getItem('theme') || 'light');
	</script>
<?php endif; ?>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'shapebox' ); ?></a>

		<?php if(get_locale() == 'ar'): ?>
			<?php include( get_stylesheet_directory() . '/includes/nav.php'); ?>    
		<?php else: ?>
			<?php include( get_stylesheet_directory() . '/includes/en-nav.php'); ?>
		<?php endif; ?>
		<!--/#header-->
	<!--/#header-sticky-->

<div id="wrapper">
	
	
	<?php if ( get_header_image() ) : ?>
		<div class="site-header">
			<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>

	<div class="container" id="page">
		<div class="container-inner">			
			<div class="main">
				<div class="main-inner group !font-rubik">