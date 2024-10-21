<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari i Contingut PHP</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/vector-gratis/fondo-abstracto-efecto-silenciado-difuminado_1048-6632.jpg'); /* Imatge de fons */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            color: #333333;
            text-align: center;
            padding-top: 50px;
            position: relative;
        }

        h1 {
            color: #2e8b57;
            font-family: 'Georgia', serif;
            font-size: 3em;
            transition: transform 0.3s ease-in-out;
        }

        h1:hover {
            transform: scale(1.1); /* Animació al passar el ratolí: escalar */
        }

        .php-output {
            font-size: 1.5em;
            color: #8b0000;
            font-family: 'Courier New', monospace;
            transition: color 0.3s ease-in-out;
            margin-top: 30px;
        }

        .php-output:hover {
            color: #2e8b57;
        }

        .image-container img {
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 50px;
        }

        .image-container img:hover {
            transform: scale(1.05);
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 50px;
        }

        label {
            font-size: 1.2em;
            color: #333;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            font-size: 1em;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 80%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn-google {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-google:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- Botó que redirigeix a Google (posicionat a dalt a la dreta) -->
    <button class="btn-google" onclick="window.location.href='https://www.google.com';">
        Ves a Google
    </button>

    <h1>Benvingut a la meva pàgina PHP!</h1>

    <div class="image-container">
        <img src="https://fotografias.lasexta.com/clipping/cmsimages01/2022/08/09/3FFA8546-05CE-4608-9B69-6602D02A4C58/cachorro-pomsky_103.jpg?crop=1183,887,x0,y0&width=1200&height=900&optimize=low&format=webply" alt="Imatge de Pomsky" />
    </div>
    
    <div class="php-output">
        <?php
            echo "Hola món<br>";
            echo "Sóc en isvepi.fjeclot.net";
        ?>
    </div>

    <?php
    // Si s'ha enviat el formulari, guardar les dades i mostrar el missatge
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recollir dades del formulari
        $nom = htmlspecialchars($_POST['nom']);
        $edat = htmlspecialchars($_POST['edat']);

        // Obrir o crear un fitxer per escriure
        $fitxer = fopen("registres.txt", "a");

        // Escriure les dades en el fitxer
        fwrite($fitxer, "Nom: $nom, Edat: $edat\n");

        // Tancar el fitxer
        fclose($fitxer);

        // Mostrar el missatge de confirmació
        echo "<p>Les dades s'han guardat correctament!</p>";
    } else {
    ?>
        <!-- Formulari només es mostra si no s'ha enviat encara -->
        <div class="form-container">
            <form action="" method="POST">
                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="edat">Edat:</label><br>
                <input type="number" id="edat" name="edat" required><br><br>

                <input type="submit" value="Enviar">
            </form>
        </div>
    <?php
    }
    ?>

</body>
</html>
