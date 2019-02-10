<?php
	include 'core/init.php';
?>


<!DOCTYPE HTML> 
 <html>
	<head>
		<title>Tato</title>
		  <meta charset="UTF-8" />
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>  
 	  	  <link rel="stylesheet" href="assets/css/style-complete.css"/> 
   		  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>  	  
	</head>
	<!--Helvetica Neue-->
<body>
<div class="wrapper">
<!-- header wrapper -->
<div class="header-wrapper">

<div class="nav-container">
	<!-- Nav -->
	<div class="nav">
		
		<div class="nav-left">
			<ul>
				<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
			</ul>
		</div><!-- nav left ends-->

		<div class="nav-right">
			<ul>
				<li class="hover"><label class="drop-label" for="drop-wrap1"><img src="PROFILE-IMAGE"/></label>
				<input type="checkbox" id="drop-wrap1">
				<div class="drop-wrap">
					<div class="drop-inner">
						<ul>
							<li><a href="PROFILE-LINK>">USERNAME</a></li>
							<li><a href="settings/account">Settings</a></li>
							<li><a href="includes/logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
				</li>
				<li><label class="addTweetBtn">Tato</label></li>
			</ul>
		</div><!-- nav right ends-->

	</div><!-- nav ends -->

</div><!-- nav container ends -->

</div><!-- header wrapper end -->

<!---Inner wrapper-->
<div class="inner-wrapper">
<div class="in-wrapper">
	<div class="in-full-wrap">
		<div class="in-left">
			<div class="in-left-wrap">
		<div class="info-box">
			<div class="info-inner">
				<div class="info-in-head">
					<!-- PROFILE-COVER-IMAGE -->
					<img src="PROFILE-COVER"/>
				</div><!-- info in head end -->
				<div class="info-in-body">
					<div class="in-b-box">
						<div class="in-b-img">
						<!-- PROFILE-IMAGE -->
							<img src="PROFILE-IMAGE"/>
						</div>
					</div><!--  in b box end-->
					<div class="info-body-name">
						<div class="in-b-name">
							<div><a href="PROFILE-LINK">SCREEN-NAME</a></div>
							<span><small><a href="PROFILE-LINK">@USERNAME</a></small></span>
						</div><!-- in b name end-->
					</div><!-- info body name end-->
				</div><!-- info in body end-->
				<div class="info-in-footer">
					<div class="number-wrapper">
						<div class="num-box">
							<div class="num-head">
								Tatos
							</div>
							<div class="num-body">
								10
							</div>
						</div>
						<div class="num-box">
							<div class="num-head">
								FOLLOWING
							</div>
							<div class="num-body">
								<span class="count-following">10</span>
							</div>
						</div>
						<div class="num-box">
							<div class="num-head">
								FOLLOWERS
							</div>
							<div class="num-body">
								<span class="count-followers">10</span>
							</div>
						</div>	
					</div><!-- mumber wrapper-->
				</div><!-- info in footer -->
			</div><!-- info inner end -->
		</div><!-- info box end-->

	<!--==TRENDS==-->
 	  <!---TRENDS HERE-->
 	<!--==TRENDS==-->

	</div><!-- in left wrap-->
		</div><!-- in left end-->
		<div class="in-center">
			<div class="in-center-wrap">
				<!--Tato WRAPPER-->
				<div class="Tato-wrap">
					<div class="Tato-inner">
						 <div class="Tato-h-left">
						 	<div class="Tato-h-img">
						 	<!-- PROFILE-IMAGE -->
						 		<img src="PROFILE-IMAGE"/>
						 	</div>
						 </div>
						 <div class="Tato-body">
						 <form method="post" enctype="multipart/form-data">
							<textarea class="status" name="status" placeholder="Type Something here!" rows="4" cols="50"></textarea>
 						 	<div class="hash-box">
						 		<ul>
  						 		</ul>
						 	</div>
 						 </div>
						 <div class="Tato-footer">
						 	<div class="t-fo-left">
						 		<ul>
						 			<input type="file" name="file" id="file"/>
						 			<li><label for="file"><i class="fa fa-camera" aria-hidden="true"></i></label>
						 			<span class="Tato-error"></span>
						 			</li>
						 		</ul>
						 	</div>
						 	<div class="t-fo-right">
						 		<span id="count">140</span>
						 		<input type="submit" name="Tato" value="Tato"/>
				 		</form>
						 	</div>
						 </div>
					</div>
				</div><!--Tato WRAP END-->

			
				<!--Tato SHOW WRAPPER-->
				 <div class="Tatos">
 				  	<!--Tatos HERE-->
 				 </div>
 				<!--Tatos SHOW WRAPPER-->

		    	<div class="loading-div">
		    		<img id="loader" src="assets/images/loading.svg" style="display: none;"/> 
		    	</div>
				<div class="popupTweet"></div>
				<!--Tato END WRAPER-->
 			
			</div><!-- in left wrap-->
		</div><!-- in center end -->

		<div class="in-right">
			<div class="in-right-wrap">

		 	<!--Who To Follow-->
		      <!--WHO_TO_FOLLOW HERE-->
      		<!--Who To Follow-->

 			</div><!-- in left wrap-->

		</div><!-- in right end -->

	</div><!--in full wrap end-->

</div><!-- in wrappper ends-->
</div><!-- inner wrapper ends-->
</div><!-- ends wrapper -->
</body>

</html>