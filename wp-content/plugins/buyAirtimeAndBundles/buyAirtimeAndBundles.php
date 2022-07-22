<?php

/**
 * @package     BuyAirtimeAndBundlesPlugin
 */
/*
Plugin Name: Buy Airtime and Bundles
Plugin URI: https://github.com/xeroxzen/lahn-code-practice-wordpress-plugin/blob/main/wp-content/plugins/buyAirtimeAndBundles/buyAirtimeAndBundles.php 
Description: A wordpress plugin to open as a popup on a website to enable users buy airtime and bundles
Version: 1.0.0
Author: Andile Jaden Mbele
Author URI: http://andilembele.netlify.app/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: buy-airtime-and-bundles
*/

if (!defined('ABSPATH')) {
    die;
}

class BuyAirtimeAndBundles
{
    public function __construct()
    {

        add_action('init', array($this, 'custom_airtime_bundle_purchase'));
    }

    function activate()
    {
        // generate a CPT for the plugin
        $this->custom_airtime_bundle_purchase();
    }

    function deactivate()
    {
        // flush the rewrite rules
        flush_rewrite_rules();
    }

    function uninstall()
    {
        // delete all the plugin data from the database
        flush_rewrite_rules();
    }

    static function custom_airtime_bundle_purchase()
    {
        // create a custom post type for the plugin
        // register custom_airtime_bundle_purchase();

        // register_purchase_type('airtime', ['public' => true, 'label' => 'Airtime']);
        // register_purchase_type('bundle', ['public' => true, 'label' => 'Bundles']);
    }

    public function add_popup()
    {
?>
        <!-- Add a nice looking card for airtime and bundle details -->
        <div class="card align-center">
            <div class="card-body">
                <h5 class="card-title">Buy Airtime and Bundles</h5>
                <button onclick="openPopup()" type="button" class="btn btn-primary">
                    Click here to buy
                </button>

                <script>
                    function openPopup() {
                        window.open("https://lahhn.com/recharge", "popupWindow", "width=600,height=600, scrollbars=yes, resizable=yes");
                    }
                </script>
            </div>
        </div>
<?php
    }
}
if (class_exists('BuyAirtimeAndBundles')) {
    $buy_airtime_and_bundles = new BuyAirtimeAndBundles('Buy Airtime and Bundles');
}

// Add the popup to the page
add_action('wp_footer', array($buy_airtime_and_bundles, 'add_popup'));

// check if the register_activation_hook function is defined
if (!function_exists('register_activation_hook')) {
    // if not, define it
    function register_activation_hook($file, $function)
    {
        // do nothing
    }
}

// check if the register_deactivation_hook function is defined
if (!function_exists('register_deactivation_hook')) {
    // if not, define it
    function register_deactivation_hook($file, $function)
    {
        // do nothing
    }
}
// activate the plugin
register_activation_hook(__FILE__, array($buy_airtime_and_bundles, 'activate'));

// deactivate the plugin
register_deactivation_hook(__FILE__, array($buy_airtime_and_bundles, 'deactivate'));

// check if the register_uninstall_hook function is defined
if (!function_exists('register_uninstall_hook')) {
    // if not, define it
    function register_uninstall_hook($file, $function)
    {
        // do nothing
    }
}

// uninstall the plugin
register_uninstall_hook(__FILE__, array($buy_airtime_and_bundles, 'uninstall'));
