<?php
echo "<p>original date/time:". date('l, Fj, Y g:ia T'). "</p>";
$mytime = time()+(60*60*24*7);
echo "<p>nouva data e orario in differente formato:</p>";
echo date('c',$mytime) . '<br/>';
echo date('m/d/y', $mytime) . '<br/>';
echo date('l, Fj, Y', $mytime) . '<br/>';
echo date('l g:ia T', $mytime) . '<br/>';
echo date('h:i a', $mytime) . '<br/>';
$myDate=mktime(0,0,0,12,5,2011);
echo date('n/j/y', $myDate); //si usa per inserire una data in timestamp (in secondi partenza 01-01-1970)
?>