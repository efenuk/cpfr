<?php

class ItemReceiver implements ReceiverInterface {

    public function receiveFrom(GiverInterface $giver)
    {
        if ($giver instanceof AlienGiver) {
            return false;
        }

        if ($giver instanceof AsocialGiver && $giver->isDrunk) {
            return true;
        }

        return $giver->give()->isGood();
    }
}