<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>

    <div class="container">
    
    <?php @include 'header.php'; ?>

    <section class="pricing">
      <h1 class = "heading">Our Pricing</h1>
      <div class="box-container">
        <div class="box">
          <h3>basic plan</h3>
          <div class="price">Rs 1,45,000/-</div>
          <div class="list">
            <p><i class="fas fa-check"></i>Photography</p>
            <p><i class="fas fa-check"></i>Bride Makeup</p>
            <p><i class="fas fa-check"></i>Wedding Ceremony</p>
            <p><i class="fas fa-check"></i>Meals & Drinks</p>
            <p><i class="fas fa-check"></i>Guest Invitations</p>
          </div>
          <a href="contact.php" class="btn">Choose Plan</a>
        </div>

        <div class="box">
          <h3>Standard plan</h3>
          <div class="price">Rs 1,75,000/-</div>
          <div class="list">
            <p><i class="fas fa-check"></i>Photography</p>
            <p><i class="fas fa-check"></i>Bride Makeup</p>
            <p><i class="fas fa-check"></i>Wedding Ceremony</p>
            <p><i class="fas fa-check"></i>Meals & Drinks</p>
            <p><i class="fas fa-check"></i>Guest Invitations</p>
          </div>
          <a href="contact.php" class="btn">Choose Plan</a>
        </div>

        <div class="box">
          <h3>Premium plan</h3>
          <div class="price">Rs 2,10,000/-</div>
          <div class="list">
            <p><i class="fas fa-check"></i>Photography</p>
            <p><i class="fas fa-check"></i>Bride Makeup</p>
            <p><i class="fas fa-check"></i>Wedding Ceremony</p>
            <p><i class="fas fa-check"></i>Meals & Drinks</p>
            <p><i class="fas fa-check"></i>Guest Invitations</p>
          </div>
          <a href="contact.php" class="btn">Choose Plan</a>
        </div>
      </div>
    </section>        

    <?php @include 'footer.php'; ?>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</div>
</body>
</html>