<?php
/**
 * Displays a LD&A common section
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$section = array();

$section['top_content'] = <<<EOT
    <h2 class="text-center text-white">JOIN OUR TEAM</h2>
EOT;
$section['id'] = 'careers-enrolment-section';
$section['class'] = 'careers-enrolment-section large-padding';
$section['circle_content'] = <<<EOT
<a href="#" data-toggle="modal" data-target="#career-popup" class="no-decoration"><span>SEND US</span><br/><span>YOUR DETAILS</span></a>
EOT;

$positions_html = '';
$heading = '';
$text_classes = "col-12 col-sm-6 col-lg-3 text-uppercase";
if (have_rows('job_positions')) {
    $heading = '<h2 class="text-center text-white">' . get_field('heading') . '</h2>';
    while (have_rows('job_positions')) {
        the_row();
        $title = get_sub_field('job_title');
        $type = get_sub_field('job_type');
        $start = get_sub_field('start_date');
        $positions_html .= '<div class="row">';
        $positions_html .= '<div class="' . $text_classes . '">' . $title . '</div>';
        $positions_html .= '<div class="' . $text_classes . '">' . $type . '</div>';
        $positions_html .= '<div class="' . $text_classes . '">' . $start . '</div>';
        $positions_html .= '<div class="col-12 col-sm-6 col-lg-3 text-lg-right"><a href="#" class="contact-link" data-toggle="modal" data-target="#career-popup">';
        $positions_html .= '<img class="medium-arrow" src="/wp-content/uploads/2020/03/Inquiry-Arrow.png" alt="Apply now" />';
        $positions_html .= '<span class="has-small-font-size has-white-color has-orange-color-on-hover font-weight-bold"> APPLY NOW</span></a>';
        $positions_html .= '</a></div>';
        $positions_html .= '</div>';
    }
}

$wp_form = do_shortcode( '[wpforms id="' . get_field('wp_form_id') . '" title="true"]' );


$section['bottom_content'] = <<<EOT
$heading
$positions_html
<div class="modal lda-modal black-modal career-popup fade" id="career-popup" tabindex="-1" role="dialog" aria-labelledby="project-inquiry-popup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="/wp-content/themes/lynndonaldsonbootstrap/images/home/CloseButton.png" width="24" height="24"/>
                </button>
            </div>
            <div class="modal-body">
              $wp_form
            </div>
        </div>
    </div>
</div>
EOT;

echo build_section($section);
