<article class="box-section">
<div class="header-section">Termos / Regras do {Server_Name}</div>
	<blockquote>
	{Terms}
	<?php
		if($_GET["register"] == true)
		{
	?>
	<br /><br>
	<center>
    <input type="button" class="btnform" value="Aceito" onclick="CTM_Load('?pag=register','conteudo','GET');">
    <input type="button" class="btnform" value="N&atilde;o Aceito" onclick="javascript: window.location='http://www.pollypocket.com.br/';">
    </center>
	<? } ?>
	</blockquote>
</article>