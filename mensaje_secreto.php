<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorpresa Revelada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Color de fondo de la página */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Establece el mínimo de altura de la ventana */
            background-image: url('https://i.pinimg.com/originals/17/3c/5a/173c5a32e701b84866d29c5f8da14a44.gif'); /* URL de tu imagen de fondo */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        header, footer {
            background-color: transparent; /* Fondo completamente transparente */
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            flex: 1; /* Ocupa todo el espacio disponible verticalmente */
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: none; /* Elimina la sombra alrededor del contenedor */
            background-color: transparent; /* Fondo del contenedor completamente transparente */
        }

        h2 {
            color: #fff; /* Color de texto blanco para el título */
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #fff; /* Color de texto blanco */
        }

        .romantic {
            font-style: italic;
            color: #ff69b4; /* Rosa */
        }

        .btn-regresar {
            background-color: #ff69b4; /* Color de fondo del botón */
            color: #fff; /* Color del texto del botón */
            border: none; /* Sin borde */
            padding: 10px 20px; /* Espaciado interno */
            font-size: 1em; /* Tamaño de fuente */
            border-radius: 5px; /* Borde redondeado */
            cursor: pointer; /* Cursor al pasar por encima */
            transition: background-color 0.3s ease; /* Transición suave */
            text-decoration: none; /* Quitar subrayado si es un enlace */
            display: inline-block; /* Mostrar como bloque en línea */
        }

        .btn-regresar:hover {
            background-color: #d946a6; /* Cambio de color al pasar el cursor */
        }

        footer {
            margin-top: auto; /* Mueve el pie de página al final de la ventana */
            width: 100%;
            background-color: transparent; /* Fondo completamente transparente */
            padding: 10px 0;
        }

        footer p {
            color: #fff; /* Color de texto blanco del pie de página */
        }
    </style>
</head>
<body>
    <header>
        <h1>Sorpresa Revelada</h1>
    </header>

    <div class="container">
        <h2>¡Sorpresa, mi vida!</h2>
        <p>¡Hola Nancy Mariñas! Solo quería recordarte lo especial que eres para mí y tu amor ilumina cada día de mi vida. 😊💕:</p>
        <p><span class="romantic">Eres la luz de mi vida, mi razón de ser. ¿Quieres ser mi compañera en este viaje llamado amor?</span></p>
        <p>Espero tu respuesta con el corazón en la mano. 😊</p>

        <!-- Ejemplo de botón de regresar -->
        <a href="http://localhost/nancy/index.html" class="btn-regresar">Regresar</a>
    </div>

    <footer>
        <p>Con todo mi amor y cariño, desde lo más profundo de mi corazón.</p>
    </footer>
</body>
</html>
