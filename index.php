<?php
include('topbar.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="banner">
    <video autoplay muted loop class="banner-video">
        <source src="vedio.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="banner-content">
        <h1 class="h">Your Sound Your Choice</h1>
        <p>Discover the perfect blend of comfort, design, and exceptional audio quality with our premium headphones.  and balanced mids.</p>
    </div>
</div>
<!-- banner end -->
<!-- <h1 class="text-center">Go Premium</h1> -->

<div class="container">
    <div class="row">
    <h1 class="text-with-lines">Try Premium</h1>

        <div class="col-md-6">
            <h1>Premium Product</h1>
            <h4> <b> Earbuds </b> </h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto repellat minus illum assumenda eum, nulla, distinctio voluptas ea quod laboriosam vitae perspiciatis officiis similique mollitia dolore nemo eligendi ipsam sint.</p>
            <div class="row">
            <ul class="features-list">
                <li><i class="fas fa-volume-up"></i> Sound</li>
                <li><i class="fas fa-adjust"></i> Opacity</li>
                <li><i class="fas fa-battery-full"></i> Battery</li>
            </ul>
            </div>
            <button class="bt">Discover more</button>
            <button class="bt">send the query</button>
        </div>
        <div class="col-md-6">
        <video autoplay muted loop class="banner-video1">
            <source src="vedio2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
    </div>
</div>

<!-- premium end -->

<!-- gallery start -->

<div class="container">
    <div class="row">
        <h1 class="text-with-lines mt-4">Latest Arival</h1>
        <div class="col-md-4 image-container">
            <img src="images/ear.jpg" height="300px" width="300px" alt="">
            <div class="overlay">
                <h3>Earbuds</h3>
                <p>Discover the best sound quality</p>
                <button class="bt">Learn More</button>
            </div>
        </div>
        <div class="col-md-4 image-container">
            <img src="images/ear2.jpg" height="300px" width="300px" alt="">
            <div class="overlay">
                <h3>Earbuds</h3>
                <p>Discover the best sound quality</p>
                <button class="bt">Learn More</button>
            </div>
        </div>
        <div class="col-md-4 image-container">
            <img src="images/ear1.jpg" height="100px" width="300px" alt="">
            <div class="overlay">
                <h3>Earbuds</h3>
                <p>Discover the best sound quality</p>
                <button class="bt">Learn More</button>
            </div>
        </div>
        
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- First Column -->
        <div class="col-md-4">
            <div class="image-container">
                <img src="images/hand.jpg" class="img-fluid mb-4" height="200px"  alt="">
                <div class="overlay">
                    <h3>Hand Image 1</h3>
                    <p>Discover more about this image.</p>
                    <button class="bt">Learn More</button>
                </div>
            </div>
            <div class="image-container">
                <img src="images/hand2.jpg" class="img-fluid" height="200px" alt="">
                <div class="overlay">
                    <h3>Hand Image 2</h3>
                    <p>Discover more about this image.</p>
                    <button class="bt">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-md-4">
            <div class="image-container">
                <img src="images/chand.jpg" class="img-fluid" style="height: 400px; width: 100%; object-fit: cover;" alt="Chand">
                <div class="overlay">
                    <h3>Chand Image</h3>
                    <p>Discover more about this image.</p>
                    <button class="bt">Learn More</button>
                </div>
            </div>
        </div>

        <!-- Third Column -->
        <div class="col-md-4">
            <div class="image-container">
                <img src="images/hand.jpg" class="img-fluid mb-4"  height="200px" alt="">
                <div class="overlay">
                    <h3>Hand Image 3</h3>
                    <p>Discover more about this image.</p>
                    <button class="bt">Learn More</button>
                </div>
            </div>
            <div class="image-container">
                <img src="images/hand4.jpg" class="img-fluid" height="200px" alt="">
                <div class="overlay">
                    <h3>Hand Image 4</h3>
                    <p>Discover more about this image.</p>
                    <button class="bt">Learn More</button>
                </div>
            </div>
        </div>
       

    </div>
    <div class="button-container">
        <button class="arrow-btn">
            See All Product 
            <span class="arrow-icon">&rarr;</span>
        </button>
    </div>

</div>
<!-- latest end -->

<!-- offer start  -->

<div class="container">
    <div class="row">
        <h1 class="text-with-lines mt-4">What We Offer</h1>
        <div class="col-md-4 text-center">
            <i class="fas fa-truck service-icon"></i> <!-- Fast Delivery Icon -->
            <h2>Fast Delivery</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque in sequi maiores nam nihil corrupti praesentium iusto molestias, enim rerum sint quos corporis qui nobis, doloribus labore facere illum dicta.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-smile service-icon"></i> <!-- Satisfaction Icon -->
            <h2>Satisfaction</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque in sequi maiores nam nihil corrupti praesentium iusto molestias, enim rerum sint quos corporis qui nobis, doloribus labore facere illum dicta.</p>

        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-check-circle service-icon"></i> <!-- High Quality Product Icon -->
            <h2>High Quality Product</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque in sequi maiores nam nihil corrupti praesentium iusto molestias, enim rerum sint quos corporis qui nobis, doloribus labore facere illum dicta.</p>

        </div>
    </div>
</div>

<div class="container mt-4" id="bg">
        <div class="row">
        <h1 class="text-with-lines mt-4">Send Query</h1>
            <div class="col-md-6 contact-info">
                <h3>iStore Detail</h3>
                <p><i class="fas fa-envelope"></i>Istore@gmail.com</p>
                <p><i class="fas fa-user"></i> John Doe</p>
                <p><i class="fas fa-map-marker-alt"></i> 123 Main St, City, Country</p>
                <p><i class="fas fa-phone"></i> +123 456 7890</p>
                <div class="map-container mt-4">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345097973!2d144.95592831531664!3d-37.817209979751774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1fdb4b5%3A0x5045675218ce7e33!2zQ29tcGFueSBTdCwgQ2l0eSwgQ291bnRyeQ!5e0!3m2!1sen!2s!4v1633024735761!5m2!1sen!2s" 
            width="100%" 
            height="250" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </div>
            </div>
            <div class="col-md-6 form-container">
                <h2>Contact Us</h2>
                <form>
                    <div class="mb-3 icon-input">
                        <i class="fas fa-user"></i>
                        <input type="tex" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3 icon-input">
                        <i class="fas fa-user"></i>
                        <input type="tex" class="form-control" placeholder="Your Last Name" required>
                    </div>
                    <div class="mb-3 icon-input">
                        <i class="fas fa-phone"></i>
                        <input type="number" class="form-control" placeholder="Your Number" required>
                    </div>
                    <div class="mb-3 icon-input">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="bt">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include('footer.php');
?>
</html>