function vemail() {
  let email = document.getElementById("email").value;
  let msg = document.getElementById("msg");
  let atPosition = email.indexOf("@");
  let dotPosition = email.lastIndexOf(".");
  if (email === "") {
    msg.innerHTML = "Please enter your email.";
    return false;
  }
  if (
    atPosition < 1 ||
    dotPosition < atPosition + 2 ||
    dotPosition + 2 >= email.length
  ) {
    msg.innerHTML = "Please enter a valid email address.";
    return false;
  }
  msg.innerHTML = "Email is valid.";
}

function btnClick() {
  return vemail();
}

document.getElementById("submitBtn").addEventListener("click", vemail);
