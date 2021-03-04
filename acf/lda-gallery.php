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
