<?php

/**

 * @package		Joomla.Site

 * @subpackage	mod_articles_news

 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;

$app = JFactory::getApplication();

//$uri = JFactory::getURI();
$uri = JUri::getInstance();

$absolute_url = $uri->toString();

$catUrl		  = $absolute_url;

$findme   = '?';

//$absolute_url = JURI::root();

$pos = strpos($absolute_url, $findme);

// The !== operator can also be used.  Using != would not work as expected

// because the position of 'a' is 0. The statement (0 != false) evaluates

// to false.

if ($pos !== false) {

	$absolute_url .= 'index.php&ajaxload=true';

} else {

	$absolute_url .= '/?ajaxload=true';

}





?>





<?php if ($pretext != "") { ?>

<div class="s5_masonry_pretext">

<br />

<?php echo $pretext; ?>

<br /><br />

</div>

<?php } ?>



<div id="s5_masonry_navwrap">



<?php if ($params->get('categoriesfend')) : ?>

	<ul class="s5_masonry_articles" id="s5_masonry_articles">

	<?php $s5_masonry_counter = 1; foreach($allcats as $oncat){ ?>

	<li<?php if ($s5_masonry_counter == 1) { ?> class="s5_masonry_active"<?php } else { ?> class="s5_masonry_inactive"<?php } ?>>

	<a onclick="CatArticle('<?php echo $oncat->id ?>');s5_mason_active_class(this)" href="javascript:void(0);" ><?php echo $oncat->title; ?></a>

	</li>

	<?php 

	$s5_masonry_counter = $s5_masonry_counter + 1;

	} ?>

	</ul>

<?php endif; ?>



<div style="clear:both"></div>

</div>





<div id="s5_masonry_form_outer_wrap">

<form method="post" name="s5masonmod" class="s5masonmod_form" id="s5masonmod<?php echo $module->id; ?>">

<div id="s5_masondisplay_container" class="<?php if($articlewidth == 6){ ?>s5_masonry_50width <?php } ?><?php if($articlewidth == 5){ ?>s5_masonry_33width <?php } ?><?php if($articlewidth == 4){ ?>s5_masonry_25width <?php } ?><?php if($articlewidth == 3){ ?>s5_masonry_20width <?php } ?><?php if($articlewidth == 2){ ?>fullwidth <?php } ?><?php if($params->get('showonhover') == 2){ ?>s5_masonry_overlay <?php } ?><?php if($params->get('showonhover') == 1){ ?>s5_masonry_hover <?php } ?>js-masonry ajaxdiv"   data-masonry-options='{ "columnWidth": 0, "itemSelector": ".item" }'>

<?php

//if(JRequest::getVar('ajaxload'))
if($app->input->get('ajaxload'))

	ob_clean();

?>

<?php

//$myclasscount = JRequest::getVar('count');
//$loadmore = JRequest::getVar('loadmore');
$myclasscount = $app->input->get('count');
$loadmore = $app->input->get('loadmore');



$a = 1;

$counman = count($list) - $loadmore;

foreach ($list as $item) :



	//if(JRequest::getVar('ajaxload') && (JRequest::getVar('loadmore') || JRequest::getVar('catid') !='')){
	if($app->input->get('ajaxload') && ($app->input->get('loadmore') || $app->input->get('catid') !='')){	
		
		

		

		

		if($a > $counman){

		

			if($a == 1 && $introarticle == "yes") { 

			$classadd = 'introfirst';

		} else {

			$classadd = 'item newswrap';}

		

	

			

			

		} elseif($app->input->get('loadmore') =='' && $app->input->get('catid') !=''){

		

				if($a == 1 && $introarticle == "yes") { 

			$classadd = 'introfirst';

				} else {

			$classadd = 'item newswrap';}

		

	

			



		}else{

		

		if($a == 1 && $introarticle == "yes") { 

			$classadd = 'introfirst';

		} else {

			$classadd = 'item fadein';}

			

			

		}

	}else{

	

		

	

		if($a == 1 && $introarticle == "yes") { 

			$classadd = 'introfirst';

		} else {

			$classadd = 'item fadein';}

		

		

		

	}

	

	

	?>

	

	

	<?php if($a == 1 && $introarticle == "yes") { ?>

	<div class="s5_m_introarticle fadein">

		<div class="firstitem">

			<?php require JModuleHelper::getLayoutPath('mod_s5_masonry', '_item'); ?>

		</div>

	</div>

	<div class="s5_m_articles">

	<?php } 

	

	if($a >= 2 && $introarticle == "yes") { ?>

	

	<div class="<?php echo $classadd; ?>">

	<?php require JModuleHelper::getLayoutPath('mod_s5_masonry', '_item'); ?>

	</div>

	

	<?php }



	if( $introarticle != "yes") { ?>

	<div class="<?php echo $classadd; ?>">

	<?php require JModuleHelper::getLayoutPath('mod_s5_masonry', '_item'); ?>

	</div>	

	<?php } ?>



<?php

 $a++; endforeach;

?>

 

<?php if($introarticle == "yes") { ?>

 </div>

<?php } ?>



 

<script type="text/javascript">

  jQuery(document).ready(function() {

  	Total = '<?php echo $articleCount; ?>';

  	limitstart = "<?php echo $app->input->get('limitstart'); ?>";

  	if(parseInt(limitstart) >= parseInt(Total)){

		jQuery('#s5_loadmoreId').css('display', 'none');

		document.getElementById('scrool').value = 1;

	}else{

		jQuery('#s5_loadmoreId').css('display', 'block');

		document.getElementById('scrool').value = 0;

	}

});

var s5_masondisplay_container = document.querySelector('#s5_masondisplay_container');





jQuery('img',s5_masondisplay_container).each(function(i,d){

        jQuery(d).load(function(){

            var msnry = new Masonry( s5_masondisplay_container, {

          // options

          columnWidth: 0,

          itemSelector: '.item'

            });

        });

});



</script>

<?php

if($app->input->get('ajaxload')){

	ob_get_contents();exit;

}

?>







</div>

<div style="clear:both;"></div>

<div id="s5_masonload_wrap"></div>

<input type="hidden" name="count" id="count" value="<?php echo $params->get('count'); ?>">

<input type="hidden" name="catid" id="catid" value="0">

<input type="hidden" name="scrool" id="scrool" value="0">

<input type="hidden" name="limitstart" id="limitstart" value="<?php echo $params->get('limitstart', $params->get('load_more_articles')); ?>">



<?php if($params->get('showhide') == 1 && $params->get('count') < $articleCount){ ?>

<div class="s5_mason_loadbutton" id="s5_loadmoreId">

<button type="button" id="s5_mason_load_more" class="button" name="s5_mason_load_more" onclick="News_ajaxloadmore();"><?php echo JText::_( 'MOD_S5_MASONRY_FIELD_LOADMORE' ); ?></button>

</div>

<?php } ?>



</form>



</div>



<?php if($params->get('showhide') == 1){ ?>

<script>

	function News_ajaxloadmore(){

		cat = document.getElementById('catid').value;

		var defaultlimit = '<?php echo $params->get("load_more_articles"); ?>';

		var firstlimit = '<?php echo $params->get("count"); ?>';

		if(document.getElementById('limitstart').value == defaultlimit){

			var limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(firstlimit) ;

		}else{

			var limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(defaultlimit) ;

		}

		document.getElementById('limitstart').value = limitstart;

		var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';

		jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');

		jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');

		jQuery.ajax({

			url: ajaxurl+"&limitstart_masony="+limitstart+"&catid="+cat+"&count="+firstlimit+"&loadmore="+defaultlimit,

			success: function(data) {

				jQuery('#s5_masonload_loading').remove();



				 jQuery( ".ajaxdiv").html(data );

				// check to hidden the loadmore button again.
				if(parseInt(limitstart) >= parseInt(Total)){

					jQuery('#s5_loadmoreId').css('display', 'none');

					document.getElementById('scrool').value = 1;

				}else{

					jQuery('#s5_loadmoreId').css('display', 'block');

					document.getElementById('scrool').value = 0;

				}
			 }

		 });

	}

</script>

<?php } ?>

<?php if($params->get('showhide') == 2){ ?>

<script type="text/javascript">

  jQuery(document).ready(function() {

  		var windowHeight = jQuery(window).height();

  		var currentDocHeight = jQuery(document).height();

		var defaultlimit = '<?php echo $params->get("load_more_articles"); ?>';

		var firstlimit = '<?php echo $params->get("count"); ?>';

		var inprogress = 0;

		jQuery(window).scroll(function(event){

			if  ((jQuery(window).scrollTop() >= (jQuery(document).height() - windowHeight - 400 )) && inprogress == 0 && document.getElementById('scrool').value == 0){ //jQuery

  				inprogress = 1;

				if(document.getElementById('limitstart').value == defaultlimit){

						limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(firstlimit) ;

				}else{

						limitstart 	 = parseInt(document.getElementById('limitstart').value) + parseInt(defaultlimit) ;

				}

				document.getElementById('limitstart').value = limitstart;

				cat = document.getElementById('catid').value;

				jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');

				jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');

				var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';

				jQuery.ajax({

					url: ajaxurl+"&limitstart_masony="+limitstart+"&catid="+cat+"&count="+firstlimit+"&loadmore="+defaultlimit,

					async : false,

					success: function(data) {

					 	inprogress = 0;

					 	jQuery('#s5_masonload_loading').remove();

						 jQuery( ".ajaxdiv").html(data );

						// check to hidden the loadmore button again.
						if(parseInt(limitstart) >= parseInt(Total)){

							jQuery('#s5_loadmoreId').css('display', 'none');

							document.getElementById('scrool').value = 1;

						}else{

							jQuery('#s5_loadmoreId').css('display', 'block');

							document.getElementById('scrool').value = 0;

						}
						 return false;

					 }

				 });

	      	}

	    });

});

</script>

<?php } ?>

<script>



	function CatArticle(cat){

		document.getElementById('catid').value = cat;

		var limitstart = '<?php echo $params->get("count"); ?>';

		document.getElementById('limitstart').value = limitstart;

		var ajaxurl = '<?php echo JRoute::_($absolute_url); ?>';

		jQuery('#s5_masonload_wrap').append('<div id="s5_masonload_loading"></div>');

		jQuery('#s5_masonload_loading').html('<div id="s5_loading_inner"></div>');

		jQuery.ajax({

			url: ajaxurl+"&limitstart_masony="+limitstart+"&catid="+cat+"&count="+limitstart,

			//url: ajaxurl+"&catid="+cat+"&count="+limitstart,

			success: function(data) {

				jQuery('#s5_masonload_loading').remove();

				jQuery( ".ajaxdiv").html(data );

				// check to hidden the loadmore button again.
				if(parseInt(limitstart) >= parseInt(Total)){

					jQuery('#s5_loadmoreId').css('display', 'none');

					document.getElementById('scrool').value = 1;

				}else{

					jQuery('#s5_loadmoreId').css('display', 'block');

					document.getElementById('scrool').value = 0;

				}
			}

		 });



	}



	<?php if($introarticle == "yes") { ?>	

	// Sets padding for intro on AJAX load, runs every time AJAX is loaded

	jQuery( document ).ajaxComplete(function( event,request, settings ) {

		var introartheight2;

		introartheight2 = jQuery(".s5_m_articles").height();

		jQuery("#s5_masondisplay_container").css("padding-bottom", introartheight2 + 'px');

		});	

	<?php } ?>		

	

	<?php if($introarticle == "yes") { ?>

	// Sets padding for intro on page load, this only runs once

		jQuery(window).load(function(){

				var introartheight;

				introartheight = jQuery(".s5_m_articles").height();

				document.getElementById("s5_masondisplay_container").style.paddingBottom = introartheight + 'px';

			});	

	<?php } ?>	

</script>

<?php if($introarticle == "yes") { ?>	

<style>

#s5_masondisplay_container .item {position: relative !important;float: left;left: auto !important;top: auto !important;}

</style>	

<?php } ?>	