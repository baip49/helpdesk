@extends('app')

@section('content')

    <body class="main-demo">
        <!-- Header -->

        <!-- Main Banner -->
        <div class="main-banner">
            <!-- Particles -->
            <div class="page-bg"></div>
            <div class="animation-wrapper">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="left-content">
                                <h1>Kyhlus Services</h1>
                                <h6>We are make <br> Your dreams come true... <br> Excellent prices and high quality!</h6>
                                <div class="col-lg-12 text-center">
                                    <div class="order-now">
                                        <a href="#">Order Now</a>
                                    </div>
                                </div>
                                <div class="scroll-down">
                                    <div class="scroll-to-section">
                                        <a href="#features">
                                            <img src="images/scroll-dots-light.png" alt="">
                                            <span>Scroll Down</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why we? -->
        <div id="features"></div>
        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-heading">
                            <h1>We are the best</h1>
                            <h2>Why <em>Kyhlus Services</em>?</h2>
                            <p>Because we never stop improving our services and quality controls to increase the
                                capabilities of
                                our
                                team and
                                increase customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-item first-why">
                            <div class="icon">
                                <img src="images/01-why-icon.png" alt="">
                            </div>
                            <h4>Affordable Prices</h4>
                            <p>We will always offer you the quality you deserve at an ideal price.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item second-why">
                            <div class="icon">
                                <img src="images/02-why-icon.png" alt="">
                            </div>
                            <h4>Great Support</h4>
                            <p>We offer you all possible help from the first contact with us.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item third-why">
                            <div class="icon">
                                <img src="images/03-why-icon.png" alt="">
                            </div>
                            <h4>Fast Delivery</h4>
                            <p>We are always looking for new clients, that is why we ensure prompt attention.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent Projects -->
        <section class="recent-projects">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <div class="section-heading">
                            <h1>Projects</h1>
                            <h2>Our Recent <em>Projects</em></h2>
                            <p>We have successfully completed an impressive variety of projects, the latest of which are
                                shown
                                below.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="main-primary-button">
                            <a href="{{ route('portfolio') }}">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="loop owl-carousel">
                    <div class="item">
                        <img src="images/projects/skiesmc_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>SkiesMC</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/holyrock_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>HolyRock Community</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/instinctmc_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>InstinctMC</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/divinesaga_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>DivineSagas</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/akimlogo.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="https://www.youtube.com/@AkimStuff/videos" target="_blank"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>Akim Aguilar</h4>
                                <span>Media Edition</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/instinctmc_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>InstinctMC</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/orangemc2.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>OrangeMC</h4>
                                <span>Media Edition</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/dragonclubst.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>DragonClub Studios</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/projects/clanwarz_w.png" alt="">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="icon">
                                    <a href="#"><i class="fa fa-arrow-right"></i></a>
                                </div>
                                <h4>Clanwarz Network</h4>
                                <span>Graphic Design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fun Facts -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="fun-facts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3 text-center">
                                        <div class="count-area-content">
                                            <div class="count-digit first-digit">672</div>
                                            <div class="count-title">Hours Worked</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <div class="count-area-content">
                                            <div class="count-digit second-digit">17</div>
                                            <div class="count-title">Happy Clients</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <div class="count-area-content">
                                            <div class="count-digit third-digit">21</div>
                                            <div class="count-title">Projects Done</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <div class="count-area-content">
                                            <div class="count-digit fourth-digit">168</div>
                                            <div class="count-title">Cups of coffee</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Testimonials -->
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left">
                        <div class="section-heading">
                            <h1>Love Us</h1>
                            <h2>Clients <em>Love Us</em></h2>
                            <p>Our clients love us because we are attentive and listen to their needs. We pride ourselves on
                                offering
                                innovative solutions to everyday challenges.</p>
                            <div class="my-owl-nav">
                                <span class="my-prev-button">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </span>
                                <span class="my-next-button">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="owl-testimonials owl-carousel">
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>OpiOpi</h4>
                                    <span>OPI's Community</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“His support from the start has been incredible! He worked at times when our main
                                        player base
                                        was
                                        asleep to limit disturbances to the players and his communication is always prompt.”
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>Blackwargreymon</h4>
                                    <span>Client</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“Service was quick , done within 2 days even I have so many requests.
                                        <b>SrVanilla</b> is
                                        helpful in
                                        anything that you would request. he
                                        knows what he's doing.”
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>InstinctMC</h4>
                                    <span>Client</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“KServices was a pleasurable service provider. <b>SrVanilla</b> he took my completely
                                        design
                                        in the matter of a week and transformed it into something wonderful.”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>Exelt</h4>
                                    <span>Client</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“<b>SrVanilla</b> was very quick to respond and helped me resolve my issues in a
                                        timely
                                        manner
                                        considering so many things came up and had incredible patience.”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>FZM</h4>
                                    <span>HolyRock Community</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“I hired KServices, to make my discord for me, great service, friendly people and was
                                        helping
                                        me
                                        every step of the way, asking me constant questions about my idea while making it. I
                                        very
                                        much
                                        would hire these people again. Great work!”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item">
                                    <h4>SubliminalChaos</h4>
                                    <span>Client</span>
                                    <div class="icon">
                                        <img src="images/testimonial-icon.png" alt="">
                                    </div>
                                    <p>“KServices setup an new logo for me. Once my ticket was accepted, I dealt only with
                                        <b>SrJoshe</b>. I enjoyed dealing with him, I told him from the start that I knew
                                        little
                                        about making logos.
                                        He explained what he was doing at times, mostly in terms I could understand. I would
                                        recommend
                                        KServices, am very happy with their work.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
