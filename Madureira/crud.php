<?php
#Login do usuario{
function usuario()
{

    $conn = include_once('conexao.php');
    $sql = 'SELECT * FROM usuarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
#}

#login do cliente{
function cliente()
{

    $conn = include_once('conexao.php');
    $sql = 'SELECT * FROM clientes';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
#}



#cadastro do cliente{
function cadastroCliente($dados)
{
    $conn = include_once('conexao.php');

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])):


      extract($dados);
        $senhasegura = password_hash($senha, PASSWORD_DEFAULT);
      


        $sql = "INSERT INTO clientes (nome,senha,email) VALUES('$nome','$senhasegura','$email')";
        $conn->query($sql);
    endif;
}

#}


#cadastro do usuario{
function cadastroUsuario($dados)
{
    require_once('conexao.php');
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])):


       extract($dados);
        $senhasegura = password_hash($senha, PASSWORD_DEFAULT);
        
  

    $sql = "INSERT INTO usuarios (nome,senha,email) VALUES('$nome','$senhasegura','$email')";
    return $conn->query($sql);
endif;
}
#}






function publicar(){
    $conn = require_once('conexao.php');

    $comentario = $_GET['comentario'];
$sql = "INSERT INTO comentarios (comentarios) VALUES('$comentario')";
 $conn->query($sql);
 return header('location:vendas.php');

}



function cadastroProduto($dados)
{
    $conn = include_once('conexao.php');

    if (isset($_POST['descricao']) && isset($_POST['valor'])) {
        extract($dados);
     
        $sql = "INSERT INTO produtos (marca,preco,dtaCadastro) VALUES('$descricao','$valor','$data')";
        $conn->query($sql);
    }
}

