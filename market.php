<?php require_once("config.php"); $link = @mysql_connect($db_host, $db_user, $db_pass) or exit("
	<script language='javascript'>
		alert('Estamos actualizando, regrese en unos minutos!')
		location.replace('http://megagigas.com/foro/darkeden-inframundo/')
	</script>
"); 
session_start();
mysql_select_db($db_name);

	if(!isset($_SESSION['user_id']))
	{
		echo "
				<script language='javascript'>
				alert('Error: You must be logged in to use the market')
				location.replace('index.php')
			</script>
		";
	}
else
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Darkeden Inframundo | FREE MMORPG</title>
<META NAME="DESCRIPTION" CONTENT="Bienvenidos a Darkeden Inframundo version of the cult-classic horror MMORPG game DarkEden.">
<META NAME="KEYWORDS" CONTENT="darkeden, joymax, mmorpg, darkeden europe, darkeden eus, softon, onlinegame, online game, vampire mmorpg, ouster, horror mmorpg">
<meta property="og:description" content="DK Inframundo is a FREE game of vampires, slayers (hunters) and ousters. (similar to Diablo) | FREE MMORPG |" />
<meta property="og:site_name" content="Darkeden Inframundo | FREE MMORPG"/> 
<link rel="shortcut icon" href="images/favicon.ico" >
<link rel="icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/estiloa.css" />
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="lib/jquery.jdigiclock.html"></script>
<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<script type="text/javascript" src="js/mascara.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/hintbox.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js" ></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type="text/javascript">

function fhead_submit(f) {
	if (!f.mb_id.value) {
        alert("Error: Please enter your username");
        f.mb_id.focus();
        return false;
    }
    if (!f.mb_password.value) {
        alert("Error: Please enter your password");
        f.mb_password.focus();
        return false;
    }
	f.uid.value = f.mb_id.value;
	f.pwd.value = f.mb_password.value;
	f.action = './login.php';
}
function doLogout() {
    if(confirm("These really sure you want to log off?")==true) {
        self.location = './logout.php';
    }
}

	$(document).ready(function(){
			       $("area[rel^='prettyPhoto']").prettyPhoto();

                            $("#featured").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);

				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({

					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
		$('#data').mask("99/99/9999")
		$('#box ul li ul').hide()
		$('#box ul li a ').click(function(){
			$(this).next().slideToggle('slow')
		})
	})
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">
			* { margin: 0; padding: 0; }
			
			
			h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
			
			h2 {
				font-family: Georgia;
				font-style: italic;
				margin: 25px 0 5px 0;
			}
			
			p { font-size: 1.2em; }
			
			ul li { display: inline; }
			
			.wide {
				border-bottom: 1px #000 solid;
				width: 4000px;
			}
			
			.fleft { float: left; margin: 0 20px 0 0; }
			
			.cboth { clear: both; }
			
			#main {
				margin: 0 auto;
				padding: 24px;
				width: 500px;
			}
		</style>
<script type='text/javascript'>santyLibBgAleat=function(){this.v="1.0";this.imagenes=function(){var x=arguments,img=this.a(x);this.s(img)};this.a=function(r){var a=Math.random()*r.length;a=Math.floor(a);return(r[a])};this.c=function(b){head=document.getElementsByTagName("head")[0];if(!head)return;var s=document.createElement("style");s.type='text/css';s.innerHTML=b;head.appendChild(s)};this.s=function(b){var o=undefined;b.css=(b.css!==o)?b.css:"";b.url=(b.url!==o)?b.url:"";this.c("body{background:url('"+b.url+"') "+b.css+"}")}};$santyBA=new santyLibBgAleat();
$santyBA.imagenes(
{url:"/images/background/fondo1.png",css:"no-repeat top center #000000"},
{url:"/images/background/fondo2.png",css:"no-repeat top center #000000"},
{url:"/images/background/fondo3.png",css:"no-repeat top center #000000"},
{url:"/images/background/fondo4.jpg",css:"no-repeat top center #000000"}
);
</script>
</head>
<center>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="920" height="440" id="infiernomov2" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="flash/banner.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ece9d8" /><embed src="flash/banner.swf" quality="high" wmode="transparent" bgcolor="#ece9d8" width="920" height="440" name="bannermov" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
</center>
<body onLoad="goforit()">
<div id="header-top">
</div>
<div id="content-all">

	<div id="content-left">
	  <div style="background:url(images/headaa1.png)" no-repeat;><?php
if($_SESSION['user_id'])
{
?>
	        <img src="images/button_logout.png" title="Logout" onClick="return doLogout();">
            <?php
}
else
{
?>

	    <center><br></br><br><form name="fhead" method="post" onsubmit="return fhead_submit(document.fhead);" autocomplete="off" enctype="multipart/form-data"><input type="hidden" name="pwd" value="" />
   		  <input type="hidden" name="uid" value="" />
		    <label class="mamonu">Username:</label>
            <input name="mb_id" type="text" class="input_text" tabindex="1" onfocus="javascript:this.value='';" onclick="javascript:this.value='';" value="" size="15" maxlength="15" />
           	<label class="mamonu">Password:</label>
                <input name="mb_password" type="password" class="input_text" tabindex="2" onfocus="javascript:this.value='';" onclick="javascript:this.value='';" value="" size="15" maxlength="10" />
				<input name="btn_login" type="image" src="images/input-login.png"><img src="images/parte.png" width="200" height="9" /><br />
				
		</form></center>
<?
}
?>
	  </div>
<?
$result2 = mysql_query("SELECT * FROM `Vampire` WHERE `Level`+`AdvancementClass` > 1 AND `Competence` = 3 AND `Active` != 'INACTIVE' ORDER BY `SMSCharge` DESC, `AdvancementClass` DESC, `Fame` DESC,  `AdvancementGoalExp` DESC")
or die(mysql_error());

$result3 = mysql_query("SELECT * FROM `Ousters` WHERE `Level`+`AdvancementClass` > 1 AND `Competence` = 3 AND `Active` != 'INACTIVE' ORDER BY `SMSCharge` DESC, `AdvancementClass` DESC, `Fame` DESC,  `AdvancementGoalExp` DESC")
or die(mysql_error());

$result = mysql_query("SELECT Name, Sex, AdvancementGoalExp, Rank,
  CASE
    WHEN (BladeGoalExp > 50) AND (BladeGoalExp > SwordGoalExp) AND (BladeGoalExp > EnchantGoalExp) AND (BladeGoalExp > HealGoalExp) AND (BladeGoalExp > GunGoalExp) THEN BladeGoalExp
    WHEN (SwordGoalExp > 50) AND (SwordGoalExp > BladeGoalExp) AND (SwordGoalExp > EnchantGoalExp) AND (SwordGoalExp > HealGoalExp) AND (SwordGoalExp > GunGoalExp) THEN SwordGoalExp
    WHEN (EnchantGoalExp > 30) AND (EnchantGoalExp > SwordGoalExp) AND (EnchantGoalExp > BladeGoalExp) AND (EnchantGoalExp > HealGoalExp) AND (EnchantGoalExp > GunGoalExp) THEN EnchantGoalExp
    WHEN (HealGoalExp > 30) AND (HealGoalExp > SwordGoalExp) AND (HealGoalExp > EnchantGoalExp) AND (HealGoalExp > BladeGoalExp) AND (HealGoalExp > GunGoalExp) THEN HealGoalExp
    WHEN (GunGoalExp > 40) AND (GunGoalExp > SwordGoalExp) AND (GunGoalExp > EnchantGoalExp) AND (GunGoalExp > HealGoalExp) AND (GunGoalExp > BladeGoalExp) THEN GunGoalExp
    ELSE 0
  END AS Experience,
  CASE
    WHEN (BladeGoalExp > 50) AND (BladeGoalExp > SwordGoalExp) AND (BladeGoalExp > EnchantGoalExp) AND (BladeGoalExp > HealGoalExp) AND (BladeGoalExp > GunGoalExp) THEN BladeLevel + AdvancementClass
    WHEN (SwordGoalExp > 50) AND (SwordGoalExp > BladeGoalExp) AND (SwordGoalExp > EnchantGoalExp) AND (SwordGoalExp > HealGoalExp) AND (SwordGoalExp > GunGoalExp) THEN SwordLevel + AdvancementClass
    WHEN (EnchantGoalExp > 30) AND (EnchantGoalExp > SwordGoalExp) AND (EnchantGoalExp > BladeGoalExp) AND (EnchantGoalExp > HealGoalExp) AND (EnchantGoalExp > GunGoalExp) THEN EnchantLevel + AdvancementClass
    WHEN (HealGoalExp > 30) AND (HealGoalExp > SwordGoalExp) AND (HealGoalExp > EnchantGoalExp) AND (HealGoalExp > BladeGoalExp) AND (HealGoalExp > GunGoalExp) THEN HealLevel + AdvancementClass
    WHEN (GunGoalExp > 40) AND (GunGoalExp > SwordGoalExp) AND (GunGoalExp > EnchantGoalExp) AND (GunGoalExp > HealGoalExp) AND (GunGoalExp > BladeGoalExp) THEN GunLevel + AdvancementClass
    ELSE 0
  END AS Level,
  CASE
    WHEN (BladeGoalExp > 50) AND (BladeGoalExp > SwordGoalExp) AND (BladeGoalExp > EnchantGoalExp) AND (BladeGoalExp > HealGoalExp) AND (BladeGoalExp > GunGoalExp) THEN 'Blader'
    WHEN (SwordGoalExp > 50) AND (SwordGoalExp > BladeGoalExp) AND (SwordGoalExp > EnchantGoalExp) AND (SwordGoalExp > HealGoalExp) AND (SwordGoalExp > GunGoalExp) THEN 'Sworder'
    WHEN (EnchantGoalExp > 30) AND (EnchantGoalExp > SwordGoalExp) AND (EnchantGoalExp > BladeGoalExp) AND (EnchantGoalExp > HealGoalExp) AND (EnchantGoalExp > GunGoalExp) THEN 'Enchanter'
    WHEN (HealGoalExp > 30) AND (HealGoalExp > SwordGoalExp) AND (HealGoalExp > EnchantGoalExp) AND (HealGoalExp > BladeGoalExp) AND (HealGoalExp > GunGoalExp) THEN 'Healer'
    WHEN (GunGoalExp > 40) AND (GunGoalExp > SwordGoalExp) AND (GunGoalExp > EnchantGoalExp) AND (GunGoalExp > HealGoalExp) AND (GunGoalExp > BladeGoalExp) THEN 'Gunner'
    ELSE ''
  END AS Job
  FROM Slayer WHERE Race = 'SLAYER' AND (BladeLevel > 1 OR SwordLevel > 1 OR EnchantLevel > 1 OR HealLevel > 1 OR GunLevel > 1)
  ORDER BY Level+`AdvancementClass` DESC, AdvancementGoalExp DESC, Experience DESC")
or die(mysql_error());

echo "<center><img src='images/ranking_title01.gif' alt='a' width='147' height='18' /></center>";
echo "<table border='0' bordercolor='white' style='dashed thin'>";
echo "<tr><th bgcolor=''><font color='#FFF'>Ranking</th><th bgcolor=''><font color='#FFF'>Username</th><th bgcolor=''><font color='#FFF'>Level</th><th bgcolor=''><font color='#FFF'>Rank</font></th>";

// keeps getting the next row until there are no more to get
		$order1 = 1;

		while($row = mysql_fetch_array( $result )) {
			if ($order1 >= 6) {
				break;
			}
			// Print out the contents of each row into a table
			$nivel = $row['AdvancementClass'] + $row['Level'];
			$nombre = $row['Name'];
			$ranks = $row['Rank'];
			echo "<tr><th bgcolor=''>"; 
			echo "<img src='images/ranking/".$order1.".png'>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nombre</font>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nivel</font>";
			echo "</td><th color=''>";
			echo "<img src='images/ranking/grade/slayer/".$ranks.".png'></img>";
			$order1++;
		} 
echo "</table>";

echo "</td><td>";
?>   
<img src="images/parte.png">
<?
echo "<center><img src='images/ranking_title02.gif' alt='s' width='147' height='18' /></center>";
echo "<table border='0'  bordercolor='black' style='dashed thin'>";
echo "<tr><th bgcolor=''><font color='#FFF'>Ranking</th><th bgcolor=''><font color='#FFF'>Username</th><th bgcolor=''><font color='#FFF'>Level</th><th bgcolor=''><font color='#FFF'>Rank</th>";

		$order2 = 1;

		while($row = mysql_fetch_array( $result2 )) {
			if ($order2 >= 6) {
				break;
			}
			$nivel = $row['AdvancementClass'] + $row['Level'];
			$nombre = $row['Name'];
			$rankv = $row['Rank'];
			echo "<tr><th bgcolor=''>"; 
			echo "<img src='images/ranking/".$order2.".png'>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nombre</font>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nivel</font>";
			echo "</td><th color=''>";
			echo "<img src='images/ranking/grade/vampiro/".$rankv.".png'></img>";
			$order2++;
		} 

echo "</table>";


echo "</td><td>";
?>
<img src="images/parte.png">
<?

echo "<center><img src='images/ranking_title03.gif' alt='d' width='147' height='18' /></center>";
echo "<table border='0' bordercolor='white' style='dashed thin'>";
echo "<tr><th bgcolor=''><font color='#FFF'>Ranking</th><th bgcolor=''><font color='#FFF'>Username</th><th bgcolor=''><font color='#FFF'>Level</th><th bgcolor=''><font color='#FFF'>Rank</th>";

		$order3 = 1;

		while($row = mysql_fetch_array( $result3 )) {
			if ($order3 >= 6) {
				break;
			}
			$nivel = $row['AdvancementClass'] + $row['Level'];
			$nombre = $row['Name'];
			$ranko = $row['Rank'];
			echo "<tr><th bgcolor=''>"; 
			echo "<img src='images/ranking/".$order3.".png'>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nombre</font>";
			echo "</td><th bgcolor=''>"; 
			echo "<font color='#60B3D2'>$nivel</font>";
			echo "</td><th color=''>";
			echo "<img src='images/ranking/grade/ouster/".$ranko.".png'></img>";
			$order3++;
		} 

echo "</table>";
echo "</td></tr></table></center>";

?>
<img src="images/parte.png">
<div style="background:url(../images/servidor.png) no-repeat;"><div class='memin'></div><div class='memin'></div><br></br><br></br></span>
</div>
</div>
    <div id="content-middle">
    <div><?
    	$Race = $_GET['Race'];
	if(!$Race) { $Race = 'COMMON'; } 
	$Kind = $_GET['Kind'];
	if(!$Kind) { $Kind = 'MAIN'; } 
	?>

<center><a href="market.php?Race=COMMON&Kind=AURA"><img src = "images/common.png"></img></a>
<a href="market.php?Race=SLAYER&Kind=SETC"><img src = "images/slayer.png"></img></a>
<a href="market.php?Race=VAMPIRE&Kind=VETC"><img src = "images/vampire.png"></img></a>
<a href="market.php?Race=OUSTERS&Kind=OETC"><img src = "images/ousters.png"></img></a></center>

<br><br>
<?
if($Race == 'COMMON')
{
?>
<center>
<a href="market.php?Race=COMMON&Kind=AURA"><img src="images/aura.png"></img></a>
<a href="market.php?Race=COMMON&Kind=ENCHANT"><img src = "images/enchant.png"></img></a>
<a href="market.php?Race=COMMON&Kind=MIXING"><img src = "images/mixing.png"></img></a>
<a href="market.php?Race=COMMON&Kind=PET"><img src = "images/pet.png"></img></a>
<a href="market.php?Race=COMMON&Kind=SPECIAL"><img src = "images/special.png"></img></a>
<a href="market.php?Race=COMMON&Kind=CETC"><img src = "images/etc.png"></img></a></center>
<p>
  <? 
}
?>
</p>
<p><?
	$marketcheck = mysql_query("SELECT * FROM `web_market` WHERE `Kind` = '$Kind' ORDER BY `Order`");

	while ($row = mysql_fetch_assoc($marketcheck))
	{
?>
<tr>
<TABLE width="550" border=0 style="border:1px solid #3C3C3C;" align="center">
<TBODY>
<tr>
<TD width="43">
<img src = "/images/market/<?=$row['PID'] ?>.jpg" style="border: 2px solid #FFF;
	border-top: 1;
	border-bottom: 1;">
<td width=10>
<td width="10"><td width="10"><td width="377"><font color=white><b><?=$row['Name'] ?></b><br><br>
<?=$row['Text'] ?>
<br>
<td width=120><p><br>
    <span class="green"><font color=white>Precie: 
  <?=$row['Price'] ?> 
  <?=$row['PType'] ?>
    </span></p>
  <p>
    <?
if($row['Type'] == 2)
{
	$query1 = "$row[Value]";
}
else
{
	$query1 = "market_buy.php?id=$row[ID]";
}
	?>
    <a href="<?=$query1 ?>" class="form-button">Buy Item</a><br><br>
</p>
</tr>

<?
	}
?>
</table>
<br><br></p>
    </div>
    <div class="fb-like-box" data-href="http://www.facebook.com/deinfierno" data-width="548" data-colorscheme="dark" data-show-faces="true" data-border-color="white" data-stream="true" data-header="true"></div>
</div>
<div id="content-right">
<img src="images/parte.png" width="200" height="9" />
<a href="http://www.mediafire.com/?dgbzdtxadldw0pd" title="Download Client" target="new">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" name="Download" width="200" height="88" align="middle" id="Download">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="flash/game_start_s.swf" /><param name="quality" value="high" /><param name="wmode" value="opaque" /><param name="bgcolor" value="#ece9d8" /><embed src="flash/game_start_s.swf" quality="high" wmode="opaque" bgcolor="#ece9d8" width="199" height="79" name="Download" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object></a>
<img src="images/parte.png" width="200" height="9" /><br>
<table width="202" height="143" border="0" class="servidor">
  <tr>
    <td><table width="200" border="0">
      <tr>
        <td><center><?php $db = @mysql_select_db($db_name) or exit(mysql_error());
$lang = @mysql_query("SET NAMES latin1");

$q = mysql_query("SELECT LogOn FROM Player WHERE LogOn = 'GAME'");
$q2 = mysql_query("SELECT * FROM Player");
echo '<b><font color="#00FF00">Online:</font></b>';echo  mysql_num_rows($q); echo '<p>Accounts:  '; echo mysql_num_rows($q2);
?></td>
      </tr>
    </table></td>
  </tr>
</table>
<img src="images/parte.png" width="200" height="9" /><br><br>
<a href="https://www.facebook.com/DKInframundo"><img src="images/facebook-icon.png" width="48" height="48" alt="DK Inframundo"/></a><a href="javascript: void(0)" onClick="window.open('chat.html','windowname1','width=810, height=410');return false;"></a><a href="chat.html"><img src="images/chat.png" width="48" height="48" alt="Chat" /></a><br><br>
<div style="background:url(../images/fondoe.png) no-repeat;">
  <script id="sid0010000012827091905">(function() {function async_load(){s.id="cid0010000012827091905";s.src='../st.chatango.com/js/gz/emb.js';s.style.cssText="width:200px;height:380px;";s.async=true;s.text='{"handle":"darkedeninfierno","styles":{"a":"666666","b":1,"c":"FFFFFF","d":"FEDC02","e":"FEDC02","f":10,"h":"000000","i":94,"j":"FFFFFF","k":"999999","l":"333333","n":"333333","r":7,"s":1}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0010000012827091905'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();</script></div>
</div>
<div id="main" style="color:#FFF">
<br><br><br><br><br><br><br>
</div>
<div id="footer" class="mamone" align="center"><a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">ouster</a>  
   <a href="http://www.dkinframundo.com" style="font-size:9px;text-decoration:none; color: black;">vampire</a>  
   <a href="http://www.dkinframundo.com" style="font-size:10px;text-decoration:none; color: black;">slayer</a>  
   <a href="http://www.dkinframundo.com" style="font-size:6px;text-decoration:none; color: black;">vampire mmorpg</a>  
   <a href="http://www.dkinframundo.com" style="font-size:8px;text-decoration:none; color: black;">darkeden private server</a>  
   <a href="http://www.dkinframundo.com" style="font-size:8px;text-decoration:none; color: black;">download darkeden</a>  
   <a href="http://www.dkinframundo.com" style="font-size:6px;text-decoration:none; color: black;">Darkeden free</a>  
   <a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">Dark Eden</a>  
   <a href="http://www.dkinframundo.com" style="font-size:9px;text-decoration:none; color: black;">war darkeden</a>  
   <a href="http://www.dkinframundo.com" style="font-size:9px;text-decoration:none; color: black;">darkeden english</a>  
   <a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">darkeden europe</a>  
   <a href="http://www.dkinframundo.com" style="font-size:8px;text-decoration:none; color: black;">darkeden eus</a>  
   <a href="http://www.dkinframundo.com" style="font-size:10px;text-decoration:none; color: black;">dkinframundo</a>  
   <a href="http://www.dkinframundo.com" style="font-size:5px;text-decoration:none; color: black;">free to play</a>  
   <a href="http://www.dkinframundo.com/#" style="font-size:10px;text-decoration:none; color: black;">Videos</a>  
   <a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">horror mmorpg</a>  
   <a href="http://www.dkinframundo.com/index.php" style="font-size:7px;text-decoration:none; color: black;">Inicio</a>  
   <a href="http://www.dkinframundo.com" style="font-size:10px;text-decoration:none; color: black;">free mmorpg</a>  
   <a href="http://www.dkinframundo.com" style="font-size:6px;text-decoration:none; color: black;">mmorpg</a>  
   <a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">vampires games</a>  
   <a href="http://www.dkinframundo.com" style="font-size:6px;text-decoration:none; color: black;">softon</a>  
   <a href="http://www.dkinframundo.com" style="font-size:5px;text-decoration:none; color: black;">Darkeden</a>  
   <a href="http://www.dkinframundo.com/javascript: void(0)" style="font-size:9px;text-decoration:none; color: black;">Chat</a>  
   <a href="http://www.dkinframundo.com/ranking.php" style="font-size:9px;text-decoration:none; color: black;">Ranking</a>  
   <a href="http://www.dkinframundo.com" style="font-size:7px;text-decoration:none; color: black;">darkeden Spanish</a>  
   <a href="http://www.dkinframundo.com/screenshot.php" style="font-size:7px;text-decoration:none; color: black;">Imagenes</a>  
   <a href="http://www.dkinframundo.com/download.php" style="font-size:7px;text-decoration:none; color: black;">Descargar</a>  
   <a href="http://www.dkinframundo.com/serverstats.php" style="font-size:9px;text-decoration:none; color: black;">Miembros del Staff</a>  
   <a href="http://megagigas.com/foro/darkeden-inframundo/" style="font-size:8px;text-decoration:none; color: black;">Foro</a>  
<a href="http://www.dkinframundo.com" style="font-size:6px;text-decoration:none; color: black;">private server</a> </div>
</body>

</html>
<? 
} 
?>
