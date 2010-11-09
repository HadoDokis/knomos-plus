// PHP Layers Menu 3.2.0-rc (C) 2001-2004 Marco Pratesi - http://www.marcopratesi.it/

function scanChildren(element)
{
	var counter = element.childNodes.length;
        for (var i=0; i<counter; i++) {
                foobar = element.childNodes.item(i);
		if (	( (Konqueror22 || Konqueror30 || Konqueror31) &&
			 (  foobar.nodeName == 'INPUT' || foobar.nodeName == 'input'
			 || foobar.nodeName == 'SELECT' || foobar.nodeName == 'select'
			 || foobar.nodeName == 'TEXTAREA' || foobar.nodeName == 'textarea'
			 )
			)
			||
			( (Konqueror32 || Konqueror33) &&
			 (  ((foobar.nodeName == 'SELECT' || foobar.nodeName == 'select') && foobar.size > 1)
			 || foobar.nodeName == 'TEXTAREA' || foobar.nodeName == 'textarea'
			 )
			)
			||
			( IE &&
			 ( foobar.nodeName == 'SELECT' || foobar.nodeName == 'select' )
			)
		) {
			toBeHidden[toBeHidden.length] = foobar;
		}
                if (foobar.childNodes.length > 0) {
                        scanChildren(foobar);
                }
        }
}

function seeThroughCoordinatesDetection()
{
	if (!((Konqueror && !Konqueror22) || IE5)) {
		return;
	}
	for (i=0; i<toBeHidden.length; i++) {
		object = toBeHidden[i];
		toBeHiddenLeft[i] = object.offsetLeft;
		while (object.tagName != 'BODY' && object.offsetParent) {
			object = object.offsetParent;
			toBeHiddenLeft[i] += object.offsetLeft;
		}
		object = toBeHidden[i];
		toBeHiddenTop[i] = object.offsetTop;
		while (object.tagName != 'BODY' && object.offsetParent) {
			object = object.offsetParent;
			toBeHiddenTop[i] += object.offsetTop;
		}
	}
}

if ((Konqueror || IE5) && document.getElementById('phplmseethrough')) {
	scanChildren(document.getElementById('phplmseethrough'));
}

seeThroughCoordinatesDetection();

