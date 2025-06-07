<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Index (Página Inicial)</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

  <!-- Meu CSS -->
  <link rel="stylesheet" href="style.css" />

</head>
<body>

  <h1 class="form-title text-center my-4">Gerenciamento Escolar</h1>

  <form action="process-bd.php" method="post" class="row g-3 container">

    <div class="col-md-6">
      <label for="rm" class="form-label">RM</label>
      <input type="text" class="form-control" id="rm" name="rm" placeholder="XXXX" maxlength="4" pattern="[0-9]{4}" required />
    </div>

    <div class="col-12">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required />
    </div>

    <div class="col-12">
      <label for="cod" class="form-label">Cod.Etec</label>
      <input type="text" class="form-control" id="cod" name="cod" placeholder="XXX" maxlength="3" pattern="[0-9]{3}" required />
    </div>

    <div class="col-md-4">
      <label for="tipo_usuario" class="form-label">Entrar Como:</label>
      <select id="tipo_usuario" name="tipo_usuario" class="form-select" required>
        <option value="">Selecione...</option>
        <option value="professor">Professor</option>
        <option value="aluno">Aluno</option>
      </select>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Entrar</button>
    </div>

  </form>



</body>
</html>
