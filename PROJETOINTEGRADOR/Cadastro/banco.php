<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'cadastroclientes';
$bdSenha = 'cadastroclientes';
$bdBanco = 'cadastro';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}

