function validate_form(){
    var x = document.forms(["myform"]["last_name"]).value;
    if(x == null || x == ""){
        alert("last_name" + "must be filled out");
        return false;
    }
}