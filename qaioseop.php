<?php
/**
 * Plugin Name: All in One SEO Pack & qTranslate-X
 * Plugin URI: https://wordpress.org/plugins/all-in-one-seo-pack-qtranslate-x
 * Description: Enables multilingual framework for plugin "All in One SEO Pack".
 * Version: 1.0
 * Author: qTranslate Team
 * Author URI: http://qtranslatexteam.wordpress.com/about
 * License: GPL2
 * Tags: multilingual, multi, language, translation, qTranslate-X, All in One SEO Pack & qTranslate-X
 * Author e-mail: qTranslateTeam@gmail.com
 */
if(!defined('ABSPATH'))exit;

define('QAIOSEOP_VERSION','1.0');

add_filter('qtranslate_compatibility', 'qaioseop_qtrans_compatibility');
function qaioseop_qtrans_compatibility($compatibility){ return true; }

function qaioseop_init_language($url_info)
{
	if($url_info['doing_front_end']) {
		require_once(dirname(__FILE__)."/qaioseop-front.php");
	}else{
		require_once(dirname(__FILE__)."/qaioseop-admin.php");
	}
}
add_action('qtranslate_init_language','qaioseop_init_language');

?>
