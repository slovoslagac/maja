<?php

/**
 * Created by PhpStorm.
 * User: Korisnik
 * Date: 30.3.2018
 * Time: 19:47
 */
class Player
{
    private $first_name;
    private $last_name;
    private $birth_date;


    public function set_attribute($val, $type)
    {
        $this->$type = $val;
    }

    public function get_attribute($type)
    {
        return $this->$type;
    }
}