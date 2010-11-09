var w="";
var pa=false;
var _oldInputFieldValue=""; // 
var da=false;
var _currentInputFieldValue=""; // 
var G="";
var _eventKeycode=""; // 
var _highlightedSuggestionIndex=-1; // 
var _highlightedSuggestionDiv=null; // 
var _completeDivRows=-1; // 
var _completeDivDivList=null; // 
var _completeDivRows2=5; 
var q="";
var _divTag="div"; // 
var _spanTag="span"; // 
var _documentForm=null; // 
var _Fields = new Array(); //HACK
var _inputField=null; // 
var _Divs = new Array();	//HACK
var _completeDiv=null; // 
var _submitButton=null; 
//HACK
var _prevFocus = "";
var mb=null;
var X=null;
var _enString=null; // 
var _cursorUpDownPressed=false;  // 
var kc=null;
var hc=null;
var _resultCache=new Object(); // 
var ca=1;
var Aa=1;
var Y=false;
var _lastKeyCode=-1; //
var Va=(new Date()).getTime();
var _hasXMLHTTP=false; // 
var _xmlHttp=null; // 
var _completeSearchEnString=null; 
var _completeSearchString=null; 
var _Frames = new Array();	//HACK
var B=null;
var aa=null;
var Ba=false;
var Ka=false;
var p=60;
var _searchString=null; // 
var ya=null;
var _timeoutAdjustment=0; // 

function GiveFocus(tname) {

  if (!_Fields[tname]) return;
  _inputField = _Fields[tname];
  _completeDiv= _Divs[tname];
  B 		= _Frames[tname];

  if (tname != _prevFocus) {
    _completeDivRows = 0;
    _oldInputFieldValue = _inputField.value;
    _currentInputFieldValue = _inputField.value;
    _prevFocus = tname;	
  }
}

InstallAC=function(mod,idf,fvl,frm,fld,sb,pn,rl,hd,sm,ufn){
  _documentForm=frm;
  
  //HACK
  tname = fld.name;
  _Fields[tname] = fld;
  _Fields[tname].searchmodule = mod;
  _Fields[tname].searchid = idf;
  _Fields[tname].searchcampo = fvl;
  _inputField= _Fields[tname];

  _submitButton=sb;
  if(!pn) {
    pn="search";
  }
  _searchString=pn;
  var Kb="en|";
  var Jb="zh-CN|zh-TW|ja|ko|vi|";
  if(!rl||Kb.indexOf(rl+"|")==-1) {
    rl="en";
  }
  _enString=escapeURI(rl);
  if(Jb.indexOf(_enString+"|")==-1){

    X=true;
    Y=false;
    Ba=false
  }else{

    X=false;
    if(_enString.indexOf("zh")==0) {

      Y=false;
    } else {

      Y=true;
    }
    Ba=true
  }
  if(!hd) {
    hd=false;
  }
  ya=hd;

  if(!sm) {
    sm="query";
  }
  w=sm;

  mb=ufn;

  installACPartTwo(fld.name)
}
;


function blurThenGetFocus(){
  _cursorUpDownPressed=true;
  _inputField.blur();
  setTimeout("setInputFieldFocus();",10);
  return
}


function setupKeydown1(){
  if(document.createEventObject) {
    var y=document.createEventObject();
    y.ctrlKey=true;
    y.keyCode=70;
    document.fireEvent("onkeydown",y)
  }
}

function gc(event){}
function ic(event){}

function keyDownHandler(event){

  if(!event&&window.event) {
    event=window.event;
  }
  
  if(event) {
    _lastKeyCode=event.keyCode;
  }
  
  // HACK
  if ((event.srcElement || event.target) && _lastKeyCode != 9 ) {
  	var name = event.srcElement ? event.srcElement.name : event.target.name;
  	// blocca backspace
  	if (event.keyCode == 8 && !name) {
  	    	event.keyCode = 0;
    		event.cancelBubble=true;
    		event.returnValue = false;
    		return;
    	}
    	
  	GiveFocus(name);
  }
  

  if(event&&event.keyCode==8){
    if(X&&(_inputField.createTextRange&&(event.srcElement == _inputField &&(bb(_inputField)==0&&lb(_inputField)==0)))){
      cc(_inputField);
      event.cancelBubble=true;
      event.returnValue=false;
      return false
    }
  }
}

