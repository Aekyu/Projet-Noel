const chk = document.getElementById("chk");

chk.addEventListener("change", () => {
  document.body.classList.toggle("theme1");
  document.querySelector("#retourInscription").classList.toggle("theme1");
});
