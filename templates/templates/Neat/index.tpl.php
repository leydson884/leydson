<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>{%TITLE_WEB%}</title>
<meta name="author" content="LucasHP">
<meta name="description" content="Neat Premium Template">
<meta name="keywords" content="neat, mu, muonline, online, cetemaster, lucashp, server, web">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nova+Slim' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="modules/header/javascripts/ajax.js"></script>
<script type="text/javascript" src="modules/header/javascripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/jquery.placeholder.js"></script>
<script type="text/javascript" src="modules/header/javascripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modules/header/javascripts/sexyalertbox.v1.2.jquery.js"></script>
<script type="text/javascript" src="modules/header/javascripts/sexy-tooltips.v1.1.jquery.js"></script>
<script type="text/javascript" src="modules/header/javascripts/jquery.lightbox.js"></script>
<script type="text/javascript" src="modules/header/javascripts/SpryTabbedPanels.js"></script>
<script type="text/javascript" src="modules/header/javascripts/functions.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
function Credits()
{
	Sexy.info("<span class=\"h1\">Effect Web {Web_Version}</span><br><br>Desenvolvido Por: <b>Erick-Master</b><br><br><b>CTM TEAM Softwares</b><br><a target=\"_blank\" href=\"http://www.ctmts.com.br\">www.ctmts.com.br</a>");
}
function CreditsTpl()
{
	Sexy.info("<span class=\"h1\">Neat Premium Template</span><br><br>Desenvolvido Por: <b>LucasHP</b><br><br><b>CTM TEAM Softwares</b><br><br><b>lucashp@lhpdesigner.com.br</b><br><a target=\"_blank\" href=\"http://www.ctmts.com.br\">www.ctmts.com.br</a>");
}
function Record_Gen()
{
	Sexy.info("No dia <b>{Record_Gen#Date}</b> as <b>{Record_Gen#Time}</b>.<br>Nosso Record teve o total de <b class=\"colr\">{Record_Gen#Players}</b> Player(s) Online");
}
function Record_Day()
{
	Sexy.info("Hoje (<b>{Record_Day#Date}</b>) as <b>{Record_Day#Time}</b>.<br>Nosso Record teve o total de <b class=\"colr\">{Record_Day#Players}</b> Player(s) Online");
}
</script>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style type="text/css">
	@import url("templates/{Template_Dir}/media/styles/neat.css");
	@import url("modules/header/css/sexyalertbox.css");
	@import url("modules/header/css/sexy-tooltips.css");
	@import url("modules/header/css/jquery.lightbox.css");
	@import url("modules/header/css/SpryTabbedPanels.css");
