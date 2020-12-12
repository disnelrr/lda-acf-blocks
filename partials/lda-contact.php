<?php
/**
 * Displays a LD&A common section
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/
?>

 <section id="contact-section" class="contact-section page-section large-padding centered-background" style="background-image: url(<?php echo get_field('background_image') ?>)">
     <div class="container">
         <div class="row">
             <div class="col-12 contact-title">
                 <h2 class="text-left"><?php the_field('title') ?></h2>
             </div>
             <div class="col-12 contact-table align-items-start align-items-md-center">
                 <div class="left-side text-left">
                     <div class="contact-info"><?php the_field('address') ?></div>
                     <div class="contact-info"><a href="tel:<?php echo get_field('phone') ?>"><?php the_field('phone') ?></a></div>
                     <div class="contact-info"><a href="mailto:<?php echo get_field('email') ?>"><?php the_field('email') ?></a></div>
                 </div>
                 <div class="right-side has-small-font-size font-weight-bold">
                     <div class="contact-info"><a href="#" data-toggle="modal" data-target="#map-popup" class="contact-link"><img class="medium-arrow" src="/wp-content/uploads/2020/03/Inquiry-Arrow.png" alt="arrow" /><span class="has-orange-color-on-hover">VIEW MAP</span></a></div>
                     <div class="contact-info"><a href="#" class="contact-link" data-toggle="modal" data-target="#project-inquiry-popup"><img class="medium-arrow" src="/wp-content/uploads/2020/03/Inquiry-Arrow.png" alt="arrow" /><span class="has-orange-color-on-hover">PROJECT INQUIRY</span></a></div>
                     <div class="contact-info"><a href="/buildertrend-login/" class="contact-link"><img class="medium-arrow" src="/wp-content/uploads/2020/03/Inquiry-Arrow.png" alt="arrow" /><span class="has-orange-color-on-hover">BUILDERTREND LOGIN</span></a></div>
                 </div>
             </div>
             <div class="col-12 social-links social-sidebar d-flex">
                 <ul>
                     <?php if ( have_rows('social_links') ) :
                         while ( have_rows('social_links') ) : the_row() ?>
                            <li>
                                <a href="<?php echo get_sub_field('url') ?>" target="_blank" class="only-tall-screens"><?php echo '.' . get_sub_field('label') ?></a>
                                <a href="<?php echo get_sub_field('url') ?>" target="_blank" class="only-small-screens"><?php echo '.' . get_sub_field('label_small') ?></a>
                            </li>
                            <li class="spacer">&nbsp;</li>
                     <?php
                        endwhile;
                    endif;
                     ?>
                 </ul>

             </div>
         </div>
     </div>

     <div class="modal lda-modal map-popup fade" id="map-popup" tabindex="-1" role="dialog" aria-labelledby="map-popup" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <img src="/wp-content/themes/lynndonaldsonbootstrap/images/home/CloseButton.png" width="24" height="24"/>
         </button>
       </div>
           <div class="modal-body">
               <h1 class="text-white text-center font-weight-bold">WHERE TO FIND US</h1>
               <p class="text-center">
                   <a target="_blank" class="text-white" href="https://www.google.com/maps/place/6503+Elbow+Dr+SW,+Calgary,+AB+T2V+1J7,+Canad%C3%A1/@50.995255,-114.0859117,17z/data=!3m1!4b1!4m5!3m4!1s0x537171009d203b85:0xceda5e55ef35119c!8m2!3d50.995255!4d-114.083723"><?php the_field('address') ?></a>
                   <span class="text-white dot-separator">&#183;</span>
                   <a target="_blank" class="text-white" href="tel:<?php echo get_field('phone') ?>"><?php the_field('phone') ?></a>
               </p>
           </div>
         </div>
       </div>
     </div>

     <?php echo get_inquiry_dialog(); ?>

 </section>
