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

class ldaACFBlocks
{

    /**
     * Function ran on plugin start.
     *
     * @since 1.0.0
     * @return void
     */
    public function run()
    {
        add_action('acf/init', array($this, 'acf_register_blocks'));
        add_action('plugins_loaded', array($this, 'enqueue_scripts'));
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('js-scripts', plugins_url('assets/js/script.js', __FILE__), array('jquery'), '1.0.4', true);
        wp_enqueue_style('css-styles', plugins_url('assets/css/styles.css', __FILE__), null, '1.0');
        wp_localize_script('js-scripts', 'resources_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
    }

    public function acf_register_blocks()
    {
        if (!function_exists('acf_register_block') || !function_exists('acf_add_local_field_group')) {
            return;
        }
        //require_once LDABLOCKSDIR . 'lib/functions.php';
        require_once LDABLOCKSDIR . 'acf/lda-carousel.php';
        require_once LDABLOCKSDIR . 'acf/lda-section.php';
        require_once LDABLOCKSDIR . 'acf/lda-team-members.php';
        require_once LDABLOCKSDIR . 'acf/lda-testimonials.php';
        require_once LDABLOCKSDIR . 'acf/lda-contact.php';
        require_once LDABLOCKSDIR . 'acf/lda-gallery.php';
        require_once LDABLOCKSDIR . 'acf/lda-gallery-header.php';
        require_once LDABLOCKSDIR . 'acf/lda-main-gallery.php';
        require_once LDABLOCKSDIR . 'acf/lda-careers.php';
    }
}
