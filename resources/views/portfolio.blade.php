@extends('app')

@section('title', 'Portfolio')

@section('content')
<body class="projects-page">
   
    <!-- Page Heading -->
    <section class="page-heading">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <ul class="bread-crumbs">
                   <li><a href="{{ route('index') }}">Home</a></li>
                   <li><a href="{{ route('portfolio') }}">Our Portfolio</a></li>
                </ul>
             </div>
             <div class="col-md-12">
                <div class="heading-title">
                   <h3>Portfolio</h3>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Projects Page -->
    <section class="recent-projects">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="portfolio-filters">
                   <ul>
                      <li class="active" data-filter="*">Show All</li>
                      <!-- <li data-filter=".category-setups">Setups</li>                    -->
                      <!-- <li data-filter=".category-development">Development</li>                  -->
                      <li data-filter=".category-designs">Designs</li>
                      <li data-filter=".category-media_edition">Media Edition</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="row masonry-layout filters-content normal-col-gap">
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
                         <img src="images/projects/instinctmc.png" alt="">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
                         <img src="images/projects/skiesmc.png" alt="">
                         <div class="item-content">
                            <div class="main-content">
                               <div class="icon">
                                  <a href="#"><i class="fa fa-arrow-right"></i></a>
                               </div>
                               <h4>SkiesMC</h4>
                               <span>Media Edition</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
                         <img src="images/projects/divinesaga.png" alt="">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
                         <img src="images/projects/clanwarz.png" alt="">
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
                   <div class="col-lg-4 masonry-item all category-setups">
                      <div class="thumb">
                         <img src="images/projects/holyrock.png" alt="">
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
                   </div>
                   <div class="col-lg-4 masonry-item all category-development">
                      <div class="thumb">
                         <img src="images/projects/instinctmc.png" alt="">
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
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
@endsection