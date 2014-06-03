<?php 
/** 
* @package JJ Social Images
* @author JoomJunk
* @copyright	 2012 JoomJunk. All Rights Reserved
* @license http://www.gnu.org/licenses/gpl-3.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access'); 

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_socialimages/css/style.css');
$style ='.pretext p {'
		. 'text-align:' . $params->get('pretext_align') . ';'
		. '}';
$document->addStyleDeclaration($style);

?>

<div class="pretext"><p><?php echo $params->get('pretext'); ?></p></div>
<div id="socialimages">
<?php if ($facebook==1) { ?>
<a target="_blank" href="<?php echo $params->get('facebook_link'); ?>">
<img src="<?php echo $module_base; ?>icons/facebook.png" width="64" height="64" alt="Facebook Logo" />
</a>
<?php } ?>

<?php if ($twitter==1) { ?>
<a target="_blank" href="<?php echo $params->get('twitter_link'); ?>">
<img src="<?php echo $module_base; ?>icons/twitter.png" width="64" height="64" alt="Twitter Logo" />
</a>
<?php } ?>

<?php if ($myspace==1) { ?>
<a target="_blank" href="<?php echo $params->get('myspace_link'); ?>">
<img src="<?php echo $module_base; ?>icons/myspace.png" width="64" height="64" alt="MySpace Logo" />
</a>
<?php } ?>

<?php if ($youtube==1) { ?>
<a target="_blank" href="<?php echo $params->get('youtube_link'); ?>">
<img src="<?php echo $module_base; ?>icons/youtube.png" width="64" height="64" alt="YouTube Logo" />
</a>
<?php } ?>

<?php if ($google==1) { ?>
<a target="_blank" href="<?php echo $params->get('google_link'); ?>">
<img src="<?php echo $module_base; ?>icons/google.png" width="64" height="64" alt="Google Plus Logo" />
</a>
<?php } ?>

<?php if ($flickr==1) { ?>
<a target="_blank" href="<?php echo $params->get('flickr_link'); ?>">
<img src="<?php echo $module_base; ?>icons/flickr.png" width="64" height="64" alt="Flickr Logo" />
</a>
<?php } ?>

<?php if ($digg==1) { ?>
<a target="_blank" href="<?php echo $params->get('digg_link'); ?>">
<img src="<?php echo $module_base; ?>icons/digg.png" width="64" height="64" alt="Digg Logo" />
</a>
<?php } ?>

<?php if ($rss==1) { ?>
<a target="_blank" href="<?php echo $params->get('rss_link'); ?>">
<img src="<?php echo $module_base; ?>icons/rss.png" width="64" height="64" alt="RSS Logo"/>
</a>
<?php } ?>

</div>