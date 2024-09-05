<?php
    include('./partials/header.php');
?>

<main>
    <!--
        Commented the Area that is not in use
        Please uncomment the 'include(....)' if needed
    --->
    <?php

        // About section
        include('./components/about/about-section.php');

        // Why Choose Us Area
        include('./components/about/why-choose-us.php');

        // Work Area
        include('./components/about/work.php');

        // Team Area
        //include('./components/about/team.php');

        // FAQ and Popular Area
        include('./components/about/faq.php');

        // Partner Area
        //include('./components/home/partner.php');

    ?>

</main>

<?php
    include('./partials/footer.php');
?>