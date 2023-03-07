<?php
    session_start();

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd_nome = "db_gerenciador";

    // Conexão com banco de dados
  $conn = mysqli_connect($servidor, $usuario, $senha, $bd_nome);

  // Verifica se houve erro na conexão
  if (mysqli_connect_errno()) {
    echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    exit();
  }

?>