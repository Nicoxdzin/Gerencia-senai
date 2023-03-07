<?php
  // Inicia a sessão
  session_start();

  // Verifica se o usuário está logado e se é um usuário ou admin
  if (!isset($_SESSION['usuario']) || ($_SESSION['tipo'] != 'usuario' && $_SESSION['tipo'] != 'admin')) {
    // Se o usuário não estiver logado ou não for um usuário ou admin válido, redireciona para a página de login
    header('Location: login.php');
    exit();
  }

  // Exibe informações diferentes na página principal com base no tipo de usuário
  if ($_SESSION['tipo'] == 'usuario') {
    echo "Bem-vindo, " . $_SESSION['usuario'] . "! Você é um usuário.";
  } else {
    echo "Bem-vindo, " . $_SESSION['usuario'] . "! Você é um administrador.";
  }
?>




