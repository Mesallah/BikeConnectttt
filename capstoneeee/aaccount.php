<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
          <a href="#" class="nav-link active" aria-current="page"> Account Details</a>
        </li>
        <li class="nav-item">
          <a href="asavedbuilds.php" class="nav-link  mt-3" aria-current="page"> Saved Builds </a>
        </li>
        <li class="nav-item">
          <a href="afavorites.php" class="nav-link mt-3" aria-current="page"> Favorites </a>
        </li>
      </ul>
    </div>
  </div>


<!-- -------------------------------- CONTENT -------------------------------- -->
	<div class="content p-4 col-lg-10">
		<div class="container-fluid content">
        <div class="row pt-5">
          <div class="col-lg-3 p-3">
            <img src="svgfiles/person-svgrepo-com.svg" alt="svg file here" class="accountpicsvg">
          </div>
          <div class="accountinfo col-lg-9 mt-5">
            <h1 class="display-3">Nico Dimatulac</h1>
            <button class="editaccount" data-bs-toggle="modal" data-bs-target="#editaccount">Edit Account</button>
            <div class="mt-5 fs-5">
              <p>Username: Mesallah</p>
              <p>Location: Quezon City</p>
              <p>Email: nico.dimatulac@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- -------------------------------- EDIT ACCOUNT MODAL -------------------------------- -->

<div class="modal fade modal1" id="editaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-1">
        <div class="modal-header p-3">
          <h5 class="modal-title" id="loginlabel">Edit Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container-fluid p-2">
          <div class="row mt-1 p-2">
            <div class="col-md-12 col-sm-12">
              <div class="d-flex align-items-center justify-content-center">
                <img src="svgfiles/person-svgrepo-com.svg" alt="svg file here" class="accountpicsvgtwo">
                <p class="changephoto fs-4 ms-3">Change Photo</p>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <!--unang column-->
            <div class="col-lg-6 mb-3">
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="firstname" class="login form-label fs-4">First Name:</label>
                <input type="text" class="boxes form-control" id="firstname" name="firstname" placeholder="Enter your First Name" required>    
              </div>
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="username" class="login form-label fs-4">Username:</label>
                <input type="text" class="boxes form-control" id="username" name="username" placeholder="Enter your Username" required>    
              </div>
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="location" class="login form-label fs-4">Location:</label>
                <input type="text" class="boxes form-control" id="location" name="location" placeholder="Enter your Location" required>    
              </div>
            </div>

            <!--kabilang column-->
            <div class="col-lg-6 mb-3">
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="lastname" class="login form-label fs-4">Last Name:</label>
                <input type="text" class="boxes form-control" id="lastname" name="lastname" placeholder="Enter your Last Name" required>    
              </div>
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="email" class="login form-label fs-4">Email:</label>
                <input type="text" class="boxes form-control" id="email" name="email" placeholder="Enter your Email" required>    
              </div>
              <div class="accountdets col-lg-12 d-flex align-items-center justify-content-around">
                <label for="password" class="login form-label fs-4">Password:</label>
                <input type="password" class="boxes form-control" id="password" name="password" placeholder="" required>    
              </div>
            </div>
            <div class="mt-4 d-flex justify-content-center">
              <button type="button" class="done">Done</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
  

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>