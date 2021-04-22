<?php

$task = [
    'title' => 'go to store', 
    'due' => '23 april', 
    'assigned_to' => 'Kees', 
    'completed' => true,
    'repeated' => true
];

$task['duration'] = '45 minutes';

require 'functions.php';

ageChecker(12);


require 'index.view.php';

