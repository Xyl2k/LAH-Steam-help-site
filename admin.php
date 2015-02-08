<?php
$LOGIN="LAH";  //le login
$PASSWD="xyli123";   //le mot de passe
if ($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) {  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
.Style1 {
	color: #0033CC;
	font-weight: bold;
}
.Style3 {
	color: #009900;
	font-weight: bold;
}
.Style5 {color: #FFFFFF}
.Style6 {
	color: #993300;
	font-weight: bold;
}
.Style8 {color: #006600}
.Style10 {color: #006600; font-weight: bold; }
-->
</style></head>

<body>
<div align="center"><strong>AIDE ADMINISTRATEUR</strong></div>
<p><a href="HELP.html">&lt;&lt; Back</a><br />
  <br />
Bon ba voila quoi j'vai tous foutre sur une page...<br />
Je vous préconise de bindé votre pavé numérique pour l'administration:</p>
<p><span class="Style1">Touche 1: </span>kp_end<br />
<span class="Style1">Touche 2: </span>kp_downarrow<br />
  <span class="Style1">Touche 3:</span> kp_pgdn<br />
  <span class="Style1">Touche 4:</span> kp_leftarrow<br />
  <span class="Style1">Touche 5:</span> kp_5<br />
  <span class="Style1">Touche 6:</span> kp_rightarrow<br />
<span class="Style1">Touche 7:</span> kp_home<br />
  <span class="Style1">Touche 8:</span> kp_uparrow<br />
  <span class="Style1">Touche 9:</span> kp_pgup<br />
<span class="Style1">Touche 0:</span> bind kp_ins<br />
  <span class="Style1">Touche -:</span> bind kp_minus<br />
<span class="Style3"><span class="Style1">Touche +:</span> </span>bind kp_plus</p>
<hr>
<p> admin_giveweapons PSEUDO <span class="Style3">// Donne toutes les armes a PSEUDO</span><br />
admin_giveweaponsself <span class="Style3">// Vous donne toutes les armes</span><br />
admin_god PSEUDO <span class="Style3">// Rend invincible PSEUDO</span><span class="Style3"><br />
  <label></label>
</span>admin_godself <span class="Style3">// Vous rend invincible</span><br />
admin_kick PSEUDO <span class="Style3">// Kick PSEUDO</span><br />
admin_ban PSEUDO 10 <span class="Style3">// Ban PSEUDO (0 = ban permanant)</span><br />
admin_map MAP<span class="Style3"> //</span><br />
admin_noclip PSEUDO <span class="Style3">// Mode passe-muraille pour PSEUDO</span><br />
  <span class="Style3">
  <label></label>
</span>admin_noclipself <span class="Style3">// Vous met en mode passe-muraille<br />
</span>admin_ammo PSEUDO<span class="Style3"> // Donne toutes les munnitions a PSEUDO</span><br />
admin_send &quot;ADMINISTRATEUR&quot; &quot;JOUEUR&quot; <span class="Style3"> // Téléporte JOUEUR vers ADMINISTRATEUR<br />
</span>admin_lookingat <span class="Style3">// Donne les information sur l'entité regardé<br />
</span>admin_reload <span class="Style3">// Recharge la map actuelement joué<br />
</span>admin_slay<span class="Style3"> // tue un joueur<br />
</span>admin_slap<span class="Style3"> // giffle un joueur<br />
</span>admin_exec &quot;PSEUDO&quot; &quot;say test&quot;<span class="Style3"> // fais executé une commande au joueur (mapvote, hook, say, say_team etc...)<br />
</span>admin_execall &quot;say test&quot;<span class="Style3"> // fais executé une commande a tous les joueurs (mapvote, hook, say, say_team etc...)</span><span class="Style3"><br />
</span>admin_ctsay &quot;testing 123&quot;<span class="Style3"> // Affiche un message dans le chat<br />
</span>e_fire Ignite 0<span class="Style3"> // brûle l'entité regardé<br />
  <label></label>
</span><br />
  <span class="Style3">
  <label></label>
  </span>impulse 51<span class="Style3"> // Faire apparaitre des items de soins</span><br />
  <span class="Style3">
  <label></label>
  </span>snark<span class="Style3"> // Créé des cafards explosife</span><br />
  <span class="Style3">
  <label></label>
  </span>admin_ammo PSEUDO<span class="Style3"> // Donne toutes les munnitions a PSEUDO<br />
  </span>credgive &quot;PSEUDO&quot; &quot;1337&quot;<span class="Style3"> // Donne 1337 de credit a PSEUDO<br />
  </span>@@@BLABLA BLA<span class="Style3">  // A entré dans le chat, affiche un message générale.<br />  
  </span><span class="Style3"><br />
  </span><span class="Style1">Interface admin de base:</span><span class="Style3"><br />
  </span>sm_admin <span class="Style3">// équivaut à &quot;!admin&quot; mais beaucoup plus discret</span><br />
  <span class="Style3">
  <label></label>
</span></p>
<p><span class="Style6">BUGZ:<br />
  <span class="Style8">Spawn avec des armes:</span></span><span class="Style5"><br />
Faite une !save puis tapé !kill, ensuite cliqué pour respawn et appuyé sur votre touche bindé pour vous téléporté, dans de nombreux puzzle normalement vous vous téléporterez a l'endroit et vous aurez toutes les armes basique (grenades, SMG, crowbar, gravity-gun, pistolet)</span></p>
<p><span class="Style10">Allez dans une équipe non autorisé:</span><br />
Faite une !save quelque par sur la map pour allez dans votre menu (escape) pour choisir votre équipe (cobine/rebel)<br />
une fois ça fais vous allez être auto-killé pour que le changement soit pris en compte, pour vous respawn vous allé cliqué n'importe ou, et tout de suite après enchainé immédiatement par une téléportation (bindé votre touche pour ça)<br />
donc comme ça, ça va vous téléporté direct (en plus avec quelques armes)  la protection de la map aura pas le temps de réagire (même principe que pour spawn avec des armes)</p>
<p>&nbsp;</p>
<p align="center">Bonne administration.<br />
  <br />
Pour savoir comment activé la console <a href="console.html">cliqué ici</a></p>
</body>
</html>

<?php } else { ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<p align="center"><img src="temariadmin.PNG" width="241" height="261"></p>
<p>log toi... ou on te slay (nan fake)<br>
PS: Steam a un peut du mal avec les champ de texte cliqué dessus si vous voyez que ça semble pas tapé</p>
<form name="connexion" action="admin.php" method="post">
	<p>Login :
	  <input name="logintext" type="text" value="LAH">
    <br>
    Password :
    <input type="text" name="passwdtext">
    <br>
    <input name="envoi" type="submit" value="connect">
  </p>
</form>
</body>
</html>
<?php } ?>
