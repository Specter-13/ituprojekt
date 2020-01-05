  function logIn(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && xhttp.status == 200) {
      var people = JSON.parse(this.responseText);
	  var login = document.form_login.login.value;
	  var heslo = document.form_login.heslo.value;
	
	  for (var i=0; i<people.length; i++){
		  if((login == people[i].login) && (heslo == people[i].heslo)){
			  
		  }
		  else{
			  //spatne prihlasovaci udaje 
		  }
	  }
	
    }
  };
  xhttp.open("GET", "Model/students.json", true);
  xhttp.send();
	  
	  
}
 