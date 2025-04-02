<h4 class="heading colr">Banir Char</h4>
<blockquote>
<form name="Ban_Char" id="Ban_Char" class="form">
<table width="305" border="0">
  <tr>
    <td>Char:</td>
    <td><input type="text" name="Character" id="Character" /></td>
  </tr>
  <tr>
    <td>Tempo:</td>
    <td><input type="text" name="Time" id="Time" onKeyPress="return NumbersOnly(event)" /></td>
  </tr>
  <tr>
    <td>Motivo:</td>
    <td><input type="text" name="Reason" id="Reason" /></td>
  </tr>
</table>
<input type="button" value="Banir Char" onclick="CTM_Load('?pag=paneladmin&str=BAN_CHAR&cmd=true','Command','POST',BuscaElementosForm('Ban_Char'));" class="btnform">
</form>
</blockquote>
<div id="Command"></div>