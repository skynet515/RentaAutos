<?php
$date1 = new DateTime('2020-08-05');
$date2 = new DateTime('2020-08-14');

$cant_dia = $date1->diff($date2);
echo $cant_dia->days;
