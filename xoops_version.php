<?php
// $Id: $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$modversion['name'] = _MI_XPLORER_NAME;
$modversion['version'] = 0.1;
$modversion['description'] = _MI_XPLORER_DESC;
$modversion['credits'] = "pemen <pemen@frxoops.org>";
$modversion['author'] = "pemen";
$modversion['help'] = "";
$modversion['license'] = "GPL";
$modversion['official'] = 0;
$modversion['image'] = "images/xplorer_slogo.png";
$modversion['dirname'] = "xplorer";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
//$modversion['adminmenu'] = "admin/menu.php";

// Main contents
$modversion['hasMain'] = 1;

// Module Templates
// List any template subfolders you have to the following array
// Leave first value blank for indexing root template folder
$folders = array('', 'admin/');

// Set the root path to the template folder
$templatedir = XOOPS_ROOT_PATH . '/modules/' . $modversion['dirname'] . '/templates/';

$files = array();
foreach ( $folders as $folder )
{
 $dir = opendir($templatedir.$folder);
 while (( $file = readdir($dir)) !== false )
 {
  if ( !preg_match("/^[.]{1,2}$/", $file) )
  {
   if( preg_match("/html/", $file) )
   {
     if (strtolower($file) != 'cvs' && !is_dir($file))
     {    
    array_push($files, $folder.$file);
     }
    }
   }
  }
sort($files);
closedir($dir);
}

for ($i = 0;$i < Count($files);$i++)
{
 $modversion['templates'][$i]['file'] = $files[$i];
 $modversion['templates'][$i]['description'] = '';
} 

$i = 0;

$i++;
$modversion['config'][$i]['name'] = 'home_dir';
$modversion['config'][$i]['title'] = '_MI_XPLORER_HOMEDIR';
$modversion['config'][$i]['description'] = '_MI_XPLORER_HOMEDIR_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads'; // without trailing slash !!

$i++;
$modversion['config'][$i]['name'] = 'showsize';
$modversion['config'][$i]['title'] = '_MI_XPLORER_SHOWSIZE';
$modversion['config'][$i]['description'] = '_MI_XPLORER_SHOWSIZE_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'showtype';
$modversion['config'][$i]['title'] = '_MI_XPLORER_SHOWTYPE';
$modversion['config'][$i]['description'] = '_MI_XPLORER_SHOWTYPE_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'showmodify';
$modversion['config'][$i]['title'] = '_MI_XPLORER_SHOWMODIFY';
$modversion['config'][$i]['description'] = '_MI_XPLORER_SHOWMODIFY_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'showperm';
$modversion['config'][$i]['title'] = '_MI_XPLORER_SHOWPERM';
$modversion['config'][$i]['description'] = '_MI_XPLORER_SHOWPERM_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'showhidden';
$modversion['config'][$i]['title'] = '_MI_XPLORER_SHOWHIDDEN';
$modversion['config'][$i]['description'] = '_MI_XPLORER_SHOWHIDDEN_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$modversion['hasNotification'] = 0;
?>