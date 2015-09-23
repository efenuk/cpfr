<?php

class AsocialGiver implements GiverInterface {

    public function give() {
        return new NormalItem();
    }

}