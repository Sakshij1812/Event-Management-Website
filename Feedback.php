<?php
                                        //$name="";
                                        //$pass="";

                                        $submit = $_POST;
                                        if(isset($_POST['name'])){
                                                $name = $_POST['name'];
                                        }
                                        if(isset($_POST['email'])){
                                                $pass = $_POST['email'];
                                        }
                                        if(isset($_POST['mob_no'])){
                                                $nam = $_POST['mob_no'];
                                        }
                                        if(isset($_POST['booking_id'])){
                                                $email = $_POST['booking_id'];
                                        }
                                        if(isset($_POST['feedback'])){
                                                $rpass = $_POST['feedback'];
                                        }

                                        if($submit){

						$link = mysqli_connect("localhost:3306","sakshi","123456789","EventMng");
						
                                        if(mysqli_query($link,"insert into Feedback values('".$name."','".$pass."','".$nam."','".$email."','".$rpass."')")){
                                                echo "<script type=\"text/javascript\">
                                                        location.href = 'http://localhost/Project/feedbackrec.php';
                                                        </script>";

                                        }
                                        else{
                                                echo "Please enter a valid booking id";
                                        }

                                        $name="";
                                        $pass="";
					$nam="";


					mysqli_close($link);
					}

                                ?>

