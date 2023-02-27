<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jwm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>

	<div class="entry-content">
		<p><strong>Client Name:</strong> <?php the_field('client_name'); ?></p>
		<p><strong>Project Type:</strong> <?php the_field('project_name'); ?></p>
		<p><strong>Specialties Used:</strong> <?php the_terms( get_the_ID(), 'WorkTag', '',);  ?></p>
		<div class="project-descript">
			<h4>Project Overview</h4>
			<?php the_field('project_description'); ?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'jwm' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