</style>
</head>
<body>
<nav>
<div class="center">
	<ul class="no-margin">
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=home','conteudo','GET'); AutoLoad();">Home</a></li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=paneluser','conteudo','GET');">Painel</a>
		<ul>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=paneluser&option=SELECT_CHAR','conteudo','GET');">Gerenciar Personagem</a></li>
		</ul>
        </li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=info','conteudo','GET');">Informa&ccedil;&otilde;es</a>
		<ul>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=staff','conteudo','GET');">Equipe</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=terms','conteudo','GET');">Regras / Termos</a></li>
		</ul>
		</li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=terms&register=true','conteudo','GET');">Cadastro</a></li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=downloads','conteudo','GET');">Downloads</a></li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking','conteudo','GET');">Rankings</a>
		<ul>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resets','conteudo','GET');">Resets Gerais</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsday','conteudo','GET');">Resets Diarios</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsweek','conteudo','GET');">Resets Semanais</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsmonth','conteudo','GET');">Resets Mensais</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=mresets','conteudo','GET');">Master Reset</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=guild','conteudo','GET');">Guilds</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=pk','conteudo','GET');">Top PK</a></li>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=hero','conteudo','GET');">Top Hero</a></li>
			<?php
			global $_Ranking;
			if($_Ranking["Gens"]["Enable"] == true)
			{
			?>
				<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=gens','conteudo','GET');">Gens</a></li>
			<? } ?>
		</ul>
		</li>
		<li><a href="#" onclick="CTM_Load('?pag=contact','conteudo','GET');">Contato</a>
		<ul>
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=contact&type=mail','conteudo','GET');">E-Mail / Skype</a></li>
			{Menu#Suportt_Phone}
			<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=contact&type=tickets','conteudo','GET');">Tickets</a></li>
		</ul>
		</li>
		<li><a href="#">Extras</a>
		<ul>
			<li><a href="#">Redes Sociais</a>
			<ul>
				<li><a target="_blank" href="{Menu#Orkut_Link}">Facebook </a></li>
				{Menu#Twitter_Link}
			</ul>
			</li>
			{Menu#Chat}
			{Menu#Raffles}
			{Menu#Extras}
		</ul>
		</li>
		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=vip-cash','conteudo','GET');">VIPs / {Coin_1}</a></li>
		<li>
			{Menu#Shops}
			{Menu#Forum}
	</ul>
</div>
</nav>
<header>
<div class="center">
	<img src="templates/{Template_Dir}/images/banner.png" width="1000" height="300" alt="ServerName">
	<div id="kingOfPvp">
   	  <img src="<?php echo $GLOBALS['CTM_General']->Image(NEAT_KingOfPVP); ?>" width="77" height="77" alt="<?php echo NEAT_KingOfPVP; ?>">
      <h5>Rei do PVP</h5>
      <p>NicK: <a href="javascript:void(EffectWeb);" onClick="CTM_Load('?pag=search&char=<?=urlencode(NEAT_KingOfPVP);?>','conteudo','GET');">
      <?php echo NEAT_KingOfPVP; ?></a></p>
      <p><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=reipvp','conteudo','GET');">( Saiba mais )</a></p>
    </div>
</div>
</header>
<div id="in-content" class="center">
	<?php if(constant("NEAT_Slide") == true){ ?>
	<!-- slide -->
	<article id="slide">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<a href="<?php echo NEAT_LinkSlide01; ?>">
            	<img src="<?php echo NEAT_ImgSlide01; ?>" data-thumb="<?php echo NEAT_ImgSlide01; ?>" alt="" title="<?php echo NEAT_DescSlide01; ?>">
            </a>
			<a href="<?php echo NEAT_LinkSlide02; ?>">
            	<img src="<?php echo NEAT_ImgSlide02; ?>" data-thumb="<?php echo NEAT_ImgSlide02; ?>" alt="" title="<?php echo NEAT_DescSlide02; ?>">
            </a>
			<a href="<?php echo NEAT_LinkSlide03; ?>">
            	<img src="<?php echo NEAT_ImgSlide03; ?>" data-thumb="<?php echo NEAT_ImgSlide03; ?>" alt="" title="<?php echo NEAT_DescSlide03; ?>">
            </a>
			<a href="<?php echo NEAT_LinkSlide04; ?>">
            	<img src="<?php echo NEAT_ImgSlide04; ?>" data-thumb="<?php echo NEAT_ImgSlide04; ?>" alt="" title="<?php echo NEAT_DescSlide04; ?>">
            </a>
		</div>
	</div>
    </article>
    <?php } ?>
    <span class="line-separator"><!-- Separator --></span>
    
	<!-- aside left -->
    <aside id="left">
    	<article class="box-aside">
        <div class="header-aside">Painel de Controle</div>
        	<div id="Panel">{Div#Panel}</div>
        </article>
    	<article class="box-aside">
        <div class="header-aside">Informa&ccedil;&otilde;es</div>
        	<ul class="aside-list">
            	<li>Vers&atilde;o: <span>{@_Info#Version}</span></li>
			  <li>Experi&ecirc;ncia: <span>{@_Info#Xp}</span></li>
				<li>Drops: <span>{@_Info#Drop}</span></li>
				<li>Bug Bless: <span>{@_Info#BugBless}</span></li>
				<li>Reset: <span>{@_Info#ResetType}</span></li>
				<li>Total de Contas: <span>{@_Info#Accounts}</span></li>
				<li>Toral de Personagens: <span>{@_Info#Characters}</span></li>
				<li>Total de Guilds: <span>{@_Info#Guilds}</span></li>
                <li>Contas {VIP_Name#1}: <span>{@_Info#VIP-1}</span></li>
                <li>Contas {VIP_Name#2}: <span>{@_Info#VIP-2}</span></li>
               <li>Contas Banidas: <span>{@_Info#Acc_Ban}</span></li>
				 <li>Personagens Banidos: <span>{@_Info#Char_Ban}</span></li>
                <li>Record Online: <a href="javascript: void(EffectWeb);" onclick="Record_Gen(); return false;"><b>{Record_Gen#Players}</b></a></li>
                <li>Record Hoje: <a href="javascript: void(EffectWeb);" onclick="Record_Day(); return false;"><b>{Record_Day#Players}</b></a></li>
            </ul>
        </article>
    	<article class="box-aside">
        <div class="header-aside">Equipe {Server_Name}</div>
        	<div id="StaffList">{Staff_List}</div>
      </article>
    	<article class="box-aside">
        <div class="header-aside">Enquete</div>
        	<div id="Web_Poll">{Web_Poll}</div>
      </article>
      <article class="box-aside">
        <div class="header-aside">Divulgue</div>
         <a href='/divulgar/'target='_blank'><img border='0' height='70' src='https://lh4.googleusercontent.com/-DNfMZ4Aa0I0/UmVD2ttciTI/AAAAAAAAD_M/Q-CHizVEUIM/w299-h76-no/divulgue.gif' title=' Ajude Divulgar' width='200'/></a> <br>

      </article>
    </aside>
    
	<!-- section -->
	<section>
		<div id="conteudo">{%WEB_NAVIGATION%}</div>
    </section>
    
	<!-- aside right -->
    <aside id="right">
	    <div class="box-aside no-padding">
    	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=downloads','conteudo','GET');" class="opacity">
        	<img src="templates/{Template_Dir}/images/download.png" width="218" height="90" alt="Download">
        </a>
        </div>
    	<article class="box-aside">
        <div class="header-aside">Servidores</div>
        	<div id="ServerRefresh" style="display: none;"></div>
            <div id="Servers">{Server_List}</div>
        </article>
        
		<div id="top-guild">
		<?php if(constant("Top_Guilds") == true){ ?>
    	<article class="box-aside">
        <div class="header-aside">Top Guild's</div>
        	<ul id="top5-guilds" class="aside-list">
			<?php
			global $CTM_MSSQL;
			$query = $CTM_MSSQL->query("SELECT TOP 5 G_Name,G_Mark,G_Score FROM ".MuGen_DB.".dbo.Guild ORDER BY G_Score DESC");
			$cont = NULL;
			while($topguilds = mssql_fetch_array($query)){
				if($topguilds[2] == NULL){
					$pts = 0;
				}else{
					$pts = $topguilds[2];
				}
            	echo "<li>
                <img src=\"?public=logoGuild&amp;code=".urlencode(bin2hex($topguilds[1]))."\" width=\"45\" height=\"45\" class=\"border\" alt=\"\">
                <p>Guild: <a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($topguilds[0])."','conteudo','GET');\">".$topguilds[0]."</a></p>
                <p>Score: <span>( ".$pts." pts. )</span></p>
                <span class=\"position\">".$cont."</span>
                </li>";
				}
			?>
            </ul>
        </article>
        <?php } ?>
    	<article class="box-aside">
        <div class="header-aside">Facebook {Server_Name}</div>


<!-- Facebook like box -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
        </script>
		<div class="fb-like-box" data-href="https://www.facebook.com/ajudaemmuonline" data-width="200" data-height="285" data-show-faces="true" data-border-color="#cccccc" data-stream="false" data-header="false"></div>
 </article>
 

          <article class="box-aside">
        <div class="header-aside">Comandos do Servidor[In-Game]</div>


<!-- Facebook like box -->
		<div id="fb-root"></div>
          	<ul class="aside-list">
             <li>/addstr&raquo; Adiciona pontos em forca</li>
             <li>/addagi&raquo; Adiciona pontos em Agilidade</li>
             <li>/addvit&raquo; Adiciona pontos em vitalidade</li>
             <li>/addene&raquo; Adiciona pontos em Energia</li>
             <li>/addcmd&raquo; Adiciona pontos em Comando</li>
             <li>/reset&raquo; Reseta o Personagem</li>
             <li>/pkclear&raquo; Limpa PK do Personagem</li>
             <li>/zen&raquo; Adquirir Zen</li>
             <li>>>para editar essa coluna vai em \templates\Neat no arquivo 'index.tpl'</li>
             <li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=info','conteudo','GET');">+Infos...</a>
            </ul>
 </article>
 
    </aside>
</div>

<footer>
<div class="center">
	<address>
    	<p>Effect Web {Web_Version}</p>
    	<p>Powered by: <a href="javascript: void(EffectWeb)" onclick="Credits(); return false;">Erick-Master</a> | 
        Template by: <a href="javascript: void(EffectWeb)" onclick="CreditsTpl(); return false;">LucasHP</a></p>
    	<p>Copyright &copy; {Year} {Server_Name} - Todos os Direitos Reservados</p>
    </address>
	<ul id="social">
    	<li><a href="<?php echo NEAT_Facebook; ?>" target="_blank" title="Curta nossa p&aacute;gina no Facebook!">
        	<img src="templates/{Template_Dir}/images/facebook.gif" width="42" height="41" alt="Facebook">
        </a></li>
    	<li><a href="<?php echo NEAT_Twitter; ?>" target="_blank" title="Siga-nos no Twitter!">
        	<img src="templates/{Template_Dir}/images/twitter.gif" width="42" height="41" alt="Twitter">
        </a></li>
        <script language="JavaScript">
		function addFav(){
			var url      = "<?php echo NEAT_FavoriteLink; ?>";
			var title    = "{%TITLE_WEB%}";
			if (window.sidebar) window.sidebar.addPanel(title, url,"");
			else if(window.opera && window.print){
				var mbm = document.createElement('a');
				mbm.setAttribute('rel','sidebar');
				mbm.setAttribute('href',url);
				mbm.setAttribute('title',title);
				mbm.click();
			}
			else if(document.all){window.external.AddFavorite(url, title);}
		}
		</script>
    	<li><a href="javascript:addFav();" title="Adicione aos favoritos!">
        	<img src="templates/{Template_Dir}/images/favorite.gif" width="42" height="41" alt="Favoritos">
        </a></li>
    </ul>
</div>
</footer>
</body>
</html>
