<?php
    include('./partials/header.php');
?>

<main>
    <!-- page title area start  -->
    <section class="page-title-area page-title-spacing p-relative zindex-1 "
        data-background="assets/img/bg/work-bg.jpg">
        <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <h3 class="ms-page-title text-center">Contact us - More Information - Book Band</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- Contact Area Start Here  -->
    <section class="ms-contact-area pb-60 pt-130">
        <div class="container">
            <div class="row align-items-end mb-25 bdFadeUp">
                <div class="col-xl-6 col-lg-6">
                    <div class="section__title-wrapper mb-40 bd-title-anim">
                        <h2 class="section__title msg_title">
                            Get In Touch With Us
                        </h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="ms-popular__tab ms-popular-flex mb-40">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="contact-btn" type="button">Contact Us</button>
                                <button class="nav-link" id="more-info-btn" type="button">More Information</button>
                                <button class="nav-link" id="book-band-btn" type="button">Book Band</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="ms-input2-box mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-input2-box mb-30">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-input2-box mb-30">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ms-input2-box mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div id="contact-or-info" class="col-md-12">
                                    <div class="ms-input2-box mb-30">
                                        <textarea cols="30" rows="10"
                                            name="contact_message"
                                            placeholder="Write Message . . ."></textarea>
                                    </div>
                                </div>
                                <div id="contact-name-venue" class="col-md-6" hidden>
                                    <div class="ms-input2-box mb-30">
                                        <input type="text" name="venue_name" placeholder="Name of Venue">
                                    </div>
                                </div>
                                <div id="contact-type-venue" class="col-md-6" hidden>
                                    <div class="ms-input2-box mb-30">
                                        <input type="text" name="venue_type" placeholder="Type of Venue">
                                    </div>
                                </div>
                                <div id="contact-date-venue" class="col-md-6" hidden>
                                    <div class="ms-input2-box mb-30">
                                        <label for="venue_date" class="ml-20">Date of Venue</label>
                                        <input id="venue_date" type="date" name="venue_date" placeholder="Date of Venue">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div class="ms-checkbox">
                                        <span>Save my name, email, and website in this browser for
                                            the next time I comment.</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </div> -->
                                    <div class="ms-submit-btn mt-40">
                                        <button class="unfill__btn" name="contact_submit" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-xl-4">
                    <div class="ms-contact-img-wrap mb-70 d-inline-block p-relative">
                        <div class="ms-contact-img m-img ms-br-15 fix p-relative zindex-1">
                            <div class="ms-overlay ms-overlay11"></div>
                            <img loading="lazy" src="assets/img/stock-pics/image-1.jpg" alt="banner image">
                        </div>
                        <div class="ms-contact-content text-center">
                            <div class="ms-round-icon mx-auto mb-20">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <h3 class="ms-title3 ms-text2 mb-15">Emergency Call</h3>
                            <h2 class="ms-title5 white-text"><a href="tel:+9102369032125">+91 0236 9032
                                    125</a></h2>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Contact Area End Here  -->


    <!-- Contact Map Area Start Here  -->
    <section class="ms-contact-map-area">
        <div class="ms-contact-img w-img">
            <!-- <img loading="lazy" class="mh-200" src="assets/img/bg/contact-bg.jpg" alt="contact bg"> -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24462.858162524895!2d-76.75148899167182!3d39.96694372696377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c88bc157ae8561%3A0x1aacfaea5ef213cd!2sYork%2C%20PA%2C%20USA!5e0!3m2!1sen!2s!4v1711125139950!5m2!1sen!2s"  
                style="border:0;width:100%;height:auto;min-height:800px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="ms-bg-2 ms-contact-map-space">
            <div class="container">
                <div class="ms-contact-map-grid">
                    <div class="ms-contact-map-item-wrapper">
                        <div class="ms-contact-map-item ms-bg-6">
                            <div class="ms-contact-flag mb-5">
                                <img loading="lazy" src="assets/img/contact/flag-01.jpg" alt="flag image">
                            </div>
                            <h3 class="ms-title3 white-text mb-40">York, PA</h3>
                            <div class="ms-contact-map-content ms-footer2-contact border-0">
                                <ul>
                                    <li><i class="flaticon-pin"></i><a href="#">936 Kuhl Avenue,
                                            York, PA, United State</a></li>
                                    <li><i class="flaticon-phone-call"></i><a href="tel:03332920560">0333
                                            292
                                            0560</a></li>
                                    <li><i class="flaticon-mail"></i><a
                                            href="mailto:rich@gmail.com">rich@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Map Area End Here  -->


    <!-- Partner Area Start Here  -->
    <?php //include('./components/home/partner.php'); ?>
    <!-- Partner Area End Here  -->

