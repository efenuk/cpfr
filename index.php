<?php

include 'bootstrap.php';

echo 'First scenario mood : ';

$alien = new AlienGiver();
$receiver = new ItemReceiver();

echo ($alien instanceof AlienGiver)?'Good':($receiver->receive($alien->give()))?'Good':'Bad';

echo "<br/>";

echo 'Second scenario mood : ';

$alien = new AlienGiver();
$asocial = new AsocialReceiver();
$receiver = new ItemReceiver();

$asocial->getDrunk();

echo (!$asocial->isDrunk)?(($receiver->receive($asocial->receive($alien->give())))?'Good':'Bad'):'Good';

echo "<br/>";

echo 'Third scenario mood : ';

$normal = new NormalGiver();
$receiver = new ItemReceiver();

echo ($receiver->receive($normal->give()))?'Good':'Bad';

echo "<br/>";

echo 'Fourth scenario mood : ';

$asocial = new AsocialGiver();
$receiver = new ItemReceiver();

echo (!$asocial->isDrunk)?(($receiver->receive($asocial->give()))?'Good':'Bad'):'Good';

echo "<br/>";

echo 'Fifth scenario mood : ';

$normal = new NormalGiver();
$receiver = new ItemReceiver();

echo ($receiver->receive($normal->giveRadioactiveItem()))?'Good':'Bad';