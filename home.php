<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php
$pageId = get_option('page_for_posts');
 ?>
<main class="ba-main">
	<section class="ba-about-desc text-center">
		<div class="row ">
			<!-- BEGIN column medium-3  -->
			<div class="column medium-3 large-2">
			    &nbsp;
			</div>
			<!-- END column medium-3 -->
			<!-- BEGIN column medium-3  -->
			<div class="column medium-6 large-8">
			    <!-- END column medium-3 -->
			    <?php the_field('description', $pageId); ?>
			    <?php if(get_field('about_button_link', $pageId)) : ?>
			    	<a href="<?php the_field('about_button_link', $pageId); ?>" class="button hollow light">
			    		<?php the_field('about_button_text', $pageId); ?>
			    	</a>
			    <?php endif ?>
			</div>
			<div class="column medium-3 large-2 medium-text-right">
		    	<div class="ba-arrow">
			    	<a class="ba-facebook ba-facebook--light" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a>
		    	</div>
			</div>
		</div>
	</section>
	<div class="row column be-content">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
		<?php } ?>

	</div>
	<!-- /.row column -->
</main>

<?php get_footer();
