<?php
session_start();
$link=mysqli_connect("localhost:3306","sakshi","123456789","EventMng");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result=mysqli_query($link, "select max(booking_id) from Book_an_event;");
$row=mysqli_fetch_array($result);
$book_id=$row['max(booking_id)']+1;
if(isset($_POST))
   $_SESSION['bookid'] = $book_id;

 //total=food*guests+equip+venue+decor
 $food=$_SESSION['food'];
 $guests=$_SESSION['guests'];
 //$equip= implode(", ", $_SESSION['equip']);
 $equip=$_SESSION['equip'];
 $venue=$_SESSION['venue'];
 $decor=$_SESSION['decor'];
 $result=mysqli_query($link, "select cost from Foodtype where type='$food';");
 $row=mysqli_fetch_array($result);
 $results=mysqli_query($link, "select cost from Decorations where decor='$decor';");
 $ro=mysqli_fetch_array($results);
 $resul=mysqli_query($link, "select cost from ViewVenue where venue_name='$venue';");
 $rows=mysqli_fetch_array($resul);
 $total=$row['cost']*$guests+$ro['cost']+$rows['cost'];

 foreach($equip as $selected) {
    $res=mysqli_query($link, "select cost from Equipments where equip='$selected';");
    $r=mysqli_fetch_array($res);
    $total=$total+$r['cost'];
}

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
<title>Confirmation</title>
    
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
			            <h1 class="jumbotron-heading">Selected Items~</h1><br>
			            <p class="lead text-muted">Booking ID: <?php echo $_SESSION['bookid']; ?> </p><br>
			            <p class="lead text-muted">Venue: <?php echo "$venue, ";echo $rows['cost']; ?> </p><br>
			            <p class="lead text-muted">Date of the Event: <?php echo $_SESSION['date']; ?> </p><br>
			            <p class="lead text-muted">Event: <?php echo $_SESSION['event_type']; ?></p><br>
						<p class="lead text-muted">Decoration: <?php echo "$decor, ";echo $ro['cost']; ?></p><br>
						<p class="lead text-muted">Equipment(s):<br> 
                            <?php 
                                foreach($equip as $selected) {
                                    $query=mysqli_query($link, "select cost from Equipments where equip='$selected';");
                                    $r=mysqli_fetch_array($query);
                                    echo $selected.", ".$r['cost']."<br>";
                                }
                            ?></p><br>
						<p class="lead text-muted">Food (per plate): <?php echo "$food, "; echo $row['cost']?></p><br>
						<p class="lead text-muted">Guests: <?php echo "$guests";?></p>
						<p class="lead text-muted">----------------------------------------</p>
						<p class="lead text-muted">Approximate Cost:<?php echo " Rs.$total";?></p><br><br>
		          	</div>
		          	<div style="float:right">
			          	<input class="button" name="cancel" type="submit" value="Cancel" >
			            <input class="button" name="submit"  id="submit" type="submit" value="Confirm">
			        </div>
			     </section>
          	</div>
          	</form>




          </body>
</html>
<?php

      if(isset($_POST['submit'])){
          $_SESSION['total'] = $total ;

      echo "
            <script type=\"text/javascript\">
            location.href = 'http://localhost/Project/login.php';
            </script>
        ";
      } else if(isset($_POST['cancel'])){

      echo "
            <script type=\"text/javascript\">
            location.href = 'http://localhost/Project/index.html';
            </script>
        ";
      } 


?>