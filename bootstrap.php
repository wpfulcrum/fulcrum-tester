<?php
/**
 * The bootstrap to launch the Fulcrum Tester plugin.
 *
 * @package         Fulcrum\Tester
 * @author          hellofromTonya
 * @license         MIT
 * @link            https://github.com/wpfulcrum/tester-plugin
 *
 * @wordpress-plugin
 * Plugin Name:     Fulcrum Tester Plugin
 * Plugin URI:      https://github.com/wpfulcrum/tester-plugin
 * Description:     A Fulcrum Add-on plugin to test Fulcrum's components.
 * Version:         3.0.0
 * Author:          hellofromTonya
 * Author URI:      https://github.com/wpfulcrum/tester-plugin
 * Text Domain:     fulcrum
 * Requires WP:     4.9
 * Requires PHP:    5.6
 */
namespace Fulcrum\Tester;

use Fulcrum\Config\ConfigFactory;

if (!defined('ABSPATH')) {
    wp_die("Oh, silly, there's nothing to see here.");
}

require_once __DIR__ . '/assets/vendor/autoload.php';

new Plugin(
    ConfigFactory::create( __DIR__ . '/config/plugin.php'),
    __FILE__
);
