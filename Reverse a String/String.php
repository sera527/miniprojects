<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/1/2015
 * Time: 7:24 PM
 */

namespace Reverse_a_String;

class String
{
    private $string;
    private $mod_string;

    function __construct($string){
        $this->string = $string;
    }

    /**
     * @return mixed
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @return mixed
     */
    public function getModString()
    {
        return $this->mod_string;
    }

    /**
     * @param mixed $mod_string
     */
    public function setModString($mod_string)
    {
        $this->mod_string = $mod_string;
    }

}