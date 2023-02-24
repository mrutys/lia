<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon_io/favicon-32x32.png" type="image/x-icon"> 
</head>
		<body>
	  		<fieldset>
	  			<legend>Acesso ao Sistema</legend>
				<form action="recebe.php" method="POST"  onsubmit="logar(); return false" autocomplete="on">
				<div >
				<label for="nome">Usuário:</label>
				<input type="text" name="login" id="login"  maxlength="15" UPPER required minlength="5" placeholder="Digite o nome do usuário" autocomplete="username"  >
				</div><div>	
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha"  maxlength="15"   required minlength="3" placeholder="Digite a sua Senha" automplete="current-password" >
				</div><div><center>
				<input type="submit" value=" &#128187; Entrar" >
				</center></div><div><center>
				<input type="reset" value="Limpar" >
				</center></div>
				</form>
			</fieldset>
		</body>
</html>
