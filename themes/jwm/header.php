<?php
/**
 * The header for our theme
 * @package jwm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
	<link rel="stylesheet" href="https://use.typekit.net/ckw6oqk.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jwm' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar row align-items-end" role="navigation">
			<div class="site-branding">
				<div class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<h1>josh wright</h1>
					</a>
				</div><!-- .site-logo -->
			</div><!-- .site-branding --> 
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'menu_class'        => 'nav justify-content-end',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
