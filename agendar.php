<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'conexao.php';

$mensagem = "Ocorreu tudo certo!";
$sucesso = false;

$nome_user = $_POST['nome_user'];
$senha_user = $_POST['senha_user'];

$query = "INSERT INTO usuarios (usuario, senha) VALUES ('$nome_user', '$senha_user')";

mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #ffcce0, #ff99c8);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .mensagem {
      background: white;
      padding: 40px 50px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(255, 105, 180, 0.3);
      animation: pop 0.6s ease;
    }

    .mensagem h1 {
      color: <?= $sucesso ? "'#e60073'" : "'#a80000'" ?>;
      font-size: 24px;
      margin-bottom: 25px;
    }

    a {
      display: inline-block;
      padding: 12px 30px;
      background-color: #ff4c94;
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      transition: background 0.3s;
    }

    a:hover {
      background-color: #cc3b77;
    }

    @keyframes pop {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
</style>
</head>
<body>
<div class="mensagem">
<h1><?= $mensagem ?></h1>
<a href="index.php">Voltar</a>
</div>
</body>
</html>
