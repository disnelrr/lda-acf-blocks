<?php

/**
 * Displays a Gallery with different formats
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/


$left_images = [];
$right_images = [];
$i = 0;
if (have_rows('galleries')) :
  while (have_rows('galleries')) : the_row();
    $image_object = [
      'image' => get_sub_field('image'),
      'size' => get_sub_field('size'),
      'link' => get_sub_field('link'),
      'name' => get_sub_field('name'),
    ];
    if ($i % 2 == 0) :
      $left_images[] = $image_object;
    else :
      $right_images[] = $image_object;
    endif;
    $i++;
  endwhile;
endif;


function display_images_colum($images)
{
  foreach ($images as $image) : ?>
    <a href="<?php echo $image['link']; ?>">
      <div class="image-container mb-4 position-relative">
        <div class="position-absolute w-100" style="top: 0; left: 0; background: black; display: flex; align-items: center; justify-content: center;">
          <img class="w-100" src="<?php echo $image['image']; ?>" alt="" loading="lazy" style="opacity: 0.5" />
          <div class="text-white p-5 position-absolute">
            <div class="font-weight-bold text-uppercase" style="font-size: 2rem; text-align: center;">
              <?php echo $image['name']; ?>
            </div>
          </div>
        </div>  
        <img class="w-100 position-relative image-overlay" style="z-index: 10" src="<?php echo $image['image']; ?>" alt="" loading="lazy" />
      </div>
    </a>
<?php endforeach;
}

?>

<main id="content">
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

    <div class="container">

      <div class="row">
        <div class="col-md-6 px-0 px-md-2">
          <?php display_images_colum($left_images); ?>
        </div>
        <div class="col-md-6 px-0 px-md-2">
          <div class="d-none d-md-block" style="height: 0; padding-bottom: 75%"></div>
          <?php display_images_colum($right_images); ?>
        </div>
      </div>

      <?php echo render_circle_button('back-to-top-button', 'BACK', 'TO TOP'); ?>
  </section>
</main>
