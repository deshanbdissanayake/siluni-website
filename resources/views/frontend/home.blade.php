@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')

    <!-- banner area start -->
    <section class="rs-banner-area rs-banner-twelve p-relative">
        <div class="rs-banner-bg" data-background="web-assets/images/bg/banner-bg-10.png">
        </div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="rs-banner-content-wrapper">
                        <div class="rs-banner-content">
                            <span class="rs-banner-subtitle">Discover the Story of </span>
                            <h1 class="rs-banner-title wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".7s">Siluni Walakuluarachchige
                               
                                <span class="cd-headline slide rs-title-slide">
                                    <span class="cd-words-wrapper">
                                        <b class="is-hidden ">Mathematician</b>
                                        <b class="is-visible ">Young Author</b>
                                        <b class="is-hidden ">Global Math Champion</b>
                                    </span>
                                </span>
                            </h1>
                            <div class="rs-banner-description wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".9s">
                                <p>Siluni, a vibrant young voice from Sri Lanka, journeys from global stages to 
                                    national classrooms — where academic brilliance, social conscience, 
                                    and boundless curiosity converge to spark change and inspire the world.</p>
                            </div>
                            <div class="rs-banner-info-btn wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1.1s">
                                <div class="rs-banner-btn">
                                    <a class="rs-btn has-theme-yellow has-radius" href="contact.html">Learn More
                                    </a>
                                </div>
                                <div class="rs-banner-social">
                                    <div class="rs-banner-social">
                                        <div class="rs-theme-social has-white">
                                            <a href="#"><i class="ri-twitter-x-line"></i></a>
                                            <a href="#"><i class="ri-facebook-fill"></i></a>
                                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                                            <a href="#"><i class="ri-instagram-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="rs-banner-thumb wow fadeInRight" data-wow-delay=".9s" data-wow-duration="1.3s">
                        <img src="web-assets/images/banner/banner-thumb-12.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- about area start -->
    <section id="homeabout" class="rs-about-area section-space rs-about-twelve">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-about-thumb wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                        <img src="web-assets/images/about/about-thumb-09.png" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-about-content wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-section-title-wrapper">
                            <span class="rs-section-subtitle justify-content-start has-theme-yellow">
                                About Me
                            </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade mb-20">A Heart for Service. A Mind for Excellence.</h2>
                            <p class="rs-section-paragraph">Hello! I’m <strong>W.A. Siluni Tharulya Sadakini Gaganathara</strong>, a student at Colombo International School, passionate about two things: healing people and educating minds.</p>
                            <p class="rs-section-paragraph">I’m currently pursuing my A levels(Advanced level) and working toward a future in math, but my journey started much earlier — with a love for math and a desire to help others. From an early age, I was captivated by numbers and driven by a desire to uplift others through education. That passion has led me to earn international recognition in mental arithmetic, publish books designed to empower young learners, and stay deeply committed to using my knowledge to serve and strengthen my country.</p>
                            <p class="rs-section-paragraph">Here's a few things about me.</p>
                        </div>
                        <div class="rs-about-feature-list">
                            <ul>
                                <li>
                                    <i class="ri-instagram-line"></i>
                                    Double-promoted from Grade 7 to 9 
                                </li>
                                <li>
                                    <i class="ri-instagram-line"></i>
                                    Youngest Sri Lankan UCMAS graduate (Malaysia) 
                                </li>
                                <li>
                                    <i class="ri-instagram-line"></i>
                                    World Record Holder (Russian women’s forum at the sennet palace) – Mental Arithmetic
                                </li>
                                <li>
                                    <i class="ri-instagram-line"></i>
                                    Published author at age 7
                                </li>
                                <li>
                                    <i class="ri-instagram-line"></i>
                                    Future aspirations: Mathematician. Changemaker.
                                </li>

                            </ul>
                        </div>
                        {{-- <div class="rs-about-btn">
                            <a class="rs-btn has-theme-yellow has-radius has-hover-black" href="about.html">Explore Our
                                Journey
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- achievement area start -->
    <section id="homeachievements" class="rs-experience-area section-space secondary-bg rs-experience-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                        <span class="rs-section-subtitle justify-content-start has-theme-yellow">
                            Achievements
                        </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade mb-20">Milestones That Matter</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-experience-wrapper wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <div class="rs-section-title-wrapper section-title-space">
                            <h3 class="rs-experience-sub-title">Academic & Extracurricular</h3>
                        </div>
                        <div class="rs-experience-content">
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2008</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Auckland Edinburgh School</h5>
                                    <span class="rs-experience-meta">Education Science</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2019</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Victoria Collage of Wellington</h5>
                                    <span class="rs-experience-meta">Diploma in Engineering</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2021</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Victoria University of Wellington</h5>
                                    <span class="rs-experience-meta">Bachelor’s Degree</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2024</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Carnegie Mellon University</h5>
                                    <span class="rs-experience-meta">Software Engineering</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2021</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Flixta in Product Design (UI/UX)</h5>
                                    <span class="rs-experience-meta">Pinterest</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-experience-wrapper wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <div class="rs-section-title-wrapper section-title-space">
                            <h3 class="rs-experience-sub-title">Global Competitions</h3>
                        </div>
                        <div class="rs-experience-content">
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2024</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">UI/UX Designer</h5>
                                    <span class="rs-experience-meta">Dribbble</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2023</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">UX Design case study</h5>
                                    <span class="rs-experience-meta">Behance</span>
                                </div>
                            </div>
                            <div class="rs-experience-item">
                                <div class="left-part">
                                    <span class="rs-meta">2022</span>
                                </div>
                                <div class="right-part">
                                    <h5 class="rs-experience-title">Product Designer v/s Product Manage</h5>
                                    <span class="rs-experience-meta">Product Hunt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- achievement area end -->

    <!-- books area start -->
    <section id="homebooks" class="rs-blog-area rs-bg-light-grey rs-blog-one section-space has-theme-yellow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-section-title-wrapper section-title-space text-center">
                        <span class="rs-section-subtitle has-theme-yellow">
                    Update
                    </span>
                        <h2 class="rs-section-title rs-split-text-enable split-in-fade">Latest News & Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="swiper blog_active_one wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-01.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> App Development</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">Do you want to become a
                                                    professional</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">January 12,
                                            2024</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-02.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> Creative Branding</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">Do you want to become a
                                                    professional</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">January 12,
                                            2024</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-03.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> Product Design</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">Strengthen the foundations to
                                                    scale your business</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">May 25, 2024</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-04.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> Product Design</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">If you are new here then these
                                                    will work</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">June 12,
                                            2023</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-05.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> App Development</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">If you are new here then these
                                                    will work</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">June 12,
                                            2023</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="rs-blog-wrapper">
                                    <div class="rs-blog-item">
                                        <div class="rs-blog-thumb">
                                            <a href="blog-details.html"> <img src="web-assets/images/blog/blog-thumb-06.png" alt="image"></a>
                                            <div class="rs-blog-tag">
                                                <a href="blog-details.html"> Web Development</a>
                                            </div>
                                        </div>
                                        <div class="rs-blog-content">
                                            <h5 class="rs-blog-title"><a href="blog-details.html">Do you want to become a
                                                    professional</a></h5>
                                            <div class="rs-blog-meta-list">
                                                <div class="rs-blog-meta-item has-separator">
                                                    <span class="rs-meta-text"><a class="meta-author" href="blog-details.html">By
                                            flixta</a></span>
                                                </div>
                                                <div class="rs-blog-meta-item">
                                                    <span class="rs-meta-text"><a href="blog-details.html">June 12,
                                            2023</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- books area end -->
    
    <!-- my mission area start -->
    <section id="homemission" class="rs-why-choose-area rs-bg-light-grey section-space rs-why-choose-one">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-faq-wrapper rs-faq-three wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-section-title-wrapper mb-10">
                            <span class="rs-section-subtitle justify-content-start has-theme-yellow">
                        Why Choose Us
                    </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Let's Talk Any Question</h2>
                        </div>
                        <div class="rs-faq-content accordion-style-two has-theme-yellow">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExampleOne">
                                    <div class="accordion-item">
                                        <h4 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                                Our team consists of highly skilled photographers with extensive.
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h4>
                                        <div id="collapseNine" class="accordion-collapse collapse show" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body"> 10+ years later and I’ve learned that in order to
                                                succeed in this business, I need to be your business partner and problem
                                                solver. Which is the same as saying through shrinking from toil and pain these
                                                cases.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                We bring a unique artistic touch to every project, creating images.
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">10+ years later and I’ve learned that in order to
                                                succeed in this business, I need to be your business partner and problem
                                                solver. Which is the same as saying through shrinking from toil and pain these
                                                cases.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                Each session is tailored to meet your specific needs and preferences.
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">10+ years later and I’ve learned that in order to
                                                succeed in this business, I need to be your business partner and problem
                                                solver. Which is the same as saying through shrinking from toil and pain these
                                                cases.</div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                Our team maintains a high level of professionalism during shoots.
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h6>
                                        <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExampleOne">
                                            <div class="accordion-body">10+ years later and I’ve learned that in order to
                                                succeed in this business, I need to be your business partner and problem
                                                solver. Which is the same as saying through shrinking from toil and pain these
                                                cases.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="rs-why-choose-video-wrapper wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-why-choose-video-inner">
                            <video loop="" muted="" autoplay="" playsinline="">
                                <source src="web-assets/video/why-choose.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my mission area end -->

    <!-- contact area start -->
    <section id="homecontact" class="rs-contact-area rs-contact-one section-space p-relative  has-theme-yellow">
        <div class="rs-contact-bg" data-background="web-assets/images/bg/contact-bg-01.png">
        </div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-5 col-lg-5">
                    <div class="rs-contact-wrapper wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="rs-section-title-wrapper section-title-space">
                            <span class="rs-section-subtitle justify-content-start has-theme-yellow">Stay
                        connected
                    </span>
                            <h2 class="rs-section-title rs-split-text-enable split-in-fade">Let's Work Together!</h2>
                        </div>
                        <div class="rs-contact-list">
                            <div class="rs-contact-list-item">
                                <div class="rs-contact-icon">
                                    <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M3.65387 1.32849C3.40343 1.00649 2.92745 0.976861 2.639 1.26531L1.60508 2.29923C1.1216 2.78271 0.94387 3.46766 1.1551 4.06847C2.00338 6.48124 3.39215 8.74671 5.32272 10.6773C7.25329 12.6078 9.51876 13.9966 11.9315 14.8449C12.5323 15.0561 13.2173 14.8784 13.7008 14.3949L14.7347 13.361C15.0231 13.0726 14.9935 12.5966 14.6715 12.3461L12.3653 10.5524C12.2008 10.4245 11.9866 10.3793 11.7845 10.4298L9.59541 10.9771C9.00082 11.1257 8.37183 10.9515 7.93845 10.5181L5.48187 8.06155C5.04849 7.62817 4.87427 6.99919 5.02292 6.40459L5.57019 4.21553C5.62073 4.01336 5.57552 3.79918 5.44758 3.63468L3.65387 1.32849ZM1.88477 0.511076C2.62689 -0.231039 3.8515 -0.154797 4.49583 0.673634L6.28954 2.97983C6.6187 3.40304 6.73502 3.95409 6.60498 4.47423L6.05772 6.66329C5.99994 6.8944 6.06766 7.13888 6.2361 7.30732L8.69268 9.7639C8.86113 9.93235 9.1056 10.0001 9.33671 9.94229L11.5258 9.39502C12.0459 9.26499 12.597 9.3813 13.0202 9.71047L15.3264 11.5042C16.1548 12.1485 16.231 13.3731 15.4889 14.1152L14.455 15.1492C13.7153 15.8889 12.6089 16.2137 11.5778 15.8512C9.01754 14.9511 6.61438 13.4774 4.56849 11.4315C2.5226 9.38562 1.04895 6.98246 0.148838 4.42225C-0.213682 3.39112 0.11113 2.28472 0.85085 1.545L1.88477 0.511076Z"
                                    fill="#6D6D6D"></path>
                                <path
                                    d="M11 0.5C11 0.223858 11.2239 0 11.5 0H15.5C15.7761 0 16 0.223858 16 0.5V4.5C16 4.77614 15.7761 5 15.5 5C15.2239 5 15 4.77614 15 4.5V1.70711L10.8536 5.85355C10.6583 6.04882 10.3417 6.04882 10.1464 5.85355C9.95118 5.65829 9.95118 5.34171 10.1464 5.14645L14.2929 1H11.5C11.2239 1 11 0.776142 11 0.5Z"
                                    fill="#6D6D6D"></path>
                                </svg>
                            </span>
                                </div>
                                <div class="rs-contact-list-content">
                                    <span>Phone</span>
                                    <h6><a href="tel:+12346691234"> +123-4669-1234 </a></h6>
                                </div>
                            </div>
                            <div class="rs-contact-list-item">
                                <div class="rs-contact-icon">
                                    <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M2 2C0.895431 2 0 2.89543 0 4V12L2.58386e-05 12.0103C0.00555998 13.1101 0.898859 14 2 14H7.5C7.77614 14 8 13.7761 8 13.5C8 13.2239 7.77614 13 7.5 13H2C1.53715 13 1.14774 12.6855 1.03376 12.2586L6.67417 8.7876L8 9.5831L15 5.3831V8.5C15 8.77614 15.2239 9 15.5 9C15.7761 9 16 8.77614 16 8.5V4C16 2.89543 15.1046 2 14 2H2ZM5.70808 8.20794L1 11.1052V5.3831L5.70808 8.20794ZM1 4.2169V4C1 3.44772 1.44772 3 2 3H14C14.5523 3 15 3.44772 15 4V4.2169L8 8.4169L1 4.2169Z"
                                    fill="#6D6D6D"></path>
                                <path
                                    d="M14.2467 14.2686C15.2567 14.2686 15.8339 13.4116 15.8339 12.2442V12.0344C15.8339 10.4297 14.6402 9 12.5197 9H12.4847C10.421 9 9 10.3598 9 12.4322V12.6465C9 14.8195 10.4385 16 12.3579 16H12.4016C12.9963 16 13.4204 15.9257 13.639 15.8251V15.0949C13.3941 15.2042 12.9656 15.2742 12.4585 15.2742H12.4147C11.0812 15.2742 9.84385 14.4872 9.84385 12.6202V12.4628C9.84385 10.8057 10.9019 9.73891 12.4847 9.73891H12.524C14.0587 9.73891 15.0075 10.7883 15.0075 12.065V12.183C15.0075 13.158 14.6839 13.5734 14.3691 13.5734C14.1374 13.5734 13.9582 13.4247 13.9582 13.1537V10.9631H13.0531V11.5315H13.0225C12.9394 11.2342 12.6552 10.9019 12.0693 10.9019C11.2911 10.9019 10.8101 11.4572 10.8101 12.3011V12.8301C10.8101 13.722 11.2998 14.2642 12.0693 14.2642C12.5415 14.2642 12.9656 14.0369 13.0837 13.6215H13.1274C13.2455 14.0412 13.7439 14.2686 14.2467 14.2686ZM11.7939 12.6814V12.4541C11.7939 11.9076 12.0212 11.6627 12.3666 11.6627C12.664 11.6627 12.9394 11.8551 12.9394 12.371V12.7383C12.9394 13.3111 12.6858 13.4816 12.3754 13.4816C12.0212 13.4816 11.7939 13.2673 11.7939 12.6814Z"
                                    fill="#6D6D6D"></path>
                                </svg>
                            </span>
                                </div>
                                <div class="rs-contact-list-content">
                                    <span>Email</span>
                                    <h6><a href="mailto:hello@flixta.com">hello@flixta.com</a></h6>
                                </div>
                            </div>
                            <div class="rs-contact-list-item">
                                <div class="rs-contact-icon">
                                    <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18"
                                fill="none">
                                <path
                                    d="M11.8768 9.68475C11.3059 10.835 10.5331 11.9818 9.74128 13.0109C8.95198 14.0368 8.15999 14.9249 7.5643 15.5572C7.48514 15.6412 7.40956 15.7206 7.33802 15.7951C7.26648 15.7206 7.1909 15.6412 7.11174 15.5572C6.51605 14.9249 5.72406 14.0368 4.93476 13.0109C4.14299 11.9818 3.37019 10.835 2.79925 9.68475C2.22242 8.52266 1.89032 7.43373 1.89032 6.5C1.89032 3.50846 4.32934 1.08333 7.33802 1.08333C10.3467 1.08333 12.7857 3.50846 12.7857 6.5C12.7857 7.43373 12.4536 8.52266 11.8768 9.68475ZM7.33802 17.3333C7.33802 17.3333 13.8753 11.1732 13.8753 6.5C13.8753 2.91015 10.9484 0 7.33802 0C3.7276 0 0.800781 2.91015 0.800781 6.5C0.800781 11.1732 7.33802 17.3333 7.33802 17.3333Z"
                                    fill="#6D6D6D"></path>
                                <path
                                    d="M7.33802 8.66667C6.13455 8.66667 5.15894 7.69662 5.15894 6.5C5.15894 5.30338 6.13455 4.33333 7.33802 4.33333C8.54149 4.33333 9.5171 5.30338 9.5171 6.5C9.5171 7.69662 8.54149 8.66667 7.33802 8.66667ZM7.33802 9.75C9.14323 9.75 10.6066 8.29492 10.6066 6.5C10.6066 4.70507 9.14323 3.25 7.33802 3.25C5.53281 3.25 4.0694 4.70507 4.0694 6.5C4.0694 8.29492 5.53281 9.75 7.33802 9.75Z"
                                    fill="#6D6D6D"></path>
                                </svg>
                            </span>
                                </div>
                                <div class="rs-contact-list-content">
                                    <span>Address</span>
                                    <h6><a href="#"> 2096 New Market, New Road <br>
                                North Carolina, USA </a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="rs-contact-form wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                        <form id="contact-form" action="https://demo.rstheme.com/html/flixta/web-assets/mailer.php" method="POST">
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="rs-contact-input">
                                        <input id="name" name="name" type="text" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-contact-input">
                                        <input id="email" name="email" type="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-contact-input">
                                        <input id="phone" name="phone" type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="rs-contact-input">
                                        <div class="rs-contact-input">
                                            <select id="subject" name="subject">
                                                <option>Choose Service</option>
                                                <option value="one">Web Development</option>
                                                <option value="two">Digital Marketing</option>
                                                <option value="three">Brand Strategy</option>
                                                <option value="four">App Development</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="rs-contact-input">
                                        <textarea id="message" name="message" placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="rs-contact-btn">
                                        <button type="submit" class="rs-btn has-color has-radius">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->

    {{-- 
    
    <section class="gallery py-5 bg-light">
        <div class="container">
            <h2>Gallery</h2>
            <div class="row">
                @foreach($galleryImages as $image)
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid" alt="{{ $image->title }}">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="blog py-5">
         <div class="container">
             <h2>Recent Posts</h2>
             @foreach($blogPosts as $post)
             <div class="card mb-3">
                 <div class="card-body">
                     <h5 class="card-title">{{ $post->title }}</h5>
                     <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                     <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
             @endforeach
         </div>
    </section>

    <section class="contact py-5 bg-light">
         <div class="container">
             <h2>Contact Me</h2>
             <form action="{{ route('contact.store') }}" method="POST">
                 @csrf
                 <div class="mb-3">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                 <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                 </div>
                 <div class="mb-3">
                     <label for="message" class="form-label">Message</label>
                     <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary">Send</button>
             </form>
         </div>
    </section>

    --}}
@endsection