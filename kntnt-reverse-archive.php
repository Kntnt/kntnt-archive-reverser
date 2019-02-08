<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Archive Reverser
 * Plugin URI:        https://github.com/kntnt/kntnt-archive-reverser
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-archive-reverser
 * Description:       Changes the order from descending (reverse chronological) to ascending (chronological) for how posts of selected taxonomies are presented in archives (and other places where the main query is used).
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-archive-reverser
 * Domain Path:       /languages
 */

namespace Kntnt\Archive_Reverser;

defined( 'WPINC' ) || die;

// Set WP_DEBUG to TRUE in wp-config.php and uncomment next line to debug.
define( 'KNTNT_ARCHIVE_REVERSER', true );

require_once __DIR__ . '/autoloader.php';

new Plugin();
