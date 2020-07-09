<?php

#validação login do usuario
include_once(__DIR__ . '/crud.php');

session_start();

if (isset($_POST['verificar'])):
    if ($_POST['verificar'] == 'usuario') :
        extract($_POST);
        $registros = usuario();
       
        foreach ($registros as $registro) :
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true):
                $_SESSION['usuario']= $_POST['email'];
                header('location:product.php');
            endif;
        endforeach;
    endif;


    #validação login cliente

    if ($_POST['verificar'] == "cliente") :
        
        $registros = cliente();
        extract($_POST);
       
        foreach ($registros as $registro):
            if ($registro['email'] == $email && password_verify($senha, $registro['senha']) == true):
                $_SESSION['clientes'] = $_POST['email'];
                header('location:groupProduct.php');
            endif;
        endforeach;
    endif;

endif;





#cadastros----------------------------------------|
#cadastra clientes
if (isset($_POST['comprador'])):
                 cadastroCliente($_POST);
                    header("location:cdc.php");
endif;

#cadastro Usuarios
if (isset($_POST['user'])):
                cadastroUsuario($_POST);
endif;

#cadastro produtos
if (isset($_POST['produto'])):
                 cadastroProduto($_POST);
endif;
#--------------------------------------------------|
#deletes--------------------------------------------------|
if (isset($_POST['delete'])) :

    $conn = include_once('conexao.php');
    extract($_POST);
    $sql = "DELETE FROM usuarios WHERE codigo = '$id'";
    $conn->query($sql);
endif;






    
if (isset($_POST['deletecliente'])) {

    $conn = include_once('conexao.php');
    extract($_POST);
    $sql = "DELETE FROM clientes WHERE codigo = '$id'";
    $conn->query($sql);
}

#--------------------------------------------------|












  





























?>


        <?php
      




        ?>



    </div>
</div>