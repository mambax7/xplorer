<?php
$perm_name = 'XplorerPerms';
if ($xoopsUser)  $groups = $xoopsUser->getGroups();
else $groups = XOOPS_GROUP_ANONYMOUS;

$module_id = $xoopsModule->getVar("mid");
$gperm_handler = & xoops_gethandler('groupperm');

define('PERM_COPY', 	1);
define('PERM_MOVE', 	2);
define('PERM_DELETE', 	3);
define('PERM_UPLOAD', 	4);
define('PERM_SEARCH', 	5);
define('PERM_CREATE', 	6);
define('PERM_EDITFILE', 7);

$cats = array(	'1' => 'copier', 
				'2' => 'deplacer', 
				'3' => 'supprimer',
				'4' => 'uploader',
				'5' => 'rechercher',
				'6' => 'Create',
				'7' => 'Editer');

?>
