<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://u+se.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <header>
      <nav>
            <ul>
                <li><a href="index.php">Hack-oeil</a></li>
                <li><a href="index.php?page=contact">Con-tact</a></li>
                <li><a href="index.php?page=equipe">Equipe</a></li>
            </ul>
        </nav>
    </header>
    <main>
         <?php 
require ('inc/contentteam.php');
       ?>
    </main>
    <footer>
<?php
       require('inc/contentfooter.php')
?>
    </footer>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>