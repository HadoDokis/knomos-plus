var consonanti =  "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
var numeri = "0123456789";
var nn=document.layers?true:false,liv;

function SetPageLoadCF()
{

//parent.document.getElementById("Fr1").height="295px"

}



function inizia()
	{
	liv=nn?document.layers.livelloNN:top.frames.livelloIE;
	}

function CalcolaCodiceFiscale()
	{
	document.CodiceFiscale.Risultato.value = "Calcolo C.F. in corso...";
	with (document.CodiceFiscale)
		 {
		 Cognome=iCognome.value;
		 Nome=iNome.value
		 GiornoNascita=iGiorno.options[iGiorno.selectedIndex].value;
		 MeseNascita=iMese.options[iMese.selectedIndex].value;
		 AnnoNascita=iAnno.value;
 		 Sesso=iGender.options[iGender.selectedIndex].value;
		Comune=iComune.value;
		 }
	
   if (Cognome != "" && Nome != "" && Comune != "")
   {
      ComuneCalcolato=CalcolaComune(Comune);
      rc = CalcolaCognome(Cognome);
	  rn = CalcolaNome(Nome)
	  rN = CalcolaNascita(GiornoNascita, MeseNascita, AnnoNascita, Sesso);

      //var cf = rc+" "+rn+" "+rN+" "+ComuneCalcolato+" ";
      var cf = rc+rn+rN+ComuneCalcolato;

      cf += CalcolaK(rc+rn+rN+ComuneCalcolato);
      if (ComuneCalcolato != -1)
		  document.CodiceFiscale.Risultato.value = cf;
		else
		  document.CodiceFiscale.Risultato.value = "Comune non presente";
   }

}

function CalcolaCognome(Cognome)
{
   var code = "";
   code = GetConsonanti(Cognome);
   if (code.length >= 3)
      code = code.substring(0, 3);
   else
   {
      code += GetVocali(Cognome).substring(0, 3 - code.length)
      if (code.length < 3)
         for (i = code.length; i < 3; i++)
            code += "X";
   }
   return code;
}

function CalcolaNome(Nome)
{
   var code = "";
   cons = GetConsonanti(Nome);
   if (cons.length > 3)
      code = cons.substring(0, 1) + cons.substring(2, 3) + cons.substring(3, 4);
   else if (cons.length == 3)
      code = cons;
   else
   {
      code = cons + GetVocali(Nome).substring(0, 3 - cons.length);
      if (code.length < 3)
         for (i = code.length; i < 3; i++)
            code += "X";
   }
   return code;
}

function GetConsonanti(Stringa)
{
   var cns = "";
   for (i = 0; i < Stringa.length; i++)
      if (consonanti.indexOf(Stringa.substring(i, i + 1)) != -1)
         cns += Stringa.substring(i, i + 1);
   return cns.toUpperCase();
}

function GetVocali(Stringa)
{
   var voc = "";
   for (i = 0; i < Stringa.length; i++)
      if (consonanti.indexOf(Stringa.substring(i, i + 1)) == -1 && Stringa.substring(i, i + 1) != " ")
         voc += Stringa.substring(i, i + 1);
   return voc.toUpperCase();
}

function CalcolaNascita(Giorno, Mese, Anno, Sesso)
{
   var code = "";
   code += Anno.substring(2, 4) + Mese;
   if (Sesso == "M")
      code += Giorno;
   else
      code += parseInt(40, 10) + parseInt(Giorno, 10);
   return code;
}

function CalcolaComune(Comune)
{
var flag = -1;

   for (i = 0; i < parent.comuni.arrComuni.length; i++)
   {
      if(Comune.toUpperCase() == parent.comuni.arrComuni[i][1])
      {
         flag = i;
         break;
      }
   }
   if (flag < 0)
      return -1;
   else
      return parent.comuni.arrComuni[flag][0];            
}

function CalcolaK(Stringa)
{
   var somma = 0, k;
   var arrPari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   var arrDispari = new Array(
      Array(0,1),
      Array(1,0),
      Array(2,5),
      Array(3,7),
      Array(4,9),
      Array(5,13),
      Array(6,15),
      Array(7,17),
      Array(8,19),
      Array(9,21),
      Array("A",1),
      Array("B",0),
      Array("C",5),
      Array("D",7),
      Array("E",9),
      Array("F",13),
      Array("G",15),
      Array("H",17),
      Array("I",19),
      Array("J",21),
      Array("K",2),
      Array("L",4),
      Array("M",18),
      Array("N",20),
      Array("O",11),
      Array("P",3),
      Array("Q",6),
      Array("R",8),
      Array("S",12),
      Array("T",14),
      Array("U",16),
      Array("V",10),
      Array("W",22),
      Array("X",25),
      Array("Y",24),
      Array("Z",23)
   );
   for (i = 0; i < Stringa.length; i += 2)
   {
      for (j = 0; j < arrDispari.length; j++)
      {
         if (Stringa.substring(i, i + 1).toUpperCase() == arrDispari[j][0])
         {
            somma += parseInt(arrDispari[j][1], 10);
            break;
         }
      }
   }
   for (i = 1; i < Stringa.length; i += 2)
   {
      if (isNaN(Stringa.substring(i, i + 1)))
         somma += parseInt(arrPari.indexOf(Stringa.substring(i, i + 1)), 10);
      else
         somma += parseInt(Stringa.substring(i, i + 1), 10);
   }
   k = somma % 26;
   k = arrPari.charAt(k);
   return k;
}
