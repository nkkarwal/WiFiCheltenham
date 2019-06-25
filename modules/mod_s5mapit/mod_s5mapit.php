<?php

/**
* @title		Shape 5 Map it with google
* @version		2.0
* @package		Joomla
* @website		http://www.shape5.com
* @copyright	Copyright (C) 2009 Shape 5 LLC. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$s5mapcolorstyle = '';

$text  = $params->get( 'text');
$sub1  = $params->get( 'zipp');
$naar =  $params->get( 'addresss');
$cols  = $params->get( 'cityy');
$rows  = $params->get( 'statee');
$s5mapitver  = $params->get( 's5mapitver');
$s5mapcontrol  = $params->get( 's5mapcontrol');
$s5miheight  = $params->get( 's5miheight');
$s5miwidth  = $params->get( 's5miwidth');
$zoomlev  = $params->get( 'zoomlev');
$LiveSiteUrl = JURI::root();
$getdirections  = $params->get( 'getdirections');
$s5mapitimagemarker  = $params->get( 's5mapitimagemarker');
$s5mapcolorstyle  = $params->get( 's5mapcolorstyle');
$s5mapscrollwheel = $params->get( 's5mapscrollwheel');
$gapi_key = $params->get( 'gapi_key');

?>

<?php
require(JModuleHelper::getLayoutPath('mod_s5mapit'));
?>