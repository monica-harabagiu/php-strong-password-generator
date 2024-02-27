<?php

function generatePassword($length) {

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_+=~`[]{}|;:,.<>?';

    $all_characters = $lowercase . $uppercase . $numbers . $symbols;

    $total_characters = strlen($all_characters);

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random_index = mt_rand(0, $total_characters - 1);
        $password .= $all_characters[$random_index]; 
    }

    return $password;
}

$password_length = isset($_GET['password_length']) ? intval($_GET['password_length']) : '' ;

$password = generatePassword($password_length);

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
        <form action="index.php" method="get" class="w-25">
            <div class="mb-3">
                <label for="password-length" class="form-label">Password Length</label>
                <input type="number" class="form-control" id="password-length" name="password_length">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h5 class="mt-5">Generated password</h5>
    
        <div><?php echo $password; ?></div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>