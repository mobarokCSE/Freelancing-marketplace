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
                    @auth
                    @if (Auth::user()->role==0)
                    <h2>Hi, Seller <span>{{ Auth::user()->name }}</span></h2>
                    @endif
                    @if (Auth::user()->role==1)
                    <h2>Welcome Buyer <span>{{ Auth::user()->name }}</span></h2>
                    @endif
                    @endauth

                </div>
          </div>
                <div class="col-md-4 col-lg-4"></div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card p-10">
                        <div class="card-image">
                            <img class="card-img-top" src="{{ asset(auth()->user()->image) }}" height="500px" width="auto" alt="Card image cap">
                        </div>
                        <div class="card-body team-member">
                            <h5 class="card-title buyer-name">{{ Auth::user( )->name }}</h5>
                            <p class="card-text ">{{ Auth::user( )->email }}</p>
                            <p class="card-text ">{{ Auth::user( )->phone }}
                            </p>
                            <p class="card-text ">{{ Auth::user( )->address }}
                            </p>
                            <a href="{{ route('buyerProfile.edit', auth()->user()->id ) }}" class="btn dorne-btn btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4"></div>
          </div>
    </div>
</section>


@endsection
