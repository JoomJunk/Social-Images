<?php 
/** 
* @package    JJ Social Images
* @author     JoomJunk
* @copyright  2011 - 2016 JoomJunk. All Rights Reserved
* @license    http://www.gnu.org/licenses/gpl-3.0.html
**/

// no direct access
defined('_JEXEC') or die('Restricted access'); 

$doc = JFactory::getDocument();
$doc->addStyleSheet(JUri::base() . 'modules/mod_socialimages/css/style.css');

$style = '.pretext p {'
		. 'text-align:' . $pretext_align . ';'
		. '}';

if ($layout == 'vertical')
{
	$style .= '.socialimages {'
			. 'width: 148px;'
			. 'padding: 0;'
			. '}';
}
else
{
	$style .= '.socialimages {'
			. 'width: 100%;'
			. 'padding: 20p 0 0 20px;'
			. '}';
}	

$doc->addStyleDeclaration($style);
?>

<div class="pretext">
	<p><?php echo $pretext; ?></p>
</div>

<div id="socialimages">
<?php if ($facebook == 1) { ?>
	<a target="_blank" href="<?php echo $facebook_link; ?>">
		<img src="<?php echo $module_base; ?>icons/facebook.png" width="64" height="64" alt="Facebook Logo" />
	</a>
<?php } ?>

<?php if ($twitter == 1) { ?>
	<a target="_blank" href="<?php echo $twitter_link; ?>">
		<img src="<?php echo $module_base; ?>icons/twitter.png" width="64" height="64" alt="Twitter Logo" />
	</a>
<?php } ?>

<?php if ($linkedin == 1) { ?>
	<a target="_blank" href="<?php echo $linkedin_link; ?>">
		<img src="<?php echo $module_base; ?>icons/linkedin.png" width="64" height="64" alt="Linkedin Logo" />
	</a>
<?php } ?>

<?php if ($myspace == 1) { ?>
	<a target="_blank" href="<?php echo $myspace_link; ?>">
		<img src="<?php echo $module_base; ?>icons/myspace.png" width="64" height="64" alt="MySpace Logo" />
	</a>
<?php } ?>

<?php if ($youtube == 1) { ?>
	<a target="_blank" href="<?php echo $youtube_link; ?>">
		<img src="<?php echo $module_base; ?>icons/youtube.png" width="64" height="64" alt="YouTube Logo" />
	</a>
<?php } ?>

<?php if ($google == 1) { ?>
	<a target="_blank" href="<?php echo $google_link; ?>">
		<img src="<?php echo $module_base; ?>icons/google.png" width="64" height="64" alt="Google Plus Logo" />
	</a>
<?php } ?>

<?php if ($flickr == 1) { ?>
	<a target="_blank" href="<?php echo $flickr_link; ?>">
		<img src="<?php echo $module_base; ?>icons/flickr.png" width="64" height="64" alt="Flickr Logo" />
	</a>
<?php } ?>

<?php if ($digg == 1) { ?>
	<a target="_blank" href="<?php echo $digg_link; ?>">
		<img src="<?php echo $module_base; ?>icons/digg.png" width="64" height="64" alt="Digg Logo" />
	</a>
<?php } ?>

<?php if ($rss == 1) { ?>
	<a target="_blank" href="<?php echo $rss_link; ?>">
		<img src="<?php echo $module_base; ?>icons/rss.png" width="64" height="64" alt="RSS Logo"/>
	</a>
<?php } ?>
</div>