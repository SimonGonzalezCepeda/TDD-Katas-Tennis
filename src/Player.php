<?php

class Player
{
    protected $code = [
        0 => "0",
        1 => "15",
        2 => "30",
        4 => "40"
    ];

    protected $name;

    protected $points;

    /**
     * Player constructor.
     * @param $name
     * @param $score
     */
    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    public function winPoint()
    {
        $this->points += 1;
    }

    public function points()
    {
        return $this->points;
    }

    public function score()
    {
        return $this->points;
    }
}