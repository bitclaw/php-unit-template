<?php

namespace PHPCode\Algorithm;

/**
 *
 * Algorithm Class
 *
 */

class Algorithm {


    /**
     *
     * Description goes here.
     *
     * @param $number int
     * @return int
     */
    public function addAllNumbers($number) {
        return ($number*($number+1)) / 2;
    }
}