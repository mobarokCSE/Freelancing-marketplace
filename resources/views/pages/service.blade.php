@extends('layouts.app2')
@section('content')
    <div class="breadcumb-area bg-img bg-overlay"
        style="background-image:url(http://127.0.0.1:8000/assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
    </div>

    <section class="dorne-about-area section-padding-100">
        <div class="container">
              <div class="row">
                    <div class="col-12">
                          <div class="section-heading dark text-center">
                                <span></span>
                                <h4>Recommanded Services</h4>
                                <p>FreelanWeb Recommanded Sellers</p>
                          </div>
                    </div>
              </div>
              <div class="row">
                @foreach ($sellers as $list)
                <div class="col-12 col-lg-4">
                <a href="{{ route('buyer_req_gig',$list->id) }}">
                    <div class="single-features-area service-gig">
                        <img src="{{ asset($list->image) }}" class="service-imge"

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
                </div>
                @endforeach
              </div>
        </div>
    </section>
@endsection
