<?php
$LOGIN="LAHBuild";  //le login
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
.Style9 {color: #009900}
-->
</style></head>

<body>
<div align="center"><strong>BUILDMIN</strong></div>
<p><a href="HELP.html">&lt;&lt; Back</a><br />
  <br /> 
  Buildmin: contraction du mot build et admin, un builder administrateur</p>
<hr>
<p>Commande de base d'un buildmin:<br />
</p>
<p>e_spawnball top life=1000 mass=100000<span class="Style3"> // Créé une boule d'énergie<br />
    <label></label>
</span>e_spawncan back explosive<span class="Style3"> // Créé un barile explosif</span><br />
<span class="Style3">
<label></label>
</span>e_spawnboat <span class="Style3">// Créé un airboat</span><br />
<span class="Style3">
<label></label>
</span>+grabent <span class="Style3">// Attrapé une entité regardé</span><br />
<span class="Style3">
<label></label>
</span>+copyent <span class="Style3">// Copier une entité regardé</span><br />
<span class="Style3">
<label></label>
</span>e_removespawned <span class="Style3">// Détruire toutes vos entité créé</span><br />
e_kill <span class="Style3">// Détruire l'entité que vous regardé</span><br />
<span class="Style3">
<label></label>
</span>+rotate<span class="Style3"> // Effectué une rotation a l'entité</span><br />
e_rotate &quot;180&quot; <span class="Style3">// Effectué une rotation a l'entité de 180°</span><br />
<span class="Style3">
<label></label>
</span>+grabphys <span class="Style3">// Attrapé une entité avec le physic gun<br />
</span>e_freeze<span class="Style3"> // rend indéplaçable l'entité regardé<br />
</span>e_unfreeze<span class="Style3"> // re-rend déplaçable l'entité regardé<br />
</span>e_drop<span class="Style3"> // mettre une entité regardé au ras du sol</span><br />
e_setent <span class="Style3">// Fixe un point d'atachement sur une premiere entité<br />
</span>e_addconstraint <span class="Style3">// Raccorde le premier point d'attachement a l'entité regardé</span><br />
e_delconstraints <span class="Style3">// Supprime le raccord entre deux entité</span><br />
e_thruster &quot;LOL&quot; &quot;10000&quot;  <span class="Style3">// Ajoute un thruster perpendiculaire dans le groupe LOL avec une force de 10000</span><br />
+thruster &quot;LOL&quot;<span class="Style3"> // Active le groupe de thruster LOL</span><br />
e_delthruster <span class="Style3">// Suprime le thruster regardé</span><br />
e_delthruster_group &quot;LOL&quot;  <span class="Style3">// Suprime le groupe de thruster LOL</span><br />
e_delthrusters <span class="Style3">// Suprime tous les thruster</span><br />
e_setmass &quot;1&quot; <span class="Style3">// Modifie la masse de l'entité</span><br />
e_getmass <span class="Style3">// Affiche la masse de l'entité<br />
</span>e_setinertia 1 1 1  <span class="Style3">// Modifie l'inertie de l'entité</span><br />
e_stack 5 0 8 <span class="Style3">// Clone 5 fois l'entité a 0 de hauteur et a 8 d'écartement</span><br />
e_getinertia <span class="Style3">// Affiche l'inertie de l'entité</span><br />
e_push 100000 <span class="Style3">// Pousse l'entité regardé avec une force de 100000</span><br />
e_spawndoll <span class="Style3">// Spawn un soldat du cartel</span><br />

<hr />
admin_ai create npc_turret_floor <span class="Style3">// Spawn une tourelle rebelle</span><br />
<span class="Style1">Petite liste de npc pour admin_ai create:</span><br />
gman<br />
mossman<br />
antlion<br />
antlionguard<br />
metropolice<br />
stalker<br />
<hr>
<p>e_spawnprop turret_floor frozen<span class="Style3"> // insére une tourelle rebelle indéplaçable<br />
l'argument frozen peut être enlevé</span></p>
<p class="Style1">Liste de prop que vous pouvez faire spawn:</p>
<p>
  <label>
  <textarea name="textarea" id="textarea" cols="45" rows="5">antlionhill
archgate1
archgate2
archgate3
archgate4
archwindow
armchair
awning1
awning2
axis
barricade1
barricade2
bars1
bars2
bars3
bars4
bars5
bars6
bars7
bathtub
bathtub
bedframe
bedframe2
bedframe3
bench
bench1
bench2
bigrock
bike
binderblue
bindergray
bindergreen
binderred
blastdoor1
blastdoor2
blastdoor3
blastwindow
bluebarrel
boat1
boat2
boat3
boiler
bottle1
bottle2
bottle3
bottle4
bottle5
bottle6
bottle7
bramble
breenarm
breenbust
breenchair
breenclock
breenconsole
breendesk
breenglobe
breenpod1
breenpod2
breenpod3
breentube
breenwindow
bridge1
bridge2
bridge3
bridge4
briefcase
broom
bucket1
bucket2
bucket3
buoy
cabinet
cabinet2
cactus
cafeteriabench
cafeteriatable
cagelight
cagelightred
canister1
canister2
carblue
carblue2
carblue3
cardboardbox1
cardboardbox2
cardboardbox3
cardboardbox4
cardboardbox5
cardboardbox6
cardboardbox7
cargocontainer1
cargocontainer2
cargreen
carousel
carred
carred2
cartire
carwheel
carwhite
carwhite2
carwhite3
caryellow
cashregister
cattails
cellarray1
cellarray2
cellarray3
celldoor
cellwindow
chair1
chair2
chair3
chair4
chair5
chair6
chair7
chess
citizenradio
cleaver
clipboard
clock1
clock2
clock3
coffintop1
coffintop2
column
columnlight
combinebarricade1a
combinebarricade1b
combinebarricade2a
combinebarricade2b
combinebarricade2c
combinebarricade3
combinebarricade4
combinebarricadeshort1
combinebarricadeshort2
combinebarricadeshort3
combinebarricadetall1a
combinebarricadetall1b
combinebarricadetall2
combinebarricadetall3a
combinebarricadetall3b
combinebarricadetall4a
combinebarricadetall4b
combineboothmed
combineboothshort
combinebridgeend
combinebridgemid
combinebutton
combinecamera
combinedoor
combinefence1a
combinefence1b
combinegenerator
combineinterface1
combineinterface2
combineinterface3
combinelight1a
combinelight1b
combinelight2
combinemonitor1
combinemonitor2
combinemonitorbay
combinetrain1
combinetrain2
combinetrain3
combinewall1
combinewall2
combinewallcluster1
combinewallcluster2
combinewallcluster3
combinewindow
computer
concretebarrier
concretepipe1
concretepipe2
concretepipe3
connection1
connection2
connection3
connection4
connection5
consolebox1
consolebox2
consolebox3
coolingtank1
coolingtank2
coolingtank3
corkboard1
corkboard2
couch1
couch1
couch2
couch2
crane
craneframe
craneframe_interior
cupboard
desk1
desk2
desk3
desklamp
displaycooler
dock1
dock2
dock3
dockbumper
dockpole1
dockpole2
dockpolecluster
dogsign
doll
dome1
dome2
dome3
domelight
door
door1
doorlab
doorslotted
doorwheel
doubledoor
drawer1
drawer2
drawer3
dresser
driftwood1
driftwood2
driftwood3
driftwoodclump1
driftwoodclump2
driftwoodclump3
dryer
dumpster1
dumpster2
dumpster3
elevator
elevatordoor
explosivedrum
eyescanner
fence1
fence2
fence3
fence4
fence5
fence6
fencebarbed1
fencebarbed2
fencebarbed3
fencebarbed4
fencebarbed5
fencebarbed6
fencebarbed7
fencebarbed8
fencebarbed9
filecabinet
filecabinet2
fireplace
fishingboat1
fishingboat2
floodlight
fountain
frame1
frame2
fridge
gascan
gascan2
gaspump
gatedoor1
gatedoor2
gear1
gear2
generator1
generator2
generatortrailer
grainelevator
grave1
grave2
grave3
grave4
gravecross
gravestatue
handrail
handrail
handrailcap
handrailcorner
handraillong
handrailmedium
handrailrise1
handrailrise2
handrailshort
harpoon
heater1
heater2
heavydoor
helicopterbomb
hevcase
hevmachine
horse
hula
interiorfence1
interiorfence10
interiorfence11
interiorfence12
interiorfence13
interiorfence14
interiorfence15
interiorfence16
interiorfence17
interiorfence18
interiorfence19
interiorfence2
interiorfence3
interiorfence4
interiorfence5
interiorfence6
interiorfence7
interiorfence8
interiorfence9
ivy
jar1
jar2
jug
junglegym1
junglegym2
kennel
keyboard
keypad
kitchencounter1
kitchencounter2
kitchencounter3
kitchencounter4
kitchenfridge
kitchenshelf1
kitchenshelf2
kitchensink
kitchenstove1
kitchenstove2
labconsole
labgenerator
lablight
lablocker
ladder1
ladder2
ladel
lamp
lamppost
laundrybasket1
laundrybasket2
laundrycart1
laundrycart2
lightcluster
lockers
magnet
magnifyinglamp
map
masterinterface
mattress
melon
metalbed
milk1
milk2
miniteleport
monitor1
monitor2
monitor3
mountedlight1
mountedlight2
mug
newspaper
oildrum
padlock
paintcan
paper
partsbin
payphone
payphonereciever
pictureframe
pillar
plantpot
plasticcrate
pliers
pole
popcan
pot1
pot2
pot3
pot4
powertower
prisongate1
prisongate1
prisongate1
prisonslidingdoor
propane1
propane2
propanecanister
propanetank
pulleyhook
pulleylarge
pulleysmall
pushcart
radiator1
radiator2
ravendoor
ravenholm
reciever1
reciever2
reciever3
reciever4
recievercart
refrigerator
rock
rockcliff1
rockcliff10
rockcliff11
rockcliff12
rockcliff13
rockcliff14
rockcliff15
rockcliff16
rockcliff17
rockcliff18
rockcliff19
rockcliff2
rockcliff20
rockcliff21
rockcliff22
rockcliff23
rockcliff24
rockcliff25
rockcliff26
rockcliff3
rockcliff4
rockcliff5
rockcliff6
rockcliff7
rockcliff8
rockcliff9
rockcluster1
rockcluster2
rockcluster3
rockcluster4
rockcluster5
rockcluster6
rockcluster7
roofvent1
roofvent2
roofvent3
roofvent4
satellitedish1
satellitedish2
sawblade
scaffolding
securitybank
servers
shelf
shelf1
shelf2
shelf3
shoe
shovel
shrub
sign1
sign2
sign3
sign4
sign5
sign6
sign7
sign8
sink
sink1
sink2
slide
smokestack
soupprep
speakers
stool
storagecloset
stove
substation1
substation2
substation3
substation4
substation5
substation6
substation7
suit
suitcase1
suitcase2
support
swingset
table1
table2
table3
takeout
tanker
teetertoter
thumper1
thumper2
tictacktoeblock
tictacktoepost
toilet
toiletcombo
towtruck
tracksign1
tracksign2
tracksign3
tracksign4
tracksign5
tracksign6
tracksign7
tractortire
trafficcone
trafficlight
trailer1
trailer2
train1
train2
train3
train4
train5
trainlightcluster
trainseats
trainstationpost
trainstoplight1
trainstoplight2
traintrack1
traintrack2
traintrack3
trapblade
trapengine
trashbin
trashcan1
trashcan2
tree1
tree2
tree3
tree4
tree5
tree6
treecliff1
treecliff2
treegroup
treeoak
truck
truckcab
trucktire
truss1
truss2
truss3
truss4
truss5
truss6
truss7
truss8
truss9
tube
tubecap
tugboat1
tugboat2
turret_ceiling
turret_floor
turret_ground
tv
utilitypole1
utilitypole2
utilitypole3
utilitypole4
utilitypole5
utilitypolemount
valvewheel1
valvewheel2
van
vanity
vendingmachine
wagon
washer1
washer2
washingmachine
weaponstripper
wheel1
wheel2
wheel3
wheel4
wheel5
wheel6
wheelbarrow
windmillblade
window1
window1_bars
window2
woodcrate1
woodcrate2
woodfence1
woodfence2
woodpallet
workspace1
workspace2
workspace3
workspace4
wrench</textarea>
  </label>
</p>
<p align="center">Bonne build.<br />
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
<p align="center"><img src="090730081722867792.png" width="241" height="261"></p>
<p>log toi... ou on te slay (nan fake)<br>
PS: Steam a un peut du mal avec les champ de texte cliqué dessus si vous voyez que ça semble pas tapé</p>
    <form name="connexion" action="Buildmin.php" method="post">
	<p>Login :
	  <input name="logintext" type="text" value="LAHBuild">
    <br>
    Password :
    <input type="text" name="passwdtext">
    <br>
    <input name="envoi" type="submit" value="connect">
  </p>
</form>
</body>
</html>
</html>
<?php } ?>
