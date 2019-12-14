  function GetStatistics(){

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && xhttp.status == 200) {
      var jsonObj = JSON.parse(this.responseText);

      var online = jsonObj.length;
      var number = getCountOfPeopleInRoom(jsonObj,"D105");
      console.log(number);
      console.log(online);
      document.getElementById("online").innerHTML = online;
      document.getElementById("d105").innerHTML = number;
    }
  };
  xhttp.open("GET", "Model/students.json", true);
  xhttp.send();
}
 
function getCountOfPeopleInRoom(obj, data) {

  var result = obj.filter(function (item) { return item.room == data }).length;
  
  return result;
}