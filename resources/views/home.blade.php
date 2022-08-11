@extends('layouts.app2')
@section('content')


<section class="dorne-welcome-area bg-img bg-overlay"
    style="background-image:url(assets/img/bg-img/visa/freelanweb.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                            <h2>Top Class freelancing market place</h2>
                            <h4>Choose service for your business</h4>
                    </div>
                </div>
        </div>
    </div>

</section>

<section class="dorne-about-area section-padding-100">
    <div class="container">
          <div class="row">
                <div class="col-12">
                      <div class="about-content text-center">
                            <h2>Discover your need with <br><span>Freelanweb</span></h2>
                            <p>We have the best freelancing service providing market in the world. We are pleased to introduce our
                                  reputation, credibility in international recruitment field in Human resources
                                  around the globe, and consequently request you to take service here.</p>
                      </div>
                </div>
          </div>
    </div>
</section>

<section class="visa-info-area visa-section-padding bg-default">
    <div class="container">
          <div class="row">

                <div class="col-12 col-md-6 col-lg-6">
                      <div class="">
                            {{-- <p class="visa-btn">PRE-REGISTRATION GOVERNMENT FEE
                            </p> --}}
                            <div class="section-heading bus-sol">
                                <h4> A business solution   designed <br> for teams</h4>
                                <p>

                                    Upgrade to a curated experience packed with tools and benefits, dedicated to businesses
                            </p>
                            <br>
                            <ul>
                                <li> <i class="fa fa-id-card fa-lg" aria-hidden="true"></i>
                                    Connect to freelancers with proven business experience
                                </li>
                                <li> <i class="fa fa-id-card fa-lg" aria-hidden="true"></i>
                                    Get matched with the perfect talent by a customer success manager
                                </li>
                                <li><i class="fa fa-id-card fa-lg" aria-hidden="true"></i>
                                    Manage teamwork and boost productivity with one powerful workspace
                                </li>
                                <li><i class="fa fa-id-card fa-lg" aria-hidden="true"></i>
                                     teamwork and boost productivity with one powerful workspace
                                </li>
                            </ul>
                          </div>
                      </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div>
                          <img class="wow fadeInUpBig" src="assets/img/bg-img/tour/business.png" alt="">
                    </div>
              </div>

          </div>
</section>

<section class="dorne-features-destinations-area">
    <div class="container-fluid">
          <div class="row">
                <div class="col-12">
                      <div class="section-heading dark text-center">
                            <span></span>
                            <h4>Recommanded Gigs</h4>
                            <p>Buy Now!</p>
                      </div>
                </div>
          </div>
          <div class="row">
                <div class="col-12">
                        <div class="features-slides owl-carousel">

                            @foreach ($sellers as $list)
                            <a href="{{ route('buyer_req_gig',$list->id) }}">
                            <div class="single-features-area">
                                <img src="{{ asset($list->image) }}"
                                      alt="">

                                <div class="price-start">
                                      <p>Price {{ $list->price }}$/starting</p>
                                </div>
                                <div
                                      class="feature-content d-flex align-items-center justify-content-between">
                                      <div class="feature-title">
                                            <h5> <i class="fa fa-user"></i> {{ $list->name }} </h5>
                                            <p>{{ $list->title }}</p>
                                      </div>
                                </div>
                            </div>
                                </a>
                            @endforeach
                        </div>
                </div>
          </div>
    </div>
</section>

<section class="dorne-about-area section-padding-100">
<div class="container">
      <div class="row">
            <div class="col-12">
                  <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Posted Jobs</h4>
                        <p>Recommanded Trusted Buyer</p>
                  </div>
            </div>
      </div>
      <div class="row">
        @foreach ($buyers as $list)
            <div class="col-12 col-lg-4">
                <div class="single-feature-events-area dt-2 job-post d-sm-flex align-items-center wow fadeInUpBig"
                        data-wow-delay="0.2s">
                        <div class="feature-events-content">
                            <p>Posted Jobs</p>

                            <h5>{{ $list->title }}</h5>
                            <p>{{ $list->desc }}</p>
                            <div>
                                <img class="dashboard-img" src="{{ asset($list->image) }}" alt="Card image cap">
                            </div>
                            <a href="{{ route('apply_work',$list->id) }}" class="btn dorne-btn delivery-btn">Apply job</a>

                        </div>
                    </div>
            </div>
            @endforeach
      </div>
</div>
</section>


