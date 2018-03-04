<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Feedback</title>
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
              <a class="nav-link" href="book.php">Book</a>
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
		        
		      <h1 class="title">Feedback</h1>
			    
			            
			    <label></label>
			     <input name="name" style="min-width:350px; max-height:30px" type="text" required="required" placeholder="Name*">
			     <label></label>
			     <input name="email" style="min-width:350px; max-height:30px" type="email" required="required" placeholder="Email*">
			     <label></label>
			     <input name="mob_no" style="min-width:350px; max-height:30px" type="text" required="required" placeholder="Mobile No*">
			     <label></label>
			    <input name="booking_id" style="min-width:350px; max-height:30px" type="number" required="required" placeholder="Booking id*">
			            
			    
			    <label></label>
			    <textarea name="feedback" cols="20" rows="5"  style="min-width: 650px" required="required" placeholder="Your feedback is valuable to us!"></textarea>
			    
			    		    
			    <div>
			    <button class="cancel" type="reset">Cancel</button>
			    <input id="submit" name="submit" type="submit" value="Submit">
			     </div>
			     </div>
		        
		    </form>

	    </section>
	    <?php
			include("Feedback.php");

		?>

</body>

</html>
