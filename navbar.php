<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navbar</title>
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/icon/fontawesome-free-6.1.1-web/css/all.min.css">
  <link rel="stylesheet" href="style.css">
   
</head>
<body>
  <header>
    <nav class="navbar fixed-top">
      <a class="navbar-brand" href=""><img src="./asset/images/Sans titre.png" alt=""><span>ecole superieur polytechnique antananarivo</span> </a>
      <ul class="nav">
        <li class="nav-items"><a class="nav-link" href="">home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          concours
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulaire.html">formulaire d'inscription</a></li>
          </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="actualites.html">actualite </a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          formation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="mention.html">mention</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         devenir etudiant(e)
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="mention.html">-Mention</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apropos.html">apropos</a>
      </li>
        
      </ul>
      <i class="fa fa-bars hamburger"></i>
      <i class="fa fa-user user"></i>
    </nav>
  </header>
  <script src="./asset/js/bootstrap.bundle.min.js"></script>
        <script src="./asset/js/aos.js"></script>
        <script>
          AOS.init({
            offset:400,
            duration:1000,
            easing:'ease',
            delay:0
          }
            
          )
        </script>

        <script src="./asset/js/jquery.min.js"></script>
        <script src="./asset/js/offcanva.js"></script>
        <script src="./asset/js/core.js"></script>
        <script src="./asset/js/textanime.js"></script>
        <script src="./asset/js/app.js"></script>

      

</body>
</html>