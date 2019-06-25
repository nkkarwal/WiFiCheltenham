<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h');


?>



<div class="s5_masonwrapinner <?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ }else {?>noimage<?php } ?>">

<?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ ?>
<div class="s5_masonry_img_wrap">
	<a href="<?php echo $item->link; ?>">
	
	
	<?php if($params->get('imagediv') == 1){ ?>
	<div style="<?php if ($article_height != "") { ?>height:<?php echo $article_height; ?>px;<?php } ?>background-image: url(<?php if (strpos($images->image_intro,'http') === false){ echo JURI::root(); }?><?php echo $images->image_intro; ?>) !important;
    background-size: cover;    background-attachment: scroll !important;    background-repeat: no-repeat !important;    background-position: top center;"></div>
	<?php } ?>
	
	<?php if($params->get('imagediv') == 0){ ?>
	<img src="<?php if (strpos($images->image_intro,'http') === false){ echo JURI::root(); }?><?php echo $images->image_intro; ?>" alt="<?php echo $images->image_intro_alt; ?>"/>
	<?php } ?>
	
	</a>
</div>
<?php } ?>

<?php if($params->get('showonhover') == 2){ ?>
	<?php if ($params->get('showcategory')) : ?>
	<div class="s5_masoncat">
	<?php
	$db = JFactory::getDbo();
	$id = $item->catid;
	$db->setQuery("SELECT cat.title FROM #__categories cat WHERE cat.id='$id'");
	$category_title = $db->loadResult();
	echo "$category_title"; ?>
	</div>
	<?php endif; ?>

	<?php if ($params->get('showdate')) : ?>
	<div class="s5_masondate">
	<?php echo JHtml::_('date',$item->created, JText::_('DATE_FORMAT_LC3')); ?>
	</div>
	<?php endif; ?>
<?php } ?>

<div class="s5_mason_abi_wrap <?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ }else {?>noimage<?php } ?>">
<div <?php if ($article_height != "") { ?> style="height:<?php echo $article_height; ?>px;" <?php } ?>class="s5_mason_abi_wrap_inner <?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ }else {?>noimage<?php } ?>">
<?php if ($params->get('item_title')) : ?>

	<?php if($params->get('showonhover') == 1 || $params->get('showonhover') == 0){ ?>
	
	<?php if ($params->get('showcategory')) : ?>
	<div class="s5_masoncat">
	<?php
	$db = JFactory::getDbo();
	$id = $item->catid;
	$db->setQuery("SELECT cat.title FROM #__categories cat WHERE cat.id='$id'");
	$category_title = $db->loadResult();
	echo "$category_title"; ?>
	</div>
	<?php endif; ?>
	
	<?php if ($params->get('showdate')) : ?>
	<div class="s5_masondate">
	<?php echo JHtml::_('date',$item->created, JText::_('DATE_FORMAT_LC3')); ?>
	</div>
	<?php endif; ?>
	<?php } ?>

	<<?php echo $item_heading; ?> class="s5_masonry_articletitle <?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($params->get('link_titles') && $item->link != '') : ?>
		<a href="<?php echo $item->link;?>">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</<?php echo $item_heading; ?>>

<?php endif; ?>


<?php echo $item->beforeDisplayContent; ?>


<?php if ($params->get('introtext')) : ?>
<div class="s5_mason_it_wrap <?php $images  = json_decode($item->images);
if($images->image_intro && $params->get('image') == 1){ }else {?>noimage<?php } ?>">
<?php echo $item->introtext; ?>
</div>
<?php endif; ?>

<?php if ($params->get('showhits')) : ?>
<div class="s5_mason_hits_wrap">
<?php echo JText::_( 'MOD_S5_MASONRY_FIELD_HITS' ); ?> <?php echo $item->hits; ?>
</div>
<?php endif; ?>


<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
	echo '<p class="readmore s5masonrymod"><a href="'.$item->link.'">'.JText::_( 'MOD_S5_MASONRY_READMORE_LINK' ).'</a></p>';
endif; ?>
</div>
</div>

</div>
