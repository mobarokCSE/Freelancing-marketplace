{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Buyer-Dashboard
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.app2')
@section('content')

<div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div>

<section class="dorne-about-area section-padding-100">
    <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                      <h2>Welcome Buyer <span>{{ Auth::user( )->name }}</span></h2>
                </div>
          </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card p-10">
                        <div class="card-image">
                            <img class="card-img-top" src="{{ asset(auth()->user()->image) }}" alt="Card image cap">
                        </div>
                        <div class="card-body team-member">
                            <h5 class="card-title buyer-name">{{ Auth::user( )->name }}</h5>
                            <p class="card-text ">{{ Auth::user( )->email }}</p>
                            <p class="card-text ">{{ Auth::user( )->phone }}</p>
                            <p class="card-text ">{{ Auth::user( )->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-8 col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Crate Job Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-3"  role="tab">Delivered Job</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-4"  role="tab">Seller Request</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" ondblclick="alert('Coming soon')" role="tab">More</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        @foreach ($buyers as $list)
                                        <div class="single-feature-events-area dt-2 job-post d-sm-flex align-items-center wow fadeInUpBig"
                                            data-wow-delay="0.2s">
                                            <div class="feature-events-content">
                                                <p>Posted Jobs</p>

                                                <h5>{{ $list->title }}</h5>
                                                <p>{{ $list->desc }}</p>
                                                <div>
                                                    <img class="dashboard-img" src="{{ asset($list->image) }}" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="contact-form  dt-2"  >
                                            <div class="contact-form-title">
                                                  <h6>Create New Job Post</h6>
                                            </div>

                                            <form method="POST" action="{{ route('buyer.store') }}" enctype="multipart/form-data">
                                              @csrf
                                                  <div class="row">
                                                        <div class="col-12">
                                                              <input type="text" name="title" class="form-control"
                                                                    placeholder="Enter your project title" required>
                                                        </div>
                                                      <div class="col-12">
                                                          <textarea  name="desc" id="" cols="30" rows="10" class="form-control"
                                                          placeholder="Describe your project here.."  required></textarea>
                                                      </div>
                                                      <div class="col-12">
                                                        <input type="file" name="image" class="form-control"
                                                               required>
                                                        </div>

                                                        <div class="col-12">
                                                              <button type="submit" class="btn dorne-btn btn-block">Submit</button>
                                                        </div>
                                                  </div>
                                            </form>
                                      </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        @foreach ($delivary_order as $data)
                                        <div class="single-feature-events-area dt-2 job-post d-sm-flex align-items-center wow fadeInUpBig"
                                            data-wow-delay="0.2s">
                                            <div class="feature-events-content">
                                                <p>Posted Jobs</p>


                                                <p>{{ $data->description }}</p>
                                                <div>
                                                    <img class="dashboard-img" src="{{ asset($data->file) }}" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                                        @foreach ( $sellerRequest as $list)
                                        <div class="single-feature-events-area dt-2 job-post d-sm-flex align-items-center">
                                            <div class="feature-events-content">
                                                <h5>Seller Request</h5>
                                                <p>Post tittle: <strong> {{ $list->post_id }} </strong></p>
                                                <a href="{{ route('buyer_req_gig',$list->id) }}">
                                                <p>Seller Name: <strong> {{ $list->seller_id }}  </strong> Click and Hire me !</p>
                                                </a>
                                                <br>
                                                <p> <strong>Seller Massege: </strong> <br> {{ $list->desc }}</p>
                                                <div>
                                                    <img class="dashboard-img" src="{{ asset($list->file) }}" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>


                          </div>
                        </div>
                    </div>
                </div>
          </div>
    </div>
</section>

    {{-- <section class="dorne-welcome-area bg-img bg-overlay"
    style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
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
    </section> --}}
@endsection
