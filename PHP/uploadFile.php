<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple File Upload</title>
    <link rel="stylesheet" href="./Styles/uploadFile.css">
</head>
<body>
    <div class="container">
        <h1>Upload a File</h1>

        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit" name="send">Upload</button>
        </form>

        <?php
        if (isset($_POST["send"])) {
            // Prende le informazioni del file
            $fileName = $_FILES["file"]["name"];
            $fileSize = $_FILES["file"]["size"];
            $fileType = $_FILES["file"]["type"];

            echo "<p class='success'>File ricevuto correttamente!</p>";
            echo "<p><strong>Nome:</strong> $fileName</p>";
            echo "<p><strong>Dimensione:</strong> $fileSize byte</p>";
            echo "<p><strong>Tipo:</strong> $fileType</p>";
        }
        ?>
    </div>
</body>
</html>
