<?php

require_once "data/LoginRequest.php";
require_once  "exception/ValidationException.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "sabrina";
$request->password = "oke";


ValidationUtil::validateReflection($request);

class RegisterUserRequest{
    public ?string $username;
    public ?string $password;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->username = "pegellinux";
$register->password = "kampret";
$register->email = "pegellinux@gmail.com";


ValidationUtil::validateReflection($register);
