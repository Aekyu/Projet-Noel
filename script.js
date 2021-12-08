let form = document.querySelector("#form");
let inputName = document.querySelector("#Name");
let errorName = document.querySelector("#errorName");

form.addEventListener("submit", e => {
    e.preventDefault();
    console.log("ok")
    let div = document.createElement("div");
                if (inputName.value.trim() === "") {
                    errorName.textContent = "vous devez saisir un nom"
                    errorName.style.display = "block"
                }
            })