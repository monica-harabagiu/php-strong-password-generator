<?php

include_once __DIR__ . '/functions.php';

session_start();

if (isset($_GET['password_length'])) {

    $password_length = intval($_GET['password_length']);
    $password = generatePassword($password_length);
    
    $_SESSION['generated_password'] = $password;
    
    header('Location: /display_password.php');
}


?>



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-5">
        <form action="display_password.php" method="get" class="w-25">
            <div class="mb-3">
                <label for="password-length" class="form-label">Password Length</label>
                <input type="number" class="form-control" id="password-length" name="password_length">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>