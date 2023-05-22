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

$section['top_content'] = get_field('title');
$section['bottom_content'] = get_field('description');
$section['id'] = get_field('id');
$section['class'] = get_field('class');
$section['dark'] = get_field('dark');
$section['keep_circle'] = get_field('keep_circle');
$section['hide_circle'] = get_field('hide_circle');
$section['rtl'] = get_field('rtl');
$section['add_center_classes'] = get_field('add_center_classes');
$section['hide_line'] = get_field('hide_line');
$section['background_image'] = get_field('background_image');
if ( ! $section['hide_line'] ) {
    $circle_button = get_field('circle_button');
    $top_text = $circle_button['top_text'];
    $bottom_text = $circle_button['bottom_text'];
    $linked_page = $circle_button['linked_page'];
    $url = $linked_page ? get_permalink( $linked_page->ID ) : '';
    $section['circle_content'] = <<<EOT
        <a href="{$url}" class="no-decoration text-uppercase"><span>{$top_text}</span><br/><span>{$bottom_text}</span></a>
        EOT;
}

echo build_section($section);
