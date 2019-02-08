<?php

defined( 'WP_UNINSTALL_PLUGIN' ) || die;

require_once __DIR__ . '/kntnt-archive-reverser.php';

// Delete options.
delete_option( 'kntnt-archive-reverser' );
