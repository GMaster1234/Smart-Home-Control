<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="refresh" content="1800" >
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
		<center><font face="Verdana"><br>
		<br>
		<font style="font-size: 50pt">Bedroom Lights </font><br>
		<?php
$t = exec('snmpget -v 1 -c private 10.0.0.30 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.2');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.2 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/bedroom/LightsOffWall.php"><img class=" aligncenter" src="on.png" height="700px" border="0" width="900px"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/bedroom/LightsOnWall.php"> <img class="alignnone" src="off.png" height="700px" border="0" width="900px"></a>';
}
?>
&nbsp;</center> 
		<center><font face="Verdana"><br>
		<font style="font-size: 50pt"> Bedroom Fan</font><br>
<?php
$t = exec('snmpget -v 1 -c private 10.0.0.30 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.1');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.1 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/bedroom/FanOffWall.php"><img class=" aligncenter" src="on.png" height="700px" border="0" width="900px"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/bedroom/FanOnWall.php"> <img class="alignnone" src="off.png" height="700px" border="0" width="900px"></a>';
}
?>
&nbsp; </center> 
		


</body></html>
