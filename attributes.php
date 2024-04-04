<?php

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

/* $userRegistration = new UserRegistration('John', 'john@example.com'); */
$userRegistration = new UserRegistration('', 'not-an-email');

$validator = new Validator();

$validator->validate($userRegistration);

$errors = $validator->getErrors();



