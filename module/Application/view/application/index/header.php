<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIZISELLS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="/signUpPopUp.js"></script>
  </head>
  <body>
    
    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to VIZISELLS</h1>
      </div>
    </div>
<div class = "row">
  <div class ="large-12 columns">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Home</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
  <li><a href="#" data-reveal-id="myModal">Sign In</a></li>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Log In</h2>
  <p class="lead">Easy~ Vizi~</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  <!--Form for login in-->
<form action = "vizi.php" method="POST">
  <div class="row">
        <div class="small-4 columns">
          <div class ="visiID">
              <label for="ID">ID: </label>
              <input type="text" name="ID" id="ID" placeholder="Type your ID..." />
          </div>
        </div>
    </div>

    <div class="row"> 
        <div class="small-4 columns">
          <label for="PW" >PW: </label>
          <input type="password" name="PW" id="PW" placeholder="Type your password..." />
      </div>
    </div>

    <div class="row"> 
        <div class="small-4 columns">
          <input type="submit" value="Login" name="Login">
      </div>
    </div>
  </form>
</div>
    <!-- Sign In changes to My account once signed in.
      <li class="has-dropdown">
        <a href="#">My Account</a>
        <ul class="dropdown">
          <li><a href="#">User Profile</a></li>
        </ul>
      </li>
    -->
      <li><a href="#">About Us</a></li>
    </ul>

  </section>
</nav>
</div></div>