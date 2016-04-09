<?php
  session_start();

  if(isset($_SESSION['username'])){
	session_start();
	session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="screen"> 
    <script type="text/javascript" src="./bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="./bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="./bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <link href="css/main.css" rel="stylesheet" media="screen">

  </head>

  <body>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <div width="100%" class="center">
          <img src="https://raw.githubusercontent.com/hackathongi2016/docs/master/dissenys/Trabel.png" width="200px" />
          <h2 class="form-signin-heading center">Registrar-me</h2>
        </div><input name="name" id="name" type="text" class="form-control" placeholder="Nom" autofocus>
        <input name="surname" id="surname" type="text" class="form-control" placeholder="Cognom" autofocus>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Usuari" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="E-mail">
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Contrassenya">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repetir contrassenya">
        <input name="birthday" id="birthday" type="text" class="form-control" placeholder="Data de naixement">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block background-primary-color" type="submit">Registrar-me</button>
        <br\>
        <button name="login" id="login" class="btn btn-lg btn-secondary btn-block" onclick="window.location='login.php';return false;">Ja tinc usuari</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

  
    <script type="text/javascript">
            $(function () {
                $('#birthday').datepicker();
            });
        </script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
