<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry ba-event'); ?>>
	<!-- BEGIN row  -->
	<div class="row">
		<div class="column small-6 medium-3">
			<?php
				$date = strtotime(get_field('event_date'));
			?>
			<time class="ba-event__date" datetime="<?php echo date('Y-m-d', $date).'T'.date('H:i', $date);  ?>">
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
			<div class="ba-event__address">
				<?php the_field('event_addres'); ?>
			</div>
			<!-- END ba-event__address -->
		</div>
		<div class="column medium-6 medium-pull-3">
			<!-- BEGIN ba-event__body  -->
			<div class="ba-event__body">
				<?php if(has_post_thumbnail()) : ?>
					<a class="ba-event__thumb" href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif ?>
				<h2 class="ba-event__title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<?php the_excerpt() ?>
				<a href="<?php the_permalink() ?>" class="button secondary button--sparks">
					<?php _e('Visit event', 'foundationpress') ?>
				</a>
			</div>
			<!-- END ba-event__body -->
		</div>

	</div>
	<!-- END row -->
</article>
