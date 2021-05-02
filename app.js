function loadData() {
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("testCinqMultiplication").innerHTML =
            this.responseText;
          }
        }; 
    httpRequest.open("GET", "ajax_info.txt", true);
    httpRequest.send();
}


// addevenlister TEST de l'ecoute du SUBMIT button

// recup donne du formulaire

// form DATA