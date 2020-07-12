<?php

include '../../../include/cp_header.php';
include_once XOOPS_ROOT_PATH .'/class/xoopsform/grouppermform.php';
include_once '../perms.inc.php';

$title_of_form = "Permissions pour le module Xplorer"; 
$perm_desc = 'Sélectionner les accès pour chaque groupe';

$form = new XoopsGroupPermForm($title_of_form, $module_id, $perm_name, $perm_desc);
foreach ($cats as $item_id => $item_name) {
	$form->addItem($item_id, $item_name);
}

//xoops_cp_header();
$xoopsTpl->assign('content',$form->render());
//xoops_cp_footer();

?>