// JavaScript Document

// HIDE/VISIBLE
function calendarDOWN(id, fleccia) {
	if (window.getComputedStyle) { // read value, only Moz
		if (window.getComputedStyle(document.getElementById(id), null).display == 'none') {
			document.getElementById(id).style.display = 'table';
			document.getElementById(fleccia).className = 'fleccia-sopra';
		} else {
			document.getElementById(id).style.display = 'none';
			document.getElementById(fleccia).className = 'fleccia-inf';
		}
	} else { // read value, only IE
		if (document.getElementById(id).currentStyle.display == 'none') {
			document.getElementById(id).style.display = 'block';
			document.getElementById(fleccia).className = 'fleccia-sopra';
		} else {
			document.getElementById(id).style.display = 'none';
			document.getElementById(fleccia).className = 'fleccia-inf';
		}

	}

}
// ///
function rigaDOWN(idarr, ico, hidfield, pic1, pic2) {
	for (i = 0; i < idarr.length; i++) {
		id = idarr[i];
		if ($('#' + id).is(":hidden")) {
			$('#' + id).slideDown('fast');
			$('#' + ico).attr('src', pic1);
			if ($('#' + hidfield)[1])
				$('#' + hidfield)[1].attr('value', '1');
		} else {
			$('#' + id).slideUp('fast');
			$('#' + ico).attr('src', pic2);
			if ($('#' + hidfield)[1])
				$('#' + hidfield)[1].attr('value', '0');
		}
	}
}

function rigaDOWNsimple(id) {
	if (window.getComputedStyle) { // read value, only Moz
		if (window.getComputedStyle(document.getElementById(id), null).display == 'none') {
			document.getElementById(id).style.display = 'table-row';
		} else {
			document.getElementById(id).style.display = 'none';
		}
	} else { // read value, only IE
		if (document.getElementById(id).currentStyle.display == 'none') {
			document.getElementById(id).style.display = 'block';
		} else {
			document.getElementById(id).style.display = 'none';
		}

	}

}

function homeDOWN(id, fleccia, impath) {
	if ($('#' + id).is(":hidden")) {
		$('#' + id).slideDown('fast');
		$('#' + fleccia).attr('src', impath + 'ico/home_flecchia_sopra.gif');
	} else {
		$('#' + id).slideUp('fast');
		$('#' + fleccia).attr('src', impath + 'ico/home_flecchia_inf.gif');
	}
}

// VEDERE APPUNT GIORNO
function showAPPUNT(div, url, data, pic) {
	parent.document.getElementById(div).innerHTML = '<table width="100%"  border="0"><tr><td width="99%"><p>'
			+ data
			+ '</p></td><td width="1%" align="right" valign="top"><a href="javascript:hideAPPUNTgior()"><img src="'
			+ pic
			+ '" width="16" height="16" border="0" title="Chiudere Giorno"></a></td></tr></table><iframe id="appunt_iframe" src="'
			+ url + '" frameBorder="0">IFRAME</iframe>';
	parent.document.getElementById(div).style.display = 'block';

}

function hideAPPUNT(div) {
	parent.document.getElementById(div).style.display = 'none';
}
function hideAPPUNTgior() {
	document.getElementById('appunt_giorno').style.display = 'none';
}

// HELP
function ShowHelp(div, tit, desc) {
	document.getElementById(div).style.display = 'inline';
	document.getElementById(div).innerHTML = '<div class="main-help-desc"><b>'
			+ tit + '</b></div>';
}

function HideHelp(div) {
	document.getElementById(div).style.display = 'none';
}

// HELP IFRAME
function ShowHelpIFRAME(div, tit, url) {
	document.getElementById(div).style.display = 'inline';
	document.getElementById(div).style.position = 'absolute';
	document.getElementById(div).style.width = '367px';
	document.getElementById(div).innerHTML = '<div class="capa-iframe-pru"><b>'
			+ tit + '</b><br><iframe id="iframe-pru" src="' + url
			+ '" frameBorder="0" width=100%></iframe></div>';
}

function HideHelpIFRAME(div) {
	document.getElementById(div).style.display = 'none';
}

// /// Explode/Implode left column
function colEXP(id, imgpath) {
	if ($('#' + id).is(":hidden")) {
		$('#col_exp_img').attr('src', imgpath + 'col_exp_close.gif');
		$('#col_exp_td').attr('className', 'col-exp-open');
		$('#' + id).effect('slide');
	} else {
		$('#col_exp_img').attr('src', imgpath + 'col_exp_open.gif');
		$('#col_exp_td').attr('className', 'col-exp-close');
		$('#' + id).effect('drop');
	}

/*
	$('#' + id).effetct({
		width : [ 'toggle', 'swing' ]
	}, 'slow');
	*/
}

function change_desc(selname, txtname) {
	s = document.getElementsByName(selname);
	for (i = 0; i < s.length; i++)
		if (s[i].type && s[i].type.match(/select/))
			sel = s[i];
	t = document.getElementsByName(txtname);
	for (i = 0; i < t.length; i++)
		if (t[i].type && t[i].type.match(/text/))
			tex = t[i];
	tex.value = sel.options[sel.selectedIndex].text.replace(/\(.*\)\s+/, '');
}

function target_blank(f) {
	if (f.selectedIndex > 0) {
		f.form.target = '_blank';
	} else
		f.form.target = '';
}

