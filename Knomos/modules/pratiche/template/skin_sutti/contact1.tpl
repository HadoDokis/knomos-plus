	    <div class="pratica" >
	      <table width="100%"  border="0" cellspacing="1">
              <tr>
                <th width="50%" align="left"> <span class="pratica-tit">%[PR_CODICE]% </span></th>
                <th width="50%" align="right">%[PR_NUMERO-TITLE]%: <span class="pratica-tit">%[PR_NUMERO]% </span></th>
              </tr>

<tr>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">


%[PR_OGGETTO-TITLE]%: <strong>%[PR_OGGETTO]%</strong></td>
                <td width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"><strong>%[PR_SCHEDARIO-TITLE]%: 
%[PR_SCHEDARIO]%</strong>
</td>
              </tr>
              <tr>
                <td id="TIPO" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_TIPO-TITLE]%: <strong>%[PR_TIPO]%</strong> <span class="pratica-resalt-01"></span></td>
                <td id="RESP" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_OPERATORE-TITLE]%: <strong>%[PR_OPERATORE]%</strong></td>
              </tr>
              <tr>
                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiParti()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Dati relativi alle parti ed agli altri soggetti interessati:<img id="ImmFlecchia1" src="%[IMAGE_GPATH]%ico/home_flecchia_sopra.gif" width="16" height="16" border="0" align="absmiddle"></span></center></a>
		</td>
              </tr>

                <td id="PA1a" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"> %[PR_REF_IDCLIENTE-TITLE]%: </strong>%[PR_REF_IDCLIENTE]%</strong></td>
                <td id="PA2a" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_REF_IDBENEFIC-TITLE]%: </strong>%[PR_REF_IDBENEFIC]%</strong></td>
              </tr>
              <tr>
                <td id="PA1b" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_REF_IDAVVR-TITLE]%: </strong>%[PR_REF_IDAVVR]%</strong></td>
                <td id="PA2b" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_REF_IDALTRI-TITLE]%: </strong>%[PR_REF_IDALTRI]%</strong></strong></td>
              </tr>

                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiAutoritaGiudiziaria()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Dati relativi all'Autorità giudiziaria ed all'attività di udienza:<img id="ImmFlecchia2" src="%[IMAGE_GPATH]%ico/home_flecchia_sopra.gif" width="16" height="16" border="0" align="absmiddle"></span></center></a>
		</td>
              <tr>
                <td id="AG1a" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_COMP_COD-TITLE]%: <strong>%[PR_COMP_DESC]%</strong></td>
                <td id="AG1b" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_GIUDICE-TITLE]%: <strong>%[PR_GIUDICE]%</strong></td>
              </tr>
              <tr>
                <td id="AG2a" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_NRUOLO-TITLE]%: <strong>%[PR_NRUOLO]%</strong></td>
                <td id="AG2b" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_NRUOLO_ALTRI-TITLE]%: <strong>%[PR_NRUOLO_ALTRI]%</strong></td>
              </tr>
              <tr>
                <td id="AG3a" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_REFERRAL-TITLE]%: <strong>%[PR_REFERRAL]% </strong></td>
                <td id="AG3b" style="display:inline" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"></td>
              </tr>
              <tr>
                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiUffici()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Uffici di gestione della pratica:<img id="ImmFlecchia3" src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" width="16" height="16" border="0" align="absmiddle"></span></center></a>
		</td>
              </tr>
               <tr>
                <td id="UF1a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_DEPT-TITLE]%: <strong>%[PR_DEPT]% </strong></td>
                <td id="UF1b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_UFF-TITLE]%: <strong>%[PR_UFF]% </strong></td>
              </tr>
               <tr>
                <td id="UF2a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_UFF_ORIG-TITLE]%: <strong>%[PR_UFF_ORIG]% </strong></td>
                <td id="UF2b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_PROF_ORIG-TITLE]%: <strong>%[PR_PROF_ORIG]% </strong></td>
              </tr>

              <tr>
                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiParametriNotulazione()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Parametri di notulazione:<img id="ImmFlecchia4" src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" width="16" height="16" border="0" align="absmiddle" ></span></center>
	    </a></td>
              </tr>
              <tr>
                <td id="PN1a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_VALORE-TITLE]%: <strong>%[PR_VALORE]%</strong></td>
                <td id="PN1b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_FIDO-TITLE]%: <strong>%[PR_FIDO]%</strong> </td>
              </tr>
              <tr>
                <td id="PN2a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_CRITERIO-TITLE]%: <strong>%[PR_CRITERIO]%</strong></td>
                <td id="PN2b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_COMP_COD-TITLE]%: <strong>%[PR_COMP_COD]% </strong></td>
              </tr>

                <td id="PN3a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_ON_ORAR-TITLE]%: <strong>%[PR_ON_ORAR]% &euro;</strong></td>
                <td id="PN3b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_PERC_ONOR-TITLE]%: <strong>%[PR_PERC_ONOR]% %</strong></td>
              </tr>
              <tr>
                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiAltriDati()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Altri dati:<img id="ImmFlecchia5" src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" width="16" height="16" border="0" align="absmiddle"></span></center>
	    </a></td>
              </tr>

              <tr>
                <td id="AD1a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_DATA_INS-TITLE]%:<strong>%[PR_DATA_INS]%</strong></td>
                <td id="AD1b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_DATA_MOD-TITLE]%:<strong>%[PR_DATA_MOD]%</strong></td>
              </tr>
              <tr>
                <td id="AD2a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_DATA_INIZIO-TITLE]%: <strong>%[PR_DATA_INIZIO]%</strong></td>
                <td  id="AD2b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'"></td>
              </tr>


              <tr>
                <td width="100%"  colspan="2"><a href="javascript:ApriChiudiNotePratica()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Note della pratica: <img id="ImmFlecchia6" src="%[IMAGE_GPATH]%ico/home_flecchia_sopra.gif" width="16" height="16" border="0" align="absmiddle"></span></center>
	    </a></td>
              </tr>
              <tr>
                <td id="NO" style="display:inline" width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[NOTE]%</
