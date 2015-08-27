<?php
session_start();
require_once("model/Student.php");

class StudentController {
     public $model;

     public function __construct()
     {
          $this->Student = new Student();
     }

     public function saveUserDetails($userDetails=null) {
          $user = [];
          $user['name'] = @$_REQUEST['name'];
          $user['email'] = @$_REQUEST['email'];
          $user['user'] = @$_REQUEST['user'];
          $user['pass'] = @$_REQUEST['pass'];

          if ( $this->Student->save($user) ) {
                header('Location: http://localhost/mvc/?type=login');
          }
          exit;
     }

     public function checkLogin($userDetails=null) {
          $user = [];
          $user['user'] = @$_REQUEST['user'];
          $user['pass'] = @$_REQUEST['pass'];

          if ( $this->Student->login($user) ) {
            echo "<pre>";
            print_r($_SESSION);
            exit();
          } else {
            echo "<pre>";
            print_r($_SESSION);
            exit();
          }
          exit;
     }
}
