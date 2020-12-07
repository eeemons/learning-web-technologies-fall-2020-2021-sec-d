function validateForm() {
    var name = document.form.name.value;
    var email = document.form.email.value;
    var password = document.form.password.value;

    if (name == null || email == null || password == null) {

        alert("All fields are required");
        return false;
    } 

    else if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))) {
        alert("Invalid Email");
        return false;
    }
    else if(password.length < 6){
        alert("Password must be larger than 6 characters");
        return false;
    }
}