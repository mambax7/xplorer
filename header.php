<?php
include '../../mainfile.php';
include_once './perms.inc.php';
define ('XPLORER_URL', XOOPS_URL . '/modules/' . $xoopsModule->getVar('dirname'));

$myts =& MyTextSanitizer::getInstance();
foreach ($_POST as $k => $v) {
	if (is_string($v))
	     $$k = $myts->stripSlashesGPC($v);
	else $$k = $v;
}
foreach ($_GET as $k => $v) {
	if (is_string($v)) 
	     $$k = $myts->stripSlashesGPC($v);
	else $$k = $v;
}
?>