<article class="box-section">
<div class="header-section">Chat {Server_Name}</div>
	<blockquote>
	<?php
	if(@Chat_Enable == false)
	{
		exit("<div class=\"info-box\"> O Chat se encontra Desativado</div>");
	}
	else
	{
	?>
	<div align="center">{Chat_Scripts}</div>
	<? } ?>
	</blockquote>
</article>