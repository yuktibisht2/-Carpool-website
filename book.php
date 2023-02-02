<?php
include ("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CARPOOL</title>
    <link rel="icon" href="image/1.png" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="D:\yuktiminicarpool\Carpool-main\carpool\css\styles.css">
  </head>
  <body>
    <a href="index.php" style="text-decoration: none;"><h2>CARPOOL</h2></a>
    <form class="row g-3">
      <div class="col-md-6">
        <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" name="inputName">
      </div>
      <div class="col-md-6">
        <label for="inputNumber" class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="inputNumber">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Traveling from</label>
        <input type="text" class="form-control" name="inputAddress" placeholder="Banjaravala,Uttarakhand">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Traveling To</label>
        <input type="text" class="form-control" name="inputAddress2" placeholder="Graphic Era Hill University">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" name="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select name="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>Uttarakhand</option>
          <option>Delhi</option>
          <option>Mumbai</option>
          <option>Punjab</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" name="inputZip">
      </div>
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Date</label>
        <input type="date" class="form-control" name="inpuDate">
      </div>
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Time</label>
        <input type="time" class="form-control" name="inputTime">
      </div>
      <div class="col-md-3">
        <label for="inputZip" class="form-label">Number of people</label>
        <input type="number" class="form-control" name="inputPeople">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gridCheck">
          <label class="form-check-label" for="gridCheck">
           I agree to term and conditions!!
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Find a Ride</button>
      </div>
    </form>
    <br>
    <hr>
  <?php
    $sql = "SELECT add1,add2,name,number,cost FROM data";
    $result = $conn->query($sql);
    $a=$_GET['inputAddress'];
    $b=$_GET['inputAddress2'];
    $c=0;
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row[add1]===$a and $row[add2]==$b){
        echo "<br> Name: ". $row["name"]. " - Number: ". $row["number"]."- Cost: ". $row["cost"]." <br>";
         $c=1;
      }
    }
    } 
    if($c==0) {
    echo "NO USER AT THAT ROUTE";
   }
    ?>
    <hr>
    <div class="contact-me">
      <h2>Get In Touch</h2>
      <h3>We are here at your service 24/7</h3>
      <p class="intro">Our team is at your disposal to answer any questions by email or social media. You can also have a live chat directly with experienced members.</p>
      <a class="btn" href="mailto:yutkibisht44@gmail.com">CONTACT US</a>
      <br><br>
    </div>
  <div class="bottom-container">
    <a class="footer-link" href="https://www.linkedin.com/in/yukti-bisht-ab2025217/"></a>
    <a class="footer-link" href="https://www.xyzzz.com/">Website</a>
    <p>© YUKTI BISHT ,2022.</p>
  </div>  
  </body>
</html>
