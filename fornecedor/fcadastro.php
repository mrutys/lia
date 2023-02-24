<!DOCTYPE html>
<?php 
include("../protect.php");
?>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="lia/favicon_io/favicon-32x32.png" type="image/x-icon"> 
    <link rel="stylesheet" href="../css/styledd.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lia Controle</title> 
  </head>

<body>
        <td><center><img src="../imagens/logo.maida.png" width="100" height="80" ><em> Lia Controle </em></center> </td>
        <main>      
        <aside>
            Esse Sistema é de exclusividade apenas para o Time de Infraestrutura <strong>Maida.Health </strong>
            | Logado &rArr; <strong><font color="red">  <?php echo $_SESSION['login']; ?></font> </strong> |
            <a href= ../sair.php >Sign out</a> | 
        </aside>

        </main>

<p>
<?php
date_default_timezone_set('America/Sao_Paulo');
include("menu.php");
?>
</p>
<center>
<form name="cadastrar" action="inserir.php" method="post" autocomplete="off" >
    
       <table class="cadastra">

       <tr>
          <td colspan="2" align='center' ><strong> ⌨ CADASTRO DO FORNECEDOR </strong></td>
        </tr>
       <tr>
          <td nowrap><label for="for_nome"><strong>Nome do Fornecedor:</strong></label> </td>
          <td align='center' ><input name="for_nome" id="for_nome" type="text" size='50' maxlength="15" required minlength="5" placeholder="Digite o nome do Fornecedor" autocomplete="" ></td>
        </tr>         
        <tr>
            <td><INPUT name="reset" TYPE="reset" VALUE=" &#129529; LIMPAR"></td>
            <td><INPUT  type="submit"  VALUE=" &#9000; Cadastrar  "></td>
        </tr>
        </table>
        </form></center>
      

</body>
</html>
<?php
//***********************************
//*****Criado por Milton Rutys******* 
//***********************************
//**********EM 02/19/2023************
//***********************************
?>
