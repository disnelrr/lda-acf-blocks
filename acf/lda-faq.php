<?php
/**
 * LDA FAQ Block
 *
 * @package     LDA Blocks
 * @since       1.0.0
 * @author      Disnel Rodríguez
 * @link        https://bowriverstudio.com
 * @license     GNU General Public License 2.0+
 */

acf_register_block(array(
    'name'              => 'LDA FAQ',
    'title'             => __('LDA FAQ', ''),
    'render_template'   => LDABLOCKSDIR . 'partials/lda-faq.php',
    'category'          => 'formatting',
    'icon'              => 'editor-help',
    'keywords'          => array('faq', 'questions', 'answers'),
    'mode'              => 'preview',
));

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_lda_faq',
    'title' => 'LDA FAQ',
    'fields' => array(
        array(
            'key' => 'field_lda_faq_title',
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
            'key' => 'field_lda_faq_intro',
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
        array(
            'key' => 'field_lda_faq_items',
            'label' => 'FAQ Items',
            'name' => 'faq',
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
            'layout' => 'row',
            'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array(
                    'key' => 'field_lda_faq_question',
                    'label' => 'Question',
                    'name' => 'question',
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
                    'key' => 'field_lda_faq_answer',
                    'label' => 'Answer',
                    'name' => 'answer',
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
        ),
        array(
            'key' => 'field_lda_faq_cta_text',
            'label' => 'CTA Text',
            'name' => 'ctaText',
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
    ),
    'location' => array(
        array(
            array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/lda-faq',
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

