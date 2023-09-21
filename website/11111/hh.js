function validatePassword() {
    var password = document.getElementById("password").value;
  
    if (password == "correctpassword") {
      window.location.href = "nextpage.html";
    } else {
      alert("Incorrect password.");
    }
  }