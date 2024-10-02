<?php
/**
 * Displays a Bootstrap carousel
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$carousel_items_markup = "";
$carousel_indicators = "";

if ( have_rows('slides') ) {
    $i = 0;
    while ( have_rows('slides') ) {
        the_row();
        $slide = array();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $project_page = get_sub_field('project_page');
        $url = get_permalink( $project_page->ID );
        $active = $i == 0 ? " active" : "";
        $carousel_indicators .= <<<EOT
            <li data-target="#carousel-section" data-slide-to="{$i}" class="{$active}"></li>
            EOT;
        $i++;
        $slide['top_content'] = "<h2 class='text-white'>{$title}</h2>";
        $slide['bottom_content'] = <<<EOT
            <p class='text-white'>{$description}</p>
            <p class="text-white d-none section-link has-orange-color-on-hover"><a class="font-weight-bold" href="{$url}">VIEW PROJECT</a></p>
            EOT;
        $slide['circle_content'] = <<<EOT
            <a href="{$url}" class="no-decoration"><span>VIEW</span><br/><span>PROJECT</span></a>
            EOT;
        $slide['class'] = "slide-{$i} large-padding carousel-item{$active}";
        $slide['tag'] = 'div';
        $slide['rtl'] = true;
        $slide['do_not_animate'] = true;
        $slide['keep_circle'] = true;
        $slide['add_center_classes'] = false;
        $slide['background_image'] = get_sub_field('background_image');
        $carousel_items_markup .= build_section($slide);
    }
}


?>

<section id="carousel-section" class="carousel-section carousel slide" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
      <?php echo $carousel_indicators; ?>
    </ol>
  <div class="carousel-inner">
      <?php echo $carousel_items_markup; ?>
  </div>

</section>

<?php
