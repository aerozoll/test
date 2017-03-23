<?php

require(__DIR__ . '/ObserverInterface.php');

class FootballFan implements ObserverInterface
{
    public function update(SubjectInterface $team)
    {
        echo " Фанат отреагировал на событие <br>";
    }
}