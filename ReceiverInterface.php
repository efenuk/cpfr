<?php

interface ReceiverInterface {

    public function receiveFrom(GiverInterface $giver);

}