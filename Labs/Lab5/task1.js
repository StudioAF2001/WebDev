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

function validateAge()
{
    let today = new Date();

    let year = today.getFullYear();
    let month = today.getMonth();
    let day = today.getDate();

    let inp = document.getElementById('dob').value;
    let dob = new Date(inp);

    let dobYear = dob.getFullYear();
    let dobMonth = dob.getMonth();
    let dobDate = dob.getDate();

    let age = year - dobYear;
    let ageMonth = month - dobMonth;
    let ageDay = day - dobDate;

    if ((age === 17 && ageMonth <= 0 && ageDay <= 0) || age < 17)
    {
        alert("You must be over 17 to register!");
    }
}

function validateStart()
{
    let inp = document.getElementById('startDate').value;
    let startDate = new Date(inp);
    let today = new Date();
    if (startDate < today)
    {
        alert("You cannot select a start date before today's date!");
    }
}