function moveLayerWindow() {
	scrollTop = (document.all) ? document.body.scrollTop
			+ document.documentElement.scrollTop : window.pageYOffset;
	scrollLeft = (document.all) ? document.body.scrollLeft
			+ document.documentElement.scrollLeft : window.pageXOffset;
	e = document.getElementById('window_layer');
	px = (document.all) ? '' : 'px';
	e.style.left = 200 + scrollLeft + px;
	e.style.top = 100 + scrollTop + px;
}

function openLayerWindow(tit) {
	moveLayerWindow();
	e = document.getElementById('window_layer');
	seeThroughWorkaround('window_layer', true);
	document.getElementById('window_layer_title').innerHTML = tit;
	e.style.display = 'inline';
}

function closeLayerWindow() {
	e = document.getElementById('window_layer');
	e.style.display = 'none';
	seeThroughWorkaround('window_layer', false);
}

function loadLayerWindow(url, tit) {
	moveLayerWindow();
	e = document.getElementById('window_layer');
	win = window.frames['window_layer_iframe'];
	seeThroughWorkaround('window_layer', true);
	document.getElementById('window_layer_title').innerHTML = tit;
	if (e.style.display == 'none') {
		if (win.document.location != url)
			win.document.location = url;
		e.style.display = 'inline';
	} else
		e.style.display = 'inline';
}

// function insertJselect(form,field,val,fx) {
// eval('window.parent.document.'+form+'.elements[\''+field+'\'].value =
// val.onchange="javascript:'+fx+'";');
// window.parent.closeLayerWindow();
// }

function insertTselect(form, field, val) {
	eval('window.parent.document.' + form + '.elements[\'' + field
			+ '\'].value = val;');
	window.parent.closeLayerWindow();
}

function insertTselect2(form, field1, val1, field2, val2) {
	eval('window.parent.document.' + form + '.elements[\'' + field1
			+ '\'].value = val1;');
	eval('window.parent.document.' + form + '.elements[\'' + field2
			+ '\'].value = val2;');
	window.parent.closeLayerWindow();
}

function RealEscape(str) {
	str = escape(str);
	return str.replace(/\+/, '%2B');
}

// Shortcut functions

var lastkey = '';
var keymap = new Array();

function alertkey(e) {
	var cur;

	if (!e) {
		if (window.event) {
			e = window.event;
		} else {
			return;
		}
	}

	ctrlPressed = false;

	if (e.ctrlKey) {
		ctrlPressed = e.ctrlKey;
	} else if (e.modifiers) {
		var mString = (e.modifiers + 32).toString(2).substring(3, 6);
		ctrlPressed = (mString.charAt(1) == "1");
	}

	if (typeof (e.which) == 'number') {
		e = e.which;
	} else {
		if (typeof (e.keyCode) == 'number') {
			e = e.keyCode;
		} else {
			if (typeof (e.charCode) == 'number') {
				e = e.charCode;
			} else {
				return;
			}
		}
	}
	cur = String(keymap[e]).length;

	if (cur > 2 && ctrlPressed && keymap[e]) {
		document.location = keymap[e];
	}
}

document.onkeydown = alertkey;

// /// Multiple select manage

function msel_moveup(opsel) {

	if (opsel.length < 2)
		return;
	var sel = opsel.selectedIndex;
	if (sel < 1)
		return;

	var mText1 = opsel[sel - 1].text;
	var mText2 = opsel[sel].text;
	var mValue1 = opsel[sel - 1].value;
	var mValue2 = opsel[sel].value;
	opsel[sel].text = mText1;
	opsel[sel].value = mValue1;
	opsel[sel - 1].text = mText2;
	opsel[sel - 1].value = mValue2;
	opsel.selectedIndex = sel - 1;

	msel_genhidden(opsel);
}

function msel_movedown(opsel) {

	if (opsel.length < 2)
		return;
	var sel = opsel.selectedIndex;
	if (sel < 0 || sel == (opsel.length - 1))
		return;

	var mText1 = opsel[sel + 1].text;
	var mText2 = opsel[sel].text;
	var mValue1 = opsel[sel + 1].value;
	var mValue2 = opsel[sel].value;
	opsel[sel].text = mText1;
	opsel[sel].value = mValue1;
	opsel[sel + 1].text = mText2;
	opsel[sel + 1].value = mValue2;
	opsel.selectedIndex = sel + 1;

	msel_genhidden(opsel);
}

function msel_add(opsel, testo, valore) {

	for (i = 0; i < opsel.length; i++)
		if (opsel.options[i].value == valore && opsel.options[i].text == testo)
			return;
	var len = opsel.length++;
	opsel.options[len].value = valore;
	opsel.options[len].text = testo;
	opsel.selectedIndex = len;

	msel_genhidden(opsel);
}

function msel_delete(opsel) {

	while (opsel.selectedIndex >= 0) {
		opsel.options[opsel.selectedIndex] = null;
	}

	msel_genhidden(opsel);
}

function msel_genhidden(opsel) {

	// find hidden
	f = opsel.form;
	for (i = 0; i < f.elements.length; i++)
		if (f.elements[i] == opsel)
			hid = f.elements[i + 1];
	hid.value = '';
	for (i = 0; i < opsel.length; i++)
		hid.value += opsel.options[i].value + ',,';
	hid.value = hid.value.replace(/,,$/, '');
}
