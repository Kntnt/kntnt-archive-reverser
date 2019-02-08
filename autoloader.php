<?php

namespace Kntnt\Archive_Reverser;

spl_autoload_register( function ( $class ) {
    $ns_len = strlen( __NAMESPACE__ );
    if ( 0 == substr_compare( $class, __NAMESPACE__, 0, $ns_len ) ) {
        require_once __DIR__ . '/classes/' . strtr( strtolower( substr( $class, $ns_len + 1 ) ), '_', '-' ) . '.php';
    }
} );
