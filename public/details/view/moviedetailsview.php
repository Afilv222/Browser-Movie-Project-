<?php

   require "../movie-details.php"; 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/moviedetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../header/css/header.css"/>
    <!-- ANIMATION HREF https://michalsnik.github.io/aos/ -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="../../header/js/hamBurgerMenu.js"></script>
    <title>Document</title>
</head> 
<body>
  
     <?php require "../../header/testHeader.php"?> 
    <div class="bodyContainer" style ="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?= $movieDetails-> backdropPath()?>);">
        
         
       <!-- partials --> 
       <?php require "../partials/movie-details.content.php"?>
      
    <script>
        const heart = document.querySelector("fa-heart");
        heart.addEventListener('click', (e) => {
            if(e.target.classList.contains('icon-heart-empty')) {
                e.target.classList.remove('icon-heart-empty'); 
                e.target.classList.add('icon-heart');
                e.target.style.color="red";
            }
            else {
                e.target.classList.remove('icon-heart');
                e.target.classList.add('icon-heart-empty');
                e.target.style.color="rgba(255, 255, 255, 0.753)";
            }
        })
    </script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/movieDetails.js"></script>
<script>
  AOS.init();
</script> 
    
</body>
</html>