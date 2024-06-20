<!-- PHP -->
<?php
$password_length = 0;

if (!empty($_GET['password_length'])) {
    $password_length = intval($_GET['password_length']);
}

if ($password_length > 0) {
    echo "genero una password di lunghezza: $password_length";
}

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