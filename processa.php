<?php

session_start(); 

ob_start();


include_once "conexao.php";


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if(!empty($dados['CadUsuario'])){
    $query_usuario = "INSERT INTO usuarios 
                (nome, email, date, tel) VALUES
                (:nome, :email, :date, :tel)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':date', $dados['date'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':tel', $dados['tel'], PDO::PARAM_STR);

    $cad_usuario->execute();
  
    $id_usuario = $conn->lastInsertId();

    $query_endereco= "INSERT INTO enderecos 
                (cep, logradouro, numero, usuario_id) VALUES 
                (:cep, :logradouro, :numero, :usuario_id)";
    $cad_endereco = $conn->prepare($query_endereco);
    $cad_endereco->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
    $cad_endereco->bindParam(':logradouro', $dados['logradouro'], PDO::PARAM_STR);
    $cad_endereco->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
    $cad_endereco->bindParam(':usuario_id', $id_usuario, PDO::PARAM_INT);
    $cad_endereco->execute();

    
    $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";

 
    header("Location: index.php");
}else{

    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";


    header("Location: index.php");
}