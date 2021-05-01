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
 		<?php get_template_part('template_part/gallery-menu');?>

         <div class="gallery-separator"></div>

         <div class="container-fluid">

           <?php if (have_rows('galleries')): $i = 1; ?>
             <?php $classes = array('left', 'portrait-left', 'portrait-right', 'right'); ?>
             <!-- Open at least one gallery container -->
             <div class="row gallery-container">
               <div class="gallery-container__left col-md-6 col-12 p-0">
                <?php while (have_rows('galleries')): the_row(); ?>
                  <?php if ($i % 3 == 0): ?>
                    <!-- Close left and open right -->
                    </div><div class="gallery-container__right col-md-6 col-12 pr-0">
                  <?php endif; ?>

                  <?php $image_class = $i % 4 == 0 ? $classes[3] : $classes[$i % 4 - 1]; ?>

                  <div id="<?php echo str_replace(' ', '-', get_sub_field('name')); ?>" class="gallery-item image-<?php echo $image_class; ?>">
                      <div class="text-container">
                          <h3 class="font-weight-bold text-uppercase"><?php echo get_sub_field('name'); ?></h3>
                          <p><?php echo get_sub_field('size'); ?> sq.ft</p>
                      </div>
                      <div class="img-container">
                         <a href="<?php echo get_sub_field('link'); ?>">
                           <img src="<?php echo get_sub_field('image'); ?>" />
                         </a>
                      </div>
                  </div>

                  <?php if ($i % 4 == 0): ?>
                    <!-- Open new container every each 4 images -->
                    </div><div class="row gallery-container">
                  <?php endif; ?>

                  <?php $i++ ?>
                <?php endwhile?>

              <!-- Close left or right inner container -->
              </div>
            <!-- Close gallery container just in case there are less that 4 items -->
            </div>
           <?php endif; ?>
           
         <?php echo render_circle_button('back-to-top-button', 'BACK', 'TO TOP'); ?>
     </section>
 </main>
