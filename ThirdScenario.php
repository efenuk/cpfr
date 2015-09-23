<?php

$normal = new NormalGiver();
$receiver = new ItemReceiver();

echo 'Mood: ' . ($receiver->receive($normal->give()))?'Good':'Bad';