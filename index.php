<!DOCTYPE html>
	
	<html lang="cs" xml:lang="cs" xmlns="http://www.w3.org/1999/xhtml">
	 <head>
	   <title>WiFi lokátor FIT VUT</title>
		<meta charset="utf-8">
		<!--<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no"> -->
		<meta name="description" content="WiFi lokátor FIT VUT">  
		<meta name="keywords" lang="cs" content="wifi, locator, lokátor, pozice, obsazenost, fit, vut, vut fit, informatika"> <!-- co nejvice klicovych slov, podh se to pak lepe vyhledava -->  
		<meta name="author" content="Kateřina Kunorzová, David Špávor"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script src="/Sources/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/Controller/Statistics.js"></script>
    <script type="text/javascript" src="/Controller/DataTableOperations.js"></script>
    <script type="text/javascript" src="/Controller/LoadStages.js"></script>
    <script type="text/javascript" src="/Controller/SendMessage.js"></script>
    <script type="text/javascript" charset="utf8" src="/Sources/Datatables/datatables.js"></script>

    
    <link rel="stylesheet" type="text/css" href="/Sources/Datatables/datatables.css">
	<link href="View\reset.css?v=1" rel="stylesheet" type="text/css"> <!-- vyresetuje veskere prednastavene styly a vse budeme delat sami -->
	<link href="Sources\bootstrap-4.2.1/dist/css/bootstrap.min.css?v=3" rel="stylesheet" type="text/css"> <!-- bootstrap, pomuze nam s UI -->
	<link rel="stylesheet" href="/View/layout.css?v=3">
	<link href="View\css.css?v=7" rel="stylesheet" type="text/css">
	
	
    <link href="Sources/fontawesome-free/css/all.css" rel="stylesheet"> <!--load all styles -->
  
    
</head>

<body>


<script>loadStudents();</script>
<script>GetStatistics();</script>


 <!-- Header Section -->
	
<div id="hlavicka"> 
	

<div class="container"> 	
		
		
	<div class="row"> 
		
		<!-- dark mode -->
		<div class="col-lg-11" align="right">
			<label class="switch">
				<input type="checkbox" onclick="funkce()">
				<span class="slider round"></span>
			</label>
		</div>
		
		<!-- jazyk -->
		<div class="col-lg-1" align="right">
			<a href="###">CZ</a>	
			<a href="###" style="margin-left: 10px;">EN</a>
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
					<form action="index.php" method="post" id="form_login">
						<label for="login" class="popis_form" >Login</label>
						<input type="login" name="login" id="login" value="xlogin00" value="<?php if(isset ($_REQUEST["email"])){print ($_REQUEST["email"]);}; ?>"><br>
						<label for="password" id="popis_form" class="popis_form">Heslo</label>
						<input type="password" name="heslo" id="heslo" value="heslo"><br>
						<input type="hidden" name="vyber" value="2">
						<input type="submit" name="odeslat" value="Přihlásit" id="button">
					</form>	
				</div>
			</div>

					

		</div>
	</div>	
</div>	      
	

<div class="container"> 
	<div class="row"> 
		<div class="col-md-11" align="right"> 
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
		<div class="cold-md-1"> 
			<div class="menu-stats"> 
				<div class="row"><div class="col-md-6"><p>Online: </p></div><div class="col-md-6"><p id="online"></p></div></div>
				<div class="row"><div class="col-md-6"><p>D105:</p></div><div class="col-md-6"> <p id="d105"></p></div> </div>
			</div> 
		</div>
	</div>

	</div>

   
      
    <p></p>
    <!-- Body section -->
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
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
            </table>

           
            
        </section> 
    </div> 

    <div class = "stages-position">
                <img class="stages" id="image" src="/Images/1-podlazi"></img>
    </div>

    <div class = "message-Box-container" id="messageBox">
        Send message to:<br>
        <input class ="message-Box-text" type="text" value="Some text">
        <input class= "send-button" type="button" onclick="SendMessage()" value = "Send">
    </div>

    <div class = "detail-view">
		<h6>Lokalizovaný uživatel: </h6>
        <div id = "Name">
            <h2></h2>
        </div> 
        <div id = "Room">
            <h2></h2>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>Copyright © 2020 Kateřina Kunorzová, David Špávor</footer>



</body>
</html>
