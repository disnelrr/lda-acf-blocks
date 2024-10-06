<?php

/**
 * Displays a Gallery with different formats
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

?>

<section class="info-section page-section large-padding-regular-padding main-gallery">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>
          <?php echo get_field('title'); ?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>
          <?php echo get_field('intro'); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<section>
  <?php get_template_part('template_part/gallery-menu'); ?>
  <div class="gallery-separator"></div>
</section>