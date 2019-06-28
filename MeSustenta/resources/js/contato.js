
        let formulario = document.querySelector("#form-contato");
        let variaveis = document.querySelectorAll("input");
        let destinar = document.querySelector("button");
        // function valida(){
        //     console.log(formulario);
        // }

        // document.getElementById('bt_submit').onclick = valida;

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
                document.getElementById('form-cadastro').submit();
            }

        }
