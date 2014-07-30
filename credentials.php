<?php
/**
 * Plugin Name: Credentials
 * Plugin URI: 
 * Description: Lists EHP's credentials
 * Version: 1.0
 * Author: Alex McGourty
 * Author URI: 
 * License: GLP2
 */

 /*  Copyright 2014  Alex McGourty  (email : mcgourty.alex@gmail.com)

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

define('CREDS_PATH', plugin_dir_path( __FILE__ ) );

// Widget functions page
require_once( CREDS_PATH . '/creds_content.php' );

// Main dashboard class
class creds {
    
    // Constructor adds the action
    function __construct() {
        add_action( 'wp_dashboard_setup', array( $this, 'add_credentials_widget' ) );
    }

    // Callback function to add widget to dashboard
    function add_credentials_widget() {
        wp_add_dashboard_widget(
                'credentials',
                'EHP Google Analytics Credentials',
                'credentials_widget_content');
    }

}
 
// Create the class
$dash = new creds();
?>