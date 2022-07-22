<?php

/**
 * Trigger this file on plugin uninstall
 * 
 * @package BuyAirtimeAndBundles
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//  Clear database stored data
$airtime = get_posts(array('post_type' => 'airtime', 'numberposts' => -1));
$bundles = get_posts(array('post_type' => 'bundles', 'numberposts' => -1));

foreach ($airtime as $airtime_post) {
    wp_delete_post($airtime_post->ID, true);
}

foreach ($bundles as $bundle_post) {
    wp_delete_post($bundle_post->ID, true);
}

// global $wpdb;
// $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'airtime'");
// $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'bundles'");
