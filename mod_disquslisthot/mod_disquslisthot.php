<?php defined( '_JEXEC' ) or die( 'Restricted access' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_disquslisthot', $params->get('layout', 'default'));