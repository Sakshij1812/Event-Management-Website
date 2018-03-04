<?php
session_start();
$link=mysqli_connect("localhost:3306","abcd","123456789","EventMng");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Details</title>
<link href="bootstrap-4.0.0-beta/dist/css/bootstrap.min.css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="css/feedbackstyle.css">

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
              <a class="nav-link" href="book.php" ac>Book</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
          </ul>
          </div>
    </nav>
  </header>

      <section class="body">
      
        <form method="post" enctype="multipart/form-data">
        <div class="container" style="margin-top:40px">
            
          <h1 class="title">UserDetails</h1>
          
                  
          <label></label>
           <input name="name" type="text" required="required" placeholder="Name*">
           <label></label>
           <input name="email" type="email" required="required" placeholder="Email*">
           <label></label>
           <input name="mob_no" type="number" required="required" placeholder="Mobile No*"> <br>
           <label name="booking_id"> <strong>Booking ID:</strong> <?php echo $_SESSION['bookid']; ?></label>
                  
          
          
          
                  
          <input class="cancel" type="reset" name="cancel" value="Cancel">
                  
           <input id="submit" name="submit" type="submit" value="Submit">
           </div>
            
        </form>

      </section>
      <?php
      //include("Login2.php");

   //   if(isset($_POST['name'])){
  //$name = $_POST['name'];
//}
//if(isset($_POST['email'])){
  //$pass = $_POST['email'];
//}
//if(isset($_POST['mob_no'])){
  //$email = $_POST['mob_no'];
//}
if(isset($_POST['name'])){
  $name = $_POST['name'];
}
if(isset($_POST['email'])){
  $pass = $_POST['email'];
}
if(isset($_POST['mob_no'])){
  $email = $_POST['mob_no'];
}  


$book_id=$_SESSION['bookid'];
$event=$_SESSION['event_type'];
$venue=$_SESSION['venue'];
$date=$_SESSION['date'];
$decor=$_SESSION['decor'];
//$equip=$_SESSION['equip'];
$equip = implode(',',$_SESSION['equip']);
$count=$_SESSION['equip_no'];
$food=$_SESSION['food'];
$guests=$_SESSION['guests'];
$total=$_SESSION['total'];

//echo $equip;
  


    if(isset($_POST['submit']))
     {

        if(mysqli_query($link,"insert into UserDetails values('".$name."','".$pass."','".$email."','".$book_id."')"))
        {

                         
                        if(mysqli_query($link,"CALL Book_Insert('$equip',$count,'$food',$book_id, $guests,'$date',$total,'$event','$venue','$decor')"))
                                echo "
                                      <script type=\"text/javascript\">
                                      location.href = 'http://localhost/Project/thankyou.php';
                                      </script>
                                  ";

                         else
                         {
                                echo "Error".mysqli_error($link); 
                         }
                     // }
        }
        else{
            echo "Error".mysqli_error($link); 
        }
    $name="";
    $pass="";
    $email="";
    $rpass="";
    //$nam="";
    mysqli_close($link);

  }
              /*if(mysqli_query($link,"insert into Book_an_event values('".$food."','".$book_id."','".$guests."','".$date."',".$total.",'".$event."','".$venue."','".$decor."')"))
                  { */


                      //foreach($equip as $selected) {
                        //if(mysqli_query($link,"insert into Equip_select (equipment) values('".$selected."');"))

                       /* $i=0;

                      foreach($equip as $selected){
                          $result=mysqli_query($link, "Select e_id from Equipments where equip='$selected';");
                          $row=mysqli_fetch_array($result);
                          
                      } */ 

    ?>

</body>

</html>           