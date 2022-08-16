const btn = document.getElementById("BtnSubmit");
const inputs = document.querySelectorAll("input");
const msgErro = document.getElementById("msgErro");

btn.addEventListener("click", function() {
    inputs.forEach(function (e) {
        if(e.value == "") {
            event.preventDefault()
            msgErro.innerHTML = ' <p>Por favor, complete os campos!</p>';
        }
    })
})