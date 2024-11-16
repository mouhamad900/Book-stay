
function validateForm() {
  var password = document.getElementById("p").value;
  var confirmPassword = document.getElementById("cp").value;

 
  if (password !== confirmPassword) {
    document.getElementById("passwordError").textContent = "Passwords do not match";
    return false;
  } else {
    document.getElementById("passwordError").textContent = "";
  return true;
  }
}

