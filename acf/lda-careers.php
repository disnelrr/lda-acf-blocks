<?php
/**
 * Displays LD&A Team Members using a grid.
 *
 * @package     ($namespace)
 * @since       1.0.0
 * @author      brs
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */


acf_register_block( array(
	'name'			=> 'LDA Careers',
	'title'			=> __( 'LDA Careers', '' ),
	'render_template'	=> LDABLOCKSDIR . 'partials/lda-careers.php',
	'category'		=> 'formatting',
	'icon'			=> 'buddicons-buddypress-logo',
	'keywords'		=> array( 'job', 'offer' ),
	'mode'			=> 'edit',
	'supports'		=> array( 'mode' => false )
));


acf_add_local_field_group(array(
	'key' => 'group_620e3944754f9',
	'title' => 'LDA Careers',
	'fields' => array(
		array(
			'key' => 'field_620e3bd1cbcc1',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Current Opportunities',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_620e3ea48a0e5',
			'label' => 'WP Form ID',
			'name' => 'wp_form_id',
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
			'key' => 'field_620e3c09cbcc2',
			'label' => 'Job Positions',
			'name' => 'job_positions',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_620e3c1fcbcc3',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Job Position',
			'sub_fields' => array(
				array(
					'key' => 'field_620e3c1fcbcc3',
					'label' => 'Job Title',
					'name' => 'job_title',
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
					'key' => 'field_620e3c38cbcc4',
					'label' => 'Job Type',
					'name' => 'job_type',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'full' => 'Full Time',
						'part' => 'Part Time',
					),
					'default_value' => 'full',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'label',
					'placeholder' => '',
				),
				array(
					'key' => 'field_620e3d10cbcc5',
					'label' => 'Start Date',
					'name' => 'start_date',
					'type' => 'date_picker',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'display_format' => 'm/d/Y',
					'return_format' => 'm/d/Y',
					'first_day' => 1,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/lda-careers',
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
	'show_in_rest' => 0,
));