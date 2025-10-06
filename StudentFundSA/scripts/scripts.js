function validation()
{
    var fullName = document.forms["myForm"]["fullName"].value;
    var phoneNumber = document.forms["myForm"]["phoneNumber"].value;
    var email = document.forms["myForm"]["email"].value;
    var message = document.forms["myForm"]["message"].value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^\(\d{3}\) \d{3}-\d{4}$/;

    if (fullName != null && phonePattern.test(phoneNumber.value) && emailPattern.test(email.value) && message != null) {
        alert("Submission successful");
    }
}