<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="Authentication-Form" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Sign In">
    </form>
    <a data-mode="sign-up" id="btn-mode" href="#">Đăng <span id="lbl-mode">Ký</span></a>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </script>

    <script src="scripts.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

?>