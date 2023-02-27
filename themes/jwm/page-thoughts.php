<?php
/**
 * Template Name: Thoughts 
 * 
 * @package jwm
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="thoughts">
				<div class="thoughts__main-title">
					<h2>Thoughts</h2>
				</div>
				<div class="thoughts__container">
					<?php
				    $args = array(
				        'post_type' => 'post',
				        'posts_per_page' => -1,
				        'orderby' => 'date',
						'order'   => 'DSC',
				    );
				    $query = new WP_Query($args);       

				    if ( $query->have_posts() ) {
				        while ( $query->have_posts() ) {
				        $query->the_post();
				    ?>
				    <div class="thoughts__indiv-thought">
						<a href="<?php echo the_permalink(); ?>"><h3><?php echo get_the_title();?><span class="thoughts__indiv-thought__date"><?php echo get_the_date( 'm-d-Y' ); ?></span></h3></a>
					</div>
					<?php
					     }
					   }    
					?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
