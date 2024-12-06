@extends('app')

@section('title', 'Services')

@section('content')

    <body class="services-page">
        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bread-crumbs">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="heading-title">
                            <h3>Services</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <div id="features"></div>
        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-heading">
                            <h1>Services</h1>
                            <h2>Our <em>Services</em></h2>
                            <p>We are constantly incorporating services to our areas according to our new members, these are
                                the
                                areas where our work is summarized.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-item sixth-feature">
                            <div class="icon">
                                <img src="images/04-features-icon.png" alt="">
                            </div>
                            <h4>Media Edition</h4>
                            <p>Area that defines various jobs such as video editing, trailer creation, map renders and short
                                films.</p>
                            <div class="main-primary-button">
                                <a href="#">Order Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature-item third-feature">
                            <div class="icon">
                                <img src="images/02-features-icon.png" alt="">
                            </div>
                            <h4>Design</h4>
                            <p>Area composed of graphic design, skins designs for minecraft and web layout, ask for more
                                information!</p>
                            <div class="main-primary-button">
                                <a href="#">Order Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                 <div class="feature-item second-feature">
                   <div class="icon">
                     <img src="images/02-features-icon.png" alt="">
                   </div>
                   <h4>Design</h4>
                   <p>Area composed of graphic design, skins designs for minecraft and web layout, ask for more information!</p>
                   <div class="main-primary-button">
                     <a href="#">Order Now!</a>
                   </div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="feature-item fourth-feature">
                   <div class="icon">
                     <img src="images/04-features-icon.png" alt="">
                   </div>
                   <h4>Media Edition</h4>
                   <p>Area that defines various jobs such as video editing, trailer creation, map renders and short films.</p>
                   <div class="main-primary-button">
                     <a href="https://discord.com/invite/hcns7c29eY">Order Now!</a>
                   </div>
                 </div>
               </div> -->
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
                                            <div class="count-digit first-digit">4750</div>
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
                                            <div class="count-digit fourth-digit">36</div>
                                            <div class="count-title">Awards Won</div>
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
                                offering innovative solutions to everyday challenges.</p>
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
                                        knows what he's doing.”</p>
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