// HACK
function onFocusHandler(event){

  if(!event&&window.event) {
    event=window.event;
  }
  
  if (event.srcElement || event.target) {
  	var name = event.srcElement ? event.srcElement.name : event.target.name;
  	GiveFocus(name,1);
  }
}

function mc(){}

function resizeHandler(){
  if(w=="url"){
    setInputFieldSize()
  }
  setCompleteDivSize()
}


function setCompleteDivSize(){
  if(_completeDiv){
    _completeDiv.style.left=calculateOffsetLeft(_inputField)+"px";
    _completeDiv.style.top=calculateOffsetTop(_inputField)+_inputField.offsetHeight-1+"px";
    //_completeDiv.style.width=calculateWidth()+"px"
    _completeDiv.style.width= "300px";
  }
}

function calculateWidth(){
  if(navigator&&navigator.userAgent.toLowerCase().indexOf("msie")==-1){
    return _inputField.offsetWidth-ca*2
  }else{
    return _inputField.offsetWidth
  }
}

function installACPartTwo(tname){
  if(getXMLHTTP()){
    _hasXMLHTTP=true
  }else{
    _hasXMLHTTP=false
  }

  if(pa) {
    _completeSearchString="complete";
  } else {
    _completeSearchString="/complete/"+_searchString;
  }

  _completeSearchEnString=_completeSearchString+"?hl="+_enString;

  if(!_hasXMLHTTP){
    setCookie("qu","",0,_completeSearchString,null,null)
  }

  // _documentForm.onsubmit=Fa;
  _inputField.autocomplete="off";
  _inputField.onblur=onBlurHandler;

  //HACK
  _inputField.onfocus=onFocusHandler;
  
  if(_inputField.createTextRange) {
    _inputField.onkeyup=new Function("return okuh(event);");
  } else {
    _inputField.onkeyup=okuh;
  }
  _inputField.onsubmit=Fa;
  _currentInputFieldValue=_inputField.value;
  _oldInputFieldValue=_currentInputFieldValue;
  
  //HACK
  _Divs[tname] = document.createElement("DIV");
  _completeDiv = _Divs[tname];
  _completeDiv.id="completeDiv"+tname;
  
  ca=1;
  Aa=1;
  _completeDiv.style.borderRight="black "+ca+"px solid";
  _completeDiv.style.borderLeft="black "+ca+"px solid";
  _completeDiv.style.borderTop="black "+Aa+"px solid";
  _completeDiv.style.borderBottom="black "+Aa+"px solid";
  _completeDiv.style.zIndex="1";
  _completeDiv.style.paddingRight="0";
  _completeDiv.style.paddingLeft="0";
  _completeDiv.style.paddingTop="0";
  _completeDiv.style.paddingBottom="0";
  setCompleteDivSize();
  _completeDiv.style.visibility="hidden";
  _completeDiv.style.position="absolute";
  _completeDiv.style.backgroundColor="white";
  document.body.appendChild(_completeDiv);
  cacheResults("",new Array(),new Array(),new Array());
  Gb(_completeDiv);
  var s=document.createElement("DIV");
  s.style.visibility="hidden";
  s.style.position="absolute";
  s.style.left="-10000";
  s.style.top="-10000";
  s.style.width="0";
  s.style.height="0";
  
  //HACK
  _Frames[tname] = document.createElement("IFRAME");
  M = _Frames[tname];  
  M.completeDiv=_completeDiv;
  M.name="completionFrame"+tname;
  M.id="completionFrame"+tname;
  
  M.src=_completeSearchEnString;
  s.appendChild(M);
  document.body.appendChild(s);
  if(0 && frames && (frames["completionFrame"]&&frames["completionFrame"].frameElement)) {
    B=frames["completionFrame"].frameElement;
  } else {
    B=document.getElementById("completionFrame"+tname);
  }
  if(w=="url"){
    setInputFieldSize();
    setCompleteDivSize()
  }
  window.onresize=resizeHandler;
  document.onkeydown=keyDownHandler;
  //HACK
  //setupKeydown1()
}


