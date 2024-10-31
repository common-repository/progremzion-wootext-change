<?php
/**
 * Plugin Name
 *
 * @package     PluginPackage
 * @author      Progremzion
 * @copyright   2018 Sanket
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Progremzion WooText change
 * Plugin URI:  https://wordpress.org/plugins/woo-textchange/
 * Description: Replace Out Of Stock to Sold
 * Version:     1.0.0
 * Author:      Progremzion
 * Author URI:  http://progremzion.com
 * Text Domain: progremzion
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

//Replace Text to Sold
add_filter('woocommerce_get_availability', 'progremzion_filter_func');

function progremzion_filter_func($availability)
{
	$availability['availability'] = str_ireplace('Out of stock', 'Sold', $availability['availability']);
	return $availability;
}
?>