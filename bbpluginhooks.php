<?php
/**
* Plugin Name: Bigboss all in one facebook social widget
* Plugin URI: http://wordpress.org/plugins/bigboss-all-in-one-facebook-social-widget
* Description: bigboss all in one facebook social widget plugin allow you to add Facebook follow me button - showing facebook like box Facebook post from page - facebook web url  share button - facebook web url like button - facebook web url Send Button - facebook Embeded post / video  and facebook  comments in Widget area in your wordpress site -easy to use and customize.All facebook Social plugin in one bigboss facebook plugin . 
* Version: 4.0.1
* Author: Bulbul bigboss
* Author URI: https://www.facebook.com/bulbulbigbossbd
* Tags:facebook-like-box,bb-facebook-likebox, advance-facebook-like-box,bigboss-facebook-follow-button,facebook-send-button,facebook-comments,
  facebook-follow-button-in-widget,facebook-post-in-widget,Facebook-embeded-post,facebook-commentor,all-in-one-facebook-plugin
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


//

include_once('bbfblike.php');
include_once('bbfbfollow.php');
include_once('bbweblinklike.php');
include_once('bbsendweb.php');
include_once('bbembededpost.php');
include_once('bigbossfbcomment.php');


function registerBigbossFacebook(){
	register_widget('BigbossFacebook');
	register_widget('BigbossFbfollow');
	register_widget('BigbossWeblinklikeShare');
	register_widget('BigbosssendWeblink');
	register_widget('BigbossembededPost');
	register_widget('BigbossFbcomment');
	
	}
add_action('widgets_init','registerBigbossFacebook');
	
