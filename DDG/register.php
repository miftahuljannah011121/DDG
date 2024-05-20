<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a href="index.php"><button>Back home</button></a>
    <h1>Halaman Register</h1>
    <form action="handler.php" method="post">
        <input type="text" name="username" placeholder="Ketik username disini.." required><br>
        <input type="email" name="email" placeholder="Ketik email disini.." required><br>
        <input type="password" name="password" placeholder="Ketik password disini.." required><br>
        <button type="submit" name="aksi" value="register">Register!</button>
    </form><br>
    <a href="login.php">Login disini</a>
</body>
</html>