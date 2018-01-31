<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blaze_blog
 */

?>
<div class="content-wrapper">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
		<?php

		if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<?php blaze_blog_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt();	
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php echo '<a href="'.get_permalink().'"title="'.__('Continue Reading','blaze_blog').get_the_title().'"rel=bookmark">Continue Reading <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
</a>'?>

	</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>

