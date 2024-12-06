@extends('app')

@section('title', 'Terms of Service')

@section('content')
<body class="main-demo">
    <!-- Page Heading -->
    <section class="page-heading">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <ul class="bread-crumbs">
                   <li><a href="{{route('index')}}">Home</a></li>
                   <li><a href="{{route('terms-of-service')}}">Terms of Service</a></li>
                </ul>
             </div>
             <div class="col-md-12">
                <div class="heading-title">
                   <h3>Terms of Service</h3>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- More Info ToS -->
    <section class="single-project">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="top-content">
                   <div class="row">
                      <div class="col-lg-8">
                         <div class="left-content">
                            <div class="section-heading">
                               <h1>ToS</h1>
                               <h2>Pay<em>ments</em>:</h2>
                               <p>1. There are no refunds, as all purchases are final due to the fact that it is a
                                  digital product.</p>
                               <p>2. If you open a refund, you will be blacklisted for purchases on Kyhlus Services and
                                  SirenStudios.</p>
                            </div>
                            <br>
                            <div class="section-heading">
                               <h1>ToS</h1>
                               <h2>Pro<em>ducts</em>:</h2>
                               <p>1. You cannot resell, distribute, or claim any files as your properly, as they are sold
                                  by Kyhlus Services. (THIS ONLY APPLIES FOR MCMARKET Resources)</p>
                               <p>2. Before any modification of any product, we cannot guarantee its integrity and you
                                  cancel any agreement made to making corrections. However, we will try to help you
                                  correct any errors and problems even after modifications.</p>
                               <p>3. If you use Kyhlus Services products to violate the Mojang EULA, we are not
                                  responsible.</p>
                            </div>
                            <br>
                            <div class="section-heading">
                               <h1>ToS</h1>
                               <h2>Agre<em>ement</em>:</h2>
                               <p>1. Kyhlus Services is not responsible if you accidentally delete or lose purchased
                                  products. We are not responsible for a refund or replacement.</p>
                               <p>2. These terms and conditions can change at any time without notification.</p>
                               <p>3. By purchasing a product from Kyhlus Services, you agree to the above terms. </p>
                            </div>
                            <br>
                         </div>
                      </div>
                      <div class="col-lg-4">
                         <div class="right-info">
                            <div class="row">
                               <div class="col-10">
                                  <ul>
                                     <li><span>Last Update:</span> Aug 17, 2024</li>
                                     <li><span>Edited by:</span> Directive of KServices</li>
                                  </ul>
                               </div>
                               <p>If you have problems with our Terms of Service, please open a <a href="#"
                                     target="_blank">ticket</a>.</p><br>
                               <br>
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