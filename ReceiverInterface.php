<?php

interface ReceiverInterface {

    /**
     * Receive from giver his item
     *
     * @param GiverInterface $giver
     * @return mixed
     */
    public function receiveFrom(GiverInterface $giver);

}