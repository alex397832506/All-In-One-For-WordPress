<?php
/*
Plugin Name:All-In-One-For-WordPress
Plugin URI: 插件的介绍或更新地址
Description: 安装完WordPress之后你只需要这一个插件！
Version: 1.0
Author: Alex
Author URI: http://www.atalex.net
License: GNU GENERAL PUBLIC LICENSE
*/
?>

<?php
/*  Copyright 2015  Crate By Alex (397832506@qq.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
include_once('updater.php');
 if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
        $config = array(
            'slug' => plugin_basename(index.php), // this is the slug of your plugin
            'proper_folder_name' => 'All-In-One-For-WordPress', // this is the name of the folder your plugin lives in
            'api_url' => 'https://api.github.com/repos/alex397832506/All-In-One-For-WordPress', // the GitHub API url of your GitHub repo
            'raw_url' => 'https://raw.github.com/alex397832506/All-In-One-For-WordPress/master', // the GitHub raw url of your GitHub repo
            'github_url' => 'https://github.com/alex397832506/All-In-One-For-WordPress', // the GitHub url of your GitHub repo
            'zip_url' => 'https://github.com/alex397832506/All-In-One-For-WordPress/zipball/master', // the zip url of the GitHub repo
            'sslverify' => true, // whether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
            'requires' => '4.3.1', // which version of WordPress does your plugin require?
            'tested' => '4.3.1', // which version of WordPress is your plugin tested up to?
            'readme' => 'README.md', // which file to use as the readme for the version number
            'access_token' => '', // Access private repositories by authorizing under Appearance > GitHub Updates when this example plugin is installed
        );
        new WP_GitHub_Updater($config);
    }
  ?>
