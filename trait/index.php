<?php
require_once 'autoload.php';

$user = new User('Pierre-Yves');

$user->asParagraph($user->getUsername(), 'green');

$user->displayUsername();

$user->displayUsername('red');

$user->displayUsername('blue', true);
