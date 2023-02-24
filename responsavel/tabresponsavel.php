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
    <title>Lia Controle</title> 
  </head>
<style>
em  {
    text-align: left;
    font-size: 50px;  
    }
h1, h2, h3 {
   text-align: center;
           }
aside {
   display: block; 
   font-size: 14pt;
   text-align: center;
   background-color: rgb(222, 222, 222);
   padding: 10px;
   border-radius: 10px;
   margin-bottom: 10px;
      }
p {
   font-family: Tahoma, sans-serif;
   text-align: right;
   font-size: 12px;
  }
fieldset {
font-size: 25px;
margin:12px auto;
width:30%;
color: black;
border-radius: 10px;
padding: 5px;
         }
input[type=text] {
	cursor: pointer;
	width: 50%;
	height: 30px;
                  }
input[type=password] {
	cursor: pointer;
	width: 52%;
	height: 30px;
                      }
input[type=submit] {
text-align: center;
display: block;
font-size: 1em;
width: 90%;
height: 30px;
background-color: #49a09d;
color: white;
border: 5;
border-radius: 10px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #2d6462;
}
input[type=reset]{
text-align: center;
display: block;
font-size: 1em;
width: 90%;
height: 30px;
background-color: #49a09d;
color: white;
border: 5;
border-radius: 10px;
cursor: pointer;
margin: 10px;
                 }
input[type=reset]:hover {
	background-color: #2d6462;
                        }
div {
	text-align: center;
	padding: 5px;
    }
  
</style>
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



    <p>
<?php
include('../conexao.php');
$resultado = mysqli_query($conn, "SELECT * FROM entregador ");

while($produto = mysqli_fetch_assoc($resultado)) {
  
    echo "<p>". "<center>" . $produto ['id_entre'] . " | " ;
    echo $produto ['entre_nome'] .  " | " ;
    echo $produto ['entre_cpf'] .  " | " ;
    echo $produto ['entre_cargo'] .  " | " ;
    echo $produto ['entre_email'] .  " | " ;
    echo $produto ['entre_tel'] .  " | " ;
    echo $produto ['entre_data'] .  " | " ;
    echo $produto ['entre_user'] . "<br/>";
    echo "<p></center>";
}
?> 
</p>

</body>
</html>