<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100"
    style="background-image:url(assets/img/bg-img/visa/freelanweb.jpg)">
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                            <span></span>
                            <h4>Freelanweb Marketplace</h4>
                            <p>Awesome Experiences</p>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="owl-carousel features-slides-hu">
                        <div class="card card-3">
                            <div class="about-heading">
                                <h1>Selling on Freelanweb</h1>
                            </div>
                            <div class="about-paragraph">
                                <p> <strong>How to start selling :</strong>
                                    Freelanweb is the world's largest marketplace for digital services. Share your skills with our buyer community—and make money while you're at it! Whether you're a graphic designer, programmer, content writer, translator, or voice-over artist, Freelanweb is the place for you. Below, you can find great tips to start selling on Freelanweb.
                                    <br> <br>

                                    <strong>Creating a Gig :</strong>
                                    The service you offer and sell in the marketplace is called a "Gig." Your Gig is an opportunity to showcase your talent to potential buyers, and to provide them with all the information they may need before they choose to place an order with you.
                                    <br> <br>

                                    <strong>Editing a Gig :</strong>
                                    Your Gig allows you to showcase your talent to potential buyers, so it's important to provide all the relevant information needed before placing an order with you. This means that, occasionally, you should update and edit certain elements of your Gig.



                                        Whether it's pricing changes, adding new images or a video to your Gig gallery, providing extras, or rewriting your Gig description to demonstrate what your Gig entails, you always have the option to edit your Gig.

                                        You can edit your Gig at any stage of the Gig creation process: Overview, Pricing, Description , and Gallery:
                                    <br> <br>
                                </p>
                            </div>
                    </div>
                    <div class="card card-3">
                            <div class="about-heading">
                                <h1>Buying on Freelanweb</h1>
                            </div>
                            <div class="about-paragraph">
                                <p>Know the ins and outs of outsourcing and benefit from everything Freelanweb has to offer. From finding a freelancer to getting deliveries to your virtual doorstep, we’ll walk you through the steps to success.
                                    <br>    <br>

                                    <strong>Using Freelanweb takes a simple count to five…</strong> <br><br>

                                    Search. Your business needs it, our freelancers can make it. With advanced search options, getting what you want just got a lot easier
                                    <br><br>
                                            Choose. Keep your standards high and your brand aligned by reading reviews and screening work samples to help you meet your perfect match

                                            <br><br>
                                            Get specific. Contact your chosen seller to share your requirements and get the right results.
                                            <br><br>
                                            Place an order. Now get back to work while your Freelanweb freelancers work for you.

                                            <br><br>
                                            Ding dong – delivery! Your finished order will arrive right in your inbox. Give your stamp of approval and get ready for the next great thing.

                                </p>
                            </div>
                    </div>
                            <div class="card card-3">
                                <div class="about-heading">
                                        <h1>Help & Support</h1>
                                </div>
                                <div class="about-paragraph">
                                        <p><strong>Account security :</strong>
                                            ID Verified Sellers
                                            ID verification: Data protection and usage
                                            Verifying your account using your phone
                                            Keeping your account safe from malware and phishing
                                            Verify your identity
                                            Password, security question and two-factor authentication
                                            Data and privacy <br> <br>

                                            <strong>Buyer order management: </strong>
                                            Using the Resolution Center
                                            How to cancel an order
                                            Brief & Match: Finding you sellers
                                            What does my order status mean?
                                            Seller Coupons
                                            Milestones
                                            Blocking certain sellers Academic services on Freelanweb  - The Dos and Don’ts
                                            Data science and data-related services
                                            Subscriptions
                                            Responding to a Custom Order Request
                                            Buyer Request: Tips
                                            How do I remove the work sample from my Live Portfolio?
                                            Freelanweb Select: Buyer loyalty program
                                            "For Commercial Use" license details</p>
                                </div>
                            </div>
                            <div class="card card-3">
                                <div class="about-heading">
                                        <h1>Trust & Safety</h1>
                                </div>
                                <div class="about-paragraph">
                                        <p><strong>Personal Details :</strong>
                                            Freelanweb values your privacy. Your data is secure at all times and we'll never share your personal information with third parties.
                                            <br> <br>
                                            <strong>Safe Payments :</strong>
                                                All transactions are conducted on the Freelanweb platform. Whether a buyer uses a credit card, PayPal or other form of payment, we handle everything, and ensure the security of your personal details. Freelanweb is committed to the highest security standards as a Level 1 PCI-DSS service provider.
                                                <br><br>

                                                <strong>Secure Communications :</strong>
                                                You can safely communicate and exchange files with any Seller on Freelanweb through our secure messaging system.
                                        </p>
                                </div>
                            </div>

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
                            <h4>Popular professional services</h4>
                            <p>Awesome Experiences</p>
                      </div>
                </div>
          </div>
          <div class="row">
                <div class="col-12">
                      <div class="owl-carousel features-slides-custom">

                            <div class="single-features-area">
                                  <img src="assets/img/bg-img/tour/logo.jpg" alt="">
                                  <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                              <h5>logo Design</h5>
                                              <p>build your brand</p>
                                        </div>
                                        <div class="feature-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                  </div>
                            </div>

                            <div class="single-features-area">
                                  <img src="assets/img/bg-img/tour/web-design.jpg" alt="">
                                  <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                              <h5>Web Design</h5>
                                              <p>Costomize your site</p>
                                        </div>
                                        <div class="feature-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                  </div>
                            </div>

                            <div class="single-features-area">
                                  <img src="assets/img/bg-img/tour/seo.jpg" alt="">
                                  <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                              <h5>SEO</h5>
                                              <p>Tranding Rank</p>
                                        </div>
                                        <div class="feature-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                  </div>
                            </div>

                            <div class="single-features-area">
                                  <img src="assets/img/bg-img/tour/d-market.jpg" alt="">
                                  <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                              <h5>Marketing</h5>
                                              <p>Go global</p>
                                        </div>
                                        <div class="feature-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                  </div>
                            </div>

                            <div class="single-features-area">
                                  <img src="assets/img/bg-img/tour/grapic.jpg" alt="">
                                  <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                              <h5>Grapic Design</h5>
                                              <p>Awesome expericne</p>
                                        </div>
                                        <div class="feature-favourite">
                                              <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                  </div>
                            </div>
                      </div>
                </div>
          </div>
    </div>
