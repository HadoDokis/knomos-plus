<?

session_start();
include("../config/config.php");
include($CONF[path_base]."language/".$_SESSION[cur_lang].".php");
?>

<head>
<title><?=FW_MANT_LOCK_TITLE?></title>
</head>
<body>

        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/lock.jpg" width="350" height="350"></td>
            <td><p style="font-size:14pt; background-color: #B1AE9B; layer-background-color: #B1AE9B; border: 1px none #000000; color: #FFFFFF; margin-bottom: 0px; padding: 5px;"><?= FW_MANT_LOCK_TITLE; ?></p>
              <div style="font-size:10pt; color:#FFFFFF; background-color:#BC4C4C; padding:10px; border-left-color: #E6E4DD; border-top-color: #E6E4DD; border-bottom-color: #666666; border-right-color: #666666; border-bottom-style: solid; border-left-style: solid; border-right-style: solid; border-top-style: solid; border-right-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-left-width: 1px; text-align: center; vertical-align: middle;"><?=FW_MANT_LOCK_TEXT?><br>
              <br>
              <br>
              <?
              if ($_SESSION[user][admin]==1)
              {
              	print FW_MANT_LOCK_ADMIN;?><br><br>
              	<? if($_GET[wrong]==1) print "<b>".FW_MANT_LOCK_PWERR."</b><br>"; ?>
              <form name="unlock" method="post" action="../main.php">
                <input type="password" name="password_unlock">
                <input type="hidden" name="admin_unlock" value="1">
                <br>
                <br>
                
                <input type="submit" name="Submit" value="<?=FW_MANT_LOCK_UNLOCK?>">
              </form> <? } else {
              
              print '<a href="'.$CONF[url_base].'login.php?mant_lock=1" ><b><font color="#ffffff">Torna al login</font></b></a>';
              
              
              
              
               } ?>
              </div>              </td>
          </tr>
        </table>
</body>