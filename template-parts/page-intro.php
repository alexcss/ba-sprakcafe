<?php
$pageId = get_option('page_for_posts');
$bgImage = get_field('bg_image', $pageId);

if(is_single() and has_post_thumbnail()){
	$bgImage = get_the_post_thumbnail_url(get_the_id(), 'large');
}
$bgImage = $bgImage ? 'style="background-image: url('.$bgImage.')"'  : '';
?>


<section class="ba-intro" <?php echo $bgImage ?> >
	<a class="ba-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<?php if(has_custom_logo()) : ?>
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			$customLogo = get_field('custom_logo');
			$image = $customLogo ? $customLogo : $image[0];
			?>
			<img src="<?php echo $image ?>" alt="<?php bloginfo( 'name' ); ?>" />
		<?php else : ?>
			<?php bloginfo( 'name' ); ?>
		<?php endif ?>
	</a>
</section>
