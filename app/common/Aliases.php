<?php
namespace Common;

use Phalcon\Di;

class Aliases
{

    public static function register(Di $di)
    {
        foreach (Config::get('aliases') as $alias => $class) {
            class_alias($class, $alias);
        }
    }
}
