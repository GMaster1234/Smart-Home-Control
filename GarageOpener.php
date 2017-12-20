<?php 
exec('gpio write 27 0');
usleep(1000000);
exec('gpio write 27 1');
?>
 <font size="30"><center>
<br>
<br>
OFF
<br>
<br>
<?php
echo "<a href=\"javascript:history.go(-1)\">Complete!</a>";
</script>
<script type="text/javascript" language="JavaScript">
    setTimeout(function () {
                      location.href =  'javascript:history.go(-1)'; 
               }, 1);
</script>

