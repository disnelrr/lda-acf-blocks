<?php
/**
 * Gallery Header
 *
 * @package     ($namespace)
 * @since       1.0.0
 * @author      brs
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */


acf_register_block(array(
    'name'			=> 'LDA Gallery Header',
    'title'			=> __('LDA Gallery Header', ''),
    'render_template'	=> LDABLOCKSDIR . 'partials/lda-gallery-header.php',
    'category'		=> 'formatting',
    'icon'			=> 'images-alt2',
    'keywords'		=> array( 'project' ),
    'mode'			=> 'preview',
));

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_6042acd53d981',
    'title' => 'LDA Gallery Header',
    'fields' => array(
        array(
            'key' => 'field_6042acd54b279',
            'label' => 'Year',
            'name' => 'year',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 2021,
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => 4,
        ),
        array(
            'key' => 'field_6042acd54b2c0',
            'label' => 'Project Name',
            'name' => 'project_name',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_6042acd54b304',
            'label' => 'Project Description',
            'name' => 'project_description',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_6042acd54b348',
            'label' => 'Size',
            'name' => 'size',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => 'Sq.Ft',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
        array(
            'key' => 'field_6042acd54b396',
            'label' => 'Area',
            'name' => 'area',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/lda-gallery-header',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));

endif;
