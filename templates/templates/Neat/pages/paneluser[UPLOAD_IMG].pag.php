<form method="post" action="?pag=paneluser&str=UPLOAD_IMG&cmd=upload" enctype="multipart/form-data" class="form">
<div style="padding: 10px;"><h4 class="heading colr">Gerenciar Imagem</h4><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="39%" valign="top"><strong class="colr">Alterar Imagem:</strong></td>
    <td width="50%"><input type="file" name="Char_Image" id="Char_Image"></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td width="39%" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" style="padding: 10px;"><input type="submit" value="Enviar Imagem" class="btnform" /></td>
    <td align="left" style="padding: 10px;"><input type="button" value="Remover Imagem" onclick="javascript: window.location='?pag=paneluser&str=UPLOAD_IMG&cmd=delete';" class="btnform" /></td>

  </tr>
</table>
</div>
</form>
{Command_Result}