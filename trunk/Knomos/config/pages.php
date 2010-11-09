<?
date_default_timezone_set('Europe/Rome');

$PAGE[TXT_TITLE]="Knomos";
$PAGE[TXT_CRIGHT]="&copy; 2010 <a href=\"http://www.professioneinformatica.eu\" target=\"_blank\">Professione Informatica</a>. All Rights Reserved";
$PAGE[TXT_INFOMAIL]="<a href=\"mailto:support@professioneinformatica.eu\" target=\"_blank\">support@professioneinformatica.eu</a>";
$PAGE[TXT_USERNAME]="<strong>".FW_USER.": </strong> ".$_SESSION[user][nome];
$PAGE[TXT_SEARCH]=FW_SEARCH;
$PAGE[TXT_TODAY]=date($CONF[date_format]);
$PAGE[TXT_FOOTER]='
<div id="footer">
	<table border="0" cellpadding="0" cellspacing="0" id="footer_table">
		<tr>
			<td nowrap class="footer-aiuto">
			<div class="ui-icon ui-icon-info" style="float: left;"></div>
			<div><a href="'.$CONF[abs_url].'guida/index.htm" target="_blank">Aiuto</a></div>
			</td>
			<td align="right" nowrap>'.$PAGE[TXT_CRIGHT].'<img
				src="'.$CONF[abs_url].$CONF[dir_template].$CUR_TEMPLATE[name].'/images/'.'sep_02.gif" width="2" height="16"
				style="vertical-align: middle;"></td>
		</tr>
	</table>
	</div>
</div>
';
$PAGE[URL_LOGOUT]=$CONF[url_base].$CONF[auth_logout_page_expired];
$PAGE[URL_LOGOUT2]=$CONF[url_base].$CONF[auth_logout_page];
$PAGE[LOGOUT_TIME]=($CONF[logout_time]*60*1000);
$PAGE[JS_AC]="";
$PAGE[BODY_ONLOAD]="";
$PAGE[BODY_ONCLOSE]="";
$PAGE[JS_SHORTCUT]="
<script
	src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js\"
	type=\"text/javascript\"></script>
<script
	src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js\"
	type=\"text/javascript\"></script>
<script
	src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/i18n/jquery-ui-i18n.min.js\"
	type=\"text/javascript\"></script>
		
<link type=\"text/css\"
	href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/redmond/jquery-ui.css\"
	rel=\"Stylesheet\" />
	
<script
	src=\"".$CONF[url_base]."js/jQueryIncludePlugIn.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/include_01.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/fxGenerali.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/fxContatti.js\"
	type=\"text/javascript\"></script>
	
	<script
	src=\"".$CONF[url_base]."js/fxImpegni.js\"
	type=\"text/javascript\"></script>
	
<script
	src=\"".$CONF[url_base]."js/fxLoadPage.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/fxMail.js\"
	type=\"text/javascript\"></script>
	
<script
	src=\"".$CONF[url_base]."js/fxPratiche.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/fxPrestazioni.js\"
	type=\"text/javascript\"></script>

<script
	src=\"".$CONF[url_base]."js/autocomplete.js\"
	type=\"text/javascript\"></script>
	
<script type=\"text/javascript\"><!--
	keymap[49]='".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_view.php';
	keymap[50]='".$CONF[url_base].$CONF[dir_modules]."prestazioni/pages/prestazioni_view.php';
	keymap[51]='".$CONF[url_base].$CONF[dir_modules]."calendar/pages/month_view.php';
	keymap[52]='".$CONF[url_base].$CONF[dir_modules]."contact/pages/contacts_view.php';
	keymap[53]='".$CONF[url_base].$CONF[dir_modules]."document/pages/documents_view.php';
//-->
</script>

