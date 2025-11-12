function Vname() {
  let name = document.getElementById("nameInput").value;
  let msg = document.getElementById("msg");

  if (name === "") {
    msg.innerHTML = "Please enter your name.";
    return false;
  }

  if (name.length < 2) {
    msg.innerHTML = "Name must be at least 2 characters long.";
    return false;
  }

  for (let i = 0; i < name.length; i++) {
    const element = name[i];
    if (
      !(
        (element >= "A" && element <= "Z") ||
        (element >= "a" && element <= "z") ||
        element == "-" || element == "."
      )
    ) {
      msg.innerHTML = "Name can only contain letters and spaces.";
      return false;
    }
  }

  msg.innerHTML = "Name is valid.";
}


function btnClick() {
  return Vname();
}

document.getElementById("submitBtn").addEventListener("click", btnClick);
