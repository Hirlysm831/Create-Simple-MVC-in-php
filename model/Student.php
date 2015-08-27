<?php
session_start();
require_once("model/Config.php");
class Student extends Config {
  public function __construct() {
      new Config();
  }
  public function getBookList()
  {
    // here goes some hardcoded values to simulate the database
  }

  public function getBook($id)
  {
  }

  public function save($data=null)
  {
    $data = $this->clean($data);
    $pass = md5($data['pass']);
    $sql = "INSERT INTO students(name,email,user,password) VALUES ('$data[name]', '$data[email]', '$data[user]', '$pass')"; // Get insert query
    if ( mysql_query( $sql ) ) {
      return true;
    } else {
      return false;
    }
}

 public function login($data=null)
  {
    $data = $this->clean($data);
    session_destroy();
    $pass = md5($data['pass']);
    $sql = "SELECT * FROM students where user='$data[user]' AND password='$pass' "; // Get insert query
    $results = mysql_query( $sql );
    if ( $results ) {
          if(mysql_num_rows($results) > 0) {
                //Login Successful
                session_regenerate_id();
                $_SESSION['status'] = "Logged in!";
                return true;
              }else {
                //Login failed
                  $_SESSION['ERRMSG_ARR'] = "user name and password not found";
                  return false;
              }
    }
}

  private function clean($data = null) {
      $cleanedData = array();
      $unescaped_slashes_string = @array_map('trim', $data);
      $cleanedData = @array_map('addslashes', $unescaped_slashes_string);
      return $cleanedData;
  }

  private function getInsertQuery($req_data = null) {
        $inital_query = "INSERT INTO students";
        $keys = array_keys($req_data);
        $keys = implode(',', $keys);
        $middle_query = '(' . $keys . ') VALUES ';

        $values = array_values($req_data);
        $values = "'" . implode("', '", $values) . "'";

        $end_query = '(' . $values . ')';
        $insertQuery .= $inital_query . $middle_query . $end_query . ';';
        return $insertQuery;
    }
}
