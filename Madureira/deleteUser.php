<?PHP 
require_once('controller.php'); ?>
<div class = "container">
<div style="margin: 10vh auto">
            <table border="1" style="width: 100%;" class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col"> NOME</th>
                  <th scope="col">E-MAIL</th>
                 
                  
                </tr>
              </thead>
              <tbody>

<?php
include_once('conexao.php');

$sql = "SELECT * FROM usuarios";
             $result = $conn->query($sql);
             while($dados = mysqli_fetch_array($result)){
     
         
              
             echo "  


             <tr>
             <td>{$dados['codigo']}</td>
             <td>{$dados['nome']}</td>
             <td>{$dados['email']}</td>
           
             
         </tr>";
                
               
             
              
              }
        
       
                  
                  ?>

</tbody>
            </table>
          </div>


      
<form action = "" method = "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Code User:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "id">
    
  </div>
  
  
  <button type="submit" class="btn btn-danger" name = "delete">Excluir</button>
  <a  href="index.php" class="btn btn-primary">Sair</a>
</form>
          </div>