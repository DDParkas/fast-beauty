<?php
require_once "connect.php";
require_once "functions/crypt.php";

$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$acessLevel = $_POST['acessLevel'];

$pass = encrypt($pass);
$query = "INSERT INTO login (name, pass, email,acessLevel) VALUES ('{$name}', '{$pass}', '{$email}', '{$acessLevel}')";
$inserir = mysqli_query($connect,$query);


if ($inserir) {
  echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
          location.href='user.php';
        </SCRIPT>";
} else {
  echo "Não foi possível cadastrar, tente novamente.";
  // Exibe dados sobre o erro:
  echo "Dados sobre o erro:" . mysqli_error($connect);
}
