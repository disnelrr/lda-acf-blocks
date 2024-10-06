<?php
/**
 * Description
 *
 * @package     LDA Blocks
 * @since       1.0.0
 * @author      Disnel Rodríguez
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */


acf_register_block(array(
    'name'			=> 'LDA Main Gallery Header',
    'title'			=> __('LDA Main Gallery Header', ''),
    'render_template'	=> LDABLOCKSDIR . 'partials/lda-main-gallery-header.php',
    'category'		=> 'formatting',
    'icon'			=> 'images-alt2',
    'keywords'		=> array( 'image', 'project', 'manage', 'header' ),
    'mode'			=> 'preview',
));

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_lda_main_gallery_header',
    'title' => 'LDA Main Gallery Header',
    'fields' => array(
        array(
            'key' => 'field_title',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 1,
        ),
        array(
            'key' => 'field_intro',
            'label' => 'Introduction',
            'name' => 'intro',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 1,
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/lda-main-gallery-header',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'discussion',
        4 => 'comments',
        5 => 'revisions',
        6 => 'slug',
        7 => 'author',
        8 => 'format',
        9 => 'page_attributes',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
));

endif;
