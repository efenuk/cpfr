<?php

$normal = new NormalGiver();
$receiver = new ItemReceiver();

echo 'Mood: ' . ($receiver->receive($normal->giveRadioactiveItem()))?'Good':'Bad';