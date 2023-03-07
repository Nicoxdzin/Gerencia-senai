<?php
    include_once('conexao.php');

  // Recupera as informações do formulário de login
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  // Verifica se o nome de usuário e senha existem no banco de dados
  $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
  $resultado = mysqli_query($conn, $query);

  // Se o usuário for encontrado, cria uma sessão e redireciona para a página principal
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['tipo'] = $row['tipo'];
    header('Location: principal.php');
  } else {
    // Caso contrário, exibe uma mensagem de erro
    echo "Nome de usuário ou senha inválidos.";
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conn);
?>