function onBlurHandler(event){
  if(!event&&window.event) {
    event=window.event;
  }
  if(!_cursorUpDownPressed){
    hideCompleteDiv();
    //if(_lastKeyCode==9){
    //  setSubmitButtonFocus();
    //  _lastKeyCode=-1
   // }
  }
  _cursorUpDownPressed=false
}

okuh=function(e){
  _eventKeycode=e.keyCode;
  //HACK
  if (e.keyCode == 9) return;
  aa=_inputField.value;
  Oa()
}
;

function setSubmitButtonFocus(){
  _submitButton.focus()
}


setInputFieldFocus=function(){
  _inputField.focus()
}
;


function stripCRFromString(va){
  for(var f=0,oa="",zb="\n\r"; f<va.length; f++) {
    if (zb.indexOf(va.charAt(f))==-1) {
      oa+=va.charAt(f);
    } else {
      oa+=" ";
    }
  }
return oa
}

// HACK
function findSpanValueForClass(i,dc){
  var ga=i.getElementsByTagName(_spanTag);
  if(ga){
    for(var f=0; f<ga.length; ++f){
      if(ga[f].className==dc){
        var value=ga[f].innerHTML;
        if(value=="&nbsp;") {
          return"";
        } else{
          var z=stripCRFromString(value);
          return z
        }
      }
    }
  }else{
    return""
  }
}

function valueOfCAutoComplete(i){
  if(!i) {
    return null;
  }
  return findSpanValueForClass(i,"cAutoComplete")
}

function valueOfDAutoComplete(i){
  if(!i) {
    return null;
  }
  return findSpanValueForClass(i,"dAutoComplete")
}

function hideCompleteDiv(){
  //HACK
  _completeDiv.style.visibility="hidden";
  seeThroughWorkaround(_completeDiv.id, false);
  //document.getElementById("completeDiv").style.visibility="hidden"
}

function showCompleteDiv(){
  //HACK
  _completeDiv.style.visibility="visible";
  //document.getElementById("completeDiv").style.visibility="visible";
  setCompleteDivSize()
}

//HACK_ as
function cacheResults(is,cs,ds,as){
  var nm = _inputField.name
  if (!_resultCache[nm]) _resultCache[nm] = Array();
  _resultCache[nm][is]=new Array(cs,ds,as)
}

// HACK: av
sendRPCDone=function(fr,is,cs,ds,pr,as){
  if(_timeoutAdjustment>0) {
    _timeoutAdjustment--;
  }
  var lc=(new Date()).getTime();
  if(!fr) {
    fr=B;
  }
  cacheResults(is,cs,ds,as);
  var b=fr.completeDiv;
  b.completeStrings=cs;
  b.displayStrings=ds;
  b.prefixStrings=pr;

  // HACK
  b.addedStrings=as;

  displaySuggestedList(b,b.completeStrings,b.displayStrings,b.addedStrings);
  Pa(b,valueOfCAutoComplete);
  if(_completeDivRows2>0) {
    b.height=16*_completeDivRows2+4;
  } else {
    hideCompleteDiv();
  }
}

function Oa(){
  // 38 is up cursor key, 40 is down cursor key...
  if(_eventKeycode==40||_eventKeycode==38) {
    //blurThenGetFocus();
  }
  var N=lb(_inputField);
  var v=bb(_inputField);
  var V=_inputField.value;
  if(X&&_eventKeycode!=0){
    if(N>0&&v!=-1) {
      V=V.substring(0,v);
    } 
    if(_eventKeycode==13||_eventKeycode==3){ 
      var d=_inputField; 
      if(d.createTextRange){
        var t=d.createTextRange();
        t.moveStart("character",d.value.length);
        t.select()
      } else if (d.setSelectionRange){
        d.setSelectionRange(d.value.length,d.value.length)
      }
    } else { 
      if(_inputField.value!=V) {
        selectEntry(V)
      }
    }
  }
  _currentInputFieldValue=V;
  if(handleCursorUpDownEnter(_eventKeycode)&&_eventKeycode!=0) { 
    Pa(_completeDiv,valueOfCAutoComplete)
  }

}

