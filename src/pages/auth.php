<?php
session_start();
$login = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;
if(authenticateFake($login, $password)){
  $_SESSION['auth'] = true;
  header('Location: home.php');
  exit();
} else {
  header('Location: login.php');
}
// function autentication($user, $pass){
//   // var_dump(username($user, $pass));
//     return username($user, $pass);
// }
function authenticateFake($user, $pass){
   return $user == 'reinaldo' && $pass == '123';
}