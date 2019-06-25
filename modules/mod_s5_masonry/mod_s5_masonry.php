<?php

/**

 * @package		Joomla.Site

 * @subpackage	mod_articles_news

 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;



// Include the syndicate functions only once

require_once dirname(__FILE__).'/helper.php';





$list            = mods5MasonryHelper::getList($params);

$articleCount    = mods5MasonryHelper::getListCount($params);

$allcats         = mods5MasonryHelper::getCategory($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$doc 			 = JFactory::getDocument();

$articlewidth	 = $params->get( 'articlewidth' );

$showoverlay	 = $params->get( 'showoverlay' );

$article_height	 = $params->get( 'article_height' );

$pretext	 = $params->get( 'pretext' );






$introarticle = 'no';
if($params->get('articlewidth') == 1){ $introarticle = "yes";}




/*  Add masonry js  */

$doc->addScript( 'modules/mod_s5_masonry/js/masonry.pkgd.min.js' );

$doc->addScript( 'modules/mod_s5_masonry/js/masonry.pkgd.js' );

?>





<?php

/*  Add masonry css  */

$doc->addStyleSheet("modules/mod_s5_masonry/css/style.css");



require JModuleHelper::getLayoutPath('mod_s5_masonry');



?>