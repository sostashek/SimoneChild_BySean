<?php
/* Functions file for simonechild theme */

function child_fonts_setup() {
    
    wp_enqueue_style( 'child_fonts', '//fonts.googleapis.com/css?family=Quicksand:400,700|Karla|Inconsolata:400,700' );
    
}
add_action( 'wp_enqueue_scripts', 'child_fonts_setup' );

?>