<?php

class AlienGiver implements GiverInterface {

    public function give() {
        return new RadioactiveItem();
    }

}