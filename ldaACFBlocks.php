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
        add_filter('wp_nav_menu_objects', array($this, 'filter_gallery_navigation_current_item'), 10, 2);
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
        require_once LDABLOCKSDIR . 'acf/lda-main-gallery-header.php';
        require_once LDABLOCKSDIR . 'acf/lda-careers.php';
        require_once LDABLOCKSDIR . 'acf/lda-faq.php';
    }

    /**
     * Hide the current page item from the shared gallery submenu.
     *
     * This lets both gallery pages share one menu while only showing
     * the opposite link on each page.
     *
     * @param array $items Menu items.
     * @param object $args wp_nav_menu() args.
     * @return array
     */
    public function filter_gallery_navigation_current_item($items, $args)
    {
        if (!is_array($items) || !is_object($args) || !isset($args->theme_location) || $args->theme_location !== 'gallery_navigation') {
            return $items;
        }

        $current_page_id = (int) get_queried_object_id();

        return array_values(array_filter($items, function ($item) use ($current_page_id) {
            if (!is_object($item)) {
                return false;
            }

            if (!empty($item->current)) {
                return false;
            }

            if ($current_page_id > 0 && isset($item->object_id) && (int) $item->object_id === $current_page_id) {
                return false;
            }

            return true;
        }));
    }
}