function Fa(){
  return xb(w)
}

function xb(eb) {
  da=true;
  if(!_hasXMLHTTP){
    setCookie("qu","",0,_completeSearchString,null,null)
  }
  hideCompleteDiv();
  if(eb=="url"){
    var R="";
    if(_highlightedSuggestionIndex!=-1&&h) {
      R=valueOfCAutoComplete(_highlightedSuggestionDiv);
    }
    if(R=="") {
      R=_inputField.value;
    }
    if(q=="") { 
      document.title=R;
    } else {
      document.title=q;
    }
    var Tb="window.frames['"+mb+"'].location = \""+R+'";';
    setTimeout(Tb,10);
    return false
  } else if(eb=="query"){
    //_documentForm.submit();
    return true
  }
}

newwin=function(){
  window.open(_inputField.value);
  hideCompleteDiv();
  return false
}
;

idkc=function(e){
  if(Ba){
    var Ta=_inputField.value;
    if(Ta!=aa){
      _eventKeycode=0;
      Oa()
    }
    aa=Ta;
    setTimeout("idkc()",10)
  }
}
;
setTimeout("idkc()",10);


function escapeURI(La){
  if(encodeURIComponent) {
    return encodeURIComponent(La);
  }
  if(escape) {
    return escape(La)
  }
}

function recalculateTimeout(Mb){
  var H=100;
  for(var o=1; o<=(Mb-2)/2; o++){
    H=H*2
  }
  H=H+50;
  return H
}


mainLoop=function(){
  
  if(_oldInputFieldValue!=_currentInputFieldValue){
    if(!da){
      var Za=escapeURI(_currentInputFieldValue);
      var ma=_resultCache[_inputField.name][_currentInputFieldValue];
      if(ma){
        // Found in our cache...
        Va=-1;
        sendRPCDone(B,_currentInputFieldValue,ma[0],ma[1],B.completeDiv.prefixStrings)
      }else{
        _timeoutAdjustment++;
        Va=(new Date()).getTime();
        if(_hasXMLHTTP){
          callSearch(Za)
        }else{
          setCookie("qu",Za,null,_completeSearchString,null,null);
          frames["completionFrame"].document.location.reload(true)
        }
      }
      _inputField.focus()
    }
    da=false
  }
  _oldInputFieldValue=_currentInputFieldValue;
  setTimeout("mainLoop()",recalculateTimeout(_timeoutAdjustment));
  return true
}
;
// Call mainLoop() after 10 milliseconds...
setTimeout("mainLoop()",10);


var Cb=function(){
  selectEntry(valueOfCAutoComplete(this));
  q=valueOfDAutoComplete(this);
  da=true;
  Fa();
  if (this.addedString) setvalues(this.addedString);
}

var pb=function(){
  if(_highlightedSuggestionDiv) {
    setStyleForElement(_highlightedSuggestionDiv,"aAutoComplete");
  }
  setStyleForElement(this,"bAutoComplete")
}
;


var ec=function(){
  setStyleForElement(this,"aAutoComplete")
}
;


