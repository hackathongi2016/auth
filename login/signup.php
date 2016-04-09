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
    <!-- Latest compiled and minified CSS -->
    <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="screen"> 
    <link href="css/main.css" rel="stylesheet" media="screen">

    <script type="text/javascript" src="./bower_components/moment/min/moment.min.js"></script>
    <!-- <script type="text/javascript" src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="./bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="./bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  </head>

  <body>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <input name="name" id="name" type="text" class="form-control" placeholder="Name" autofocus>
        <input name="surname" id="surname" type="text" class="form-control" placeholder="Surname" autofocus>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
        <input name="birthday" id="birthday" type="text" class="form-control" placeholder="Birthday">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br\>
        <button name="login" id="login" class="btn btn-lg btn-secondary btn-block" onclick="window.location='login.php';return false;">Log in</button>

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
