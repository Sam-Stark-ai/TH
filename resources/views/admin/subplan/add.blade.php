@extends('layouts.app.master')

@section('title', 'Dashboard')

@section('css')
@endsection

@section('content')




<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Add Subscription Plan</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">
                        <svg class="stroke-icon">
                          <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">CMS</li>
                    <li class="breadcrumb-item active">Add Plan</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Product Form</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-xl-5 g-3">
                      <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                        <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                          <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="{{asset('AdminAssets/svg/icon-sprite.svg#product-detail')}}"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                <h6>Add Plan Details</h6>
                                <p>Add Plan name & details</p>
                              </div></a></li>




                        </ul>
                      </div>
                      <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                        <div class="tab-content custom-input" id="add-product-pills-tabContent">
                          <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                            <div class="sidebar-body">
                            <form class="row g-3 common-form" method="POST" action="{{ route('admin.subplan.store') }}">
    @csrf

    <div class="col-md-12">
        <label class="form-label" for="planTitle">Plan Title</label>
        <input class="form-control" name="title" id="planTitle" type="text" placeholder="Enter Plan Title" value="{{ old('title') }}">
    </div>

    <div class="col-md-12">
        <label class="form-label" for="planAmount">Plan Amount</label>
        <input class="form-control" name="amount" id="planAmount" type="text" placeholder="Enter Plan Amount" value="{{ old('amount') }}">
    </div>

    <div class="col-md-12">
        <label class="form-label" for="planDuration">Plan Duration</label>
        <input class="form-control" name="duration" id="planDuration" type="number" placeholder="Enter Duration (e.g., 1 month)" value="{{ old('duration') }}">
    </div>

    <div class="col-md-6">
        <button class="btn btn-primary f-w-500" type="submit">Submit</button>
    </div>
</form>

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>



                @endsection

@section('script')

@endsection
