<?php
  // Inicia a sessão
  session_start();

  // Verifica se o usuário está logado e se é um usuário ou admin
  if (!isset($_SESSION['usuario']) || ($_SESSION['tipo'] != 'usuario' && $_SESSION['tipo'] != 'admin')) {
    // Se o usuário não estiver logado ou não for um usuário ou admin válido, redireciona para a página de login
    header('Location: login.php');
    exit();
  }

   // Redireciona o usuário para a página correta com base no tipo de usuário
   if ($_SESSION['tipo'] == 'usuario') {
    // Redireciona para a página de usuário comum
    header('Location: usuario.php');
    exit;
  } else {
    // Redireciona para a página de administração
    header('Location: admin.php');
    exit;
  }
?>




