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
    'name'			=> 'LDA Main Gallery',
    'title'			=> __('LDA Main Gallery', ''),
    'render_template'	=> LDABLOCKSDIR . 'partials/lda-main-gallery.php',
    'category'		=> 'formatting',
    'icon'			=> 'images-alt2',
    'keywords'		=> array( 'image', 'project', 'manage' ),
    'mode'			=> 'preview',
));
