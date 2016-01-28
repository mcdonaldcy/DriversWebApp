
function refuel() {
    alert("Coming soon Boyz!!!");
}

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


$('#box').click(function buttonAction() {
  $("#dialog-confirm").html("Do you want to do the thing?");

  // Define the Dialog and its properties.
  $("#dialog-confirm").dialog({
    resizable: false,
    modal: true,
    title: "Do the thing?",
    height: 250,
    width: 400,
    buttons: {
      "Yes": function() {
        $(this).dialog('close');
        alert("Yes, do the thing");
      },
      "No": function() {
        $(this).dialog('close');
        alert("Nope, don't do the thing");
      }
    }
  });
});

$('#box').click(buttonAction);
