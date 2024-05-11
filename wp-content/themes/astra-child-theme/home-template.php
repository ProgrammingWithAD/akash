<?php
/* Template Name: Home Template */
get_header();

?>

<div id="primary" <?php astra_primary_class(); ?>>
    <main id="main">
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <div class="carousel-container">
                <div class="carousel">
                    <div class="slide active">
                        <div class="hero">
                            <img src="https://via.placeholder.com/1440x700" alt="">
                            <h5>Slide 1 Title</h5>
                            <p>Slide 1 Content</p>
                            <a href="javascript:void(0);">Click here</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="hero">
                            <img src="https://via.placeholder.com/1440x700" alt="">
                            <h5>Slide 2 Title</h5>
                            <p>Slide 2 Content</p>
                            <a href="javascript:void(0);">Click here</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="hero">
                            <img src="https://via.placeholder.com/1440x700" alt="">
                            <h5>Slide 3 Title</h5>
                            <p>Slide 3 Content</p>
                            <a href="javascript:void(0);">Click here</a>
                        </div>
                    </div>
                </div>
                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>
            </div>


            <div class="card-container">
                <div class="card">
                    <img src="card1-image.jpg" alt="Card 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Card 1 Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img src="card2-image.jpg" alt="Card 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Card 2 Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img src="card3-image.jpg" alt="Card 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Card 3 Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">Go somewhere</a>
                    </div>
                </div>
            </div>


        </article>
    </main>
</div>

<?php
get_footer();
