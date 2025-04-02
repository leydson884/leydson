<article class="box-section">
	<blockquote>
<a href="templates/{Template_Dir}/images/eventos/cash.png" class="lightbox"><img src="templates/{Template_Dir}/images/eventos/cash.png" width="520" style="border: 0;"></a>

</blockquote>
</article>
<?php
if(constant("Show_News") == true)
{
?>
<article class="box-section">
<div class="header-section">Not&iacute;cias do Servidor</div>
	<blockquote>{Show_News}</blockquote>
</article>
<?php
}
if(constant("Board_News") == true)
{
?>
<article class="box-section">
<div class="header-section">Not&iacute;cias do F&oacute;rum</div>
	<blockquote>{Board_News}</blockquote>
</article>
<?php
}
if(constant("Show_Warning") == true)
{
?>
	{%SHOW_WARNING%}
<?php
}
if(constant("Siege_Enable") == true)
{
?>
    	<article class="box-section">
  	<div id="castle-siege">
 	<?php
        global $CTM_MSSQL;
        $queryco = $CTM_MSSQL->query("SELECT OWNER_GUILD,CONVERT(varchar(5),SIEGE_END_DATE,3) FROM ".MuGen_DB.".dbo.MuCastle_DATA ORDER BY MAP_SVR_GROUP DESC");
        $guildocs = mssql_fetch_array($queryco);
        echo("<p>Dona do castelo: <a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($guildocs[0])."','conteudo','GET');\">".$guildocs[0]."</a></p>");
        $query = $CTM_MSSQL->query("SELECT G_Mark, G_Master FROM ".MuGen_DB.".dbo.Guild WHERE G_Name='".$guildocs[0]."'");
        $guildcs = mssql_fetch_array($query);
        echo ("<p>Pr&oacute;ximo confronto: <span class=\"orange\">".$guildocs[1]." &agrave;s ".Siege_Hour."h.</span></p>");
    ?>
	</div>
		</article>
<?php } ?>
	<article class="box-section">
        <div class="header-section">Top's do Servidor</div>

        <div id="TabbedPanels1" class="TabbedPanels p-tops">
            <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Resets</li>
                <li class="TabbedPanelsTab" tabindex="0">M.Resets</li>
                <li class="TabbedPanelsTab" tabindex="0">Mensal</li>
                <li class="TabbedPanelsTab" tabindex="0">Semanal</li>
                <li class="TabbedPanelsTab" tabindex="0">R.Diario</li>
                <li class="TabbedPanelsTab" tabindex="0">PK</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                            ("SELECT TOP 4 Name,".Column_Reset.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_Reset." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' Resets )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>
                </div>
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                            ("SELECT TOP 4 Name,".Column_MReset.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_MReset." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' M.Resets )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>
                </div>
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                    	("SELECT TOP 4 Name,".Column_ResetMonth.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_ResetMonth." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' Resets )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>

                </div>
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                    	("SELECT TOP 4 Name,".Column_ResetWeek.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_ResetWeek." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' Resets )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>
                </div>
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                            ("SELECT TOP 4 Name,".Column_ResetDay.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_ResetDay." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' Resets )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>
                </div>
                <div class="TabbedPanelsContent">
                    <ul class="tops">
                    <?php
                    global $CTM_MSSQL;
                    $query = $CTM_MSSQL->query
                            ("SELECT TOP 4 Name,".Column_PK.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_PK." DESC");
                    $cont = NULL;
                    while($top = mssql_fetch_array($query)){
                    $cont++;
                    if($top[2] == NULL OR empty($top[2]) OR !file_exists(Upload_Img."".$top[2]."")){
                        $photo = Upload_Img."nophoto.gif";
                    }else{
                        $photo = Upload_Img."".$top[2]."";
                    }
                    echo '<li><a href="javascript: void(EffectWeb);" 
                        onclick="CTM_Load(\'?pag=search&amp;char='.$top[0].'\', \'conteudo\',\'GET\');" class="opacity">
                        <span>'.$top[0].'</span>
                        <img src="'.$photo.'" width="109" height="109" alt="'.$top[0].'">
                        <span>( '.$top[1].' Mortes )</span>
                        </a></li>';
                    }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
        </script>
        </article>


<article class="box-section">
<div class="header-section">Xat {Server_Name}</div>
<center><embed FlashVars='id=196182285=Brazilian' align='middle' allowScriptAccess='sameDomain' height='300' name='chat' pluginspage='http://xat.com/update_flash.php' quality='high' src='http://www.xatech.com/web_gear/chat/chat.swf' type='application/x-shockwave-flash' width='520' wmode='transparent'/></center>

 </article>

<?php
if(constant("Show_ScreenShots") == true)
{
?>
<article class="box-section">
<div class="header-section">Screenshots</div>
	<ul class="tops" style="padding:2px 8px;">
    <?php
        global $CTM_MSSQL;
        $query = $CTM_MSSQL->query("SELECT TOP 4 * FROM ".MSSQL_DB.".dbo.CTM_WebScreenShots ORDER BY Id DESC");
        if(empty($query)){
            echo "<div class=\"info-box\">N&atilde;o h&aacute; ScreenShots adicionadas no momento.</div>";
        }else{
            while($ss = mssql_fetch_array($query)){
    echo '<li>
	<a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=screenshots&amp;view='.$ss[0].'\', \'conteudo\', \'GET\');" class="opacity">
		<span>Autor: '.$ss[2].'</span>
		<img src="'.Upload_SS.''.$ss[6].'" width="109" height="109" alt="">
		<span>( '.$ss[3].' votos )</span>
	</a></li>';
			}
		}
	?>
    <p class="right" style="margin:8px 15px;">
    	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=screenshots','conteudo','GET');">[ Todas as ScreenShots ]</a>
    </p>
    </ul>
</article>
<?php } ?>
