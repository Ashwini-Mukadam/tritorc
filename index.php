<?php
if (!isset($page)) {
    $page = 'HomePage';
}
include('includes/header.php'); ?>
<section class="hero text-white text-center d-flex align-items-center py-5" fetchpriority="high">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center flex-col">
            <div class="col-xl-6 justify-content-center text-center">
                <div class="bannerHeading">
                    <div><img src="assets/images/icons/hackerverse-icon-light.svg" class="jan-logo-img"></div>
                    <h1 class="display-4">Welcome to the<br>
                        <div class="marquee" aria-hidden="true">
                            <div class="marquee__inner">
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                                <span>Hackerverse<sup>TM</sup></span>
                            </div>
                        </div>

                    </h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center flex-col gap-2">
            <p class="heropara mt-3 text-center">Whether you’re a beginner, currently learning, or a seasoned
                professional, the Hackerverse meets you at your level. Join a community of hackers and cyber enthusiasts
                focused on learning, engagements, and hands-on skill development.</p>

            <button class=" hackbtn registerbtn mt-4 openModal" type="button">
                <div class="btncopy">
                    <span>Register Now for Free <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                    <span class="openModal">Register Now for Free <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg></span>
                </div>
                <div class="btnArrow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </div>
            </button>
        </div>


    </div>
</section>
<div class="welcomeBlock">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 welcomeLeftpic order-md-1 order-xs-2"><img src="assets/images/welcome-1.webp" alt="">
            </div>
            <div class="col-xl-6 justify-content-center text-center upside-copy order-md-2 order-xs-1">

                <div class="bannerHeading ">
                    <div><img src="assets/images/icons/hackerverse-icon-light.svg" width="64px" alt="" loading="lazy"></div>
                    <h1 class="">Dive into Cybersecurity Challenges!</h1>
                    <p>Register for our Hackerverse CTF to participate in monthly Capture the Flag competitions with
                        rotating topics covering the latest skills valued by industry and employers.</p>
                    <button class="hackbtn my-2" type="button">
                        <div class="btncopy">
                            <span>Register Now for Free <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></span>
                            <span class="openModal">Register Now for Free <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="btnArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>




            </div>
            <div class="col-xl-3  welcomeRightpic order-md-3 order-xs-3"><img src="assets/images/welcome-2.webp" alt="" loading="lazy">
            </div>
        </div>
    </div>
