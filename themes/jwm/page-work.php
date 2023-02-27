<?php
/**
 * Template Name: Work 
 * 
 * @package jwm
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="work">
				<div class="work__main-title">
					<h2>Work</h2>
				</div>
				<div class="work__works-contain">
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
		      		<div class="work__indiv-work">
		      			<a href="<?php echo the_permalink(); ?>">
					  		<?php  
					        if ( has_post_thumbnail() ) { 
					            the_post_thumbnail('full', array('class' => 'img-fluid')); 
					        } 
					        ?>
						<h3><?php echo get_the_title();?><span class="cat-title"><?php $terms_as_text = get_the_term_list( $post->ID, 'WorkTag', '') ; echo strip_tags($terms_as_text);?></span></h3>
						</a>
					</div>
				<?php
				     }
				   }    
				?>
				</div>
			</section>
			<section class="casestudy">
				<div class="casestudy-title casestudy__main-title">
					<h2>Case Studies</h2>
				</div>
				<div class="casestudy-contain casestudy__works-contain">
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
					            'terms' =>   'case-study',
					        )
					     ),
				    );
				    $query = new WP_Query($args);       

				    if ( $query->have_posts() ) {
				        while ( $query->have_posts() ) {
				        $query->the_post();
				    ?>
		      		<div class="casestudy__indiv-work">
		  				<a href="<?php echo the_permalink(); ?>">
					  		<?php  
					        if ( has_post_thumbnail() ) { 
					            the_post_thumbnail('full', array('class' => 'img-fluid')); 
					        } 
					        ?>
							<h3><?php echo get_the_title();?><span class="cat-title"><?php $terms_as_text = get_the_term_list( $post->ID, 'WorkTag', '') ; echo strip_tags($terms_as_text);?></span></h3>
						</a>
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
