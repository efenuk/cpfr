<?php

$alien = new AlienGiver();
$asocial = new AsocialReceiver();
$receiver = new ItemReceiver();

echo 'Mood: ' . ($receiver->receive($asocial->receive($alien->give())))?'Good':'Bad';