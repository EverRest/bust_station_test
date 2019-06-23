<?php

/**
 * Class SomeRoute
 */
final class SomeRoute extends Route
{
    const F_STATION = 1;
    const L_STATION = 5;
    /**
     *
     */
    public function checkDirection()
    {
        parent::checkDirection();
        if ($this->currentStation === self::L_STATION) {
            $this->forward = false;
        }
        if ($this->currentStation === self::F_STATION) {
            $this->forward = true;
        }
    }
}