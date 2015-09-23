<?php

$alien = new AlienGiver();
$receiver = new ItemReceiver();

echo 'Mood: ' . ($receiver->receive($alien->give()))?'Good':'Bad';