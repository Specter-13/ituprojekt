
function loadStudents() {


  

$(document).ready(function() {
  
  $('#table_id').DataTable({
    "scrollY":  "1050px",
    "scrollCollapse": true,
    "processing" : false,
    "paging" : false,
    "info" : false,
    "ordering" : false,

    "language": {
      search: '<i class="fa fa-filter" aria-hidden="true"></i>',
      searchPlaceholder: 'Filter'
    },
    "ajax" : {
      "url" : "/Model/students.json",
      dataSrc : ''
    },


    "columns" : [ {
    "width" : "5px",
    "defaultContent": '<i class="fas fa-circle fa-xs" style="color:green" ></i>' 
    },{
      "width" : "100px",
      "data" : "name"
    },{
      
      "defaultContent": '<button class="Locate">Lokalizovat</button>'
  
    },{
      
      "defaultContent": '<button class="Message" style="background-color: Transparent; border:none; "> <i class="fa fa-comment-dots fa-lg" style="color:gray;" ></i></button>'
    
  }

  ]
  });
  

  $('#table_id').on( 'click', 'button.Message', function () {
    var x = document.getElementById("messageBox");
    if (x.style.display === "none") {
      x.style.display = "inline";
    } else {
      x.style.display = "none";
    }
} );

//funtion on click to locate person
$('#table_id').on( 'click', 'button.Locate', function () {

  //getting index of person in json
  var dataTable = $('#table_id').DataTable();
  var data = dataTable.row($(this).closest('tr')).data();
  var index = data[Object.keys(data)[0]];
  var identification = data[Object.keys(data)[1]];

  
  //get XMLrequest

      
    //get room
    var personLocation = data[Object.keys(data)[2]];    
    //Switch maps based on floor -> based one second character in string
    var floor = personLocation.charAt(1);
    //console.log(floor);
    //switch floors
    switch(floor)
    {
      case "0":
        if(personLocation == "D0207" || personLocation == "D0206")
        {
          document.getElementById("image").src = "/Images/-2-podlazi.png";
        }
        else
        {
          document.getElementById("image").src = "/Images/-1-podlazi.png";
        }
        break;
      case "1":
        document.getElementById("image").src = "/Images/1-podlazi.png";
        break;
      case "e":
      case "2":
        document.getElementById("image").src = "/Images/2-podlazi.png";
        break;
      case "3":
        document.getElementById("image").src = "/Images/3-podlazi.png";
        break;
      default:

    }

    document.getElementById("Name").innerHTML = identification;
    document.getElementById("Room").innerHTML = personLocation;
});



});


}



