<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login2.php');
	# code...
}



?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>AK EDU</title>
	
	
	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	
	

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->







<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
 





	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 id="myhead"><i class="fas fa-user-graduate"></i> AK EDU</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#myservice_section">Courses</a></li>
					<li> <a href="#work">Services</a></li>
					<li> <a href="#our-members">Faculty</a></li>

					
					<li> <a href="">Contact</a></li>
					<li><a  href="/" onclick="javascript:event.target.port=3000">blog</a></li>
					<!---<li> <a href="logout.php" id="our-location" class="btn-success" >
						<?php if (!isset($_SESSION['username'])) {echo $_SESSION['username']; }
                        else
                        {echo "LOGIN";}
                        ?>
						</a></li>--->
						<?php
						if(isset($_SESSION['username'])){
							echo"<li><a href='logout.php'>logout</a></li>";
						}
						else{
							echo"<li><a href='login2.php'>login</a></li>";
						}
						?>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->
			  <!----------- DYNAMIC SLIDESHOW ---------->
        <div class="slide-container">
            
           
           
                <div class="slides fade">
                
                <a href=#><img src="https://i.ytimg.com/vi/hl-Y3tLMkbY/maxresdefault.jpg" style='width:100%'></a>
               

            </div>
                
                
                 <div class="slides fade">
                

                  <a href=#><img src="https://static.skillshare.com/uploads/video/thumbnails/3a61a8763d9357228f649d422603760b/original" style='width:100%'></a>

            </div>
             <div class="slides fade">
                

                  <a href=#><img src="https://s3-ap-southeast-1.amazonaws.com/blog.internshala.com/wp-content/uploads/2018/05/Learn-Android-Studio-The-complete-Android-tutorial-for-beginners1.png" style='width:100%'></a>

            </div>
                
                <div class="slides fade">
                

                  <a href=#><img src=" https://www.freecodecamp.org/news/content/images/2020/03/gpython.jpg" style='width:100%'></a>

            </div>
           
            

            
    
        </div>
        <!-------------------------------------->
        
        

        

		<section class="course" id="course">

<div class="section-title text-center">
         				<h2><b>OUR POPULAR COURSES</b></h2>
         				<p>
         			 
         				</p>
         			</div>

<div class="box-container">

 

  

   
    <div class="box">
        <img src="img/JAVA.png" alt="">
        <h3 class="price">$50</h3>
        <div class="contenta">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Java</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="img/PYTHON.png" alt="">
        <h3 class="price">$50</h3>
        <div class="contenta">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Python</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="img/ANDROID.png" alt="">
        <h3 class="price">$50</h3>
        <div class="contenta">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="#" class="title">learn Android</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non debitis!</p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

</div>

</section>



 <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
         					theses are the services provided by us <br>come one and come all
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>
<!-- 
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">WEB DESIGN</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
 -->
         		<!-- <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">COMPUTER SCIENCE</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
 -->
         		<!-- <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-user"></i>
         				</div>
         				<h3><a href="">TECH NEWS</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div> -->
         	</div>
         </div>
     </div>



<section class="course" id="course">

<div class="section-title text-center">
         				<h2><b>OUR FACULTY</b></h2>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>

<div class="box-container">

    <div class="box">
      <!--  <img style="height:40rem;" src="https://media.istockphoto.com/photos/intelligent-matur-female-math-professor-in-classroom-picture-id638917964?k=20&m=638917964&s=612x612&w=0&h=RhILtaD7xwiMtctq1GjMpZz0XXiJpQ_WBTI215DxNFs=">
					-->
					<img style="height: 310px;"src="pooja_maam.jpeg">
            <a href="#" class="title" style="font-size:18px;">Dr. Pooja Munjal</a>
            <p style="font-size:15px;">Expert in Full stack development</p>
         
        
    </div>

    <div class="box">
       <img style="height:30rem;" src="https://images.ctfassets.net/usf1vwtuqyxm/NK1u7zjnos0IGMaAwEQQI/716f0b4887dae6c19cb8d71066dce3fe/HoraceSlughorn_WB_F6_SlughornDrinkingButterbeerInTheThreeBroomsticks_HP6D-09836.jpg">
					
				
            <a href="#" class="title" style="font-size:18px;">Dr. Slughorn Colin</a>
            <p style="font-size:15px;">Expert in Python</p>
         
        
    </div>
    
       <div class="box">
        <img style="height:30rem;" src="https://static.scientificamerican.com/sciam/cache/file/E8D689E7-3432-403F-BAB703D79961CCC4_source.jpg?w=590&h=800&033DC85D-6C1F-4BB9-B29557DE445805B7">
       
            <a href="#" class="title" style="font-size:18px;">Dr. James Smith</a>
            <p style="font-size:15px;">Expert in Java</p>
         
        
    </div>
    

</div>

</section>



			



<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			
			<section  class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									you can ask the regarding the issues.<br>We will solve that together for sure.
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'uniquedeveloper');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



							




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>


			<!---FAQs Section Ends------->


			<!---Contact us Section Start---->

  <!------ Include the above in your HEAD tag ----------

<div class="row text-center">
	<h2><b>CONTACT US</b></h2><br><br>
	<center>
	<div class="card" style="width: 30rem;">
  <div class="card-body border-info">
   
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="password" class="form-control"  placeholder="enter your message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div></center>
</div>

    



			Contact us Section Ends------->

<!-- CHAT BAR BLOCK -->
<div>
<link rel="stylesheet" type="text/css" href="chat.css">

<div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>hey! whtatsapp.... how may i help you?</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
	
									</div>
<!-- CHAT BAR ENDS -->


 			<!---footer Section Start	----->

<div class="footer">

    <div class="box-container">
<!-- CHAT BAR BLOCK -->

        <div class="box">
            <h3>branch locations</h3>
            <a href="#">India</a>
            <a href="#">USA</a>
            <a href="#">france</a>
            <a href="#">russia</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">course</a>
            <a href="#">teachers</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> chandigarh, india 400104. </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
        </div>

    </div>

   

</div>

 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}

//===============SLIDESHOW=========================
        var slideIndex = 0;
        showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slides");
  
  for (i = 0; i < slides.length-1; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides,1700); // Change image every 2 seconds
}
         

</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/responses.js"></script>
    <script src="js/chat.js"></script>


  <!---<script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> --->

</body>
</html>
