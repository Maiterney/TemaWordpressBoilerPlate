var adminbar = document.getElementById('wpadminbar');
var firstTime = localStorage.getItem("first_time");

setTimeout(function(){ 

    //if(!firstTime) {
        if(adminbar != ''){
            //var bar_ = confirm('Desativar Admin Bar?');
                document.getElementById('wpadminbar').style.display = "none";
                document.getElementsByTagName("html")[0].classList.add('no-margin');
         }
        //localStorage.setItem("first_time","2");
    //}
 }, 200);

