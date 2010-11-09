<html>
<head></head>
<body>

<form name="new_prest" method="post">

codice: 
<select name="codice">
<option value="001">001</option>
<option value="002">002</option>
<option value="003">003</option>
</select>
<br>
operatore: <input type="text" name="operatore" value="1">
<br>
data:
<input type="text" name="data" value="20-03-2000">
<br>
valore pratica:
<input type="text" name="valore_pratica" value="10000">
<br>
tipo pratica:
<input type="text" name="tipo_pratica" value="AMMN">
<br>
<br>
criterio:
<input type="text" name="criterio" value="MIN*1">
<br>

<iframe src="/framework/permission_tnf.php" width="900" height="300"></iframe>

<input type="submit" value="aggiorna pagina">
</form>

</body>

</html>
