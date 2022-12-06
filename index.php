<?php
include('config.php');
if ((isset($_POST["acao"]))) {
	$nome = $_POST["nome"];
    $email = $_POST["email"];
	$senha = $_POST["senha"];

	$sql = "INSERT INTO cadastro(nome,email,senha) VALUES ('{$nome}','{$email}','{$senha}')";
    $res = $con->query($sql);


	if ($res==true) {
		print "<script>alert('Cadastrado com sucesso!!')</script>";
		print "<script> location.href='?page=listar';</script>";
	}else{
		print "<script>alert('Usuário cadastrado com sucesso');</script>";
		print "<script> location.href='?page=home.php';</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Painel cadastro</title>
    
</head>
<body>
    <form method="POST" action="">
        <br>
        <br>
    <div class="container">
    <br>
    <br>
    <h1>Painel de cadastro</h1>
    <img src="https://cdn2.iconfinder.com/data/icons/call-to-action-4/2000/Illustration_1-256.png" alt="">
    <br>
    <label>Nome</label>
    <br>
    <br>
    <input class="nome" type="text" name="nome" placeholder="nome" required>
    <br>
    <br>
    <label>Email</label>
    <br>
    <br>
    <input class="email" type="email" name="email" placeholder="E-mail"required>
    <br>
    <br>
    <label>Senha</label>
    <br>
    <br>
    <input class="senha" type="password" name="senha" placeholder="senha"required>
    <br>
    <br>
    <button name="acao" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Cadastrar</button>
    <br>
    <br>
    </div>
    </form>
</body>
</html>