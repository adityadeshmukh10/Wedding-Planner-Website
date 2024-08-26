<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $plan = $_POST['plan'];
  $address = $_POST['address'];
  $message = $_POST['message'];


  $insert = "INSERT INTO `contact_form`(`name`,`email`,`number`,`plan`,`address`,`message`) VALUES
  ('$name','$email','$number','$plan','$address','$message')";

  mysqli_query($conn, $insert);

  header('location:contact.php');

  
}

?> 
































<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  </head>

  <body>
  
    <div class="container">
  
      <?php @include 'header.php'; ?>
  
      <section class="contact">
        <h1 class="heading">contact us</h1>
  
        <form action="" method="post">
          <div class="flex">
            <div class="inputBox">
              <span>Your Name</span>
              <input type="text" placeholder="enter your name" name="name" required>
            </div>
  
            <div class="inputBox">
              <span>Your email</span>
              <input type="text" placeholder="enter your email" name="email" required>
            </div>
  
            <div class="inputBox">
              <span>Your number</span>
              <input type="text" placeholder="enter your number" name="number" required>
            </div>
  
            <div class="inputBox">
              <span>Choose Plan</span>
              <select name="plan">
                <option value="basic">basic plan</option>
                <option value="premium">premium plan</option>
                <option value="ultimate">ultimate plan</option>
              </select>
            </div>
  
            <div class="inputBox">
              <span>Your address</span>
              <textarea name="address" placeholder="enter your address" required cols="20" rows="10"></textarea>
            </div>
  
            <div class="inputBox">
              <span>Your message</span>
              <textarea name="message" placeholder="enter your message" required cols="20" rows="10"></textarea>
            </div>
          </div>
          <input type="submit" value="SUBMIT" name="send" class="btn">
  
        </form>
      </section>
  
  
      <?php @include 'footer.php'; ?>
  
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="script.js"></script>
    </div>
  </body>

</html>