
   <?php
   require_once('includes/header.php');
   require_once('conexao.php');
   session_start();

   if(!isset($_SESSION['clientes'])){
    header('location:index.php');

   }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src = "img/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
   

        <li class="nav-item active">
        <a class="nav-link" href="destruir.php">Logoff <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"action ="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui" aria-label="Search"name = "especifico">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"name = "busca">Pesquisar</button>
    </form>
  </div>
</nav>



        <div class = "container">
        <div class = "row"style = "margin-top:40px">
        <?php require_once('search.php') ?>

        </div>
        </div>


 <div class = "container" style = "margin-top:30px;">
        

<form action="controller.php" method="get" style = "margin:auto">

<div class="form-group">
    <label for="exampleFormControlTextarea1">Area de comentarios:</label>
    
  </div>
<textarea type="text"  class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario" rows="4" cols="100" >
 
</textarea>
  <br><br>
  <input type="submit" name = "publicar" value="publicar">
</form></div>

<div class = "container">
        
         
<ul class="list-unstyled">
         <?php

          $sql ="SELECT * FROM comentarios";

          $result = $conn->query($sql);
          while($dados = mysqli_fetch_array($result)){
  
     
           
          echo "  
          <br>
        
          <li class='media'>
            <img class='mr-3' src='...' alt='Autor'>
            <div class='media-body'>
              <h5 class='mt-0 mb-1'>Nome do autor</h5>
              ".$dados['comentarios']."
            </div>
          </li>";


             
          
          
           
           }

        

                  ?>
                  
        
        </div> 

<?php
   require_once('includes/footer.php');
   ?>