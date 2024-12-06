@extends('app')

@section('title', 'About')

@section('content')
    <body class="about-page">
        
        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bread-crumbs">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about')}}">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="heading-title">
                            <h3>About Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- More About Us -->
        <section class="about-me">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-heading">
                            <h1>About Us</h1>
                            <h2>More <em>About Us</em></h2>
                            <p><b>Kyhlus Services</b> is a Service Team founded in November 2020 with the goal of become one
                                of
                                the best
                                offering differents services in the market.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="right-image">
                            <img src="images/logo-k.gif" alt="">
                            <!--http://placehold.it/540x410-->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="left-content">
                            <h2>We are small <em>service</em> agency...</h2>
                            <p>We are a talented team dedicated to offering different services, we seek innovation every day
                                to
                                offer
                                the best quality.</p>
                            <span class="testimonial">“We never stop improving our services and quality controls to increase
                                the
                                capabilities of our team and increase customer satisfaction.”</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="skill-item">
                                        <h6>Support in Spanish & English</h6>
                                        <div class="skill-bar fourth-bar">
                                            <span class="percentage">99%</span>
                                            <div class="filled-bar"></div>
                                            <div class="unfilled-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="skill-item">
                                        <h6>Fast Delivery</h6>
                                        <div class="skill-bar fourth-bar">
                                            <span class="percentage">99%</span>
                                            <div class="filled-bar"></div>
                                            <div class="unfilled-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="skill-item">
                                        <h6>Customer Support</h6>
                                        <div class="skill-bar fourth-bar">
                                            <span class="percentage">99%</span>
                                            <div class="filled-bar"></div>
                                            <div class="unfilled-bar"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="skill-item">
                                        <h6>Suitable for projects</h6>
                                        <div class="skill-bar fourth-bar">
                                            <span class="percentage">99%</span>
                                            <div class="filled-bar"></div>
                                            <div class="unfilled-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video
             <div class="container">
               <div class="row">
                 <div class="col-lg-10 offset-lg-1">
                   <section class="video">
                     <div class="row">
                       <div class="col-lg-12">
                         <div class="play-button">
                           <a href="http://youtube.com"><i class="fa fa-play"></i></a>
                         </div>
                       </div>
                     </div>
                   </section>
                 </div>
               </div>
             </div>-->
        <!-- Team Members -->
        <section class="team-members">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-left align-self-center">
                        <div class="section-heading">
                            <h1>Team</h1>
                            <h2>Meet Our <em>Team</em></h2>
                            <p>Our team is your team. When your mission is to be better, faster, and smarter, you need the
                                best
                                people
                                to drive your vision. You need people who can create and innovate your community. You need
                                Kyhlus
                                Services. Meet his team below.</p>
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
                                <img src="images/staff/SrVanilla.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>SrVanilla#6955</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><a href="/"><i class="fa fa-globe" style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://twitter.com/Kyhlus" target="_blank"><i class="fa fa-twitter"
                                                style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/SrJoshe.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>Jxshe#2020</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><a href="/"><i class="fa fa-globe" style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://twitter.com/iJoshex" target="_blank"><i class="fa fa-twitter"
                                                style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://github.com/J-xshe" target="_blank"><i class="fa fa-github"
                                                style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/Aarxn.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>Aarxn#0529</h4>
                                        <span>Video Editor</span>
                                    </div>
                                    <span><a href="https://stimxey.xyz/" target="_blank"><i class="fa fa-globe"
                                                style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://twitter.com/Stimxey" target="_blank"><i class="fa fa-twitter"
                                                style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://github.com/Stimxey" target="_blank"><i class="fa fa-github"
                                                style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/ANTTO.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>antʇo#0810</h4>
                                        <span>Skin Maker</span>
                                    </div>
                                    <span><a href="https://twitter.com/anttoofficial" target="_blank"><i
                                                class="fa fa-twitter" style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://www.behance.net/anttoofficial" target="_blank"><i
                                                class="fa fa-behance" style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/MariDino.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>MariDino#5483</h4>
                                        <span>Graphic Designer</span>
                                    </div>
                                    <span><a href="https://twitter.com/MariDino_" target="_blank"><i
                                                class="fa fa-twitter" style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://www.behance.net/maridinoart" target="_blank"><i
                                                class="fa fa-behance" style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/Element.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>ItzElement#8638</h4>
                                        <span>Video Editor</span>
                                    </div>
                                    <span><a href="https://twitter.com/ItzElement_" target="_blank"><i
                                                class="fa fa-twitter" style="color: #1C6F73"></i></a></span>
                                    <span><a href="https://www.youtube.com/channel/UCLuqWrnHjQhvod77JPji7oQ"
                                            target="_blank"><i class="fa fa-youtube-play"
                                                style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/staff/JuanDraw.png" alt="">
                                <div class="item-content">
                                    <div class="main-content">
                                        <h4>JuanDrAw#8559</h4>
                                        <span>Video Editor</span>
                                    </div>
                                    <span><a href="https://twitter.com/SrJuanDrAw" target="_blank"><i
                                                class="fa fa-twitter" style="color: #1C6F73"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients
           <div class="container">
             <div class="row">
               <div class="col-lg-10 offset-lg-1">
                 <section class="clients">
                   <div class="row">
                     <div class="col-lg-12">
                       <div class="row">
                         <div class="owl-clients owl-carousel">
                           <div class="item">
                             <a href="https://www.mc-market.org/threads/644232/" target="_blank"><img src="images/serv-01.png"
                                 alt=""></a>
                           </div>
                           <div class="item">
                             <img src="images/serv-02.png" alt="">
                           </div>
                           <div class="item">
                             <a href="http://discord.kyhlus.com/" target="_blank"><img src="images/serv-03.png" alt=""></a>
                           </div>
                           <div class="item">
                             <img src="images/serv-04.png" alt="">
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </section>
               </div>
             </div>
           </div> -->
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
                                        about making
                                        logos.
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
