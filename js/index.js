const p = document.querySelector("p.username");
const buttonLogout = document.querySelector(".user button");

const userRegisterLocalStorage = JSON.parse(
  localStorage.getItem("userRegister")
);

p.innerHTML = userRegisterLocalStorage?.name;
buttonLogout.addEventListener("click", () => {
  localStorage.removeItem("userRegister");
  window.location.href = "register.php";
});

if (userRegisterLocalStorage == undefined) {
  window.location.href = "register.php";
}

//slider
const slider = document.querySelectorAll(".slide-container");

let index = 0;

function next() {
  slider[index].classList.remove("active");
  index = (index + 1) % slider.length;
  slider[index].classList.add("active");
}

function prev() {
  slider[index].classList.remove("active");
  index = (index - 1 + slider.length) % slider.length;
  slider[index].classList.add("active");
}
//slildeBar

// c1
// const nabar = document.querySelector(".navbar");

// const iconBar = document.querySelector(".fa-bars");
// const iconClose = document.querySelector(".fa-times");

// iconClose.style.display = "none";

// iconBar.addEventListener("click", function () {
//   nabar.style.left = "0";
//   iconBar.style.display = "none";
//   iconClose.style.display = "block";
// });

// iconClose.addEventListener("click", function () {
//   nabar.style.left = "-120%";
//   iconBar.style.display = "block";
//   iconClose.style.display = "none";
// });

// c2

const nabar = document.querySelector(".navbar");

const icon = document.querySelector("#menu-bar");

icon.addEventListener("click", () => {
  icon.classList.toggle("fa-times");
  nabar.classList.toggle("active");
});
