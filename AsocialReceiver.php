<?php

class AsocialReceiver implements ReceiverInterface {

    public function receive(ItemInterface $item) {
        return $item;
    }

}