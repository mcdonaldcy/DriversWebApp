$(document).ready(function(){
    $("#sub1").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});

function carwash() {
    alert("The car has been washed");
}

function oil_check() {
    alert("The oil has been checked");
}

function tyres_check() {
    alert("The Tyres has been checked");
}

function carwash1() {
    var txt;
    var r = confirm("Are you sure?");
    if (r == true) {
        alert("The car has been washed");
    } else {

  }
}

