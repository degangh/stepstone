<?php
class Connection{
  public static function make($config)
  {
    try {
      //return new PDO('mysql:host=127.0.0.1; dbname=mytodo', 'root', '123456');

      return new PDO(
          $config['connection'].";dbname=".$config['name'],
          $config['user'],
          $config['password'],
          $config['options']

        );
    }
    catch (PDOException $e)
    {
      dd($e);
    }
  }
}


?>
