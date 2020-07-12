<?php
// $Id: $
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
include("admin_header.php");
require_once(MOD_PATH."/admin/admin_cptabs.php");
/**
* used to hold all page data that is collected for display
* @var	array $post
*/
$page = array();
/**
used to hold an array of submitted data to the page
@var	array $post	
*/
$post = array();
$posterror = false; 
import_request_variables('gp','');
/**
Set up our admin tabs
*/
error_reporting(E_ALL);
// ********************************************************* admin smarty start
global $xoopsModule;
xoops_cp_header();
 require_once XOOPS_ROOT_PATH.'/class/template.php';
 if ( !isset($xoopsTpl) ) { // Just in case, for new releases    
  $xoopsTpl = new XoopsTpl();
  $oldsystem = true;
 }else $oldsystem = false;
 $xoopsOption['template_main'] = 'admin/admin.html'; // To be compatible with existing system.

// ********************************************************* admin smarty start
	switch ($tab) {
		case TAB_PERMS :
				$mainTabs->setCurrent('permission','tabs');
				$xoopsTpl->assign('tplpage','groupperm'); 
				include "groupperm.php";
				break;
		case TAB_INDEX :
		default :
				$mainTabs->setCurrent('index','tabs');
				break;
	}

	$xoopsTpl->assign( 'tabs', $mainTabs->getSet() );

// ********** admin smarty close
$xoopsTpl->assign('mod_dir', $xoopsModule->dirname() );
$xoopsTpl->assign('mod_mid', $xoopsModule->getVar('mid'));

 if ($oldsystem) { // Don't execute if newer versions has smarty implemented.
  if (isset($xoopsOption['template_main'])) {
   $xoopsTpl->xoops_setCaching(0);
   $xoopsTpl->display('db:'.$xoopsOption['template_main']);
  }
 }

xoops_cp_footer();
// ********************************************************* admin smarty close
?>
