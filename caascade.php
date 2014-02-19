<?php
/**
 * Plugin Name: Caascade
 * Plugin URI: http://wp.tetragy.com/caascade
 * Description: Instant Mathematical Computing for the Wordpress public
 * Version: 1.0
 * Author: Tetragy Limited
 * Author URI: https://caascade.com
 * License: GPLv2 or Later
 */

/*  Copyright 2014  Tetragy Limited  (email: admin@tetragy.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

# Adapted from http://ottopress.com/2009/wordpress-settings-api-tutorial/

add_action('admin_menu', 'plugin_admin_add_page');

function plugin_admin_add_page()
{
	add_options_page('Settings', 'Caascade', 'manage_options', 'plugin', 'caascade_plugin_settings_page');
}

function caascade_plugin_settings_page()
{ ?>
	<div class="wp-caascade-admin">
		<h2>Caascade Settings</h2>
		<p>Settings related to the Caascade plugin can be set here and will have a global effect on all Caascade shortcode. A <a href="https://caascade.com">Caascade.com</a> account is necessary to receive computational output.</p>
		<div>
			<form action="options.php" method="post">
				<?php settings_fields('caascade_plugin_settings'); ?>
				<?php do_settings_sections('caascade'); ?>
				<br/>
				<div class-"wp-caascade-submit">
					<input name="Submit" type="submit" value="<?php esc_attr_e('Save'); ?>" />
				</div>
			</form>
		</div>
	</div>
 
<?php }

add_action('admin_init', 'caascade_plugin_admin_init');

function caascade_plugin_admin_init()
{
	register_setting( 'caascade_plugin_settings', 'caascade_id', 'caascade_settings_validate' );
	add_settings_section('caascade_options', 'Numeric ID', 'caascade_section_text', 'caascade');
	add_settings_field('caascade_id', 'Caascade Numeric ID', 'caascade_setting_string', 'caascade', 'caascade_options');
}

function caascade_section_text()
{
	echo '<p>The Caascade <a href="https://caascade.com/user">account settings</a> will list your numeric ID. The ID listed here will be submitted with all Caascade requests. Whitelisting your server\'s IP address is also necessary to receive output.</p>';
}

function caascade_setting_string()
{
	$id = get_option('caascade_id');
	echo "<input id='caascade_id' name='caascade_id' size='10' type='text' value='$id' />";
}

function caascade_settings_validate($id)
{
	if(!is_numeric($id) || strlen($id) > 10)
	{
		$id = '';
	}
	return $id;
}


# Print form with Shortcode API
function caascade_func( $atts ) {
	extract( shortcode_atts( array(
		'com' => 'prime',
	), $atts ) );

	return '<div class="caascade">' . file_get_contents(__DIR__ . '/html/' . $com . '.html') . '</div>';
}

add_shortcode( 'caascade', 'caascade_func' );

add_action( 'init', 'caascade_script_enqueuer' );

function caascade_script_enqueuer() {
	wp_register_script("caascade_script", WP_PLUGIN_URL . '/caascade/caascade.js', array('jquery'), '1.0', true);
	wp_register_script("mathjax_script", "https://c328740.ssl.cf1.rackcdn.com/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML", array(), '1.0', false);
	wp_register_style("caascade_css", WP_PLUGIN_URL . '/caascade/caascade.css', array(), '1.0', 'all');
	wp_localize_script('caascade_script', 'caascadeAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'caascade_id' => get_option('caascade_id', '')));        

	wp_enqueue_script('mathjax_script');
	wp_enqueue_script('jquery');
	wp_enqueue_script('caascade_script');
	wp_enqueue_style('caascade_css');
}

add_action("wp_ajax_caascade_compute", "prefix_ajax_caascade_compute");
add_action("wp_ajax_nopriv_caascade_compute", "prefix_ajax_caascade_compute");

function prefix_ajax_caascade_compute() {

	$fields['id'] = $_REQUEST['id'];
	$fields['cmd'] = $_REQUEST['cmd'];
	$fields['arg0'] = $_REQUEST['arg0'];
	$fields['arg1'] = $_REQUEST['arg1'];
	$fields['arg2'] = $_REQUEST['arg2'];
	$fields['arg3'] = $_REQUEST['arg3'];
	$fields_string = '';
	foreach($fields as $key => $value)
	{
  	$fields_string .= $key . '=' . $value . '&';
	}
	$fields_string = rtrim($fields_string, '&');
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, 'https://route.tetragy.com/index.php?' . $fields_string);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	echo curl_exec($ch);
	curl_close($ch);
	die();
}

