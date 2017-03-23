<?php
//require(__DIR__ . '/SubjectInterface.php');
require dirname(__FILE__)."/SubjectInterface.php";

class FootballTeam implements SubjectInterface
{
    private $observers = [];
    private $name;

    /**
     * FootballTeam constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    // Подписывает наблюдателя (observer) на события
    public function attachObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }
    // Отписывает наблюдателя от события
    public function detachObserver(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $obs){
            if($obs === $observer){
                unset($this->observers[$key]);
                return;
            }
        }
    }
    // Оповещает наблюдателя о событии
    public  function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }

    }
}