<!DOCTYPE html>
	
	<html lang="cs" xml:lang="cs" xmlns="http://www.w3.org/1999/xhtml">
	 <head>
	   <title>WiFi lokátor FIT VUT</title>
		<meta charset="utf-8">
		<!--<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no"> -->
		<meta name="description" content="WiFi lokátor FIT VUT">  
		<meta name="keywords" lang="cs" content="wifi, locator, lokátor, pozice, obsazenost, fit, vut, vut fit, informatika"> <!-- co nejvice klicovych slov, podh se to pak lepe vyhledava -->  
		<meta name="author" content="Kateřina Kunorzová, David Špavor"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script src="/Sources/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/Controller/Statistics.js"></script>
    <script type="text/javascript" src="/Controller/DataTableOperations.js?v=3"></script>
    <script type="text/javascript" src="/Controller/LoadStages.js?v=3"></script>
    <script type="text/javascript" src="/Controller/SendMessage.js"></script>
	<script type="text/javascript" src="/Controller/login.js?v=2"></script>
	<script type="text/javascript" src="/Controller/dark-mode.js?v=2"></script>
    <script type="text/javascript" charset="utf8" src="/Sources/Datatables/datatables.js"></script>

    
    <link rel="stylesheet" type="text/css" href="/Sources/Datatables/datatables.css">
	<link href="View\reset.css?v=1" rel="stylesheet" type="text/css"> <!-- vyresetuje veskere prednastavene styly a vse budeme delat sami -->
	<link href="Sources\bootstrap-4.2.1/dist/css/bootstrap.min.css?v=3" rel="stylesheet" type="text/css"> <!-- bootstrap, pomuze nam s UI -->
	<link rel="stylesheet" href="/View/layout.css?v=10">
	<link href="View\css.css?v=10" rel="stylesheet" type="text/css">
	
	
    <link href="Sources/fontawesome-free/css/all.css" rel="stylesheet"> <!--load all styles -->
  
    
</head>

<body>


<script>loadStudents();</script>
<script>GetStatistics();</script>

	
<div id="hlavicka"> 
	

<div class="container"> 	
		
		
	<div class="row"> 
		
		<!-- dark mode -->
		<div class="col-lg-12" align="right">
			<label class="switch">
				<input type="checkbox" onclick="dark()">
				<span class="slider round"></span>
			</label>
		</div>
		
	</div>
		
	
	<div class="row" align="left">	
	
		<div class="col-md-1" align="left">
			<a href="index.php"><img src="Images/logo.png" alt="logo" title="logo" width="100px"></a>	
		</div>
		<div class="col-md-5" align="left">
			<a href="index.php"><h1>Wi-Fi lokátor</h1></a>
		</div>

		
	
			<div class="col-md-6" align="right">
				<div id="login"> 
					<form action="index.php" name="form_login" method="post" id="form_login">
						<label for="login" class="popis_form" >Login</label>
						<input class="login" name="login" value="xlogin00"><br>
						<label for="password" id="popis_form" class="popis_form">Heslo</label>
						<input type="password" class="heslo" name="heslo" value="heslo"><br>
						<button id="buttonOut" class="logOut" type="button" onclick="logout()" id="buttonLog2">Odhlásit</button>
						<button type="button" onclick="check(this.log)" id="buttonLog">Přihlásit se</button>
						
						
						<div id = "succ">
            				<h2> </h2>
        				</div> 
					</form>	
				</div>
				
			</div>

					

		</div>
	</div>	
</div>	      
	


	<div class="row"> 
		<div class="col-md-12" align="right"> 
			<!-- Menu Navigation Bar -->
			<div class="pruh-menu"> 
				<div class="menu-buttons"> 
					<input class= "menu-button" type="button" onclick="loadStages(-2)" value = "-2. podlaží">
					<input class= "menu-button" type="button" onclick="loadStages(-1)" value = "-1. podlaží">
					<input class= "menu-button" type="button" onclick="loadStages(1)" value = "1. podlaží">
					<input class= "menu-button" type="button" onclick="loadStages(2)" value = "2. podlaží">
					<input class= "menu-button" type="button" onclick="loadStages(3)" value = "3. podlaží">
				</div>  
			</div> 
		</div>
	</div>
   
      
    <p></p>
    <!-- Body section -->
	
	<div class="row"> 
		<div class="col-md-3" align="left"> 
	
			<div class = "body_sec"> 
				<section id="Content"> 

					<table id="table_id" class="display">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>



				</section> 
			</div> 

		</div>
		
		<div class="col-md-7" align="left"> 
			<div class = "stages-position">
				<img class="stages" id="image" src="/Images/podlazi-1.png"></img>
			</div>
		</div>

    

			<div class = "detail-view">
				
				<div class = "message-Box-container" id="messageBox">
					Napsat zprávu:    
					<button  class="exit" style="background-color: Transparent; border:none;  " onclick="CloseMessageBox()"> 
					<i  class="fa fa-times-circle fa-lg" style="color:white;padding-left:38px" ></i></button>
					<br>
					<textarea id="message-box" class ="message-Box-text" placeholder="Vaše zpráva"  cols="40" rows="5"  style="text-align:left"></textarea>
					<input class= "send-button" type="button" onclick="SendMessage()" value = "Odeslat">
				</div>
				
					<h6>Statistiky: </h6> 
					<div class="row"><div class="col-md-6"><p>Online: </p></div><div class="col-md-6"><p id="online"></p></div></div>
					<div class="row"><div class="col-md-6"><p>D105:</p></div><div class="col-md-6"> <p id="d105"></p></div> </div>
					<div class="row"><div class="col-md-6"><p>E112:</p></div><div class="col-md-6"> <p id="e112"></p></div> </div>
					<div class="row"><div class="col-md-6"><p>Menza:</p></div><div class="col-md-6"> <p id="menza"></p></div> </div>
					<div class="row"><div class="col-md-6"><p>Knihovna:</p></div><div class="col-md-6"> <p id="knihovna"></p></div> </div>
					<br>
					<h6>Lokalizovaný uživatel: </h6> 
						<div id = "Name">
							<h2></h2>
						</div> 
						<div id = "Room">
							<h2></h2>
						</div>
				
		
		
		</div>
	
	</div> <!-- row end -->
	
	<br>

    <!-- Footer Section -->
    <footer>Copyright © 2020 Kateřina Kunorzová, David Špavor</footer>





</body>
</html>
