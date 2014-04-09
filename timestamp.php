<?php
echo "<p>original date/time:". date('l, Fj, Y g:ia T'). "</p>";
$mytime = time()+(60*60*24*7);
echo "<p>nouva data e orario in differente formato:</p>";
echo date('c',$mytime) . '<br/>';
echo date('m/d/y', $mytime) . '<br/>';
echo date('l, Fj, Y', $mytime) . '<br/>';
echo date('l g:ia T', $mytime) . '<br/>';
echo date('h:i a', $mytime) . '<br/>';
?>