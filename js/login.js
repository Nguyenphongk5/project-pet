const inputName = document.querySelectorAll("input")[0];
const inputPasswword = document.querySelectorAll("input")[1];
const Button = document.querySelector("div.form-container button");

Button.addEventListener("click", function (e) {
  e.preventDefault();
  const userRegisterLocalStorage = JSON.parse(
    localStorage.getItem("userRegister")
  );

  if (inputName == "" || inputPasswword == "") {
    alert("please enter complete information");
  } else {
    if (
      inputName.value == userRegisterLocalStorage.name &&
      inputPasswword.value == userRegisterLocalStorage.password
    ) {
      swal({
        title: " Login successfuly ",
        icon: "success",
      }).then(() => {
        setTimeout(() => {
          window.location.href = "index.php";
        }, 1500);
      });
    } else {
      swal({
        title: " Login Fail ",
        icon: "error",
      });
      inputName.value = "";
      inputPasswword.value = "";
    }
  }
});
