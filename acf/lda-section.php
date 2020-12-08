<?php
/**
 * Base block for building a common LD&A section
 *
 * @package     ($namespace)
 * @since       1.0.0
 * @author      brs
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */


acf_register_block( array(
	'name'			=> 'LDA Section',
	'title'			=> __( 'LDA Section', '' ),
	'render_template'	=> LDABLOCKSDIR . 'partials/lda-section.php',
	'category'		=> 'formatting',
	'icon'			=> 'analytics',
	'mode'			=> 'preview',
	'keywords'		=> array( 'slide' )
));

acf_add_local_field_group(array(
	'key' => 'group_5fcf41457f60a',
	'title' => 'LDA Section',
	'fields' => array(
		array(
			'key' => 'field_5fcf494f00723',
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
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 1,
		),
		array(
			'key' => 'field_5fcf4ad30e8d6',
			'label' => 'Description',
			'name' => 'description',
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
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 1,
		),
		array(
			'key' => 'field_5fcf4b750e8d7',
			'label' => 'Circle button',
			'name' => 'circle_button',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5fcf5413c0f65',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_5fcf4b910e8d8',
					'label' => 'Top text',
					'name' => 'top_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
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
					'key' => 'field_5fcf4ba40e8d9',
					'label' => 'Bottom text',
					'name' => 'bottom_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
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
					'key' => 'field_5fcf4bd70e8da',
					'label' => 'Linked page',
					'name' => 'linked_page',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
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
			),
		),
		array(
			'key' => 'field_5fcf59a4ebd2f',
			'label' => 'Background image',
			'name' => 'background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
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
		array(
			'key' => 'field_5fcf4e44f9b8d',
			'label' => 'Advanced section settings',
			'name' => '',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'open' => 0,
			'multi_expand' => 0,
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5fcf4e59f9b8e',
			'label' => 'ID',
			'name' => 'id',
			'type' => 'text',
			'instructions' => 'ID attribute for the section',
			'required' => 0,
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
			'key' => 'field_5fcf4e8cf9b8f',
			'label' => 'Class',
			'name' => 'class',
			'type' => 'text',
			'instructions' => 'Add a class for the section to be styled',
			'required' => 0,
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
			'key' => 'field_5fcf4f4e36202',
			'label' => 'Dark',
			'name' => 'dark',
			'type' => 'true_false',
			'instructions' => 'Dark circle border',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5fcf511eeca76',
			'label' => 'Keep circle',
			'name' => 'keep_circle',
			'type' => 'true_false',
			'instructions' => 'Keep circle on mobile view?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5fcf5154eca77',
			'label' => 'RTL',
			'name' => 'rtl',
			'type' => 'true_false',
			'instructions' => 'Title and description should be presented right to left?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5fcf51c1eca78',
			'label' => 'Add center classes',
			'name' => 'add_center_classes',
			'type' => 'true_false',
			'instructions' => 'Add classes for centering the section horizontally and vertically',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5fcf5413c0f65',
			'label' => 'Hide line',
			'name' => 'hide_line',
			'type' => 'true_false',
			'instructions' => 'Hide animated line and circle',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/lda-section',
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
