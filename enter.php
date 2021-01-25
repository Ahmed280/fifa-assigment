<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Fifa</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<style>
body {
    
  }
  .login-form {
    width: 350px;
    margin: 200px;
    font-size: 15px;
    margin-left: 140px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>

</head>
<body>

  <div class="wrapper row1">
    <nav id="mainav" class="hoc clear"> 
      <ul class="clear">
        <li class="active"><a href="index.php">Enter</a></li>

        <li class="active"><a href="register.php">Register</a></li>

        <li class="active"><a href="ranking.php">Ranking</a></li>

        <li class="active"><a href="support.php">Help</a></li>
      </ul>  
    </nav>
  </div>

  <div class="">
    <div class="row">


      <div class="col-md-6">
    <img src="images/demo/img15.jpg">
    </div>

                    <?php
include 'Dbcon.php';

session_start();

    if(isset($_POST['btnLogin']))
    {
        $Email = $_POST['txtEmail'];
        $Password = $_POST['txtPassword'];
        $select = $connect->query("select * from registeration");
        while ($row = mysqli_fetch_assoc($select)) 
        {
            if($Email == $row['username'] && $Password == $row['password'])
        {
            // $_SESSION['registeration'] = $row['Email'];
            // $_SESSION['userprofile'] = $name;
            header('Location: index.php');
        }   

        }   
        echo '<script>alert("Invalid Id or Passowrd");</script>';
    }
        ?>
 

      <div class="login-form">
    <form method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="txtEmail" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="txtPassword" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="btnLogin">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <!-- <p class="text-center"><a href="#">Create an Account</a></p> -->
    </div>
    </div>


    </div>
  </div>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
