<?php
/*
Plugin Name: Replace Admin Logo
Description: This plugin replaces the existing Admin Logo with another.
Version: 1.0
Author: Hüseyin Akturan
License: Mit
*/
?>

<?php function set_login_logo() { ?>
	<?php wp_enqueue_style('stylsheet', plugins_url( 'css/logo.css', __FILE__ ) );?>
<?php }?>
<?php
	add_action( 'login_enqueue_scripts', 'set_login_logo');
?>