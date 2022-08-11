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
                                <h4>Posted Jobs</h4>
                                <p>Recommanded Trusted Buyer</p>
                          </div>
                    </div>
              </div>
              <div class="row">
                @foreach ($jobpost as $list)
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
@endsection
