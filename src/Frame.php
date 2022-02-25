<?php

namespace Maxsl77\Framework;


use Maxsl77\Framework\Test\Session;

class Frame
{
    public function __construct()
    {
        Session::set('key', '123');
        echo 'Hello';
    }
}