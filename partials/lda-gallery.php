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

 <main id="content p-0">
     <section class="info-section page-section large-padding-regular-padding">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <p class="smallp font-weight-bold"><?php echo get_field('year') ?></p>
                 </div>
                 <div class="col-12">
                     <h2><?php echo get_field('project_name') ?></h2>
                 </div>
                 <div class="col-12">
                     <p><?php echo get_field('project_description') ?></p>
                 </div>
                 <div class="col-12 col-md-3">
                     <p class="smallp">
                         <span class="font-weight-bold">SIZE - </span><?php echo get_field('size') ?> Sq.Ft
                     </p>
                 </div>
                 <div class="col-12 col-md-9">
                     <p class="smallp">
                         <span class="font-weight-bold">AREA - </span><?php echo get_field('area') ?></p>
                 </div>
             </div>
         </div>
     </section>

     <section class="gallery-section">
         <?php if ( have_rows('items') ) : ?>
             <?php while ( have_rows('items') ) :
                 the_row();
                 $image_1 = get_sub_field('image_1');
                 $image_2 = get_sub_field('image_2');
                 $text = get_sub_field('text');
                 $layout = get_sub_field('layout');
                 if ( $layout == 'layout-1' ) : ?>
                     <div class="gallery-row layout-1">
                         <img class="full-size-image" src="<?php echo $image_1 ?>" />
                         <a class="fancybox" href="<?php echo $image_1 ?>" data-fancybox="images"></a>
                     </div>
                 <?php elseif ( $layout == 'layout-1-1' ) : ?>
                     <div class="gallery-row layout-1-1">
                         <div class="gallery-col">
                             <img class="full-size-image" data-label="Before" src="<?php echo $image_1 ?>" />
                             <a class="fancybox" href="<?php echo $image_1 ?>" data-fancybox="images"></a>
                         </div>

                         <div class="gallery-col">
                             <img class="full-size-image" data-label="Before" src="<?php echo $image_2 ?>" />
                             <a class="fancybox" href="<?php echo $image_2 ?>" data-fancybox="images"></a>
                         </div>
                     </div>
                 <?php elseif ( $layout == 'layout-2-1-with-text' ) : ?>
                     <div class="gallery-row layout-2-1-with-text">
                         <div class="gallery-col">
                             <img class="full-size-image" src="<?php echo $image_1 ?>" />
                             <a class="fancybox" href="<?php echo $image_1 ?>" data-fancybox="images"></a>
                         </div>
                         <div class="gallery-col d-flex align-items-center">
                             <p><?php echo $text ?></p>
                         </div>
                     </div>
                 <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </section>

     <section class="gallery-section">






         <div class="gallery-row layout-1-1">
             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-5.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-5.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-6.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-6.jpg" data-fancybox="images"></a>
             </div>
         </div>

         <div class="container">
             <div class="row">
                 <div class="col-12 mb-2">
                     <p>We layered color and texture from hard surfaces to soft, including custom furniture,
upholstery, wallpaper, draperies and accessories. We fell in love with (and perhaps obsessed
over) each beautiful detail. Each unique item has a story and now has its special place in this
elegant, wonderfully eclectic home.</p>
                 </div>
             </div>
         </div>

         <div class="gallery-row layout-1-1-1">
             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-7.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-7.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-8.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-8.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-9.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-9.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-10.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-10.jpg" data-fancybox="images"></a>
             </div>
         </div>

         <div class="gallery-row layout-1-1">
             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-11.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-11.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-12.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-12.jpg" data-fancybox="images"></a>
             </div>
         </div>

         <div class="gallery-row layout-1-1">
             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-13.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-13.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-14.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-14.jpg" data-fancybox="images"></a>
             </div>
         </div>

         <div class="gallery-row layout-1-1">
             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-15.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-15.jpg" data-fancybox="images"></a>
             </div>

             <div class="gallery-col">
                 <img class="full-size-image" data-label="Before" src="/wp-content/uploads/2020/12/beltline-16.jpg" />
                 <a class="fancybox" href="/wp-content/uploads/2020/12/beltline-16.jpg" data-fancybox="images"></a>
             </div>
         </div>

     </section>

     <?php echo render_circle_button('back-to-main-button', 'BACK TO', 'MAIN GALLERY', '/gallery/'); ?>
 </main>

<?php