function highlightNewValue(C){

  if(!_completeDivDivList|| ( _completeDivRows<=0 || _completeDivRows == null ) ) {
    return;
  }
  
  _currentInputFieldValue=G;
  selectEntry(G);
  q=G;

  showCompleteDiv();
  if(C>=_completeDivRows){
    C=_completeDivRows-1
  }
  if(_highlightedSuggestionIndex!=-1&&C!=_highlightedSuggestionIndex){
    setStyleForElement(_highlightedSuggestionDiv,"aAutoComplete"); 
    _highlightedSuggestionIndex=-1
  }
  if(C<0){
    _highlightedSuggestionIndex=-1;
    _inputField.focus();
    return
  }
  _highlightedSuggestionIndex=C;
  _highlightedSuggestionDiv=_completeDivDivList.item(C);
  setStyleForElement(_highlightedSuggestionDiv,"bAutoComplete");
  _currentInputFieldValue=G;
  q=valueOfDAutoComplete(_highlightedSuggestionDiv);
  selectEntry(valueOfCAutoComplete(_highlightedSuggestionDiv))
}

function handleCursorUpDownEnter(eventCode){
  if(eventCode==40){
    highlightNewValue(_highlightedSuggestionIndex+1);
    return false
  }else if(eventCode==38){
    highlightNewValue(_highlightedSuggestionIndex-1);
    return false
  }else if(eventCode==13||eventCode==3){
    setvalues(_highlightedSuggestionDiv.addedString);
    hideCompleteDiv();
    return false;
  }
  return true
}

function Pa(localCompleteDiv,ib){
  var localInputField=_inputField;
  var T=false;
  _highlightedSuggestionIndex=-1;
  // This becomes the rows in our suggestion list...
  var J=localCompleteDiv.getElementsByTagName(_divTag);
  // # of rows in list...
  var O=J.length;
  _completeDivRows=O;
  _completeDivDivList=J;
  _completeDivRows2=O;
  G=_currentInputFieldValue;
  if(_currentInputFieldValue==""||O < 2){
    hideCompleteDiv()
  }else{
    showCompleteDiv()
  }
  var Ab="";
  if(_currentInputFieldValue.length>0){
    var f;
    var o;
    for(var f=0; f<O; f++){
      for(o=0; o<localCompleteDiv.prefixStrings.length; o++){
        var Ib=localCompleteDiv.prefixStrings[o]+_currentInputFieldValue;
        if(Y||ib(J.item(f)).toUpperCase().indexOf(Ib.toUpperCase())==0) {
          Ab=localCompleteDiv.prefixStrings[o]; 
          T=true; 
          break
        }
      }
      if(T){
        break
      }
    }
  }
  if(T) {
    _highlightedSuggestionIndex=f;
  }
  for(var f=0; f<O; f++) {
    setStyleForElement(J.item(f),"aAutoComplete");
  }
  if(T){
    _highlightedSuggestionDiv=J.item(_highlightedSuggestionIndex);
    q=valueOfDAutoComplete(_highlightedSuggestionDiv)
  }else{
    q=_currentInputFieldValue;
    _highlightedSuggestionIndex=-1;
    _highlightedSuggestionDiv=null
  }
  var ab=false;
  switch(_eventKeycode){
    // cursor left, cursor right, others??
    case 8:
    case 33:
    case 34:
    case 35:
    case 35:
    case 36:
    case 37:
    case 39:
    case 45:
    case 46:
      ab=true;
      break;
    default:
      // regular keypress ...
      break
  }
  if(!ab&&_highlightedSuggestionDiv){
    var Da=_currentInputFieldValue;
    setStyleForElement(_highlightedSuggestionDiv,"bAutoComplete");
    var z;
    if(T) {
      z=ib(_highlightedSuggestionDiv).substr(localCompleteDiv.prefixStrings[o].length);
    } else {
      z=Da;
    }
    if(z!=localInputField.value){
      if(localInputField.value!=_currentInputFieldValue) {
        return;
      }
      if(X){
        if(localInputField.createTextRange||localInputField.setSelectionRange) {
          selectEntry(z);
        }
        if(localInputField.createTextRange){
          var t=localInputField.createTextRange();
          t.moveStart("character",Da.length);
          t.select()
        }else if(localInputField.setSelectionRange){
          localInputField.setSelectionRange(Da.length,localInputField.value.length)
        }
      }
    }
  }else{
    _highlightedSuggestionIndex=-1;
    q=_currentInputFieldValue
  }
}

