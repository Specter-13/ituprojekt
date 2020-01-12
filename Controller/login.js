function check(log){
	
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4 && xhttp.status === 200) {
	  var loginFlag = false;
	  var login = document.form_login.login.value;
	  var heslo = document.form_login.heslo.value;

	  var people = JSON.parse(this.responseText);
		console.log(people);

	  for (var i=0; i<people.length; i++){
		  if((login === people[i].login) && (heslo === people[i].heslo)) {
			  //document.getElementById("succ").innerHTML = "Přihlášený uživatel: " + people[i].name;
			  //document.getElementById("succ").style.color = "white";
			  document.getElementById("buttonLog").style.visibility = "hidden";
			  document.getElementById("buttonOut").style.visibility = "visible";
			  document.getElementById("Content").style.visibility = "visible";
			  document.getElementById("succ").innerHTML = " ";
			  loginFlag=true;
			  break; 
		  }
	  }

	  if(loginFlag === false)
	  {
		document.getElementById("succ").innerHTML = "Špatné přihlašovací údaje!";
		document.getElementById("succ").style.color = "red";
	  }
	
    }
  };
  xhttp.open("GET", "Model/students.json", true);
  xhttp.send();
	

		
}

function logout(){
	document.getElementById("buttonLog").style.visibility = "visible";
	document.getElementById("buttonOut").style.visibility = "hidden";
	document.getElementById("Content").style.visibility = "hidden";
	document.getElementById("succ").innerHTML = " ";
	document.getElementById("Name").innerHTML = " ";
	document.getElementById("Room").innerHTML = " ";
	var x = document.getElementById("messageBox");
   
    x.style.display = "none";
}