</main>


<script type="text/javascript">
    const contactBtn = document.getElementById('contact-btn');
    const moreInfoBtn = document.getElementById('more-info-btn');
    const bookBandBtn = document.getElementById('book-band-btn');
    const contactOrInfo = document.getElementById('contact-or-info');
    const contactNameVenue = document.getElementById('contact-name-venue');
    const contactTypeVenue = document.getElementById('contact-type-venue');
    const contactDateVenue = document.getElementById('contact-date-venue');
    const textarea = document.querySelector('#contact-or-info textarea');
    const submitBtn = document.querySelector('.unfill__btn');


    contactBtn.addEventListener('click', () => {
        textarea.setAttribute('placeholder', 'Write Message . . .');
        textarea.setAttribute('name', 'contact_message');
        submitBtn.setAttribute('name', 'contact_submit');
        contactBtn.classList.add('active');
        moreInfoBtn.classList.remove('active');
        bookBandBtn.classList.remove('active');

        // Remove animation class if it exists
        contactOrInfo.classList.remove('animate-show');
        // Wait a short time before adding animation class to ensure smooth transition
        setTimeout(() => {
            // Add animation class to show the element
            contactOrInfo.classList.add('animate-hide');
            // Update visibility of related elements
            contactOrInfo.removeAttribute('hidden');
            contactNameVenue.setAttribute('hidden', 'true');
            contactTypeVenue.setAttribute('hidden', 'true');
            contactDateVenue.setAttribute('hidden', 'true');
            submitBtn.setAttribute('name', 'contact_submit');
            submitBtn.innerHTML = 'Send Message';
        }, 10);
    });


    moreInfoBtn.addEventListener('click', () => {
        textarea.setAttribute('placeholder', 'I need information about . . .');
        textarea.setAttribute('name', 'more_info_message');
        submitBtn.setAttribute('name', 'more_info_submit');
        moreInfoBtn.classList.add('active');
        contactBtn.classList.remove('active');
        bookBandBtn.classList.remove('active');

        // Remove animation class if it exists
        contactOrInfo.classList.remove('animate-show');
        // Wait a short time before adding animation class to ensure smooth transition
        setTimeout(() => {
            // Add animation class to show the element
            contactOrInfo.classList.add('animate-hide');
            // Update visibility of related elements
            contactOrInfo.removeAttribute('hidden');
            contactNameVenue.setAttribute('hidden', 'true');
            contactTypeVenue.setAttribute('hidden', 'true');
            contactDateVenue.setAttribute('hidden', 'true');
            submitBtn.setAttribute('name', 'more_info_submit');
            submitBtn.innerHTML = 'Inquire';
        }, 10);
    });


    bookBandBtn.addEventListener('click', () => {
        textarea.setAttribute('placeholder', 'I need information about . . .');
        submitBtn.setAttribute('name', 'book_band_submit');
        bookBandBtn.classList.add('active');
        moreInfoBtn.classList.remove('active');
        contactBtn.classList.remove('active');

        // Remove animation class if it exists
        contactOrInfo.classList.remove('animate-show');
        // Wait a short time before adding animation class to ensure smooth transition
        setTimeout(() => {
            // Add animation class to hide the element
            contactOrInfo.classList.add('animate-hide');
            // Update visibility of related elements
            contactOrInfo.setAttribute('hidden', 'true');
            contactNameVenue.removeAttribute('hidden');
            contactTypeVenue.removeAttribute('hidden');
            contactDateVenue.removeAttribute('hidden');
            submitBtn.setAttribute('name', 'book_band_submit');
            submitBtn.innerHTML = 'Book Band';
        }, 10);
    });
</script>



<?php
    include('./partials/footer.php');
?>
        