<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="id.css">
</head>
<body>
    <div class="container">
        <h2>S'identifier</h2>
        <form action="loginProcess.php" method="post">
        <input type="text" placeholder="Email..." required><br>
        <input type="password" placeholder="Mot de passe..." required><br>
        <input type="submit" value = "login">
        </form>
        <p>Si vous avez pas de compte?<a href="inscription.php">Inscrivez-vous</a></p>
    </div>
</body>    
</html>