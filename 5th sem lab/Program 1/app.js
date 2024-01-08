function validate() {
  if (document.myForm.Name.value === "") {
    alert("Please Provide Your Name");
    document.myForm.Name.focus();
    return false;
  }

  var gen = document.getElementsByName("gender");
  var genValue = false;
  for (var i = 0; i < gen.length; i++) {
    if (gen[i].checked) {
      genValue = true;
    }
  }

  if (!genValue) {
    alert("Gender not selected");
    return false;
  }

  if (document.myForm.Email.value === "") {
    alert("Please Provide Your Email ID");
    document.myForm.Email.focus();
    return false;
  }

  if (
    document.myForm.phno.value === "" ||
    document.myForm.phno.value.length !== 10
  ) {
    alert("Please Provide a valid phone number format - 10 digits");
    document.myForm.phno.focus();
    return false;
  }

  if (
    document.myForm.Zip.value === "" ||
    document.myForm.Zip.value.length !== 6
  ) {
    alert("Please Provide a valid zip code format");
    return false;
  }

  if (document.myForm.Country.value === "-1") {
    alert("Please Provide Your Country Name");
    return false;
  }
  alert("Thank you...");
  return true;
}

function validateEmail() {
  var emailID = document.myForm.Email.value;
  atpos = emailID.indexOf("@");
  dotpos = emailID.lastIndexOf(".");
  if (atpos < 1 || dotpos - atpos < 2) {
    alert("Please Enter Correct Email ID");
    document.myForm.Email.focus();
    return false;
  }
  return true;
}
