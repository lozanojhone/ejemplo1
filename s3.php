<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de Sorpresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Altura mínima de la ventana */
            background-image: url('https://i.pinimg.com/originals/59/94/b5/5994b5a21eadaf45cef834aba2c7e262.gif'); /* URL de tu imagen de fondo */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #fff; /* Color del texto por defecto */
        }
        header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semitransparente */
            color: #ff69b4; /* Rosa vibrante */
            text-align: center;
            padding: 15px 0;
            font-size: 1.8em;
        }
        .container {
            flex: 1;
            max-width: 800px;
            margin: 30px auto;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semitransparente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra para resaltar el contenedor */
        }
        h2 {
            color: #ff69b4; /* Rosa */
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #fff; /* Texto blanco */
            text-align: center;
        }
        .romantic {
            font-style: italic;
            color: #ff69b4; /* Rosa */
        }
        a {
            color: #ffd700; /* Amarillo dorado */
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        a:hover {
            color: #ff4500; /* Naranja */
        }
        footer {
            margin-top: auto; /* Empuja el footer hacia abajo */
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semitransparente */
            text-align: center;
            padding: 10px 0;
            color: blanchedalmond; /* Color claro para el texto del footer */
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <header>
        <h1>Mensaje de Sorpresa</h1>
    </header>

    <div class="container">
        <h2>¡Hola, mi Princesa 👸!</h2>
        <p><span class="romantic">Me gustas más que a ninguna otra persona en el mundo</span> y tengo una sorpresa especial para ti. ¿Estás lista para descubrirla?</p>
        <p>Haz clic en el siguiente enlace para conocer la sorpresa:</p>
        <p><a href="mensaje_secreto.php">¡Descubre la sorpresa!</a></p>
    </div>

    <footer>
        <p>Con todo mi amor, desde lo más profundo de mi corazón.</p>
    </footer>
</body>
</html>
