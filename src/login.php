<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>
<body>
    <nav>
    <ul>
        <div class="nav-left">
            <img src="../public/images/logo-company.png" alt="logo">
        </div>
        <div class="nav-right">
            <a href="homepage.php">HOMEPAGE</a>
            <a href="contact.html">CONTACT</a>
        </div>
    </ul>
    </nav>
    <div class="login">
    <h1 class="login-header">LOGIN</h2>
    <form action="auth.php" method="post">
        <div class="input">
            <label for="log-email" style=" font-weight: bold; font-size: 20px;">Email</label></br>
            <input type="email" placeholder="email" name="email" id="log-email" required><br>
        </div>
        <div class="password">
            <label for="log-password" style="font-weight: bold; font-size: 20px;">Password</label></br>
            <input type="password" placeholder="password" name="password" id="log-password" required>
        </div>
        <div class="logbtn">
            <button type="submit">LOGIN</button>
        </div>
    </form>
    </div>
</body>
</html>