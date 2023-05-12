<?php

session_start();

?>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login2.css">
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
    $(document).ready(function(){
    $(".login").click(function(){
	$(".signIn").addClass("active-dx");
	$(".signUp").addClass("inactive-sx");
	$(".signUp").removeClass("active-sx");
	$(".signIn").removeClass("inactive-dx");
});

$(".back").click(function(){
	$(".signUp").addClass("active-sx");
	$(".signIn").addClass("inactive-dx");
	$(".signIn").removeClass("active-dx");
	$(".signUp").removeClass("inactive-sx");
});
        });
    </script>


   

 <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-user-graduate"></i> AK EDU</a>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">COURSES</a></li>
            <li><a href="index.php">ABOUT</a></li>
            <li><a href="index.php">FACULTY</a></li>
            <li><a href="index.php">CONTACT</a></li>
                  <li><a class="active" href="login2.php">LOGIN</a></li>
        </ul>
    </nav>

   

</header>

<!-- header section ends -->

<div class="container">
	<form class="signUp" method="POST" action="registration.php">
		<h3>Create Your Account</h3>
        <input type="text" name="name" placeholder="Insert username" required autocomplete='off' />
		<input name="email" class="w100" type="email" placeholder="Insert eMail" required autocomplete='off' />
		<input name="password" id="pwd" type="password" placeholder="Insert Password" required />
		<input name="confirm_password" id="cpwd" type="password" placeholder="Verify Password" required />
        <div id="errorlabel"></div>
		<button class="form-btn sx login" type="button">Log In</button>
		<button class="form-btn dx" type="submit">Sign Up</button>
	</form>
	<form class="signIn" method="POST" action="validation.php" onsubmit="return validation()">
		<h3>Welcome<br>Back !</h3>
		<br><br>	
		<br>
		<input type="text" placeholder="Insert username" name="name"  id="username" onkeypress="clear()" autocomplete='off' required />
		<input name="password" id="password" type="password" placeholder="Insert Password" required />
        <span id="perror"><?php 
				if(isset($_SESSION['error'])){
				echo "wrong username or password";
				} 
				else{ echo " ";} 
				?>
       	</span>
		<button class="form-btn sx back" type="button">Back</button>
		<button class="form-btn dx" type="submit">Log In</button>
	</form>
</div>

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">India</a>
            <a href="#">USA</a>
            <a href="#">France</a>
            <a href="#">Russia</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">Home</a>
            <a href="index.php">About</a>
            <a href="index.php">Course</a>
            <a href="index.php">Teachers</a>
            <a href="index.php">Contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Chandigarh, India 400104. </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
        </div>

    </div>

   

</div>

<!-- footer section ends -->


<script type="text/javascript">
	
$(document).ready(function(){

$('#cpwd').keyup(function(){
	var pwd=$('#pwd').val();
	var cpwd=$('#cpwd').val();
	if (cpwd!=pwd) 
	{
		$('#errorlabel').html('**password are not matched');
		$('#errorlabel').css('color','red');
		return false;
	}
	else
	{
		$('#errorlabel').html('');
		return true;
	}
});

});
    
    function validation() {
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if ((username=="") ||( password==""))
	 {
	 	document.getElementById('perror').innerHTML="please fill the details";
	 	return false;
	 }
}


function clear() {
	document.getElementById('perror').innerHTML="ksdfisdhfg";
}

    </script>

</body>




</html>

