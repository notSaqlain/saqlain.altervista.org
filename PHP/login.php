<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./Styles/loginform.css">
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
            $json = file_get_contents("./Data/utenti.json");

            if($json === false){
                die("Error reading the JSON file");
            }

            $json_data = json_decode($json, true);

            if($json_data === null){
                die("Error reading the JSON file");
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $flag = false;
              foreach($json_data["utenti"] as $key => $value){
                  if($value["username"] == $_POST["username"]){
                      if($value["password"] == $_POST["password"]){
                          $flag = true;
                          echo "<p>Ciao, " . $value["username"] . "</p>";
                      }
                  }
              }
              if($flag == false){
                  echo "<p>Credenziali invalide!</p>";
              }
            }
          ?>
      </div>


  </body>
</html>
