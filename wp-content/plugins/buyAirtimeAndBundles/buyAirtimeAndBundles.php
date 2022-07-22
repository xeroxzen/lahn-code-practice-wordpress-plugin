<?php

/**
 * @package     BuyAirtimeAndBundlesPlugin
 */
/*
Plugin Name: Buy Airtime and Bundles
Plugin URI: https://github.com/xeroxzen/lahn-code-practice-wordpress-plugin 
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
        flush_rewrite_rules();
    }

    function deactivate()
    {
        // flush the rewrite rules
        flush_rewrite_rules();
    }

    function uninstall()
    {
        // delete all the plugin data from the database
    }

    static function custom_airtime_bundle_purchase()
    {
        // create a custom post type for the plugin
        // register register_purchase_of_airtime_and_bundles_cpt()

        register_purchase_type('airtime', ['public' => true, 'label' => 'Airtime']);
        register_purchase_type('bundle', ['public' => true, 'label' => 'Bundles']);
    }

    public function add_popup()
    {
?>
        <div class="buy-airtime-and-bundles-popup">
            <div class="buy-airtime-and-bundles-popup-content">
                <div class="buy-airtime-and-bundles-popup-content-header">
                    <h1>Buy Airtime and Bundles</h1>
                    <span class="buy-airtime-and-bundles-popup-content-header-close">&times;</span>
                </div>
                <div class="buy-airtime-and-bundles-popup-content-body">
                    <div class="buy-airtime-and-bundles-popup-content-body-airtime">
                        <h2>Airtime</h2>
                        <ul>
                            <li>
                                <a href="https://www.econet.co.zw/">Econet</a>
                            </li>
                            <li>
                                <a href="https://www.netone.co.zw/">NetOne</a>
                            </li>
                            <li>
                                <a href="https://www.telecel.co.zw/">Telecel</a>
                            </li>
                            <li>
                                <a href="https://www.africom.co.zw/">Africom</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buy-airtime-and-bundles-popup-content-body-bundles">
                        <h2>Bundles</h2>
                        <ul>
                            <li>
                                <a href="https://www.econet.co.zw/">Econet</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
if (class_exists('BuyAirtimeAndBundles')) {
    $buy_airtime_and_bundles = new BuyAirtimeAndBundles('Buy Airtime and Bundles');
}

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
