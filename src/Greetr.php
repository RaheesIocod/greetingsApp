<?php

namespace Iocod\Greeting;

class Greetr
{
    public function greet(String $sName=null)
    {
        return 'Hi , ' . $sName . '! how is your day?';
    }
}