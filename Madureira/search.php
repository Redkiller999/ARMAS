<?php

if(isset($_GET['busca'])){
    $busca = $_GET['especifico'];

    $sql ="SELECT marca,preco,imagem,dtaCadastro FROM produtos WHERE marca  LIKE '$busca%' ORDER BY dtaCadastro DESC ";

    $result = $conn->query($sql);
    while($dados = mysqli_fetch_array($result)){


     
    echo "  
  <div class = 'col-lg-4' style = 'margin-top:30px;'>
    <div class='card' style='width: 18rem;'>

<div class='card-body'>
<p class='card-text'>Marca: ". $dados['marca']."</p>
<p class='card-text'>Preço: R$". $dados['preco']."</p>
<p class='card-text'>Data de cadastro: ". $dados['dtaCadastro']."</p>
<a  href='' class='btn btn-info'>Comprar</a>
</div>
</div>
</div>";
       
      
    
     
     }





    }
    else{
      $sql = "SELECT * FROM produtos ORDER BY dtaCadastro DESC";
       $result = $conn->query($sql);
       while($dados = mysqli_fetch_array($result)){

   
        
       echo "  
     <div class = 'col-lg-4' style = 'margin-top:30px;'>
       <div class='card' style='width: 18rem;'>

<div class='card-body'>
<p class='card-text'>Marca: ". $dados['marca']."</p>
<p class='card-text'>Preço: R$ ". $dados['preco']."</p>
<p class='card-text'>Data: ". $dados['dtaCadastro']."</p>
<a  href='' class='btn btn-info'>Comprar</a>
</div>
</div>
</div>";
          
         
       
        
        }}
        ?>
      
