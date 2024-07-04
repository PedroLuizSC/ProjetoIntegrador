<?php
session_start();


if (array_key_exists("nome", $_GET) && $_GET['nome'] !== ""){
    $clientes = [];
    $clientes ["nome"] = $_GET["nome"];

    if(array_key_exists('nascimento', $_GET)) {
        $clientes['nascimento'] = $_GET['nascimento'];}
        else {
            $cadastro['nascimento'] = '';}   
        
        $clientes['genero'] = $_GET['genero'];

        if(array_key_exists('CPF', $_GET)) {
            $clientes['CPF'] = $_GET['CPF']; }
            else{
                $cadastro['CPF'] = '';
            }
        if(array_key_exists('CEP', $_GET)) {
            $clientes['CEP'] = $_GET['CEP']; }
            else{
                $cadastro['CEP'] = '';
            }
        if(array_key_exists('endereco', $_GET)) {
            $clientes['endereco'] = $_GET['endereco']; }
            else{
                $cadastro['endereco'] = '';
            }

$_SESSION['cadastrocliente'][] = $clientes;
 }
 
include 'CadastroCliente.php';