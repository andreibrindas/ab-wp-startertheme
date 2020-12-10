<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 
$redouble_includes = array(
    '/enqueue.php',                         // Enqueue scripts and styles.
    
);
 
foreach ( $redouble_includes as $file ) {
    require_once get_template_directory() . '/inc' . $file;
}

