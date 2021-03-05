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

<?php
