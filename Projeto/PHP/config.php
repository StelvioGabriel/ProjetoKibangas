<?php 
$host='Localhost';
$usurio='root';
$senha='';
$bancodedados='teste1';

$conexao= mysqli_connect($host, $usurio, $senha, $bancodedados); 
if (!$conexao) {
    echo "Erro ao Conectar" ; 
}
?>