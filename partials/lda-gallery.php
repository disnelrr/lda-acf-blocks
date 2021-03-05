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

 <main id="content" class="p-0">
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
                 $images = array();
                 for ($i = 1; $i <= 4 ; $i++) {
                    $images[] = get_sub_field('image_' . $i);
                 }
                 $text = get_sub_field('text');
                 $layout = get_sub_field('layout'); ?>
                 <?php if ( $layout == 'layout-1-text' ) : ?>
                     <div class="container">
                         <div class="row">
                             <div class="col-12 mb-2">
                                 <p><?php echo $text ?></p>
                             </div>
                         </div>
                     </div>
                 <?php elseif ( $layout == 'layout-1' || $layout == 'layout-1-1' || $layout == 'layout-1-1-1' || $layout == 'layout-1-1-1-1' ) : ?>
                     <?php $layout_class = $layout != 'layout-1-1-1-1' ? $layout : 'layout-1-1-1' ?>
                     <div class="gallery-row <?php echo $layout_class ?>">
                         <?php foreach($images as $image) : ?>
                             <?php if ( $image ) : ?>
                                 <div class="gallery-col">
                                     <img class="full-size-image" data-label="Before" src="<?php echo $image ?>" />
                                     <a class="fancybox" href="<?php echo $image ?>" data-fancybox="images"></a>
                                 </div>
                             <?php endif; ?>
                         <?php endforeach; ?>
                     </div>
                 <?php elseif ( $layout == 'layout-1-2-text-image-image' || $layout == 'layout-2-1-image-text-image' ) : ?>
                     <div class="gallery-row layout-2-1" style="align-items: inherit">
                         <?php if ( $layout == 'layout-2-1-image-text-image' ) : ?>
                            <div class="gallery-col">
                                <img class="full-size-image" data-label="Before" src="<?php echo $images[0] ?>" />
                                <a class="fancybox" href="<?php echo $images[0] ?>" data-fancybox="images"></a>
                            </div>
                        <?php endif; ?>

                        <div class="gallery-col d-flex flex-column">
                            <br />
                            <p><?php echo $text ?></p>
                            <span style="flex-grow: 1"></span>
                            <div class="position-relative">
                                <img class="full-size-image" data-label="Before" src="<?php echo $images[1] ?>" />
                                <a class="fancybox" href="<?php echo $images[1] ?>" data-fancybox="images"></a>
                            </div>
                        </div>

                        <?php if ( $layout == 'layout-1-2-text-image-image' ) : ?>
                           <div class="gallery-col">
                               <img class="full-size-image" data-label="Before" src="<?php echo $images[0] ?>" />
                               <a class="fancybox" href="<?php echo $images[0] ?>" data-fancybox="images"></a>
                           </div>
                       <?php endif; ?>
                    </div>
                 <?php elseif ( strpos($layout, '-text-image') !== false || strpos($layout, 'layout-1-1-1-text') !== false ) : ?>
                        <?php $layout_class = strpos($layout, '2-1') !== false || strpos($layout, 'right') !== false ? 'layout-2-1-with-text' : 'layout-1-2-with-text' ?>
                        <div class="gallery-row <?php echo $layout_class ?>">
                            <?php if ( strpos($layout, '1-2') || strpos($layout, 'left') ) : ?>
                                <div class="gallery-col d-flex align-items-center">
                                    <p><?php echo $text ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if ( $layout == 'layout-1-1-1-text-right' ) : ?>
                                <div class="gallery-col">
                            <?php endif; ?>
                                <div class="gallery-col">
                                    <img class="full-size-image" src="<?php echo $images[0] ?>" />
                                    <a class="fancybox" href="<?php echo $images[0] ?>" data-fancybox="images"></a>
                                </div>
                                <?php if ( $images[1] ) : ?>
                                    <div class="gallery-col">
                                        <img class="full-size-image" src="<?php echo $images[1] ?>" />
                                        <a class="fancybox" href="<?php echo $images[1] ?>" data-fancybox="images"></a>
                                    </div>
                                <?php endif; ?>
                            <?php if ( $layout == 'layout-1-1-1-text-right' ) : ?>
                               </div>
                            <?php endif; ?>
                            <?php if ( strpos($layout, '2-1') !== false || strpos($layout, 'right') !== false ) : ?>
                                <div class="gallery-col d-flex align-items-center">
                                    <p><?php echo $text ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                 <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

     <?php echo render_circle_button('back-to-main-button', 'BACK TO', 'MAIN GALLERY', '/gallery/'); ?>
 </main>

<?php
