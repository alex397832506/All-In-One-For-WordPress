<?php
/*
Plugin Name:All-In-One-For-WordPress
Plugin URI: https://github.com/alex397832506/All-In-One-For-WordPress
Description: 安装完WordPress之后你只需要这一个插件！
Version: 1.0.2
Author: Alex
Author URI: http://www.atalex.net
License: GNU GENERAL PUBLIC LICENSE
*/

/**
 * @package All-In-One-For-WordPress
 * @author Alex @link http://atalex.net
 * @since 1.0.1
 * @version 1.0.1
 */
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

	include_once 'updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
            'slug' => plugin_basename( __FILE__ ),
            'proper_folder_name' => 'Optimization-All-In-One-For-WordPress', // this is the name of the folder your plugin lives in
            'api_url' => 'https://api.github.com/repos/alex397832506/All-In-One-For-WordPress', // the GitHub API url of your GitHub repo
            'raw_url' => 'https://raw.github.com/alex397832506/All-In-One-For-WordPress/master', // the GitHub raw url of your GitHub repo
            'github_url' => 'https://github.com/alex397832506/All-In-One-For-WordPress', // the GitHub url of your GitHub repo
            'zip_url' => 'https://github.com/alex397832506/All-In-One-For-WordPress/zipball/master', // the zip url of the GitHub repo
            'sslverify' => true, 
            'requires' => '4.3.1',
            'tested' => '4.3.1', 
            'readme' => 'README.md', 
            'access_token' => '', 
            );
		new WP_GitHub_Updater( $config );

	}

}
