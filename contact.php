<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
   
    include("connection/connect.php");
    error_reporting(0);
    session_start();
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $phonenumber = $_POST['phonenumber'];
      $email = $_POST['email'];
      $description1 = $_POST['email'];
    }
    
	 
	$sql = "INSERT INTO contact(username,phonenumber,email,description1) VALUES('".$_POST['username']."','".$_POST['phonenumber']."','".$_POST['email']."','".$_POST['description1']."')";
	mysqli_query($db, $sql);
	
		 header("refresh:0.1;url=index.php");
}        
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Contact</title>
    <link rel="shortcut icon" href="images\logo.png" >
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
<div style=" background-image: url('images/img/homebg.png');">
         <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="index.php"> <b style="color:#FFB200 ;">THE FOOD</b> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
							<li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="contact.php">Contact <span class="sr-only"></span></a> </li> 
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                  </div>
               </div>
            </nav>
         </header>
         <div class="page-wrapper">
            
               <div class="container">
                  <ul>
                    
                    
                  </ul>
               </div>
            
            <section class="contact-page inner-page">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12">
                        <div class="widget" >
                           <div class="widget-body">
                            
							  <form action=""class="p-3 " method="post">
                                 <div class="row">
								  <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">USER NAME</label>
                                       <input class="form-control" type="text" name="username" id="example-text-input"> 
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">PHONE NUMBER</label>
                                       <input class="form-control" type="number" name="lastname" > 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                                       <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">DESCRIPTION</label>
                                       <input class="form-control" type="text" name="phone" id="example-tel-input-3"> 
                                    </div>
                                    
                                    
									
                                   
                                 </div>
                                
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="SUBMIT" name="submit" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>
                  
						   </div>
           
                        </div>
                     
                     </div>
                    
                  </div>
               </div>
            </section>
            
      
            <footer class="footer">
               <div class="container">
           
                  <div class="row bottom-footer">
                     <div class="container">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
                              <li>
                                    <a href="#"> <img src="images/img/pay1.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/img/pay2.png" alt="Mastercard"> </a>
                                </li>
                              </ul>
                           </div>
                           <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>186/4 FARMGATE DHAKA BANGLADESH</p>
                                    <h5>Phone: 01883901491</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                   <p>Join with us and enjoy many of the features</p>
                                   <h5>DEVELOPED BY</h5>
                                   <p>MD:HABIBUN NABI</p>
                                   <p>MD:TASNIM MUNOWAR RAFEE</p>
                                </div>
                        </div>
                     </div>
                  </div>
      
               </div>
            </footer>
         
         </div>
       
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>