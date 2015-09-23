<?php

class ItemReceiver implements ReceiverInterface {

    public function receive(ItemInterface $item) {
        return $item->isGood();
    }

}