
@extends('layouts.app2')
@section('content')

{{-- <div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div> --}}

<div class="dorne-contact-area d-md-flex  bg-img bg-overlay"  id="contact"
style="background-image:url(http://127.0.0.1:8000/assets/img/bg-img/visa/german.jpg)">

    <div class="dorne-map-area equal-height">
        {{-- <img src="{{ asset('assets/img/bg-img/visa/german.jpg') }}" alt=""> --}}
   </div>

<div class="contact-form-area equal-height ">
    <div class="contact-form regi-form">
          <div class="contact-form-title">
            @if (Auth::user()->role==0)
            <h6>Seller Profile Update</h6>
            @elseif (Auth::user()->role==1)
            <h6>Buyer Profile Update</h6>
            @endif
          </div>

          <form method="POST" action="{{ route('buyerProfile.update',$users->id) }}" enctype="multipart/form-data">
            @csrf
                <div class="row">
                      <div class="col-12">
                            <input type="text" name="name" class="form-control"
                                  placeholder="Enter Name" value="{{ Auth::user()->name }}" required>
                      </div>
                    <div class="col-6">
                        <input type="text" name="address" class="form-control"
                              placeholder="Enter Address" value="{{ Auth::user()->address }}" required>
                    </div>
                    <div class="col-6">
                        <input type="number" name="phone" class="form-control"
                              placeholder="Enter phone number" value="{{ Auth::user()->phone }}" required>
                    </div>
                     <div class="col-6">
                         <input type="file" name="image" class="form-control"
                                required>
                     </div>
                     <div class="col-6">
                        <img src="{{ asset($users->image) }}" alt="" style="height: 80px; width: 80px; margin-bottom: 1rem;">
                    </div>

                      <div class="col-12">
                            <button type="submit" class="btn dorne-btn btn-block">Update</button>
                      </div>
                </div>
          </form>
    </div>
</div>
</div>
@endsection
