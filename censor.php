<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>PHP Badwords | Risultato</title>
</head>

<body class="bg-info bg-opacity-25 text-center p-5">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $paragraph = $_POST['paragraph'];
        $word = $_POST['word'];

        echo "<h2>Paragrafo originale:</h2>";
        echo "<p>$paragraph</p>";
        echo "<p>Lunghezza: " . strlen($paragraph) . "</p>";

        $censoredWord = str_ireplace($word, '***', $paragraph);

        echo "<h2>Parola censurata:</h2>";
        echo "<p>$censoredWord</p>";
        echo "<p>Lunghezza: " . strlen($censoredWord) . "</p>";
    } else {
        echo "<p>Errore: il modulo non è stato inviato correttamente.</p>";
    }
    ?>
</body>

</html>