<?php
session_start(); 

$link=mysqli_connect("localhost:3306","sakshi","123456789","EventMng");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$event=$_SESSION['event_type'];
$result=mysqli_query($link, "select venue_name from ViewVenue where event_type='$event';");
$row=mysqli_fetch_array($result);

echo'<link href="bootstrap-4.0.0-beta/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="hfonts/Raleway" rel="stylesheet">
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
       <div>Number of guests:&nbsp&nbsp
          <input name="guests" type="number" max="9000" onKeyPress="if(this.value.length==4) return false;" required="required" style="width:100px;height:27px;background-color:#efefef;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;border:1px solid #dedede;padding:10px;margin-top:3px;font-size:0.9em;color:#3a3a3a;"></div> <br><br>   

        <fieldset>
            Decorations:<br>
              <input type="radio" name="decor" value="Arches"/>Arches<br><br>
              <input type="radio" name="decor" value="Centerpieces"/>Centerpieces<br><br>
              <input type="radio" name="decor" value="Flowers"/>Flowers<br><br>
              <input type="radio" name="decor" value="Names and Numbers"/>Names and Numbers<br><br>
              <input type="radio" name="decor" value="Fabric Drapings"/>Fabric Drapings<br><br>
              <input type="radio" name="decor" value="Rental Props"/>Rental Props<br><br>
              <input type="radio" name="decor" value="Sculptures"/>Sculptures<br><br>
        </fieldset><br>

        <fieldset>
            Equipments:<br>
              <input type="checkbox" name="equip[]" value="Music System">Music System<br><br>
              <input type="checkbox" name="equip[]" value="DJ">DJ<br><br>
              <input type="checkbox" name="equip[]" value="Air Conditioner">Air Conditioner<br><br>
              <input type="checkbox" name="equip[]" value="Stage">Stage<br><br>
              <input type="checkbox" name="equip[]" value="Lighting">Lighting<br><br>
              <input type="checkbox" name="equip[]" value="Projector">Projector<br><br>
        </fieldset><br>
   
        <fieldset>
          Food:<br>
              <input type="radio" name="food" value="Indian">Indian<br><br>
              <input type="radio" name="food" value="Continental">Continental<br><br>
              <input type="radio" name="food" value="Oriental">Oriental<br><br>
              <input type="radio" name="food" value="Mexican">Mexican<br><br>
        </fieldset><br>

      <div style="overflow:auto;">
      <div style="float:right;">
        <input type="submit" name="submit" id="submit" value="Submit" style="background-color: #4CAF50; margin-right:60px; color: #ffffff; border: none; padding: 10px 20px; font-size: 17px; font-family: Raleway; cursor: pointer;"/>
      </div>
      </div>
    </div>
    </form>
  </body>
</html>';




if(isset($_POST['submit'])){
   if(isset($_POST)){
         $_SESSION['guests'] = $_POST['guests'];
         $_SESSION['decor'] = $_POST['decor'];
         $_SESSION['equip'] = $_POST['equip'];
         $_SESSION['food'] = $_POST['food'];
         $_SESSION['equip']= $_POST['equip'];
         $f=1;
         /* echo " ".$_SESSION['equip'][0];
          echo $_SESSION['equip'][1];
          echo $_SESSION['equip'][2];
         if ( isset($_SESSION['equip']) && count($_SESSION['equip']) > 0 ) {
            $equip($i)=;
          } */
           $checked_count = count($_POST['equip']);
           $_SESSION['equip_no']=$checked_count;
        /*  echo "You have selected following ".$checked_count." option(s): <br/>";
         foreach($_POST['equip'] as $selected) {
            echo "<p>".$selected ."</p><br>";
          } */
          $date=$_SESSION['date'];
          foreach($_POST['equip'] as $selected) {
              $resu=mysqli_query($link, "select e_id from Equipments where equip='$selected';");
              $ro=mysqli_fetch_array($resu);
              $id=$ro['e_id'];
              $result=mysqli_query($link, "select qty from Equip_inventory where booking_date ='$date' and e_id='$id';");
              $row=mysqli_fetch_array($result);

              $res=mysqli_query($link, "select total from Equipments where e_id='$id';");
              $r=mysqli_fetch_array($res);
              
              if($row['qty']==$r['total']){ 
                echo'<p style="color:red">Equipment: '.$selected.' not available on the given date, please pick another equipment or date.</p>';
                  $f=0;
              }
            }

        if($f!=0)
            $f=1;

          if($f==1){
          echo "
                    <script type=\"text/javascript\">
                    location.href = 'http://localhost/Project/displaydet.php';
                    </script>
                "; 
        }
    }
}
?> 