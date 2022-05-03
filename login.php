<?php
    require "sql.php";
    require "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

        <!-- Form Name -->
        <legend><center><h2><b>Login</b></h2></center></legend><br>

        <!-- Text input-->


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class=""></i></span>
            <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
              </div>
            </div>
          </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Password</label>
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class=""></i></span>
          <input name="password1" placeholder="Password" class="form-control"  type="password">
            </div>
        </div>
      </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4"><br>
            <button type="submit" class="btn-grad" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>
        </fieldset>
        </form>


        <p>
                <?php 
                    if (isset($_GET["message"]))
                    {
                        echo $_GET["message"];
                    }
                ?>
        </p>
        <table>
            <?php
                foreach(getUser() as $user)
                {
                    print_r($user);
                    echo "<p>" . $user["username"] . "</p>";
                }
            ?>
        </table>

    <script src="register.js"></script>
</body>
</html>