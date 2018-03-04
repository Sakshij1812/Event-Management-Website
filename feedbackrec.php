<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<link href="bootstrap-4.0.0-beta/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/Raleway" rel="stylesheet">
<style>
	  * {
    box-sizing: border-box;
  } 
  body {
    background-color: #f1f1f1;
    min-height: 75rem; 
}

.navbar {
  margin-bottom: 0;
}

.jumbotron {
  padding-top: 6rem;
  padding-bottom: 6rem;
  margin-bottom: 0;
  background-color: #fff;
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

.album {
  min-height: 50rem;
  padding-top: 3rem;
  padding-bottom: 3rem;
  background-color:#f2f2f2;
}

 #reg {
    background-color: #ffffff; 
    margin: 100px auto;
    font-family: Raleway;
   /* padding: 40px; */
    width: 50%; 
    min-width: 300px;
  } 
    .button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }
  .button:hover {
    opacity: 0.8;
  }

</style>
<head>
<title>Booked</title>
    
  </head>

  <body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand"><span style="color:white">Tixi<span style="color:#be9e21">Go</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
                       <a class="nav-link" href="index.html">Home <span class="sr-only"></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="homepage.php">Venues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book.php">Book</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
          </ul>
          </div>
          </header>
            <form method="post">
          	<div id="reg">
	          	<section class="jumbotron text-center">
		            <div class="container">
			            <h1 class="jumbotron-heading">Thank You for your feedback!</h1><br>
		          	</div><br>
		          	<div style="float:right">
			            <input class="button" name="submit" type="submit" value="Back to homepage">
			        </div>
			     </section>
          	</div>
            </form>


 <?php

      if(isset($_POST["submit"])){

      echo "
            <script type=\"text/javascript\">
            location.href = 'http://localhost/Project/index.html';
            </script>
        ";
      }

    ?>

          </body>
</html>