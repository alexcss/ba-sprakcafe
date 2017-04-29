<?php
/*
Template Name: Contacts
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="ba-about-desc ba-about-desc--corner ba-about-desc--gray"></div>

<main class="ba-main be-content">
  <!-- BEGIN row column  -->
  <div class="row column">
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('main-content text-center') ?> id="post-<?php the_ID(); ?>">
        <h1 class="entry-title entry-title--gray"><?php the_title(); ?></h1>
        <?php if (have_rows('team')) : ?>
          <!-- BEGIN row  -->
          <div class="row">
            <?php while (have_rows('team')) : the_row(); ?>
              <!-- BEGIN column medium-4  -->
              <div class="column medium-4 ba-contact">
                  <?php
                  $photo = get_sub_field('photo');
                   ?>
                   <img class="ba-contact__img" src="<?php echo $photo['sizes']['fp-contatc-photo'] ?>" alt="<?php the_sub_field('name') ?>">
                   <h4 class="ba-contact__name">
                    <?php the_sub_field('name') ?>
                   </h4>
                   <?php $phoneLink = preg_replace('/\s+/', '', get_sub_field('phone')); ?>
                   <a class="ba-contact__phone" href="tel:<?php echo $phoneLink ?>">
                    <?php the_sub_field('phone') ?>
                   </a>
                  <a class="ba-facebook ba-contact__facebook" href="<?php the_sub_field('facebook') ?>" target="_blank"></a>

              </div>
              <!-- END column medium-4 -->
            <?php endwhile; ?>
          </div>
          <!-- END row -->
        <?php endif; ?>
        <a href="<?php the_field('all_events_link'); ?>" class="button secondary button--sparks">
          <?php the_field('all_events_button_text'); ?>
        </a>
      </article>
      <!-- BEGIN ba-contact-form  -->
      <div class="ba-contact-form">
        <h3 class="ba-contact-form__title"><?php the_field('form_title'); ?></h3>
        <?php the_field('form'); ?>
      </div>
      <!-- END ba-contact-form -->

    <?php endwhile;?>
  </div>
  <!-- END row column -->
</main>

<?php get_footer();
