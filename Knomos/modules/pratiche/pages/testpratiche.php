<!--
<html>
<head>
<body>
<form name="f" method="GET" action="google.php">

<input type=hidden name=complete value="1">
<input type=hidden name=hl value="en">
<input type=hidden name=lr value="">

Contatti:<br>
<input autocomplete="off" type=text name="q0" size=30 maxlength=2048 onKeyPress="if (event.keyCode == 13) return false; ">
<br>
<br>
Pratiche:<br>
<input autocomplete="off" type=text name="q1" size=30 maxlength=2048 onKeyPress="if (event.keyCode == 13) return false; ">
<br><br>
<input type=submit value="Google Search" name=btnG>
</form>

<script language="JavaScript" type="text/javascript"  src="/template/skin_sutti/js/autocomplete.js"></script>

<SCRIPT>
InstallAC('contact',0,'test',document.f,document.f.q0,document.f.btnG);
InstallAC('pratiche',0,'test',document.f,document.f.q1,document.f.btnG);
</SCRIPT>

</body>
</html>
-->

<html>
<head>
<script language="JavaScript" type="text/javascript"  src="/template/skin_sutti/js/autocomplete.js"></script>
</head>
<body>

<form name="f" method="GET" action="google.php">

<input autocomplete="off" type=text name="q0" size=30 maxlength=2048 onKeyPress="if (event.keyCode == 13) return false; ">
<input type="submit" name="btnG">
</form>

<script> InstallAC('contact',0,'test',document.f,document.f.q0,document.f.btnG); </script>


</body>
</html>
