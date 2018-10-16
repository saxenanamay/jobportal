
<?php
//session_start();

include "db.php";

if(isset($_POST['submit'])){


    $name =$_POST['name'];
    $email= $_POST['email'];
    $roll_no=$_POST['roll_no'];
    $mobile_no=$_POST['mobile_no'];
    $branch= $_POST['branch'];
    $pass= $_POST['password'];

    $backs=$_POST['backs'];
    $first_sem=$_POST['sem1'];
    $second_sem= $_POST['sem2'];
    $third_sem =$_POST['sem3'];
    $fourth_sem=$_POST['sem4'];
    $fifth_sem=$_POST['sem5'];
    $sixth_sem =$_POST['sem6'];
    $seven_sem=$_POST['sem7'];
    $eight_sem= $_POST['sem8'];


    $query ="insert into registration(name,email,roll_no,mobile_no,branch,password,backs,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8) 
              values ('$name','$email','$roll_no','$mobile_no','$branch','$pass','$backs','$first_sem','$second_sem','$third_sem','$fourth_sem','$fifth_sem','$sixth_sem','$seven_sem','$eight_sem')" or die(mysqli_error($db));

    $result=mysqli_query($db,$query);

    echo "registration successful";

    header('location:hackthon1/thankyou.php');

}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hackthon</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <link rel="stylesheet" href="hackthon1/style2.css" >
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="style 2.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->

<script src="hackthon1/js/jquery2.0.3.min.js"></script>
<script src="hackthon1/js/jquery-1.11.3.min.js"></script>
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
          <li><a href="hackthon1/login.php">LOGIN</a></li>
        </ul>
  
        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>




<div class="dashboard-page" style="background: url('hackthon1/assets/image/background.jpg')no-repeat 0px 0px;
    background-size: cover;
	min-height: 799px;">  
    <form action="registration.php" method="post">
		<div class="main-grid">
			<div class="agile-grids">
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>registration form</h2>
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Register Form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" action="#" method="post">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<!-- <span class="help-block with-errors">Please enter a valid email address</span> -->
											</div>
											<div class="form-group has-feedback">
												<input type="text" class="form-control" name="roll_no" placeholder="Roll Number" id="roll_no" required="">
                                                <div id="status"></div>
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
											</div>
                                            <div class="form-group has-feedback">
                                                <input type="text" pattern="[6789][0-9]{9}" class="form-control" name="mobile_no" placeholder="Mobile No." data-error="That mobile number is invalid" required="">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" name="branch" placeholder="Branch Name" required="">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
                                            </div>
											<div class="form-group">
											  <input type="password"  data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="Confirm password" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>

											<div class="input-info" style="margin-top: 20px;">
													<h3>Academics :</h3>
												</div>
												<div class="form-group has-feedback">
													<input id="backs" type="number" min="0" max="45" class="form-control" name="backs" placeholder="Number of backlogs" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
												</div>
												<div class="form-group has-feedback">
													<input id="sem1" type="number" min="0" max="99" class="form-control  two-in-one" name="sem1" placeholder="1st sem Percent" required="" style="margin-right: 10px;">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<input id="sem2" type="number" min="0" max="99" class="form-control  two-in-one" name="sem2" placeholder="2nd sem Percent" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
												</div>
												<div class="form-group has-feedback">
													<input id="sem3" type="number" min="0" max="99" class="form-control  two-in-one" name="sem3" placeholder="3rd sem Percent" required="" style="margin-right: 10px;">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<input id="sem4" type="number" min="0" max="99" class="form-control  two-in-one" name="sem4" placeholder="4th sem Percent" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
												</div>
												<div class="form-group has-feedback">
													<input id="sem5" type="number" min="0" max="99" class="form-control  two-in-one" name="sem5" placeholder="5th sem (Optional)" required="" style="margin-right: 10px;">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<input id="sem6" type="number" min="0" max="99" class="form-control  two-in-one" name="sem6" placeholder="6th sem (Optional)" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
												</div>
												<div class="form-group has-feedback">
													<input id="sem7" type="number" min="0" max="99" class="form-control  two-in-one" name="sem7" placeholder="7th sem (Optional)" required="" style="margin-right: 10px;">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<input id="sem8" type="number" min="0" max="99" class="form-control  two-in-one" name="sem8" placeholder="8th sem (Optional)" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
													<!-- <span class="help-block with-errors">Please enter a valid mobile number</span> -->
												</div>
											<div class="form-group">
											</div>
											<div class="form-group">

												<button type="submit" class="btn1 btn1-primary" name="submit">Submit</button>
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
    </form>
		<!-- footer -->
		<div class="footer">
			<p>© 2018 DeVry University . All Rights Reserved.</a></p>
		</div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" src="hackthon1/js/valida.2.1.6.min.js"></script>
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
    <script>
        $(document).ready(function(){
// check change event of the text field

            $("#roll_no").keyup(function(){

// get text username text field value
                var roll_no = $("#roll_no").val();

// check username name only if length is greater than or equal to 10
                if(roll_no.length >= 5)
                {
                    $("#status").html('<img src="../image/loader.gif" /> Checking availability...');
// check username
                    $.post("username_check.php", {roll_no: roll_no}, function(data, status){

                        $("#status").html(data);
                    });
                }
            });
        });
    </script>

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
<script src="hackthon1/main.js"></script>
</body>
</html>




