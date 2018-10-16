<?php


SESSION_START();
//database Connection
include "db.php";

if(isset($_POST['roll_no']) and isset($_POST['password'])){

    $roll_no = $_POST['roll_no'];

    $password = $_POST['password'];

    $query = "SELECT * FROM registration where roll_no='$roll_no' and password='$password'";


    $result = mysqli_query($db, $query);


    $count = mysqli_num_rows($result);

    if($count == 1){


        $_SESSION['roll_no']=$roll_no;

        header('location:welcome_student.php');

    }else

    {

        echo "Invalid Username or Password";

    }
}

?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hackthon</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  
  <link rel="icon" type="image/png" href="asset/image/brand.png">
  <link rel="stylesheet" href="hackthon1/style.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="./js/jquery2.0.3.min.js"></script>
</head>
<body>

<div class="navbar-fixed">
    <nav role="navigation" style="background:#253b80">
        <div class="nav-wrapper container">
            <img class="responsive-img" src="hackthon1/assets/image/brand.png" width="50px" style="margin-top:11px;margin-right:8px">
          <a id="logo-container" href="#" class="brand-logo">
            <i><b>DeVry University</b></i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="hackthon1/index.php">HOME</a></li>
            <li><a href="#">COURSES</a></li>
            <li><a href="#">NESW & EVENTS</a></li>
            <li><a href="#">ABOUT UNIVERSITY</a></li>
            <li><a href="#">CONTACT US</a></li>
            <li><a href="hackthon1/index.php">LOGIN</a></li>
          </ul>
    
          <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
    </div>
    

    <!-- Main Content-->

    <div >
    <ul id="tabs-swipe-demo" class="tabs" style="background:#ff6000;">
        <li class="tab col s3"><a href="#test-swipe-1" style="color:white">Student</a></li>
        <li class="tab col s3"><a class="active" href="#test-swipe-2" style="color:white">TPO</a></li>
        <li class="tab col s3"><a href="#test-swipe-3" style="color:white">Faculty</a></li>
      </ul>
			<!--swipe1-->
      <div id="test-swipe-1" class="col s12 " style="    background: url('hackthon1/assets/image/background.jpg')no-repeat 0px 0px;
    background-size: cover;
	min-height: 799px;">
      <div class="dashboard-page">
		    <div class="main-grid">
			    <div class="agile-grids">	
				<!-- validation -->
				    <div class="grids">
					    <div class="progressbar-heading grids-heading">
						    <h2>student login form</h2>
					    </div>
					    <form action="hackthon1/login.php" method="post">
					
					    	<div class="forms-grids">
						    <div class="forms3">
							    <div class="panel panel-widget agile-validation">
								    <div class="validation-grids validation-grids-right login-form">
									    <div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										    <div class="input-info">
											    <h3>Login form :</h3>
										    </div>
										    <div class="form-body form-body-info">
											    <form data-toggle="validator" action="#" method="post">
												<div class="form-group has-feedback">
													<input type="text" class="form-control" name="roll_no" placeholder="Enter Your Roll Number" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
												<button type="submit" class="1 btn1-primary" name="submit" >Login</button>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>

						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<p>© 2018 DeVry University . All Rights Reserved.</a></p>
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="hackthon1/js/validator.min.js"></script>
		<!--//validator js-->
</div>
      
      </div>
<!--swipe 2--->
      <div id="test-swipe-2" class="col s12" style="    background: url('hackthon1/assets/image/background.jpg')no-repeat 0px 0px;
    background-size: cover;
	min-height: 799px;">
	
      <div class="dashboard-page">
		    <div class="main-grid">
			    <div class="agile-grids">	
				<!-- validation -->
				    <div class="grids">
					    <div class="progressbar-heading grids-heading">
						    <h2>tpo login form</h2>
					    </div>
					
					    <div class="forms-grids">
						    <div class="forms3">
							    <div class="panel panel-widget agile-validation">
								    <div class="validation-grids validation-grids-right login-form">
									    <div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										    <div class="input-info">
											    <h3> TPO Login form :</h3>
										    </div>
										<form action="hackthon1/admin.php" method="post">
										    <div class="form-body form-body-info">
											    <form data-toggle="validator" action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="email" placeholder="Enter Email Address" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
														<a href="hackthon1/admin.php"><button class="1 btn1-primary" >Login</button></a>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
			</div>


			<!-- swipe3-->
      <div id="test-swipe-3" class="col s12" style="    background: url('hackthon1/assets/image/background.jpg')no-repeat 0px 0px;
    background-size: cover;
	min-height: 799px;">
	
      <div class="dashboard-page">
		    <div class="main-grid">
			    <div class="agile-grids">	
				<!-- validation -->
				    <div class="grids">
					    <div class="progressbar-heading grids-heading">
						    <h2>Faculty login form</h2>
					    </div>
					
					    <div class="forms-grids">
						    <div class="forms3">
							    <div class="panel panel-widget agile-validation">
								    <div class="validation-grids validation-grids-right login-form">
									    <div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										    <div class="input-info">
											    <h3>Login form :</h3>
										    </div>
										    <div class="form-body form-body-info">
											    <form data-toggle="validator" action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="Eamil" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="Password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
														<button type="submit" class="1 btn1-primary disabled">Login</button>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
			</div>


    <!--Footer-->
    <footer class="page-footer" style="background:#253b80">
        <div class="container">
          <div class="row">
      
        <div class="col s12 l3">
          <h5>Join Our University</h5>
          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
          
        </div>
    
        <div class="col s12 l3">
            <h5>Quick links</h5>
            <p>>About University</p>
            <p>>Admission Open</p>
            <p>>Our Library</p>
            <p>>Blog</p>
          </div>
    
          <div class="col s12 l3">
              <h5>Social Media</h5>
              <p>Facebook</p>
              <p>Twitter</p>
              <p>Instagram</p>
              
            </div>
    
            <div class="col s12 l3">
                <h5>Categories</h5>
                <p>News</p>
                <p>Our Professor</p>
                <p>Services</p>
                
              </div>
    
             
    
      </div>
      
    </div>
    
    <div class="footer-copyright z-1depth-4">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">Maintained by@ Ashish Group</a>
        </div>
      </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="hackthon1/js/valida.2.1.6.min.js"></script>

<script src="hackthon1/main.js"></script>
</body>
</html>