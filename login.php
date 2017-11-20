<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if(isset($_POST['ok'])){
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          echo $user.' | '.$pass;
        }
     ?>
    <div class="">
      <form class="" action="login.php" method="post">
        username : <input type="text" name="user" value=""><br>
        password : <input type="password" name="pass" value=""><br>
        <input type="submit" name="ok" value="login">
        <div class="">

        </div>
      </form>
    </div>
  </body>
</html>
