<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<! bootstrap->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index (Página Inicial )</title>
</head>
<body>
<h1>Etec Prof Hamilton Leitero</h1>

<form>
<label>Faça seu Login:</label>

<select name="entrar" required>
<option>Aluno</option>
<option>Professor</option>
</select>



<label>Email:</label>
 <input type="text" name="email" id="email" placeholder="Digite seu e-mail" required>
<p>
</p>

<label>Senha:</label>
 <input type="password" name="password" id="password" required> 

 <Label>Login</Label>
 <input type="text" name="login" id="login" placeholder="XXXX" pattern="[0-9]{4}" maxlength="4" required>


<h4>Não possui Cadastro ? Verifique e contate sua escola afim de validar a sua matrícula</h4>

</form>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>