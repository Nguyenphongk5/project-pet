const inputName = document.querySelectorAll("input")[0];
const inputEmail = document.querySelectorAll("input")[1];
const inputPasswword = document.querySelectorAll("input")[2];

const container = document.querySelector(".container");
const loader = document.querySelector(".loader");

setTimeout(() => {
  loader.style.display = "none";
  container.style.display = "flex";
}, 2000);

const Button = document.querySelector("div.form-container button");
Button.addEventListener("click", function (event) {
  event.preventDefault();

  const userRegister = {
    name: inputName.value,
    email: inputEmail.value,
    password: inputPasswword.value,
  };

  if (
    inputName.value == "" ||
    inputEmail.value == "" ||
    inputPasswword.value == ""
  ) {
    alert("Please enter complete infomation");
  } else {
    async function postData(urlApi = "", data = {}) {
      const config = {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data),
      };

      const respon = await fetch(urlApi, config);
      return respon.json();
    }

    const res = postData(
      "https://656708c964fcff8d730f9b4b.mockapi.io/api/login/users",
      userRegister
    );
    res.then((data) => {
      localStorage.setItem("userRegister", JSON.stringify(data));
    });
    swal({
      title: " Register  successfuly ",
      icon: "success",
    }).then(() => {
      setTimeout(() => {
        window.location.href = "login.php";
      }, 1500);
    });
  }
});
