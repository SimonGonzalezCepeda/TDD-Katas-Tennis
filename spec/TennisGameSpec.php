<?php

namespace spec;

use Player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{

    protected $player2;
    protected $player1;

    function let(){
        $this->player1 = New Player(0,"Maria");
        $this->player2 = new Player(0,"Pepe");
        $this->beConstructedWith($this->player1,$this->player2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }

    function if_score_0_iguals(){
        $this->score()-shouldReturn("0 iguals");
    }

    function if_score_15_0(){
        $player1->winPoint();
        $this->score()-shouldReturn("15 - 0");
    }

    function if_score_15_iguals(){
        $player2->winPoint();
        $this->score()-shouldReturn("15 iguals");
    }
}
