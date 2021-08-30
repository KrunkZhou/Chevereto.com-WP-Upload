<?php
/**
Plugin Name: KLink
Plugin URI: https://krunk.cn/kblog425/
Description: Upload image with imgchr.com by Krunk
Version: 1.1
Author: Krunk
Author URI: https://krunk.cn
*/

add_action( 'add_meta_boxes', 'metabox' );

function metabox(){
        add_meta_box( 'link', 'Krunk Upload', ( 'render_meta_box_content1' ), 'post', 'side', 'high' );
    }
function render_meta_box_content1( $post ){
        echo '<label for="link_k">'. __( 'Active', 'link' ) .'</label>';
		echo '<script async id="chevereto-pup-src" src="https://api.krunk.cn/krunk/sdk/pup.js" data-url="https://imgchr.com/upload" data-auto-insert="html-embed-medium"></script>';//Krunk
    }
?>