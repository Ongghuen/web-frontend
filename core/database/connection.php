<?php

class Connection
{
  public static function make($config)
  {
    try {
      return new PDO(
        $config['connection'],
        $config['username'],
        $config['password'],
        $config['options'],
      );
    } catch (PDOException $ex) {
      dd("wah gak bisa dek" . $ex->getMessage());
    }
  }
}
