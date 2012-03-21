<?php
/*
Plugin Name: Backup-n-Restore-Site
Plugin URI: http://www.kevin-funk.com
Description: Backup your site and database dump into a zip file, restore anytime.
Author: AB
Version: 0.1
Author URI: http://www.binnooh.com
*/
//register_activation_hook( __FILE__, 'BNRS_install' );
//register_deactivation_hook(__FILE__, 'BNRS_uninstall');
register_activation_hook( __FILE__, array( 'BNRS', 'activate_BNRS' ) );
register_deactivation_hook( __FILE__, array( 'BNRS', 'deactivate_BNRS' ) );
register_uninstall_hook( __FILE__, array( 'BNRS', 'uninstall_BNRS' ) );

//if(get_option('ezpz_ocb_set_cron') != 'off'){
//	if(wp_next_scheduled('ezpz_ocb_1time_cron')){
//		set_status('cron',"Next scheduled backup: " . wp_date(wp_next_scheduled('ezpz_ocb_1time_cron')) . " (One-time)");
//	} else {
//		set_status('cron',"Next scheduled backup: " . wp_date(wp_next_scheduled('ezpz_ocb_cron')));
//	}	
//} else {
//	set_status('cron', "Scheduled backups are turned off.");
//}
//function bot_admin_actions()
//{
//    add_options_page("Bot Counter", "Bot Counter", 1,
//"Bot-Counter", "bot_menu");
//}
// 
//add_action('admin_menu', 'bot_admin_actions');



?>
