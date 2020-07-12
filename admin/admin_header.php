<?php
// $Id: $
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
error_reporting(E_ALL);
require('../../../mainfile.php'); 
include(XOOPS_ROOT_PATH."/include/cp_header.php");

$mod_path = XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->dirname();
define('MOD_PATH', XOOPS_ROOT_PATH.'/modules/'.$xoopsModule->dirname());
define('MOD_DIR', $xoopsModule->dirname());
define('MOD_URL', XOOPS_URL . '/modules/'.$xoopsModule->dirname());

include(XOOPS_ROOT_PATH . "/class/xoopsformloader.php");
include("tabs.php");

// include common language files
global $xoopsConfig;
$admin_lang_file = MOD_PATH . "/language/" . $xoopsConfig['language'] . "/admin.php";
if (!file_exists($admin_lang_file)) {
	$admin_lang_file = MOD_PATH . "/language/english/admin.php";	
}
include_once($admin_lang_file);

define('TAB_INDEX', 1);
define('TAB_PERMS', 2);


?>