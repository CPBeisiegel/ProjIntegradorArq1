
        let formulario = document.querySelector("#form-contato");
        let variaveis = document.querySelectorAll(".conts");
        let destinar = document.querySelector("btn-conts");
        

        formulario.onsubmit = function (event) {

            event.preventDefault();
            numeroEnviado = 0;
            for (input of variaveis) {
                if (input.value == "") {
                    input.style.border = "1px solid red";
                    input.setAttribute("placeholder", "Preencha os dados corretamente");
                } else {
                    input.style.border = "1px solid #ccc";
                    numeroEnviado++;
                }
            }

            if (numeroEnviado == variaveis.length) {
                document.getElementById('form-contato').submit();
            }

        }
