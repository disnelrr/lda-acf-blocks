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
	'name'			=> 'LDA Testimonials',
	'title'			=> __( 'LDA Testimonials', '' ),
	'render_template'	=> LDABLOCKSDIR . 'partials/lda-testimonials.php',
	'category'		=> 'formatting',
	'icon'			=> 'testimonial',
	'mode'			=> 'preview',
	'keywords'		=> array( 'testimony', 'kudos', 'client', 'opinion' )
));

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5fd377fe076fe',
	'title' => 'LDA Testimonials',
	'fields' => array(
		array(
			'key' => 'field_5fd3780ca6896',
			'label' => 'Title',
			'name' => 'title',
			'type' => 'wysiwyg',
			'instructions' => 'A title for the section',
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
			'key' => 'field_5fd37f390723d',
			'label' => 'Interval',
			'name' => 'interval',
			'type' => 'number',
			'instructions' => 'Interval between testimonials (in seconds)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 20,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 30,
			'step' => 1,
		),
		array(
			'key' => 'field_5fd37832a6897',
			'label' => 'Testimonials',
			'name' => 'testimonials',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
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
			'button_label' => 'Add Testimony',
			'sub_fields' => array(
				array(
					'key' => 'field_5fd37853a6898',
					'label' => 'Content',
					'name' => 'content',
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
					'key' => 'field_5fd37892a6899',
					'label' => 'Page link',
					'name' => 'page_link',
					'type' => 'page_link',
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
						1 => 'post',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'allow_archives' => 0,
					'multiple' => 0,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/lda-testimonials',
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
