<?php require './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Classificados</a>
    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
            <li class="nav-item">
                <a class="nav-link">Meus anuncios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Sair</a>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a class="nav-link">Cadastre-se</a>
            </li>
            <li>
                <a class="nav-link">Login</a>
            </li>        
        <?php endif; ?>
    </ul>
</nav>