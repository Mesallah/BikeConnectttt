<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Releases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php
  include("navbar.php");
?>

<!-- -------------------------------- MAIN CONTENT -------------------------------- -->

  <section class="savedbuildsspecs container-fluid">
    <div class="row ms-2 p-0 pt-5 m-0">
      <div class="col-lg-3">
          <div class="bike-details">
            <div>
              <h2 class="savedpart display-4">New Releases</h2>
              <h3 class="savedname fs-2">Standert Carbon Vortex </h3>
              <h3 class="savedprice mt-5">Price: Php 1000</h3>
            </div>
            <div class="buildspecs mt-5 fs-4">
              <p>Wheel Size: <span class="detailtext">29"</span></p>
              <p>Suspension: <span class="detailtext">120mm</span></p>
              <p>intended Use: <span class="detailtext">XC</span></p> <!-- di ko alam kung lahat ba may weight-->
            </div>
          </div>
          <div class="addtofav">
            <button class="savedviewspecification" data-bs-toggle="modal" data-bs-target="#specifications">Add to Favorites</button>
          </div>
          <div class="goback mt-3 mb-4">
            <button class="savedviewspecification" data-bs-toggle="modal" data-bs-target="#specifications">Go back</button>
          </div>
      </div>

      <div class="col-lg-6 d-flex justify-content-center align-items-center">
          <img src="pngs/asdasda.png" class="img-fluid" alt="Bike Image">
      </div>

      <div class="col-lg-3">
        <div>
          <h3 class="filterbrand"> Recommended:</h3>
        </div>
          <div class="scrollable-options mt-3">
              <img src="pngs/standert.png" class="img-fluid mb-2" alt="Option 1">
              <img src="pngs/standert.png" class="img-fluid mb-2" alt="Option 2">
              <img src="pngs/standert.png" class="img-fluid mb-2" alt="Option 3">
          </div>
      </div>      
    </div>
</section>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>