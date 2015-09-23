<?php

$asocial = new AsocialGiver();
$receiver = new ItemReceiver();

echo 'Mood: ' . ($receiver->receive($asocial->give()))?'Good':'Bad';