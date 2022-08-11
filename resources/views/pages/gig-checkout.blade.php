@extends('layouts.app2')
@section('content')
    <div class="breadcumb-area bg-img bg-overlay"
        style="background-image:url(http://127.0.0.1:8000/assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
    </div>

    <section class="dorne-about-area section-padding-100">
        <div class="container px-4 py-5 mx-auto">
            <div class="row">
                {{-- <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Order Service</h4>
                    </div>
                </div> --}}
                <div class="col-4 col-md-4 col-lg-4 ">
                    <h4 class="heading">Gig image</h4>
                </div>
                <div class="col-8 col-md-8 col-lg-8">
                    <div class="row text-right">
                        <div class="col-md-6 col-lg-6">
                            <h6 class="mt-2">Details</h6>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <h6 class="mt-2">Price</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center border-top">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="book">
                                <img src="{{ asset($sellers->image) }}" class="book-img">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="checkout-gig-info">
                                <h6 class="mob-text">{{ $sellers->title }}</h6>
                                {{-- <p class="mob-text">{{ $sellers->desc }}</p> --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="row text-right">
                                <h6 class="mob-text">${{ $sellers->price }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="my-auto col-8 col-md-8 col-lg-8">
                    <div class="row text-right">
                        <div class="col-md-4 col-lg-4">
                            <p class="mob-text">Digital</p>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="row mob-text d-flex justify-content-end px-3">
                                <p class="mb-0" id="cnt1">1</p>
                                <div class="d-flex flex-column plus-minus">
                                    <span class="vsm-text plus">+</span>
                                    <span class="vsm-text minus">-</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <h6 class="mob-text">${{ $sellers->price }}</h6>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 col-lg-4  radio-group">
                                <div class="row d-flex px-3 radio">
                                    <img class="pay" src="https://i.postimg.cc/bvqzJ4pq/WIAP9Ku.jpg">
                                    <p class="my-auto">Credit Card</p>
                                </div>
                                <div class="row d-flex px-3 radio gray">
                                    <img class="pay" src="https://i.postimg.cc/vBBb794j/OdxcctP.jpg">
                                    <p class="my-auto">Debit Card</p>
                                </div>
                                <div class="row d-flex px-3 radio gray mb-3">
                                    <img class="pay" src="https://i.postimg.cc/MZnjqf9d/cMk1MtK.jpg">
                                    <p class="my-auto">PayPal</p>
                                </div>
                                <div>
                                    <a href="{{ route('home') }}" class="btn btn-sm bg-light border border-dark">GO BACK</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="row px-2">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Name on Card</label>
                                        <input type="text" id="cname" name="cname" placeholder="Johnny Doe">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Card Number</label>
                                        <input type="text" id="cnum" name="cnum"
                                            placeholder="1111 2222 3333 4444">
                                    </div>
                                </div>
                                <div class="row px-2">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">Expiration Date</label>
                                        <input type="text" id="exp" name="exp" placeholder="MM/YYYY">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="***">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 mt-2">
                                {{-- <div class="row d-flex justify-content-between px-4">
                                    <p class="mb-1 text-left">Subtotal</p>
                                    <h6 class="mb-1 text-right">$23.49</h6>
                                </div>
                                <div class="row d-flex justify-content-between px-4">
                                    <p class="mb-1 text-left">Shipping</p>
                                    <h6 class="mb-1 text-right">$2.99</h6>
                                </div> --}}
                                <div class="row d-flex justify-content-between px-4" id="tax">
                                    <p class="mb-1 text-left">Total</p>
                                    <h6 class="mb-1 text-right">${{ $sellers->price }}</h6>
                                </div>
                                <form action="{{ url('seller-order-request') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="buyer_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="seller_id" value="{{ $sellers->seller_id }}">
                                    <input type="hidden" name="seller_gig_id" value="{{ $sellers->id }}">

                                    <a href="javascript:void(0)" ondblclick="alert('Coming soon')" class="btn dorne-btn btn-block">
                                        <span>
                                            <span id="checkout">Pay Now</span>
                                            <span id="check-amt">${{ $sellers->price }}</span>
                                        </span>
                                    </a> <br> <br>
                                <button class="btn dorne-btn btn-block ">
                                    <span>
                                        <span id="" class="text-center">Order</span>
                                    </span>
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style scoped>
    .text-center{
        text-align: center !important;
    }
    p.my-auto {
        margin-top: 1.3rem;
    }

    .mob-text {
        margin-top: 1em;
    }

    .mt-2 {
        margin-top: 0.3rem;
    }

    .plus-minus {
        position: relative;
    }

    .plus {
        position: absolute;
        top: -4px;
        left: 2px;
        cursor: pointer;
    }

    .minus {
        position: absolute;
        top: 8px;
        left: 5px;
        cursor: pointer;
    }

    .vsm-text:hover {
        color: #FF5252;
    }

    .book,
    .book-img {
        width: 120px;
        height: 180px;
        border-radius: 5px;
    }

    .book {
        margin: 20px 15px 5px 15px;
    }

    .border-top {
        border-top: 1px solid #EEEEEE !important;
        margin-top: 20px;
        padding-top: 15px;
    }

    .card {
        margin: 40px 0px;
        padding: 40px 50px;
        border-radius: 20px;
        border: none;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    input,
    textarea {
        background-color: #F3E5F5;
        padding: 8px 15px 8px 15px;
        width: 100%;
        border-radius: 5px !important;
        box-sizing: border-box;
        border: 1px solid #F3E5F5;
        font-size: 15px !important;
        color: #000 !important;
        font-weight: 300;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #9FA8DA;
        outline-width: 0;
        font-weight: 400;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    .pay {
        width: 80px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #673AB7;
        margin: 10px 20px 10px 0px;
        cursor: pointer;
        box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    .gray {
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        filter: grayscale(100%);
        color: #E0E0E0;
    }

    .gray .pay {
        box-shadow: none;
    }

    #tax {
        border-top: 1px lightgray solid;
        margin-top: 10px;
        padding-top: 10px;
    }

    .btn-blue {
        border: none;
        border-radius: 10px;
        background-color: #673AB7;
        color: #fff;
        padding: 8px 15px;
        margin: 20px 0px;
        cursor: pointer;
    }

    .btn-blue:hover {
        background-color: #311B92;
        color: #fff;
    }

    #checkout {
        float: left;
    }

    #check-amt {
        float: right;
    }

    @media screen and (max-width: 768px) {

        .book,
        .book-img {
            width: 100px;
            height: 150px;
        }

        .card {
            padding-left: 15px;
            padding-right: 15px;
        }

        .mob-text {
            font-size: 13px;
        }

        .pad-left {
            padding-left: 20px;
        }
    }
</style>


<script></script>
