<?php

// filter_var_array => renvoie la valeur filtrée lorsque la clé existe
// filter_var_array => `null` pour les clés qui n'existent pas
// filter_var_array => `false` pour les clés qui ne respectent pas les conditions/filtres

// ===> simulation de la variable superglobale $_POST
$POST = [
    'regNom' => 'sqdqsd',
    'regPrenom' => 'Jean',
    // 'regAge' => [1, 2, 3],
    'regAge' => 36,
    'regEmail' => 'sdsd',
];
var_dump($_POST);
$filteredInputs = filter_input_array(INPUT_POST, [
    'regNom' => [
        'filter' => FILTER_DEFAULT,
        'flags' => FILTER_REQUIRE_SCALAR,
    ],
    'regPrenom' => [
        'filter' => FILTER_DEFAULT,
        'flags' => FILTER_REQUIRE_SCALAR,
    ],
    'regAge' => [
        'filter' => FILTER_VALIDATE_INT, // Filtre pour entier
        'flags' => FILTER_REQUIRE_SCALAR,
    ],
    'regEmail' => [
        'filter' => FILTER_VALIDATE_EMAIL, // Filtre pour e-mail
        'flags' => FILTER_REQUIRE_SCALAR,
    ],
]);

var_dump($filteredInputs);

if (in_array(null, $filteredInputs, true)) // `true` pour que les vérifications des types soient stricts
{
    echo "Une entrée est manquante.";
}
elseif (in_array(false, $filteredInputs, true)) // `true` pour que les vérifications des types soient stricts
{
    echo "Une entrée est fausse.";
}
elseif (!preg_match("/[a-zA-Z]/", $filteredInputs['regPrenom']))
{
    echo 'Prenom faux';
}
else
{
    echo "Tout est juste";
}