<!-- <?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fName = $_POST['fName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $grades = $_POST['grades'];

    if (!empty($fName) && !is_numeric($email) && !empty($phone) && !empty($dob) && !empty($city) && !empty($gender) && !empty($subject) && !empty($grades)) {
        $query = "INSERT INTO registration_form (fName, email, phone, dob, city, gender, subject, grades) VALUES ('$fName', '$email', '$phone', '$dob', '$city', '$gender', '$subject', '$grades')";
        mysqli_query($con, $query);
        echo "<script type='text/javascript'> alert('successfully inserted')</script>";
    } else {
        echo "<script type='text/javascript'> alert('please insert valid information')</script>";
    }
}
?> -->




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form </title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div class="main">
      <img src="images/logo1.png" alt="">
      <h5>CAMBRIDGE EDUCATION WITH YOUR FLEXIBILITY</h5>
        
    </div>
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form" method="POST" enctype="multipart/form-data">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="fName" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="dob" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="input-box">
            <label>City</label>
            <input type="text" name="city" placeholder="Enter Your City" required />
          </div>

        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">Prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="subject-box">
            <h3>Subject</h3>
            <div class="subject-option">
              <div class="subject">
                <input type="radio" id="check-Bussiness Studies" name="subject" checked />
                <label for="check-Bussiness">Bussiness Studies</label>
              </div>
              <div class="subject">
                <input type="radio" id="check-Urdu" name="subject" />
                <label for="check-Urdu">Urdu</label>
              </div>
              <div class="subject">
                <input type="radio" id="check-Physics" name="subject" />
                <label for="check-Physics">Physics</label>
              </div>
            </div>
          </div>

          <div class="grade-box">
            <h3>Grades</h3>
            <div class="grade-option">
              <div class="grade">
                <input type="radio" id="check-OLevels" name="grades" checked />
                <label for="check-OLevel">OLevels</label>
              </div>
              <div class="grade">
                <input type="radio" id="check-ALevels" name="grades" />
                <label for="check-ALevel">ALevels</label>
              </div>
              <div class="grade">
                <input type="radio" id="check-A2Levels" name="grades" />
                <label for="check-A2Levels">A2Levels</label>
              </div>
              <div class="grade">
                <input type="radio" id="check-Accelerated" name="grades" />
                <label for="check-Accelerated">Accelerated</label>
              </div>
            </div>
          </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
    <script src="register.js"></script>
     
</html>