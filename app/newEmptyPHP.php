<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User
{
    public $name;
    public $password;
}

$a = new User("Anya", "123");


$a = "{name: 'Anya', password: '123'}";

$a  = 
"<xml><name value='Anya'></name><password>123</passord></xlm>";