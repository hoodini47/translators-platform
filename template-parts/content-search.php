<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pstk
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php pstk_post_thumbnail(); ?>


	<header class="entry-header">
		
		<?php


		echo get_the_title();

		$translator_first_name = get_field("translator_first_name");
		$translator_last_name = get_field("translator_last_name");

		echo '<h2 class="entry-title">'.$translator_first_name.' '. $translator_last_name.'</h2>';
		
		echo get_field("translator_about_short");

		echo '<a href="'.get_permalink().'" rel="bookmark">Więcej</a>';
		
		?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			pstk_posted_on();
			pstk_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php pstk_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->