</div>
<section class="push-limits">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="bannerHeading ">
                    <div><img src="assets/images/icons/code-neon.svg" alt="" loading="lazy"></div>
                    <h1>
                        <div class="mb-2">Push Your Limits in the <br clas="" />
                            <span>
                                <img src="assets/images/icons/pushframe-icon.svg">
                            </span>
                            <span class="marquee mr-1" aria-hidden="true">
                                <div class="marquee__inner">
                                    <span>Hackerverse</span>
                                    <span>Hackerverse</span>
                                    <span>Hackerverse</span>
                                    <span>Hackerverse</span>
                                </div>
                            </span>&nbsp;CTF
                        </div>

                    </h1>

                    <button class="hackbtn my-2" type="button">
                        <div class="btncopy">
                            <span>Register Now for Free <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></span>
                            <span class="openModal">Register Now for Free <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="btnArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <!-- <div class=" mobile-shows  w-100" style="height:50px">&nbsp;</div> -->
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container flip-card-container ">
        <div class="full-width d-flex justify-content-evenly align-items-center flex-xs-column gap-xs-4">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="cardImageWrap"><img src="assets/images/features/intro-cyberleague-1.webp"
                                class="card-image" alt="Card Image" loading="lazy"></div>
                        <div class="cardTitlewrap">
                            <div class="card-name">Introducing the Hackerverse CTF</div>
                            <div class="plus-button"><img src="assets/images/icons/plusBtn.svg" alt=""></div>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h2 class="flip-card-back-title">Introducing the Hackerverse CTF</h2>
                        <p>The Hackerverse CTF is a brand-new league by EC-Council, offering free knowledge-based CTF
                            competitions. Registration is free, and players can participate individually each month.</p>
                        <p><strong style="color: rgb(237 0 0);">Important Note: </strong> CTF challenges will be
                            available for participation during the last 9 days of every month.</p>
                        <div class="minus-button">-</div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="cardImageWrap"><img src="assets/images/features/ctfs-1.webp" class="card-image"
                                alt="Card Image" loading="lazy"></div>
                        <div class="cardTitlewrap">
                            <div class="card-name">Cybersecurity Skills Development Through CTFs</div>
                            <div class="plus-button"><img src="assets/images/icons/plusBtn.svg" alt=""></div>

                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h2 class="flip-card-back-title">Cybersecurity Skills Development Through CTFs</h2>
                        <p>Participants within the Hackerverse CTF will be able to showcase their skills and talent,
                            completing a series of carefully designed questions that get progressively more difficult.
                            Players will compete against a global network for prizes and top rankings. The primary focus
                            of the Hackerverse CTF is to get more participants engaged in cybersecurity competitions,
                            leading to increased knowledge and skill development.</p>
                        <div class="minus-button">-</div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="cardImageWrap"><img src="assets/images/features/real-world-1.webp"
                                class="card-image" alt="Card Image" loading="lazy"></div>
                        <div class="cardTitlewrap">
                            <div class="card-name">Awards and Recognition</div>
                            <div class="plus-button"><img src="assets/images/icons/plusBtn.svg" alt=""></div>

                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h2 class="flip-card-back-title">Awards and Recognition</h2>
                        <p>The Hackerverse CTF offers monthly cash and in-kind prizes to qualifying winners.
                        <ul class="checkmark-list">

                            <li>GLOBAL LEADERBOARDS</li>
                            <li>CASH AND IN-KIND PRIZES</li>
                        </ul>
                        </p>
                        <div class="minus-button">-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
</section>

<!-- Shruti -->
<!-- Strip scrolling section start by shruti -->
<section class="banner sectionbg1  crossedStripsSection leftcirclebg">
    <div class="container-fluid p-0 ">
        <div class="row p-0 position-relative ">
            <div class="bg-red zindexcustom swiper-containersecond" style="top:-8px">
                <div class="scrolling-red justify-content-between custom-wrapper">
                    <div class="custom-slide">
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                    </div>
                    <div class="custom-slide">
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/hackerverse-logo.svg" alt="Separator">
                            <span class="havkerverse-text">Hackerverse</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-grey swiper-containerfirst" style="top:8px">
                <div class="scrolling-grey justify-content-between custom-wrapper">
                    <div class="custom-slide">
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                    </div>
                    <div class="custom-slide">
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                        <div class="custom-slide1">
                            <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                            <span class="havkerverse-red">Hackerverse</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<!-- Strip scrolling section end by shruti -->
