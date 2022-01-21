function validateEmail(){
    let email1 = document.forms["primaryForm"]["email"].value;
    let email2 = document.forms["primaryForm"]["confemail"].value;

    if (email1 !== email2){
        alert("Emails do not match!");
        document.forms["primaryForm"]["confemail"].value = "";
        document.getElementById("confEmailLabel").innerHTML = "Confirm Email | Incorrect"
        return false;
    }
    else{
        document.getElementById("confEmailLabel").innerHTML = "Confirm Email | Correct"
        return true;
    }
}

function validateDOB(){
    let dob = document.forms["primaryForm"]["dob"].value;
    let Birth = new Date(dob);

}

function validateStart(){
    let startDate = document.forms["primaryForm"]["startDate"].value;
    let start = new Date(startDate)
    let today = new Date()

    if(startDate < today.getDate()){
        alert("Start date must be after today's date")
        return false
    }
}
