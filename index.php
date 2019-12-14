<!DOCTYPE html>
<html>

<head>

    <script src="/Sources/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/Controller/Statistics.js"></script>
    <script type="text/javascript" src="/Controller/DataTableOperations.js"></script>
    <script type="text/javascript" src="/Controller/LoadStages.js"></script>
    <script type="text/javascript" src="/Controller/SendMessage.js"></script>
    <script type="text/javascript" charset="utf8" src="/Sources/Datatables/datatables.js"></script>

    <link rel="stylesheet" href="/View/layout.css">
    <link rel="stylesheet" type="text/css" href="/Sources/Datatables/datatables.css">

    <link href="Sources/fontawesome-free/css/all.css" rel="stylesheet"> <!--load all styles -->
  
    
</head>

<body>


<script>loadStudents();</script>
<script>GetStatistics();</script>


 <!-- Header Section -->
 <header> 
        <div class="head1">Wifi-lokator</div> 
        <div class="head2">A locator</div> 
    </header> 
      
    <!-- Menu Navigation Bar -->
    <div class="menu"> 
        <div class="menu-buttons"> 
            <input class= "menu-button" type="button" onclick="loadStages(-2)" value = "Change Content">
            <input class= "menu-button" type="button" onclick="loadStages(-1)" value = "Change Content">
            <input class= "menu-button" type="button" onclick="loadStages(1)" value = "Change Content">
            <input class= "menu-button" type="button" onclick="loadStages(2)" value = "Change Content">
            <input class= "menu-button" type="button" onclick="loadStages(3)" value = "Change Content">
        </div>  
        
    </div> 

    <div class="menu-stats"> 
        <h3 >Online:</h3>
        <h3 id="online"></h3>
        <h3 >D105:</h3>
        <h3 id="d105"></h3>
        <h3 id="menza"></h3>
        
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
        <div id = "Name">
            <h2></h2>
        </div> 
        <div id = "Room">
            <h2></h2>
        </div>
    </div>
      
    <!-- Footer Section -->
    <footer>Footer Section</footer> 



</body>
</html>
