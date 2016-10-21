<?php
session_start() ?>

<html>
    <head>   
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body >
        <div class="container">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
        <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
     <h1 > JobSeeKer</h1>
    </div>
      </div>
        </nav>
            </div>
        </div>
            <div class="container">
            <div class="col-sm-4">
                 
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                <div class="panel-body">
    <form action="act-login.php" method="post">
        <?php 
            if(isset($_SESSION['flash_msg'])){
            echo "<div class='alert alert-danger'>{$_SESSION['flash_msg']}</div>";
            unset($_SESSION['flash_msg']);
            } 
        ?>
    
        <label for="email">username</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="username">
 
        <label for="password">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    
    
        <a href="#">forgot password?</a><br>
    
        <a href="job.php"><button type="submit" class="btn btn-primary">Login</button></a></br>
       <ul>
						<li><a href="#"><i class="btn btn-primary fa fa-facebook-official fa-lg"></i></a></li>
						<li><a href="#"><i class="btn btn-danger fa fa-google-plus fa-lg"></i></a></li>
						<li><a href="#"><i class="btn btn-warning fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#"><i class="btn btn-info fa fa-pinterest fa-lg"></i></a></li>
					</ul>
</form>
                    
                    
            </div>
                    <h6>  Don't have any account yet.<a href="#">Sign it for free?</a></h6>
                </div>
            </div>
        </div>
</body>
</html>