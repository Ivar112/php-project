<?php 

function ageChecker($age)

{
    if ($age < 21)
    {
        echo '<img src= ./img/bouncer.png>';

    } else  echo  '<img src= ./img/comein.png>';
}