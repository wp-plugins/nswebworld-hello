<?php
/**
 * Plugin Name: Nswebworld Hello
 * Plugin URI: http://nswebworld.in
 * Description: This plugin for first launch.
 * Version: 1.0.0
 * Author: Nswebworld
 * Author URI: http://nswebworld.in
 * License: GPL2
 */
 
 
 add_action('admin_menu', 'nswebworld_hello');
 
 // action function for above hook
function nswebworld_hello() {
	add_menu_page(__('Nswebworld Hello','nswebworld_hello'), __('Nswebworld Hello','add-nswebworld'), 'Administrator', 'nswebworld_hello_test', 'nswebworld_hello_test');
}
function nswebworld_hello_test(){
	
		
		
		
		
?>
	
<h1>Hello Plugin From Nswebworld</h1>	
<?php		
		
}