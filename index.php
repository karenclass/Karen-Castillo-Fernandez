<!DOCTYPE html>
<html>
<head>
    <title>Suma de Fresas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            background-color: wheat;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .apple-block {
            display: inline-block;
            vertical-align: top;
            margin: 20px;
        }
        img {
            max-width: 50px;
            height: auto;
        }
        .result-message {
            font-weight: bold;
            font-size: 24px;
            margin-top: 20px;
        }
        .happy-face, .sad-face {
            font-size: 40px;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Suma de Fresas</h1>

        <button id="generar">Generar</button>

        <script>
            var num1, num2, resultado;

            function generarNumeros() {
                // Generar dos números aleatorios entre 1 y 10
                num1 = Math.floor(Math.random() * 10) + 1;
                num2 = Math.floor(Math.random() * 10) + 1;
                
                // Calcular la suma de los números
                resultado = num1 + num2;

                // Mostrar números y manzanas
                mostrarNumerosYFresas();
            }

            function mostrarNumerosYFresas() {
                var num1Element = document.getElementById("num1");
                var num2Element = document.getElementById("num2");
                var appleBlockA = document.getElementById("apple-block-a");
                var appleBlockB = document.getElementById("apple-block-b");

                num1Element.textContent = num1;
                num2Element.textContent = num2;

                appleBlockA.innerHTML = '';
                appleBlockB.innerHTML = '';

                for (var i = 0; i < num1; i++) {
                    appleBlockA.innerHTML += '<img src="Fresita.png" alt="Fresa">';
                }

                for (var j = 0; j < num2; j++) {
                    appleBlockB.innerHTML += '<img src="Fresita.png" alt="Fresa">';
                }
            }
            
            

            function verificarResultado() {
                var respuestaInput = document.getElementById("respuesta");
                var resultMessage = document.getElementById("result-message");
                var respuesta = parseInt(respuestaInput.value);

                // Verificar si la respuesta es correcta
                if (respuesta === resultado) {
                    resultMessage.innerHTML = '<img src="caritafeliz.gif" alt="caritafeliz"> Respuesta Correcta';
                } else {
                    resultMessage.innerHTML = '<img src="triste.gif" alt="triste"> Respuesta Incorrecta';
                }
            }

            // Asociar la función de generar números al botón "Generar"
            var generarButton = document.getElementById("generar");
            generarButton.addEventListener("click", generarNumeros);
        </script>

        <div class="apple-block">
            <h2>Bloque A</h2>
            <label for="sumandoA">Número de Fresas: <span id="num1">0</span></label>
            <div id="apple-block-a"></div>
        </div>

        <div class="apple-block">
            <h2>Bloque B</h2>
            <label for="sumandoB">Número de Fresas: <span id="num2">0</span></label>
            <div id="apple-block-b"></div>
        </div>

        <form>
            <label for="respuesta">Ingresa la suma de las Fresas:</label>
            <input type="number" id="respuesta" required>
            <button type="button" onclick="verificarResultado()">Verificar</button>
        </form>

        <div class="result-message" id="result-message"></div>
    </div>
</body>
</html>