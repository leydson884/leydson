<article class="box-section">
<div class="header-section">Informa&ccedil;&otilde;es</div>
	<blockquote>
	<ul class="ul">
	  <li>&raquo; Nome: <span>{Server_Name}</span></li>
	  <li>&raquo; Vers&atilde;o: <span>{@_Info#Version}</span></li>
	  <li>&raquo; Experi&ecirc;ncia: <span>{@_Info#Xp}</span></li>
	  <li>&raquo; Drop: <span>{@_Info#Drop}</span></li>
	  <li>&raquo; Bug Bless: <span>{Bug_Bless}</span></li>
	  <li>&raquo; Tipo de Reset: <span>{Reset_Type}</span></li>
	  <li>&raquo; Reset Free: <span>{Reset_Free}</span></li>
	  <li>&raquo; Reset {VIP_Name#1}: <span>{Reset_VIP-1}</span></li>
	  <li>&raquo; Reset {VIP_Name#2}: <span>{Reset_VIP-2}</span></li>
	<?php
	  if(constant("VIP_Number") >= 3)
	  {
	  ?>
		<li>&raquo; Reset {VIP_Name#3}: <span>{Reset_VIP-3}</span></li>
	<?php
	  }
	  if(constant("VIP_Number") >= 4)
	  {
	?>
		<li>&raquo; Reset {VIP_Name#3}: <span>{Reset_VIP-4}</span></li>
	<?php
	  }
	  if(constant("VIP_Number") == 5)
	  {
	?>
		<li>&raquo; Reset {VIP_Name#3}: <span>{Reset_VIP-5}</span></li>
	<? } ?>
	  <li>&raquo; Total de Contas: <span>{Accounts}</span></li>
	  <li>&raquo; Total de Personagens: <span>{Characters}</span></li>
	  <li>&raquo; Total de Guilds: <span>{Guilds}</span></li>
	  <li>&raquo; Total de Contas {VIP_Name#1}: <span>{VIP-1}</span></li>
	  <li>&raquo; Total de Contas {VIP_Name#2}: <span>{VIP-2}</span></li>
               <?php
	  if(constant("VIP_Number") >= 3)
	  {
	  ?>
               <li>&raquo; Total de Contas {VIP_Name#3}: <span>{VIP-3}</span></li>
               <?php
	  }
	  if(constant("VIP_Number") >= 4)
	  {
	  ?>
               <li>&raquo; Total de Contas {VIP_Name#4}: <span>{VIP-4}</span></li>
               <?php
	  }
	  if(constant("VIP_Number") == 5)
	  {
	  ?>
               <li>&raquo; Total de Contas {VIP_Name#5}: <span>{VIP-5}</span></li>
               <? } ?>
	  <li>&raquo; Contas Banidas: <span>{Acc_Ban}</span></li>
	  <li>&raquo; Personagens Banidos: <span>{Char_Ban}</span></li>
	  <li>&raquo; Personagens PK: <span>{Char_PK}</span></li>
	  <li>&raquo; Personagen Herois: <span>{Char_Hero}</span></li>
	  <li>&raquo; Servidor: <span>{Server}</span></li>
	  <li>&raquo; Horario: <span>{Server_Time}</span></li>
               <?php
	  if(constant("Status_Enable") > 0)
	  {
	  ?>
		  <li>&raquo; Status: <span>{Status}</span></li>
	  <? } ?>
	  <li>&raquo; Players Online: <span>{Online}</span></li>
	  <li>&raquo; Record Online: <span>{Record}</span></li>
	</ul>
	</blockquote>
</article>

<br>
<h5>Descricoes e exemplo de uso dos Comandos</h5>
<table id="noticias" align="center" border="0" cellpadding="1" cellspacing="2" width="100%">
<tbody>
<tr>
<td align="justify" width="30%">/addstr -&gt; </td>
<td align="justify" width="70%">Usado para distribuir pontos em forca. (Exemplo: /addstr 500)</td>
</tr>
<tr>
<td align="justify" width="30%">/addagi -&gt; </td>
<td align="justify" width="70%">Usado para distribuir pontos em agilidade. (Exemplo: /addagi 500)</td>
</tr>
<tr>
<td align="justify" width="30%">/addvit -&gt; </td>
<td align="justify" width="70%">Usado para distribuir pontos em vitalidade. (Exemplo: /addvit 500)</td>
</tr>
<tr>
<td align="justify" width="30%">/addene -&gt; </td>
<td align="justify" width="70%">Usado para distribuir pontos em energia. (Exemplo: /addeene 500)</td>
</tr>
<tr>
<td align="justify" width="30%">/addecmd -&gt;</td>
<td align="justify" width="70%">Usado para distribuir pontos em Comando. (Exemplo: /addecmd 500)</td>
</tr>
</tbody>
</table>
<br>
<table id="noticias" align="center" border="0" cellpadding="1" cellspacing="2" width="100%">
<tbody>
<tr>
<td align="justify" width="30%">/reset -&gt; </td>
<td align="justify" width="70%">Usado para resetar o personagem.</td>
</tr>
<tr>
<td align="justify" width="30%">/pkclear -&gt; </td>
<td align="justify" width="70%">Usado para limpar o PK in-game </td>
</tr>
<tr>
<td align="justify" width="30%">/info -&gt; </td>
<td align="justify" width="70%">Mostra Informacoes do Pesonagem (Reset,Master Reset,Golds..)</td>
</tr>
<tr>
<td align="justify" width="30%">/zen -&gt; </td>
<td align="justify" width="70%">Usado para adicionar zen.</td>
</tr>
<tr>
<td align="justify" width="30%">Para editar essas infos vai em: -&gt; </td>
<td align="justify" width="70%">\templates\Neat\pages no arquivo 'info.pag'</td>
</tr>
</tbody>
</table>
<br>