</section>



<section class="dorne-features-restaurant-area bg-default">
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                            <span></span>
                            <h4>Tranding Services</h4>
                            <p>Order Now</p>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">

                            <div class="single-features-area">
                                <img src="assets/img/airlines/brand.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/card.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/blog.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/graphic.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/info.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/video.jpg" alt="">
                            </div>
                            <div class="single-features-area">
                                <img src="assets/img/airlines/seo.jpg" alt="">
                            </div>
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
                            <h4>Get inspired with projects made by our freelancers</h4>
                            <p>Journey with Us</p>
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-12">
                    <div class="owl-carousel features-slides-custom">

                            <div class="single-features-area">
                                <img src="assets/img/bg-img/tour/web.jpg" alt="">
                                <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                            <h5>Web & Mobile Design</h5>
                                            <p>build your web</p>
                                        </div>
                                </div>
                            </div>

                            <div class="single-features-area">
                                <img src="assets/img/bg-img/tour/ani.jpg" alt="">
                                <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                            <h5>Animated GIFs</h5>
                                            <p>animation looks</p>
                                        </div>
                                </div>
                            </div>

                            <div class="single-features-area">
                                <img src="assets/img/bg-img/tour/flyer.jpg" alt="">
                                <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                            <h5>Flyer Design</h5>
                                            <p>flyer experience</p>
                                        </div>
                                </div>
                            </div>

                            <div class="single-features-area">
                                <img src="assets/img/bg-img/tour/social.jpg" alt="">
                                <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                            <h5>Social Media Design</h5>
                                            <p>social media</p>
                                        </div>
                                </div>
                            </div>

                            <div class="single-features-area">
                                <img src="assets/img/bg-img/tour/book.jpg" alt="">
                                <div
                                        class="feature-content d-flex align-items-center justify-content-between">
                                        <div class="feature-title">
                                            <h5>Book Design</h5>
                                            <p>design books</p>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50"
style="background-image:url(assets/img/bg-img/xhero-3.jpg.pagespeed.ic.cEmllqYsTl.jpg)">
<div class="container">
      <div class="row">
            <div class="col-12">
                  <div class="section-heading text-center">
                        <span></span>
                        <h4>Our certificates</h4>
                        <p>Travel with us!</p>
                  </div>
            </div>
      </div>
      <div class="row">
            <div class="col-12 col-lg-6">
                  <div class="wow fadeInUpBig" data-wow-delay="0.2s">
                        <img src="assets/img/bg-img/certificate_demo.jpg" alt="">
                  </div>
            </div>
            <div class="col-12 col-lg-6">
                  <div class="wow fadeInUpBig" data-wow-delay="0.2s">
                        <img src="assets/img/bg-img/certificate_demo.jpg" alt="">
                  </div>
            </div>
      </div>
</div>
</section>

@endsection
