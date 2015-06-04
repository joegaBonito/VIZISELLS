<?php
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['ID'];
    $password = $_POST['PW'];

/*if(id and passwords are matched) {*/

  header('Location:login.php');
// } 
   
  } else {
?>

<!--Calls Header Section -->
<?php require "/header.php"; ?>

  <!--Panel for each category-->
        <div class="row">
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
               <a href="#">EASY SELLS~</a>
            </div>
          </div>
  <!--1-->        
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
                <a href="/VS/vizi-cars.php">Cars</a>
            </div>
          </div>
  <!--2-->        
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Jobs</a>
            </div>
          </div>
  <!--4-->        
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Services</a>
            </div>
          </div>
  <!--4-->        
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Activities</a>
            </div>
          </div>
  <!--5-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Meet Ups</a>
            </div>
          </div>
  <!--6-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Home Goods</a>
            </div>
          </div>
  <!--7-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Education</a>
            </div>
          </div>
  <!--8-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Food</a>
            </div>
          </div>
  <!--9-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Electronics</a>
            </div>
          </div>
  <!--10-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Merchandise</a>
            </div>
          </div>
            <!--11-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">House on Sale</a>
            </div>
          </div>
            <!--12-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Rent</a>
            </div>
          </div>
            <!--14-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Fashion</a>
            </div>
          </div>
            <!--14-->     
          <div class="large-4 medium-4 small-4 columns">
            <div class="callout panel">
              <a href="/VS/vizi-cars.php">Others</a>
            </div>
          </div>

<!--Calls footer-->
<?php require "/footer.php"; ?>

<?php 
  }
?>