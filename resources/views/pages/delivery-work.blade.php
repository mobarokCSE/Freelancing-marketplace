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
                        @auth
                            @if (Auth::user()->role == 0)
                                <h2>Hi, Seller <span>{{ Auth::user()->name }} </span></h2>
                            @endif
                        @endauth

                    </div>
                </div>
                <div class="col-md-4 col-lg-4"></div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="contact-form  dt-2"  >
                                            <div class="contact-form-title">
                                                  <h6>Delivery Your Job</h6>
                                            </div>

                                            <form method="POST" action="{{ route('order.delivary') }}" enctype="multipart/form-data">
                                              @csrf
                                              {{-- <input type="text" name="order_id" value="{{  }}"> --}}
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <input type="hidden" name="order_id" value="{{ $seller_order->id }}" >
                                                      </div>
                                                      <div class="row">
                                                      <div class="col-12">
                                                          <textarea  name="description" id="" cols="30" rows="10" class="form-control"
                                                          placeholder="Describe your delivery status.."  required></textarea>
                                                      </div>
                                                      <div class="col-12">
                                                        <input type="file" name="file" class="form-control"
                                                               required>
                                                        </div>

                                                        <div class="col-12">
                                                              <button type="submit" class="btn dorne-btn btn-block">Submit</button>
                                                        </div>
                                                  </div>
                                            </form>
                                      </div>
                </div>
                <div class="col-md-4 col-lg-4"></div>
            </div>
        </div>
    </section>
@endsection
