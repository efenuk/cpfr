<?php

class ItemReceiver implements ReceiverInterface {

    /**
     * Return quality of item that giver have
     *
     * @param GiverInterface $giver
     * @return bool
     */
    public function receiveFrom(GiverInterface $giver)
    {
        if ($giver instanceof AlienGiver) {
            return true;
        }

        if ($giver instanceof AsocialGiver && $giver->isDrunk) {
            return true;
        }

        return $giver->give()->isGood();
    }
}