<?php

namespace DTO\User;


use DTO\ErrorViewDataInterface;

class UserRegisterViewData implements ErrorViewDataInterface
{

    private $error;

    public function __construct($error = null)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}