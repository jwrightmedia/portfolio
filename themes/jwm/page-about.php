<?php
/**
 * Template Name: About 
 * 
 * @package jwm
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="about-page">
				<article class="about-page__main-title">
					<h2 class="about-page__main-title__title">About</h2>
					<img src="<?php the_field('headshot'); ?>" class="img-fluid about-page__main-title__img" alt="Josh Wright"/>
				</article>
				<div class="container">
					<article class="about-page__bio-section">
						<h2 class="about-page__bio-section__title">Bio</h2>
						<?php the_field('bio'); ?>
					</article>
					<article class="about-page__mantra-section">
						<h2 class="about-page__mantra-section__title">Design Mantra</h2>
						<?php the_field('design_commentary'); ?>
					</darticleiv>
					<article class="about-page__awards-contain">
						<h2 class="about-page__awards-contain__title">Awards</h2>
						<?php the_field('awards'); ?>
					</article>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
