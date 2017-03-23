<?php
require(__DIR__ . '/FootballFan.php');
require(__DIR__ . '/FootballTeam.php');

$team1 = new FootballTeam();

$fan1 = new FootballFan();
$fan2 = new FootballFan();

$team1->attachObserver($fan1);
$team1->attachObserver($fan2);

$team1->notify();
<html>
<h1>Изменения гит</h>
</html>
