<?php


if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, phone, password) VALUES ('$email','$phone','$password')";
    if ($conn->query($sql)) {
        header("Location: login.php");
    } else {
        echo "Email already exists!";
    }
}
?>

  <!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="UTF-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Marcel Portfolio. </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

   <!-- Navbar -->
   <nav>
       <div class="logo">MARCEL'S PORTFOLIO</div>
       <ul>
           <b><li><a href="#home">Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#gallery">Gallery</a></li>
           <li><a href="#contact">Contact</a></li>
           </ul></b>
   </nav>

   <!-- Home Section -->
   <section id="home">
       <h1>Welcome to my Portfolio</h1>
       <p>I am Marcel Nasson, the co founder of the MUYSCO</p>
   </section>

   <!-- About Section -->
   <section id="about">
       <h2>About me</h2>
       <p>Welcome to my portfolio were I do create my own pictures from different ares of the world
       thus makes us <B>SHINE TOGETHER</B> without stress and fear any obstacle that comes in front of us
       please follow my page on instagram that goes <b>marcelnasson</b> and my page on threads as <b><i>marcelnasson</i></b></p>

   </section>

   <!-- Gallery section -->
   <p><section id="gallery">
       <h2>Gallery</h2>
       <div class="gallery-container">
       <div class="gallery-item"><img src="images/img1.jpg" alt="Image1"></div>
       <div class="gallery-item"><img src="images/img2.jpg" alt="Image2"></div> 
       <div class="gallery-item"><img src="images/img3.jpg" alt="Image3"></div>
       <div class="gallery-item"><img src="images/img4.jpg" alt="Image4"></div>
       <div class="gallery-item"><img src="images/img5.jpg" alt="Image5"></div>
       <div class="gallery-item"><img src="images/img6.jpg" alt="Image6"></div>
       <div class="gallery-item"><img src="images/img7.jpg" alt="Image7"></div>
       <div class="gallery-item"><img src="images/img8.jpg" alt="Image8"></div>
       <div class="gallery-item"><img src="images/img9.jpg" alt="Image9"></div>
       <div class="gallery-item"><img src="images/img10.jpg" alt="Image10"></div>
       <div class="gallery-item"><img src="images/img11.jpg" alt="Image11"></div>
       <div class="gallery-item"><img src="images/img12.jpg" alt="Image12"></div>
       <div class="gallery-item"><img src="images/img13.jpg" alt="Image13"></div>
       <div class="gallery-item"><img src="images/img14.jpg" alt="Image14"></div>
       <div class="gallery-item"><img src="images/img15.jpg" alt="Image15"></div>
       <div class="gallery-item"><img src="images/img16.jpg" alt="Image16"></div>
       <div class="gallery-item"><img src="images/img17.jpg" alt="Image17"></div>
       <div class="gallery-item"><img src="images/img18.jpg" alt="Image18"></div>
       <div class="gallery-item"><img src="images/img19.jpg" alt="Image19"></div>
       <div class="gallery-item"><img src="images/img20.jpg" alt="Image20"></div>
       <div class="gallery-item"><img src="images/img21.jpg" alt="Image21"></div>
       <div class="gallery-item"><img src="images/img22.jpg" alt="Image22"></div>
       <div class="gallery-item"><img src="images/img23.jpg" alt="Image23"></div>



   </div>

   </section></p>
<section id="contact">
<h2>Contact</h2>
<form action="process.php" method="POST">
    <input type="name" name="name" placeholder="Your Names" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="message" name="message" placeholder="Message" required><br><br>
    <button name="register">Register</button><br>
</form>
</section>

</body>
</html>