function validateEmail(){
    let email1 = document.forms["primaryForm"]["email"].value;
    let email2 = document.forms["primaryForm"]["confemail"].value;

    if (email1 !== email2){
        alert("Emails do not match!");
        document.forms["primaryForm"]["confemail"].value ="";
    }
    else{
        return true;
    }
}

function validateDOB(){
    let dob = document.forms["primaryForm"]["dob"].value;
    let Birth = new Date(dob);

    let today = new Date();
    let age = today.getFullYear()-dob.getFullYear();
    let m = today.getMonth()-dob.getMonth();
}
