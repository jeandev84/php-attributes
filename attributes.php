<?php

use App\DTO\UserRegistration;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration('John', 'john@example.com');


dd($userRegistration);


