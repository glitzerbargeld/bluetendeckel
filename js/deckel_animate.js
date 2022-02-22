function openPopUp(popupbutton, popupid) {


    var popup = document.getElementById(popupid);
    var popbtn = document.getElementById(popupbutton);
    var logo = popbtn.children[0];
    
    var pop_btn_array = document.getElementsByClassName("popup_btn");
    var otherpopups = document.getElementsByClassName("info-popup");
    

    Array.prototype.forEach.call(otherpopups, function(p) {
    if(p.id != popupid){
        p.classList.remove("show");
    }
    });

    Array.prototype.forEach.call(pop_btn_array, function(p) {
    console.log(p.id);
    if(p.id == popupbutton){
        p.classList.toggle("btn_active");

    }
    else{
        p.classList.toggle("hide_btn");
    }

    });

    logo.classList.toggle("infologo_active");
    popup.classList.toggle("show"); 
    document.getElementById("outer-circle").classList.toggle("outer-circle_spin");
    document.getElementById("inner-circle").classList.toggle("inner-circle_spin");
    document.getElementById("circle-shadow").classList.toggle("inner-circle_spin");
    document.getElementById("logogrid").classList.toggle("grid-transform");
    
}