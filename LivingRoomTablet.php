<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Language" content="en-us">
<title>Test</title>
</head>
<body bgcolor="#000000" text="#FFFFFF"><font face="Verdana"><meta http-equiv="Content-Language" content="en-us"> 
  <title>Test</title> 
<style type="text/css">
body {
    overflow:hidden;
}
</style>
</font>
<table border="0" width="100%">
	<tbody><tr>
		<td valign="top" width="180"> <center>
		<font face="Verdana"><br>
		Living Room Lights<br>
		<font style="font-size: 4pt">&nbsp; </font><br>
		<?php
$t = exec('snmpget -v 1 -c private 10.0.0.164 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.1');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.1 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/livingroom/LivingLightsOffTablet.php"><img class=" aligncenter" src="on.png" height="130px" border="0" width="130px"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/livingroom/LivingLightsOnTablet.php"> <img class="alignnone" src="off.png" height="130px" border="0" width="130px"></a>';
}
?>
		<center><font face="Verdana">TV<br>
		<font style="font-size: 4pt">&nbsp; </font><br>
		<?php
$t = exec('snmpget -v 1 -c private 10.0.0.164 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.22');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.22 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/livingroom/22OffWall.php"><img class=" aligncenter" src="on.png" height="130px" border="0" width="130px"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/livingroom/22OnWall.php"> <img class="alignnone" src="off.png" height="130px" border="0" width="130px"></a>';
}
?>
&nbsp; </center> <center><font face="Verdana">Game PC<br>
		<font style="font-size: 4pt">&nbsp; </font><br>
		<?php
$t = exec('snmpget -v 1 -c private 10.0.0.164 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.20');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.20 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/livingroom/20OffWall.php"><img class=" aligncenter" src="on.png" height="130px" border="0" width="130px"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/livingroom/20OnWall.php"> <img class="alignnone" src="off.png" height="130px" border="0" width="130px"></a>';
}
?>
		<p>
		<font face="Verdana" size="4">Garage Door Button
		<br>
		</font>
		&nbsp;</font><span style="display:block !important; text-align: center; font-family: Verdana; font-size: 12px"><a href="http://10.0.0.20/LynHopGarageTablet.php"><img border="0" src="button3.png" width="150" height="150"></a></span></p>
		</center> 
		</td>
		<td style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-width: 1px" valign="top" width="1100" height="100%"> <center>

		<p>
		<iframe name="I1" height="750" width="100%" src="http://10.0.0.20/lynhopimage.htm" scrolling="no" border="0" frameborder="0">
		Your browser does not support inline frames or is currently configured not to display inline frames.
		</iframe></p>

		</center>
		</td>
	</tr>
</tbody></table>



</body></html>