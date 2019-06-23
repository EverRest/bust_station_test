<?php

/**
 * Class Route
 */
class Route implements RouteInterface
{
    /**
     * @var int
     */
    public $currentStation = 1;
    /**
     * @var boolean
     */
    public $forward = true;
    /**
     * @var int
     */
    public $stations = null;
    /**
     *
     */
    public function changeStation()
    {
        $this->checkDirection();
        if ($this->forward) {
           $this->currentStation++;
        } else {
            $this->currentStation--;
        }
    }
    /**
     *
     */
    public function checkDirection()
    {
    }
}