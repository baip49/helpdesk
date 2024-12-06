@extends('app')

@section('title', 'Privacy Policy')

@section('content')
    <body class="main-demo">
        <!-- Page Heading -->
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bread-crumbs">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="heading-title">
                            <h3>Privacy Policy</h3>
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
                                            <h1>Introduction</h1>
                                            <h2>Intro<em>duction</em>:</h2>
                                            <p><b>Kyhlus Services</b> is committed to keeping your information private,
                                                safe, and
                                                secure. The data we collect and what we use it for is outlined in this
                                                document.</p>
                                        </div>
                                        <br>
                                        <div class="section-heading">
                                            <h1>We collect</h1>
                                            <h2>Information <em>collection</em>:</h2>
                                            <p><b>Kyhlus Services</b> may collect information about the services you request
                                                and how
                                                you request them, such as your reactions and responses to our Discord bots.
                                                We may also
                                                collect any additional information you share with us pertaining to payments,
                                                including
                                                your email and similar data.</p>
                                            <br>
                                            <p>When you contact us or request a service through Kyhlus Service's bots, we
                                                may keep a
                                                record of this communication to reference in any support tickets, payment
                                                disputes, or
                                                other issues.</p>
                                        </div>
                                        <br>
                                        <div class="section-heading">
                                            <h1>Information Use</h1>
                                            <h2>Information <em>use & security</em>:</h2>
                                            <p>The information we collect is used to maintain, improve, provide, and protect
                                                the
                                                services that Kyhlus Services offers, to develop new services and products,
                                                and to
                                                protect Kyhlus Services’s users, freelancers, and management. </p>
                                            <br>
                                            <p>Keep in mind that forums, comment sections, and public Discord channels are
                                                public and
                                                available for anyone to read. This does not include commission-specific
                                                channels or
                                                support tickets; those are private, and your information will not be
                                                distributed
                                                outside of those channels should you provide it there.</p>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="right-info">
                                        <div class="row">
                                            <div class="col-10">
                                                <ul>
                                                    <li><span>Last Update:</span> Nov 10, 2024</li>
                                                    <li><span>Edited by:</span> Directive of KServices</li>
                                                </ul>
                                            </div>
                                            <p>If you have problems with our Privacy Policy, please open a <a href="#"
                                                    target="_blank">ticket</a>.</p><br>
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
