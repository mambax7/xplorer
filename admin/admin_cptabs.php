<?php
// $Id: jdev_cptabs.php,v 1.2 2005/03/30 20:16:58 pemen Exp $

/* set up our main tabs */
$mainTabs = new XoopsTabs();

// ONGLET INDEX
$link = XOOPS_URL.'/modules/' . $xoopsModule->dirname() . '/admin/index.php';
$mainTabs->addTab( 'index', $link, _AM_XPLORER_MENU_INDEX, 0 );
// add sub links to index
// $link = XOOPS_URL.'/modules/'.$xoopsModule->dirname().'/admin/';
// $mainTabs->addSub( 'new', $link, 'new', 10, 'index');


// ONGLET 
$link = XOOPS_URL.'/modules/'.$xoopsModule->dirname().'/admin/index.php?tab='.TAB_PERMS;
$mainTabs->addTab( 'permission', $link, _AM_XPLORER_MENU_PERMISSION, 10 );


?>
