<h4 class="heading colr">Mover Personagem</h4>
	   <blockquote>
	  <b class="colr">Selecione o mapa na qual queria se mover, independente do seu Level:</b><br /><br />
	  <form name="Move_Char" id="Move_Char" class="form">
	  <select name="Map" id="Map">
      {Map_List}
      </select><br /><br />
	  <input type="button" value="Mover Personagem" onclick="CTM_Load('?pag=paneluser&str=MOVE_CHAR&cmd=true','Command','POST',BuscaElementosForm('Move_Char'));" class="btnform">
	  </form>
	</blockquote>
	<div id="Command"></div>