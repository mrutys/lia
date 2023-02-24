<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon_io/favicon-32x32.png" type="image/x-icon"> 
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
        <td><center><img src="imagens/logo.maida.png" width="100" height="80" ><em> Lia Controle </em></center> </td>
        <main>      
        <aside>
            Esse Sistema é de exclusividade apenas para o Time de Infraestrutura <strong>Maida.Health </strong>
        </aside>

        </main>
<?php
$dia_ingles = date("l"); 
switch($dia_ingles) {  
  case "Monday":
   $dia_port = "Segunda-feira";
   break;
  case "Tuesday":
   $dia_port = "Terça-feira";
   break;
  case "Wednesday":
   $dia_port = "Quarta-feira";
   break;
  case "Thursday":
   $dia_port = "Quinta-feira";
   break;
  case "Friday":
   $dia_port = "Sexta-feira";
   break;
  case "Saturday":
   $dia_port = "Sábado";
   break;
  case "Sunday":
   $dia_port = "Domingo";
   break;
                    }
$mes_ingles = date("n"); 
switch($mes_ingles)
{ 
  case "1":
    $mes_port = "Janeiro";
    break;
  case "2":
    $mes_port = "Fevereiro";
    break;
  case "3":
    $mes_port = "Março";
    break;
  case "4":
    $mes_port = "Abril";
    break;
  case "5":
    $mes_port = "Maio";
    break;
  case "6":
    $mes_port = "Junho";
    break;
  case "7":
    $mes_port = "Julho";
    break;
  case "8":
    $mes_port = "Agosto";
    break;
  case "9":
    $mes_port = "Setembro";
    break;
  case "10":
    $mes_port = "Outubro";
    break;
  case "11":
    $mes_port = "Novembro";
    break;
  case "12":
   $mes_port = "Dezembro";
   break;
}
echo '<p>';
echo "Teresina, Piauí, ";
echo ($dia_port);
echo (", ");
echo (date("d"));
echo (" de ");
echo ($mes_port);
echo (" de ");
echo (date("Y"));
echo '</p>';

date_default_timezone_set('America/Sao_Paulo');


$hora = date("H"); 

 if ($hora >=0 and $hora <12) {
  echo "<h3><font color='#5F9EA0'>&#9728; Bom dia ! </h3>";
 } elseif ($hora >=12 and $hora <18) {
  echo "<h3><font color='#D2691E'>&#9788; Boa tarde ! </h3>";
 }else {
  echo "<h3><font color='#8B008B'>&#9790; Boa Noite ! </h3>";
}

?>

<div><?php include "formulario.php"; ?></div>      
</body>
</html>
<?php
//***********************************
//*****Criado por Milton Rutys******* 
//***********************************
//**********EM 02/19/2023************
//***********************************
?>
