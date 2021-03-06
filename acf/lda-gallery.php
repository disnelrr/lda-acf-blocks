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
	'name'			=> 'LDA Gallery',
	'title'			=> __( 'LDA Gallery', '' ),
	'render_template'	=> LDABLOCKSDIR . 'partials/lda-gallery.php',
	'category'		=> 'formatting',
	'icon'			=> 'images-alt2',
	'keywords'		=> array( 'image', 'project' ),
	'mode'			=> 'edit',
	'supports'		=> array( 'mode' => false )
));

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60400daecd234',
	'title' => 'LDA Gallery',
	'fields' => array(
		array(
			'key' => 'field_604378acf2de9',
			'label' => 'Section',
			'name' => 'section',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_6043c72d15603' => array(
					'key' => 'layout_6043c72d15603',
					'name' => 'images_set',
					'label' => 'Images Set',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6043c74115604',
							'label' => 'Images',
							'name' => 'images',
							'type' => 'gallery',
							'instructions' => 'Select 1-4 images, layout will be arranged according to the number of images selected.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'insert' => 'append',
							'library' => 'all',
							'min' => 1,
							'max' => 4,
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6043d09b80c95' => array(
					'key' => 'layout_6043d09b80c95',
					'name' => 'paragraph',
					'label' => 'Paragraph',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6043d0a880c96',
							'label' => 'Text',
							'name' => 'text',
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
					),
					'min' => '',
					'max' => '',
				),
				'layout_6043d5842a6db' => array(
					'key' => 'layout_6043d5842a6db',
					'name' => 'images_text',
					'label' => 'Images + Text',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6043d5a22a6dc',
							'label' => 'Images',
							'name' => 'images',
							'type' => 'gallery',
							'instructions' => 'Select 1-2 images to be shown aside the text.',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'insert' => 'append',
							'library' => 'all',
							'min' => 1,
							'max' => 2,
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_6043d5d82a6dd',
							'label' => 'Text',
							'name' => 'text',
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
							'key' => 'field_6043d91fa175b',
							'label' => 'Text position',
							'name' => 'text_position',
							'type' => 'radio',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'Left' => 'Left',
								'Right' => 'Right',
							),
							'allow_null' => 1,
							'other_choice' => 0,
							'default_value' => 'Left',
							'layout' => 'horizontal',
							'return_format' => 'label',
							'save_other_choice' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Section',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/lda-gallery',
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
