<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginform.css">
    <title>Login Form</title>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php
        	print_r($_POST);
        	$name = "root";
            $pass = "pass";
            if ($name != $_POST["username"]){
            	echo "<p>utente sbagliato!</p>";
            } else if ($pass !=  $_POST["password"]){
            	echo "PASS sbagliata";
            } else {
            	echo "ciao, " . $_POST["username"];
            }
            echo "ciao " . $_GET["username"];
        ?>
    </div>

    
</body>
</html>
