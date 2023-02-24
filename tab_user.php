<?php
include('conexao.php');
$resultado = mysqli_query($conn, "SELECT * FROM user ");

while($produto = mysqli_fetch_assoc($resultado)) {
  
    echo "<p>" . $produto ['id_user'] . " | " ;
    echo $produto ['user_nome'] .  " | " ;
    echo $produto ['user_senha'] .  " | " ;
    echo $produto ['user_data'] . "<br/>";
}
?> 

