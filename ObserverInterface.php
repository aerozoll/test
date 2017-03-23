<?php
/*
 * Наблюдатель событиё
 */
interface ObserverInterface
{
    public  function update(SubjectInterface $subject);

}