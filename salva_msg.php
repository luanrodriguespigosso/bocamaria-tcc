<?php
  session_start();

  include_once('conexao_db.php');

  $email = $_POST['email'];

  $result_email = ("INSERT INTO usuarios(email) VALUES ('$email')");  
  $resultado_email = mysqli_query($conn, $result_email);

  if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>E-mail cadastrado com sucesso!</p>";
    header('Location: index.php');
  } else {
    $_SESSION['msg'] = "<p style='color:red;'>Não foi possivel cadastrar o email, tente mais tarde</p>";
    header('Location: index.php');
  }
?>