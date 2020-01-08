 function check(log){
	
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && xhttp.status === 200) {
      var people = JSON.parse(this.responseText);
	  var login = document.form_login.login.value;
	  var heslo = document.form_login.heslo.value;
	

	  for (var i=0; i<people.length; i++){
		  if((login === people[i].login) && (heslo === people[i].heslo)) {
			  document.getElementById("succ").innerHTML = "Přihlášený uživatel: " + people[i].name;
			  document.getElementById("succ").style.color = "white";
			  document.getElementById("buttonLog").innerHTML = "Odhlásit se";
			  
			  
			  $('#table_id').DataTable({
				  "processing" : false,
				  "paging" : false,
				  "info" : false,
				  "ordering" : false,
				  "ajax" : {
					  "url" : "/Model/students.json",
					  dataSrc : ''
				  },
				  "columns" : [ {
					"width" : "5px",
					"defaultContent": '<i class="fas fa-circle fa-xs" style="color:green" ></i>' 
				  },{

					  "data" : "name"
				  },{
					"width" : "5px",
					"defaultContent": '<button class="Message" style="background-color: Transparent; border:none; "> <i class="fa fa-comment-dots" style="color:gray;" ></i></button>'
				  },{
					"defaultContent": '<button class="Locate">Lokalizovat</button>'
				}

				]
			  });
			  
			  
			  
			  break;
		  }
		  else{
			  document.getElementById("succ").innerHTML = "Špatné přihlašovací údaje!";
			  document.getElementById("succ").style.color = "red";
		  }
	  }
	
    }
  };
  xhttp.open("GET", "Model/students.json", true);
  xhttp.send();
	

		
}

