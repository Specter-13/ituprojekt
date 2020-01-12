function SendMessage(){

    alert("Zpráva odeslána!");
    var ta = document.getElementById("message-box");
    ta.value = ta.defaultValue;
}

function CloseMessageBox()
{
    var x = document.getElementById("messageBox");
    x.style.display = "none";
    
    
     
    
}
