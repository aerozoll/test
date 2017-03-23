<?php
/*
 * Интерфейс события. Генерирует события
 */
interface SubjectInterface
{
    // Подписывает наблюдателя (observer) на события
    public function attachObserver(ObserverInterface $observer);

    // Отписывает наблюдателя от события
    public function detachObserver(ObserverInterface $observer);

    // Оповещает наблюдателя о событии
    public  function notify();
}