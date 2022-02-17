function validityCheck(form) {

    // Check if name is a locked one
    var CommandName = form.commandName.value;

    if (CommandName == "so" || CommandName == "audio" || CommandName == "play" || CommandName == "sound" || CommandName == "age") {
        document.getElementById("commandNameError").innerHTML = "The Command Name given is a reserved one the bot uses <a id='commandNameErrorLink' href='#'><img width='12' height='12' src='main/templates/img/close.png' /></a>";
        
        document.getElementById('commandNameErrorLink').addEventListener('click',function(){
            document.getElementById('commandNameError').style.visibility = "hidden";
        });

        document.getElementById("commandNameError").style.visibility = "visible";
        return false;
    }
}