<script type=\"text/javascript\">
  $(document).ready(function() {
    $('form input, form select').live('keypress', function (e) {	
	    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
	    	var btnSubmit = $(this).parents('form').find('button[type=submit], input[type=submit]');
		    if (btnSubmit.length <= 0)
				{
		    	return true;
		    }
	    	else
	    	{
		    	btnSubmit.click();
			    return false;
		    }
	    } else {
	    	return true;
	    }
    });
    
		// imposto il layout dei pulsanti
		$( 'button, input:submit, input:button').button();

	});
	
	
	// rimpiazzo il funzionamento standard della funzione javascript alert
	window.alert = function(text, title){
		if (!title)
		{ title = 'Attenzione'; }
		var dlg = $('#dlg_alert');
		dlg.children('#dlg_alert_text').html(text);
    dlg.dialog({
			modal: true,
			title: title,
			resizable: false,
			show: 'fade',
			hide: 'fade',
			buttons: [
		    {
		        text: 'Ok',
		        click: function() { $(this).dialog('close'); }
		    }
			]			
		}); 
	};
</script>
<div id='dlg_alert' style='display: none;'>
	<p>
		<span class='ui-icon ui-icon-alert' style='float:left; margin:0 7px 20px 0;'></span>
		<div id='dlg_alert_text'></div>
	</p>
</div>
";
$PAGE[FUORI_FIDO]="
<iframe name='FrameS2' id='FrameS2' 
src='".$CONF[url_base].$CONF[dir_modules]."pratiche/pages/pratiche_fuorifido.php?mod=0'  width='100%' height='195' frameborder='0' MARGINWIDTH='0' marginheight='0' VSPACE='0'> 
</iframe>
";



if ($CONF[usa_link1]==true)
{$PAGE[LINK1]='
<a href="'.$CONF[pag_link1].'" class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/'.$CONF[ico_link1].'" width="16" height="16" border="0" align="absmiddle">'.$CONF[label_link1].'</a> 
';}
else{$PAGE[LINK1]="";}

if ($CONF[usa_link2]==true)
{$PAGE[LINK2]='
<a href="'.$CONF[pag_link2].'" class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/'.$CONF[ico_link2].'" width="16" height="16" border="0" align="absmiddle">'.$CONF[label_link2].'</a> 
';}
else{$PAGE[LINK2]="";}

if ($CONF[usa_link3]==true)
{$PAGE[LINK3]='
<a href="'.$CONF[pag_link3].'" class="col-opz-link"><img src="%[IMAGE_GPATH]%ico/'.$CONF[ico_link3].'" width="16" height="16" border="0" align="absmiddle">'.$CONF[label_link3].'</a> 
';}
else{$PAGE[LINK3]="";}

if ($CONF[div_last_prat]==true)
{$PAGE[LAST_PRAT]='

              <h5><img src="%[IMAGE_GPATH]%ico/ico_prat_med.gif" width="24" height="24" border="0" align="absmiddle"> %[TXT_LASTPRAT]% <img src="%[IMAGE_GPATH]%ico/home_flecchia_sopra.gif" name="fle_appunt_home" width="16" height="16" border="0" align="absmiddle" id="fle_opz_00"></h5>
              </a>
              <div style="display:inline" id="home_pratiche">
';}
else{$PAGE[LAST_PRAT]='

              <h5><img src="%[IMAGE_GPATH]%ico/ico_prat_med.gif" width="24" height="24" border="0" align="absmiddle"> %[TXT_LASTPRAT]% <img src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" name="fle_appunt_home" width="16" height="16" border="0" align="absmiddle" id="fle_opz_00"></h5>
              </a>
              <div style="display:none" id="home_pratiche">

';}

$PAGE[TXT_DOCUMENT]=FW_DOCUMENTS;
$PAGE[TXT_CALENDAR]=FW_CALENDAR;
$PAGE[TXT_IMMINENT]=FW_IMMINENT;
$PAGE[TXT_EVENTS]=FW_EVENTS;
$PAGE[TXT_LASTPRAT]=FW_LASTPRAT;
$PAGE[TXT_CONTACTS]=FW_CONTACT;
$PAGE[TXT_SUPPORT]=FW_SUPPORT;

//Left Calendar Definition
//Param: 0 for layer link, 0 for page links
$PAGE_ELEMENT[GLOB][1][0][func]="calendar_element_1";
$PAGE_ELEMENT[GLOB][1][0][param]=1;

$PAGE_ELEMENT[PAGE][1][0][func]="pratiche_element_2";




?>
