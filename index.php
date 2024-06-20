<!-- PHP (Includiamo il file function.php) -->
<?php
require __DIR__ . '/functions.php';
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