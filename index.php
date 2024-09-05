<?php
    include('./partials/header.php');
?>
<main>
    <!--
        Commented the Area that is not in use
        Please uncomment the 'include(....)' if needed
    --->
    <?php 

        // Banner Area 
        include('./components/home/banner.php');
    
    ?>    
        
        <div class="container">
            <div class="row justify-content-center align-items-center mt-50">
                <div class="col-lg-12">
                    <p class="custom-para">
                        The Nobles epitomize versatility, effortlessly traversing through a myriad of musical genres including Pop, 
                        Rock, Funk, Blues, Country, and Dance as well as delivering a totally electrifying performances. 
                        Comprising seasoned virtuosos in their respective instrument, each member brings a wealth of experience 
                        garnered from years of touring, performing, and recording at the highest levels in the industry.
                        Embark on a journey of unparalleled musical excellence; join us and immerse yourself in an unforgettable 
                        experience filled with boundless fun, dancing and euphoric rhythms.
                    </p>
                </div>
            </div>
        </div>

    <?php

        // Text Scroll Area
        include('./components/home/text-scroll.php');

        // Popular Area
        //include('./components/home/popular.php');

        // Work Area
        include('./components/home/work.php');

        // Trending Area
        include('./components/home/trending.php');

        // Function Brand Area
        //include('./components/home/function-brand.php');

        // Special Event Area
        include('./components/home/special-event.php');

        // Testimonial Area
        include('./components/home/testimonial.php');

        // Special Event Area
        include('./components/home/special-event-b.php');

        // Partner Area
        //include('./components/home/partner.php');

        // CTA Area
        //include('./components/home/cta.php');
        
    ?>

</main>

<?php
    include('./partials/footer.php');
?>
        