<!-- Hackerverse CTF Awards Section starts -->
<section class="cyber-leagueawardsectioncustom sjancustomaj">
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center text-center py-2">
                    <div>
                        <img src="assets/images/icons/awards-badge-neo.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="gradient-bg jan-gradient-bg mx-auto">
            <div class="container">
                <div class="row justify-content-center pt-4">
                    <div class="col-12 col-md-7 text-center align-items-center">
                        <div class="design-img">
                            <h1 class="awards-heading px-5">The Hackerverse CTF Awards</h1>
                            <p class="new-competition">Participate in CTF Challenges each month for a chance to win cash
                                prizes and awards!
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 pt-2">
                        <div class="d-flex flex-column justify-content-center text-center">
                            <p class="league-col-heading jan-text-title smafds fw-bold">Monthly Awards</p>
                            <p class="new-competition jan-text-para fw-normal fw-">Every month, the Hackerverse CTF
                                launches a new
                                competition,
                                giving you the chance to showcase your skills, dominate the leaderboard, and win
                                awards.
                            </p>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">1<sup>st</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">Up to $2,500 in-kind EC-Council Resources* <br> (or $500 cash)
                                </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">2<sup>nd</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">Up to $1,500 in-kind EC-Council Resources* <br> (or $250 cash)
                                </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">3<sup>rd</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">Up to $1,000 in-kind EC-Council Resources* <br> (or $100 cash)
                                </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text jan-image-big1"><span
                                            class="jan-list-place">4<sup>th</sup> - 5<sup>th</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">12 months free access to microlearning <br> cybersecurity
                                    video library*</p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text jan-image-big1"><span
                                            class="jan-list-place">6<sup>th</sup> - 10<sup>th</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">9 months free access to microlearning <br> cybersecurity video
                                    library* </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text jan-image-big"><span
                                            class="jan-list-place">11<sup>th</sup> - 25<sup>th</sup></span> <br>Place
                                    </p>
                                </div>
                                <p class="jan-para-below">6 months free access to microlearning <br> cybersecurity video
                                    library*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-2">
                        <div class="d-flex flex-column justify-content-center text-center ">
                            <p class="league-col-heading jan-text-title customsunajh fw-bold">End of Season Awards</p>
                            <p class="new-competition jan-text-para fw-normal">Consistency is key—join every competition
                                and collect flags
                                all
                                quarter long to earn the prestigious <br>End of Season awards.</p>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">1<sup>st</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">$5,000 cash + 12 months free access to <br>microlearning
                                    cybersecurity video
                                    library*
                                </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">2<sup>nd</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">$2,500 cash + 12 months free access to <br> microlearning
                                    cybersecurity video
                                    library*</p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text"><span
                                            class="jan-list-place">3<sup>rd</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">$1,000 cash + 12 months free access to <br> microlearning
                                    cybersecurity video
                                    library*</p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text jan-image-big1"><span
                                            class="jan-list-place">4<sup>th</sup> - 10<sup>th</sup></span> <br>Place</p>
                                </div>
                                <p class="jan-para-below">$200 cash + 6 months free access to <br> microlearning
                                    cybersecurity video
                                    library*
                                </p>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="award-img jan-place-text jan-image-big"><span
                                            class="jan-list-place">11<sup>th</sup> - 20<sup>th</sup></span> <br>Place
                                    </p>
                                </div>
                                <p class="jan-para-below">$100 cash + 3 months free access to <br> cybersecurity video
                                    library* </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <div class="row justify-content-center pt-5">
            <div class="col-12 ">
                <div class="d-flex flex-column justify-content-center text-center">
                    <p class="disclaimer">*Please refer to our <a href="terms-of-service.php#awards-section"
                            class="disclaimer-link">Terms of Service</a> for complete details regarding awards and their
                        claims.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="bg-grey-scroll">
                <div class="scroll-container">
                    <div class="scroll-content">
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                        <img src="assets/images/red-hackerverse.webp" alt="Separator" loading="lazy">
                        <span class="havkerverse-red scroll-text">Hackerverse</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hackerverse CTF Awards Section ends-->
