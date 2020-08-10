<?php
/* 
Template Name: Mainpage
*/

get_header();
// call layouts
  if( have_rows('content') ):
  while ( have_rows('content') ) : the_row();
?>

<!-- ACF: -->

            <?php //hero ?>
      <?php if( get_row_layout() == 'hero' ):?>
        <div id="hero-linktree-wrapper">
          <div id="scroll" class="scroll-down"><p>Scroll</p></div>
          <div id="arrowdown" class="arrow-down"><i class="fas fa-chevron-down"></i></div>
          <?php get_template_part('acf-elements/acf', 'hero'); ?>
      <?php endif; ?>

            <?php //info ?>
      <?php if( get_row_layout() == 'info' ): ?>
          <?php get_template_part('acf-elements/acf', 'info'); ?>
        </div>
      <?php endif; ?>
  
            <?php //store ?>
      <?php if( get_row_layout() == 'store' ): ?>
        <?php get_template_part('acf-elements/acf', 'store'); ?> 
      <?php endif;?>

<?php
  endwhile;  
  endif;
?>

<!-- fb plugin events -->

<?php echo do_shortcode('[custom-facebook-feed account="100932371384761" type=events eventsource=eventspage]'); ?>

<!-- fb plugin posts -->

<div id="social-wrap">
  <?php echo do_shortcode('[custom-facebook-feed]'); ?>
</div>