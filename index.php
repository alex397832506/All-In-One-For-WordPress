<?php
/*
Plugin Name:All-In-One-For-WordPress
Plugin URI: https://github.com/alex397832506/All-In-One-For-WordPress
Description: 安装完WordPress之后你只需要这一个插件！
Version: 1.0.1
Author: Alex
Author URI: http://www.atalex.net
License: GNU GENERAL PUBLIC LICENSE
*/
?>

<?php
include_once('updater.php');
 if (is_admin()) { 
        $config = array(
            'slug' => plugin_basename( __FILE__ ),
            'proper_folder_name' => 'All-In-One-For-WordPress', // this is the name of the folder your plugin lives in
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
        new WP_GitHub_Updater($config);
    }
  ?>
