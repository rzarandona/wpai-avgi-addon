<?php

/*
Plugin Name: WP All Import - Additional Variations Gallery Images Add-On
Description: An add-on for importing images to variations gallery images.
Version: 1.0
Author: Rein Zarandona
Author URI: https://www.upwork.com/fl/reinhardz2
*/

include "rapid-addon.php";
$wpai_avgi_addon = new RapidAddon('Additional Variations Gallery WP Add-On', 'wpai_avgi_addon_instance');
$wpai_avgi_addon->import_images( 'wpai_avgi_import', 'Additional Variations Gallery Images Add-On' );

function wpai_avgi_import( $post_id, $attachment_id, $filepath ) {
    global $wpai_avgi_addon;
        $key = 'woo_variation_gallery_images';
        $current_images = get_post_meta( $post_id, $key, true );
        if ( ! empty( $current_images ) ) {
            $current_images = maybe_unserialize( $current_images );
        } else {
            $current_images = array();
        }

        if ( ! in_array( $attachment_id, $current_images ) ) {
            $current_images[] = $attachment_id;
            update_post_meta( $post_id, $key, $current_images );
        }
}
                                            

// admin notice if WPAI and/or Variations isn't installed
if (function_exists('is_plugin_active')) {

	// display this notice if the free version of the plugin is active.
	if ( !is_plugin_active( "woo-variation-gallery/woo-variation-gallery.php" ) ) {

		// Specify a custom admin notice.
		$wpai_avgi_addon->admin_notice(
			'The Variations Gallery Add-On requires WP All Import <a href="http://wordpress.org/plugins/wp-all-import" target="_blank">Free</a> and the <a href="https://wordpress.org/plugins/woo-variation-gallery/">Additional Variation Images Gallery for WooCommerce</a> plugin.'
		);
	}

	// only run this add-on if the free version of the plugin is active.
	if ( is_plugin_active( "woo-variation-gallery/woo-variation-gallery.php" ) ) {
		
		$wpai_avgi_addon->run();
		
	}
}

function wpdocs_styles_method() {
    wp_enqueue_style(
        'custom-style',
        plugins_url() . '/wp-all-import-variations-gallery-addon/admin.css'
    );
        $custom_css = ".wpallimport-collapsed.wpallimport-section.wpallimport-addon.wpai_avgi_addon_instance {
            display: none !important;
        }";
        wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_styles_method' );


