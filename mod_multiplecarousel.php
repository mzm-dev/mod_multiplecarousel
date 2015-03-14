<?php

/**
 * @version     1.0
 * @package     mod_multiplecarousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Mohamad Zaki Mustafa <mohdzaki04@gmail.com>
 */
//No Direct Access
defined('_JEXEC') or die;


/* Params */
$moduleid_sfx = htmlspecialchars($params->get('moduleid_sfx'));

//store params as object that we can loop through in tmpl/default.php
$slideritems = array();
$data_slide = 8;
for ($i = 1; $i <= $data_slide; $i++) {    
    $slideritems[$i]['caption'] = $params->get("slide" . $i . "_caption");    
    $slideritems[$i]['image'] = $params->get("slide" . $i . "_image");        
    $slideritems[$i]['link'] = $params->get("slide" . $i . "_link");    
}

if(empty($moduleid_sfx)){
    $moduleid_sfx ='myCarousels';
}
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

require JModuleHelper::getLayoutPath('mod_multiplecarousel', $params->get('layout', 'default'));
?>
