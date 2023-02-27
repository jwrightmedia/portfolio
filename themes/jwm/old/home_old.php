<?php
/**
 * Template Name: Home page template - Old
 * Description: Custom layout for home page
 *
 * @package jwm
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="home-statement row">
			<div class="col-sm-12">
				<h2><?php the_field('tagline'); ?></h2>
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
		<section class="definitions row d-none">
			<div class="col-sm-3">
				<p>Front-End Web Developer</p>
			</div>
			<div class="col-sm-3">
				<p>Team Leader and Consultant</p>
			</div>
			<div class="col-sm-3">
				<p>User Interface Architect</p>
			</div>
			<div class="col-sm-3">
				<p>User Experience Designer</p>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>



