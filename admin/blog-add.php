<?php 
session_start();

if(!isset($_SESSION['username'])){
	header('Location: ../login.php');
}
?>

<html>
    <head>   
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/blog-add.css">
    </head>
    <body >
        <div class="container" >
            <div class="col-sm-4">
                <nav class="navbar ">
                    <div class="container">
                        <div class="navbar-header">
                            <h1> JobSeeKer</h1>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <p>   <a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a></
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-default" style="background-color: white" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="home"><a href="../index.php">Home</a></li>
                            <li class="profile" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                                </ul>
                            </li>
                            <li class="about"><a href="about.php">About</a></li>
                            <li class="contact"><a href="#">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="login"> <a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                            <li class="sign"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
           
            <div class="main" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <p><b> TO add new account</b>  </p> 
                    </div>
                    <div class="panel-body">
                <div class="col-sm-4"></div>
                 <div class="col-sm-4">
                  <b>Title</b><br> <input type="text" name="title" required><br>
        <b>Short description</b> <br><textarea name="short_desc" required></textarea><br>
          <b>Long description</b> <br>  <textarea name="short_desc" required></textarea><br>
          <b>Featured Image</b><br>
          <input type="file" name="featured_image">
    <button type="submit">Save Data</button><br>
                </div>
                <div class="col-sm-4"></div>
                </div>
                 </div>
            </div>
    <div class="col-sm-4"></div
            </div>
        </div>
         <footer>
            (&copy; 2016 -EduCash)
            All Rights Reserved
            <div class="pull-right">
                Find Us on: 
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-official fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                </ul>
            </div>
        </footer>

    </body>
</html>

