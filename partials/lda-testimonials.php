<?php
/**
 * Displays a LD&A common section
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$title = get_field('title');
$interval = get_field('interval') * 1000;
$section = array();

$section['id'] = 'clients-section';
$section['class'] = 'clients-section section-777 home-section left-circle';
$section['keep_circle'] = true;
$section['dark'] = true;
$section['top_content'] = '<div class="d-none d-md-block">' . $title . '</div>';
$section['circle_content'] = <<<EOT
    <a href="/gallery/" class="no-decoration"><img class="small-arrow" src="/wp-content/themes/lynndonaldsonbootstrap/images/home/arrow-small.png" alt="arrow" /></a>
    EOT;


if ( have_rows('testimonials') ) :
    $testimonials_slides = '';
    $testimonials_indicators = '';
    $active = true;
    $i = 0;
    while ( have_rows('testimonials') ) : the_row();
        $active_class = $active ? ' active' : '';
        $testimonials_slides .= '<div class="carousel-item' . $active_class . '">
         <p>' . get_sub_field('content') . '</p>
        </div>';
        $testimonials_indicators .= '<li data-target="#carouselTestimonials" data-slide-to="' . $i++ . '" class="' . $active_class . '"></li>';
        $active = false;
    endwhile;
endif;

$section['bottom_content'] = <<<EOT
<div class="d-md-none">{$title}</div>
<div id="carouselTestimonials" class="carousel slide" data-ride="carousel" data-interval="{$interval}">
  <div class="carousel-inner">
    {$testimonials_slides}
  </div>
</div>
EOT;

echo build_section($section);
