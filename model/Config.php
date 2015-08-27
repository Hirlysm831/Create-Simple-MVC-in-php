<?php
class Config {
  public function __construct() {
        $con = mysql_connect("localhost", "root", "root") or die("Unable to connect to MySQL");

        mysql_select_db("studentDb", $con) or die("Unable to select DB!");

        // Valid connection object? everything ok?
        if($con)
        {
            return true;
        }
        else return false;
  }
}
