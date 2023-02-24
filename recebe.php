<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon_io/favicon-32x32.png" type="image/x-icon"> 
    <title>Lia Controle</title> 
  </head>
  <body>
<?php
//include('protect.php');
include('conexao.php');

ob_start();/* Evitando warning*/
session_start();


$gmtDate = gmdate("D, d M Y H:i:s");
header("Expires: {$gmtDate} GMT"); 
header("Last-Modified: {$gmtDate} GMT"); 
header("Cache-Control: no-cache, must-revalidate"); 
header("Pragma: no-cache");
header("Content-Type: text/html; charset=iso-8859-1");


$login = $_POST['login'] ;
$senha = $_POST['senha'];

if ($login == "" ){
    header("location: index.php");
} else{


/*
if (!isset($_SESSION["login"])  ||  !isset($_SESSION["senha"]) )
{

             header("location: index.php");	
			 exit;
}
*/
//conexao ao banco de dados lia
//================================================

$re = mysqli_query($conn, " SELECT * FROM user WHERE user_nome = '$login' AND user_senha = '$senha' "); 

$total = mysqli_num_rows( $re );
    
    
 //================================================


        $result = mysqli_query($conn, " SELECT * FROM user WHERE user_nome = '$login' AND user_senha = '$senha' "); 

              
        //print_r($result);
        if (mysqli_num_rows($re) == 1) {
            
   /* Armazenando as variaveis na nossa Session */
$_SESSION["login"] =($login);
$_SESSION["senha"] =($senha);

if(isset($_POST['login']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0) {
        echo "Preencha seu login";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    }
print '<center>';

print '
<td colspan="2" align="center"> <h1>lia</h1> </td>
<hr>';

print '<IMG SRC="imagens/alegria.jpg"  ALT="Lia Controle" width="195" height="255" > <br>';
 print 'LEGAL !! Por favor, verifique se realmente esse é seu usuário <H1> '. $_SESSION["login"] .'</H1>, caso seja, clique em ENTRAR <BR> <BR> <a href= painel/painel.php ><h2>  ENTRAR</h2></a><br/>';
 
 
  /*e direcionar  para a pagina admin */
 exit ();
  
   /*caso o total seja zero  eu saiu com exit()  destroy qualquer session */
}}
    session_destroy();
	//print '<center>';

    print '<center>';
print '
<td colspan="2" align="center"> <h1>Lia</h1>
<hr>';


print '<IMG SRC="imagens/zangado.jpg"  ALT="Lia Controle" width="195" height="255" > <br>';

print '
Seu Usuario ou Senha esta incorreto </p> Por favor tente mais uma vez, caso tenha esquecido a sua senha, entre em contato com o Adminstrador';

	print'<a href=index.php >'.'<h2  class="aviso"> clique aqui para voltar</h2>'.'</a>'; 
	/* Informarmos senha invalida */
	
  ob_end_flush();  /*limpar o buffer  */
}
  ?>
  </body>
  </html>
  