<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<?php if (!is_page_template('page-templates/page-contacts.php')): ?>
		<section class="ba-library-desc">
			<div class="ba-library-desc__corner">
				<div class="row column">
					<!-- BEGIN   -->
					<div class="ba-library-desc__content text-center">
						<?php the_field('library_description', 'option'); ?>
						<a class="button light hollow" href="<?php the_field('library_link', 'option'); ?>">
							<?php the_field('library_button_text', 'option'); ?>
						</a>
						<span class="ba-library-desc__cookie"></span>
					</div>
					<!-- END  -->
				</div>
				<!-- /.row column -->
			</div>
		</section>
	<?php endif ?>

		<footer class="ba-footer text-center medium-text-left">
			<div class="row column">
				<?php
				wp_nav_menu( array(
					'container'      => false,
					'menu_class'     => 'ba-footer-menu menu vertical medium-horizontal',
					'theme_location' => 'footer-nav',
					'depth'          => 3,
					'fallback_cb'    => false,
					'walker'         => new Foundationpress_Top_Bar_Walker(),
				));
				?>
			</div>
			<!-- BEGIN row  -->
			<div class="row">
			    <!-- BEGIN column medium-8  -->
			    <div class="column medium-7">
			        <h3>Subscribe</h3>
			    </div>
			    <!-- END column medium-8 -->
			    <!-- BEGIN column medium-8  -->
			    <div class="column medium-5 medium-text-right">
			    	<!-- BEGIN ba-couchsurfing  -->
			    	<div class="ba-couchsurfing">
				    	<a class="ba-facebook" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a>
			    	</div>
			    	<!-- END ba-couchsurfing -->
			    </div>
			    <!-- END column medium-8 -->
			</div>
			<!-- END row -->
			<!-- BEGIN row  -->
			<div class="row">
			    <!-- BEGIN column medium-8  -->
			    <div class="column medium-6">
			        <!-- BEGIN ba-copyright  -->
			        <div class="ba-copyright">
			            <?php the_field('copyright', 'option'); ?>
			        </div>
			        <!-- END ba-copyright -->
			    </div>
			    <!-- END column medium-8 -->
			    <!-- BEGIN column medium-8  -->
			    <div class="column medium-6 medium-text-right">
			        <a href="https://beetroot.se" target="_blank">
			        	<img src="<?php echo get_template_directory_uri().'/assets/img/beetroot-logo.png' ?>" alt="Beetroot">
			        </a>
			    </div>
			    <!-- END column medium-8 -->
			</div>
			<!-- END row -->
		</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>

<?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.

</body>
</html>
