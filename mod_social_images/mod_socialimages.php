<?php
/** 
* @package JJ Social Images
* @author JoomJunk
* @copyright	 2015 JoomJunk. All Rights Reserved
* @license http://www.gnu.org/licenses/gpl-3.0.html
**/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// init vars
$facebook		= $params->get('facebook', '1');
$twitter		= $params->get('twitter', '1');
$myspace		= $params->get('myspace', '1');
$youtube		= $params->get('youtube', '1');
$google			= $params->get('google', '1');
$flickr			= $params->get('flickr', '1');
$digg			= $params->get('digg', '1');
$rss			= $params->get('rss', '1');
$facebook_link	= $params->get('facebook_link');
$twitter_link	= $params->get('twitter_link');
$myspace_link	= $params->get('myspace_link');
$youtube_link	= $params->get('youtube_link');
$google_link	= $params->get('google_link');
$flickr_link	= $params->get('flickr_link');
$digg_link		= $params->get('digg_link');
$rss_link		= $params->get('rss_link');
$pretext		= $params->get('pretext');
$pretext_align 	= $params->get('pretext_align', 'left');
$layout 		= $params->get('layout', 'vertical');
$module_base	= JUri::base() . 'modules/mod_socialimages/';

//Include the layout file
require(JModuleHelper::getLayoutPath('mod_socialimages'));