<?php
require_once('includes/header.php');
require_once('controller.php');
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="corpo">
        <form action="" method="POST" class="formulario">
          <div style="margin:auto">
          <br>
          <br>
            <center><h1>Tela de Login</h1></center>
          </div>


          <select name="verificar" class=" ">
            
            <option value="usuario">Usuario</option>
            <option value="cliente">Cliente</option>
          
            
          </select>


          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="" id="exampleInputPassword1" placeholder="Senha">
          </div>

          <input type="submit" class="btn bg-dark text-light" name = "entrar" value="Entrar">


            <div>
        </form>
        <div class="row">
            <div class="col-12">
              <br>
              <a href="cdc.php">Insert Client</span></a>|<a href="delete.php">Delete Client</span></a>|<a href="delete.php">Update Client</span></a>
              
              
              
              <BR>
              
              <a href="cdu.php">Insert User</span></a>|<a href="deleteUser.php">Delete User</span></a>|
              |<a href="delete.php">Update Client</span></a>
            </div>
      </div>
    </div>
  </div>
</div>
<?php

?>