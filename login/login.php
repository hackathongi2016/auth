<?php
/*
  session_start();

  if(isset($_SESSION['username'])){
    header("location:../index.php");
  }
  */
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Trabel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <div width="100%" class="center">
          <img src="https://raw.githubusercontent.com/hackathongi2016/docs/master/dissenys/Travel_Blanc.png" width="200px" />
          <h2 class="form-signin-heading center">Accedir</h2>
        </div>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Usuari" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Contrassenya">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block background-primary-color" type="submit">Accedir</button>
        <br>
        <button name="login" id="login" class="btn btn-lg btn-secondary btn-block" onclick="window.location='signup.php';return false;">Registrar-me</button>
        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
