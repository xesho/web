<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para fer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #ff4081;
        }
        #buttons {
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            margin: 10px;
            border: none;
            color: white;
            border-radius: 5px;
        }
        #yesBtn {
            background-color: #4CAF50;
        }
        #noBtn {
            background-color: #f44336;
            position: absolute;
        }
        #message {
            margin-top: 30px;
            font-size: 22px;
            color: #ff4081;
            display: none;
        }
        img {
            max-width: 80%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>Oaaa ¿Bb bonita, quieres ser la enamorada de este nero?uu</h1>

    <!-- Imagen de gatitos románticos -->
    <img src="gato-cutt.gif" alt="gato-cutt">

    <div id="buttons">
        <button id="yesBtn" class="btn">Shi</button>
        <button id="noBtn" class="btn">Ño</button>
    </div>

    <p id="message">Sabía que dirías que sí, ¡tqm! uwu</p>

    <script>
        const noBtn = document.getElementById('noBtn');
        const yesBtn = document.getElementById('yesBtn');
        const message = document.getElementById('message');

        // Evento cuando se presiona el botón "Sí"
        yesBtn.addEventListener('click', function() {
            message.style.display = 'block';
        });

        // Movimiento del botón "No" cuando se intenta presionar
        noBtn.addEventListener('mouseover', function() {
            const x = Math.random() * (window.innerWidth - noBtn.offsetWidth);
            const y = Math.random() * (window.innerHeight - noBtn.offsetHeight);
            noBtn.style.left = `${x}px`;
            noBtn.style.top = `${y}px`;
        });
    </script>

</body>
</html>