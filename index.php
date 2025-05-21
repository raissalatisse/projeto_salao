<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Agendar Corte</title>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #ffdde1, #ee9ca7);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      width: 300px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #cc0066;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"], input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #ff4c94;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #cc3b77;
    }
  </style>
</head>
<body>
  <form method="POST" action="agendar.php">
    <h2>Cadastrar Usuário</h2>
    <label for="nome_user">Nome de usuário</label>
    <input type="text" name="nome_user" id="nome_user" required>

    <label for="senha_user">Senha</label>
    <input type="text" name="senha_user" id="senha_user" required>

    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>

