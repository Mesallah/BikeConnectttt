<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Builds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accountstyles.css">
</head>
<body>

<?php
  include("navbar.php");
?>
<!-- -------------------------------- SIDEBAR -------------------------------- -->
<div class="d-flex">
  <div class="sidebar col-lg-2">
    <div class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 650px;">
      <ul class="nav nav-pills flex-column mt-4">
        <li class="nav-item mt-3">
          <a href="aaccount.php" class="nav-link" aria-current="page"> Account Details</a>
        </li>
        <li>
          <a href="#" class="nav-link mt-3 active" aria-current="page"> Saved Builds </a>
        </li>
        <li>
          <a href="afavorites.php" class="nav-link mt-3" aria-current="page"> Favorites </a>
        </li>
      </ul>
    </div>
  </div>
 
  <!-- -------------------------------- CONTENT -------------------------------- -->

    <div class="container-fluid content">
      <div class="row p-0 m-0">
        <div class="col-12 mt-4 ms-2">
            <h1 class="savedbuilds display-3">Saved Builds</h1>
        </div>
        <div class="row gx-4 mt-1 px-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
            <div class="options p-3">
              <h2 class="optionnames align-self-start">Standert Carbon Vortex</h2>
              <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
            <div class="options p-3">
              <h2 class="optionnames align-self-start">Tuff Cyclone Pro</h2>
              <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-3">
            <div class="options p-3">
              <h2 class="optionnames align-self-start">Boulevard Stellar Comfort</h2>
              <img class="images img-fluid w-75" src="pngs/standert.png" alt="image shown">
            </div>
          </div>
        </div>
    </div>
    </div> 
  



  

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>