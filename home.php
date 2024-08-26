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

    
    <section class="home">
        <!-- <div class="swiper home-slider"> -->
            <!-- <div class="swiper-wrapper"> -->
                <div class="swiper-slide slide" style="background:url('cer.jpg') no-repeat; background-size:cover;">
                    <!-- <img src="cer.jpg" alt=""> -->
                    <div class="content">
                        <h3>plan your wedding</h3>
                        <p>From stunning venues to personalized touches, we handle every detail with care and elegance. Create unforgettable memories with our expert planning and flawless execution. Let us turn your special day into a celebration of love!
                        </p>
                        <a href="about.php" class="btn">discover more</a>
                    </div>          
                </div>
                    
            <!-- </div> -->
            <div class="swiper-pagination"></div>
        <!-- </div>   -->
    </section>

    <section class="services">
        <h1 class="heading">our services</h1>
        <div class="swiper service-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="photo.jpg" alt="">
                    <div class="content">
                        <h3>photography</h3>
                        <p>Capture every magical moment with our expert photographers who bring your love story to life.</p>
                    
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="registry.jpg" alt="">
                    <div class="content">
                        <h3>wedding registry</h3>
                        <p> Curate a personalized registry to help guests select meaningful gifts for your new life together.</p>
                        
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="card.jpg" alt="">
                    <div class="content">
                        <h3>guest list</h3>
                        <p>Simplify your guest list with our seamless management service, ensuring everyone is accounted for.</p>
                        
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="cake.jpg" alt="">
                    <div class="content">
                        <h3>wedding cake</h3>
                        <p>Delight in a beautifully crafted wedding cake that’s as delicious as it is stunning.</p>
                        
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="ceremony.jpg" alt="">
                    <div class="content">
                        <h3>wedding ceremony</h3>
                        <p>Craft a breathtaking and personalized ceremony that celebrates your unique love story with grace and elegance.</p>
                        
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <img src="dine.jpg" alt="">
                    <div class="content">
                        <h3>fine dining</h3>
                        <p> Enjoy an exquisite dining experience with gourmet options that cater to every palate.f</p>
                        
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <?php @include 'footer.php'; ?>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</div>
</body>
</html>