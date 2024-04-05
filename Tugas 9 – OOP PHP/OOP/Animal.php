<?php

Class Animal{
     public $name;
     public $legs = 4;
     public $cool_blooded="No";
     // public $yell;
     public function __construct($name) {
          $this->name = $name;
     }
}