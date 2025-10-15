<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Analisi del Testo</title>
    <link rel="stylesheet" href="./Styles/Analisi.css">
</head>
<body>

<div class="container">
    <h1> Analisi del Testo</h1>
    <form method="post">
        <label for="testo">Inserisci un testo:</label><br>
        <textarea name="testo" id="testo" rows="6" cols="40" placeholder="Scrivi qui..."></textarea><br>
        <input type="submit" value="Analizza">
    </form>

    <?php
    if (isset($_POST["testo"])) {
        $testo = strtolower($_POST["testo"]);
        $vocali = 0;
        $consonanti = 0;
        for ($i = 0; $i < strlen($testo); $i++) {
            $c = $testo[$i];
            if (strpos("aeiou", $c) !== false) {
                $vocali++;
            } elseif (ctype_alpha($c)) {
                $consonanti++;
            }
        }
        
        $numeri = 0;
        for ($i = 0; $i < strlen($testo); $i++) {
            if (ctype_digit($testo[$i])) {
                $numeri++;
            }
        }

        $parole = str_word_count($testo, 1);
        $numero_parole = count($parole);

        $frequenza = array_count_values($parole);

        echo "<div class='risultati'>";
        echo "<h2>Risultati</h2>";
        echo "<p><strong>Vocali:</strong> $vocali</p>";
        echo "<p><strong>Consonanti:</strong> $consonanti</p>";
        echo "<p><strong>Numeri:</strong> $numeri</p>";
        echo "<p><strong>Parole totali:</strong> $numero_parole</p>";

        echo "<h3>Frequenza delle parole:</h3>";
        echo "<ul>";
        foreach ($frequenza as $parola => $conta) {
            echo "<li><strong>$parola</strong>: $conta</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
