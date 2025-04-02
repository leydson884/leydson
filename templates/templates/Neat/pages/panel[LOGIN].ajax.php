<form name="form-login" id="form-login">
	<input type="text" name="Log_Account" placeholder="LOGIN" value="{Account}" onKeyUp="this.value = this.value.toLowerCase();">
	<input type="password" name="Log_Password" placeholder="SENHA" value="{Password}">
	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=recovery','conteudo','GET');">Recuperar senha</a>
	<input type="button" name="btnlogin" class="btnform" value="Logar" onClick="CTM_Load('?ajax=panel&cmd=login','Panel','POST',BuscaElementosForm('form-login'));">
</form>
{Message}