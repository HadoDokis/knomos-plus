	    <div class="pratica" >
	      <table width="100%"  border="0" cellspacing="1">
              <tr>
                <th colspan="2" width="100%" align="left"><span class="pratica-tit">%[TYPE_APP]% </span></th>
             </tr>
						<tr>
                <td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[TITLE-TITLE]%: <span class="pratica-resalt-01">%[TITLE]%</span></td>
              </tr>
<tr>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"> <span class="pratica-resalt-01">%[TYPE]%</td>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"> <span class="pratica-resalt-01">%[DONE]%</span></td>
</tr>
            <tr>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[DAY-TITLE]%: <span class="pratica-resalt-01">%[DAY]%</span> - %[TIME-TITLE]% <span class="pratica-resalt-01">%[TIME]%</span></td>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[CODICE-TITLE]%: <span class="pratica-resalt-01">%[CODICE]%</span></td>
              </tr>
            <tr>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[REF_PRAT-TITLE]%: <span class="pratica-resalt-01">%[REF_PRAT]%</span></td>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PRIORITA-TITLE]%: <span class="pratica-resalt-01">%[PRIORITA]%</span></td>
            </tr>
            <tr>
                <td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[OPERATOR-TITLE]%: <span class="pratica-resalt-01">%[OPERATOR]%</span></td>
            </tr>
            <tr>
                <td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"><strong>%[NOTE-TITLE]%:</strong> %[NOTE]%</td>
            </tr>
                <td width="100%" colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">
	    <div id="ModuloRinvio" style="display: none;">   
	    <a href="javascript:ApriChiudiGestioneRinvio()" style="text-decoration: none">
	    <h5> gestione dell'udienza / rinvio <img src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" name="fle_appunt_home" width="16" height="16" border="0" align="absmiddle" id="fle_opz_01"></h5>
	    </a>
	    <div id="GestRinvio" style="display: none;">         
	    <iframe   " VSPACE="0" name="FrameRinvio" id="FrRinvio" src="/utilita/pages/calendar/ModuloRinvio.php"  width="100%" height="295" frameborder=0 MARGINWIDTH="0" marginheight="0"> 
	    </iframe>
	    </div>
	    </div>
</td>
            </tr>

                  </table>

	    <br>


	    <a href="javascript:ApriChiudiImpegniDerivati()" style="text-decoration: none">
	    <h5> nuovo impegno derivato <img src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" name="fle_appunt_home" width="16" height="16" border="0" align="absmiddle" id="fle_opz_00"></h5>
	    </a>
	    <div id="GestImpDerivati" style="display: none;">         
	    <iframe   " VSPACE="0" name="FrameImpDer" id="FrameImpegniDerivati"  src="/utilita/calcolatrici/Termini/Processuali/TerminiProcessualiHome1.php?modalita=CalcImpDeriv"   width="100%" height="333px" frameborder=0 MARGINWIDTH="0" marginheight="0"> 
	    </iframe>
	    </div>

	      <p align="center">

%[BUTTON_W-TITLE]% | %[BUTTON_D-TITLE]% | %[BUTTON_DOPRES-TITLE]%
|
<input  class="bot-submit" value="Fatto/Da fare" name="test1" onclick="javascript:Fatto()" type="button"> 
</p>
	      <p align="center">%[BUTTON_PRAT-TITLE]% | %[BUTTON_PRES-TITLE]% | %[BUTTON_SCAD-TITLE]% | %[BUTTON_DOC-TITLE]%  | %[BUTTON_DBOX-TITLE]% </p>
	    </div>
