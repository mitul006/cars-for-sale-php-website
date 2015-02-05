<div id="pretrazivac">
	<table align="center">
    	<tr>
        	<td width="150" style="border-bottom:solid 1px #00C; border-right:solid 1px #00C; font-family:Tahoma, Geneva, sans-serif; font-size:14px; background:url(slike/nastavak.jpg); color:#FFF; padding-bottom: 2px; padding-top: 5px; text-transform:uppercase;"><strong>Pretraživač</strong></td>
            <td></td>
        </tr>
        <tr>
        	<form action="search.php" method="post" name="pretrazivac">
                <tr>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Marka</td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Model</td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Cena (u evrima)</td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Godište</td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Godište</td>
                </tr>
                <tr>
                <td>
                <select name="marka" title="Izaberite marku automobila" style="border:solid 1px #00C; width:150px;">
                <option value="0" selected="selected" style="font-style:italic; font-weight:bold;">Sve marke</option>
                <option value="1">Acura</option>
                <option value="2">Alfa Romeo</option>
                <option value="3">Aston Martin</option>
                <option value="4">Audi</option>
                <option value="5">BMW</option>
                <option value="6">Chevrolet</option>
                <option value="7">Citroen</option>
                <option value="8">Ferrari</option>
                <option value="9">Fiat</option>
                <option value="10">Ford</option>
                <option value="11">Honda</option>
                <option value="12">Jeep</option>
                <option value="13">Lada</option>
                <option value="14">Lamborghini</option>
                <option value="15">Maybach</option>
                <option value="16">Mercedes</option>
                <option value="17">Nissan</option>
                <option value="18">Opel</option>
                <option value="19">Peugeot</option>
                <option value="20">Porsche</option>
                <option value="21">Renault</option>
                <option value="22">Subaru</option>
                <option value="23">Volkswagen</option>
                <option value="24">Yugo</option>
                <option value="25">Zastava</option>
                <option value="26">Ostalo</option>
                </select>
                </td>
                <td>
                <select name="model" title="Izaberite model automobila" disabled style="border:solid 1px #00C;width:150px;">
                <option value="30" style="font-style:italic; font-weight:bold;" selected="selected">Svi modeli</option>
                </select>
                </td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">do
                <input type="text" title="Unesite cenu u evrima" name="cena" maxlength="7" style="border:solid 1px #00C;width:150px;"/>
                </td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">od
                <input type="text" title="Unesite godište automobila" name="godisteod" maxlength="4" style="border:solid 1px #00C;width:150px;"/>
                </td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">do
                <input type="text" title="Unesite godište automobila" name="godistedo" maxlength="4" style="border:solid 1px #00C;width:150px;"/>
                </td>
                </tr>
                <tr>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Karoserija</td>
                <td style="font-family:Tahoma, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#333;">Vrsta motora</td>
                </tr>
                <tr>
                <td>
                <select name="karoserija" title="Izaberite karoseriju automobila" style="border:solid 1px #00C;width:150px;">
                <option value="100" style="font-style:italic; font-weight:bold;">Izaberi</option>
                </select>
                </td>
                <td>
                <select name="motor" title="Izaberite vrstu motora" style="border:solid 1px #00C;width:150px;">
                <option value="200" style="font-style:italic; font-weight:bold;">Izaberi</option>
                </select>
                </td>
                <td></td>
                <td></td>
                <td align="right"><input type="submit" value="Pretraga" name="pretragaDugme" style="border:solid 1px #00C; margin-right:5px;width:150px;background:url(slike/nastavak.jpg); color:#FFF;"/></td>
                </tr>
            </form>
        </tr>
    </table>
</div>