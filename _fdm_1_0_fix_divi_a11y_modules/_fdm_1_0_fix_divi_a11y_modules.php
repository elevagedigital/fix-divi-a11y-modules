<?php
 /**
 * Plugin Name:Fix Divi A11y Modules 
 * Plugin URI:https://elevagedigital.com 
 * Description:Custom modules built with accessible code to replace standard Divi modules 
 * Version:1.0 
 * Author:Elevage Digital 
 * Author URI:https://diviplugins.com 
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html    
    Fix Divi A11y Modules is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version. 
    Fix Divi A11y Modules is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. 
    You should have received a copy of the GNU General Public License along with Fix Divi A11y Modules. If not, see https://www.gnu.org/licenses/gpl-2.0.html. 
 * */
    // Exit if accessed directly
    if (!defined("ABSPATH")) {
        exit;
    }
    
    // Include the modules
    function _fdm_1_0_fix_divi_a11y_modules_load_the_modules(){
        require_once 'modules/_fdm_1_0_157.php'; 
require_once 'modules/_fdm_1_0_187.php'; 

    }
    add_action("et_builder_ready", "_fdm_1_0_fix_divi_a11y_modules_load_the_modules"); 
    
    // Register styles and/or scripts
    function _fdm_1_0_fix_divi_a11y_modules_register_scripts_and_styles(){
        
        wp_enqueue_style('dmb-module-0-_fdm_1_0_fix_divi_a11y_modules', plugins_url('', __FILE__).'/css/_fdm_1_0_157.css', array(), '1.0'); 

           
    }
    add_action("wp_enqueue_scripts", "_fdm_1_0_fix_divi_a11y_modules_register_scripts_and_styles"); 
    
    // Remove partial compatibility mesaage
    if ( ! function_exists( 'dmbpc_add_to_head' ) ) {
				function dmbpc_add_to_head() {
					if ( is_user_logged_in() ) {
						echo '<style>.et-fb-modal__support-notice {display: none !important;}</style>';
					}
				}
				add_action( 'wp_head', 'dmbpc_add_to_head' );
				add_action( 'admin_head', 'dmbpc_add_to_head' );
			}

?>