<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<section class="ba-about-desc ba-about-desc--single">
	<div class="row">
		<div class="column small-6 medium-3">
			<?php
				$date = strtotime(get_field('event_date'));
			?>
			<time class="ba-event__date ba-event__date--dark" datetime="<?php echo date('Y-m-d', $date).'T'.date('H:i', $date);  ?>">
				<?php //the_field('event_date'); ?>
				<span class="ba-event__day">
					<?php echo date('d', $date);  ?>
				</span>
				<span class="ba-event__month">
					<?php echo date('F', $date);  ?>
				</span>
				<span class="ba-event__time">
					<?php echo date('H:i', $date);  ?>
				</span>
			</time>
		</div>
		<div class="column small-6 medium-3 medium-push-6">
			<!-- BEGIN ba-event__address  -->
			<div class="ba-event__address ba-event__address--dark">
				<?php the_field('event_addres'); ?>
			</div>
			<!-- END ba-event__address -->
			<!-- BEGIN ba-event__address  -->
			<div class="ba-event__cost ba-event__cost--dark">
				<?php the_field('event_cost'); ?>
			</div>
			<!-- END ba-event__address -->
		</div>
		<div class="column medium-6 medium-pull-3">
			<!-- BEGIN ba-event__body  -->
			<div class="medium-text-left text-center">
				<h1 class="ba-single-title"><?php the_title() ?></h1>
				<?php if(get_field('request_form')) : ?>
				<a href="#" class="button secondary button--sparks" data-modal="ba-request">
					<?php _e('Request a Visit', 'foundationpress') ?>
				</a>
				<?php endif ?>
			</div>
			<!-- END ba-event__body -->
		</div>
	</div>
</section>
<div class="ba-single be-content ba-main">

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<div class="entry-content clearfix">
		<?php the_content(); ?>
		<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button primary button--sparks">
			<?php _e('All events', 'foundationpress') ?>
		</a>
	</article>
	<?php if(get_field('request_form')) : ?>
	<div id="ba-request" class="ba-modal">
		<div class="ba-modal__body">
			<?php the_field('request_form') ?>
		</div>
	</div>
	<div class="ba-overlay"></div>
	<?php endif ?>
<?php endwhile;?>

</div>
<?php get_footer();
