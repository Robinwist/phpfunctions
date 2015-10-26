<?php

require_once('ja.php');

writeHello();

writeMsg('hello');
writeMsg('okdoei');

writeMsgTo('Robin', 'ja');
writeMsgTo('Robin');

$outcome = addValue(5,7);
echo 'The outcome of 5+7 = '. $outcome . '<br/>';

$outcome = calcRect(5,7);
echo 'The area of a rectangle of 5 and 7 is '. $outcome . '<br/>';

BMI();
