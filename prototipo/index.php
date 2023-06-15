<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo_input.css">

</head>
<body>
  <div class="form-container">
    <form class="styled-form" action="cadastrar_cliente.php" method="POST">
      <input type="text" placeholder="Nome" name= "Nome_cliente" required>
      <input type="email" placeholder="Email" name= "Email_cliente" required>
      <input type="tel" placeholder="Telefone" name= "Tel_cliente" required>
      <button type="submit" name="Botao_cadastro_cliente">Cadastrar</button>
    </form>
  </div>
</body>
</html>
