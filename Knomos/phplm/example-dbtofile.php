<pre>
Output the Menu Structure Format obtained querying the DB

<?php
require_once 'lib/PHPLIB.php';
require_once 'PEAR.php';
require_once 'DB.php';
require_once 'lib/layersmenu-common.inc.php';
require_once 'lib/layersmenu-process.inc.php';
$mid = new ProcessLayersMenu();
$mid->setIconsize(16, 16);
//$mid->setMenuStructureFile('layersmenu-horizontal-1.txt');
//$mid->parseStructureForMenu('hormenu1');
$mid->setDBConnParms('pgsql://postgres:postgres@localhost/phplayersmenu');
//$mid->setDBConnParms('mysql://mysql:mysql@localhost/phplayersmenu');
$mid->scanTableForMenu('hormenu1');
print $mid->getMenuStructure('hormenu1');
?>
</pre>
