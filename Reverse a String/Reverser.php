<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/1/2015
 * Time: 7:24 PM
 */

namespace Reverse_a_String;

class Reverser extends Changer
{
    private $container;
    private $a;
    private $new_string;
    private $i=0;
    function __construct(){
    }

    function changeString(String $string){
        $this->container = str_split($string->getString());
        $this->a = array_pop($this->container);
        while(isset($this->a)){
            $this->new_string[$this->i] = $this->a;
            $this->i++;
            $this->a = array_pop($this->container);
        }
        $string->setModString(implode($this->new_string));
        return $string;
    }
}