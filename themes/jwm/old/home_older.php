<?php
/**
 * Template Name: Home page template - older
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
				</div>
			</section>
			<section class="work-contain">
				<div class="works">
				<?php
			    $args = array(
			        'post_type' => 'work',
			        'posts_per_page' => -1,
			        'orderby' => 'title',
					'order'   => 'ASC',
					'tax_query' => array(
				        array(
				            'taxonomy' => 'Type',
				            'field' => 'slug',
				            'terms' =>   'completed',
				        )
				     ),
			    );
			    $query = new WP_Query($args);       

			    if ( $query->have_posts() ) {
			        while ( $query->have_posts() ) {
			        $query->the_post();
			    ?>
				    <article class="work work-indiv">
				      	<div class="work-img">
					  		<?php  
					        if ( has_post_thumbnail() ) { 
					            the_post_thumbnail();
					        } 
					        ?>
				    	</div>
				    	<div class="work-content">
							<a href="<?php echo the_permalink(); ?>"><h2><?php echo get_the_title();?>
								<span class="cat-title"><?php $terms_as_text = get_the_term_list( $post->ID, 'WorkTag', '') ;
								echo strip_tags($terms_as_text);?></span></h2>
							</a>
						</div>
					</article>
				<?php    }   }    ?>
				</div>
			</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>



