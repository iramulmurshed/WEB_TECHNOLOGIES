
function validateForm() {
    var name = document.getElementById("name").value;


    var password = document.getElementById("password").value;

    var confirmPassword = document.getElementById("confirmPassword").value;


    var email = document.getElementById("email").value;


    var date = document.getElementById("birthday").value;

    var gender = "";
    var radios = document.getElementsByName('gender');
    

    var length = radios.length;
    for (var i = 0; i < length; i++) {
        if (radios[i].checked) {
            gender = radios[i].value;
            break;
        }
    }



    var exp;
    if (name.length === 0 ||  password.length === 0 || confirmPassword.length === 0 || email.length === 0 || 
        date.length === 0 || gender.length === 0) {
        alert('Information required');
        return false;
    }
    else
    {
        exp=/^[a-zA-Z-' ]*$/;
        if(name.length<5)
        {
            alert("name should be five characters");
            return false;
        }
        
        else if(!name.match(exp))
        {
            alert("invalid name");
            return false;
        }

        
        exp=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if(!email.match(exp))
        {
            alert("email is not valid");
            return false;
        }

        
        exp=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        if(password!=confirmPassword)
        {
            alert("password is not matched");
            return false;
        }
        else if(!password.match(exp))
        {
            alert("password should be  eight characters long. include a special character, a number, and upper and lower case letters");
            return false;
        }

    }

    return true;
}
