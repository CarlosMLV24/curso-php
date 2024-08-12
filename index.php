<?php
// phpinfo();
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticion
y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);

//$result = file_get_contents(API_URL); //si solo quieres hacer un GET de una API

// if (curl_errno($ch)) {
//     echo 'Error:' . curl_error($ch);
// } else {
//     echo 'Respuesta: ' . $response;
// }

curl_close($ch);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de Marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

</html>

<main>
    <!-- <pre style="font-size: 10px; overflow:scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre> -->
    <section>
        <img src="<?= $data["following_production"]["poster_url"]; ?>" width="200" alt="Poster de <?= $data["following_production"]["title"] ?>"style="border-radius: 16px"/>
    </section>

    <hgroup>
        <h2><?= $data["following_production"]["title"]; ?> se estrena en <?= $data["following_production"]["days_until"]; ?> dias</h2>
        <p>Fecha de estreno: <?=$data["following_production"]["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["title"]; ?></p>
    </hgroup>
</main>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>