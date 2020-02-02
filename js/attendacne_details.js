function myFunction() {
    var x = document.getElementById("type-selector").value;
    if (x == 1 || x == 0){
        document.getElementById("practical-section").disabled=true;
    }
    else if(x == 2){
        document.getElementById("practical-section").disabled=false;
    }
}
