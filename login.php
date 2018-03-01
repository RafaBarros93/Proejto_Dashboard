<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<form class="form-signin" method="post" action="ope.php" id="formlogin" name="formlogin">
   
   
    <label for="usuario" class="sr-only">Usuário</label>
    <input type="text" name="login" id="login" class="form-control" placeholder="Digite o usuário:" required autofocus>
    <label for="senha" class="sr-only">Senha</label>
    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha:" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Lembre me
        </label>
    </div>

    <button name="btnlogar" class="btn btn-danger btn-block" type="submit">Acessar</button>

</form>


</body>

</html>