<?php

class Player
{
    protected $points = [
        0 => "0",
        1 => "15",
        2 => "30",
        4 => "40"
    ];

    protected $name;

    protected $score;

    /**
     * Player constructor.
     * @param $name
     * @param $score
     */
    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function winPoint()
    {
        $this->score += 1;
    }

    public function score()
    {
        return $this->score;
    }
}