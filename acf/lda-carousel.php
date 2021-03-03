<?php
/**
 * Description
 *
 * @package     ($namespace)
 * @since       1.0.0
 * @author      brs
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */


acf_register_block( array(
	'name'			=> 'LDA Carousel',
	'title'			=> __( 'LDA Carousel', '' ),
	'render_template'	=> LDABLOCKSDIR . 'partials/lda-carousel.php',
	'category'		=> 'formatting',
	'icon'			=> 'images-alt2',
	'keywords'		=> array( 'slideshow', 'slide' ),
	'mode'			=> 'edit',
	'supports'		=> array( 'mode' => false )
));

acf_add_local_field_group(array(
	'key' => 'group_5fce68c155bb8',
	'title' => 'LDA Carousel',
	'fields' => array(
		array(
			'key' => 'field_5fce690a0d661',
			'label' => 'Slides',
			'name' => 'slides',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Slide',
			'sub_fields' => array(
				array(
					'key' => 'field_5fce69650d662',
					'label' => 'Title',
					'name' => 'title',
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
					'placeholder' => 'Enter project name',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5fce69860d663',
					'label' => 'Description',
					'name' => 'description',
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
					'placeholder' => 'Enter project description',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array(
					'key' => 'field_5fce69a90d664',
					'label' => 'Project page',
					'name' => 'project_page',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'ui' => 1,
				),
				array(
					'key' => 'field_5fce6a420d665',
					'label' => 'Background image',
					'name' => 'background_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/lda-carousel',
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
