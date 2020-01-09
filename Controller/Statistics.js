  function GetStatistics(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && xhttp.status == 200) {
      var jsonObj = JSON.parse(this.responseText);

      var online = jsonObj.length;
      var countd105 = getCountOfPeopleInRoom(jsonObj,"D105");
      var countde112 = getCountOfPeopleInRoom(jsonObj,"E112");
      var countmenza = getCountOfPeopleInRoom(jsonObj,"menza");
      var countd105 = getCountOfPeopleInRoom(jsonObj,"D105");
      var countknihovna = getCountOfPeopleInRoom(jsonObj,"knihovna");
      
      document.getElementById("online").innerHTML = online;
      document.getElementById("d105").innerHTML = countd105;
      document.getElementById("e112").innerHTML = countde112;
      document.getElementById("menza").innerHTML = countmenza;
      document.getElementById("knihovna").innerHTML = countknihovna;
    }
  };
  xhttp.open("GET", "Model/students.json", true);
  xhttp.send();
}
 
function getCountOfPeopleInRoom(obj, data) {

  var result = obj.filter(function (item) { return item.room == data }).length;
  
  return result;
}