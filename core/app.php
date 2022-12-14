<?php

class App
{

  protected static $registry;

  public static function bind($key, $val)
  {
    static::$registry[$key] = $val;
  }
  public static function get($key)
  {
    if (!array_key_exists($key, static::$registry)) {
      echo "No ($key) is bound in the container";
    }
    return static::$registry[$key];
  }
}
