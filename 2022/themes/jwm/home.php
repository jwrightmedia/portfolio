<?php
/**
 * Template Name: Home page template
 * Description: Custom layout for home page
 *
 * @package jwm
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="home-statement row">
			<div class="s-12">
				<?php the_field('tagline'); ?>
				<div class="spinner-box">
				  <div class="blue-orbit leo">
				  </div>

				  <div class="green-orbit leo">
				  </div>
				  
				  <div class="red-orbit leo">
				  </div>
				  
				  <div class="white-orbit w1 leo">
				  </div><div class="white-orbit w2 leo">
				  </div><div class="white-orbit w3 leo">
				  </div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>