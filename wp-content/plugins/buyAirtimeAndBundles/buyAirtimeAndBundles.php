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

    function airtimeUIform()
    {
        // create a form for users to input details to purchase airtime
?>
        <div class="container">
            <h1>Purchase Airtime</h1>
            <form action="">
                <!-- Number to be recharged -->
                <label for="phone">Enter phone number you want to recharge</label>
                <input type="tel" name="receiving_phone" id="receiving_phone">
                
                <!-- Amount to be recharged -->
                <label for="email">Enter the amount in ZWL</label>
                <input type="number" name="amount_zwl" id="amount_zwl">
                
                <!-- Payment method selection-->
                <label for="payment_option">Select payment option</label>
                <input type="radio" name="Ecocash/NetOne" id="payment_option">
                <input type="radio" name="Visa/MasterCard" id="payment_option">
                
                <!-- EcoCash/OneMoney number that will pay -->
                <label for="name">Select payment option</label>
                <input type="tel" name="receiving_phone" id="receiving_phone">

                <!-- Confirm transaction -->
                <label for="name">Confirm Details</label>
                <input type="button" name="Confirm">
                <input type="button" name="Cancel">
            </form>
        </div>

    <?php

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
