<?php
require_once 'function.php';
show();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Word Generator</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Word Generator</h1>
            <form action="index.php" method="get">
                <input type="text" name="number" placeholder="Enter number">
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
