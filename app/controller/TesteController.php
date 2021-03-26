<?php

namespace app\controller;

class TesteController
{
    public function __construct()
    {
        echo 'Estamos aqui.';
    }
    public function seta()
    {
        return  ['nome' => 'Ramon'];
    }
}
