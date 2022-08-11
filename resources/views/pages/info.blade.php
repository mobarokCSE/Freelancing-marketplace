@extends('layouts.app2')
@section('content')


<div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(http://127.0.0.1:8000/assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div>

    <section class="dorne-about-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content">
                        <h2>About<br><span>Freelanweb</span></h2>
                        <p>
                            <strong>Why we're here-</strong><br>
                            We create opportunities for anyone in the world to build their business, brand, or dream.
                            <br><br><strong>Our Online Economy- </strong><br>
                            The video below illustrates the freelanweb online economy. The pink lines indicate where projects are being posted by employers, and the blue lines indicate where the projects are being performed by freelanwebs. Thicker lines indicate a higher dollar volume of work. White dots indicate the location of freelanweb's users.
                            <br><br><strong>Provenance-</strong><br>
                            freelanweb.com has acquired several outsourcing marketplaces including GetAfreelanweb.com and EUFreelance.com (founded by Magnus Tibell in 2004, Sweden), LimeExchange (a former business of Lime Labs LLC, USA), Scriptlance.com (founded by Rene Trescases in 2001, Canada, one of the early pioneers in freelancing), freelanweb.de Booking Center (Germany), freelanweb.co.uk (United Kingdom), Webmaster-talk.com (USA), a forum for webmasters, Rent-A-Coder and vWorker (founded by Ian Ippolito, USA, another early innovator in the freelance marketplace space).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dorne-features-destinations-area destination">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Popular freelanweb services</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel features-slides-airliens">
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/blog.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/seo.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/graphic.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/brand.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/info.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/card.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/digital.jpg') }}" alt="">
                        </div>
                        <div class="single-features-area">
                            <img src="{{ asset('assets/img/airlines/video.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
