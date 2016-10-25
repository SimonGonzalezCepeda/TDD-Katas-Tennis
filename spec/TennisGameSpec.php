<?php

namespace spec;

use Player;
use TennisGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{

    /**
     * @var Player
     */
    protected $player2;
    /**
     * @var Player
     */
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
        $this->score()->shouldReturn("0 iguals");
    }

    function if_score_15_0(){
        $this->player1->winPoint();
        $this->score()->shouldReturn("15 - 0");
    }
    function if_score_30_0(){
        $this->player1->winPoint();
        $this->player1->winPoint();
        $this->score()->shouldReturn("30 - 0");
    }
    function if_score_40_0(){
        $this->player1->winPoint();
        $this->player1->winPoint();
        $this->score()->shouldReturn("40 - 0");
    }

    function if_score_0_15(){
        $this->player2->winPoint();
        $this->score()->shouldReturn("0 - 15");
    }
    function if_score_0_30(){
        $this->player2->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("0 - 15");
    }
    function if_score_0_40(){
        $this->player2->winPoint();
        $this->player2->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("0 - 15");
    }
    function if_score_advantage_player2(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("Advantage " . $this->player2->name());
    }
    function if_score_deauce_player2(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->score()->shouldReturn("Iguals");
    }

    function if_score_15_iguals(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("15 iguals");
    }
    function if_score_30_iguals(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("30 iguals");
    }
    function if_score_Iguals(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("Iguals");
    }
    function if_score_advantage_player1(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->score()->shouldReturn("Advantage " . $this->player1->name());
    }
    function if_score_deauce_player1(){
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->player1->winPoint();
        $this->player2->winPoint();
        $this->score()->shouldReturn("Iguals");
    }

}
