<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <link rel="stylesheet" href="./Styles/palindrome.css">
</head>
<body>
    <div class="container">
        <h1>Palindrome Checker</h1>
        <form method="post" action="">
            <input type="text" name="text" placeholder="Enter a word or phrase..." required>
            <button type="submit">Check</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST["text"];

            $cleaned = strtolower(preg_replace("/[^a-z0-9]/", "", $text));
            $reversed = strrev($cleaned);

            if ($cleaned == $reversed) {
                echo "<p class='result success'> '{$text}' è un palindromo!</p>";
            } else {
                echo "<p class='result error'> '{$text}' non è un palindromo.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
