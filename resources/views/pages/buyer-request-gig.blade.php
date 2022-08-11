@extends('layouts.app2')
@section('content')
<div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(http://127.0.0.1:8000/assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div>

<section class="dorne-about-area section-padding-100">
    <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                      <h2>FreelanWeb Recommand Seller <br> <span>{{ $sellers->name }} </span></h2>
                </div>
          </div>

                <div class="col-8 col-md-8 col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="feature-events-content ">
                                    <h5>About gig: </h5>
                                    <h4 class="gig-tittle">{{ $sellers->title }}</h4>
                                    <div>
                                        <img class="" src="{{ asset($sellers->image) }}" alt="Card image cap">
                                    </div><br><br>
                                        <h5>Service Details: </h5>
                                        <p class="about-content"> {{ $sellers->desc }}</p>


                                </div>

                                <div class="feature-events-content">
                                    <h5>About seller: </h5>
                                    <div class="">
                                        <img class="card-img-top" src="{{ asset($user->image) }}" alt="Card image cap">
                                    </div>
                                    <div class="seller-details">
                                        <h5 class="card-title buyer-name">{{ $user->name }}</h5>
                                        <p class="card-text ">{{ $user->email }}</p>
                                        <p class="card-text ">{{ $user->phone }}</p>
                                        <p class="card-text ">{{ $user->address }}</p>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card p-25">
                        <h5>gig starting price: </h5>
                        <div class="card-body team-member about-content">
                            <p class="card-text ">Seller 1hours price <span>${{ $sellers->price }} </span> </p>
                        </div>
                        <a href="{{ route('buyer_gig_checkout',$sellers->id) }}" class="btn dorne-btn btn-block">Hire Now !</a>
                    </div>
                </div>
          </div>
    </div>
</section>
@endsection


<style scoped>
.gig-tittle {
    padding: 15px 0px;
}
.about-content  {
    padding: 2rem 0px 4rem 0;
    font-size: 18px !important;
    line-height: 2 !important;
    margin-bottom: 0;
    color: #848484;
}

.card-img-top {
    width: 250px;
    margin: 15px 0px;
    border-radius: 10px;
}

.p-25 {
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 3px 0px 30px rgb(0 0 0 / 15%);
}
</style>
