<?php
$link=mysqli_connect("localhost:3306","sakshi","123456789","EventMng");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result=mysqli_query($link, "select * from ViewVenue;");
$row=mysqli_fetch_array($result);

echo'<style type="text/css">
  button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
  }
  button:hover {
    opacity: 0.8;
  }
  </style>
  <head>

    <title>Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0-beta/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/homestyle.css" rel="stylesheet">
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
          <!--<div class="pull-right">
            <ul class="nav navbar-nav">
             <li class="nav-item">
                  <a class="nav-link" href="details.php">My Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>     
      </div> -->
    </nav>
    </header>
   <body>
   
   
       <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">You envision it. We create it.</h1>
          <p class="lead text-muted">For us, most important occasion is yours! Our event coordinators will work with you to make sure your celebration is perfect from start to finish. We look forward to individually planning your celebration and providing your quests with a truly exceptional experience. We offer assistance in planning everything from your decor, to music, to a variety of delicious cuisine.</p>
        </div>
      </section> </main>

   <section class="container">
   <h3 style="margin-left: 15px"> We offer a wide range of venues to choose from...</h3>
  

  <div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'.$row['event_type'].'<br><strong>Cost:</strong>' .$row['cost'] . '</p>
  </div>
</div>';

$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'].'<br><strong>Cost:</strong>' .$row['cost'] . '</p>
  </div>
</div>';

$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'].'<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';

$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'].'<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';

$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'].'<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>';
$row=mysqli_fetch_array($result);
echo'<div class="card" style="width: 20rem; margin-right:30px">
  <img class="card-img-top" src="img/ven1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">'.$row['venue_name'].'</h4>
    <p class="card-text"><strong>Max Guests:</strong>'.$row['max_guests'].'<br><strong>Suitable for:</strong>'. $row['event_type'] . '<br><strong>Cost:</strong>' . $row['cost'] . '</p>
  </div>
</div>
</section>
 </body>
 </html>';

 mysqli_free_result($result);

mysqli_close($link);
 ?>