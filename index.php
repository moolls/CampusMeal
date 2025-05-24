
<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 </head>
<body>


<?php 
session_start();
  if(isset($_SESSION['user'])){
    include "loggedInHeader.php";
  } else {
    include "header.php";
  }

?>

  <div class="text-container">
  <div class="front-img">
  <img id="front-page" src="front-page.jpg" alt = "front-page">
  </div>
    <div class="text-overlay">
    <h1>
      <span>Welcome to</span>
      <span class="white-text">Campus</span>
      <span class="pink-text">Meal</span>
    </h1>  
    <h3>Delicious, easy and cheap recipes all gathered at one place!</h3>
    </div>
  </div>

  <div class="parent-container">
  <div class="text-box">
    <h2>Share your culinary creations
with the world on our
recipe platform!</h2>
    <div class="flex-container">
      <p>Are you passionate about cooking and want to share your culinary creations with the world? Look no further! Our website is the perfect platform for food enthusiasts like you to showcase your unique recipes. With a wide range of delicious dishes already posted, our community is constantly growing and eager to discover new flavors.

<br>
Posting your own recipe is quick and easy. Simply create an account on our website and navigate to the recipe submission page. Fill in the details of your recipe, including the ingredients, preparation instructions, and any special tips or variations. Don't forget to include an appetizing photo of your dish to entice readers!</p>
      <div class="plate-img">
        <img id="plate-picture" src="plate.jpg" alt="plate-picture">
      </div>
    </div>
  </div>
  
  <div class="text-box">
    <h2>Cook, Share, Inspire: Join Our Flavorful Community!</h2>
    <div class="flex-container">
      <p>Once you submit your recipe, our team will review it to ensure it meets our quality standards. Upon approval, your recipe will join the ranks of our mouthwatering collection, reaching a global audience of food enthusiasts. You'll have the opportunity to receive feedback, engage with fellow cooks, and inspire others to recreate your delectable creations.
<br>

Whether you're a seasoned chef or an aspiring home cook, sharing your recipe on our website allows you to contribute to a vibrant food community. So, don your apron, gather your ingredients, and get ready to become a part of our flavorful journey. Start posting your own recipe today and let your culinary talents shine!</p>
      <div class="plate-img">
        <img id="plate-picture" src="plate2.jpg" alt="plate-picture">
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>