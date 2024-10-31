@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="main-section">
        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{ asset('images/slider/slide-1.jpg') }}"
						>
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Lorem ipsum dolor sit.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum harum ratione repellendus quos pariatur?</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Discover More<span></span></a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="images/slider/slide-2.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Lorem ipsum dolor sit.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, esse?</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Discover More<span></span></a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="images/slider/slide-3.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Lorem ipsum dolor sit amet.</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus!</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Discover More<span></span></a> 
                                </div>
                            </div>
                        </div> <!-- end slide-inner --> 
                    </div><!-- end swiper-slide --> 
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->

       
        <!-- start features-section -->
        <section class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="feature-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-sheriff"></i>
                                </div>
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex possimus minus est voluptates magnam sed ullam at repudiandae. Ipsum amet ut qui id odit nesciunt molestias, soluta tenetur perspiciatis placeat.</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-diamond"></i>
                                </div>
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex possimus minus est voluptates magnam sed ullam at repudiandae. Ipsum amet ut qui id odit nesciunt molestias, soluta tenetur perspiciatis placeat.</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-idea"></i>
                                </div>
                                <h3>Lorem, ipsum.</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex possimus minus est voluptates magnam sed ullam at repudiandae. Ipsum amet ut qui id odit nesciunt molestias, soluta tenetur perspiciatis placeat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end features-section -->


        <!-- start work-process-section -->
        <section class="work-process-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="section-title">
                            <span>Our wrok process</span>
                            <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, nihil? Qui ipsa, in ad voluptatem modi repellendus facere doloribus nesciunt perspiciatis soluta repellat possimus rem quia enim vel, perferendis labore.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col col-lg-10 col-lg-offset-1">
                        <div class="work-process-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-idea"></i>
                                </div>
                                <h3>01. Lorem, ipsum.</h3>
                                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, aperiam. </p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-diamond"></i>
                                </div>
                                <h3>02. Lorem, ipsum.</h3>
                                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, aperiam. </p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-sheriff"></i>
                                </div>
                                <h3>03. Lorem, ipsum.</h3>
                                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, aperiam. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end work-process-section -->


        <!-- start about-section-s2 -->
        <section class="about-section-s2">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-md-push-6">
                        <div class="section-title-s2">
                            <span>Lorem ipsum dolor sit.!</span>
                            <h2>Lorem, ipsum dolor. <br>Lorem, ipsum.</h2>
                        </div>
                        <div class="about-content">
                            <h4>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At eaque est maiores illo hic a eos praesentium voluptatibus inventore in laboriosam, dolor eius doloribus quam. Unde vel cumque soluta nostrum.</p>
                            <h5>Phone: 012345645, +6546521145</h5>
                        </div>
                    </div>
                    <div class="col col-md-6 col-md-pull-6">
                        <div class="img-holder">
                            <img src="images/about-2.jpg" alt>
                            <div class="experience-text">
                                25 Years of <span>Experience</span>
                            </div>
                            <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section-s2 -->


        <!-- start services-section-s2 -->
        <section class="services-section-s2">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="section-title-s3">
                            <span>Services</span>
                            <h2>lorem</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates consequatur nesciunt laborum quos corrupti totam, accusantium error eligendi dolorem et possimus magni reprehenderit enim nihil quo mollitia ducimus sequi. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="services-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-gift"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-suitcase"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-stats"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-start"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-chess-piece"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-green-energy"></i>
                                </div>
                                <h3><a href="#">lorem</a></h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente optio possimus nesciunt fugiat maiores consequuntur quasi? Nostrum, quas fugit aspernatur a sapiente error accusantium architecto esse fugiat. Minus, dolores porro!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end services-section-s2 -->


        <!-- start testimonials-section -->
        <section class="testimonials-section section-padding">
            <h2 class="hidden">Testimonials</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="testimonials-area">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, libero pariatur. Explicabo, ut voluptas, qui odit excepturi facilis dolore at odio nostrum officiis, quae enim tenetur autem neque nam sapiente.</p>
                            <span class="quoter">Thomas Calvin</span>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end testimonials-section -->


        <!-- start projects-section -->
        <section class="projects-section">
            <div class="content-area">
                <div class="project-grids projects-slider">
                    <div class="grid">
                        <div class="img-holder">
                            <img src="images/projects/img-1.jpg" alt>
                        </div>
                        <div class="hover-content">
                            <div class="top-link">
                                <a href="#"><i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="details">
                                <h3>Lorem, ipsum.</h3>
                                <p class="cat">lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="images/projects/img-2.jpg" alt>
                        </div>
                        <div class="hover-content">
                            <div class="top-link">
                                <a href="#"><i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="details">
                                <h3>Lorem, ipsum.</h3>
                                <p class="cat">lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="images/projects/img-3.jpg" alt>
                        </div>
                        <div class="hover-content">
                            <div class="top-link">
                                <a href="#"><i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="details">
                                <h3>Lorem, ipsum.</h3>
                                <p class="cat">lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="img-holder">
                            <img src="images/projects/img-4.jpg" alt>
                        </div>
                        <div class="hover-content">
                            <div class="top-link">
                                <a href="#"><i class="fi flaticon-next"></i></a>
                            </div>
                            <div class="details">
                                <h3>Lorem, ipsum.</h3>
                                <p class="cat">lorem</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end projects-section -->


        <!-- start fun-fact-section -->
        <section class="fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <div class="fi flaticon-diamond"></div>
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="25">00</span>+</h3>
                                    <p>Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <div class="fi flaticon-happy"></div>
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="250">00</span>+</h3>
                                    <p>Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <div class="fi flaticon-projector"></div>
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="137">00</span>+</h3>
                                    <p>Lorem, ipsum.</p>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <div class="fi flaticon-medal"></div>
                                </div>
                                <div class="info">
                                    <h3><span class="odometer" data-count="13">00</span>+</h3>
                                    <p>Lorem, ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end fun-fact-section -->


        <!-- start cta-with-team-section -->
        <section class="cta-with-team-section section-padding">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="cta-content">
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"><i class="fi flaticon-video-player"></i><span>See more about our company</span></a>
                            </div>
                            <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h3>
                        </div>
                    </div>
                </div>
                <div class="team-section">
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="section-title-s4">
                                <span>Team members</span>
                                <h2>See our passionate <br>team members</h2>
                            </div>                    
                        </div>
                        <div class="col col-md-6">
                            <div class="title-text">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque nobis rem delectus inventore at laborum vel, explicabo praesentium voluptate. Inventore corporis accusantium tempore. Itaque eius hic necessitatibus doloremque inventore blanditiis!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-xs-12">
                            <div class="team-grids clearfix">
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="images/team/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Morkal Akunda</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="images/team/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Tiptop Jonathon</h5>
                                        <span>Developer</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="images/team/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Aleon Dela</h5>
                                        <span>Programmer</span>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <img src="images/team/img-4.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h5>Beila kelar</h5>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-with-team-section -->


        <!-- start cta-with-partners -->
        <section class="cta-with-partners">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>Meet up</span>
                            <h2>Lorem, ipsum dolor. <br>Emet?</h2>
                        </div>  
                        <div class="cta-text">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam sed hic libero dolorem autem pariatur nisi voluptatibus voluptate adipisci voluptatum mollitia iusto, velit, molestiae in temporibus tempora eveniet laudantium reprehenderit. </p>
                            <a href="#" class="theme-btn-s2">Get In Touch</a>
                        </div>              
                    </div>
                    <div class="col col-md-6">
                        <div class="partner-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="images/partners/img-1.png" alt>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="images/partners/img-2.png" alt>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="images/partners/img-3.png" alt>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="images/partners/img-4.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-with-partners -->


        <!-- start contact-section -->
        <section class="contact-section">
            <div class="content-area">
                <div class="left-col">
                    <div class="contact-message">
                        <h4>Don’t hesitate to contact with us. phone: 01245643654</h4>
                    </div>
                </div>
                <div class="right-col">
                    <div class="section-title-s2">
                        <span>Contact</span>
                        <h2>Request a free consulting</h2>
                    </div> 
                    <div class="contact-form">
                        <form method="post" class="contact-validation-active" id="contact-form">
                            <div>
                                <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control"  name="subject" id="subject" placeholder="Subject*">
                            </div>
                            <div class="comment-area">
                                <textarea  name="note"  id="note" placeholder="Description*"></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn-s2">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div> <!-- end content-area -->
        </section>
        <!-- end contact-section -->
        

        <!-- start blog-section -->
        <section class="blog-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>News</span>
                            <h2>Latest News & <br>Events</h2>
                        </div>  
                    </div>                
                    <div class="col col-md-6">
                        <div class="section-title-text">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet maiores dolor quas sapiente consequatur corrupti omnis a accusantium. Placeat iste quis beatae laborum quas asperiores expedita alias eum sequi laudantium! </p>
                        </div>  
                    </div>                
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="blog-grids clearfix">
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="images/blog/img-1.jpg" alt>
                                </div>
                                <div class="entry-date">
                                    <h4>16</h4>
                                    <span>Feb <br>2019</span>
                                </div>
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a></h3>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="images/blog/img-2.jpg" alt>
                                </div>
                                <div class="entry-date">
                                    <h4>17</h4>
                                    <span>Feb <br>2019</span>
                                </div>
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a></h3>
                            </div>
                            <div class="grid">
                                <div class="entry-media">
                                    <img src="images/blog/img-3.jpg" alt>
                                </div>
                                <div class="entry-date">
                                    <h4>18</h4>
                                    <span>Feb <br>2019</span>
                                </div>
                                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-section -->
    </section>
@endsection
