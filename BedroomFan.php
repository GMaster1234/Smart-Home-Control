
<?php
$t = exec('snmpget -v 1 -c private 10.0.0.30 .1.3.6.1.4.1.318.1.1.4.4.2.1.3.1');

if ($t == "iso.3.6.1.4.1.318.1.1.4.4.2.1.3.1 = INTEGER: 1") {
    echo '<a href="http://10.0.0.128/outlets/bedroom/FanOff.php"><img class=" aligncenter" src="on.png" height="20%" border="0" width="auto"></a>';
} else {
    echo '<a href="http://10.0.0.128/outlets/bedroom/FanOn.php"> <img class="alignnone" src="off.png" height="20%" border="0" width="auto"></a>';
}
?> 



