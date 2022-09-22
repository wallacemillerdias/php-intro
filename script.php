<?php
/**
 * Created by PhpStorm
 * User: Wallace
 * Date: 21/09/2022
 * Time: 20:56:
 */
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
// print_r($categorias);

$nome = $_POST['nome']; 
$idade = $_POST['idade']; 

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve ter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome não pode ter mais de 40 caracteres';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
    return;
}

if ($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++) 
    {   
        if ($categorias[$i] == 'infantil') 
            echo "o nadador " . $nome . " compete na categoria " . $categorias [$i];
    }   
 }
 else if ($idade >= 13 && $idade <= 18)
 {
    for($i = 0; $i <= count($categorias); $i++) 
    {   
        if ($categorias[$i] == 'adolescente') 
            echo "o nadador " . $nome . " compete na categoria adolescente";
    }   
 } 
 else
 {
    for($i = 0; $i <= count($categorias); $i++) 
    {   
        if ($categorias[$i] == 'adulto') 
            echo "o nadador " . $nome . " compete na categoria adulto";
    }
 }