<section class="joinCyberleagueChallenges ">
    <?php
    $months = array(
        'march' => array('title' => 'Reverse Engineering, Malware Analysis', 'date' => 'March', 'image' => 'march.png', 'desc' => 'Put your skills to the test by diving deep into challenges like log file analysis, network traffic investigation, and file metadata exploration. Additionally, decode Base64, decrypt classical cryptography algorithms, and uncover hidden insights to tackle real-world cybersecurity threats.', 'link' => 'march.php'),
        'april' => array('title' => 'Forensics, Cryptography', 'date' => 'April', 'image' => 'april.png', 'desc' => 'Put your skills to the test by diving deep into challenges like log file analysis, network traffic investigation, and file metadata exploration. Additionally, decode Base64, decrypt classical cryptography algorithms, and uncover hidden insights to tackle real-world cybersecurity threats.', 'link' => 'april.php'),
        'may' => array('title' => 'Reverse Engineering, Malware Analysis + Forensics, Cryptography', 'date' => 'May', 'image' => 'may.png', 'desc' => 'Analyze code and crack encryption in this multi-layered CTF test of skill. This challenge is designed to test your analytical thinking, problem-solving skills, and technical expertise. Race against time, climb the leaderboard, and prove you’ve got what it takes to outsmart the rest. Only the sharpest minds make it to the top. Be one of them!', 'link' => 'may.php'),
        'june' => array('title' => 'Reverse Engineering, Malware Analysis', 'date' => 'June', 'image' => 'june.png', 'desc' => 'Tackle challenges like analyzing anti-debugging techniques, state machines, and network traffic. Perform dynamic analysis, debugging, and code injection investigations. Join the Hackerverse CTF and lead the charge in reverse engineering and malware analysis!', 'link' => 'june.php'),
        'july' => array('title' => 'Forensics, Cryptography', 'date' => 'July', 'image' => 'july.png', 'desc' => 'Prove your forensic expertise in our Capture the Flag competition! Dive into Linux system and database server forensics, decrypt encrypted files, and crack passwords to tackle real-world challenges. Join the Hackerverse CTF and showcase your advanced investigative skills.', 'link' => 'july.php'),
        'august' => array('title' => 'Reverse Engineering, Malware Analysis + Forensics, Cryptography', 'date' => 'August', 'image' => 'august.png', 'desc' => 'Analyze Information and crack encryption in this multi-layered CTF test of skill. These challenges were designed to test your analytical thinking, problem-solving skills, and technical expertise. Race against time, climb the leaderboard, and prove you’ve got what it takes to outsmart the rest. Only the sharpest minds make it to the top. Be one of them!', 'link' => 'august.php'),
        'september' => array('title' => 'Reverse Engineering, Malware Analysis', 'date' => 'September', 'image' => 'september.png', 'desc' => 'Dive into challenges like reading assembly code, decrypting strings, and analyzing program logic. Test your skills to extract payloads and analyze programs in real-time. Stand out in the cybersecurity landscape and demonstrate the skills employers are searching for.', 'link' => 'september.php'),
        'october' => array('title' => 'Forensics, Cryptography', 'date' => 'October', 'image' => 'october.png', 'desc' => 'Prove your forensic expertise in our Capture the Flag competition! Dive into Linux system and database server forensics, decrypt encrypted files, and crack passwords to tackle real-world challenges. Join the Hackerverse CTF and showcase your advanced investigative skills.', 'link' => 'october.php'),
        'november' => array('title' => 'Reverse Engineering, Malware Analysis + Forensics, Cryptography', 'date' => 'November', 'image' => 'november.png', 'desc' => 'Analyze Information and crack encryption in this multi-layered CTF test of skill. These challenges were designed to test your analytical thinking, problem-solving skills, and technical expertise. Race against time, climb the leaderboard, and prove you’ve got what it takes to outsmart the rest. Only the sharpest minds make it to the top. Be one of them!', 'link' => 'november.php'),
        'december' => array('title' => 'Reverse Engineering, Malware Analysis', 'date' => 'December', 'image' => 'december.png', 'desc' => 'Tackle challenges like analyzing anti-debugging techniques, state machines, and network traffic. Perform dynamic analysis, debugging, and code injection investigations. Join the Hackerverse CTF and lead the charge in reverse engineering and malware analysis!', 'link' => 'december.php'),
    );

    $ordered_months = array_keys($months);
    $current_month_key = strtolower(date('F'));
    $current_index = array_search($current_month_key, $ordered_months);

    // Original group helper (allows Wrapping)
    function get_month_group($ordered_months, $months, $start, $count)
    {
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            $index = ($start + $i) % count($ordered_months);
            $key = $ordered_months[$index];
            $result[] = $months[$key];
        }
        return $result;
    }

    // New helper (no wrap for coming soon)
    function get_month_group_no_wrap($ordered_months, $months, $start, $count)
    {
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            $index = $start + $i;
            if ($index >= count($ordered_months)) {
                break; // stop if past December
            }
            $key = $ordered_months[$index];
            $result[] = $months[$key];
        }
        return $result;
    }

    // Use original for trending now
    $trending_now = get_month_group($ordered_months, $months, $current_index, 3);

    // Use no-wrap for coming soon
    $coming_soon = get_month_group_no_wrap($ordered_months, $months, $current_index + 3, 3);

    // Past challenges
    $past_challenges = [];
   
    for ($i = $current_index - 1; $i >= 0 && count($past_challenges) < 3; $i--) {
        $key = $ordered_months[$i];
        $past_challenges[] = $months[$key];
    }
    $past_challenges = array_reverse($past_challenges); // oldest to newest


    function render_cards($cyberChallenges, $type = 'default')
    {
        foreach ($cyberChallenges as $cyberChallenge) {
            $seal = ($type === 'past')
                ? 'assets/images/january/completed-challenges-seal.webp'
                : 'assets/images/january/upcoming-challenges-seal.webp';

            echo "
        <div class='row mt-4 pt-1'>
            <div class='col-md-4'>
                <div class='pos-rel'>
                    <img src='assets/images/january/{$cyberChallenge['image']}' alt='free-challenge-img' class='object-fit-cover h-auto w-100'>
                    <div class='monthbox'>
                        <div class='month-title'>
                            <span>{$cyberChallenge['date']}</span>
                        </div>
                    </div>
                    <div class='sealbox'>
                        <div class='seal-title'>
                            <img src='{$seal}' alt='challenges seal'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-6'>
                <p class='ctf-text m-0'>CTF Competition for {$cyberChallenge['date']}</p>
                <h3 class='analysis-text'>{$cyberChallenge['title']}</h3>
                <p class='analysis-desc mb-5'>{$cyberChallenge['desc']}</p>
                <a href='{$cyberChallenge['link']}' class='hackbtn my-2' role='button'>
                    <div class='btncopy'>
                        <span>Know More</span>
                        <span>Know More</span>
                    </div>
                </a>
            </div>
        </div>
        ";
        }
    }
    ?>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-7 col-12">
                <div><img src="assets/images/icons/join-cyber-challenge.svg" alt=""></div>
                <h1 class="challenge-heading text-capitalize mb-0">Register for the Hackerverse CTF Today to Access CTF
                    Challenges</h1>
            </div>
            <div class="col-md-5 col-12 text-right" style="text-align: right;">
                <ul class="nav nav-pills nav-fill outline-gradient rounded-pill rounded-circle align-items-center">
                    <li class="nav-item">
                        <button type="button" class="nav-link active tabs-text " id="pills-trending-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-trending" role="tab"
                            aria-controls="pills-trending" aria-selected="true">

                            Trending Now


                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link tabs-text " id="pills-coming-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-coming" role="tab" aria-controls="pills-coming" aria-selected="true">
                            Coming Soon

                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link tabs-text " id="pills-past-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-past" role="tab" aria-controls="pills-past" aria-selected="true">
                            Past Challenges
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Trending Now Tab Pane -->
            <div class="tab-pane fade show active" id="pills-trending" role="tabpanel"
                aria-labelledby="pills-trending-tab">





                <?php render_cards($trending_now, 'trending'); ?>

            </div>

            <div class="tab-pane fade" id="pills-coming" role="tabpanel" aria-labelledby="pills-coming-tab">



                <?php render_cards($coming_soon, 'coming'); ?>

            </div>
            <div class="tab-pane fade " id="pills-past" role="tabpanel" aria-labelledby="pills-past-tab">
                <?php render_cards($past_challenges, 'past'); ?>


            </div>


        </div>
    </div>
</section>
<!-- Hackerverse CTF Awards section end by shruti -->
<?php include('includes/footer.php'); ?>