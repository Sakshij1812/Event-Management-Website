<?php
session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>

    <title>Book an event</title>

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
    </nav>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"> Which occasion do you want to celebrate today?</h1>
        </div>
      </section>

      <div class="album text-muted">
        <div class="container">
        <form method="post">
          <div class="row">
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Baby Shower</strong><br>If you or someone close to you is expecting and you're looking to plan a spectacular baby shower, look no further! TixiGo is here to help.</p>
               <input type="submit" value="Book Now!" name="babyshower" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Wedding</strong><br>Wedding day is believed to be one of the most important days of your life. We will make sure that it leaves an everlasting impression on everyone's mind.</p>
               <input type="submit" value="Book Now!" name="wedding" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Birthday</strong><br>Looking for a memorable way to celebrate the birthday of a close family member or a friend? TixiGo is the perfect way to celebrate your loved one with class and style.</p>
               <input type="submit" value="Book Now!" name="birthday" class="btn btn-primary"/>
            </div>

            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Concert</strong><br>There are few things better than a concert or live event shared with hundreds of other fans. Performing in front of hundreds of people is fun, but it can also be nerve-racking. Our team will ease your planning burden and help you enjoy yourself.</p>
               <input type="submit" value="Book Now!" name="concert" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Corporate Meetings</strong><br>Corporate Meetings, Parties and Events are of immense importance to establish new relations and brief up the existing ones. We take it upon ourselves to make the event a huge success. Our aim is to provide the best possible organized  service to meet your requirements.</p>
               <input type="submit" value="Book Now!" name="corporate" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Theme Party</strong><br>Our expertise in organizing any type of theme based party has earned us a lot of praises. Turning your dream event into reality is our main aim and for that purpose we coordinate with the most trustworthy vendors who can stand up to your expectations.</p>
               <input type="submit" value="Book Now!" name="themeparty" class="btn btn-primary"/>
            </div>
             <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Retirement</strong><br>Retirement is one of the biggest milestones in life. A retirement party is the perfect reflection to gather and celebrate the retiree's accomplishments, past and future with close family, friends and colleagues. Let us help hem recall happy memories.</p>
               <input type="submit" value="Book Now!" name="retirement" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Graduation</strong><br>A graduation party is a day that celebrates a pivotal moment in your life. It is time to party and celebrate your achievements. Our on-site team will ease your planning burden and help you enjoy yourself, leaving you to focus on taking in the moment of this monumental occasion.</p>
               <input type="submit" value="Book Now!" name="graduation" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Anniversary</strong><br>Planning and executing a wedding anniversary can feel challenging and difficult! But, if you’re planning a special day in advance, you can have a fantastic wedding celebration with TixiGo. Enjoy this precious moment witth your friends and family and leave the rest to us.</p>
               <input type="submit" value="Book Now!" name="anniversary" class="btn btn-primary"/>
            </div>
            <div class="card">
              <img src="img/event10.jpg" alt="Card image cap">
              <p class="card-text"><strong>Other</strong><br>No matter how big or small, a holiday or an occasion, you can make it yours and TixiGo shows you how.</p>
               <input type="submit" value="Book Now!" name="others"  id="submit" class="btn btn-primary"/>
            </div>
          </div>
        </form>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="book.php">Back to top</a></p>
      </div>
    </footer>
    
    <?php 
     if($_POST){
        if(isset($_POST['babyshower'])){
          $_SESSION['event_type'] = 'Baby Shower';
        }elseif(isset($_POST['wedding'])){
          $_SESSION['event_type'] = 'Wedding';
        }elseif(isset($_POST['concert'])){
          $_SESSION['event_type'] = 'Concert';
        }elseif(isset($_POST['birthday'])){
          $_SESSION['event_type'] = 'Birthday';
        }elseif(isset($_POST['corporate'])){
          $_SESSION['event_type'] = 'Corporate Meetings';
        }elseif(isset($_POST['themeparty'])){
          $_SESSION['event_type'] = 'Theme Party';
        }elseif(isset($_POST['retirement'])){
          $_SESSION['event_type'] = 'Retirement';
        }elseif(isset($_POST['graduation'])){
          $_SESSION['event_type'] = 'Graduation';
        }elseif(isset($_POST['anniversary'])){
          $_SESSION['event_type'] = 'Anniversary';
        }elseif(isset($_POST['others'])){
          $_SESSION['event_type'] ='Others';
        }

        echo "
            <script type=\"text/javascript\">
            location.href = 'http://localhost/Project/vendate.php';
            </script>
        "; 
        
    }
     //echo $_SESSION['event_type'];
     // ob_start();
     //header("Location: http://localhost/Project/facilities.php");
   //  ob_end_flush();
   //  exit(0); 
  ?>
 <!-- <script type="text/javascript">location.href = 'http://localhost/Project/facilities.php';</script> -->

  </body>
</html>