function calculateOffsetLeft(r){
  return Ya(r,"offsetLeft")
}

function calculateOffsetTop(r){
  return Ya(r,"offsetTop")
}

function Ya(r,attr){
  var kb=0;
  while(r){
    kb+=r[attr]; 
    r=r.offsetParent
  }
  return kb
}

function setCookie(name,value,Ra,hb,fb,Sb){
  var Nb=name+"="+value+(Ra?";expires="+Ra.toGMTString():"")+(hb?";path="+hb:"")+(fb?";domain="+fb:"")+(Sb?";secure":"");
  document.cookie=Nb
}


function setInputFieldSize(){
  var xa=document.body.scrollWidth-220;
  xa=0.73*xa;
  _inputField.size=Math.floor(xa/6.18)
}
function lb(n){
  var N=-1;
  if(n.createTextRange){
    var fa=document.selection.createRange().duplicate();
    N=fa.text.length
  }else if(n.setSelectionRange){
    N=n.selectionEnd-n.selectionStart
  }
  return N
}

function bb(n){
  var v=0;
  if(n.createTextRange){
    var fa=document.selection.createRange().duplicate();
    fa.moveEnd("textedit",1);
    v=n.value.length-fa.text.length
  }else if(n.setSelectionRange){
    v=n.selectionStart
  }else{
    v=-1
  }
  return v
}
function cc(d){
  if(d.createTextRange){
    var t=d.createTextRange();
    t.moveStart("character",d.value.length);
    t.select() 
  } else if(d.setSelectionRange) {
    d.setSelectionRange(d.value.length,d.value.length)
  }
}

function jc(Zb,Ea){
  if(!Ea)Ea=1;
  if(pa&&pa<=Ea){
    var Ia=document.createElement("DIV");
    Ia.innerHTML=Zb;
    document.getElementById("console").appendChild(Ia)
  }
}


function setStyleForElement(c,name){
  db();
  c.className=name;
  if(Ka){
    return
  }
  switch(name.charAt(0)){
    case "m":
      c.style.fontSize="13px";
      c.style.fontFamily="arial,sans-serif";
      c.style.wordWrap="break-word";
	c.style.verticalAlign='top';
      break;
    case "l":
      c.style.display="block";
      c.style.paddingLeft="3";
      c.style.paddingRight="3";
      c.style.height="16px";
      c.style.overflow="hidden";
      break;
    case "a":
      c.style.backgroundColor="white";
      c.style.color="black";
      if(c.displaySpan){
        c.displaySpan.style.color="red"
      }
      break;
    case "b":
      c.style.backgroundColor="#3366cc";
      c.style.color="white";
      if(c.displaySpan){
        c.displaySpan.style.color="white"
      }
      break;
    case "c":
      c.style.width="50%";
      c.style.cssFloat="left";
      c.style.verticalAlign='top';
      break;
    case "d":
      c.style.cssFloat="right";
      c.style.width="50%";
      c.style.verticalAlign='top';
      if(w=="query"){
        c.style.fontSize="10px";
        c.style.textAlign="right";
        c.style.color="green";
        c.style.paddingTop="3px"
      }else{
        c.style.color="#696969"
      }
      break
  }
}

function db(){
  p=65;
  if(w=="query"){
    var wb=110;
    var Sa=calculateWidth();
    var tb=(Sa-wb)/Sa*100;
    p=tb
  }else{
    p=65
  }
  if(ya){
    p=99.99
  }

    p = 50;
}
function Gb(i){
  db();
  var Ub="font-size: 13px; font-family: arial,sans-serif; word-wrap:break-word; ";
  var Vb="display: block; padding-left: 3; padding-right: 3; height: 16px; overflow: hidden; ";
  var bc="background-color: white; ";
  var qb="background-color: #3366cc; color: white ! important; ";
  var ub="vertical-align: top; display: block; margin-left: 0%; width: "+p+"%; float: left; ";
  var Ga="display: block; margin-left: "+p+"%; ";
  if(w=="query"){
    Ga+="font-size: 10px; text-align: right; color: green; padding-top: 3px; "
  }else{
    Ga+="color: #696969; "
  }
  D(".mAutoComplete",Ub);
  D(".lAutoComplete",Vb);
  D(".aAutoComplete *",bc);
  D(".bAutoComplete *",qb);
  D(".cAutoComplete",ub);
  D(".dAutoComplete",Ga);
  setStyleForElement(i,"mAutoComplete")
}

