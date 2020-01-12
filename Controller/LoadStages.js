function loadStages(x) {
    
    switch(x) {
        case -2:
            document.getElementById("image").src = "/Images/podlazi-2-.png";
          break;
        case -1:
            document.getElementById("image").src = "/Images/podlazi-1-.png";
          break;
        case 1:
            document.getElementById("image").src = "/Images/podlazi-1.png";
          break;
        case 2:
            document.getElementById("image").src = "/Images/podlazi-2.png";
        break;
        case 3:
            document.getElementById("image").src = "/Images/podlazi-3.png";
          break;
        default:
      }
    
     
  }
  