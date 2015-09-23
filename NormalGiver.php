<?php

class NormalGiver implements GiverInterface {

    public function give() {
        return new NormalItem();
    }

    public function giveRadioactiveItem() {
        return new RadioactiveItem();
    }

}