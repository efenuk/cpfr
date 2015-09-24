<?php

include 'bootstrap.php';

echo 'First scenario mood : ';

$alien = new AlienGiver();
$receiver = new ItemReceiver();

echo ($alien instanceof AlienGiver)?'Good':($receiver->receiveFrom($alien))?'Good':'Bad';

echo "<br/>";

echo 'Second scenario mood : ';

$asocial = new AsocialGiver();
$receiver = new ItemReceiver();

$asocial->drunk();

echo ($receiver->receiveFrom($asocial))?'Good':'Bad';

echo "<br/>";

echo 'Third scenario mood : ';

$normal = new NormalGiver();
$receiver = new ItemReceiver();

echo ($receiver->receiveFrom($normal))?'Good':'Bad';

echo "<br/>";

echo 'Fourth scenario mood : ';

$asocial = new AsocialGiver();
$receiver = new ItemReceiver();

echo ($receiver->receiveFrom($asocial))?'Good':'Bad';

echo "<br/>";

echo 'Fifth scenario mood : ';

$normal = new NormalGiver();
$normal->find(new RadioactiveItem());
$receiver = new ItemReceiver();

echo ($receiver->receiveFrom($normal))?'Good':'Bad';