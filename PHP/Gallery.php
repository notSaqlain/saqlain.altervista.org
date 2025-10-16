<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
</head>
<body>

    <h1>Directory</h1>

    <?php
    $dir = "./";
    $files = scandir($dir);
    foreach ($files as $key => $val) {
        if ($val=='.' || $val=='..') continue;
        echo "<p>$key: <a href='".$val."'>$val</a></p>";
    }
    ?>

</body>
</html>