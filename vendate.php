<?php
session_start(); 

$link=mysqli_connect("localhost:3306","sakshi","123456789","EventMng");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$event=$_SESSION['event_type'];
if($event!='Others'){
    $result=mysqli_query($link, "select venue_name from ViewVenue where event_type='$event';");
    //$row=mysqli_fetch_array($result);
}else{
    $result=mysqli_query($link, "select venue_name from ViewVenue;");
    //$row=mysqli_fetch_array($result);
}

echo'<link href="bootstrap-4.0.0-beta/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/Raleway" rel="stylesheet">
  <link href="css/homestyle.css" rel="stylesheet">

  <style type="text/css">
    
label 
{
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}


  </style>

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

  <style>
  * {
    box-sizing: border-box;
  } 
  body {
    background-color: #f1f1f1;
  } 

  #reg {
    background-color: #ffffff; 
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 50%;
    min-width: 300px;
  }

  h1 {
    text-align: center;  
  }
   input {
    padding: 10px;
    width: 57%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
  } 

  input{
    background-color:#efefef;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #dedede;padding:10px;margin-top:3px;font-size:0.9em;color:#3a3a3a;
  }

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
  <body>  
  <div id="reg">

      <h1>Event chosen: ';
      echo $_SESSION['event_type']; 
      echo '</h1><br><br>
      <form method="post">
      <div>Venue:
  <select name="venues" style="padding-left: 20px; margin-left: 95px">';

  while($row = mysqli_fetch_assoc($result)) {
       
     echo'<option value="'.$row['venue_name'].'">'.$row['venue_name'].'</option>';
   }

  /*$row=mysqli_fetch_array($result);
  echo'<option value="'.$row['venue_name'].'">'.$row['venue_name'].'</option>';

    $row=mysqli_fetch_array($result);
  echo'<option value="'.$row['venue_name'].'">'.$row['venue_name'].'</option>';

    $row=mysqli_fetch_array($result);
  echo'<option value="'.$row['venue_name'].'">'.$row['venue_name'].'</option>';

    $row=mysqli_fetch_array($result);
  echo'<option value="'.$row['venue_name'].'">'.$row['venue_name'].'</option> */

echo'</select> 
</div><br><br>

    <form method="post">
      <div>
        Event Date:&nbsp&nbsp
        <input style="max-width:200px; max-height:30px" name="date" type="date" value="">&nbsp&nbsp
        <input type="submit" style="max-width:200px; max-height:50px" name="check" value="Check Availability"/>
      </div>
    </form>';

  if(isset($_POST['check'])){
   if(isset($_POST)){
      $_SESSION['venue'] = $_POST['venues'];
      $venue=$_POST['venues'];
      $date=$_POST['date'];
      $result=mysqli_query($link, "select * from Book_an_event where booking_date ='$date' and venue_name='$venue';");
      $row=mysqli_fetch_array($result);
      if(empty($row['booking_date'])){
           echo'<p style="color:green">';echo 'Date available!!'; $flag=1; echo'</p>';
        if(isset($_POST['date']))
         $_SESSION['date'] = $_POST['date'];
       }
      else{
        echo'<p style="color:red">';echo 'Date not availabe, please pick another date.'; $flag=0; echo'</p>';
      }
    }
  }

     
    echo'</div>
    </form>
  </body>
</html>';


if($flag==1){
  echo "
            <script type=\"text/javascript\">
            location.href = 'http://localhost/Project/facilities.php';
            </script>
        "; 
}
?> 