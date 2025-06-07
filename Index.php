<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<! bootstrap->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index (Página Inicial )</title>
</head>
<body>
<h1 class="form-title text-center">Gerenciamento Escolar</h1>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">RM</label>
    <input type="text" class="form-control" id="rm" name="rm" placeholder="XXXX" maxlength="4" pattern="[0-9{4}">
  </div>
   <div class="col-12">
    <label for="inputAddress" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
  </div>
 
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Cod.Etec </label>
    <input type="text" class="form-control" id="cod" placeholder="XXXX" maxlength="3" pattern[0-9]{3} name="cod">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Entrar Como:</label>
    <select id="inputState" class="form-select">
      <option>Professor</option>
      <option>Aluno</option>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Entrar</button>
  </div>
</form>







</body>
</html>