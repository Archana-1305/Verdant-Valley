<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a>  </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/2.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>"At verdant valley, we understand that selecting the right nursery for your precious plants and gardening needs is a significant decision. We believe that our commitment to excellence and our passion for nurturing the green world set us apart. "</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>"At our nursery garden, we provide a delightful array of lush plants, vibrant flowers, and expert gardening advice. Our offerings include a wide variety of seasonal plants, trees, shrubs, gardening essentials, and personalized guidance to help you cultivate your dream garden."</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/3.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/1.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>"We are a passionate team of horticultural enthusiasts at verdant valley. With a deep-rooted love for nature and decades of collective experience, we've dedicated ourselves to nurturing and sharing the beauty of the natural world. Our commitment to quality, sustainability, and personalized customer service sets us apart. We're not just a nursery garden; we're your trusted partners in creating and maintaining a thriving green oasis."</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/5.jpeg" alt="">
            <p>The plant arrived in impeccable condition. It was well-packaged to protect it during shipping, and there wasn't a single damaged leaf or stem. The soil was still moist, which showed that it was well-cared for before shipping.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ezhil</h3>
        </div>

        <div class="box">
            <img src="images/6.jpg" alt="">
            <p>Thank you, verdant valley, for offering such a fantastic plant, and for your dedication to delivering quality products to your customers.They were responsive to my inquiries before and after the purchase.Satisfied!!!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Archu</h3>
        </div>

        <div class="box">
            <img src="images/11.jpeg" alt="">
            <p>Absolutely delighted with my plant from Verdant Valley. It arrived in perfect condition, is thriving beautifully, and adds vibrancy to my space. Exceptional customer service too! Highly recommend this plant and nursery.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Adchu</h3>
        </div>

        <div class="box">
            <img src="images/9.jpeg" alt="">
            <p>My recent purchase from Verdant Valley has been a joy. It arrived healthy, with vibrant colors, and has thrived in my care. A fantastic addition to my collection. Thanks, [Your Nursery Garden Name], for top-notch quality!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dhanu</h3>
        </div>

        <div class="box">
            <img src="images/10.jpeg" alt="">
            <p>I'm thrilled with my purchase  from Verdant Valley. It's flourishing beautifully, exactly as described. Excellent packaging and prompt delivery. Highly recommend this nursery for their quality and service!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dharshan</h3>
        </div>

        <div class="box">
            <img src="images/7.jpeg" alt="">
            <p>I'm impressed with Verdant Valley . It arrived in great condition, and its growth has been remarkable. This purchase has elevated my gardening experience. Thanks to Verdant Valley for delivering on quality!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dharshini</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>