//HACK
function setvalues(str) {

  if (!str) return false;
  var ind = str.indexOf('=');
  nam = str.substring(0,ind);
  val = str.substring(ind+1,str.length);
  els = document.getElementsByName(nam);
  if (els[0] && els[0].tagName == 'INPUT') els[0].value = val;
  if (els[1] && els[1].tagName == 'INPUT') els[1].value = val;
}

//HACK: As
function displaySuggestedList(i,cs,Hb,As){

  while(i.childNodes.length>0) {
    i.removeChild(i.childNodes[0]);
  }

  for(var f=0; f<cs.length; ++f){
    var u=document.createElement("DIV");
    setStyleForElement(u,"aAutoComplete");
    //HACK
    if (As && As[f]) u.addedString = As[f];
    u.onmousedown=Cb;
    u.onmouseover=pb;
    u.onmouseout=ec;
    var ka=document.createElement("SPAN");
    setStyleForElement(ka,"lAutoComplete");
    var ua=document.createElement("SPAN");
    //tn = document.createTextNode(cs[f]);
    ua.innerHTML= cs[f]; // the text for the suggested result...
    var ea=document.createElement("SPAN");
    setStyleForElement(ea,"dAutoComplete");
    setStyleForElement(ua,"cAutoComplete");
    u.displaySpan=ea;
    if(!ya) {
      ea.innerHTML=Hb[f]; 
    }
    //ua.appendChild(tn);
    ka.appendChild(ua);
    ka.appendChild(ea);
    u.appendChild(ka);
    i.appendChild(u)
  }

  //HACK
  if (cs.length > 0) { seeThroughWorkaround(_completeDiv.id, true); }
}

function D(name,gb){
  if(Ka){
    var I=document.styleSheets[0];
    if(I.addRule){
      I.addRule(name,gb)
    }else if(I.insertRule){
      I.insertRule(name+" { "+gb+" }",I.cssRules.length)
    }
  }
}

function getXMLHTTP(){
  var A=null;
  try{
    A=new ActiveXObject("Msxml2.XMLHTTP")
  }catch(e){
    try{
      A=new ActiveXObject("Microsoft.XMLHTTP")
    } catch(oc){
      A=null
    }
  }
  if(!A && typeof XMLHttpRequest != "undefined") {
    A=new XMLHttpRequest()
  }
  return A
}

function callSearch(Rb){
  if(_xmlHttp&&_xmlHttp.readyState!=0){
    _xmlHttp.abort();
  }
  _xmlHttp=getXMLHTTP();
  if(_xmlHttp){
    var myqr = "module=" + _inputField.searchmodule + "&formid=" + _inputField.searchid + "&field=" + _inputField.searchcampo + "&qr="+Rb;
    //alert(knomos_urlbase+"framework/autocomplete_feed.php?"+myqr);
    _xmlHttp.open("GET",knomos_urlbase+"framework/autocomplete_feed.php?"+myqr,true);
    _xmlHttp.onreadystatechange=function() {
      if(_xmlHttp.readyState==4&&_xmlHttp.responseText) {
        var frameElement=B;
        if(_xmlHttp.responseText.charAt(0)=="<"){
          _timeoutAdjustment--;
        }else{
          eval(_xmlHttp.responseText);
        }
      }
    }
    _xmlHttp.send(null);
  }
}

function selectEntry(Wa){
  Wa = Wa.replace(/&amp;/i,'&');
  Wa = Wa.replace(/&gt;/i, '>');
  Wa = Wa.replace(/&lt;/i, '<');
  _inputField.value=Wa;
  aa=Wa
}

