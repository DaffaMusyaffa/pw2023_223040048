let searchform = document.querySelector(".search-form");
document.querySelector("#search-btn").onclick = function () {
  searchform.classList.toggle("active");
};
document.querySelector("#menu-btn").onclick = function () {
  document.querySelector("nav").classList.toggle("active");
  searchform.classList.remove("active");
};
window.onscroll = function () {
  document.querySelector("nav").classList.remove("active");
  searchform.classList.remove("active");
};
