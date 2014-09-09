<?php
/**
 * Plugin Name: Caascade
 * Plugin URI: http://wp.tetragy.com
 * Description: Instant Mathematical Computing for the Wordpress public
 * Version: 1.3.2
 * Author: pmagunia
 * Author URI: https://tetragy.com
 * License: GPLv2 or Later
 */

/*  Copyright 2014  Tetragy Limited

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

# settings menu link
add_action('admin_menu', 'caascade_admin_add_page');
function caascade_admin_add_page()
{
  add_options_page('Settings', 'Caascade', 'manage_options', 'Caascade', 'caascade_plugin_settings_page');
}

# plugin page settings link
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'caascade_plugin_settings_link' );
function caascade_plugin_settings_link($links)
{ 
  $settings_link = '<a href="options-general.php?page=Caascade">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}

function caascade_plugin_settings_page()
{ ?>
  <div class="wrap">
    <div class="wp-caascade-admin">
      <h2>Caascade Settings</h2>
      <p>Settings related to the Caascade plugin can be modified here and will have a global effect on all Caascade shortcode.</p><p>A Caascade account is necessary and may be obtained from <a href="https://math.tetragy.com">Tetragy</a>.</p>
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
  </div>
  <?php }

add_action('admin_init', 'caascade_plugin_admin_init');

function caascade_plugin_admin_init()
{
  register_setting( 'caascade_plugin_settings', 'caascade_id', 'caascade_settings_validate');
  register_setting( 'caascade_plugin_settings', 'caascade_router', 'caascade_settings_router_validate');
  register_setting( 'caascade_plugin_settings', 'caascade_recaptcha_publickey', 'caascade_recaptcha_publickey_validate');
  register_setting( 'caascade_plugin_settings', 'caascade_recaptcha_privatekey', 'caascade_recaptcha_privatekey_validate');
  register_setting( 'caascade_plugin_settings', 'caascade_recaptcha_theme', 'caascade_recaptcha_theme_validate');
  add_settings_section('caascade_options', 'Caascade', 'caascade_section_text', 'caascade');
  add_settings_section('caascade_recaptcha_options', 'reCaptcha', 'caascade_recaptcha_text', 'caascade');
  add_settings_field('caascade_id', 'Caascade Numeric ID', 'caascade_setting_string', 'caascade', 'caascade_options');
  add_settings_field('caascade_router', 'Caascade Router', 'caascade_setting_router', 'caascade', 'caascade_options');
  add_settings_field('caascade_recaptcha_publickey', 'reCaptcha Public Key', 'caascade_setting_recaptcha_publickey', 'caascade', 'caascade_recaptcha_options');
  add_settings_field('caascade_recaptcha_privatekey', 'reCaptcha Private Key', 'caascade_setting_recaptcha_privatekey', 'caascade', 'caascade_recaptcha_options');
  add_settings_field('caascade_recaptcha_theme', 'reCaptcha Theme', 'caascade_setting_recaptcha_theme', 'caascade', 'caascade_recaptcha_options');
}

function caascade_section_text()
{
  echo '<p>Your Caascade settings page will list your numeric ID. The ID listed here will be submitted with all Caascade requests.</p>';
}

function caascade_recaptcha_text()
{
  echo '<p>reCaptch is a Google service to help prevent spam submissions and abuse. Entering a public and private key will activite reCaptcha for all Wordpress Caascade widgets.</p>';
}

function caascade_setting_string()
{
  $id = get_option('caascade_id');
  echo "<input id='caascade_id' name='caascade_id' size='10' type='text' value='$id' />";
}

function caascade_setting_router()
{
  $router = get_option('caascade_router', 'https://route.tetragy.com');
  echo "<input id='caascade_router' name='caascade_router' size='30' type='text' value='$router' />";
}

function caascade_setting_recaptcha_publickey()
{
  $publickey = get_option('caascade_recaptcha_publickey');
  echo "<input id='caascade_recaptcha_publickey' name='caascade_recaptcha_publickey' size='40' type='text' value='$publickey' />";
}

function caascade_setting_recaptcha_theme()
{
	$selected = ' selected="selected" ';
  $theme = get_option('caascade_recaptcha_theme');
  echo "<select id='caascade_recaptcha_theme' name='caascade_recaptcha_theme'/><option" . ($theme == 'red' ? $selected : ' ') . " value='red'>Red</option><option"  . ($theme == 'white' ? $selected : ' ') . "value='white'>White</option><option"  . ($theme == 'blackglass' ? $selected : ' ') . "value='blackglass'>Blackglass</option><option" . ($theme == 'clean' ? $selected : ' ') . "value='clean'>Clean</option></select>";
}

function caascade_setting_recaptcha_privatekey()
{
  $privatekey = get_option('caascade_recaptcha_privatekey');
  echo "<input id='caascade_recaptcha_privatekey' name='caascade_recaptcha_privatekey' size='40' type='text' value='$privatekey' />";
}

function caascade_settings_validate($id)
{
  if(!is_numeric($id) || strlen($id) > 10)
  {
    $id = '';
  }
  return $id;
}

function caascade_settings_router_validate($router)
{
  if(strlen($router) > 100)
  {
    $router = 'https://route.tetragy.com';
  }
  return $router;
}

function caascade_recaptcha_publickey_validate($publickey)
{
  if(strlen($publickey) > 200)
  {
    $publickey = '';
  }
  return $publickey;
}

function caascade_recaptcha_privatekey_validate($privatekey)
{
  if(strlen($privatekey) > 200)
  {
    $privatekey = '';
  }
  return $privatekey;
}

function caascade_recaptcha_theme_validate($theme)
{
  $opts = array('red', 'white', 'blackglass', 'clean');
	if(!in_array($theme, $opts))
  {
    $theme = '';
  }
  return $theme;
}

# Print form with Shortcode API
function caascade_func( $atts ) {
  extract( shortcode_atts( array(
    'com' => 'prime',
  ), $atts ) );

	$dialog = '<div class="caascade-dialog"><div class="caascade-waiting-container"><div class="caascade-waiting">Computing...</div></div><div class="caascade-output-container"><div class="caascade-output"></div></div></div>';

  # if users wants to override packaged file
  if(is_file(__DIR__ . '/html/override/' . $com . '.html'))
  {
    $markup = file_get_contents(__DIR__ . '/html/override/' . $com . '.html');
  }
  else
  {
     $markup = file_get_contents(__DIR__ . '/html/' . $com . '.html');
  }
  $publickey = get_option('caascade_recaptcha_publickey');
  $theme = get_option('caascade_recaptcha_theme');
  $recap = '';
  if(strlen($publickey))
  {
    require_once 'recaptchalib.php';
    # support multiple reCaptcha
    $recap = '<div class="caascade-recaptcha" id="caascade-recaptcha-' . rand(10000,99999) . '"></div>';
  }
  $markup = '<div class="caascade-cp">' . $markup . '</div>';
  return '<div class="caascade" id="caascade-' . $com .'">' . $markup . $dialog . $recap . '</div>';
}

add_shortcode( 'caascade', 'caascade_func' );

add_action( 'init', 'caascade_script_enqueuer' );

function caascade_script_enqueuer() {
  wp_register_script("recaptcha_script", "http://www.google.com/recaptcha/api/js/recaptcha_ajax.js", array(), '1.3.2', false);
  wp_register_script("mathjax_script", "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML", array(), '1.3.2', false);
  wp_register_script("caascade_script", WP_PLUGIN_URL . '/caascade/caascade.js', array('jquery', 'mathjax_script'), '1.3.2', true);
  wp_register_style("caascade_css", WP_PLUGIN_URL . '/caascade/caascade.css', array(), '1.3.2', 'all');
  wp_localize_script('caascade_script', 'caascadeAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'recaptcha_pubkey' => get_option('caascade_recaptcha_publickey', ''), 'recaptcha_theme' => get_option('caascade_recaptcha_theme', 'red'), 'caascade_id' => get_option('caascade_id', '')));        

  wp_enqueue_script('recaptcha_script');
  wp_enqueue_script('mathjax_script');
  wp_enqueue_script('caascade_script');
  wp_enqueue_style('caascade_css');
}

add_action("wp_ajax_caascade_compute", "prefix_ajax_caascade_compute");
add_action("wp_ajax_nopriv_caascade_compute", "prefix_ajax_caascade_compute");

function prefix_ajax_caascade_compute() {

  require_once('recaptchalib.php');
  $privatekey = get_option('caascade_recaptcha_privatekey', '');
  if(strlen($privatekey))
  {
    $resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_REQUEST["recaptcha_challenge_field"], $_REQUEST["recaptcha_response_field"]);
    if(!$resp->is_valid)
    {
      echo '{"input":"","output":"The reCAPTCHA wasn\'t entered correctly. Go back and try it again.","pdf":""}';
      die();
    }
  }

  $fields['id'] = $_REQUEST['id'];
  $fields['cmd'] = $_REQUEST['cmd'];
  $fields['pdf'] = urlencode($_REQUEST['pdf']);
  $fields['arg0'] = urlencode($_REQUEST['arg0']);
  $fields['arg1'] = urlencode($_REQUEST['arg1']);
  $fields['arg2'] = urlencode($_REQUEST['arg2']);
  $fields['arg3'] = urlencode($_REQUEST['arg3']);
  $fields['arg4'] = urlencode($_REQUEST['arg4']);
  $fields['arg5'] = urlencode($_REQUEST['arg5']);
  $fields['arg6'] = urlencode($_REQUEST['arg6']);
  $fields_string = '';
  foreach($fields as $key => $value)
  {
    $fields_string .= $key . '=' . $value . '&';
  }
  $fields_string = rtrim($fields_string, '&');
  echo file_get_contents(get_option('caascade_router', 'https://route.tetragy.com') . '/index.php?' . $fields_string);
  die();
}

