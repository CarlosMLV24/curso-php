<?php

$name = 'Miguel';
$isDev = true;
$age = 18;

$isOld = $age > 48;



// if ($isOld) {
//     echo "<h2>Eres viejo</h2>";
// } else {
//     echo "<h2>Eres joven</h2>";

// }

define('Logo_url', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXalRyF7J7QRLkJfMwCMqA47UUDCFdHJ-dFQ&s');

$output = "Hola $name, con edad de $age. ";

$outoputAge = $isOld
? 'Eres joven'
: 'Eres viejo';

$outoputAge1 = match (true) {
    $age < 2 => 'Eres un bebe',
    $age < 10 => 'Eres un niño ',
    $age < 18 => 'Eres un adolecente',
    $age === 18 => 'Eres mayor de edad',
    default => 'Eres un adulto'
};

$bestLanguages = ["php", "python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "Typescript";

$person = [
    "name" => "miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["php", "javascript", "python"],
];

const NOMBRE = 'Miguel';

// $name = $age . $name;


var_dump($name);
var_dump($isDev);
var_dump($age);

?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>

<?php if ($isOld) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev</h2>
<?php else : ?>
    <h2>eres joven</h2>
<?php endif; ?>


<h1>
<?= $output; ?>

</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>