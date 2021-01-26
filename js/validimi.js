
function Validimi() {
    var name = document.getElementById("name").value;
    submitOK = "true";

    if (name.length > 20) {
        alert("Your name should be between 1-19 characters");
        submitOK = "false";
    } 



    if (submitOK == "false") {
        return false;
    }
}