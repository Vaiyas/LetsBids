function validate()
{
  var firstname = document.getElementById("fname").value;
  var lastname = document.getElementById("lname").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var yourfeedback = document.getElementById("yourfeedback").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(fname.length < 3)
  {
    text = "Please Enter a valid First Name";
    error_message.innerHTML = text;
    return false;
  }
  if(lname.length < 3)
  {
    text = "Please Enter a Valid Last Name";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10)
  {
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(address.length <= 140)
  {
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}