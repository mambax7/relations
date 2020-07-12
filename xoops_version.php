<?php
//  -------------------------------------------------------------------------- //
//  [CONTENT RELATIONS MGR FOR XOOPS-R2]
//  Author: Toms Veilands [tomsys@tomsys.net] [www.tomsys.net] [AKA tomsys]
//  Credits: Xoops Team [www.xoops.org]
//  Version: 1.0
//  ReleaseDate: May 03, 2003
//  License: GPL - [http://www.gnu.org/licenses/gpl.html]
//  -------------------------------------------------------------------------- //

//tomsys.net module for related downloads and articles management
$modversion['name'] = _MI_RELACIONE_NAME;
$modversion['version'] = 1.0;
$modversion['order'] = 212;
$modversion['description'] = _MI_RELACIONE_DESC;
$modversion['author'] = "<p style='font:10px verdana; color:#440000;'><b>Toms Veilands</b><br />[<a href='http://www.tomsys.net/' target='_blank' style='font-weight: bold; color: #0099ee; text-decoration: none;'>tomsys.net</a>]</p>";
$modversion['credits'] = "XOOPS Team";
$modversion['help'] = "no additional help is included for the current version";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/relacione_logo.gif";
$modversion['dirname'] = "relations";

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "relacione";
$modversion['tables'][1] = "relacione_tmpuri";
$modversion['tables'][2] = "relacione_uri";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

//$modversion['templates'][1]['file'] = 'relations_index.html';
//$modversion['templates'][1]['description'] = 'Relations list';

//Blocks
$modversion['blocks'][1]['file']        = "relations_admin_blocks.php";
$modversion['blocks'][1]['name']        = _MI_RELACIONE_BNAME1;
$modversion['blocks'][1]['description'] = "Related content Admin Block";
$modversion['blocks'][1]['show_func']   = "relations_admin_block_show";
$modversion['blocks'][1]['template']    = "relations_admin_block.html";

$modversion['blocks'][2]['file']        = "relations_user_blocks.php";
$modversion['blocks'][2]['name']        = _MI_RELACIONE_BNAME2;
$modversion['blocks'][2]['description'] = "Related content User Block";
$modversion['blocks'][2]['show_func']   = "relations_user_block_show";
$modversion['blocks'][2]['template']    = "relations_user_block.html";



// Menu
$modversion['hasMain'] = 0;

// Comments
$modversion['hasComments'] = 0;
?>