td>
              </tr>

<td width="100%"  colspan="2"><a href="javascript:ApriChiudiCollegamentiPratiche()" style="text-decoration: none">
	    <span class="pratica-resalt-01"></center>Dati relativi a collegamenti o riunioni fra pratiche:<img id="ImmFlecchia7" src="%[IMAGE_GPATH]%ico/home_flecchia_inf.gif" width="16" height="16" border="0" align="absmiddle"></span></center></a>
		</td>
              </tr>
               <tr>
                <td id="CP1a" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_RIUNITA_A-TITLE]%: %[PR_RIUNITA_A]%</td>

                <td id="CP1b" style="display:none" width="50%" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[PR_RIUNITA_IL-TITLE]%: %[PR_RIUNITA_IL]%</td>
              </tr>
               <tr>
              <td class="sezione" id="CP2" style="display:none" width="100%" align="left" colspan="2"><center><b>Pratiche collegate o riunite a: %[PR_CODICE]% </b></center></td>
              </tr>

              <tr>
                <td id="CP3" style="display:none" width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[RIUN_LIST-TITLE]%</td>
              </tr>  

              <tr>
                <th width="100%" align="left" colspan="2"><center><b> %[PR_SCAD-TITLE]%</b></center></th>
              </tr>
              <tr>
                <td width="100%"  colspan="2" onMouseOver="this.className='pratica-over-sub'" onMouseOut="this.className='null'">%[SCAD_LIST-TITLE]%</td>
              </tr>
       
           </table>





		<p align="center">%[BUTTON_W-TITLE]% | %[BUTTON_M-TITLE]% | %[BUTTON_SITCONT-TITLE]%</p>
	      <p align="center">%[BUTTON_SCAD-TITLE]% | %[BUTTON_PRES-TITLE]% | %[BUTTON_DOC-TITLE]% | %[BUTTON_DBOX-TITLE]% 
</p>
	      <p align="center"> %[BUTTON_NEWSCAD-TITLE]% | %[BUTTON_NEWPRES-TITLE]%  | %[BUTTON_NEWDOC-TITLE]% 

	    </div>
