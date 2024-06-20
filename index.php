<!-- PHP -->
<?php
$password_length = 0;
$password = "";

if (!empty($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);
}

$valid_params = [
    'char' => true,
    'number' => true,
    'simbol' => true
];

$valid_simbols = ['-', '_', '.', ',', '@', '?'];

$params_to_use = [];

foreach ($valid_params as $key => $value) {
    if ($value) {
        $params_to_use[] = $key;
    }
}

function random_char()
{
    $char_int_range = [65, 90];
    $use_lowercase = random_int(0, 1);
    if ($use_lowercase == 1) {
        $char_int_range = [97, 122];
    }
    $char_int = random_int($char_int_range[0], $char_int_range[1]);
    $char = chr($char_int);

    return $char;
}

function random_simbol($valid_simbols)
{
    return $valid_simbols[random_int(0, count($valid_simbols) - 1)];
}

if ($password_length > 0 && count($params_to_use) > 0) {
    for ($i = 0; $i < $password_length; $i++) {
        $temp_param = $params_to_use[random_int(0, count($params_to_use) - 1)];
        if ($temp_param == "char") {
            $password = $password . random_char();
        } elseif ($temp_param == "number") {
            $password = $password . random_int(0, 9);
        } elseif ($temp_param == "simbol") {
            $password = $password . random_simbol(($valid_simbols));
        } else {
            $password = $password . "#";
        }
    }
}

echo $password


?>

<!-- /PHP -->


<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="." method="GET">
        <input type="text" name="password_length" placeholder="Inserisci il numero dei caratteri">
        <button>Genera Password</button>
    </form>
</body>

</html>

<!-- /HTML -->